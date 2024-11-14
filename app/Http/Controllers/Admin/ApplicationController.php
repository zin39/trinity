<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    
    public function index(Request $request)
    {
        $applications = Application::orderBy('created_at', 'desc');
        
        if ($request->search_value != null){
            $applications = $applications->where('title', 'like', '%'.$request->search_value.'%');
        }

        if ($request->status != null){
            $applications = $applications->where('status', $request->status);
        }


        $applications = $applications->paginate(15);

        return view('admin.applications.index', compact('applications'));
    }

    public function show($application )
    {
        $application = Application::findOrFail($application);
        return view('admin.applications.show', compact('application'));

    }
}
