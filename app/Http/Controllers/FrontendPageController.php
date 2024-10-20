<?php

namespace App\Http\Controllers;

use App\Models\Allies;
use App\Models\Blog;
use App\Models\PhotoGallery;
use App\Models\Portfolio;
use App\Models\Segment;
use App\Models\VideoStory;
use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function index()
    {
        $segment = Segment::find(1); // Find the segment with id 1

        $portfolios = Portfolio::orderBy('created_at', 'desc')->get();

        $allies = Allies::orderBy('created_at', 'desc')->get();

        $gallaries = PhotoGallery::orderBy('created_at', 'desc')->get();

        $videos = VideoStory::orderBy('created_at', 'desc')->get();

        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return view('frontend.pages.index', compact(
            'segment',
            'portfolios',
            'allies',
            'gallaries',
            'videos',
            'blogs'
        ));
    }
}
