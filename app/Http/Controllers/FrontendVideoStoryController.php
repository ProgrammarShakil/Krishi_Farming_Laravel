<?php

namespace App\Http\Controllers;

use App\Models\VideoStory;
use Illuminate\Http\Request;

class FrontendVideoStoryController extends Controller
{
    public function index()
    {
        $vidoes = VideoStory::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.video-story.index', compact('vidoes'));
    }
}
