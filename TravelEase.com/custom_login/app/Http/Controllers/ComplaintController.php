<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;

class ComplaintController extends Controller
{
    public function create()
    {
        return view('complaint_form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'complaint' => 'required|min:10',
        ]);

        Complaint::create([
            'email' => $request->email,
            'complaint' => $request->complaint,
        ]);

        return redirect()->route('complaint.index')->with('success', 'Complaint submitted successfully!');
    }

    public function index()
    {
        $complaints = Complaint::latest()->get();
        return view('complaint_list', compact('complaints'));
    }
}








