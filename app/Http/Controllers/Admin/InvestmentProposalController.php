<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\InvestmentApplicant;
use App\Models\InvestmentProposal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvestmentProposalController extends Controller
{
    // List all investment proposals
    public function index(Request $request)
    {
        $proposals = InvestmentProposal::all();
        return view('backend.admin-dashboard.pages.investment-proposal.index', compact('proposals'));
    }

    // Show the form to create a new investment proposal
    public function create()
    {
        return view('backend.admin-dashboard.pages.investment-proposal.create');
    }

    // Store a new investment proposal in the database
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'project_name' => 'required|string|max:255',  // Project name is required and max 255 chars
            'project_details' => 'required|string',  // Project details are required
            'video' => 'nullable|string|max:255',  // Validate optional video field for YouTube URLs
        ]);
    
        try {
            // Create a new investment proposal with the validated data
            InvestmentProposal::create($validatedData);
    
            // Redirect back to the index page with success message
            return redirect()->route('admin.investment.proposal.index')->with('success', 'Investment proposal created successfully!');
        } catch (\Throwable $e) {
            // Catch any errors and return an error message
            return redirect()->route('admin.investment.proposal.index')->with('error', 'Failed to create investment proposal: ' . $e->getMessage());
        }
    }
    
    

    // Show the form to edit an existing investment proposal
    public function edit($id)
    {
        $proposal = InvestmentProposal::findOrFail($id);
        return view('backend.admin-dashboard.pages.investment-proposal.edit', compact('proposal'));
    }

    // Update an existing investment proposal in the database
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
            'proposal_closing_date' => 'required|date|after:published_date',  // Date field, required and must be after published date
        ]);


        try {
            $proposal = InvestmentProposal::findOrFail($id);
            $proposal->update($request->all());
            return redirect()->route('admin.investment.proposal.index')->with('success', 'investment proposal Updated Successfully');
        } catch (\Throwable $e) {
            return redirect()->route('admin.investment.proposal.index')->with('error', 'Faile to Update investment proposal' . $e->getMessage());
        }
    }

    // Delete a investment proposal from the database
    public function destroy($id)
    {
        $proposal = InvestmentProposal::findOrFail($id);
        $proposal->delete();

        return redirect()->back()->with('success', 'investment proposal Deleted Successfully');
    }


    // Applicants List 
    public function applicants(Request $request)
    {
        $applicants = InvestmentApplicant::all();

        return view('backend.admin-dashboard.pages.investment-proposal.applicants', compact('applicants'));
    }

    // Applicants Remove
    public function applicant_destroy($id)
    {
        try {
            $applicant = InvestmentApplicant::findOrFail($id);

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
}
