<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessProposal;
use Illuminate\Http\Request;

class BusinessProposalsController extends Controller
{

    public function index(Request $request)
    {
        $business_proposals = BusinessProposal::all();

        return view('backend.admin-dashboard.pages.business-proposal.list', compact('business_proposals'));
    }


    // Delete a job circular from the database
    public function destroy($id)
    {
        $circular = BusinessProposal::findOrFail($id);
        $circular->delete();

        return redirect()->back()->with('success', 'Business Proposal Deleted Successfully');
    }

}
