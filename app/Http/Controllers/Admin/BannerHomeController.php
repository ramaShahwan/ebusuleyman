<?php

namespace App\Http\Controllers\Admin;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Controllers\Controller;
use App\Models\BannerHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class BannerHomeController extends Controller
{
    public function index()
    {
        $data = BannerHome::where('id', 1)->first();
        return view('admin.banner.banner_edit', compact('data'));
    }







    public function update(Request $request)
    {




        if ($request->image_banner) {

            // Validate the form data
            $request->validate([
                'image_banner' => 'required|image|mimes:jpeg,png,jpg'
            ]);
        }

        // Validate the form data
        $request->validate([
            'short_title' => 'required|string',
            'image_banner_seo' => 'required|string',
            'long_title' => 'nullable|string',
            'left_btn_title' => 'nullable|string',
            'left_btn_link' => 'nullable|url',
            'right_btn_title' => 'nullable|string',
            'right_btn_link' => 'nullable|url',
        ]);

        // Handle image upload
        $banner =  BannerHome::where('id', 1)->first();
        if ($request->image_banner) {
            if ($banner->image_banner && file_exists(public_path($banner->image_banner))) {
                @unlink(public_path($banner->image_banner));
            }


            $manager = new ImageManager(new Driver());


            $name_gen = hexdec(uniqid()) . '.' . $request->file('image_banner')->getClientOriginalExtension();

            $img = $manager->read($request->file('image_banner'));

            $img = $img->resize(1920, 1281);

            $img->save(base_path('public/uploads/banner_home/' . $name_gen));

            $save_url = 'uploads/banner_home/' . $name_gen;



            // Update an existing BannerHome record where id is 1
            BannerHome::where('id', 1)->update([
                'image_banner' => $save_url,
                'image_banner_seo' => $request->image_banner_seo,
                'short_title' => $request->short_title,
                'long_title' => $request->long_title,
                'left_btn_title' => $request->left_btn_title,
                'left_btn_link' => $request->left_btn_link,
                'right_btn_title' => $request->right_btn_title,
                'right_btn_link' => $request->right_btn_link,
                'user_id' => Auth::id(),

            ]);

            $notification = [
                'message' => 'Banner Updated Successfully with new Image.',
                'alert-type' => 'info'
            ];

            // Redirect with a success message
            return redirect()->back()->with($notification);
        } else {

            // Update an existing BannerHome record where id is 1
            BannerHome::where('id', 1)->update([
                'image_banner_seo' => $request->image_banner_seo,
                'short_title' => $request->short_title,
                'long_title' => $request->long_title,
                'left_btn_title' => $request->left_btn_title,
                'left_btn_link' => $request->left_btn_link,
                'right_btn_title' => $request->right_btn_title,
                'right_btn_link' => $request->right_btn_link,
                'user_id' => Auth::id(),
            ]);
        }

        $notification = [
            'message' => 'Banner Updated Successfully with new Image.',
            'alert-type' => 'info'
        ];
        // Redirect with a success message
        return redirect()->back()->with($notification);
    }
}
