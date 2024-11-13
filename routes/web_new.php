<?php

use App\Http\Controllers\Admin\BannerHomeController;
use App\Http\Controllers\Admin\BannerShopController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FeatureHomePageController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SeeShippingController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderHomeProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\WeAreSectionController;
use App\Http\Controllers\Admin\WhyEbuAboutController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ContactFormController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\SeaShippingController;
use App\Http\Controllers\ProfileController;
use App\Models\ContactForm;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomePageController::class, 'index'])->name('home_page');




Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');





    //// Banner Home Route List
    Route::controller(BannerHomeController::class)->group(function () {
        Route::get('/admin/banner/edit', 'index')->name('admin_banner_home_edit');
        Route::post('/admin/banner/update', 'update')->name('admin_banner_home_update');
    });



    //// Feature Home Route List
    Route::controller(FeatureHomePageController::class)->group(function () {
        Route::get('/admin/feature/view', 'index')->name('admin_feature_home_view');
        Route::get('/admin/feature/edit/{id}', 'edit')->name('admin_feature_home_edit');
        Route::post('/admin/feature/update', 'update')->name('admin_featrue_home_update');
    });

    //// HomeController Home Route List
    Route::controller(HomeController::class)->group(function () {
        Route::get('/admin/dealof/edit', 'DealOfEdit')->name('admin_deal_of_home_edit');
        Route::post('/admin/dealof/update', 'DealOfUpdate')->name('admin_deal_of_home_update');
    });




    //// Category  Controller Route List frontend
    Route::controller(CategoryController::class)->group(function () {

        Route::get('/admin/category/view', 'CategoryView')->name('admin_category_view');
        Route::get('/admin/category/create', 'CategoryCreate')->name('admin_category_create');
        Route::post('/admin/category/store', 'CategoryStore')->name('admin_category_store');
        Route::get('/admin/category/delete/{id}', 'CategoryDelete')->name('admin_category_delete');
        Route::get('/admin/category/edit/{id}', 'CategoryEdit')->name('admin_category_edit');
        Route::post('/admin/category/update', 'CategoryUpdate')->name('admin_category_update');
    });






    //// Tag Controller Route List frontend
    Route::controller(TagController::class)->group(function () {

        Route::get('/admin/tag/view', 'TagView')->name('admin_tag_view');
        Route::get('/admin/tag/create', 'TagCreate')->name('admin_tag_create');
        Route::post('/admin/tag/store', 'TagStore')->name('admin_tag_store');
        Route::get('/admin/tag/delete/{id}', 'TagDelete')->name('admin_tag_delete');
        Route::get('/admin/tag/edit/{id}', 'TagEdit')->name('admin_tag_edit');
        Route::post('/admin/tag/update', 'TagUpdate')->name('admin_tag_update');
    });


    //// Product Controller Route List frontend
    Route::controller(ProductController::class)->group(function () {

        Route::get('/admin/product/view', 'ProductView')->name('admin_product_view');
        Route::get('/admin/product/create', 'ProductCreate')->name('admin_product_create');
        Route::post('/admin/product/store', 'ProductStore')->name('admin_product_store');
        Route::get('/admin/product/delete/{id}', 'ProductDelete')->name('admin_product_delete');
        Route::get('/admin/product/edit/{id}', 'ProductEdit')->name('admin_product_edit');
        Route::post('/admin/product/update', 'ProductUpdate')->name('admin_product_update');
    });






    //// Slider Home Product Controller Route List frontend
    Route::controller(SliderHomeProductController::class)->group(function () {

        Route::get('/admin/slider/home/product/view', 'SliderHomeProductView')->name('admin_slider_home_product_view');
        Route::get('/admin/slider/home/product/create', 'SliderHomeProductCreate')->name('admin_slider_home_product_create');
        Route::post('/admin/slider/home/product/store', 'SliderHomeProductStore')->name('admin_slider_home_product_store');
        Route::get('/admin/slider/home/product/delete/{id}', 'SliderHomeProductDelete')->name('admin_slider_home_product_delete');
        Route::get('/admin/slider/home/product/edit/{id}', 'SliderHomeProductEdit')->name('admin_slider_home_product_edit');
        Route::post('/admin/slider/home/product/update', 'SliderHomeProductUpdate')->name('admin_slider_home_product_update');
    });

    //// Setting  Controller Route List


    Route::controller(SettingController::class)->group(function () {
        Route::get('/admin/setting/edit', 'index')->name('admin_setting_edit');
        Route::post('/admin/setting/update', 'update')->name('admin_setting_update');
    });



    Route::controller(WeAreSectionController::class)->group(function () {
        Route::get('/admin/we_are/edit', 'index')->name('admin_we_are_edit');
        Route::post('/admin/we_are/update', 'update')->name('admin_we_are_update');
    });


    Route::controller(BannerShopController::class)->group(function () {
        Route::get('/admin/banner_shop/edit', 'index')->name('admin_banner_shop_edit');
        Route::post('/admin/banner_shop/update', 'update')->name('admin_banner_shop_update');
    });

    //// Feature About Route List
    Route::controller(WhyEbuAboutController::class)->group(function () {
        Route::get('/admin/why_ebu/view', 'index')->name('admin_why_ebu_view');
        Route::get('/admin/why_ebu/edit/{id}', 'edit')->name('admin_why_ebu_edit');
        Route::post('/admin/why_ebu/update', 'update')->name('admin_why_ebu_update');
    });


    Route::controller(SeeShippingController::class)->group(function () {
        Route::get('/admin/see_shipping/edit', 'index')->name('admin_see_shipping_edit');
        Route::post('/admin/see_shipping/update', 'update')->name('admin_see_shipping_update');
    });



    // contact form admin


    Route::get(uri: '/admin/subscribe/view', action: [ContactController::class, 'SubscribeView'])->name('admin_contact_form_view');

    Route::get(uri: '/admin/subscribe/delete/{id}', action: [ContactController::class, 'SubscribeDelete'])->name('admin_contact_form_delete');



    //// Feature About Route List
    Route::controller(SettingController::class)->group(function () {
        Route::get('/admin/page/seo/view', 'PageSeoView')->name('admin_page_seo_view');
        Route::get('/admin/page/seo/edit/{id}', 'PageSeoEdit')->name('admin_page_seo_edit');
        Route::post('/admin/page/seo/update', 'PageSeoUpdate')->name('admin_page_seo_update');
    });
});

require __DIR__ . '/auth.php';



Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/sea_shipping', [SeaShippingController::class, 'index'])->name('sea_shipping');


Route::post('/contact/form', action: [ContactController::class, 'storeform'])->name('contact.store');








Route::controller(HomePageController::class)->group(function () {
    Route::get('/category/all', 'index')->name('get_category');
    Route::get('/search', 'search')->name('search');
    Route::get('/product/{id}', 'get_product_for_category')->name('get_product_for_category');

    Route::get('/product/info/{slug}', 'FronProductInfo')->name('front_product_info');
});



Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return redirect(url('/'));
});
