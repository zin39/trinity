<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use App\Models\Previllage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use File;


class AllPageController extends Controller
{
    public function homepage() {
        $sections = PageSection::whereIn('slug', ['home-banner-area', 'home-nurses-testimonials-area', 'home-registered-nurse-take-step', 'home-membership-previllage', 'home-latest-news', 'home-how-to-get-started'])->pluck('content', 'slug');
        return view('admin.pages.homepage.index', compact('sections'));
    }

    public function registeredNurses() {
        $sections = PageSection::whereIn('slug', ['registered-nurse-banner', 'registered-nurse-main-content', 'registered-nurse-how-to-qualify', 'registered-nurse-membership-previllage', 'registered-nurse-how-to-get-started'])->pluck('content', 'slug');
        return view('admin.pages.registered_nurses.index', compact('sections'));
    }

    public function healthcareOrganizations() {
        $sections = PageSection::whereIn('slug', ['healthcare-organizations-banner', 'healthcare-organizations-main-content', 'healthcare-organizations-membership-previllage', 'healthcare-organizations-how-to-get-started'])->pluck('content', 'slug');
        return view('admin.pages.healthcare_organizations.index', compact('sections'));
    }

    public function whyChooseUs() {
        $sections = PageSection::whereIn('slug', ['why-choose-us-banner', 'why-choose-us-main-content', 'why-choose-us-membership-previllage','why-choose-us-apply-section'])->pluck('content', 'slug');
        return view('admin.pages.why_choose_us.index', compact('sections'));
    }


    public function privacyPolicy() {
        $sections = PageSection::whereIn('slug', ['privacy-policy-banner', 'privacy-policy-main-content','privacy-policy-apply-section'])->pluck('content', 'slug');
        return view('admin.pages.privacy_policy.index', compact('sections'));
    }

    public function applyNow() {
        $sections = PageSection::whereIn('slug', ['apply-now-banner'])->pluck('content', 'slug');
        return view('admin.pages.apply_now.index', compact('sections'));
    }

    public function save(Request $request) {
        $slug = $request->slug ?? 'home-banner-area';

        $data = $request->{$slug};
        $files = $request->allFiles();

        if(count($files) > 0) {
            foreach($files[$slug] as $key => $file) {
                $imageName = $file->getClientOriginalName();
                $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
                $file->move(public_path() . '/uploads/page/', $fileName);
                $data[$key] = 'uploads/page/'. $fileName;
            }
        }

        PageSection::where('slug', $slug)->update([
            'content' => json_encode($data)
        ]);
        flash('Content has been updated successfully')->success();
        return redirect()->route('admin.pages.'.$request->route, ['active' => $slug]);
    }

    public function savePrevillage(Request $request){
        $slug = $request->slug ?? 'home-banner-area';

        $data = $request->{$slug}["previllage_items"];

        $allIds = Arr::pluck($data,'id');

        $deletes = Previllage::where('section',$slug)->whereNotIn('id',$allIds)->get();
        foreach($deletes as $item){

            if($item->icon1){
                if (File::exists(public_path('uploads/page/'.$item->icon1))) {
                    File::delete(public_path('uploads/page/'.$item->icon1));
                }
            }
            if($item->icon2){
                if (File::exists(public_path('uploads/page/'.$item->icon2))) {
                    File::delete(public_path('uploads/page/'.$item->icon2));
                }
            }
        }
        Previllage::where('section',$slug)->whereNotIn('id',$allIds)->delete();
        
        foreach($data as $item){
            $previllage = new Previllage;
            if(array_key_exists('id', $item) && $item["id"])
                $previllage = Previllage::findOrFail($item["id"]);

            $previllage->title = $item["title"];
            $previllage->description = $item["description"];
            $previllage->section = $slug;

            if(array_key_exists('icon1', $item)){
                $file = $item["icon1"];
                $icon1 = $file->getClientOriginalName();
                $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $icon1);
                $file->move(public_path() . '/uploads/page/', $fileName);
                $previllage->icon1 = $fileName;
            }

            if(array_key_exists('icon2', $item)){
                $file = $item["icon2"];
                $icon2 = $file->getClientOriginalName();
                $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $icon2);
                $file->move(public_path() . '/uploads/page/', $fileName);
                $previllage->icon2 = $fileName;
            }
           
            $previllage->save();
            
        }

        flash('Content has been updated successfully')->success();
        return redirect()->route('admin.pages.'.$request->route, ['active' => $slug]);


    }
}
