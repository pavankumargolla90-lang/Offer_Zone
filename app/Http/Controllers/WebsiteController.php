<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\About;

class WebsiteController extends Controller
{
    public function about()
    {
        $about = About::latest()->first();

        return view('about', compact('about'));
    }
}
=======
Use App\Models\sliders;

class WebsiteController extends Controller
{
    public function Home(Request $request)
    {
        $data = sliders::latest()->get();
        return view('index', compact('data'));
    }
}
>>>>>>> 88e4a15ffcb66530a28d4835cffd59e1cf214efa
