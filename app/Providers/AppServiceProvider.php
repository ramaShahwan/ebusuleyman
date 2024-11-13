<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\PageSeo;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        $SiteSetting = Setting::findOrFail(1);
        $home_page = PageSeo::where('id', 1)->first();
        $about_page = PageSeo::where('id', 2)->first();
        $contact_page = PageSeo::where('id', 3)->first();
        $see_shipping_page = PageSeo::where('id', 4)->first();

        view()->share([
            'SiteSetting' => $SiteSetting,
            'home_page' => $home_page,
            'about_page' =>   $about_page,
            'contact_page' =>   $contact_page,
            'see_shipping_page' =>   $see_shipping_page,
        ]);
    }
}
