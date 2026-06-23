<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\sliders;

class WebsiteController extends Controller
{
    public function Home(Request $request)
    {
        $data = sliders::latest()->get();
        return view('index', compact('data'));
    }
}
