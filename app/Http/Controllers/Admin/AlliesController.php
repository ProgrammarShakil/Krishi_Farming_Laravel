<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Allies;
use Illuminate\Http\Request;

class AlliesController extends Controller
{
    // Display a listing of the allies
    public function index()
    {
        $allies = Allies::all();
        return view('backend.admin-dashboard.pages.allies.index', compact('allies'));
    }

    // Show the form for creating a new ally
    public function create()
    {
        return view('backend.admin-dashboard.pages.allies.create');
    }

    // Store a newly created ally in storage
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'allies_title' => 'required|string|max:255',
            'allies_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('allies_image')) {
            $imagePath = $request->file('allies_image')->store('allies_images', 'public');
        }

        // Create new ally
        Allies::create([
            'allies_title' => $request->allies_title,
            'allies_image' => $imagePath ?? null,
        ]);

        return redirect()->route('admin.allies.index')->with('success', 'Ally created successfully.');
    }

    // Show the form for editing the specified ally
    public function edit($id)
    {
        $ally = Allies::findOrFail($id);
        return view('backend.admin-dashboard.pages.allies.edit', compact('ally'));
    }

    // Update the specified ally in storage
    public function update(Request $request, $id)
    {
        $ally = Allies::findOrFail($id);

        // Validate incoming request data
        $request->validate([
            'allies_title' => 'required|string|max:255',
            'allies_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle file upload if a new image is provided
        if ($request->hasFile('allies_image')) {
            $imagePath = $request->file('allies_image')->store('allies_images', 'public');
            $ally->allies_image = $imagePath;  // Update with new image path
        }

        // Update ally data
        $ally->update([
            'allies_title' => $request->allies_title,
            'allies_image' => $ally->allies_image,  // Retain old image if no new file is uploaded
        ]);

        return redirect()->route('admin.allies.index')->with('success', 'Ally updated successfully.');
    }

    // Remove the specified ally from storage
    public function destroy($id)
    {
        $ally = Allies::findOrFail($id);

        // Optionally, delete the image file from storage if needed
        // Storage::delete('public/' . $ally->allies_image);

        $ally->delete();

        return redirect()->route('admin.allies.index')->with('success', 'Ally deleted successfully.');
    }
}
