<?php

namespace App\Http\Controllers\admin;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sliders;

class SliderController extends Controller
{
    public function slider(Request $request)
    {
        $data = sliders::all();
        return view('admin.sliders', compact('data'));
    }
    public function sliderstore(Request $request)
    {
        $slider = new sliders();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Uploads/'), $filename);
            $slider->image = $filename;
        }
        $slider->title = $request->title;
        $slider->heading = $request->heading;
        $slider->save();
        return redirect()->back()->with('success', 'Slider added successfully!');

    }

    public function editslider(Request $request, $id)
    {
        $data = sliders::find($id);
        return view('admin.slidersedit', compact('data'));
    }
    public function updateslider(Request $request, $id)
    {
        $slider = sliders::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Uploads/'), $filename);
            $slider->image = $filename;
        }
        $slider->title = $request->title;
        $slider->heading = $request->heading;
        $slider->save();
        return redirect()->back()->with('success', 'Slider updated successfully!');

    }
    public function deleteslider($id)
    {
        $slider = sliders::find($id);

        if ($slider) {

            // Delete image from Uploads folder
            if (
                $slider->image &&
                file_exists(public_path('Uploads/' . $slider->image))
            ) {

                unlink(public_path('Uploads/' . $slider->image));
            }

            // Delete database record
            $slider->delete();
        }

        return redirect()->back()
            ->with('success', 'Slider deleted successfully!');
    }
}
