<section class="shop-banner mb-5" style="background-image: url('{{ asset($banner_shop->sale_image ?? 'default-image.jpg') }}')">
    <div class="container">
        <h3>{{ $banner_shop->sale_title ?? 'December sale is on!' }}<br> <span class="orange-text">{{ $banner_shop->sale_desc ?? 'Discount...' }}</span></h3>
        <br>
        <a href="{{ $banner_shop->sale_button_link ?? asset('#') }}" class="cart-btn btn-lg">
            {{ $banner_shop->sale_button ?? 'Shop Now' }}
        </a>
    </div>
</section>
