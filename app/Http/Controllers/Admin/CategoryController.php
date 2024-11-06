<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function CategoryView()
    {
        $data = Category::latest()->get();

        return view('admin.category.category_view', compact('data'));
    }



    public function CategoryCreate()
    {
        return view('admin.category.category_create');
    }




    public function CategoryEdit($id)
    {
        $data = Category::where('id', $id)->first();
        return view('admin.category.category_edit', compact('data'));
    }


    public function CategoryStore(Request $request)
    {

        $request->validate([
            'category_title' => 'required|string',
        ]);


        Category::create([
            'category_title' => $request->category_title,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Category Created Successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin_category_view')->with($notification);
    }



    public function CategoryUpdate(Request $request)
    {
        // Validate the input
        $request->validate([
            'category_title' => 'required|string',
        ]);

        // Find the existing category by its ID and update it
        Category::where('id', $request->id)->update([
            'category_title' => $request->category_title,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Category Updated Successfully.',
            'alert-type' => 'success'
        ];

        // Redirect to the category view page with a success message
        return redirect()->route('admin_category_view')->with($notification);
    }



    public function CategoryDelete($id)
    {
        // Find the category by ID
        $category = Category::findOrFail($id);

        // Check if any product exists with this category ID
        $productExists = Product::where('category_id', $id)->exists();

        if ($productExists) {
            // If products exist with this category, return with an error notification
            $notification = [
                'message' => 'Category cannot be deleted because it is associated with existing products.',
                'alert-type' => 'warning'
            ];

            return redirect()->route('admin_category_view')->with($notification);
        }

        // If no products are associated, delete the category
        $category->delete();

        // Success notification for successful deletion
        $notification = [
            'message' => 'Category Deleted Successfully.',
            'alert-type' => 'error'
        ];

        return redirect()->route('admin_category_view')->with($notification);
    }
}
