<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | Wallet | A Lifestyle brand crafted with love by millennials, for millennials</title>

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
        select::-ms-expand {
            display: none;
        }

        select {
            display: inline-block;
            box-sizing: border-box;
            padding: 0.5em 2em 0.5em 0.5em;
            border: 1px solid #eee;
            font: inherit;
            line-height: inherit;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            appearance: none;
            background-repeat: no-repeat;
            background-image: linear-gradient(45deg, transparent 50%, currentColor 50%), linear-gradient(135deg, currentColor 50%, transparent 50%);
            background-position: right 15px top 1em, right 10px top 1em;
            background-size: 5px 5px, 5px 5px;
        }

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
            <section class="cavabunga__wallet">
                <div class="container">
                    <div class="wallet__width">
                        <div class="title">
                            <h2>{{ $category->sub_category_name }}</h2>
                        </div>
                        <div class="row">
                            <div class="inner-left-padding">
                                <div class="shop-toolbar-wrap">
                                    <div class="shop-toolbar-right">
                                        <div class="popularity">
                                            <h6>Sort :</h6>
                                            <div class="product-sorting-menu product-view-count">

                                                <span class="current">Popularity <i
                                                        class="lastudioicon-down-arrow"></i></span>
                                                <select class="active popularity form-control">
                                                    <option value="whats_new"><a href="#" class="active">What's
                                                            New</a></option>
                                                    <option value="relevence"><a href="#">Relevance</a></option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="filter__section">
                                            <h6>Filter :</h6>
                                            <div class="section__filter">
                                                <div class="product-sorting-menu product-view-count">

                                                    <span class="current">Price <i
                                                            class="lastudioicon-down-arrow"></i></span>
                                                    <select class="active price form-control">
                                                        <option value="low_to_high">Price low to high</option>
                                                        <option value="high_to_low">Price high to low</option>
                                                        <option value="discount">Discount</option>
                                                    </select>
                                                    {{-- <ul>
                                                        <li class="active"><a href="#" onclick="getFilter()"
                                                                class="active">Price low to high</a></li>
                                                        <li><a href="#" onclick="getFilter()">Price high to low</a></li>
                                                        <li><a href="#" onclick="getFilter()">Discount</a></li>
                                                    </ul> --}}
                                                </div>
                                                <div class="product-sorting-menu product-sorting">
                                                    <span class="current">Color <i
                                                            class="lastudioicon-down-arrow"></i></span>

                                                    <select class="active variation form-control">
                                                        @foreach ($variation as $var)
                                                            <option value="{{ $var->id }}" <a href="#">
                                                                {{ $var->variation_name }}</a>
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div
                                                    class="product-sorting-menu product-sorting d-sm-none d-lg-block d-md-block">
                                                    <span class="current">Collection <i
                                                            class="lastudioicon-down-arrow"></i></span>
                                                    <select class="active collcetion form-control">
                                                        @foreach ($collection as $col)
                                                            <option value="{{ $col->id }}"><a href="#"
                                                                    class="active">{{ $col->collection_name }}</a>
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row product__grid">
                            @foreach ($product as $prod)
                                <div class="col-md-4">
                                    <div class="single__product first">
                                        <div class="wallet__section">
                                            <div class="imagage__sec">
                                                <img src="{{ asset('web/assets/img/wallet.png') }}"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__description">
                                                <h3>{{ isset($prod->product_name) ? $prod->product_name : '' }}</h3>
                                                <h5>luxury leather wallet</h5>
                                                <h4>AED {{ isset($prod->price) ? $prod->price : '' }}</h4>
                                            </div>
                                            <div class="more__info">
                                                <a href="{{ url('details-page') }}" class="btn-info">more
                                                    info</a>
                                                <a href="#" class="cart-btn">
                                                    <img src="{{ asset('web/assets/img/icons/wallet-cart.png') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach




                            <div class="rounded__shape"></div>
                        </div>
                    </div>

                </div>
                <div class="rounded__shape_lg"></div>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        $('.price').on('change', function() {
            var popularity = $('.popularity').val();
            var variation = $('.variation').val();
            var collection = $('.collection').val();
            var price = $('.price').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                    url: 'wallet/filter/',
                    method: 'POST',
                    data: {
                        popularity: popularity,
                        variation: variation,
                        collection: collection,
                        price: price
                    },

                },
                dataType: 'json',
                success: function(data) {

                }
            });
        });
        $('.popularity').on('change', function() {
            var popularity = $('.popularity').val();
            var variation = $('.variation').val();
            var collection = $('.collection').val();
            var price = $('.price').val();
        });
        $('.variation').on('change', function() {
            var popularity = $('.popularity').val();
            var variation = $('.variation').val();
            var collection = $('.collection').val();
            var price = $('.price').val();
        });
        $('.collection').on('change', function() {
            var popularity = $('.popularity').val();
            var variation = $('.variation').val();
            var collection = $('.collection').val();
            var price = $('.price').val();

        });
    </script>
</body>

</html>
