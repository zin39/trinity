<?php

namespace App\Http\Controllers\Admin;

use App\Models\FaqCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = FaqCategory::orderBy('name', 'asc');
        
        $categories = $categories->paginate(15);
        $category = new FaqCategory();
        return view('admin.faq-categories.index', compact('categories', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        
        $category = new FaqCategory;
        
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        
        $category->save();
        
        flash('FAQ category has been created successfully')->success();
        return redirect()->route('admin.faq-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = FaqCategory::find($id);
        return view('admin.faq-categories.edit',  compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = FaqCategory::find($id);
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        $category->save();
        
        
        flash('FAQ category has been updated successfully')->success();
        return redirect()->route('admin.faq-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FaqCategory::where('id', $id)->delete();
        flash('FAQ category has been deleted successfully')->success();
        return redirect()->back();   
    }
}
