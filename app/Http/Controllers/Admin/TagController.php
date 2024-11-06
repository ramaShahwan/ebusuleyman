<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    public function TagView()
    {
        $data = Tag::latest()->get();

        return view('admin.tag.tag_view', compact('data'));
    }



    public function TagCreate()
    {
        return view('admin.tag.tag_create');
    }




    public function TagEdit($id)
    {
        $data = Tag::where('id', $id)->first();
        return view('admin.tag.tag_edit', compact('data'));
    }


    public function TagStore(Request $request)
    {

        $request->validate([
            'tag_title' => 'required|string',
        ]);


        Tag::create([
            'tag_title' => $request->tag_title,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Tag Created Successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin_tag_view')->with($notification);
    }



    public function TagUpdate(Request $request)
    {
        // Validate the input
        $request->validate([
            'tag_title' => 'required|string',
        ]);

        // Find the existing Tag by its ID and update it
        Tag::where('id', $request->id)->update([
            'tag_title' => $request->tag_title,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Tag Updated Successfully.',
            'alert-type' => 'success'
        ];

        // Redirect to the Tag view page with a success message
        return redirect()->route('admin_tag_view')->with($notification);
    }



    public function TagDelete($id)
    {
        // Find the tag by ID
        $tag = Tag::findOrFail($id);

        $productExists = Product::where('tag_id', $id)->exists();

        if ($productExists) {
            $notification = [
                'message' => 'Tag cannot be deleted because it is associated with existing products.',
                'alert-type' => 'warning'
            ];

            return redirect()->route('admin_tag_view')->with($notification);
        }

        $tag->delete();

        $notification = [
            'message' => 'Tag Deleted Successfully.',
            'alert-type' => 'error'
        ];

        return redirect()->route('admin_tag_view')->with($notification);
    }
}
