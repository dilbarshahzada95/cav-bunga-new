<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cavabunga | PRODUCT DETAILS | A Lifestyle brand crafted with love by millennials, for millennials</title>
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

<body class="details__page__cavabunga detailspagelg">
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
                                        <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                            alt="Logo" />
                                        <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                            alt="Logo" />
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
                                                    <p>German</p>
                                                    <img src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>bangaladesh</p>
                                                    <img src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
                                                        alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>Turkey</p>
                                                    <img src="{{ asset('web/assets/img/flags/turkey.png') }}"
                                                        alt=" ">
                                                </li>
                                                <li class="animate">
                                                    <p>German</p>
                                                    <img src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                                </li>
                                                <li class="animate">
                                                    <p>bangaladesh</p>
                                                    <img src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
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
                                            <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                                class="img-fluid d-sm-none d-md-block d-lg-block" alt="">
                                            <img src="assets/img/icons/user-dark.png')}}"
                                                class="img-fluid d-sm-block d-md-none d-lg-none" alt="">
                                        </button>
                                    </div>
                                    <div class="header-action-cart">
                                        <button class="btn-cart cart-icon">
                                            <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                                class="img-fluid d-sm-none d-md-block d-lg-block" alt="">
                                            <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                                                class="img-fluid d-sm-block d-md-none d-lg-none" alt="">
                                            <span class="cart-count">0 items</span>
                                        </button>
                                    </div>
                                    <button class="btn-menu d-xl-none">
                                        <img src="{{ asset('web/assets/img/icons/menu.png') }}"
                                            class="img-fluid d-sm-none d-md-block d-lg-block" alt="">
                                        <img src="{{ asset('web/assets/img/icons/menu-dark.png') }}"
                                            class="img-fluid d-sm-block d-md-none d-lg-none" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->
        <main class="main-content site-wrapper-reveal cavabunga__single__details">
            <section class="cavabunga__product__preview">
                <div class="product-area shop-single-product">
                    <div class="bg__half"></div>
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 sm__half__bg">
                                <div class="product__image__slider">
                                    <ul class="thumb">
                                        <li class="active">
                                            <a href="{{ asset('web/assets/img/shop/shop-details/shop1-withshadow.png') }}"
                                                target="imgBox">
                                                <img src="{{ asset('web/assets/img/shop/shop-details/shop1-withshadow.png') }}"
                                                    alt="Cavabunga product image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('web/assets/img/shop/shop-details/shop2.png') }}"
                                                target="imgBox">
                                                <img src="{{ asset('web/assets/img/shop/shop-details/shop2.png') }}"
                                                    alt="Cavabunga product image">
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ asset('web/assets/img/shop/shop-details/shop1-withshadow.png') }}"
                                                target="imgBox">
                                                <img src="{{ asset('web/assets/img/shop/shop-details/shop1-withshadow.png') }}"
                                                    alt="Cavabunga product image">
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="imgBox">
                                        <a href="image__highlight.html">
                                            <img src="{{ asset('web/assets/img/shop/shop-details/shop1-withshadow.png') }}"
                                                alt="Cavabunga product image">
                                        </a>


                                    </div>
                                </div>
                                <div class="back__arrow">
                                    <a href="shop-details.html">
                                        <img src="{{ asset('web/assets/img/icons/back-black.png') }}" alt=""> go back
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 bg-sm-shop__Details">
                                <div class="single-product-info">
                                    <h5>on the radar</h5>
                                    <h4 class="title">arno backpack</h4>
                                    <p class="product-desc mb-30 ">Lorem ipsum dolor sit amet, consetetur sadipscing
                                        elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                        erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                        rebum. Stet
                                        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product__details d-flex">
                                                <div class="volume">
                                                    <span>volume</span>
                                                    <h4>32.5 L</h4>
                                                </div>
                                                <div class="height">
                                                    <span>height</span>
                                                    <h4>62 cm</h4>
                                                </div>
                                            </div>
                                            <div class="description d-flex">
                                                <div class="bottom__content">
                                                    <p>detachable pockets
                                                    </p>
                                                </div>
                                                <div class="bottom__content">
                                                    <p>Matanee Bovine Stitching</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-6">
                                            <div class="notify__me">
                                                <button class="btn-outline mr-20">notify me</button>
                                                <button class="btn-fill">preorder now</button>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-6">
                                            <div class="notify__me">

                                                <button class="btn-fill">Add To Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-slider-area cava__shop d-sm-none d-lg-block d-md-block product__showcase">
                <div class="home-slider-content">
                    <div class="swiper-container cava__shop__details">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slider__background">
                                <!-- Start Slide Item -->
                                <div class="home-slider-item sm-product-slider-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="thumb thumb-style">
                                                    <img class="shop__image"
                                                        src="{{ asset('web/assets/img/shop/shop-details/shop1.png') }}"
                                                        alt="Moren-Image">
                                                    <div class="line__highlights">
                                                        <div class="round"></div>
                                                    </div>
                                                    <div class="shadow__img">
                                                        <img src="{{ asset('web/assets/img/shop/shop-details/shop1-shadow.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="box-item">
                                                    <div class="box-content d-sm-none d-lg-block">
                                                        <h4>Detachable Front Pocket</h4>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                                            justo duo dolores
                                                            et ea rebum.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shape-layer-items">
                                        <div class="details__shape"></div>
                                    </div>
                                </div>
                                <!-- End Slide Item -->
                            </div>
                            <div class="swiper-slide slider__background">
                                <!-- Start Slide Item -->
                                <div class="home-slider-item sm-product-slider-item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <div class="thumb thumb-style">
                                                    <img class="shop__image"
                                                        src="{{ asset('web/assets/img/shop/shop-details/shop1.png') }}"
                                                        alt="Moren-Image">
                                                    <div class="line__highlights">
                                                        <div class="round"></div>
                                                    </div>
                                                    <div class="shadow__img">
                                                        <img src="{{ asset('web/assets/img/shop/shop-details/shop1-shadow.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="box-item">
                                                    <div class="box-content d-sm-none d-lg-block">
                                                        <h4>Detachable Front Pocket</h4>
                                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                            diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                            aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                                            justo duo dolores
                                                            et ea rebum.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shape-layer-items">
                                        <div class="details__shape"></div>
                                    </div>
                                </div>
                                <!-- End Slide Item -->
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next">
                            <img src="{{ asset('web/assets/img/icons/high-left.png') }}" alt="">

                        </div>
                        <div class="swiper-button-prev">
                            <img src="{{ asset('web/assets/img/icons/high-right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Modal -->
        <div class="product__overview__model">
            <div class="product modal fade d-lg-none" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detachable Front Pocket</h5>
                            <a class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">close</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum.
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('.thumb a').click(function(e) {
                e.preventDefault();
            });
            $('.thumb a').click(function(e) {
                e.preventDefault();
                $('.imgBox img').attr('src', $(this).attr('href'));
            });

            $(document).ready(function() {
                $("li").click(function() {
                    $("li").removeClass("active");
                    $(this).addClass("active");
                });
            });

        });
    </script>


</body>

</html>
