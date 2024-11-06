<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeatureHomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeatureHomePageController extends Controller
{
    public function index()
    {
        $data = FeatureHomePage::latest()->get();
        return view('admin.feature_home.feature_home_view', compact('data'));
    }


    public function edit($id)
    {
        $data = FeatureHomePage::where('id', $id)->first();
        return view('admin.feature_home.feature_home_edit', compact('data'));
    }

    public function update(Request $request)
    {



        $request->validate([
            'icon_feature_home' => 'required|string|max:500',
            'short_title' => 'required|string|max:500',
            'long_title' => 'required|string|max:500',
        ]);

        $item = FeatureHomePage::findOrFail($request->id);
        $item->icon_feature_home = $request->icon_feature_home;
        $item->short_title = $request->short_title;
        $item->long_title = $request->long_title;
        $item->user_id = Auth::id();
        $item->save();

        $notification = [
            'message' => 'Feature Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_feature_home_view')->with($notification);
    }
}
