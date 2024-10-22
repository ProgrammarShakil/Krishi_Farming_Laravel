<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $this->validateRequest($request);

        try {
            // Create a new Page instance and save the data
            $page = new Page();
            $page->title = $request->input('title');
            $page->url = $request->input('url'); // Ensure URL is always generated
            $page->content = $request->input('content');

            // Save the page
            $page->save();

            // Redirect with success message
            return redirect()->route('admin.pages.index')->with('success', 'Page created successfully!');
        } catch (\Exception $e) {
            // Catch any errors and redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred while creating the page: ' . $e->getMessage());
        }
    }

    public function show($slug)
    {
        // Use where to find the page by slug
        $page = Page::where('url', $slug)->firstOrFail();
        return view('backend.admin-dashboard.pages.manage-page.show', compact('page'));
    }

    public function edit($slug)
    {
        // Use where to find the page by slug
        $page = Page::where('url', $slug)->firstOrFail();
        return view('backend.admin-dashboard.pages.manage-page.edit', compact('page'));
    }

    public function update(Request $request, $slug)
    {
        $this->validateRequest($request);

        try {
            $page = Page::where('url', $slug)->firstOrFail();
            $page->update([
                'title' => $request->input('title'),
                'url' => $request->input('url'), // Ensure URL is always generated
                'content' => $request->input('content'),
            ]);

            return redirect()->route('admin.pages.index')->with('success', 'Page updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while updating the page: ' . $e->getMessage());
        }
    }

    public function destroy($slug)
    {
        try {
            $page = Page::where('url', $slug)->firstOrFail();
            $page->delete();
            return redirect()->route('admin.pages.index')->with('success', 'Page deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred while deleting the page: ' . $e->getMessage());
        }
    }

    /**
     * Validate the page data.
     *
     * @param  Request  $request
     * @return void
     */
    protected function validateRequest(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ], [
            'title.required' => 'The page name is required.',
            'title.max' => 'The page name cannot exceed 255 characters.',
            'content.required' => 'The content cannot be empty.',
        ]);
    }

    /**
     * Generate a URL from the page title.
     *
     * @param  string  $title
     * @return string
     */

    // protected function generateUrl($title)
    // {
    //     // Convert title to a slug, replacing spaces with slashes
    //     return Str::slug($title, '-'); // Generates a URL with slashes
    // }    




    // SHOW PAGES AT FRONTEND 
    public function showFrontend($slug)
    {
        // Fetch the page based on the slug
        $page = Page::where('url', $slug)->firstOrFail();

        return view('frontend.pages.show-page.index', compact('page'));
    }
}
