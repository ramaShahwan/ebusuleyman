<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <!-- Messages Dropdown Menu -->

        <!-- Notifications Dropdown Menu -->





        <li class="nav-item">
            <a class="nav-link btn btn-danger text-light" href="">
                Bl Deadline
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">45 Notifications</span>
                <div class="dropdown-divider"></div>


                <a href="" class="dropdown-item mark-as-read overflow-hidden" data-id="4">
                    <i class="fas fa-bell mr-2"></i>
                    <span class="float-right text-muted text-sm">asdf</span>
                </a>

                <a href="" class="dropdown-item dropdown-footer">See All Notifications</a>

            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="user-profile-dropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="mr-2">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
                <img src="{{ asset(Auth::user()->profile_photo_path) }}" style="width: 40px;" alt="User Photo"
                    class="img-circle elevation-2">
            </a>

            <div class="dropdown-menu" aria-labelledby="user-profile-dropdown">
                <a class="dropdown-item" href="">View Profile</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="">Logout</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
