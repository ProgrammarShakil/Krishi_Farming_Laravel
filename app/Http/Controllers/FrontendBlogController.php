<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.pages.blog.index', compact('blogs'));
    }

    public function details($id) {
        $details = Blog::where('id', $id)->firstOrFail();
        return view('frontend.pages.blog.details', compact('details'));
    }
    
}
