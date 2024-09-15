<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $awards = Award::orderBy('name')->get();
        return view('admin.awards.index', compact('awards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $award = new Award();
        return view('admin.awards.create', compact('award'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'required|image',
        ]);

        $award = new Award;
        $award->name = $request->name;

        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . '/uploads/award/', $fileName);
        $award->image = 'uploads/award/'. $fileName;

        $award->status = $request->status;
        $award->link = $request->link;
        $award->save();

        flash('Award has been created successfully')->success();
        return redirect()->route('admin.awards.index');
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
        $award = Award::findOrFail($id);
        return view('admin.awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'image' => 'nullable|image',
        ]);

        $award = Award::findOrFail($id);
        $award->name = $request->name;

        $file = $request->file('image');
        if($file) {
            if($award->image && file_exists(public_path($award->image))){
                unlink(public_path($award->image));
            }
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/award/', $fileName);
            $award->image = 'uploads/award/'. $fileName;
        }

        $award->link = $request->link;
        $award->status = $request->status;
        $award->save();

        flash('Award has been updated successfully')->success();
        return redirect()->route('admin.awards.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $award = Award::findOrFail($id);
        if($award->image && file_exists(public_path($award->image))){
            unlink(public_path($award->image));
        }
        $award->delete();
        flash('Award has been deleted successfully')->success();
        return redirect()->back(); 
    }
}
