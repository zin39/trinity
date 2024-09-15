<?php

namespace App\Http\Controllers\Admin;

use App\Models\EventCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = EventCategory::orderBy('name', 'asc');
        
        $categories = $categories->paginate(15);
        $category = new EventCategory();
        return view('admin.event-categories.index', compact('categories', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        
        $category = new EventCategory;
        
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        
        $category->save();
        
        flash('Event category has been created successfully')->success();
        return redirect()->route('admin.event-categories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = EventCategory::find($id);
        return view('admin.event-categories.edit',  compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category = EventCategory::find($id);
        $category->name = $request->name;
        $category->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->name));
        $category->save();
        
        
        flash('Event category has been updated successfully')->success();
        return redirect()->route('admin.event-categories.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EventCategory::where('id', $id)->delete();
        flash('Event category has been deleted successfully')->success();
        return redirect()->back();   
    }
}
