<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class FrontendPhotoGalleryController extends Controller
{
    public function index()
    {
        $gallaries = PhotoGallery::orderBy('created_at', 'desc')->get();
        return view('frontend.pages.photo-gallery.index', compact('gallaries'));
    }
}
