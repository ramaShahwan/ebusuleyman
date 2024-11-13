<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;



class ProductController extends Controller
{
    public function ProductView()
    {
        $data = Product::latest()->get();
        $category = Category::latest()->get();
        $tag = Tag::latest()->get();
        return view('admin.product.product_view', compact('data', 'category', 'tag'));
    }


    public function ProductCreate()
    {
        $category = Category::latest()->get();
        $tag = Tag::latest()->get();
        return view('admin.product.product_create', compact('category', 'tag'));
    }


    public function ProductEdit($id)
    {

        $category = Category::latest()->get();
        $tag = Tag::latest()->get();
        $data = Product::where('id', $id)->first();

        return view('admin.product.product_edit', compact('data', 'category', 'tag'));
    }




    public function ProductStore(Request $request)
    {
        $slug = str_replace(["'", "?", '/', '*', "|", '>', '<', '+', '"', ':', '\\', ' ', ';', '.'], '-', $request->product_title);

        $request->validate([
            'product_title' => 'required|string',
            'category_id' => 'required|string',
            'product_desc' => 'required|string',
            'product_price' => 'required|string',
            'product_button_link' => 'nullable|string',
            'product_button_title' => 'nullable|string',
            'product_image' => 'required|image|mimes:jpeg,png,jpg',
            'product_image_seo' => 'required|string',
            // 'tag_id' => 'required|array',
        ]);

        if ($request->hasFile('product_image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('product_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('product_image'));
            $img->save(base_path('public/uploads/product/' . $name_gen));
            $save_url = 'uploads/product/' . $name_gen;
        }


        // $tags = implode(',', $request->tag_id);





        Product::create([
            'product_title' => $request->product_title,
            'category_id' => $request->category_id,
            // 'tag_id' => $tags,
            'product_slug' => $slug,
            'product_button_title' => $request->product_button_title,
            'product_button_link' => $request->product_button_link,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => $save_url ?? null,
            'product_image_seo' => $request->product_image_seo,
            'product_status' => $request->product_status,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Product Created Successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin_product_view')->with($notification);
    }
    public function ProductUpdate(Request $request)
    {
        $request->validate([
            'product_title' => 'required|string',
            'category_id' => 'required|string',
            'product_desc' => 'nullable|string',
            'product_price' => 'nullable|string',
            'product_button_link' => 'nullable|string',
            'product_button_title' => 'nullable|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'product_image_seo' => 'nullable|string',
            // 'tag_id' => 'required|array',
        ]);

        $product = Product::findOrFail($request->id);

        if ($request->hasFile('product_image')) {
            // Delete old image
            if ($product->product_image && file_exists(public_path($product->product_image))) {
                unlink(public_path($product->product_image));
            }

            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('product_image')->getClientOriginalExtension();
            $img = $manager->read($request->file('product_image'));

            // Uncomment if resizing is required
            // $img = $img->resize(1920, 1281);

            $img->save(public_path('uploads/product/' . $name_gen));
            $save_url = 'uploads/product/' . $name_gen;
        } else {
            $save_url = $product->product_image; // Keep the existing image if no new one is uploaded
        }

        // $tags = implode(',', $request->tag_id);
        $slug = str_replace(["'", "?", '/', '*', "|", '>', '<', '+', '"', ':', '\\', ' ', ';', '.'], '-', $request->product_title);

        $product->update([
            'product_title' => $request->product_title,
            'category_id' => $request->category_id,
            // 'tag_id' => $tags,
            'product_slug' => $slug,
            'product_button_title' => $request->product_button_title,
            'product_button_link' => $request->product_button_link,
            'product_desc' => $request->product_desc,
            'product_price' => $request->product_price,
            'product_image' => $save_url,
            'product_image_seo' => $request->product_image_seo,
            'product_status' => $request->product_status,
            'user_id' => Auth::id(),
        ]);

        $notification = [
            'message' => 'Product Updated Successfully.',
            'alert-type' => 'warning'
        ];

        return redirect()->route('admin_product_view')->with($notification);
    }


    public function ProductDelete($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Check if the product has an image and delete it from the storage
        if ($product->product_image && file_exists(public_path($product->product_image))) {
            @unlink(public_path($product->product_image));
        }
        // Delete the product from the database
        $product->delete();

        // Success notification for successful deletion
        $notification = [
            'message' => 'Product Deleted Successfully.',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
