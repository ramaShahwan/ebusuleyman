<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    @foreach($slider_product as $product)
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <!-- Display the slider image, or use a default if none is set -->
                                <img height="100px" src="{{ $product->image_slider_product_home ? asset( $product->image_slider_product_home) : asset('frontend/assets/img/avaters/avatar1.png') }}"
                                     alt="{{ $product->image_slider_product_home_seo ?? 'Slider Product Image' }}">
                            </div>
                            <div class="client-meta">
                                <!-- Display title and description from the database -->
                                <h3>{{ $product->title_slider_product_home ?? 'العنوان الافتراضي' }} <span>Slider Subtitle</span></h3>
                                <p class="testimonial-body">
                                    {{ $product->desc_slider_product_home ?? 'الوصف الافتراضي هنا.' }}
                                </p>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
