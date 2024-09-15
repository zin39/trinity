<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\PageSection;
use Illuminate\Http\Request;

class PageSectionController extends Controller
{
    public function footer() {
        $texts = PageSection::whereIn('slug', ['footer-text-1', 'footer-text-2', 'footer-copyright-text'])->pluck('content', 'slug');
        $opening_hours = PageSection::where('slug', 'opening-hours')->first()->content;
        return view('admin.pages.footer', compact('texts', 'opening_hours'));
    }

    public function saveFooter(Request $request) {
        $texts = $request->texts;
        foreach($texts as $key => $value) {
            PageSection::where('slug', $key)->update([
                'content' => $value
            ]);
        }

        PageSection::where('slug', 'opening-hours')->update([
            'content' => json_encode($request->opening_hours)
        ]);

        flash('Content has been saved successfully')->success();
        return redirect()->back();
    }

    public function commonSections() {
        $sections = PageSection::whereIn('slug', ['start-career-journey-apply', 'start-journey-with-trnty'])->pluck('content', 'slug');
        return view('admin.pages.common-sections', compact('sections'));
    }

    public function saveCommonSections(Request $request) {
        $texts = $request->texts;
        foreach($texts as $key => $value) {
            PageSection::where('slug', $key)->update([
                'content' => $value
            ]);
        }

        PageSection::where('slug', 'opening-hours')->update([
            'content' => json_encode($request->opening_hours)
        ]);

        flash('Content has been saved successfully')->success();
        return redirect()->back();
    }
}
