<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use App\Models\Previllage;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AllPageController extends Controller
{
    public function homepage()
    {
        $sections = PageSection::whereIn('slug', [
            'home-hero', 'home-intro', 'home-why-choose-us', 'home-services-preview', 'home-closing-cta',
        ])->pluck('content', 'slug');

        return view('admin.pages.homepage.index', compact('sections'));
    }

    public function aboutPage()
    {
        $sections = PageSection::whereIn('slug', [
            'about-main', 'about-mission', 'about-vision', 'about-values',
        ])->pluck('content', 'slug');

        return view('admin.pages.about.index', compact('sections'));
    }

    public function servicesPage()
    {
        $sections = PageSection::whereIn('slug', [
            'services-main', 'services-items', 'services-cta',
        ])->pluck('content', 'slug');

        return view('admin.pages.services.index', compact('sections'));
    }

    public function informationSessionsPage()
    {
        $sections = PageSection::whereIn('slug', [
            'info-sessions-main', 'info-sessions-graduates', 'info-sessions-nursing', 'info-sessions-cta',
        ])->pluck('content', 'slug');

        return view('admin.pages.information_sessions.index', compact('sections'));
    }

    public function contactPage()
    {
        $sections = PageSection::whereIn('slug', [
            'contact-main', 'contact-details',
        ])->pluck('content', 'slug');

        return view('admin.pages.contact.index', compact('sections'));
    }

    public function save(Request $request)
    {
        $slug = $request->slug ?? 'home-hero';

        $data = $request->{$slug};
        $files = $request->allFiles();

        if (count($files) > 0 && isset($files[$slug])) {
            foreach ($files[$slug] as $key => $file) {
                $imageName = $file->getClientOriginalName();
                $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
                $file->move(public_path() . '/uploads/page/', $fileName);
                $data[$key] = 'uploads/page/' . $fileName;
            }
        }

        PageSection::where('slug', $slug)->update([
            'content' => json_encode($data),
        ]);
        flash('Content has been updated successfully')->success();

        return redirect()->route('admin.pages.' . $request->route, ['active' => $slug]);
    }

    public function savePrevillage(Request $request)
    {
        $slug = $request->slug ?? 'home-hero';

        $data = $request->{$slug}['previllage_items'];

        $allIds = Arr::pluck($data, 'id');

        $deletes = Previllage::where('section', $slug)->whereNotIn('id', $allIds)->get();
        foreach ($deletes as $item) {
            if ($item->icon1) {
                if (File::exists(public_path('uploads/page/' . $item->icon1))) {
                    File::delete(public_path('uploads/page/' . $item->icon1));
                }
            }
            if ($item->icon2) {
                if (File::exists(public_path('uploads/page/' . $item->icon2))) {
                    File::delete(public_path('uploads/page/' . $item->icon2));
                }
            }
        }
        Previllage::where('section', $slug)->whereNotIn('id', $allIds)->delete();

        foreach ($data as $item) {
            $previllage = new Previllage();
            if (array_key_exists('id', $item) && $item['id']) {
                $previllage = Previllage::findOrFail($item['id']);
            }

            $previllage->title = $item['title'];
            $previllage->description = $item['description'];
            $previllage->section = $slug;

            if (array_key_exists('icon1', $item)) {
                $file = $item['icon1'];
                $icon1 = $file->getClientOriginalName();
                $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $icon1);
                $file->move(public_path() . '/uploads/page/', $fileName);
                $previllage->icon1 = $fileName;
            }

            if (array_key_exists('icon2', $item)) {
                $file = $item['icon2'];
                $icon2 = $file->getClientOriginalName();
                $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $icon2);
                $file->move(public_path() . '/uploads/page/', $fileName);
                $previllage->icon2 = $fileName;
            }

            $previllage->save();
        }

        flash('Content has been updated successfully')->success();

        return redirect()->route('admin.pages.' . $request->route, ['active' => $slug]);
    }
}
