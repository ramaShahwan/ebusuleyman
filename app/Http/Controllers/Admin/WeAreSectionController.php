<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WeAreSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class WeAreSectionController extends Controller
{
    public function index()
    {
        $data = WeAreSection::where('id', 1)->first();
        return view('admin.we_are.we_are_edit', compact('data'));
    }




    public function update(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $request->validate([
            'we_are_title' => 'required|string',
            'we_are_date' => 'nullable|date',
            'we_are_button' => 'nullable|string',
            'we_are_button_link' => 'nullable|url',
            'we_are_desc' => 'nullable|string',
            'we_are_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'we_are_image_seo' => 'nullable|string',
            'we_are_video_link' => 'nullable|url',
        ]);

        // Find the existing record by id (you can get the id via $request->id or hardcoded value)
        $weAreSection = WeAreSection::find($request->id);

        if (!$weAreSection) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        // معالجة رفع الصورة إذا وُجدت
        $save_url = $weAreSection->we_are_image; // Keep the old image if a new one is not uploaded
        if ($request->we_are_image) {
            // Delete the old image if a new one is uploaded
            if (file_exists(public_path($weAreSection->we_are_image))) {
                unlink(public_path($weAreSection->we_are_image));  // Delete old image
            }

            $name_gen = hexdec(uniqid()) . '.' . $request->file('we_are_image')->getClientOriginalExtension();

            // Resize and save the new image using ImageManager
            $manager = new ImageManager(new Driver());
            $img = $manager->read($request->file('we_are_image'));
            $img = $img->resize(1920, 1281);  // Resize to the desired dimensions
            $img->save(base_path('public/uploads/we_are/' . $name_gen));  // Save the image

            $save_url = 'uploads/we_are/' . $name_gen;  // Save the new image URL
        }

        // تحديث السجل في قاعدة البيانات
        $weAreSection->update([
            'we_are_title' => $request->we_are_title,
            'we_are_date' => $request->we_are_date,
            'we_are_button' => $request->we_are_button,
            'we_are_button_link' => $request->we_are_button_link,
            'we_are_desc' => $request->we_are_desc,
            'we_are_image' => $save_url,  // Store the new image URL or old one if not changed
            'we_are_image_seo' => $request->we_are_image_seo,
            'we_are_video_link' => $request->we_are_video_link,
        ]);

        $notification = [
            'message' => 'Who We are Updated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->back()->with($notification);
    }
}
