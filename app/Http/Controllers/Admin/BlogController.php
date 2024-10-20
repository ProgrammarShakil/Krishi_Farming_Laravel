<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // Display a listing of the blogs.
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('backend.admin-dashboard.pages.blog.index', compact('blogs'));
    }

    // Show the form for creating a new blog.
    public function create()
    {
        return view('backend.admin-dashboard.pages.blog.create');
    }

    // Store a newly created blog in storage.
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->description = $request->description;

        // Save the blog to the database
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
    }

    // Display the specified blog.
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('backend.admin-dashboard.pages.blog.show', compact('blog'));
    }

    // Show the form for editing the specified blog.
    public function edit($id)
    {
        $blog = Blog::where('id', $id)->firstOrFail();
        return view('backend.admin-dashboard.pages.blog.edit', compact('blog'));
    }

    // Update the specified blog in storage.
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        $blog->title = $request->title;

        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            
            Storage::disk('public')->delete($blog->image);

            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        // Update the blog description
        $blog->description = $request->description;

        // Save the updated blog to the database
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }

    // Remove the specified blog from storage.
    public function destroy($id)
    {
        $blog = Blog::where('id', $id)->firstOrFail();
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully.');
    }
}
