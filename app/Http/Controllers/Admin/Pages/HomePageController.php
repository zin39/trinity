<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        $sections = PageSection::whereIn('slug', ['home-banner-area', 'home-3-core-values', 'home-journey', 'home-featured-sections', 'home-hire-now'])->pluck('content', 'slug');
        return view('admin.pages.homepage.index', compact('sections'));
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
        return redirect()->route('admin.pages.homepage', ['active' => $slug]);
    }
}
