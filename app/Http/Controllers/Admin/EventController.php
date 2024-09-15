<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $event_categories = EventCategory::all();
        $events = Event::with('categories')->orderBy('created_at', 'desc');
        
        if ($request->search_value != null){
            $events = $events->where('title', 'like', '%'.$request->search_value.'%');
        }

        if ($request->status != null){
            $events = $events->where('status', $request->status);
        }

        if ($request->category_id != null){
            $events = $events->whereHas('categories', function($q) use($request){
                $q->where('id', $request->category_id);
            });
        }

        $events = $events->paginate(15);

        return view('admin.events.index', compact('events', 'event_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $event_categories = EventCategory::all();
        $event = new Event;
        return view('admin.events.create', compact('event_categories', 'event'));
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

        $event = new Event;
        $event->title = $request->title;

        $file = $request->file('banner');
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . '/uploads/event/', $fileName);
        $event->banner = 'uploads/event/'. $fileName;

        $event->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));
        $event->description = $request->description;
        $event->status = $request->status;
        
        $event->meta_title = $request->meta_title;
        $event->meta_description = $request->meta_description;
        $event->meta_keywords = $request->meta_keywords;
        
        $event->save();

        $event->categories()->attach($request->category_ids);
        flash('Event has been created successfully')->success();
        return redirect()->route('admin.events.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event_categories = EventCategory::all();
        $event = Event::with('categories')->findOrFail($id);
        return view('admin.events.edit', compact('event_categories', 'event'));
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

        $event = Event::findOrFail($id);
        $event->title = $request->title;

        $file = $request->file('banner');
        if($file) {
            if($event->banner && file_exists(public_path($event->banner))){
                unlink(public_path($event->banner));
            }

            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/event/', $fileName);
            $event->banner = 'uploads/event/'. $fileName;
        }

        $event->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->title));
        $event->description = $request->description;
        $event->status = $request->status;
        
        $event->meta_title = $request->meta_title;
        $event->meta_description = $request->meta_description;
        $event->meta_keywords = $request->meta_keywords;
        
        $event->save();

        $event->categories()->sync($request->category_ids);

        flash('Event has been updated successfully')->success();
        return redirect()->route('admin.events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::findOrFail($id);
        if($event->banner && file_exists(public_path($event->banner))){
            unlink(public_path($event->banner));
        }
        $event->delete();
        flash('Event has been deleted successfully')->success();
        return redirect()->back();  
    }
}
