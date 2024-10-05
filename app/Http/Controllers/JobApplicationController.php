<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    // Show the form to create a new job application
    public function create()
    {
        return view('frontend.pages.job-application.apply');
    }

    // Store the newly created job application
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'resume' => 'required|mimes:pdf,docx|max:2048',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Handle file uploads
            $resumePath = $request->file('resume')->store('resumes', 'public');
            $photoPath = $request->file('photo')->store('photos', 'public');

            // Create a new Job Application
            JobApplication::create([
                'name' => $request->name,
                'email' => $request->email,
                'resume' => $resumePath,
                'photo' => $photoPath,
            ]);

            // Set a success notification
            return redirect()->back()->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            // Set an error notification
            return redirect()->back()->with('error', 'There was an error submitting your application. Please try again.');
        }
    }
}
