<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                            <span class="price">
                                <!-- Display discount or other information from deal_of_month_title_circle -->
                                <strong>{{ $deal_of->deal_of_month_title_circle ?? '' }}</strong>
                            </span>
                        </div>
                    </div>
                    <!-- Display image from the database or a default -->
                    <img src="{{ $deal_of->image_deal_of_month ? asset($deal_of->image_deal_of_month) : asset('frontend/assets/img/a.jpg') }}"
                        alt="{{ $deal_of->image_deal_of_month_seo ?? 'Deal of the Month Image' }}">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <!-- Deal section titles -->
                <h3><span class="orange-text">{{ $deal_of->deal_of_the_month_title ?? 'Deal' }}</span> </h3>
                <h4>{{ $deal_of->short_title ?? 'Default Product Title' }}</h4>
                <!-- Description -->
                <div class="text">{{ $deal_of->logn_desc ?? 'Default description goes here.' }}</div>

                <!-- Link Button -->
                <a href="{{ $deal_of->btn_link ?? url('/') }}" class="cart-btn mt-3">
                    <i class="fas fa-shopping-cart"></i>
                    {{ $deal_of->btn_title ?? 'Add to Cart' }}
                </a>
            </div>
        </div>
    </div>
</section>
