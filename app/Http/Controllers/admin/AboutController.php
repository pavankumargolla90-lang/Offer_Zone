<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    // View About Page
    public function about()
    {
        $data = About::latest()->get();

        return view('admin.about_form', compact('data'));
    }

    // Store About Data
    public function aboutstore(Request $request)
    {
        $about = new About();

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('Uploads'), $filename);

            $about->image = $filename;
        }

        $about->heading = $request->heading;
        $about->content = $request->input('content');

        $about->save();

        return redirect()->back()
            ->with('success', 'About Added Successfully');
    }

    // Edit Page
    public function editabout($id)
    {
        $data = About::findOrFail($id);

        return view('admin.editabout', compact('data'));
    }

    // Update Data
    public function updateabout(Request $request, $id)
    {
        $about = About::findOrFail($id);

        if ($request->hasFile('image')) {

            if (
                $about->image &&
                file_exists(public_path('Uploads/' . $about->image))
            ) {
                unlink(public_path('Uploads/' . $about->image));
            }

            $file = $request->file('image');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('Uploads'), $filename);

            $about->image = $filename;
        }

        $about->heading = $request->heading;
        $about->content = $request->input('content');

        $about->save();

        return redirect('/about')
            ->with('success', 'About Updated Successfully');
    }

    // Delete Data
    public function deleteabout($id)
    {
        $about = About::findOrFail($id);

        if (
            $about->image &&
            file_exists(public_path('Uploads/' . $about->image))
        ) {
            unlink(public_path('Uploads/' . $about->image));
        }

        $about->delete();

        return redirect()->back()


            ->with('success', 'About Deleted Successfully');

    }


}