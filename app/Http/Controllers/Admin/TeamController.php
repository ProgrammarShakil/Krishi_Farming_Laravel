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
            'facebook_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'youtube_link' => 'nullable|url|max:255',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        Team::create($validated);

        return redirect()->route('admin.teams.list')->with('success', 'Team member added successfully!');
    }

    // EDIT 
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('backend.admin-dashboard.pages.team.edit', compact('team'));
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
            'facebook_link' => 'nullable|url|max:255',
            'linkedin_link' => 'nullable|url|max:255',
            'twitter_link' => 'nullable|url|max:255',
            'instagram_link' => 'nullable|url|max:255',
            'youtube_link' => 'nullable|url|max:255',
        ]);

        // If a new image is uploaded, delete the old one and store the new one
        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $validated['image'] = $request->file('image')->store('images', 'public');
        } else {
            $validated['image'] = $team->image;
        }

        // Update the team member's details
        $team->update($validated);

        return redirect()->route('admin.teams.list')->with('success', 'Team member updated successfully!');
    }

    // DELETE 
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();

        return redirect()->route('admin.teams.list')->with('success', 'Team member deleted successfully!');
    }
}
