<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('backend.admin-dashboard.pages.footer.index', compact('footers'));
    }

    public function create()
    {
        return view('backend.admin-dashboard.pages.footer.create');
    }

    public function store(Request $request)
    {
        // Validation with optional fields (no 'required' rules)
        $validated = $request->validate([
            'footer_title_1' => 'nullable|string|max:255',
            'footer_title_2' => 'nullable|string|max:255',
            'footer_title_3' => 'nullable|string|max:255',
    
            // Footer Title 1 Links
            'footer_title_1_text_1' => 'nullable|string|max:255',
            'footer_title_1_link_1' => 'nullable|string',
            'footer_title_1_text_2' => 'nullable|string|max:255',
            'footer_title_1_link_2' => 'nullable|string',
            'footer_title_1_text_3' => 'nullable|string|max:255',
            'footer_title_1_link_3' => 'nullable|string',
            'footer_title_1_text_4' => 'nullable|string|max:255',
            'footer_title_1_link_4' => 'nullable|string',
            'footer_title_1_text_5' => 'nullable|string|max:255',
            'footer_title_1_link_5' => 'nullable|string',
    
            // Footer Title 2 Links
            'footer_title_2_text_1' => 'nullable|string|max:255',
            'footer_title_2_link_1' => 'nullable|string',
            'footer_title_2_text_2' => 'nullable|string|max:255',
            'footer_title_2_link_2' => 'nullable|string',
            'footer_title_2_text_3' => 'nullable|string|max:255',
            'footer_title_2_link_3' => 'nullable|string',
            'footer_title_2_text_4' => 'nullable|string|max:255',
            'footer_title_2_link_4' => 'nullable|string',
            'footer_title_2_text_5' => 'nullable|string|max:255',
            'footer_title_2_link_5' => 'nullable|string',
    
            // Footer Title 3 Links
            'footer_title_3_text_1' => 'nullable|string|max:255',
            'footer_title_3_link_1' => 'nullable|string',
            'footer_title_3_text_2' => 'nullable|string|max:255',
            'footer_title_3_link_2' => 'nullable|string',
            'footer_title_3_text_3' => 'nullable|string|max:255',
            'footer_title_3_link_3' => 'nullable|string',
            'footer_title_3_text_4' => 'nullable|string|max:255',
            'footer_title_3_link_4' => 'nullable|string',
            'footer_title_3_text_5' => 'nullable|string|max:255',
            'footer_title_3_link_5' => 'nullable|string',
        ]);
    
        Footer::create($validated);
    
        return redirect()->route('admin.footers.index')->with('success', 'Footer created successfully.');
    }
    

    public function edit($id)
    {
        $footer = Footer::findOrFail($id);
        return view('backend.admin-dashboard.pages.footer.edit', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'footer_title_1' => 'required|string|max:255',
            'footer_title_2' => 'required|string|max:255',
            'footer_title_3' => 'required|string|max:255',

            // Footer Title 1 Links
            'footer_title_1_text_1' => 'required|string|max:255',
            'footer_title_1_link_1' => 'required|url',
            'footer_title_1_text_2' => 'required|string|max:255',
            'footer_title_1_link_2' => 'required|url',
            'footer_title_1_text_3' => 'required|string|max:255',
            'footer_title_1_link_3' => 'required|url',
            'footer_title_1_text_4' => 'required|string|max:255',
            'footer_title_1_link_4' => 'required|url',
            'footer_title_1_text_5' => 'required|string|max:255',
            'footer_title_1_link_5' => 'required|url',

            // Footer Title 2 Links
            'footer_title_2_text_1' => 'required|string|max:255',
            'footer_title_2_link_1' => 'required|url',
            'footer_title_2_text_2' => 'required|string|max:255',
            'footer_title_2_link_2' => 'required|url',
            'footer_title_2_text_3' => 'required|string|max:255',
            'footer_title_2_link_3' => 'required|url',
            'footer_title_2_text_4' => 'required|string|max:255',
            'footer_title_2_link_4' => 'required|url',
            'footer_title_2_text_5' => 'required|string|max:255',
            'footer_title_2_link_5' => 'required|url',

            // Footer Title 3 Links
            'footer_title_3_text_1' => 'required|string|max:255',
            'footer_title_3_link_1' => 'required|url',
            'footer_title_3_text_2' => 'required|string|max:255',
            'footer_title_3_link_2' => 'required|url',
            'footer_title_3_text_3' => 'required|string|max:255',
            'footer_title_3_link_3' => 'required|url',
            'footer_title_3_text_4' => 'required|string|max:255',
            'footer_title_3_link_4' => 'required|url',
            'footer_title_3_text_5' => 'required|string|max:255',
            'footer_title_3_link_5' => 'required|url',
        ]);

        $footer = Footer::findOrFail($id);
        $footer->update($validated);

        return redirect()->route('admin.footers.index')->with('success', 'Footer updated successfully.');
    }
}
