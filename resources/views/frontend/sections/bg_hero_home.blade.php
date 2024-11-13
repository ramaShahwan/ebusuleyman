<div class="hero-area hero-bg" style="background-image: url('{{ asset($banner->image_banner) }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">{{ $banner->short_title }}</p>
                        <h1>{{ $banner->long_title }}</h1>
                        <div class="hero-btns">
                            <a href="{{ $banner->left_btn_link }}"
                                class="boxed-btn">{{ $banner->left_btn_title }}</a>
                            <a href="{{ $banner->right_btn_link }}"
                                class="bordered-btn">{{ $banner->right_btn_title }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
