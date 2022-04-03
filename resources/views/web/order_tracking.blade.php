<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | ORDER TRACKING | A Lifestyle brand crafted with love by millennials, for millennials</title>

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
    <div class="wrapper products-single-wrapper order">

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
            <section class="order__tracking">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <div class="order__tracking">
                                <div class="title">
                                    <h2>Order Tracking</h2>
                                </div>
                                <div class="order__method andID">
                                    <div class="orderID">
                                        <span>order id</span>
                                        <h5>0382 182930</h5>
                                    </div>
                                    <div class="Method">
                                        <span>Shipping Method</span>
                                        <h5>Standard shipping - free</h5>
                                    </div>
                                </div>
                                <div class="shipping__address">
                                    <div class="address">
                                        <span>Shipping from</span>
                                        <h4>Serpentine Street 234 20001 Washington D.C. United States of America</h4>
                                    </div>
                                    <div class="arrow">
                                        <img src="{{ asset('web/assets/img/icons/arrow.png') }}" alt="">
                                    </div>
                                    <div class="shipping__to">
                                        <span>shipping to</span>
                                        <h4>Blakery Lane 11 65733 Missouri United States of America</h4>
                                    </div>
                                </div>
                                <div class="container p-0 mt-4">

                                    <div class="order___tracking">
                                        <div class="status">
                                            <h2>status</h2>
                                        </div>
                                        <ul>
                                            <li class="is-complete">
                                                <div class="line"></div>
                                                <p>Order Received
                                                </p>
                                                <div class="time">10-10-2021</div>
                                                <div class="time">3:20pm</div>
                                            </li>
                                            <li class="is-complete">
                                                <div class="line"></div>
                                                <p>Order in Production
                                                </p>
                                                <div class="time">10-10-2021</div>
                                                <div class="time">5:20pm</div>
                                            </li>
                                            <li class="active">
                                                <div class="line"></div>
                                                <p>Ready for Shipping
                                                </p>
                                                <div class="time">11-10-2021</div>
                                                <div class="time">11:20pm</div>
                                            </li>
                                            <li class="not-complete">
                                                <div class="line"></div>
                                                <p>Order Sent
                                                </p>
                                            </li>
                                            <li class="not-complete">
                                                <div class="line"></div>
                                                <p>Delivery Today
                                                </p>
                                            </li>
                                            <li class="not-complete">
                                                <div class="line"></div>
                                                <p>Order Delivered
                                                </p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="order__method  d-flex justify-content-md-between">
                                    <div class="orderID">
                                        <span>Current location</span>
                                        <h5>Cavabunga Factory</h5>
                                    </div>
                                    <div class="Method">
                                        <span>Expected delivery</span>
                                        <h5>15-10-2021</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0">
                            <div class="order__summary position-relative">
                                <div class="pattern__order"></div>
                                <div class="bottom__rounded"></div>
                                <div class="title">
                                    <h2>Order Summary</h2>
                                </div>
                                <div class="contents">
                                    <span>content</span>
                                    <div class="order__details">
                                        <p>Arno Backpack Mario Page Wallet Lucy Vanity Kit</p>
                                    </div>
                                    <span>Number of packages</span>
                                    <p>3 Packages</p>
                                    <span>Total price</span>
                                    <p>$297.40</p>
                                </div>
                                <div class="title mt-3">
                                    <h2>Current Location</h2>
                                </div>
                                <div class="map">
                                    <!--Google map-->
                                    <div id="map-container-google-2" class="z-depth-1-half map-container"
                                        style="width: 100%;">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462560.3011839799!2d54.94754637692711!3d25.07638147181713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1640061876154!5m2!1sen!2sin"
                                            width="100%" height="200" style="border:0;border-radius: 5px;"
                                            allowfullscreen="" loading="lazy"></iframe>
                                    </div>

                                    <!--Google Maps-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>





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
    <!-- <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script> -->

</body>

</html>
