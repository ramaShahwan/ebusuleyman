<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerHome;
use App\Models\BannerShop;
use App\Models\DealOfSection;
use App\Models\FeatureHomePage;
use App\Models\SliderHomeProduct;
use App\Models\WeAreSection;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomePageController extends Controller
{

    public function index()
    {
        $banner = BannerHome::where('id', 1)->first();
        $feature = FeatureHomePage::latest()->get();
        $deal_of = DealOfSection::where('id', operator: 1)->first();
        $slider_product = SliderHomeProduct::latest()->get();
        $we_are = WeAreSection::where('id', operator: 1)->first();
        $banner_shop = BannerShop::where('id', operator: 1)->first();
        $categories = Category::all();
        $products = Product::where('product_status', 1)->paginate(6);








        $productCount = Product::count();
        $paginationLinks = $products->withQueryString()->links('pagination::bootstrap-4');


        return view('frontend.index', compact('banner', 'feature', 'deal_of', 'slider_product', 'we_are', 'banner_shop', 'categories', 'products', 'productCount', 'paginationLinks'));
    }


    public function search(Request $request)
    {
        $banner = BannerHome::where('id', 1)->first();
        $feature = FeatureHomePage::latest()->get();
        $deal_of = DealOfSection::where('id', operator: 1)->first();
        $slider_product = SliderHomeProduct::latest()->get();
        $we_are = WeAreSection::where('id', operator: 1)->first();
        $banner_shop = BannerShop::where('id', operator: 1)->first();
        $categories = Category::all();
        $products = Product::where('product_status', 1)->paginate(6);

        $banner = BannerHome::where('id', 1)->first();
        $categories = Category::all();

        $searchTerm = $request->input('search');
        $request->session()->put('search', $searchTerm);

        $products = Product::where('product_title', 'like', '%' . $searchTerm . '%')
            ->orWhereHas('category', function ($query) use ($searchTerm) {
                $query->where('category_title', 'like', '%' . $searchTerm . '%');
            })
            ->orderBy('product_title', 'Asc')
            ->paginate(6);

        $dataCount = $products->total();
        $paginationLinks = $products->withQueryString()->links('pagination::bootstrap-4');

        return view('frontend.search_data', [
            'products' => $products,
            'banner' => $banner,
            'categories' => $categories,
            'dataCount' => $dataCount,
            'paginationLinks' => $paginationLinks,
            'banner_shop' => $banner_shop,
            'feature' => $feature,
            'deal_of' => $deal_of,
            'slider_product' => $slider_product,
            'we_are' => $we_are,
        ]);
    }


    public function FronProductInfo($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        $category = Category::where('id', $product->category_id)->first();

        $allProducts = Product::where('category_id', $category->id)->latest()->where('product_status', 1)->paginate(6);
        $paginationLinks = $allProducts->withQueryString()->links('pagination::bootstrap-4');

        return view('frontend.product_info', compact('product', 'allProducts', 'paginationLinks'));
    }
}
