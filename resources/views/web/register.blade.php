<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | REGISTER | A Lifestyle brand crafted with love by millennials, for millennials</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('web/assets/img/favicon.png') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

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

<!-- <body oncontextmenu="return false"> -->

<body>

    <!--wrapper start-->
    <div class="wrapper home-six-wrapper">

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
        <header class="header-area header-default header-style2 header-transparent sticky-header">
            <div class="container-fluid">
                <div class="row row-gutter-0 align-items-center">
                    <div class="col-12">
                        <div class="header-align">
                            <div class="header-align-left">
                                <div class="header-logo-area">
                                    <a href="{{ url('/') }}">
                                        <img class="logo-main d-none d-sm-block f-logo"
                                            src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                        <img class="logo-main d-sm-none" src="assets/img/logo.png" alt="Logo" />
                                        <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                            alt="Logo" />
                                    </a>
                                </div>
                                <div class="header-navigation-area d-none d-xl-block d-md-none d-lg-none">
                                    <ul class="main-menu nav justify-content-center position-relative">
                                        <li></li>
                                        <li class="active"></li>
                                        <li><a href=""></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="cavabunga__login height-100 register_account">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="login-form">
                                        <form class="login-form-wrapper">
                                            <div class="row ">
                                                <div class="col-lg-12">
                                                    <div class="title">
                                                        <h5>welcome to cavabunga</h5>
                                                        <h2>Create your account</h2>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="UserName"
                                                                    class="form-label">EMAIL</label>
                                                                <input type="email" class="form-control" id="UserName"
                                                                    placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                <label for="password" class="form-label">Password
                                                                </label>
                                                                <input type="password" class="form-control"
                                                                    id="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                <label for="password" class="form-label">Confirm
                                                                    Password </label>
                                                                <input type="password" class="form-control"
                                                                    id="password" placeholder="Confirm Password">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div
                                                                class="form-group mb-0 form-group-info text-center mt-0">
                                                                <button class="btn btn-theme btn-black"
                                                                    type="submit">Register</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-12 justify-content-lg-between d-flex mt-4 sm-d-block">
                                                    <div class="social__login">
                                                        <a href="{{ url('login/facebook') }}">
                                                            <img src="{{ asset('web/assets/img/icons/facebook.png') }}"
                                                                alt=""> login with facebook
                                                        </a>
                                                    </div>
                                                    <div class="social__login">
                                                        <a href="{{ url('login/gmail') }}">
                                                            <img src="{{ asset('web/assets/img/icons/google.png') }}"
                                                                alt=""> login with google
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="register__link">
                                                    <p>Already have an account? <a href="{{ url('login-user') }}">Log
                                                            in!</a></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 register__slider">
                            <div class="home-slider-area cavabunga__login register">
                                <div class="home-slider-content ">
                                    <div class="swiper-container home-slider4-container ">
                                        <div class="top__rounded"></div>
                                        <div class="bottom__rounded"></div>
                                        <div class="image__text">
                                            <img src="{{ asset('web/assets/img/pattern/logo-pattern.png') }}" alt="">
                                            <h5 class="text-right">A lifestyle brand crafted with love by
                                                millennials, for millennials.</h5>
                                        </div>
                                        <div class="swiper-wrapper ">
                                            <div class="swiper-slide ">
                                                <!-- Start Slide Item -->
                                                <div class="home-slider-item ">
                                                    <img src="{{ asset('web/assets/img/products/register.png') }}"
                                                        alt="">
                                                </div>
                                                <!-- End Slide Item -->
                                            </div>
                                            <div class="swiper-slide ">
                                                <!-- Start Slide Item -->
                                                <div class="home-slider-item ">
                                                    <img src="{{ asset('web/assets/img/products/register.png') }}"
                                                        alt="">
                                                </div>
                                                <!-- End Slide Item -->
                                            </div>

                                        </div>
                                        <!-- Add Pagination -->
                                        <div class="swiper-pagination "></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Hero Area Wrapper ==-->


            <aside class="product-quick-view-modal ">
                <div class="product-quick-view-inner ">
                    <div class="product-quick-view-content ">
                        <button type="button " class="btn-close ">
                            <span class="close-icon "><i class="lastudioicon-e-remove "></i></span>
                        </button>
                        <div class="row row-gutter-0 ">
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="thumb ">
                                    <img src="{{ asset('web/assets/img/shop/quick-view1.jpg') }} " alt="Moren-Shop ">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 ">
                                <div class="single-product-info ">
                                    <h4 class="title ">Product Simple</h4>
                                    <div class="product-rating ">
                                        <div class="review ">
                                            <p><span></span>99 in stock</p>
                                        </div>
                                    </div>
                                    <div class="prices ">
                                        <span class="price ">£49.90</span>
                                    </div>
                                    <p class="product-desc ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Fringilla quis ipsum enim viverra. Enim in morbi tincidunt ante luctus tincidunt
                                        integer. Sed adipiscing vehicula.</p>
                                    <div class="quick-product-action ">
                                        <div class="action-top ">
                                            <div class="pro-qty-area ">
                                                <div class="pro-qty ">
                                                    <input type="text " id="quantity " title="Quantity " value="1 ">
                                                    <a href="# " class="inc qty-btn ">+</a><a href="# "
                                                        class="dec qty-btn ">-</a>
                                                </div>
                                            </div>
                                            <a class="btn-theme btn-black " href="# ">Add to cart</a>
                                        </div>
                                        <div class="action-bottom ">
                                            <a class="btn-wishlist " href="# "><i
                                                    class="labtn-icon labtn-icon-wishlist "></i>Add to wishlist</a>
                                            <a class="btn-compare " href="# "><i
                                                    class="labtn-icon labtn-icon-compare "></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="product-ratting ">
                                        <div class="product-sku ">
                                            SKU: <span>REF. LA-276</span>
                                        </div>
                                    </div>
                                    <div class="product-categorys ">
                                        <div class="product-category ">
                                            Category: <span>Uncategorized</span>
                                        </div>
                                    </div>
                                    <div class="widget ">
                                        <h3 class="title ">Tags:</h3>
                                        <div class="widget-tags ">
                                            <ul>
                                                <li><a href="# ">Blazer,</a></li>
                                                <li><a href="# ">Fashion,</a></li>
                                                <li><a href="# ">wordpress,</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-social-info ">
                                        <a href="# "><span class="lastudioicon-b-facebook "></span></a>
                                        <a href="# "><span class="lastudioicon-b-twitter "></span></a>
                                        <a href="# "><span class="lastudioicon-b-linkedin "></span></a>
                                        <a href="# "><span class="lastudioicon-b-pinterest "></span></a>
                                    </div>
                                    <div class="product-nextprev ">
                                        <a href="# ">
                                            <i class="lastudioicon-arrow-left "></i>
                                        </a>
                                        <a href="# ">
                                            <i class="lastudioicon-arrow-right "></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas-overlay "></div>
            </aside>
            <aside class="sidebar-cart-modal ">
                <div class="sidebar-cart-inner ">
                    <div class="sidebar-cart-content ">
                        <a class="cart-close " href="javascript:void(0); "><i
                                class="lastudioicon-e-remove "></i></a>
                        <div class="sidebar-cart ">
                            <h4 class="sidebar-cart-title ">Shopping Cart</h4>
                            <div class="product-cart ">
                                <div class="product-cart-item ">
                                    <div class="product-img ">
                                        <a href="# "><img src="{{ asset('web/assets/img/shop/cart/1.jpg') }} "
                                                alt=" "></a>
                                    </div>
                                    <div class="product-info ">
                                        <h4 class="title "><a href="# ">Men Black Shoe</a></h4>
                                        <span class="info ">AED 70.00</span>
                                    </div>
                                    <div class="product-delete "><a href="#/ ">×</a></div>
                                </div>
                                <div class="product-cart-item ">
                                    <div class="product-img ">
                                        <a href="# "><img src="{{ asset('web/assets/img/shop/cart/2.jpg') }} "
                                                alt=" "></a>
                                    </div>
                                    <div class="product-info ">
                                        <h4 class="title "><a href="# ">Leather Men Shoe</a></h4>
                                        <span class="info ">AED 30.00</span>
                                    </div>
                                    <div class="product-delete "><a href="#/ ">×</a></div>
                                </div>
                            </div>
                            <div class="cart-total ">
                                <h4>Subtotal: <span class="money ">AED 100.00</span></h4>
                            </div>
                            <!-- <div class="shipping-info ">
                                <div class="loading-bar ">
                                    <div class="load-percent "></div>
                                    <div class="label-free-shipping ">
                                        <div class="free-shipping svg-icon-style ">
                                            <span class="svg-icon " id="svg-icon-shipping " data-svg-icon="assets/img/icons/shop1.svg "></span>
                                        </div>
                                        <p>Spend £101.10 to get Free Shipping</p>
                                    </div>
                                </div>
                            </div> -->
                            <div class="cart-checkout-btn ">
                                <a class="btn-theme " href="# ">View cart</a>
                                <a class="btn-theme " href="# ">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="sidebar-cart-modal">
                    <div class="sidebar-cart-inner">
                        <div class="sidebar-cart-content">
                            <a class="cart-close" href="javascript:void(0);"><i
                                    class="lastudioicon-e-remove"></i></a>
                            <div class="sidebar-cart">
                                <h4 class="sidebar-cart-title">Shopping Cart</h4>
                                <hr>
                                <div class="product-cart">
                                    <div class="product-cart-item">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ asset('web/assets/img/shop/cart/1.png') }}"
                                                    alt=""></a>
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
                                            <a href="#"><img src="{{ asset('web/assets/img/shop/cart/2.png') }}"
                                                    alt=""></a>
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
                                            <a href="#"><img src="{{ asset('web/assets/img/shop/cart/3.png') }}"
                                                    alt=""></a>
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
                <div class="sidebar-cart-overlay "></div>

                <aside class="off-canvas-wrapper ">
                    <div class="off-canvas-inner ">
                        <div class="off-canvas-overlay d-none "></div>
                        <!-- Start Off Canvas Content Wrapper -->
                        <div class="off-canvas-content ">
                            <!-- Off Canvas Header -->
                            <div class="off-canvas-header ">
                                <div class="close-action ">
                                    <button class="btn-close "><i class="icofont-close-line "></i></button>
                                </div>
                            </div>

                            <div class="off-canvas-item ">
                                <!-- Start Mobile Menu Wrapper -->
                                <div class="res-mobile-menu ">
                                    <!-- Note Content Auto Generate By Jquery From Main Menu -->
                                </div>
                                <!-- End Mobile Menu Wrapper -->
                            </div>
                            <!-- Off Canvas Footer -->
                            <div class="off-canvas-footer "></div>
                        </div>
                        <!-- End Off Canvas Content Wrapper -->
                    </div>
                </aside>
    </div>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="{{ asset('web/assets/js/modernizr.js') }} "></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-main.js') }} "></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-migrate.js') }} "></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('web/assets/js/popper.min.js') }} "></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }} "></script>
    <!--=== jquery Appear Js ===-->
    <script src="{{ asset('web/assets/js/jquery.appear.js') }} "></script>
    <!--=== jquery Swiper Min Js ===-->
    <script src="{{ asset('web/assets/js/swiper.min.js') }} "></script>
    <!--=== jquery Fancybox Min Js ===-->
    <script src="{{ asset('web/assets/js/fancybox.min.js') }} "></script>
    <!--=== jquery Aos Min Js ===-->
    <script src="{{ asset('web/assets/js/aos.min.js') }} "></script>
    <!--=== jquery Slicknav Js ===-->
    <script src="{{ asset('web/assets/js/jquery.slicknav.js') }} "></script>
    <!--=== jquery Countdown Js ===-->
    <script src="{{ asset('web/assets/js/jquery.countdown.min.js') }} "></script>
    <!--=== jquery Tippy Js ===-->
    <script src="{{ asset('web/assets/js/tippy.all.min.js') }} "></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('web/assets/js/isotope.pkgd.min.js') }} "></script>
    <!--=== jquery Vivus Js ===-->
    <script src="{{ asset('web/assets/js/vivus.js') }} "></script>
    <!--=== Parallax Min Js ===-->
    <script src="{{ asset('web/assets/js/parallax.min.js') }} "></script>
    <!--=== Slick  Min Js ===-->
    <script src="{{ asset('web/assets/js/slick.min.js') }} "></script>
    <!--=== jquery Wow Min Js ===-->
    <script src="{{ asset('web/assets/js/wow.min.js') }} "></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-zoom.min.js') }} "></script>

    <!--=== Custom Js ===-->
    <script src="{{ asset('web/assets/js/custom.js') }} "></script>

</body>

</html>
