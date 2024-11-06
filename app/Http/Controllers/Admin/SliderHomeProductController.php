<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SliderHomeProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SliderHomeProductController extends Controller
{
    public function SliderHomeProductView()
    {
        $data = SliderHomeProduct::latest()->get();

        return view('admin.slider_home_product.slider_home_product_view', compact('data'));
    }


    public function  SliderHomeProductCreate()
    {

        return view('admin.slider_home_product.slider_home_product_create');
    }


    public function  SliderHomeProductEdit($id)
    {


        $data = SliderHomeProduct::where('id', $id)->first();

        return view('admin.slider_home_product.slider_home_product_edit', compact('data'));
    }




    public function SliderHomeProductStore(Request $request)
    {
        // Validate the request fields
        $request->validate([
            'title_slider_product_home' => 'required|string',
            'desc_slider_product_home' => 'nullable|string',
            'image_slider_product_home' => 'required|image|mimes:jpeg,png,jpg',
            'image_slider_product_home_seo' => 'nullable|string',

        ]);

        // Handle the image file upload
        if ($request->hasFile('image_slider_product_home')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image_slider_product_home')->getClientOriginalExtension();
            $img = $manager->read($request->file('image_slider_product_home'));

            // Optional: Resize the image if necessary
            // $img = $img->resize(1920, 1080);

            $img->save(base_path('public/uploads/slider_home_product/' . $name_gen));
            $save_url = 'uploads/slider_home_product/' . $name_gen;
        }

        // Create the slider entry in the database
        SliderHomeProduct::create([
            'title_slider_product_home' => $request->title_slider_product_home,
            'desc_slider_product_home' => $request->desc_slider_product_home,
            'image_slider_product_home' => $save_url ?? null,
            'image_slider_product_home_seo' => $request->image_slider_product_home_seo,

            'user_id' => Auth::id(),
        ]);

        // Notification for success
        $notification = [
            'message' => 'Slider Created Successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin_slider_home_product_view')->with($notification);
    }



    public function  SliderHomeProductUpdate(Request $request)
    {
        if ($request->image_slider_product_home) {
            $request->validate([

                'image_slider_product_home' => 'required|image|mimes:jpeg,png,jpg',

            ]);
        }

        $request->validate([
            'title_slider_product_home' => 'required|string',
            'desc_slider_product_home' => 'nullable|string',

            'image_slider_product_home_seo' => 'nullable|string',
        ]);





        $slider = SliderHomeProduct::findOrFail($request->id);

        if ($request->hasFile('image_slider_product_home')) {
            // Delete old image
            if ($slider->image_slider_product_home && file_exists(public_path($slider->image_slider_product_home))) {
                unlink(public_path($slider->image_slider_product_home));
            }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image_slider_product_home')->getClientOriginalExtension();
            $img = $manager->read($request->file('image_slider_product_home'));

            // Uncomment if resizing is required
            // $img = $img->resize(1920, 1281);

            $img->save(public_path('uploads/slider_home_product/' . $name_gen));
            $save_url = 'uploads/slider_home_product/' . $name_gen;
        } else {
            $save_url = $slider->image_slider_product_home; // Keep the existing image if no new one is uploaded
        }

        $slider->update([
            'title_slider_product_home' => $request->title_slider_product_home,
            'desc_slider_product_home' => $request->desc_slider_product_home,
            'image_slider_product_home' => $save_url ?? null,
            'image_slider_product_home_seo' => $request->image_slider_product_home_seo,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Slider Product Updated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->route('admin_slider_home_product_view')->with($notification);
    }



    public function  SliderHomeProductDelete($id)
    {
        // Find the product by ID
        $data = SliderHomeProduct::findOrFail($id);

        // Check if the product has an image and delete it from the storage
        if ($data->image_slider_product_home && file_exists(public_path($data->image_slider_product_home))) {
            @unlink(public_path($data->image_slider_product_home));
        }
        // Delete the product from the database
        $data->delete();

        // Success notification for successful deletion
        $notification = [
            'message' => 'Slider Deleted Successfully.',
            'alert-type' => 'error'
        ];

        return redirect()->back()->with($notification);
    }
}
