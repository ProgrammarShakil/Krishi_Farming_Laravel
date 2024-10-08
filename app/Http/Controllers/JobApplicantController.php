<?php

namespace App\Http\Controllers;

use App\Models\JobApplicant;
use App\Models\JobCircular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JobApplicantController extends Controller
{
    public function index()
    {
        $circulars = JobCircular::all();

        return view('frontend.pages.job-application.list', compact('circulars'));
    }

    public function create($id)
    {
        $job = JobCircular::findOrFail($id); // Fetch the job based on ID

        return view('frontend.pages.job-application.apply', compact('job'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'education' => 'required|string|max:255',
            'skills' => 'required|string',
            'expected_salary' => 'required|string|max:20',
            'q1' => 'required|string',
            'q2' => 'required|string',
            'q3' => 'required|string',
            'q4' => 'required|string',
            'resume' => 'required|file|mimes:pdf,docx|max:2048', // File validation
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            'job_circular_id' => 'required|exists:job_circulars,id', // Ensure this is included
        ]);
    
        // Create the job applicant record
        $applicant = new JobApplicant();
        $applicant->name = $validatedData['name'];
        $applicant->phone = $validatedData['phone_number'];
        $applicant->email = $validatedData['email'];
        $applicant->educational_qualification = $validatedData['education'];
        $applicant->special_skills = $validatedData['skills'];
        $applicant->expected_salary = $validatedData['expected_salary'];
        $applicant->q1 =  $validatedData['q1'];
        $applicant->q2 =  $validatedData['q2'];
        $applicant->q3 =  $validatedData['q3'];
        $applicant->q4 =  $validatedData['q4'];
    
        // Handle file uploads
        if ($request->hasFile('resume')) {
            $applicant->cv = $request->file('resume')->store('resumes'); // Save the resume
        }
    
        if ($request->hasFile('photo')) {
            $applicant->photo = $request->file('photo')->store('photos'); // Save the photo
        }
    
        // Save the applicant
        $applicant->job_circular_id = $validatedData['job_circular_id']; // Ensure to save job_circular_id
        $applicant->save();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
    
}
