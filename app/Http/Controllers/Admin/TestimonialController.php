<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('name')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonial = new Testimonial();
        return view('admin.testimonials.create', compact('testimonial'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image',
            'message' => 'required',
        ]);

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;

        $file = $request->file('image');
        if($file) {
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/testimonial/', $fileName);
            $testimonial->image = 'uploads/testimonial/'. $fileName;
        }

        $testimonial->message = $request->message;
        $testimonial->status = $request->status;
        $testimonial->save();

        flash('Testimonial has been created successfully')->success();
        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image',
            'message' => 'required',
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->name = $request->name;

        $file = $request->file('image');
        if($file) {
            if($testimonial->image && file_exists(public_path($testimonial->image))){
                unlink(public_path($testimonial->image));
            }
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/testimonial/', $fileName);
            $testimonial->image = 'uploads/testimonial/'. $fileName;
        }

        $testimonial->message = $request->message;
        $testimonial->status = $request->status;
        $testimonial->save();

        flash('Testimonial has been updated successfully')->success();
        return redirect()->route('admin.testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        if($testimonial->image && file_exists(public_path($testimonial->image))){
            unlink(public_path($testimonial->image));
        }
        $testimonial->delete();
        flash('Testimonial has been deleted successfully')->success();
        return redirect()->back(); 
    }
}
