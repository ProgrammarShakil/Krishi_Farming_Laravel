<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\JobCircular;
use Carbon\Carbon;
use Illuminate\Http\Request;

class JobCircularController extends Controller
{
    // List all job circulars with pagination
    public function index(Request $request)
    {
        $circulars = JobCircular::all();
    
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
            'position_name' => 'required|string|max:255',
            'vacancy_number' => 'required|integer',
            'job_location' => 'required|string|max:255',
            'educational_requirements' => 'required|string',
            'additional_requirements' => 'required|string',
            'responsibilities' => 'required|string',
            'compensation' => 'required|string',
            'workplace' => 'required|string',
            'employment_status' => 'required|string',
            'gender' => 'nullable|string',
            'published_date' => 'required|date',
            'circular_closing_date' => 'required|date',
        ]);

        try {
            JobCircular::create($validatedData);
            return redirect()->back()->with('success', 'Job Circular created successfully!');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Failed to submit application: ' . $e->getMessage());
        }
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
            'position_name' => 'required|string|max:255',
            'vacancy_number' => 'required|integer',
            'job_location' => 'required|string',
            'requirements' => 'required|string',
            'responsibilities' => 'required|string',
            'compensation' => 'required|string',
            'workplace' => 'required|string',
            'employment_status' => 'required|string',
            'gender' => 'nullable|string',
            'published_date' => 'required|date',
            'circular_closing_date' => 'required|date',
        ]);

        $circular = JobCircular::findOrFail($id);
        $circular->update($request->all());

        return redirect()->route('backend.admin-dashboard.pages.job-circular.index')->with('success', 'Job Circular Updated Successfully');
    }

    // Delete a job circular from the database
    public function destroy($id)
    {
        $circular = JobCircular::findOrFail($id);
        $circular->delete();

        return redirect()->route('backend.admin-dashboard.pages.job-circular.index')->with('success', 'Job Circular Deleted Successfully');
    }
}
