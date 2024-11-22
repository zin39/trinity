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

        if ($request->search_value != null) {
            $applications = $applications->where('title', 'like', '%' . $request->search_value . '%');
        }

        if ($request->status != null) {
            $applications = $applications->where('status', $request->status);
        }

        $applications = $applications->paginate(15);
        $unreadCount = Application::where('is_read', false)->count();
        $lastAppId = Application::max('id') ?? 0; // Get the highest application ID or default to 0

        // Pass $lastAppId to the view
        return view('admin.applications.index', compact('applications', 'unreadCount', 'lastAppId'));
    }

    public function show($id)
    {
        $application = Application::findOrFail($id);
        $unreadCount = Application::where('is_read', false)->count();
        $lastAppId = Application::max('id') ?? 0;
        return view('admin.applications.show', compact('application', 'unreadCount', 'lastAppId'));
    }

    public function markAsRead($id)
    {
        $application = Application::findOrFail($id);

        // Update the 'is_read' column to true
        $application->update(['is_read' => true]);

        // Get the count of remaining unread applications
        $remainingUnreadCount = Application::where('is_read', false)->count();

        // Return JSON response if called via AJAX
        return response()->json([
            'message' => 'Application marked as read',
            'remaining_unread' => $remainingUnreadCount,
        ]);
    }
    public function getUnreadCount()
    {
        $unreadCount = Application::where('is_read', false)->count();
        return response()->json(['unreadCount' => $unreadCount]);
    }
    public function fetchNewApplications(Request $request)
    {
        $request->validate([
                'last_app_id' => 'integer'
            ]);

            // Get the most recent application ID from the request, defaulting to 36
            $lastAppId = $request->input('last_app_id', 36);

            // Fetch applications that are unread and have an ID greater than lastAppId
            $applications = Application::where('is_read', false)
                                        ->where('id', '>', $lastAppId)
                                        ->orderBy('created_at', 'desc')
                                        ->get();

            return response()->json([
                'applications' => $applications
            ]);
    }
}
