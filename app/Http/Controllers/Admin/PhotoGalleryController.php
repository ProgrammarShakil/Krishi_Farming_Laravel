<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PhotoGalleryController extends Controller
{
    // Display a listing of the photo gallery.
    public function index()
    {
        $galleries = PhotoGallery::orderBy('created_at', 'desc')->get();
        return view('backend.admin-dashboard.pages.photo-gallery.index', compact('galleries'));
    }

    // Show the form for creating a new photo gallery.
    public function create()
    {
        return view('backend.admin-dashboard.pages.photo-gallery.create');
    }

    // Store a newly created photo gallery in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);


        $photo_gallery = new PhotoGallery();
        $photo_gallery->title = $request->title;

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('photos', 'public');
            $photo_gallery->photo = $imagePath;
        }

        $photo_gallery->description = $request->description;
        $photo_gallery->save();

        return redirect()->route('admin.photo_gallery.index')->with('success', 'Photo gallery created successfully.');
    }

    // Display the specified photo gallery.
    public function show($slug)
    {
        $gallery = PhotoGallery::where('slug', $slug)->firstOrFail();
        return view('backend.admin-dashboard.pages.photo-gallery.show', compact('gallery'));
    }

    // Show the form for editing the specified photo gallery.
    public function edit($id)
    {
        $gallery = PhotoGallery::where('id', $id)->firstOrFail();
        return view('backend.admin-dashboard.pages.photo-gallery.edit', compact('gallery'));
    }

    // Update an existing photo gallery in storage.
    public function update(Request $request, $id)
    {
        // Find the photo gallery by ID
        $photo_gallery = PhotoGallery::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        // Update the title
        $photo_gallery->title = $request->title;

        // Handle photo upload if a new photo is provided
        if ($request->hasFile('photo')) {
            
            Storage::disk('public')->delete($photo_gallery->photo);

            $imagePath = $request->file('photo')->store('photos', 'public');
            $photo_gallery->photo = $imagePath;
        }

        // Update the description
        $photo_gallery->description = $request->description;

        // Save the updated photo gallery to the database
        $photo_gallery->save();

        return redirect()->route('admin.photo_gallery.index')->with('success', 'Photo gallery updated successfully.');
    }


    // Remove the specified photo gallery from storage.
    public function destroy($id)
    {
        $gallery = PhotoGallery::where('id', $id)->firstOrFail();
        $gallery->delete();

        return redirect()->route('admin.photo_gallery.index')->with('success', 'Photo gallery deleted successfully.');
    }
}
