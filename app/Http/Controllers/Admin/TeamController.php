<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    // LIST 
    public function index()
    {
        $teams = Team::orderBy('created_at', 'desc')->get();
        return view('backend.admin-dashboard.pages.team.list', compact('teams'));
    }

    // CREATE 
    public function create()
    {
        return view('backend.admin-dashboard.pages.team.create');
    }

    // STORE 
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        Team::create($validated);

        return redirect()->route('admin.teams.index')->with('success', 'Team member added successfully!');
    }

    // EDIT 
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.teams.edit', compact('team'));
    }

    // UPDATE 
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // If a new image is uploaded, delete the old one and store the new one
        if ($request->hasFile('image')) {
            // Delete the old image
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            // Store the new image
            $validated['image'] = $request->file('image')->store('images', 'public');
        } else {
            // If no new image, keep the old one
            $validated['image'] = $team->image;
        }

        // Update the team member's details
        $team->update($validated);

        return redirect()->route('admin.teams.index')->with('success', 'Team member updated successfully!');
    }

    // DELETE 
    public function destroy($id)
    {
        // Find the team member by ID
        $team = Team::findOrFail($id);

        // If the team member has an image, delete it from storage
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        // Delete the team member from the database
        $team->delete();

        return redirect()->route('admin.teams.index')->with('success', 'Team member deleted successfully!');
    }
}
