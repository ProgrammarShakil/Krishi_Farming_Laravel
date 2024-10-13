<?php

namespace App\Http\Controllers\admin;

use App\Exports\InternApplicationExport;
use App\Http\Controllers\Controller;
use App\Models\InternApplication;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;

class InternController extends Controller
{
    public function index()
    {
        // Fetch all intern applications with specified fields
        $internApplications = InternApplication::all();
        // Pass the data to a view file
        return view('backend.admin-dashboard.pages.intern-application.list', compact('internApplications'));
    }

    public function destroy($id)
    {
        // Find the intern application by ID
        $internApplication = InternApplication::find($id);

        // Check if the application exists
        if (!$internApplication) {
            return redirect()->back()->with('error', 'Intern application not found.');
        }

        // Check and delete the associated photo if it exists
        if ($internApplication->photo && File::exists(public_path('uploads/photos/' . $internApplication->photo))) {
            File::delete(public_path('uploads/photos/' . $internApplication->photo));
        }

        // Check and delete the associated resume if it exists
        if ($internApplication->resume && File::exists(public_path('uploads/resumes/' . $internApplication->resume))) {
            File::delete(public_path('uploads/resumes/' . $internApplication->resume));
        }

        // Delete the intern application from the database
        $internApplication->delete();

        // Optionally, you can set a success message
        return redirect()->back()->with('success', 'Intern application and associated files deleted successfully.');
    }

    public function intern_application_export()
    {
        return Excel::download(new InternApplicationExport, 'intern_applicants.xlsx');
    }
}
