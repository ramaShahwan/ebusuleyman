<?php

namespace App\Http\Controllers\Admin;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Http\Controllers\Controller;
use App\Models\DealOfSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function DealOfEdit()
    {
        $data = DealOfSection::where('id', 1)->first();
        return view('admin.dealof.deal_of_edit', compact('data'));
    }


    public function DealOfUpdate(Request $request)
    {

        // Validate the fields
        if ($request->image_deal_of_month) {
            $request->validate([
                'image_deal_of_month' => 'required|image|mimes:jpeg,png,jpg'
            ]);
        }

        $request->validate([
            'image_deal_of_month_seo' => 'required|string',
            'deal_of_month_title_circle' => 'required|string',
            'deal_of_the_month_title' => 'required|string',
            'short_title' => 'required|string',
            'logn_desc' => 'nullable|string',
            'btn_title' => 'nullable|string',
            'btn_link' => 'nullable|url',
        ]);

        // Fetch the DealOfSection entry
        $banner = DealOfSection::where('id', 1)->first();

        // Handle image upload if provided
        if ($request->image_deal_of_month) {
            // Delete the old image if it exists
            if ($banner->image_deal_of_month && file_exists(public_path($banner->image_deal_of_month))) {
                @unlink(public_path($banner->image_deal_of_month));
            }

            // Generate unique image name and save the new image
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image_deal_of_month')->getClientOriginalExtension();

            $img = $manager->read($request->file('image_deal_of_month'));
            $img = $img->resize(650, 496);
            $img->save(base_path('public/uploads/deal_of_home/' . $name_gen));

            $save_url = 'uploads/deal_of_home/' . $name_gen;

            // Update the record with the new image and other data
            DealOfSection::where('id', 1)->update([
                'image_deal_of_month' => $save_url,
                'image_deal_of_month_seo' => $request->image_deal_of_month_seo,
                'deal_of_month_title_circle' => $request->deal_of_month_title_circle,
                'deal_of_the_month_title' => $request->deal_of_the_month_title,
                'short_title' => $request->short_title,
                'logn_desc' => $request->logn_desc,
                'btn_title' => $request->btn_title,
                'btn_link' => $request->btn_link,
                'user_id' => Auth::id(),
            ]);

            $notification = [
                'message' => 'Deal of the Month Updated Successfully with new Image.',
                'alert-type' => 'info'
            ];

            return redirect()->back()->with($notification);
        } else {
            // Update the record without a new image
            DealOfSection::where('id', 1)->update([
                'image_deal_of_month_seo' => $request->image_deal_of_month_seo,
                'deal_of_month_title_circle' => $request->deal_of_month_title_circle,
                'deal_of_the_month_title' => $request->deal_of_the_month_title,
                'short_title' => $request->short_title,
                'logn_desc' => $request->logn_desc,
                'btn_title' => $request->btn_title,
                'btn_link' => $request->btn_link,
                'user_id' => Auth::id(),
            ]);
        }

        $notification = [
            'message' => 'Deal of the Month without image Updated Successfully.',
            'alert-type' => 'info'
        ];

        return redirect()->back()->with($notification);
    }
}
