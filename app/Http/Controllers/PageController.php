<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('backend.admin-dashboard.pages.manage-page.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.admin-dashboard.pages.manage-page.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255', // Title is required, max 255 characters
            'content' => 'required|string', // Content is required; no length restriction since it's handled by the database
        ], [
            'title.required' => 'The page name is required.',
            'title.max' => 'The page name cannot exceed 255 characters.',
            'content.required' => 'The content cannot be empty.',
        ]);
    
        // Create a new Page instance and save the data
        $page = new Page();
        $page->title = $request->input('title');
        $page->url = $request->input('url');
        $page->content = $request->input('content');
    
        // Save the page
        $page->save();
    
        // Redirect with success message
        return redirect()->route('admin.pages.index')->with('success', 'Page created successfully!');
    }

    public function show(Page $page)
    {
        return view('backend.admin-dashboard.pages.manage-page.show', compact('page'));
    }

    public function edit(Page $page)
    {
        return view('backend.admin-dashboard.pages.manage-page.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $page->update($request->all());
        return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully!');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully!');
    }
}
