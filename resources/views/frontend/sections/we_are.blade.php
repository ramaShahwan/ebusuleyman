<div class="abt-section mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="abt-bg position-relative" style="background-image: url('{{ asset($we_are->we_are_image) }}');">
                    <a href="{{ $we_are->we_are_video_link ?? '#' }}" class="video-play-btn popup-youtube play-icon">
                        <i class="fas fa-play"></i>
                    </a>
                </div>

            </div>

            <div class="col-lg-6 col-md-12">
                <div class="abt-text">
                    <p class="top-sub">{{ $we_are->we_are_date ? 'Since Year ' . date('Y', strtotime($we_are->we_are_date)) : '' }}</p>
                    <h2>نحن <span class="orange-text">{{ $we_are->we_are_title ?? 'Our Company' }}</span></h2>
                    <p>{{ $we_are->we_are_desc ?? 'Default description about the company.' }}</p>
                    <p>{{ $we_are->we_are_desc ?? 'Additional information about the company.' }}</p>
                    <a href="{{ $we_are->we_are_button_link ?? '#' }}" class="boxed-btn mt-4">
                        {{ $we_are->we_are_button ?? 'Know more' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
