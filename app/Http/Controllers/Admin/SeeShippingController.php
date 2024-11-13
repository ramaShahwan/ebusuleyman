<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeeShipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SeeShippingController extends Controller
{
    public function index()
    {
        $data = SeeShipping::where('id', 1)->first();
        return view('admin.see_shipping.see_shipping_edit', compact('data'));
    }

    public function update(Request $request)
    {
        // Validate input data
        $request->validate([
            'title' => 'required|string',
            'desc' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'image_seo' => 'nullable|string',
        ]);

        // Find the existing record by ID
        $SeeShipping = SeeShipping::findOrFail($request->id);

        // Handle image upload if provided
        $save_url = $SeeShipping->image; // retain existing image if not uploading a new one
        if ($request->image) {
            // Delete old image if it exists
            if ($SeeShipping->image && file_exists(public_path($SeeShipping->image))) {
                unlink(public_path($SeeShipping->image));
            }

            // Process and save new image
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();

            // Ensure you have an ImageManager setup properly for handling image manipulation
            $manager = new ImageManager(new Driver());
            $img = $manager->read($request->file('image'));
            // $img = $img->resize(1920, 1281);
            $img->save(public_path('uploads/see_shipping/' . $name_gen));

            $save_url = 'uploads/see_shipping/' . $name_gen;
        }

        // Update the record with new data
        $SeeShipping->update([
            'title' => $request->title,
            'desc' => $request->desc,
            'image' => $save_url,
            'image_seo' => $request->image_seo,
            'user_id' => Auth::id(),
        ]);

        // Notification message for successful update
        $notification = [
            'message' => 'See Shipping Updated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->back()->with($notification);
    }
}
