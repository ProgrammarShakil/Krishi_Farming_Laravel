<?php

namespace App\Http\Controllers\admin;

use App\Exports\JobApplicantsExport;
use App\Exports\JobCircularExport;
use App\Http\Controllers\Controller;
use App\Models\JobApplicant;
use App\Models\JobCircular;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class JobCircularController extends Controller
{
    // List all job circulars
    public function index(Request $request)
    {
        $circulars = JobCircular::orderBy('created_at', 'desc')->get();

        // Manually convert date fields to Carbon instances
        foreach ($circulars as $circular) {
            $circular->published_date = Carbon::parse($circular->published_date);
            $circular->circular_closing_date = Carbon::parse($circular->circular_closing_date);
        }

        return view('backend.admin-dashboard.pages.job-circular.index', compact('circulars'));
    }

    // Show the form to create a new job circular
    public function create()
    {
        return view('backend.admin-dashboard.pages.job-circular.create');
    }

    // Store a new job circular in the database
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'position_name' => 'required|string|max:255',  // Text field, required
            'vacancy_number' => 'required|integer|min:1',  // Number field, positive integer
            'job_location' => 'required|string|max:255',  // Text field, required
            'educational_requirements' => 'required|string',  // Textarea field, required
            'additional_requirements' => 'required|string',  // Textarea field, required
            'responsibilities' => 'required|string',  // Textarea field, required
            'compensation' => 'required|string|max:255',  // Text field, required
            'workplace' => 'required|string|max:255',  // Text field, required
            'employment_status' => 'required|string|in:Full-time,Part-time,Contract,Internship',  // Dropdown field, required
            'gender' => 'nullable|string|in:Any,Male,Female',  // Dropdown field, optional
            'published_date' => 'required|date',  // Date field, required
            'circular_closing_date' => 'required|date|after:published_date',  // Date field, required and must be after published date
        ]);

        try {
            JobCircular::create($validatedData);
            return redirect()->route('admin.job.circular.index')->with('success', 'Job Circular created successfully!');
        } catch (\Throwable $e) {
            return redirect()->route('admin.job.circular.index')->with('error', 'Failed to submit application: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $circular = JobCircular::findOrFail($id);  // Find the job circular by its ID
        return view('backend.admin-dashboard.pages.job-circular.show', compact('circular'));
    }

    // Show the form to edit an existing job circular
    public function edit($id)
    {
        $circular = JobCircular::findOrFail($id);
        return view('backend.admin-dashboard.pages.job-circular.edit', compact('circular'));
    }

    // Update an existing job circular in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'position_name' => 'required|string|max:255',  // Text field, required
            'vacancy_number' => 'required|integer|min:1',  // Number field, must be a positive integer
            'job_location' => 'required|string|max:255',  // Text field, required
            'educational_requirements' => 'required|string',  // Textarea, required
            'additional_requirements' => 'required|string',  // Textarea, required
            'responsibilities' => 'required|string',  // Textarea, required
            'compensation' => 'required|string|max:255',  // Text field, required
            'workplace' => 'required|string|max:255',  // Text field, required
            'employment_status' => 'required|string|in:Full-time,Part-time,Contract,Internship',  // Dropdown field, validate options
            'gender' => 'nullable|string|in:Any,Male,Female',  // Dropdown field, optional
            'published_date' => 'required|date',  // Date field, required
            'circular_closing_date' => 'required|date|after:published_date',  // Date field, required and must be after published date
        ]);


        try {
            $circular = JobCircular::findOrFail($id);
            $circular->update($request->all());
            return redirect()->route('admin.job.circular.index')->with('success', 'Job Circular Updated Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.job.circular.index')->with('error', 'Faile to Update Job Circular' . $e->getMessage());
        }
    }

    // Delete a job circular from the database
    public function destroy($id)
    {
        $circular = JobCircular::findOrFail($id);
        $circular->delete();

        return redirect()->back()->with('success', 'Job Circular Deleted Successfully');
    }


    public function job_circular_export()
    {
        return Excel::download(new JobCircularExport, 'job_circular.xlsx');
    }


    // ************** Job Applicants List **************** //
    public function applicants(Request $request)
    {
        $applicants = JobApplicant::orderBy('created_at', 'desc')->get();

        return view('backend.admin-dashboard.pages.job-circular.applicants', compact('applicants'));
    }

    // Show the list of applicants for a specific job circular
    public function applicants_show($id)
    {
        $applicant = JobApplicant::findOrFail($id);

        return view('backend.admin-dashboard.pages.job-circular.applicants-show', compact('applicant'));
    }


    // Applicants Remove
    public function applicant_destroy($id)
    {
        try {
            $applicant = JobApplicant::findOrFail($id);

            // Delete files if they exist
            if ($applicant->cv) {
                Storage::delete($applicant->cv);
            }

            if ($applicant->photo) {
                Storage::delete($applicant->photo);
            }

            $applicant->delete();

            return redirect()->back()->with('success', 'Applicant deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete applicant: ' . $e->getMessage());
        }
    }

    public function job_applicants_export()
    {
        return Excel::download(new JobApplicantsExport, 'job_applicants.xlsx');
    }

    
    public function job_applicant_download($id)
    {
        $job_applicant= JobApplicant::find($id);

        if (!$job_applicant) {
            return redirect()->back()->with('error', 'Job applicant not found.');
        }

        $pdf = Pdf::loadView('backend.admin-dashboard.pages.job-circular.applicant_pdf', compact('job_applicant'));

        return $pdf->download('job_applicant_id_' . $job_applicant->id . '.pdf');
    }
}
