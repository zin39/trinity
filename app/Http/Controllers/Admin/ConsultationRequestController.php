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

        $lastAppId = ConsultationRequest::max('id') ?? 0;

        return view('admin.consultation-requests.index', compact('consultationRequests', 'lastAppId'));
    }

    public function show($consultationRequest )
    {
        $consultationRequest = ConsultationRequest::findOrFail($consultationRequest);
        return view('admin.consultation-requests.show', compact('consultationRequest'));

    }

    public function markAsRead($id)
    {
        $consultationRequest = ConsultationRequest::findOrFail($id);

        $consultationRequest->update(['is_read' => true]);

        $remainingUnreadCount = ConsultationRequest::where('is_read', false)->count();

        return response()->json([
            'message' => 'Consultation request marked as read',
            'remaining_unread' => $remainingUnreadCount,
        ]);
    }

    public function getUnreadCount()
    {
        $unreadCount = ConsultationRequest::where('is_read', false)->count();

        return response()->json(['unreadCount' => $unreadCount]);
    }

    public function fetchNewApplications(Request $request)
    {
        $request->validate([
            'last_app_id' => 'integer',
        ]);

        $lastAppId = $request->input('last_app_id', 0);

        $consultationRequests = ConsultationRequest::where('is_read', false)
            ->where('id', '>', $lastAppId)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json([
            'applications' => $consultationRequests,
        ]);
    }
}
