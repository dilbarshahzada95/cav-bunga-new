<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | Affiliate Program| A Lifestyle brand crafted with love by millennials, for millennials</title>

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
        <header class="header-area header-default header-style2 header-transparent sticky-header">
            <div class="container-fluid">
                <div class="row row-gutter-0 align-items-center">
                    <div class="col-12">
                        <div class="header-align">
                            <div class="header-align-left">
                                <div class="header-logo-area">
                                    <a href="#">
                                        <img class="logo-main d-none d-sm-block f-logo"
                                            src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
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
                                                    <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
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
                                                    <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                                </li>
                                            </ul>
                                        </dropdown>
                                    </div>
                                    <div class="header-action-login">
                                        <button class="btn-login" onclick="window.location.href='login.html'">
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
                                        <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid"
                                            alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->

        <main class="main-content site-wrapper-reveal">

            <section class="affiliate__program">
                <div class="container-fluid cavabunga__affiliate">
                    <div class="cavabunga__content">
                        <div class="title">
                            <h2>Affiliate program</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="affiliate__content">
                                    <h3>Become an affiliate</h3>
                                    <p>If you are a like-minded millennial looking to make a statement in any room you
                                        are in, this is the program for you. The Cavabunga Affiliate program allows you
                                        to refer customers in exchange for</p>
                                    <ul>
                                        <li>Exclusive Deals</li>
                                        <li>Great Perks</li>
                                        <li>Up to 10% on each sale</li>
                                    </ul>
                                    <div class="program__image">
                                        <img src="{{ asset('web/assets/img/affiliate-program.png') }}" alt="">
                                    </div>
                                    <div class="rouded__shape"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="affiliate_form">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 ">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="Name Surname">
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3">
                                            <label>Country</label>
                                            <div class="country__dropdown">
                                                <div class="first__flag"><img
                                                        src="{{ asset('web/assets/img/flags/uae.png') }}"
                                                        class="down" /></div>
                                                <ul>
                                                    <li class="country__option" data-value="1">
                                                        <img src="{{ asset('web/assets/img/flags/turkey.png') }}"
                                                            alt="" />
                                                    </li>
                                                    <li class="country__option" data-value="2">
                                                        <img src="{{ asset('web/assets/img/flags/german.png') }}"
                                                            alt="" />
                                                    </li>
                                                    <li class="country__option" data-value="3">
                                                        <img src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
                                                            alt="" />
                                                    </li>
                                                    <li class="country__option" data-value="1">
                                                        <img src="{{ asset('web/assets/img/flags/uae.png') }}"
                                                            alt="" />
                                                    </li>
                                                    <li class="country__option" data-value="3">
                                                        <img src="{{ asset('web/assets/img/flags/american.png') }}"
                                                            alt="" />
                                                    </li>
                                                </ul>
                                                <input type="hidden" class="option" name="namesubmit"
                                                    value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" placeholder="Jon@email.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input type="text" class="form-control" placeholder="Phone number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-right">
                                        <button type="submit" class="btn btn-signup">Sign up <img
                                                src="{{ asset('web/assets/img/icons/next.png') }}" alt=""></button>

                                    </div>

                                    <div class="rounded-recta"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom__color"></div>
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
    <script>
        $(function() {
            // Set
            var main = $('div.country__dropdown .first__flag')
            var li = $('div.country__dropdown > ul > li.country__option')
            var inputoption = $("div.country__dropdown .option")
            var default_text = '<img src="assets/img/icons/" width="100%" height="10" class="down" />';

            // Animation
            main.click(function() {
                main.html(default_text);
                li.toggle('fast');
            });

            // Insert Data
            li.click(function() {
                // hide
                li.toggle('fast');
                var livalue = $(this).data('value');
                var lihtml = $(this).html();
                main.html(lihtml);
                inputoption.val(livalue);
            });
        });
    </script>
</body>

</html>
