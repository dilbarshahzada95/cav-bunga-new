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
                                        @php
                                            $i = 1;
                                            $thumbImage = '';
                                        @endphp
                                        @if (!empty($product_image))
                                            @foreach ($product_image as $product)
                                                <li class="active">
                                                    <a href="{{ asset('product_image/thumbnail/' . $product) }}"
                                                        target="imgBox">
                                                        <img src="{{ asset('product_image/' . $product) }}"
                                                            alt="Cavabunga product image">
                                                    </a>
                                                </li>
                                            @endforeach
                                            @php
                                                $i++;
                                            @endphp
                                        @endif

                                    </ul>

                                    <div class="imgBox">
                                        <a href="#">
                                            @if (!empty($product_image[0]))
                                                <img src="{{ asset('product_image/thumbnail/' . $product_image[0]) }}"
                                                    alt="Cavabunga product image">
                                            @endif

                                        </a>


                                    </div>
                                </div>
                                <div class="back__arrow">
                                    <a href="{{ url('shoping') }}">
                                        <img src="{{ asset('web/assets/img/icons/back-black.png') }}" alt=""> go back
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 bg-sm-shop__Details">
                                <div class="single-product-info">
                                    <h5>{{ $data->slogan }}</h5>
                                    <h4 class="title">{{ $data->product_name }}</h4>
                                    <p class="product-desc mb-30 ">{{ $data->product_description }}
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product__details d-flex">
                                                <div class="volume">
                                                    <span>volume</span>
                                                    <h4>{{ $data->volume }} L</h4>
                                                </div>
                                                <div class="height">
                                                    <span>height</span>
                                                    <h4>{{ $data->wieght }} cm</h4>
                                                </div>
                                            </div>
                                            <div class="description d-flex">
                                                @php
                                                    $tags = [];
                                                    $tags = explode(',', $data->tags);

                                                @endphp

                                                <div class="bottom__content">
                                                    <p>{{ isset($tags[0]) ? $tags[0] : '' }}
                                                    </p>
                                                </div>
                                                <div class="bottom__content">
                                                    <p>{{ isset($tags[1]) ? $tags[1] : '' }}
                                                    </p>
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
                            @foreach ($featured_product as $featured)
                                <div class="swiper-slide slider__background">
                                    <!-- Start Slide Item -->
                                    <div class="home-slider-item sm-product-slider-item">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="thumb thumb-style">
                                                        <img class="shop__image"
                                                            src="{{ asset('featured_product_image/' . $featured->image) }}"
                                                            alt="Moren-Image">
                                                        <div class="line__highlights">
                                                            <div class="round"></div>
                                                        </div>
                                                        <div class="shadow__img">
                                                            <img src="{{ asset('featured_product_image/' . $featured->image) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="box-item">
                                                        <div class="box-content d-sm-none d-lg-block">
                                                            <h4>{{ $featured->title }}</h4>
                                                            <p>{{ $featured->description }}
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
                            @endforeach

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
