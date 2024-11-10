<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerHome;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function index()
    {
        $banner = BannerHome::where('id', 1)->first();
        $categories = Category::all();
        $products = Product::where('product_status',1)->paginate(6);
        $productCount = Product::count();
        $paginationLinks = $products->withQueryString()->links('pagination::bootstrap-4');

        return view('welcome', compact('banner','categories','products','productCount','paginationLinks'));
    }

    public function get_product_for_category($id)
    {
        $banner = BannerHome::where('id', 1)->first();
        $categories = Category::all();
        $products = Product::where('category_id',$id)->where('product_status',1)->paginate(3);
        $productCount = $products->total();
        $paginationLinks = $products->withQueryString()->links('pagination::bootstrap-4');

        return view('welcome', [
            'banner' => $banner,
            'categories' => $categories,
            'products' => $products,

            'productCount'=> $productCount, 
            'paginationLinks'=> $paginationLinks,          
         ]);         
    }

    // public function search(Request $request)
    // {
    //     $banner = BannerHome::where('id', 1)->first();
    //     $categories = Category::all();
    
    //     $searchTerm = $request->input('search');
    //     $request->session()->put('search', $searchTerm);
    
    //     $products = Product::where('product_title', 'like', '%'.$searchTerm.'%')
    //         ->orWhere(function ($query) use ($searchTerm) {
    //             $query->whereRaw("FIND_IN_SET(?, tag_id)", [$searchTerm]);
    //         })
    //         ->orWhereHas('tags', function ($query) use ($searchTerm) {
    //             $query->where('tag_title', 'like', '%'.$searchTerm.'%');
    //         })
    //         ->orWhere(function ($query) use ($searchTerm) {
    //             $query->whereIn('tag_id', function($subQuery) use ($searchTerm) {
    //                 $subQuery->select('id')
    //                     ->from('tags')
    //                     ->where('tag_title', 'like', '%'.$searchTerm.'%');
    //             });
    //         })
    //         ->orderBy('product_title', 'Asc')
    //         ->paginate(3);
    
    //     $dataCount = $products->total();
    //     $paginationLinks = $products->withQueryString()->links('pagination::bootstrap-4');
    
    //     return view('welcome', [
    //         'products' => $products,
    //         'banner' => $banner,
    //         'categories' => $categories,
    //         'dataCount' => $dataCount, 
    //         'paginationLinks' => $paginationLinks,          
    //     ]);
    // }
    
    public function search(Request $request)
    {
        $banner = BannerHome::where('id', 1)->first();
        $categories = Category::all();
    
        $searchTerm = $request->input('search');
        $request->session()->put('search', $searchTerm);
    
        $products = Product::where('product_title', 'like', '%'.$searchTerm.'%')
            ->orWhereHas('category', function ($query) use ($searchTerm) {
                $query->where('category_title', 'like', '%'.$searchTerm.'%');
            })
            ->orderBy('product_title', 'Asc')
            ->paginate(6);
    
        $dataCount = $products->total();
        $paginationLinks = $products->withQueryString()->links('pagination::bootstrap-4');
    
        return view('welcome', [
            'products' => $products,
            'banner' => $banner,
            'categories' => $categories,
            'dataCount' => $dataCount, 
            'paginationLinks' => $paginationLinks,          
        ]);
    }
    
    
    
}
