<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderBy('name')->get();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $team = new Team();
        return view('admin.teams.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required',
            'image' => 'required|image',
        ]);

        $team = new Team;
        $team->name = $request->name;

        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
        $file->move(public_path() . '/uploads/team/', $fileName);
        $team->image = 'uploads/team/'. $fileName;

        $team->designation = $request->designation;
        $team->facebook_link = $request->facebook_link;
        $team->instagram_link = $request->instagram_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->twitter_link = $request->twitter_link;
        $team->details = $request->details;
        $team->status = $request->status;
        $team->save();

        flash('Team member has been created successfully')->success();
        return redirect()->route('admin.teams.index');
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
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'designation' => 'required',
            'image' => 'nullable|image',
        ]);

        $team = Team::findOrFail($id);
        $team->name = $request->name;

        $file = $request->file('image');
        if($file) {
            if($team->image && file_exists(public_path($team->image))){
                unlink(public_path($team->image));
            }
            $imageName = $file->getClientOriginalName();
            $fileName = date('Y-m-d-h-i-s') . '-' . preg_replace('[ ]', '-', $imageName);
            $file->move(public_path() . '/uploads/team/', $fileName);
            $team->image = 'uploads/team/'. $fileName;
        }

        $team->designation = $request->designation;
        $team->facebook_link = $request->facebook_link;
        $team->instagram_link = $request->instagram_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->twitter_link = $request->twitter_link;
        $team->details = $request->details;
        $team->status = $request->status;
        $team->save();

        flash('Team member has been updated successfully')->success();
        return redirect()->route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);
        if($team->image && file_exists(public_path($team->image))){
            unlink(public_path($team->image));
        }
        $team->delete();
        flash('Team member has been deleted successfully')->success();
        return redirect()->back(); 
    }
}
