<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use App\Http\Controllers\Controller;
use App\Models\PageSeo;
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
            'footer_about_us_desc' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'first_phone_number' => 'required|string',
            'second_phone_number' => 'required|string',
            'open_shop_hour' => 'required|string',
            'close_shop_hour' => 'required|string',
            'twitter' => 'required|string',
            'map' => 'required|string',
            'footer_subscribe_desc' => 'required|string',
            'linkedin' => 'required|string',
            'instagram' => 'required|string',
            'form_desc_contact' => 'required|string',
            'facebook' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg',
            'logo_seo' => 'required|string',
            'img_icon_browser' => 'nullable|image|mimes:jpeg,png,jpg', // New field for icon
            'about_page_image' => 'nullable|image|mimes:jpeg,png,jpg', // New field for icon
            'about_page_image_Seo' => 'nullable|string', // New field for icon
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
            $img = $img->resize(455, 131);
            $img->save(public_path('uploads/setting/' . $name_gen));
            $logo_url = 'uploads/setting/' . $name_gen;
        } else {
            $logo_url = $setting->logo; // Keep existing logo if not replaced
        }



        // Handle logo upload
        if ($request->hasFile('about_page_image')) {
            // Delete the old logo if it exists
            if ($setting->about_page_image && file_exists(public_path($setting->about_page_image))) {
                @unlink(public_path($setting->about_page_image));
            }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('about_page_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('about_page_image'));
            // $img = $img->resize(1920, 1281); // Resize if needed
            $img->save(public_path('uploads/setting/' . $name_gen));
            $about_page_image_url = 'uploads/setting/' . $name_gen;
        } else {
            $about_page_image_url = $setting->about_page_image; // Keep existing logo if not replaced
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
            $icon_url = $setting->img_icon_browser;
        }


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
            'img_icon_browser' => $icon_url,
            'form_desc_contact' => $request->form_desc_contact,
            'about_page_image_seo' => $request->about_page_image_seo,
            'about_page_image' => $about_page_image_url,


        ]);
        $notification = [
            'message' => 'Setting Udated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->back()->with($notification);

        // Redirect with success message
    }







    public function PageSeoView()
    {

        $data = PageSeo::latest()->get();
        return view('admin.page_seo.page_seo_view', compact('data'));
    }

    // app/Http/Controllers/PageSeoController.php

    public function PageSeoEdit($id)
    {
        // Fetch the specific PageSeo record by ID
        $data = PageSeo::findOrFail($id);

        // Pass the data to the view
        return view('admin.page_seo.page_seo_edit', compact('data'));
    }


    // app/Http/Controllers/PageSeoController.php

    public function PageSeoUpdate(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'keywords' => 'required|string',
            'author' => 'required|string',
        ]);

        $data = PageSeo::findOrFail($request->id);

        $data->update([

            'description' => $request->description,
            'keywords' => $request->keywords,
            'author' => $request->author,
        ]);


        $notification = [
            'message' => 'Setting Udated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->route('admin_page_seo_view')->with($notification);
    }
}
