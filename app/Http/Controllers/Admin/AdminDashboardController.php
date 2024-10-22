<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BusinessProposal;
use App\Models\InternApplication;
use App\Models\InvestmentApplicant;
use App\Models\InvestmentProposal;
use App\Models\JobApplicant;
use App\Models\JobCircular;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Team;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $job_circulars = JobCircular::all();
        $job_applicants = JobApplicant::all();
        $investment_applicants = InvestmentApplicant::all();
        $investment_propsals = InvestmentProposal::all();
        $intern_applicants = InternApplication::all();
        $business_proposals = BusinessProposal::all();
        $team_members = Team::all();
        $portfolios = Portfolio::all();
        $blogs = Blog::all();

        return view('backend.admin-dashboard.pages.index', compact(
            'pages',
            'job_circulars',
            'job_applicants',
            'investment_applicants',
            'investment_propsals',
            'intern_applicants',
            'business_proposals',
            'team_members',
            'portfolios',
            'blogs'
        ));
    }
}
