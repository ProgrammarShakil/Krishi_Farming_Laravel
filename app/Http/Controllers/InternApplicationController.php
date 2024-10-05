<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternApplication;
use Illuminate\Support\Facades\Storage;

class InternApplicationController extends Controller
{
    // Show the form to create a new intern application
    public function create()
    {
        return view('frontend.pages.intern-application.apply');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'resume' => 'required|mimes:pdf,docx|max:2048',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'education' => 'required|string|max:255',
            'skills' => 'required|string|max:1000',
            'interest' => 'required|string|max:1000',
            'q1' => 'required|string|max:1000',
            'q2' => 'required|string|max:1000',
            'q3' => 'required|string|max:1000',
            'q4' => 'required|string|max:1000',
        ]);
    
        try {
            // Handle file uploads
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $photoPath = $request->file('photo')->store('photos', 'public');
    
            // Create a new Intern Application
            InternApplication::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'resume' => $resumePath,
                'photo' => $photoPath,
                'education' => $request->education,
                'skills' => $request->skills,
                'interest' => $request->interest,
                'q1' => $request->q1, // Store answer to question 1
                'q2' => $request->q2, // Store answer to question 2
                'q3' => $request->q3, // Store answer to question 3
                'q4' => $request->q4, // Store answer to question 4
            ]);
    
            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to submit application: ' . $e->getMessage());
        }
    }
}
