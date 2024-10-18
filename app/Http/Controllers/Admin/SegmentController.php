<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Segment;
use Illuminate\Http\Request;

class SegmentController extends Controller
{
   /**
     * Display a listing of the segments.
     */
    public function index()
    {
        $segment = Segment::find(1); // Find the segment with id 1
        return view('backend.admin-dashboard.pages.segment.index', compact('segment'));
    }

    /**
     * Show the form for editing the specified segment.
     */
    public function edit($id)
    {
        // Find the segment or fail
        $segment = Segment::findOrFail($id);
        return view('backend.admin-dashboard.pages.segment.edit', compact('segment'));
    }

    /**
     * Update the specified segment in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'main_segment_name' => 'required|string|max:255',
            'main_segment_link' => 'required|string|max:255',
            'segment_1_name' => 'required|string|max:255',
            'segment_1_link' => 'required|string|max:255',
            'segment_2_name' => 'required|string|max:255',
            'segment_2_link' => 'required|string|max:255',
            'segment_3_name' => 'required|string|max:255',
            'segment_3_link' => 'required|string|max:255',
            'segment_4_name' => 'required|string|max:255',
            'segment_4_link' => 'required|string|max:255',
            'segment_5_name' => 'required|string|max:255',
            'segment_5_link' => 'required|string|max:255',
            'segment_6_name' => 'required|string|max:255',
            'segment_6_link' => 'required|string|max:255',
            'segment_7_name' => 'required|string|max:255',
            'segment_7_link' => 'required|string|max:255',
        ]);

        // Find the segment or fail
        $segment = Segment::findOrFail($id);

        // Update the segment
        $segment->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('admin.segments.index')->with('success', 'Segment updated successfully.');
    }
}