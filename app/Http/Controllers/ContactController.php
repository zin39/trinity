<?php

namespace App\Http\Controllers;

use App\Models\ConsultationRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'area_of_enquiry' => 'nullable|string|max:255',
            'comments' => 'nullable|string|max:5000',
        ]);

        ConsultationRequest::create([
            'first_name' => $validated['first_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone'] ?? null,
            'area_of_enquiry' => $validated['area_of_enquiry'] ?? null,
            'comments' => $validated['comments'] ?? null,
        ]);

        return redirect()->back()->with('message', 'Thank you for your enquiry. We will be in touch shortly.');
    }
}
