<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cavabunga | A Lifestyle brand crafted with love by millennials, for millennials</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('web/assets/img/favicon.png') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('web/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Font-awesome Icons CSS ==-->
    <link href="{{ asset('web/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Icofont Min Icons CSS ==-->
    <link href="{{ asset('web/assets/css/icofont.min.css') }}" rel="stylesheet" />
    <!--== lastudioIcons CSS ==-->
    <link href="{{ asset('web/assets/css/lastudioIcons.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{ asset('web/assets/css/animate.css') }}" rel="stylesheet" />
    <!--== Aos CSS ==-->
    <link href="{{ asset('web/assets/css/aos.css') }}" rel="stylesheet" />
    <!--== FancyBox CSS ==-->
    <link href="{{ asset('web/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav CSS ==-->
    <link href="{{ asset('web/assets/css/slicknav.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('web/assets/css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Slick CSS ==-->
    <link href="{{ asset('web/assets/css/slick.css') }}" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/assets/css/cavabunga.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/assets/css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" />

</head>

<body>

    <!--wrapper start-->
    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!--== End Preloader Content ==-->

        <!--== Start Header Wrapper ==-->
        <header class="header-area header-default header-style2 header-transparent sticky-header">
            <div class="container-fluid">
                <div class="row row-gutter-0 align-items-center">
                    <div class="col-12">
                        <div class="header-align">
                            <div class="header-align-left">
                                <div class="header-logo-area">

                                    @if (url('login') == url()->current() || url('registerAccount') == url()->current())
                                        <a href="{{ url('/') }}">
                                            <img class="logo-main d-none d-sm-block f-logo"
                                                src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                            <img class="logo-main d-none d-sm-block f-logo"
                                                src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                            <img class="logo-main d-sm-none"
                                                src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                            <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                                alt="Logo" />
                                        </a>
                                    @else
                                        <a href="{{ url('/') }}">
                                            <img class="logo-main d-none d-sm-block f-logo"
                                                src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                            <img class="logo-main d-sm-none"
                                                src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                            <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                                alt="Logo" />
                                        </a>
                                    @endif


                                </div>
                                <div class="header-navigation-area d-none d-xl-block">
                                    <ul class="main-menu nav justify-content-center position-relative">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="{{ url('about_us') }}">About</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-align-right">
                                <div class="header-action-area">
                                    <div class="header-action-search">
                                        <button class="btn-search btn-search-menu">
                                            <i class="lastudioicon-zoom-1"></i>
                                        </button>
                                    </div>
                                    <div class="header-action-flag">
                                        <dropdown>
                                            <input id="toggle2" type="checkbox">
                                            <label for="toggle2" class="animate"><img
                                                    src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                            <ul class="animate m-0">
                                                <li class="animate">
                                                    <p>German</p><img
                                                        src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>bangaladesh</p><img
                                                        src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
                                                        alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>Turkey</p>
                                                    <img src="{{ asset('web/assets/img/flags/turkey.png') }}"
                                                        alt=" ">
                                                </li>
                                                <li class="animate">
                                                    <p>German</p><img
                                                        src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>bangaladesh</p><img
                                                        src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
                                                        alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>Turkey</p>
                                                    <img src="{{ asset('web/assets/img/flags/turkey.png') }}"
                                                        alt=" ">
                                                </li>
                                            </ul>
                                        </dropdown>
                                    </div>
                                    <div class="header-action-login">
                                        <button class="btn-login"
                                            onclick="window.location.href='{{ url('login') }}'">
                                            <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                                class="img-fluid" alt="">
                                        </button>
                                    </div>
                                    <div class="header-action-cart">
                                        <button class="btn-cart cart-icon">
                                            <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                                class="img-fluid" alt="">
                                            <span class="cart-count">0 items</span>
                                        </button>
                                    </div>
                                    <button class="btn-menu d-xl-none">
                                        <img src="{{ asset('web/assets/img/icons/menu.png') }}"
                                            class="img-fluid" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->
        <main class="main-content">
            @yield('content')
        </main>
        <section id="footer" class="cavabunga__footer__section">
            <footer class="footer-area footer-style6">
                <div class="footer-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget-item mb-sm-50">
                                    <img src="assets/img/pattern/logo-pattern.png" alt="">
                                    <h3>Subscribe for our newsletter </h3>
                                    <div class="newsletter-area bg-overlay2-6 bg-img">
                                        <div class="container">
                                            <div class="row">
                                                <div class="newsletter-content content-footer">
                                                    <form class="newsletter-form" action="#">
                                                        <input class="form-control" type="text" id="email"
                                                            placeholder="Your email here">
                                                        <button class="btn btn-submit" type="submit">Subscribe</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="footer__contact__details">
                                                <div class="item">
                                                    <p><i class="las la-phone-volume"></i> +971-50-4284731</p>
                                                    <p><i class="las la-envelope"></i> support@cavabunga.com</p>
                                                </div>
                                            </div>
                                            <div class="widget-item">
                                                <h4 class="footer-social">Follow Us here</h4>
                                                <div class="widget-social-icons">
                                                    <a href="#"><i class="lastudioicon lastudioicon-b-facebook"></i></a>
                                                    <a href="#"><i
                                                            class="lastudioicon lastudioicon-b-instagram"></i></a>
                                                    <a href="#"><i class="lastudioicon lastudioicon-b-twitter"></i></a>
                                                    <a href="#"><i class="lastudioicon lastudioicon-b-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget-item ml-40 mb-sm-50 ml-xs-0">
                                    <h4>service</h4>
                                    <nav class="widget-menu-wrap">
                                        <ul class="nav-menu nav">
                                            <li><a href="order-tracking.html">Track My Order</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="{{ url('terms_and_condition') }}">Shipping Terms</a></li>
                                            <li><a href="#">Payment Policy</a></li>
                                            <li><a href="#">Afterpay</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Warranty & Repairs</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="widget-item ml-51 ml-sm-0 mb-xs-50">
                                    <h4>account</h4>
                                    <nav class="widget-menu-wrap">
                                        <ul class="nav-menu nav">
                                            <li><a href="register.html">Create Account</a></li>
                                            <li><a href="profile.html">Accounts</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="widget-item ml-51 ml-sm-0 mb-xs-50">
                                    <h4>about us</h4>
                                    <nav class="widget-menu-wrap">
                                        <ul class="nav-menu nav">
                                            <li><a href="{{ url('about_us') }}">About Us</a></li>
                                            <li><a href="">Our Team</a></li>
                                            <li><a href="{{ url('design') }}">Design</a></li>
                                            <li><a href="#">Responsability</a></li>
                                            <li><a href="{{ url('partners') }}">Our Partners</a></li>
                                            <li><a href="affiliate-program.html">Affiliate Program</a></li>
                                            <li><a href="{{ url('designer') }}">Our Designer</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded__rectangle"></div>
                </div>
            </footer>

        </section>

        <!--== Scroll Top Button ==-->
        <!-- <div class="scroll-to-top"><span class="icofont-arrow-up"></span></div> -->

        <!--== Start Product Quick View ==-->
        <aside class="product-quick-view-modal">
            <div class="product-quick-view-inner">
                <div class="product-quick-view-content">
                    <button type="button" class="btn-close">
                        <span class="close-icon"><i class="lastudioicon-e-remove"></i></span>
                    </button>
                    <div class="row row-gutter-0">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="thumb">
                                <img src="{{ asset('web/assets/img/shop/quick-view1.jpg') }}" alt="Moren-Shop">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-product-info">
                                <h4 class="title">Product Simple</h4>
                                <div class="product-rating">
                                    <div class="review">
                                        <p><span></span>99 in stock</p>
                                    </div>
                                </div>
                                <div class="prices">
                                    <span class="price">£49.90</span>
                                </div>
                                <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt
                                    integer. Sed adipiscing vehicula.</p>
                                <div class="quick-product-action">
                                    <div class="action-top">
                                        <div class="pro-qty-area">
                                            <div class="pro-qty">
                                                <input type="text" id="quantity" title="Quantity" value="1">
                                                <a href="#" class="inc qty-btn">+</a><a href="#"
                                                    class="dec qty-btn">-</a>
                                            </div>
                                        </div>
                                        <a class="btn-theme btn-black" href="#">Add to cart</a>
                                    </div>
                                    <div class="action-bottom">
                                        <a class="btn-wishlist" href="#"><i
                                                class="labtn-icon labtn-icon-wishlist"></i>Add to wishlist</a>
                                        <a class="btn-compare" href="#"><i
                                                class="labtn-icon labtn-icon-compare"></i>Add to compare</a>
                                    </div>
                                </div>
                                <div class="product-ratting">
                                    <div class="product-sku">
                                        SKU: <span>REF. LA-276</span>
                                    </div>
                                </div>
                                <div class="product-categorys">
                                    <div class="product-category">
                                        Category: <span>Uncategorized</span>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h3 class="title">Tags:</h3>
                                    <div class="widget-tags">
                                        <ul>
                                            <li><a href="#">Blazer,</a></li>
                                            <li><a href="#">Fashion,</a></li>
                                            <li><a href="#">wordpress,</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-social-info">
                                    <a href="#"><span class="lastudioicon-b-facebook"></span></a>
                                    <a href="#"><span class="lastudioicon-b-twitter"></span></a>
                                    <a href="#"><span class="lastudioicon-b-linkedin"></span></a>
                                    <a href="#"><span class="lastudioicon-b-pinterest"></span></a>
                                </div>
                                <div class="product-nextprev">
                                    <a href="#">
                                        <i class="lastudioicon-arrow-left"></i>
                                    </a>
                                    <a href="#">
                                        <i class="lastudioicon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-overlay"></div>
        </aside>
        <!--== End Product Quick View ==-->

        <!--== Start Aside Search Menu ==-->
        <div class="search-box-wrapper">
            <div class="search-box-content-inner">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form action="#" method="post">
                        <div class="search-form position-relative">
                            <label for="search-input" class="sr-only">Search</label>
                            <input type="search" class="form-control" placeholder="Search" id="search-input">
                            <button class="search-button"><i class="lastudioicon-zoom-1"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!--== End Aside Search Menu ==-->
            <a href="javascript:;" class="search-close"><i class="lastudioicon-e-remove"></i></a>
        </div>
        <!--== End Aside Search Menu ==-->

        <!--== Start Sidebar Cart Menu ==-->
        <aside class="sidebar-cart-modal">
            <div class="sidebar-cart-inner">
                <div class="sidebar-cart-content">
                    <a class="cart-close" href="javascript:void(0);"><i class="lastudioicon-e-remove"></i></a>
                    <div class="sidebar-cart">
                        <h4 class="sidebar-cart-title">Shopping Cart</h4>
                        <hr>
                        <div class="product-cart">
                            <div class="product-cart-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('web/assets/img/shop/cart/1.png') }}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <h4 class="title"><a href="#">Men Black Shoe</a></h4>
                                    <span class="info">Backpack</span>
                                </div>
                                <div class="product-quantity">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" title="Quantity" value="1" />
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4>$121.50</h4>
                                </div>
                                <!-- <div class="product-delete"><a href="#/">×</a></div> -->
                            </div>
                            <hr>
                            <div class="product-cart-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('web/assets/img/shop/cart/2.png') }}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <h4 class="title"><a href="#">mario page wallet</a></h4>
                                    <span class="info">Wallet</span>
                                </div>
                                <div class="product-quantity">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" title="Quantity" value="1" />
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4>$62.50</h4>
                                </div>
                                <!-- <div class="product-delete"><a href="#/">×</a></div> -->
                            </div>
                            <hr>
                            <div class="product-cart-item">
                                <div class="product-img">
                                    <a href="#"><img src="{{ asset('web/assets/img/shop/cart/3.png') }}" alt=""></a>
                                </div>
                                <div class="product-info">
                                    <h4 class="title"><a href="#">Lucy vanity kit</a></h4>
                                    <span class="info">Vanity kit</span>
                                </div>
                                <div class="product-quantity">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" title="Quantity" value="1" />
                                    </div>
                                </div>
                                <div class="product-price">
                                    <h4>$113.50</h4>
                                </div>
                            </div>

                        </div>

                        <div class="cart-total">
                            <hr>
                            <h4>Total: <span class="money">$297.40</span></h4>
                        </div>
                        <div class="cart-checkout-btn">
                            <a class="btn-theme" href="#">Continue shopping</a>
                            <a class="btn-theme" href="#">Go to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="sidebar-cart-overlay"></div>
        <!--== End Sidebar Cart Menu ==-->

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay d-none"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-close"><i class="icofont-close-line"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                    <!-- Off Canvas Footer -->
                    <div class="off-canvas-footer"></div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
            <div class="header-action-flag">
                <dropdown>
                    <input id="toggle3" type="checkbox">
                    <label for="toggle3" class="animate"><img
                            src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                    <ul class="animate m-0">
                        <li class="animate">
                            <p>German</p><img src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                        </li>
                        <li class="animate">
                            <p>bangaladesh</p><img src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                        </li>
                        <li class="animate">
                            <p>Turkey</p>
                            <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                        </li>
                        <li class="animate">
                            <p>German</p><img src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                        </li>
                        <li class="animate">
                            <p>bangaladesh</p><img src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                        </li>
                        <li class="animate">
                            <p>Turkey</p>
                            <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                        </li>
                    </ul>
                </dropdown>
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="{{ asset('web/assets/js/modernizr.js') }}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-main.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-migrate.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
    <!--=== jquery Appear Js ===-->
    <script src="{{ asset('web/assets/js/jquery.appear.js') }}"></script>
    <!--=== jquery Swiper Min Js ===-->
    <script src="{{ asset('web/assets/js/swiper.min.js') }}"></script>
    <!--=== jquery Fancybox Min Js ===-->
    <script src="{{ asset('web/assets/js/fancybox.min.js') }}"></script>
    <!--=== jquery Aos Min Js ===-->
    <script src="{{ asset('web/assets/js/aos.min.js') }}"></script>
    <!--=== jquery Slicknav Js ===-->
    <script src="{{ asset('web/assets/js/jquery.slicknav.js') }}"></script>
    <!--=== jquery Countdown Js ===-->
    <script src="{{ asset('web/assets/js/jquery.countdown.min.js') }}"></script>
    <!--=== jquery Tippy Js ===-->
    <script src="{{ asset('web/assets/js/tippy.all.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('web/assets/js/isotope.pkgd.min.js') }}"></script>
    <!--=== jquery Vivus Js ===-->
    <script src="{{ asset('web/assets/js/vivus.js') }}"></script>
    <!--=== Parallax Min Js ===-->
    <script src="{{ asset('web/assets/js/parallax.min.js') }}"></script>
    <!--=== Slick  Min Js ===-->
    <script src="{{ asset('web/assets/js/slick.min.js') }}"></script>
    <!--=== jquery Wow Min Js ===-->
    <script src="assets/js/wow.min.js')}}"></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-zoom.min.js') }}"></script>

    <!--=== Custom Js ===-->
    <script src="{{ asset('web/assets/js/custom.js') }}"></script>
    @yield('script')

</body>

</html>
