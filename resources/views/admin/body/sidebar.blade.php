<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('backend/lte/dist/img/AdminLTELogo.png') }}" alt="Miramar Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Ebusuleymangida</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- Home Page Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Home Page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_banner_home_edit') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_feature_home_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Feature</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_deal_of_home_edit') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Deal Of Section</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin_we_are_edit') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Who We Are </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('admin_banner_shop_edit') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Banenr Shop </p>
                            </a>
                        </li>



                    </ul>
                </li>

                <!-- Category & Tag Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Category & Tag
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_category_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin_tag_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Tag</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Product Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_product_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Product</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Slider Home Product Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Slider Home Product
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_slider_home_product_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Slider Home Product</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            About Page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_why_ebu_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>About Page</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            See Shipping Page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_see_shipping_edit') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>See Shipping Page</p>
                            </a>
                        </li>
                    </ul>
                </li>





                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Contact Form
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_contact_form_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Contact Form</p>
                            </a>
                        </li>
                    </ul>
                </li>








                <!-- Setting Section -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-boxes"></i>
                        <p>
                            Website Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin_setting_edit') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Setting</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin_page_seo_view') }}" class="nav-link">
                                <i class="fas fa-boxes"></i>
                                <p>Page Seo</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
