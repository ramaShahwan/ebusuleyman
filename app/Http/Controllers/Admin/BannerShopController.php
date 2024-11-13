<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class BannerShopController extends Controller
{
    public function index()
    {
        $data = BannerShop::where('id', 1)->first();
        return view('admin.banner_shop.banner_shop_edit', compact('data'));
    }

    public function update(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $request->validate([
            'sale_title' => 'required|string',
            'sale_desc' => 'nullable|string',
            'sale_button' => 'nullable|string',
            'sale_button_link' => 'nullable|url',
            'sale_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'sale_image_seo' => 'nullable|string',
        ]);

        // Find the existing record by ID
        $bannerShop = BannerShop::findOrFail($request->id);

        // معالجة رفع الصورة إذا وُجدت
        $save_url = $bannerShop->sale_image; // keep existing image if not uploading a new one
        if ($request->sale_image) {
            // Delete the old image if it exists
            if ($bannerShop->sale_image && file_exists(public_path($bannerShop->sale_image))) {
                unlink(public_path($bannerShop->sale_image));
            }

            // Process and save new image
            $name_gen = hexdec(uniqid()) . '.' . $request->file('sale_image')->getClientOriginalExtension();

            $manager = new ImageManager(new Driver());
            $img = $manager->read($request->file('sale_image'));
            $img = $img->resize(1920, 1281);
            $img->save(public_path('uploads/banner_shop/' . $name_gen));

            $save_url = 'uploads/banner_shop/' . $name_gen;
        }

        // Update the record with new data
        $bannerShop->update([
            'sale_title' => $request->sale_title,
            'sale_desc' => $request->sale_desc,
            'sale_button' => $request->sale_button,
            'sale_button_link' => $request->sale_button_link,
            'sale_image' => $save_url,
            'sale_image_seo' => $request->sale_image_seo,
            'user_id' => Auth::id(),
        ]);

        // Notification message for successful update
        $notification = [
            'message' => 'Banner Shop Updated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->back()->with($notification);
    }

}
