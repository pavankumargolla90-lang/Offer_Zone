<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class WebsiteController extends Controller
{
    public function about()
    {
        $about = About::latest()->first();

        return view('about', compact('about'));
    }
}