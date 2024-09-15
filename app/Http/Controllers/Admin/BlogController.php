<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blog_categories = BlogCategory::all();
        $blogs = Blog::with('categories')->orderBy('created_at', 'desc');
        
        if ($request->search_value != null){
            $blogs = $blogs->where('title', 'like', '%'.$request->search_value.'%');
        }

        if ($request->status != null){
            $blogs = $blogs->where('status', $request->status);
        }

        if ($request->category_id != null){
            $blogs = $blogs->whereHas('categories', function($q) use($request){
                $q->where('id', $request->category_id);
            });
        }

        $blogs = $blogs->paginate(15);

        return view('admin.blogs.index', compact('blogs', 'blog_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog_categories = BlogCategory::all();
        $blog = new Blog;
        return view('admin.blogs.create', compact('blog_categories', 'blog'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_ids' => 'required|array',
            'title' => 'required|max:255',
            'banner' => 'required|image',
        ]);

        $blog = new Blog;
        $blog->title = $request->title;

        $file = $request->file('banner');
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . '/uploads/blog/', $fileName);
        $blog->banner = 'uploads/blog/'. $fileName;

        $blog->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));
        $blog->description = $request->description;
        $blog->status = $request->status;
        
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        
        $blog->save();

        $blog->categories()->attach($request->category_ids);
        flash('Blog post has been created successfully')->success();
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog_categories = BlogCategory::all();
        $blog = Blog::with('categories')->findOrFail($id);
        return view('admin.blogs.edit', compact('blog_categories', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category_ids' => 'required|array',
            'title' => 'required|max:255',
            'banner' => 'nullable|image',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;

        $file = $request->file('banner');
        if($file) {
            if($blog->banner && file_exists(public_path($blog->banner))){
                unlink(public_path($blog->banner));
            }

            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/blog/', $fileName);
            $blog->banner = 'uploads/blog/'. $fileName;
        }

        $blog->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));
        $blog->description = $request->description;
        $blog->status = $request->status;
        
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        
        $blog->save();

        $blog->categories()->sync($request->category_ids);

        flash('Blog post has been updated successfully')->success();
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        if($blog->banner && file_exists(public_path($blog->banner))){
            unlink(public_path($blog->banner));
        }
        $blog->delete();
        flash('Blog post has been deleted successfully')->success();
        return redirect()->back();  
    }
}
