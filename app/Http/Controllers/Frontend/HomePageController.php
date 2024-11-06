<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerHome;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function index()
    {
        $banner = BannerHome::where('id', 1)->first();
        return view('welcome', compact('banner'));
    }
}
