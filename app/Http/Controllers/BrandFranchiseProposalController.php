<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BrandFranchiseProposal;

class BrandFranchiseProposalController extends Controller
{
    public function create()
    {
        return view('frontend.pages.brand-franchise-proposal.apply');
    }

    public function store(Request $request)
    {
        // Validate the input data
        $validatedData = $request->validate([
            'owner_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'organisation_name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'proposal_details' => 'required|string|max:2000',
            'attachment_name' => 'required|string|max:255',
            'attachments.*' => 'nullable|file|mimes:pdf,docx,xlsx,zip,jpg,jpeg,png,gif|max:20480' // Max 20MB for each file
        ]);

        // Handle file uploads if any
        $uploadedFiles = [];
        if ($request->hasFile('attachments')) {
            foreach ($request->file('attachments') as $file) {
                // Store each file and get its path
                $path = $file->store('attachments', 'public');
                $uploadedFiles[] = $path;
            }
        }

        // Save the brand franchise proposal to the database
        $brand_franchise_proposal = new BrandFranchiseProposal();
        $brand_franchise_proposal->owner_name = $validatedData['owner_name'];
        $brand_franchise_proposal->phone_number = $validatedData['phone_number'];
        $brand_franchise_proposal->email = $validatedData['email'];
        $brand_franchise_proposal->organisation_name = $validatedData['organisation_name'];
        $brand_franchise_proposal->address = $validatedData['address'];
        $brand_franchise_proposal->proposal_details = $validatedData['proposal_details'];
        $brand_franchise_proposal->attachment_name = $validatedData['attachment_name'];
        $brand_franchise_proposal->attachments = json_encode($uploadedFiles); // Save as JSON array
        $brand_franchise_proposal->save();

        // Return success response
        return redirect()->back()->with('success', 'Brand Franchise Proposal submitted successfully!');
    }
}
