<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sliders;
use App\Models\About;
class WebsiteController extends Controller
{
    public function about()
    {
        $about = About::latest()->first();

        return view('about', compact('about'));
    }

    public function Home(Request $request)
    {
        $data = sliders::latest()->get();
        return view('index', compact('data'));
    }
}
