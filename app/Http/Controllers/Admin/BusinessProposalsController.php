<?php

namespace App\Http\Controllers\admin;

use App\Exports\BusinessProposalsExport;
use App\Http\Controllers\Controller;
use App\Models\BusinessProposal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BusinessProposalsController extends Controller
{

    public function index(Request $request)
    {
        $business_proposals = BusinessProposal::orderBy('created_at', 'desc')->get();

        return view('backend.admin-dashboard.pages.business-proposal.list', compact('business_proposals'));
    }


    // Show a specific Brand Franchise Proposal
    public function show($id)
    {
        $proposal = BusinessProposal::findOrFail($id);

        return view('backend.admin-dashboard.pages.business-proposal.show', compact('proposal'));
    }

    // Delete a job circular from the database
    public function destroy($id)
    {
        $circular = BusinessProposal::findOrFail($id);
        $circular->delete();

        return redirect()->back()->with('success', 'Business Proposal Deleted Successfully');
    }

    public function business_proposal_export()
    {
        return Excel::download(new BusinessProposalsExport, 'business_proposals.xlsx');
    }

}
