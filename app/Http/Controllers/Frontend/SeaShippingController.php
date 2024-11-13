<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeeShipping;
use Illuminate\Http\Request;

class SeaShippingController extends Controller
{
    public function index(){

        $see_shipping = SeeShipping::where('id', operator: 1)->first();
        return view('frontend.sea_shipping' , compact('see_shipping'));
    }
}
