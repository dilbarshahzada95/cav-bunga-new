<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | SHOP | A Lifestyle brand crafted with love by millennials, for millennials</title>

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
    <style>
        .newbg {
            background: linear-gradient(317deg, #943811 0%, #DED1CC 100%);
            background-size: cover;
            width: 100%;
            position: relative;
        }

        .newbg1 {
            background: linear-gradient(to right, #DED1CC, #C4A498);
            background-size: cover;
            width: 100%;
            position: relative;
        }

        /* .newbg1 {
            background: linear-gradient(317deg, #41586E 0%, #8A96A1 100%);
        } */

    </style>
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

            <section class="product-area product-description-review-area cavabunga__shop__section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-description-review">
                                <div class="title d-lg-none d-md-none d-sm-block">
                                    <h2>categories</h2>
                                </div>
                                <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab"
                                            data-bs-target="#cavabunga__shop__men" type="button" role="tab"
                                            aria-controls="cavabunga__shop__men" aria-selected="true"
                                            onclick="getMaincat({{ $men_category[0]->id }})">Men</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                            data-bs-target="#cavabunga__shop__women" type="button" role="tab"
                                            aria-controls="cavabunga__shop__women" aria-selected="false"
                                            onclick="getMaincat({{ $woman_category[0]->id }})">Women</button>
                                    </li>

                                </ul>
                                <div class="tab-content product-description-tab-content" id="myTabContent">
                                    <div class="left__pattern"></div>
                                    <div class="tab-pane fade show active" id="cavabunga__shop__men" role="tabpanel"
                                        aria-labelledby="product-desc-tab">
                                        <div class="product-area product-description-review-area pt-0 cavabunga__inner">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 p-0 ">
                                                        <div class="product-description-review">
                                                            <div class="row justify-content-center">
                                                                <div class="col-md-5">
                                                                    <ul class="nav nav-tabs product-description-tab-menu"
                                                                        id="myTab1" role="tablist">
                                                                        @foreach ($men_category as $men_cat)
                                                                            <li class="nav-item"
                                                                                role="presentation">
                                                                                <button
                                                                                    onclick="ChnageColor({{ $men_cat->layout_id }});getValue({{ $men_cat->parent_category_id }}, {{ $men_cat->id }})"
                                                                                    class="nav-link active"
                                                                                    id="product-desc-tab"
                                                                                    data-bs-toggle="tab"
                                                                                    data-bs-target="#cavabunga__Businesscard"
                                                                                    type="button" role="tab"
                                                                                    aria-controls="cavabunga__shop__men"
                                                                                    aria-selected="true">
                                                                                    {{ $men_cat->sub_category_name }}</button>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                <input type="hidden" id="men_default"
                                                                    value="{{ $men_category[0]->id }}">
                                                                <input type="hidden" id="woman_default"
                                                                    value="{{ $woman_category[0]->id }}">
                                                                <div class="col-md-7 tab-content product-description-tab-content"
                                                                    id="myTabContent1">
                                                                    <div class="tab-pane fade show active"
                                                                        id="cavabunga__Businesscard" role="tabpanel"
                                                                        aria-labelledby="product-desc-tab">
                                                                        <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                            class="img-fluid" alt="">
                                                                    </div>
                                                                    <div class="tab-pane fade"
                                                                        id="cavabunga__Vanitykits" role="tabpanel"
                                                                        aria-labelledby="product-review-tab">
                                                                        <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                            class="img-fluid" alt="">
                                                                    </div>

                                                                    <div class="tab-pane fade" id="Backpacks"
                                                                        role="tabpanel"
                                                                        aria-labelledby="product-review-tab">
                                                                        <img src="{{ asset('web/assets/img/shop/shop2.png') }}"
                                                                            class="img-fluid" alt="">
                                                                    </div>
                                                                    <div class="tab-pane fade" id="Travel__Organizers"
                                                                        role="tabpanel"
                                                                        aria-labelledby="product-review-tab">
                                                                        <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                            class="img-fluid" alt="">
                                                                    </div>
                                                                    <div class="tab-pane fade" id="cavabunga__Shoes"
                                                                        role="tabpanel"
                                                                        aria-labelledby="product-review-tab">
                                                                        <img src="{{ asset('web/assets/img/shop/shop2.png') }}"
                                                                            class="img-fluid" alt="">
                                                                    </div>
                                                                    <div class="tab-pane fade"
                                                                        id="cavabunga__collections" role="tabpanel"
                                                                        aria-labelledby="product-review-tab">
                                                                        <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                            class="img-fluid" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cavabunga__shop__women" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="tab-pane fade show active" id="cavabunga__shop__men" role="tabpanel"
                                            aria-labelledby="product-desc-tab">
                                            <div
                                                class="product-area product-description-review-area pt-0 cavabunga__inner">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12 p-0 ">
                                                            <div class="product-description-review">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-5">
                                                                        <ul class="nav nav-tabs product-description-tab-menu"
                                                                            id="myTab1" role="tablist">
                                                                            @foreach ($woman_category as $woman_cat)
                                                                                <li class="nav-item"
                                                                                    role="presentation">
                                                                                    <button class="nav-link active"
                                                                                        onclick="ChnageColor({{ $woman_cat->layout_id }});getValue({{ $woman_cat->parent_category_id }}, {{ $woman_cat->id }})"
                                                                                        id="product-desc-tab"
                                                                                        data-bs-toggle="tab"
                                                                                        data-bs-target="#cavabunga__Businesscard1"
                                                                                        type="button" role="tab"
                                                                                        aria-controls="cavabunga__shop__men"
                                                                                        aria-selected="true">{{ $woman_cat->sub_category_name }}
                                                                                    </button>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    <div class="col-md-7 tab-content product-description-tab-content"
                                                                        id="myTabContent1">
                                                                        <div class="tab-pane fade show active"
                                                                            id="cavabunga__Businesscard1"
                                                                            role="tabpanel"
                                                                            aria-labelledby="product-desc-tab">
                                                                            <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                                class="img-fluid" alt="">
                                                                        </div>
                                                                        <div class="tab-pane fade"
                                                                            id="cavabunga__Vanitykits1" role="tabpanel"
                                                                            aria-labelledby="product-review-tab">
                                                                            <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                                class="img-fluid" alt="">
                                                                        </div>

                                                                        <div class="tab-pane fade" id="Backpacks1"
                                                                            role="tabpanel"
                                                                            aria-labelledby="product-review-tab">
                                                                            <img src="{{ asset('web/assets/img/shop/shop2.png') }}"
                                                                                class="img-fluid" alt="">
                                                                        </div>
                                                                        <div class="tab-pane fade"
                                                                            id="Travel__Organizers1" role="tabpanel"
                                                                            aria-labelledby="product-review-tab">
                                                                            <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                                class="img-fluid" alt="">
                                                                        </div>
                                                                        <div class="tab-pane fade"
                                                                            id="cavabunga__Shoes1" role="tabpanel"
                                                                            aria-labelledby="product-review-tab">
                                                                            <img src="{{ asset('web/assets/img/shop/shop2.png') }}"
                                                                                class="img-fluid" alt="">
                                                                        </div>
                                                                        <div class="tab-pane fade"
                                                                            id="cavabunga__collections1" role="tabpanel"
                                                                            aria-labelledby="product-review-tab">
                                                                            <img src="{{ asset('web/assets/img/shop/shop.png') }}"
                                                                                class="img-fluid" alt="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right__pattern"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom__color"></div>
                <div class="gotoshop"><a href="{{ url('wallet') }}">Go to shop <img
                            src="{{ asset('web/assets/img/icons/next.png') }}" alt=""></a>
                </div>
            </section>


        </main>

        <div class="sidebar-cart-overlay"></div>

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
        $(document).ready(function() {
            var id = $('#men_default').val();
            getMaincat(id);
        });

        function ChnageColor(val) {
            if (val == 1) {
                $('.cavabunga__shop__section').click(function() {
                    $(this).toggleClass('newbg1');
                });
            } else if (val == 2) {
                $('.cavabunga__shop__section').click(function() {
                    $(this).toggleClass('newbg');
                });
            } else if (val == 3) {
                $('.cavabunga__shop__section').click(function() {

                });
            } else {
                $('.cavabunga__shop__section').click(function() {
                    $(this).toggleClass('newbg');
                });
            }

        };

        function getValue(pid, id) {
            var url = "{{ url('filter/wallet/') }}" + '/' + id;

            $('.gotoshop').find('a').html('<a href="' + url + '">Go to shop</a>');
        }

        function getMaincat(id) {
            var url = "{{ url('filter/wallet/') }}" + '/' + id;

            $('.gotoshop').find('a').html('<a href="' + url + '">Go to shop</a>');
        }
    </script>


</body>

</html>
