<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | Wallet | A Lifestyle brand crafted with love by millennials, for millennials</title>

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
</head>

<!-- <body oncontextmenu="return false"> -->

<body>

    <!--wrapper start-->
    <div class="wrapper products-single-wrapper">

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
        @include('web.header')
        <!--== End Header Wrapper ==-->

        <main class="main-content site-wrapper-reveal">
            <section class="cavabunga__wallet">
                <div class="container">
                    <div class="wallet__width">
                        <div class="title">
                            <h2>{{ $category->sub_category_name }}</h2>
                        </div>
                        <div class="row">
                            <div class="inner-left-padding">
                                <div class="shop-toolbar-wrap">
                                    <div class="shop-toolbar-right">
                                        <div class="popularity">
                                            <h6>Sort :</h6>
                                            <div class="product-sorting-menu product-view-count">

                                                <span class="current">Popularity <i
                                                        class="lastudioicon-down-arrow"></i></span>
                                                <ul>
                                                    <li class="active"><a href="#" class="active">What's
                                                            New</a></li>
                                                    <li><a href="#">Relevance</a></li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="filter__section">
                                            <h6>Filter :</h6>
                                            <div class="section__filter">
                                                <div class="product-sorting-menu product-view-count">

                                                    <span class="current">Price <i
                                                            class="lastudioicon-down-arrow"></i></span>
                                                    <ul>
                                                        <li class="active"><a href="#"
                                                                class="active">Price low to high</a></li>
                                                        <li><a href="#">Price high to low</a></li>
                                                        <li><a href="#">Discount</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-sorting-menu product-sorting">
                                                    <span class="current">Color <i
                                                            class="lastudioicon-down-arrow"></i></span>
                                                    <ul>
                                                        <li class="active"><a href="#"
                                                                class="active">Red</a></li>
                                                        <li><a href="#">Yellow</a></li>
                                                        <li><a href="#">green</a></li>
                                                        <li><a href="#">Black</a></li>
                                                        <li><a href="#">White</a></li>
                                                    </ul>
                                                </div>
                                                <div
                                                    class="product-sorting-menu product-sorting d-sm-none d-lg-block d-md-block">
                                                    <span class="current">Collection <i
                                                            class="lastudioicon-down-arrow"></i></span>
                                                    <ul>
                                                        <li class="active"><a href="#"
                                                                class="active">New Collection</a></li>
                                                        <li><a href="#">Leather Type</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row product__grid">

                            <div class="col-md-4">
                                <div class="single__product first">
                                    <div class="wallet__section">
                                        <div class="imagage__sec">
                                            <img src="{{ asset('web/assets/img/wallet.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__description">
                                            <h3>Mario page wallet</h3>
                                            <h5>luxury leather wallet</h5>
                                            <h4>$65.50</h4>
                                        </div>
                                        <div class="more__info">
                                            <a href="{{ url('details-page') }}" class="btn-info">more info</a>
                                            <a href="#" class="cart-btn">
                                                <img src="{{ asset('web/assets/img/icons/wallet-cart.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="single__product second">
                                    <div class="wallet__section">
                                        <div class="imagage__sec">
                                            <img src="{{ asset('web/assets/img/wallet.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__description">
                                            <h3>Mario page wallet</h3>
                                            <h5>luxury leather wallet</h5>
                                            <h4>$65.50</h4>
                                        </div>
                                        <div class="more__info">
                                            <a href="{{ url('details-page') }}" class="btn-info">more info</a>
                                            <a href="#" class="cart-btn">
                                                <img src="{{ asset('web/assets/img/icons/wallet-cart.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="single__product third">
                                    <div class="wallet__section">
                                        <div class="imagage__sec">
                                            <img src="{{ asset('web/assets/img/wallet.png') }}"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="product__content">
                                        <div class="product__description">
                                            <h3>Mario page wallet</h3>
                                            <h5>luxury leather wallet</h5>
                                            <h4>$65.50</h4>
                                        </div>
                                        <div class="more__info">
                                            <a href="{{ url('details-page') }}" class="btn-info">more info</a>
                                            <a href="#" class="cart-btn">
                                                <img src="{{ asset('web/assets/img/icons/wallet-cart.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="rounded__shape"></div>
                        </div>
                    </div>

                </div>
                <div class="rounded__shape_lg"></div>
            </section>


        </main>


        <aside class="product-quick-view-modal">
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
        </aside>

        <div class="sidebar-cart-overlay"></div>

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
