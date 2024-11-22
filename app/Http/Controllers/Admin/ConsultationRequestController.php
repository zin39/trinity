<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ConsultationRequest;

class ConsultationRequestController extends Controller
{

    public function index(Request $request)
    {
        $consultationRequests = ConsultationRequest::orderBy('created_at', 'desc');

        if ($request->search_value != null){
            $consultationRequests = $consultationRequests->where('title', 'like', '%'.$request->search_value.'%');
        }

        if ($request->status != null){
            $consultationRequests = $consultationRequests->where('status', $request->status);
        }


        $consultationRequests = $consultationRequests->paginate(15);

        return view('admin.consultation-requests.index', compact('consultationRequests'));
    }

    public function show($consultationRequest )
    {
        $consultationRequest = ConsultationRequest::findOrFail($consultationRequest);
        return view('admin.consultation-requests.show', compact('consultationRequest'));

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
