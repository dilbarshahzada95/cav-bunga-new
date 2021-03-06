<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | LOGIN | A Lifestyle brand crafted with love by millennials, for millennials</title>

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
                                        <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                            alt="Logo" />
                                        <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                            alt="Logo" />
                                    </a>
                                </div>
                                <div class="header-navigation-area d-none d-xl-block d-md-none d-lg-none">
                                    <ul class="main-menu nav justify-content-center position-relative">
                                        <li><a href=""></a></li>
                                        <li class="active"><a href=""></a></li>
                                        <li><a href=""></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="header-align-right d-lg-none d-md-none">
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
                                        <button class="btn-login" onclick="window.location.href='login.html'">
                                            <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                                                class="img-fluid" alt="">
                                        </button>
                                    </div>
                                    <div class="header-action-cart">
                                        <button class="btn-cart cart-icon">
                                            <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                                                class="img-fluid" alt="">
                                            <span class="cart-count">0 items</span>
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
        <main class="main-content">
            <!--== Start Hero Area Wrapper ==-->
            <section class="cavabunga__login">
                <div class="container-fluid p-0">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="login-form">
                                        <form class="login-form-wrapper" method="POST"
                                            action="{{ route('login/customer') }}">
                                            @csrf
                                            <div class="row ">
                                                <div class="col-lg-12">
                                                    <div class="title">
                                                        <h5>welcome to cavabunga</h5>
                                                        <h2>Login to your account</h2>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="UserName"
                                                                    class="form-label">EMAIL</label>
                                                                <input type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    id="email" name="email"
                                                                    value="{{ old('email') }}" placeholder="Email"
                                                                    autocomplete="off">
                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                <label for="password" class="form-label">Password
                                                                </label>
                                                                <input type="password"
                                                                    class="form-control  @error('password') is-invalid @enderror"
                                                                    id="password" name="password" placeholder="Password"
                                                                    autocomplete="off">
                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group forgot__password">
                                                                @if (Route::has('password.request'))
                                                                    <a href="{{ route('password.request') }}">
                                                                        forgot password?
                                                                    </a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div
                                                                class="form-group mb-0 form-group-info text-center mt-0">
                                                                <button class="btn btn-theme btn-black"
                                                                    type="submit">Log in</button>
                                                            </div>
                                                        </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-12 justify-content-lg-between d-flex mt-4 sm-d-block">
                                    <div class="social__login">
                                        <a href="{{ url('login/facebook') }}">
                                            <img src="{{ asset('web/assets/img/icons/facebook.png') }}" alt=""> login
                                            with
                                            facebook
                                        </a>
                                    </div>
                                    <div class="social__login">
                                        <a href="{{ url('login/gmail') }}">
                                            <img src="{{ asset('web/assets/img/icons/google.png') }}" alt=""> login
                                            with
                                            google
                                        </a>
                                    </div>
                                </div>
                                <div class="register__link">
                                    <p>Don???t have an account yet? <a href="{{ url('register-user') }}">Register
                                            here!</a></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    </div>
    <div class="col-md-6 p-0">
        <div class="home-slider-area cavabunga__login register">
            <div class="home-slider-content ">
                <div class="swiper-container home-slider4-container ">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide ">
                            <!-- Start Slide Item -->
                            <div class="home-slider-item ">
                                <div class="thumb ">
                                    <div class="bg-thumb "
                                        data-bg-img="{{ asset('web/assets/img/login.png') }}">
                                    </div>
                                    <div class="image__text">
                                        <img src="{{ asset('web/assets/img/pattern/logo-pattern.png') }}" alt="">
                                        <h5>A lifestyle brand crafted with love by millennials, for
                                            millennials. </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Slide Item -->
                        </div>
                        <div class="swiper-slide ">
                            <!-- Start Slide Item -->
                            <div class="home-slider-item ">
                                <div class="thumb ">
                                    <div class="bg-thumb "
                                        data-bg-img="{{ asset('web/assets/img/login.png') }} ">
                                    </div>
                                    <div class="image__text">
                                        <img src="{{ asset('web/assets/img/pattern/logo-pattern.png') }}" alt="">
                                        <h5>A lifestyle brand crafted with love by millennials, for
                                            millennials. </h5>
                                    </div>
                                </div>
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
