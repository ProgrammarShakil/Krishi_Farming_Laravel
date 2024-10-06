<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BusinessProposal;
use Illuminate\Support\Facades\Storage;

class BusinessProposalController extends Controller
{
    // Show the form to create a new business proposal
    public function create()
    {
        return view('frontend.pages.business-proposal.apply');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'owner_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/',
            'organisation_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'proposal_details' => 'required|string|max:2000',
            'attachment_name' => 'required|string|max:255',
            'attachments.*' => 'file|mimes:pdf,docx,xlsx,zip,jpeg,png,jpg,gif|max:2048', // allow multiple attachments
        ]);

        try {
            $attachmentPaths = [];

            // Handle file uploads for multiple attachments
            if ($request->hasFile('attachments')) {
                foreach ($request->file('attachments') as $file) {
                    $attachmentPaths[] = $file->store('attachments', 'public');
                }
            }

            // Create a new Business Proposal
            BusinessProposal::create([
                'owner_name' => $request->owner_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'organisation_name' => $request->organisation_name,
                'address' => $request->address,
                'proposal_details' => $request->proposal_details,
                'attachment_name' => $request->attachment_name,
                'attachments' => json_encode($attachmentPaths), // Store attachment paths as JSON
            ]);

            return redirect()->back()->with('success', 'Proposal submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to submit proposal: ' . $e->getMessage());
        }
    }
}
