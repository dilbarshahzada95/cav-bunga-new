<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | PROFILE | A Lifestyle brand crafted with love by millennials, for millennials</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('web/assets/img/favicon.png') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i"
        rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<!-- <body oncontextmenu="return false"> -->

<body class="profile">

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
            <section class="cavabunga__user__profile">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-5 p-0">
                            <div class="user__information__sec">
                                <div class="pattern__one"></div>
                                <div class="pattern__two"></div>

                                <div class="personal__information">
                                    <div class="title">
                                        <h2>Personal Information</h2>
                                    </div>
                                    <div class="card">
                                        <a class="btn-edit" data-toggle="modal"
                                            onclick="customer_details({{ $profile['customer_details']['customer_id'] }})"
                                            data-target="#editinformation">
                                            <img src="{{ asset('web/assets/img/icons/ediit.png') }}" alt="">
                                        </a>
                                        <div class="card-body" id="mydiv">
                                            <span>Name</span>
                                            <h4>{{ $profile['customer_details']['name'] }}</h4>

                                            <span>E-mail</span>
                                            <h4>{{ $profile['customer_details']['email'] }}</h4>
                                            <span>Phone Number</span>
                                            <h4>{{ $profile['customer_details']['phone'] }}</h4>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <span>Street</span>
                                                    <h4>{{ $profile['customer_details']['street'] }}</h4>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <span>Number</span>
                                                    <h4>{{ $profile['customer_details']['mob'] }}</h4>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <span>City</span>
                                                    <h4>{{ $profile['customer_details']['city'] }}</h4>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <span>Postal Code</span>
                                                    <h4>{{ $profile['customer_details']['pincode'] }}</h4>
                                                </div>
                                                <div class="col-md-4">
                                                    <span>Country</span>
                                                    <h4>{{ $profile['customer_details']['country'] }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="personal__information ">
                                    <div class="title mt-3">
                                        <h2>Current order</h2>
                                    </div>
                                    @foreach ($Order as $currentOrderList)
                                        <div class="personal__information__bg">
                                            <div class="card bg-transparent">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-6">
                                                            <span>Order ID:</span>
                                                            <h4>{{ $currentOrderList['transaction_id'] }}</h4>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <span>Date:</span>
                                                            <h4>{{ date('d-m-Y', strtotime($currentOrderList['order_date'])) }}
                                                            </h4>
                                                        </div>
                                                        <div class="col-md-4 col-sm-6">
                                                            <span>price:</span>
                                                            <h4>{{ $currentOrderList['order_price'] }}</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class="col-md-8 col-sm-6">
                                                    <div class="dropdown">
                                                        <a href="#" class="js-link">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                view items <i class="fa fa-chevron-down"></i>
                                                            </div>
                                                        </a>
                                                        <ul class="js-dropdown-list">
                                                            {{-- @foreach ($currentOrderList['orderDetails.productlist'] as $listItem)
                                                                <li>{{ $listItem['product_name'] }}
                                                                </li>
                                                            @endforeach --}}

                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-6 pl-0 text-center">
                                                    <div class="btn-theme">track order</div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 pl-0">
                            <div class="order__history">
                                <div class="order__history__grid">
                                    <div class="row">
                                        <div class="title pl-0">
                                            <h2 class="text-dark">Order History</h2>
                                        </div>
                                        {{-- <div class="date__prize d-flex justify-content-md-between">
                                            <h5>Today</h5>
                                            <h5>$201.00</h5>
                                        </div> --}}
                                    </div>
                                    @foreach ($orderHistory as $orderHistoryList)
                                        <div class="row listed__items align-items-center">
                                            <div class="history__list d-flex pl-0">
                                                <div class="order__id">
                                                    <span>Order ID:</span>
                                                    <h4>{{ $orderHistoryList['transaction_id'] }}</h4>
                                                </div>
                                                <div class="order-date">
                                                    <span>Date</span>
                                                    <h4>{{ date('d-m-Y', strtotime($orderHistoryList['order_date'])) }}
                                                    </h4>
                                                </div>
                                            </div>
                                            <div class="col-md-10 pl-0 pr-0">
                                                <div class="dropdown1">
                                                    <a href="#" class="js-link1 pl-0">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center w-100">
                                                            view items <i class="fa fa-chevron-down"></i>
                                                        </div>
                                                    </a>
                                                    <ul class="js-dropdown-list1">
                                                        {{-- @foreach ($orderHistoryList['orderDetails.productlist'] as $listItemhistory)
                                                            <li>{{ $listItemhistory['product_name'] }}
                                                            </li>
                                                        @endforeach --}}
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-2 pl-0">
                                                <p><strong>$133.50</strong></p>
                                            </div>
                                        </div>
                                    @endforeach




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>

        {{-- <aside class="product-quick-view-modal">
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
        </aside> --}}
        @include('web.sideCart')
        <div class="sidebar-cart-overlay"></div>

        {{-- <aside class="off-canvas-wrapper">
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
        </aside> --}}
    </div>
    <!-- Edit Profile -->
    <div class="modal fade" id="editinformation" tabindex="-1" role="dialog" aria-hidden="true"
        class="modal hide" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="{{ url('update/customer/details') }}" method="post" enctype="multipart/form-data"
                id="editFormSubmit">

                <div class="modal-content cabunga__model">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="Email" id="email"
                                        name="email">
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="Number" class="form-control" placeholder="Phone Number" id="phone"
                                        name="phone">
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Street</label>
                                    <input type="text" class="form-control" placeholder="Street" id="street"
                                        name="street">
                                </div>
                            </div>
                            <input type="hidden" name="edit_id" id="edit_id">
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Number</label>
                                    <input type="text" class="form-control" placeholder="Number" id="mob" name="mob">
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" placeholder="City" id="city" name="city">
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="text" class="form-control" placeholder="Postal Code" id="pincode"
                                        name="pincode">
                                </div>
                            </div>
                            <div class="col-md-6 p-1">
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" class="form-control" placeholder="Country" id="country"
                                        max="country">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="close" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit" data-dismiss="modal" aria-label="Close" class="btn btn-theme"
                            onclick="checkite()">update</button>
                    </div>
                </div>
            </form>
        </div>
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
            var list = $('.js-dropdown-list');
            var link = $('.js-link');
            link.click(function(e) {
                e.preventDefault();
                list.slideToggle(200);
            });
            list.find('li').click(function() {
                var text = $(this).html();
                var icon = '<i class="fa fa-chevron-down"></i>';
                link.html(text + icon);
                list.slideToggle(200);
                if (text === '* Reset') {
                    link.html('Select one option' + icon);
                }
            });
        });

        // history

        $(function() {
            var list = $('.js-dropdown-list1');
            var link = $('.js-link1');
            link.click(function(e) {
                e.preventDefault();
                list.slideToggle(200);
            });
            list.find('li').click(function() {
                var text = $(this).html();
                var icon = '<i class="fa fa-chevron-down"></i>';
                link.html(text + icon);
                list.slideToggle(200);
                if (text === '* Reset') {
                    link.html('Select one option' + icon);
                }
            });
        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        function customer_details(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "GET",
                url: 'getCustomerData/' + id,
                success: function(data) {

                    if (data) {

                        $('#name').val(data.customer_details.name);
                        $('#email').val(data.customer_details.email);
                        $('#phone').val(data.customer_details.phone);
                        $('#city').val(data.customer_details.city);
                        $('#pincode').val(data.customer_details.pincode);
                        $('#street').val(data.customer_details.street);
                        $('#country').val(data.customer_details.country);
                        $('#mob').val(data.customer_details.mob);
                        $('#edit_id').val(data.customer_details.customer_id);

                    }

                }

            });
        }
    </script>
    <script>
        function checkite() {

            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var city = $('#city').val();
            var pincode = $('#pincode').val();
            var street = $('#street').val();
            var country = $('#country').val();
            var mob = $('#mob').val();
            var edit_id = $('#edit_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'update/customer/details/' + $('#edit_id').val(),
                method: 'POST',
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    city: city,
                    pincode: pincode,
                    street: street,
                    country: country,
                    mob: mob,

                },
                dataType: 'json',
                success: function(data) {
                    if (data.status = 200) {
                        swal({
                            title: "",
                            text: "Updated Successfully",
                            icon: "success",
                            buttons: false,
                            closeOnClickOutside: false,
                            timer: 3000,
                            icon: "success"
                        });
                        setTimeout(function() {
                            $("#mydiv").load(location.href + " #mydiv");
                        }, 3000);
                    }
                }
            });
        }
    </script>
</body>

</html>
