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
}
