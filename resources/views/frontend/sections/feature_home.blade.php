<div class="list-section pt-80 pb-80">
    <div class="container">
        <div class="row">
            @foreach ($feature as $item)
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <!-- Display icon from the database, use a default if not set -->
                            <i class="{{ $item->icon_feature_home ?? 'fas fa-shipping-fast' }}"></i>
                        </div>
                        <div class="content">
                            <!-- Display short title and long title from the database -->
                            <h3>{{ $item->short_title ?? 'Default Title' }}</h3>
                            <p>{{ $item->long_title ?? 'Default description here' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
