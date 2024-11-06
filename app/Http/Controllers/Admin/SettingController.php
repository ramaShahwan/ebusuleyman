<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class SettingController extends Controller
{
    public function index()
    {
        $data = Setting::where('id', 1)->first();
        return view('admin.setting.setting_edit', compact('data'));
    }

    public function update(Request $request)
    {
        // Validate the input data
        $request->validate([
            'footer_about_us_desc' => 'nullable|string',
            'address' => 'nullable|string',
            'email' => 'nullable|email',
            'first_phone_number' => 'nullable|string',
            'second_phone_number' => 'nullable|string',
            'open_shop_hour' => 'nullable|string',
            'close_shop_hour' => 'nullable|string',
            'twitter' => 'nullable|string',
            'map' => 'nullable|string',
            'footer_subscribe_desc' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'instagram' => 'nullable|string',
            'facebook' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg',
            'logo_seo' => 'nullable|string',
            'img_icon_browser' => 'nullable|image|mimes:jpeg,png,jpg', // New field for icon
        ]);

        // Find the footer setting record
        $setting = Setting::findOrFail($request->id);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete the old logo if it exists
            if ($setting->logo && file_exists(public_path($setting->logo))) {
                @unlink(public_path($setting->logo));
            }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('logo')->getClientOriginalExtension();
            $img = $manager->read($request->file('logo'));
            // $img = $img->resize(1920, 1281); // Resize if needed
            $img->save(public_path('uploads/setting/' . $name_gen));
            $logo_url = 'uploads/setting/' . $name_gen;
        } else {
            $logo_url = $setting->logo; // Keep existing logo if not replaced
        }

        // Handle img_icon_browser upload
        if ($request->hasFile('img_icon_browser')) {
            // Delete the old icon if it exists
            if ($setting->img_icon_browser && file_exists(public_path($setting->img_icon_browser))) {
                @unlink(public_path($setting->img_icon_browser));
            }
            $manager = new ImageManager(new Driver());
            $icon_name_gen = hexdec(uniqid()) . '.' . $request->file('img_icon_browser')->getClientOriginalExtension();
            $icon_img = $manager->read($request->file('img_icon_browser'));
            $icon_img->save(public_path('uploads/setting/' . $icon_name_gen));
            $icon_url = 'uploads/setting/' . $icon_name_gen;
        } else {
            $icon_url = $setting->img_icon_browser; // Keep existing icon if not replaced
        }

        // Update footer with new data
        $setting->update([
            'footer_about_us_desc' => $request->footer_about_us_desc,
            'address' => $request->address,
            'email' => $request->email,
            'first_phone_number' => $request->first_phone_number,
            'second_phone_number' => $request->second_phone_number,
            'open_shop_hour' => $request->open_shop_hour,
            'close_shop_hour' => $request->close_shop_hour,
            'twitter' => $request->twitter,
            'map' => $request->map,
            'footer_subscribe_desc' => $request->footer_subscribe_desc,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'logo' => $logo_url,
            'logo_seo' => $request->logo_seo,
            'img_icon_browser' => $icon_url, // Update with new icon URL
        ]);
        $notification = [
            'message' => 'Setting Udated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->back()->with($notification);

        // Redirect with success message
    }
}
