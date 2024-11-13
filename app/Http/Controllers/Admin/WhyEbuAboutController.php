<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\WhyEbuAbout;
use Illuminate\Http\Request;

class WhyEbuAboutController extends Controller
{
    public function index()
    {
        $data = WhyEbuAbout::latest()->get();
        return view('admin.why_ebu_about.why_ebu_about_view', compact('data'));
    }


    public function edit($id)
    {
        $data = WhyEbuAbout::where('id', $id)->first();
        return view('admin.why_ebu_about.why_ebu_about_edit', compact('data'));
    }

    public function update(Request $request)
    {



        $request->validate([
            'icon_feature_home' => 'required|string|max:500',
            'short_title' => 'required|string|max:500',
            'long_title' => 'required|string|max:500',
        ]);

        $item = WhyEbuAbout::findOrFail($request->id);
        $item->icon_feature_home = $request->icon_feature_home;
        $item->short_title = $request->short_title;
        $item->long_title = $request->long_title;
        $item->user_id = Auth::id();
        $item->save();

        $notification = [
            'message' => 'Data Updated Successfully',
            'alert-type' => 'info'
        ];

        return redirect()->route('admin_why_ebu_view')->with($notification);
    }
}
