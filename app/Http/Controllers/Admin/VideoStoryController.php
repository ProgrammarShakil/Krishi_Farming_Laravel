<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VideoStory;
use Illuminate\Http\Request;

class VideoStoryController extends Controller
{
    // Display a listing of the videos.
    public function index()
    {
        $videos = VideoStory::orderBy('created_at', 'desc')->get();
        return view('backend.admin-dashboard.pages.video-story.index', compact('videos'));
    }

    // Show the form for creating a new video.
    public function create()
    {
        return view('backend.admin-dashboard.pages.video-story.create');
    }

    // Store a newly created video in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|url',
            'description' => 'nullable|string',
        ]);

        VideoStory::create($request->only(['title', 'video', 'description']));

        return redirect()->route('admin.video_story.index')->with('success', 'Video created successfully.');
    }

    // Display the specified video.
    public function show($id)
    {
        $video = VideoStory::findOrFail($id);
        return view('backend.admin-dashboard.pages.video-story.show', compact('video'));
    }

    // Show the form for editing the specified video.
    public function edit($id)
    {
        $video = VideoStory::findOrFail($id);
        return view('backend.admin-dashboard.pages.video-story.edit', compact('video'));
    }

    // Update the specified video in storage.
    public function update(Request $request, $id)
    {
        $video = VideoStory::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required|url',
            'description' => 'nullable|string',
        ]);

        $video->update($request->only(['title', 'video', 'description']));

        return redirect()->route('admin.video_story.index')->with('success', 'Video updated successfully.');
    }

    // Remove the specified video from storage.
    public function destroy($id)
    {
        $video = VideoStory::findOrFail($id);
        $video->delete();

        return redirect()->route('admin.video_story.index')->with('success', 'Video deleted successfully.');
    }
}
