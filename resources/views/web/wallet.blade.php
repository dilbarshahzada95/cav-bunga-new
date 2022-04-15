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

        .bluebg {

            background: linear-gradient(317deg, #41586E 0%, #8A96A1 100%);
            background-size: cover;
            width: 100%;
            position: relative;
        }

    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

                                                <select class="active popularity form-control form-select selectpicker"
                                                    id="popularity" onchange="filterItem(1)">
                                                    <option value="" readonly>Popularity</option>
                                                    <option value="whats_new">What's
                                                        New</option>
                                                    <option value="relevence">Relevance</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="filter__section">
                                            <h6>Filter :</h6>
                                            <div class="section__filter">
                                                <div class="product-sorting-menu product-view-count">

                                                    <select class="active price form-control form-select selectpicker"
                                                        id="price" onchange="filterItem(2)">
                                                        <option value="" readonly>Price</option>
                                                        <option value="low_to_high">Price low to high</option>
                                                        <option value="high_to_low">Price high to low</option>
                                                        <option value="discount">Discount</option>
                                                    </select>

                                                </div>
                                                <div class="product-sorting-menu product-sorting">


                                                    <select class="active variation form-control form-select"
                                                        id="variation" onchange="filterItem(3)">
                                                        <option value="" readonly>Color</option>
                                                        @foreach ($variation as $var)
                                                            <option value="{{ $var->id }}">
                                                                {{ $var->variation_name }}
                                                            </option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div
                                                    class="product-sorting-menu product-sorting d-sm-none d-lg-block d-md-block">

                                                    <select class="active collection form-control form-select"
                                                        id="collection" onchange="filterItem(4)">
                                                        <option value="" readonly>Collection</option>
                                                        @foreach ($collection as $col)
                                                            <option value="{{ $col->id }}">
                                                                {{ $col->collection_name }}
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
                        @if (!empty($category->layout_id))
                            <input type="hidden" id="men_default" value="{{ $category->layout_id }}">
                        @endif


                        <div class="row product__grid">
                            @foreach ($product as $prod)
                                @php
                                    $image = json_decode($prod->product_gallery);
                                @endphp
                                <div class="col-md-4">
                                    <div class="single__product first">
                                        <div class="wallet__section">
                                            <div class="imagage__sec">
                                                @if (isset($image))
                                                    @if (!empty($image[0]))
                                                        <img src="{{ asset('product_image/' . $image[0]) }}"
                                                            class="img-fluid" alt="">
                                                    @endif
                                                @endif

                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__description">
                                                <h3>{{ isset($prod->product_name) ? $prod->product_name : '' }}</h3>
                                                <h5>luxury leather wallet</h5>
                                                <h4>AED {{ isset($prod->price) ? $prod->price : '' }}</h4>
                                            </div>
                                            <div class="more__info">
                                                <a href="{{ url('details-page/' . $prod->id) }}"
                                                    class="btn-info">more
                                                    info</a>
                                                <a href="#" class="cart-btn"
                                                    onclick="add_to_cart({{ $prod->id }},{{ isset($prod->price) ? $prod->price : '' }},1)">
                                                    <img src="{{ asset('web/assets/img/icons/wallet-cart.png') }}"
                                                        alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach


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
        function filterItem(val) {

            var popularity = $('#popularity').val();

            var variation = $('#variation').val();

            var collection = $('#collection').val();


            var price = $('#price').val();


            var url = "{{ url('/walletfilter') }}";
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    'popularity': popularity,
                    'variation': variation,
                    'collection': collection,
                    'price': price
                },
                success: function(data) {
                    $('.product__grid').html(data);
                }
            });

        }
    </script>
    <script>
        $(document).ready(function() {
            var val = $('#men_default').val();

            if (val == 1) {

                $('.cavabunga__wallet').toggleClass('newbg1');
            } else if (val == 2) {

                $('.cavabunga__wallet').toggleClass('newbg');


            } else if (val == 3) {

                $('.cavabunga__wallet').toggleClass('bluebg');



            } else {

                $('.cavabunga__wallet').toggleClass('bluebg');


            }
        });

        function add_to_cart(val, price, qty) {

            var url = "{{ url('/add/to/cart') }}";
            $.ajax({
                type: "GET",
                url: url,
                data: {
                    'product_id': val,
                    'price': price,
                    'qty': qty,

                },
                success: function(data) {
                    var response = JSON.parse(data);
                    if (response.status == 'error') {
                        swal({
                            title: "",
                            text: response.message,
                            icon: "warning",
                            buttons: false,
                            closeOnClickOutside: false,
                            timer: 3000,
                            icon: "warning"
                        });
                    } else {
                        getCart();
                    }
                }
            });
        }
    </script>

</body>

</html>
