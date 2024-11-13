<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerShop;
use App\Models\DealOfSection;
use App\Models\FeatureHomePage;
use App\Models\SliderHomeProduct;
use App\Models\WeAreSection;
use App\Models\WhyEbuAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        
        $deal_of = DealOfSection::where('id', operator: 1)->first();
        $slider_product = SliderHomeProduct::latest()->get();
        $we_are = WeAreSection::where('id', operator: 1)->first();
        $banner_shop = BannerShop::where('id', operator: 1)->first();
        $why_ebu_about = WhyEbuAbout::latest()->get();

        return view('frontend.about', compact( 'deal_of', 'slider_product', 'we_are', 'banner_shop' ,'why_ebu_about' ));
    }
}
