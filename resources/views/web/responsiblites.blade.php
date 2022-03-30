<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | Product Informations | A Lifestyle brand crafted with love by millennials, for millennials
    </title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('web/assets/img/favicon.png') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
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
                                    <a href="#">
                                        <img class="logo-main d-none d-sm-block f-logo"
                                            src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                        <img class="logo-main d-sm-none" src="assets/img/logo.png" alt="Logo" />
                                        <img class="logo-light" src="assets/img/logo.png" alt="Logo" />
                                    </a>
                                </div>
                                @include('web.menu')
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
                                                    <p>bangaladesh</p><img src="assets/img/flags/bangaladesh.png')}}"
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
                                        <button class="btn-login" onclick="window.location.href='login.html'">
                                            <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                                                class="img-fluid" alt="">
                                        </button>
                                    </div>
                                    <div class="header-action-cart" style="background: #63748614;">
                                        <button class="btn-cart cart-icon">
                                            <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                                                class="img-fluid" alt="">
                                            <span class="cart-count text-dark">0 items</span>
                                        </button>
                                    </div>
                                    <button class="btn-menu d-xl-none">
                                        <img src="{{ asset('web/assets/img/icons/menu-dark.png') }}"
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


            <section class="cavabunga__about product__information">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="item__section contentFirst">
                                <div class="content">
                                    <h2>proudly made in india</h2>
                                    <p>India is the hub for creativity and passion. It was important for us to make the
                                        country a staple in our work and design process. India’s artisans, above-grade
                                        materials, outstanding roster of clientele, and overall
                                        ebullience make it the perfect place for Cavabunga to call home.</p>
                                    <p>As a brand we exude this same desire to express joy in all faucets of life. In
                                        fact, you can say that’s how we got our name - Cavabunga. It’s this same
                                        embodiment found in India that reminds us of why we decided to
                                        begin this line in the first place.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 right__content">
                            <div class="col-md-12 m-0">
                                <div class="item__section aboutrOne">
                                    <div class="content">
                                        <h2>being responsible</h2>
                                        <p>At Cavabunga, we use genuine and natural products that retain the lowest
                                            levels of wastage when designing. As a new-age and forward thinking brand,
                                            we’ve found ways to be aware of the impact we have on the planet.</p>
                                        <a href="#" class="btn-theme btn-black">more info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 m-0">
                                <div class="item__section aboutrTwo">
                                    <div class="content">
                                        <h2>product choices</h2>
                                        <p>Cavabunga goods are made using the finest of materials. We obtain everything
                                            from bamboo pulp to recyclable leather to produce the same quality pieces
                                            you’re used to – only this time in justifiable ways.</p>
                                        <a href="#" class="btn-theme btn-black">more info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        <!--== Scroll Top Button ==-->
        <!-- <div class="scroll-to-top"><span class="icofont-arrow-up"></span></div> -->

        <!--== Start Product Quick View ==-->
        {{-- <aside class="product-quick-view-modal">
            <div class="product-quick-view-inner">
                <div class="product-quick-view-content">
                    <button type="button" class="btn-close">
                        <span class="close-icon"><i class="lastudioicon-e-remove"></i></span>
                    </button>
                    <div class="row row-gutter-0">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="thumb">
                                <img src="assets/img/shop/quick-view1.jpg" alt="Moren-Shop">
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
        </aside> --}}
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
        @include('web.sideCart')
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
                    <label for="toggle3" class="animate"><img src="assets/img/flags/uae.png" alt=""></label>
                    <ul class="animate m-0">
                        <li class="animate">
                            <p>German</p><img src="assets/img/flags/german.png" alt="">
                        </li>
                        <li class="animate">
                            <p>bangaladesh</p><img src="assets/img/flags/bangaladesh.png" alt="">
                        </li>
                        <li class="animate">
                            <p>Turkey</p>
                            <img src="assets/img/flags/turkey.png" alt=" ">
                        </li>
                        <li class="animate">
                            <p>German</p><img src="assets/img/flags/german.png" alt="">
                        </li>
                        <li class="animate">
                            <p>bangaladesh</p><img src="assets/img/flags/bangaladesh.png" alt="">
                        </li>
                        <li class="animate">
                            <p>Turkey</p>
                            <img src="assets/img/flags/turkey.png" alt=" ">
                        </li>
                    </ul>
                </dropdown>
            </div>
        </aside>
        <!--== End Side Menu ==-->
        @include('web.footer')
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
    <script src="{{ asset('web/assets/js/wow.min.js') }}"></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-zoom.min.js') }}"></script>

    <!--=== Custom Js ===-->
    <script src="{{ asset('web/assets/js/custom.js') }}"></script>

</body>

</html>
