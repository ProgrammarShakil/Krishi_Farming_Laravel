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
        $validatedData = $request->validate([
            'investment_proposal_id' => 'required|exists:investment_proposals,id',
            'proposer_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'proposal_amount' => 'required|numeric',
            'proposal_details' => 'required|string',
            'attachment_name' => 'required|string|max:255',
            'attachments.*' => 'nullable|file|mimes:pdf,docx,xlsx,zip,jpg,jpeg,png,gif|max:2048', // 2MB max for each file
        ]);

        // Create a new investment application record
        $application = InvestmentApplicant::create([
            'investment_proposal_id' => $validatedData['investment_proposal_id'],
            'proposer_name' => $validatedData['proposer_name'],
            'phone_number' => $validatedData['phone_number'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'proposal_amount' => $validatedData['proposal_amount'],
            'proposal_details' => $validatedData['proposal_details'],
            'attachments' => $validatedData['attachments'],
        ]);

        // Handle file uploads
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                // Store each file in a designated folder
                $path = $file->store('attachments/' . $application->id);

                // You can also save the file path in the database if needed
                // Example: $application->attachments()->create(['path' => $path]);
            }
        }

        // Flash a success message to the session
        return redirect()->back()->with('success', 'Your application has been submitted successfully!');
    }
}
