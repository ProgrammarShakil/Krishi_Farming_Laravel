<?php

namespace App\Http\Controllers\admin;

use App\Exports\BrandFranchiseExport;
use App\Http\Controllers\Controller;
use App\Models\BrandFranchiseProposal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class BrandFranchiseController extends Controller
{

    public function index(Request $request)
    {
        $brand_franchise_proposals = BrandFranchiseProposal::all();

        return view('backend.admin-dashboard.pages.brand-franchise-proposal.list', compact('brand_franchise_proposals'));
    }


    // Delete a job circular from the database
    public function destroy($id)
    {
        $circular = BrandFranchiseProposal::findOrFail($id);
        $circular->delete();

        return redirect()->back()->with('success', 'Brand Franchise Proposal Deleted Successfully');
    }

    public function export(){
        return Excel::download(new BrandFranchiseExport, 'brand_franchise_proposals.xlsx');
    }

}
