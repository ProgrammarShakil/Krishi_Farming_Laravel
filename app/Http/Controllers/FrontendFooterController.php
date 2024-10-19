<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FrontendFooterController extends Controller
{
    public function footer()
    {
        $footer = Footer::find(1); // Find the foter with id 1
        return view('frontend.partials.footer', compact('footer'));
    }
}
