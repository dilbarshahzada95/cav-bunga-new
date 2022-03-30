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

<body>


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

        @include('web.header')




        <main class="main-content site-wrapper-reveal">
            <section class="cavabunga__partners">
                <div class="container-fluid partners__section">
                    <div class="title">
                        <h2>Our partners</h2>
                    </div>
                    <div class="row millenial__talent__section">
                        <div class="pattern">
                            <img src="{{ asset('web/assets/img/pattern/partners.png') }}"
                                class="d-sm-none d-lg-block d-md-block" alt="">
                            <img src="{{ asset('web/assets/img/pattern/partners-sm.png') }}"
                                class="d-sm-blocl d-lg-none d-md-none" alt="">
                        </div>
                        <div class="col-md-5">
                            <div class="millenial__talent">
                                <h2>Millenial Talent</h2>
                                <p>At Cavabunga, we’re dedicated to finding millennial talent across the world who can
                                    help bring our vision to life. From our manufacturers to our designers, we handpick
                                    those individuals who have an open-mind and are dedicated
                                    to creating innovative pieces for those who are like themselves.</p>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="millenial__talent__img">
                                <img src="{{ asset('web/assets/img/partners/1.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row millenial__talent__section justify-content-end text-right sm__reverse">
                        <div class="pattern__one"></div>
                        <div class="col-md-3">
                            <div class="millenial__talent__img">
                                <img src="{{ asset('web/assets/img/partners/2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="millenial__talent">
                                <h2>No Bad Ideas</h2>
                                <p>Similarly, our manufacturers are also innovative creators who we like to partner
                                    with. Rather than have a transactional relationship, we collaborate together to
                                    figure out how we can shape and shift the fashion industry
                                    in unexpected ways.</p>
                            </div>

                        </div>
                    </div>


                    <div class="row millenial__talent__section justify-content-center">
                        <div class="rouded__pattern"></div>
                        <div class="col-md-6">
                            <div class="millenial__talent">
                                <h2>Innovative Creators</h2>
                                <p>Our designers are given full reign to conceptualize, strategize, and create work that
                                    feels true to us as millennials. We give them the creative freedom to ideate around
                                    what would resonate with our target. Like our designers,
                                    we pride ourself on bringing any and every idea to the market. It’s this same
                                    revolutionary passion that our designers have that keep the Cavabunga brand alive.
                                </p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="millenial__talent__img text-right">
                                <img src="{{ asset('web/assets/img/partners/3.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>

            </section>


        </main>


        <section id="footer" class="cavabunga__footer__section">
            @include('web.footer')
        </section>


    </div>







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

</body>

</html>
