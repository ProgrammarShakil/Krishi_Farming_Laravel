<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{

    public function form()
    {
        return view('frontend.pages.contact.form');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:15',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Contact::create($request->all());
        return redirect()->back()->with('success', 'Message Send Successfully');
    }
}
