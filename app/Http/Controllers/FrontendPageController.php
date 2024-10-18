<?php

namespace App\Http\Controllers;

use App\Models\Segment;
use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function index()
    {
        $segment = Segment::find(1); // Find the segment with id 1
        return view('frontend.pages.index', compact('segment'));
    }
}
