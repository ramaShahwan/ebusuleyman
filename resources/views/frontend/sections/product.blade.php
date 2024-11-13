{{-- <style>
    .pagination-wrap {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination-wrap .pagination {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }

    .pagination-wrap .pagination .page-item {
        display: inline-block;
    }

    .pagination-wrap .pagination .page-link {
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .pagination-wrap .pagination .page-item.active .page-link {
        background-color: #ff6600;
        color: #fff;
        border-color: #ff6600;
    }

    .pagination-wrap .pagination .page-link:hover {
        background-color: #f0f0f0;
        color: #333;
    }

    .pagination-wrap .pagination .page-item.disabled .page-link {
        color: #999;
        cursor: not-allowed;
        border-color: #ddd;
    }

    .product-lists .col-lg-4,
    .product-lists .col-md-6 {
        display: flex;
    }

    .single-product-item {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .product-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 5px;
    }

    .single-product-item h3 {
        font-size: 1.25em;
        font-weight: bold;
        margin-top: 10px;
        min-height: 50px;
    }

    .single-product-item span {
        flex-grow: 1;
        min-height: 40px;
    }

    .product-price {
        font-size: 1.5em;
        color: #333;
        margin-top: 10px;
    }

    .cart-btn {
        margin-top: auto;
        padding: 10px;
        font-size: 0.9em;
        background-color: #ff6600;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .cart-btn:hover {
        background-color: #e65c00;
    }
</style> --}}
<style>

    .pagination-wrap {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    
    .pagination-wrap .pagination {
        list-style: none;
        padding: 0;
        display: flex;
        gap: 10px;
    }
    
    .pagination-wrap .pagination .page-item {
        display: inline-block;
    }
    
    .pagination-wrap .pagination .page-link {
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    
    .pagination-wrap .pagination .page-item.active .page-link {
        background-color: #ff6600; 
        color: #fff;
        border-color: #ff6600;
    }
    
    .pagination-wrap .pagination .page-link:hover {
        background-color: #f0f0f0;
        color: #333;
    }
    
    .pagination-wrap .pagination .page-item.disabled .page-link {
        color: #999;
        cursor: not-allowed;
        border-color: #ddd;
    }
    
    .product-lists .col-lg-4,
    .product-lists .col-md-6 {
        display: flex;
    }
    
    .single-product-item {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    
    .product-image img {
        width: 100%;
        height: 200px; 
        object-fit: cover; 
        border-radius: 5px;
    }
    
    
    .single-product-item h3 {
        font-size: 1.25em;
        font-weight: bold;
        margin-top: 10px;
        min-height: 50px;
    }
    
    .single-product-item span {
        flex-grow: 1;
        min-height: 40px; 
    }
    
    .product-price {
        font-size: 1.5em;
        color: #333;
        margin-top: 10px;
    }
    
    .cart-btn {
        margin-top: auto;
        padding: 10px;
        font-size: 0.9em;
        background-color: #ff6600;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }
    
    .cart-btn:hover {
        background-color: #e65c00;
    }
    
    
    /* for search */
    .header-icons {
        display: flex;
        align-items: center;
    }
    
    .search-form {
        display: flex;
        align-items: center;
        background-color: #ffffff;
        border-radius: 25px;
        overflow: hidden;
        margin-top: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .search-input {
        border: none;
        outline: none;
        font-size: 16px;
        color: #333;
        width: 100px;
    }
    
    .search-input::placeholder {
        color: #aaa;
    }
    
    .search-button {
        background-color: #ff6600;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    
    .search-button:hover {
        background-color: #ff8500;
    }
    
    .shopping-cart {
        color: #ff6600;
        font-size: 20px;
        margin-left: 15px;
    }
    
    </style>



<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach ($categories as $item)
                            <li data-filter=".{{ $item->id }}">{{ $item->category_title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 text-center {{ strtolower($product->category_id) }}">
                    <div class="single-product-item">
                        <div class="product-image"> <a
                                href="{{ route('front_product_info', $product->product_slug) }}"><img
                                    src="{{ asset($product->product_image) }}" alt="{{ $product->product_image_seo }}">
                        </div>
                        <h3>{{ $product->product_title }}</h3>
                        <p class="product-price"><span></span> {{ $product->product_price }}</p> <a
                            href="{{ route('front_product_info', $product->product_slug) }}" class="cart-btn"><i
                                class="fas fa-shopping-cart"></i> {{ $product->product_button_title }}</a></a>
                    </div>
                </div>
            @endforeach
        </div>






        @if($products->count())
        @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 text-center {{ strtolower($product->category_id) }}">
                <div class="single-product-item">
                    <div class="product-image"> <a href="single-product.html"><img
                                src="{{ asset($product->product_image) }}" alt=""></a> </div>
                    <h3>{{ $product->product_title }}</h3>
                    <p class="product-price"><span>Per Kg</span> {{ $product->product_price }}$ </p> <a
                        href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        @endforeach
              @else
              <p>No results found.</p>
              @endif







        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    {{ $products->links('pagination.custom-pagination') }}
                </div>
            </div>
        </div>
    </div>
</div>
