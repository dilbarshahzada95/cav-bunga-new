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
            <section class="cavabunga__designer">
                <div class="pattern__round"></div>
                <div class="pattern__one"></div>
                <div class="pattern__two"></div>
                <div class="container designer__section">
                    <div class="title">
                        <h2>Our designer</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="designer__image">
                                <img src="{{ asset('web/assets/img/designer.png') }}" alt="">
                                <h2>Shimazar</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="designer__description">
                                <p>Graduated in fashion business management from the Università Commerciale Luigi
                                    Bocconi and leather goods and footwear design from the Università Degli Studi
                                    ofFlorence.</p>
                                <p>Shima's graduation collection was showcased in Florence city hall fashion show and
                                    went on to receive industry-wide recognition. </p>
                                <hr>
                                <p>She takes elements from her knowledge in pattern making and know-how in high quality
                                    production. she worked for local Italian large leather goods industries as
                                    Braccialini, Gherardini, Vivienne Westwood, Givenchy, Roberto
                                    Cavalli, Giorgio Armani, Isaac Mizrahi, Elena Ghisellini, Tom Ford, Dolce&Gabbana
                                    and American high-end as Nick Fouquet, Etoile, Von Holzhausen, Casso, Âme Soeur.
                                    Rylan, ALC, Baggu, SJP, Amiri,.. etc.</p>
                                <h4>Brands I have worked on</h4>
                                <div class="row brand__Section">
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/1.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/2.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/3.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/4.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/5.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/6.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/7.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/8.png') }}"
                                            alt=""></div>
                                    <div class="brand__img"><img src="{{ asset('web/assets/img/brands/9.png') }}"
                                            alt=""></div>
                                </div>
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
