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
        @include('web.header')
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
