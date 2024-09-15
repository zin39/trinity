<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PageController extends Controller
{
    public function edit($id) {
        $page = Page::with('sub_pages')->findOrFail($id);

        if($page->slug == 'staffing-solutions') {
            $sections = PageSection::whereIn('slug', ['staffing-solutions-section-1', 'staffing-solutions-section-2', 'staffing-solutions-section-3', 'staffing-solutions-section-4', 'staffing-solutions-section-5', 'staffing-solutions-section-6', 'staffing-solutions-section-7', 'staffing-solutions-section-8', 'staffing-solutions-section-9'])->pluck('content', 'slug');
            return view('admin.pages.staffing-solutions.index', compact('page', 'sections'));
        }
        if($page->slug == 'jobs-in-australia') {
            $sections = PageSection::whereIn('slug', ['jobs-in-australia-section-1', 'jobs-in-australia-section-2', 'jobs-in-australia-section-3', 'jobs-in-australia-section-4', 'jobs-in-australia-section-5', 'jobs-in-australia-section-6', 'jobs-in-australia-section-7'])->pluck('content', 'slug');
            return view('admin.pages.jobs-in-australia.index', compact('page', 'sections'));
        }
        if(\View::exists('admin.pages.'.$page->slug)){
            return view('admin.pages.'.$page->slug, compact('page'));
        }
        return view('admin.pages.edit', compact('page'));
    }

    public function update($id, Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();

        flash('Page Updated successfully')->success();

        return redirect()->back();
    }

    public function subpageCreate($page_id) {
        $page = new Page;
        $main = Page::findOrFail($page_id);
        $page_name = $main->title;
        return view('admin.subpages.create', compact('page_id', 'page_name', 'page'));
    }

    public function subpageStore($page_id, Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $page = new Page;
        $page->title = $request->title;
        $page->parent_id = $page_id;
        $page->content = $request->content;
        $page->short_content = $request->short_content;
        $page->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));

        $file = $request->file('image');
        if($file) {
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/page/', $fileName);
            $page->image = 'uploads/page/'. $fileName;
        }

        $page->save();

        flash('Page Added successfully')->success();

        return redirect()->route('admin.pages.edit', $page_id);
    }

    public function subpageEdit($page_id, $subpage_id, Request $request) {
        $main = Page::findOrFail($page_id);
        $page_name = $main->title;
        $page = Page::findOrFail($subpage_id);
        return view('admin.subpages.edit', compact('page_id', 'page_name', 'page'));
    }

    public function subpageUpdate($page_id, $subpage_id, Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $page = Page::findOrFail($subpage_id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->short_content = $request->short_content;
        $page->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));

        $file = $request->file('image');
        if($file) {
            if($page->image && file_exists(public_path($page->image))){
                unlink(public_path($page->image));
            }

            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/page/', $fileName);
            $page->image = 'uploads/page/'. $fileName;
        }

        $page->save();
        flash('Page Updated successfully')->success();

        return redirect()->route('admin.pages.edit', $page_id);
    }

    public function subpageDelete($id, $subpage_id, Request $request) {
        $page = Page::findOrFail($subpage_id);
        if($page->image && file_exists(public_path($page->image))){
            unlink(public_path($page->image));
        }
        $page->delete();

        flash('Page Deleted successfully')->success();

        return redirect()->back();
    }

    public function updatePageSections(Request $request) {
        $data = $request->all();
        $files = $request->allFiles();

        if(count($files) > 0) {
            foreach($files as $key => $val) {
                foreach($val as $k => $val1) {
                    if(is_array($val1)){
                        $val1 = Arr::flatten($val1);
                        foreach($val1 as $k1 => $file) {
                            $imageName = $file->getClientOriginalName();
                            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
                            $file->move(public_path() . '/uploads/page/', $fileName);
                            $data[$key][$k][$k1]['image'] = 'uploads/page/'. $fileName;
                        }
                    }
                    else {
                        $imageName = $val1->getClientOriginalName();
                        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
                        $val1->move(public_path() . '/uploads/page/', $fileName);
                        $data[$key][$k] = 'uploads/page/'. $fileName;
                    }
                }
            }
        }
        
        foreach($data as $key => $val) {
            if(is_array($val)){
                PageSection::where('slug', $key)->update([
                    'content' => json_encode($val)
                ]);
            }
        }

        flash('Page Updated successfully')->success();

        return redirect()->back();
    }
}
