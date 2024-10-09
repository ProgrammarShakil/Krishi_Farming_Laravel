<?php

namespace App\Http\Controllers;

use App\Models\InvestmentApplicant;
use App\Models\InvestmentProposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvestApplicantController extends Controller
{
    public function index()
    {
        $investmentProposals = InvestmentProposal::all();

        return view('frontend.pages.investment-application.list', compact('investmentProposals'));
    }

    public function create($id)
    {
        $investment = InvestmentProposal::findOrFail($id); // Fetch the investment based on ID

        return view('frontend.pages.investment-application.apply', compact('investment'));
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'investment_proposal_id' => 'required|exists:investment_proposals,id',
            'proposer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'proposal_amount' => 'required|numeric',
            'proposal_details' => 'required|string',
            'attachments.*' => 'nullable|file|mimes:pdf,docx,xlsx,zip,jpg,jpeg,png,gif|max:2048', // 2MB max for each file
        ]);
    
        // Handle file uploads
        $attachmentPaths = []; // Initialize an array to hold the file paths
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                // Store each file in a designated folder
                $path = $file->store('attachments/' . $request->investment_proposal_id, 'public'); // Use the proposal ID
                $attachmentPaths[] = $path; // Add the file path to the attachment paths array
            }
        }
    
        // Create a new investment application record with the JSON-encoded attachment paths
        InvestmentApplicant::create([
            'investment_proposal_id' => $request->investment_proposal_id,
            'proposer_name' => $request->proposer_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'proposal_amount' => $request->proposal_amount,
            'proposal_details' => $request->proposal_details,
            'attachments' => json_encode($attachmentPaths), // JSON-encode the attachment paths
        ]);
    
        // Flash a success message to the session
        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
    
    
}
