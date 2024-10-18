<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class FrontendTeamController extends Controller
{
    public function index()
    {
        $team = Team::OrderBy('created_at', 'desc')->get();
        return view('frontend.pages.team.list', compact('team'));
    }
}
