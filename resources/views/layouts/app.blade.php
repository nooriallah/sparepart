<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
    <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- PAGE TITLE HERE -->
    <title>{{ config('app.name', 'Admin dashboard') }}</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="/backend/images/favicon.png">
    <link href="/backend/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/backend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/backend/vendor/nouislider/nouislider.min.css">

    <!-- Style css -->
    <link href="/backend/css/style.css" rel="stylesheet">

</head>
<body>

<!-- Page Content -->

<!--*******************
       Preloader start
   ********************-->
<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<div id="main-wrapper">


    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">

        <a href="index.html" class="brand-logo">
            <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
                      fill="url(#paint0_linear)"></path>
                <defs>
                </defs>
            </svg>
            <div class="brand-title">
                <h2 class="">SP.</h2>
                <span class="brand-sub-title">{{ auth()->user()->name }}</span>
            </div>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
            Header start
        ***********************************-->
    <div class="header border-bottom">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>
                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown  header-profile">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <img src="/backend/images/user.jpg" width="56" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="app-profile.html" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                         width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <a href="email-inbox.html" class="dropdown-item ai-icon">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                         width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <span class="ms-2">Inbox </span>
                                </a>
                                <a href="{{ route("logout")  }}" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                         width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->


    <!--**********************************
           Sidebar start
       ***********************************-->
    <div class="dlabnav">
        <div class="dlabnav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route("dashboard") }}" class="" aria-expanded="false">
                        <i class="fas fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a  href={{ route("spareparts") }} aria-expanded="false">
                        <i class="fas fa-car-battery"></i>
                        <span class="nav-text">Spare parts</span>
                    </a>

                </li>

                <li>
                    <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-list"></i>
                        <span class="nav-text">Categories</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="#">All categories</a></li>
                        <li><a href="#">Add category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route("dashboard") }}" class="" aria-expanded="false">
                        <i class="fas fas fa-users"></i>
                        <span class="nav-text">users</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->


    <!--**********************************
            Content body start
        ***********************************-->

    <div class="content-body">
        {{ $slot }}
    </div>


</div>

</body>

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="/backend/vendor/global/global.min.js"></script>

<!-- Chart piety plugin files -->
<script src="/backend/vendor/peity/jquery.peity.min.js"></script>

<script src="/backend/js/custom.min.js"></script>
<script src="/backend/js/dlabnav-init.js"></script>
<script src="/backend/js/demo.js"></script>
<script src="/backend/js/styleSwitcher.js"></script>

</html>
