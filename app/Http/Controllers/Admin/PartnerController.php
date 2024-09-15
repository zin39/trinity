<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner::orderBy('name')->get();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $partner = new Partner();
        return view('admin.partners.create', compact('partner'));
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

        $partner = new Partner;
        $partner->name = $request->name;

        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . '/uploads/partner/', $fileName);
        $partner->image = 'uploads/partner/'. $fileName;

        $partner->details = $request->details;
        $partner->link = $request->link;
        $partner->status = $request->status;
        $partner->save();

        flash('Partner has been created successfully')->success();
        return redirect()->route('admin.partners.index');
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
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
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

        $partner = Partner::findOrFail($id);
        $partner->name = $request->name;

        $file = $request->file('image');
        if($file) {
            if($partner->image && file_exists(public_path($partner->image))){
                unlink(public_path($partner->image));
            }
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/partner/', $fileName);
            $partner->image = 'uploads/partner/'. $fileName;
        }

        $partner->details = $request->details;
        $partner->link = $request->link;
        $partner->status = $request->status;
        $partner->save();

        flash('Partner has been updated successfully')->success();
        return redirect()->route('admin.partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);
        if($partner->image && file_exists(public_path($partner->image))){
            unlink(public_path($partner->image));
        }
        $partner->delete();
        flash('Partner has been deleted successfully')->success();
        return redirect()->back(); 
    }
}
