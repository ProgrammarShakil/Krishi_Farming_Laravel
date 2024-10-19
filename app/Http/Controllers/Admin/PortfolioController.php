<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    // Display a listing of the portfolios
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backend.admin-dashboard.pages.portfolio.index', compact('portfolios'));
    }

    // Show the form for creating a new portfolio
    public function create()
    {
        return view('backend.admin-dashboard.pages.portfolio.create');
    }

    // Store a newly created portfolio in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('portfolios', 'public');

        // Create portfolio
        Portfolio::create([
            'title' => $validatedData['title'],
            'link' => $validatedData['link'],
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    // Show the form for editing the specified portfolio
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('backend.admin-dashboard.pages.portfolio.edit', compact('portfolio'));
    }

    // Update the specified portfolio in storage
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update the portfolio fields
        $portfolio->title = $validatedData['title'];
        $portfolio->link = $validatedData['link'];

        // If a new image is uploaded, handle image upload and replace the old image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolios', 'public');
            $portfolio->image = $imagePath;
        }

        $portfolio->save();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    // Remove the specified portfolio from storage
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // Delete the portfolio image from storage if needed
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }

        $portfolio->delete();

        return redirect()->route('admin.portfolios.index')->with('success', 'Portfolio deleted successfully.');
    }
}