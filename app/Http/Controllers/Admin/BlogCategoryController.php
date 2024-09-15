<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = BlogCategory::orderBy('name', 'asc');
        
        $categories = $categories->paginate(15);
        $category = new BlogCategory();
        return view('admin.blog-categories.index', compact('categories', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        
        $category = new BlogCategory;
        
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        
        $category->save();
        
        flash('Blog category has been created successfully')->success();
        return redirect()->route('admin.blog-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = BlogCategory::find($id);
        return view('admin.blog-categories.edit',  compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = BlogCategory::find($id);
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        $category->save();
        
        
        flash('Blog category has been updated successfully')->success();
        return redirect()->route('admin.blog-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BlogCategory::where('id', $id)->delete();
        flash('Blog category has been deleted successfully')->success();
        return redirect()->back();   
    }
}
