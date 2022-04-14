<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cavabunga | CART| A Lifestyle brand crafted with love by millennials, for millennials</title>

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
            <section class="product-area cart__page__area">
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="cart__items position-relative">
                                <div class="shape__one"></div>
                                <div class="shape__two"></div>
                                <div class="cart__listed__items">
                                    <div class="title">
                                        <h2>Shopping Cart</h2>
                                    </div>
                                    <div class="items__count d-sm-none d-lg-block d-md-block">
                                        <h2>{{ $item_count }} Items</h2>
                                    </div>
                                </div>
                                <div class="cart-table-wrap">
                                    <div class="cart-table table-responsive">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="pro-name pt-0">Product Details</th>
                                                    <th class="pro-quantity">quantity</th>
                                                    <th class="pro-price">price</th>
                                                    <th class="pro-subtotal text-right">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $final_total = 0;

                                                    $i = 0;
                                                @endphp

                                                @foreach ($cart as $item)
                                                    @php

                                                        $image = json_decode($item->product_gallery);
                                                        $final_total += $item->price * $item->qty;
                                                    @endphp
                                                    <tr>
                                                        <td class="pro-thumbnail">
                                                            <div class="pro-info">
                                                                <div class="pro-img">
                                                                    <a href="#"><img
                                                                            src="{{ asset('product_image/' . $image[0]) }}"
                                                                            alt="Moren-Shop"></a>
                                                                </div>
                                                            </div>
                                                            <div class="pro-name">
                                                                <h2>{{ $item->product_name }}</h2>
                                                                <p>{{ $item->sub_category_name }}</p>
                                                                <div class="btn btn-sm btn-remove"><img
                                                                        src="{{ asset('web/assets/img/icons/remove.png') }}" />
                                                                    <a
                                                                        href="{{ url('removeCartitems/' . $item->prod_id) }}">
                                                                        remove</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="pro-quantity">
                                                            <div class="action-top">
                                                                <div class="pro-qty-area">
                                                                    <div class="pro-qty">
                                                                        <input type="text"
                                                                            id="quantity_{{ $i }}"
                                                                            class="{{ $i }}"
                                                                            title="Quantity"
                                                                            value="{{ $item->qty }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pro-price d-sm-none d-lg-block d-md-block">
                                                            <span id="showprice_{{ $i }}">AED
                                                                {{ $item->price }}</span>
                                                        </td>
                                                        <input type="hidden" name="prod_id"
                                                            value="{{ $item->prod_id }}"
                                                            id="prod_id_{{ $i }}">
                                                        <input type="hidden" name="total_qty"
                                                            id="total_qty_{{ $i }}"
                                                            value="{{ $item->qty }}">
                                                        <input type="hidden" name="price" value="{{ $item->price }}"
                                                            id="price_{{ $i }}">
                                                        <input type="hidden" name="total_price"
                                                            value="{{ $item->price * $item->qty }}"
                                                            id="total_price_{{ $i }}"
                                                            class="total_price">
                                                        <td class="pro-subtotal text-right"><span
                                                                id="showtotal_{{ $i }}">AED
                                                                {{ $item->price * $item->qty }}</span></td>

                                                    </tr>
                                                    @php
                                                        $i++;
                                                    @endphp
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="arrow__back d-sm-none d-lg-block d-md-block">
                                    <a href="{{ url('shopping') }}"> <img
                                            src="{{ asset('web/assets/img/icons/back.png') }}" alt=""> continue
                                        shopping</a>
                                </div>



                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-payment">
                                <div class="cart-subtotal">
                                    <h2 class="title">Shopping & Discounts</h2>
                                    <form>
                                        <div class="form-group">
                                            <label>Shipping</label>
                                            <select class="form-control form-select">
                                                @foreach ($shipping_type as $shipping_typee)
                                                    <option value="{{ $shipping_typee->id }}">
                                                        {{ $shipping_typee->type }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label>Discount Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group-apply">
                                            <a class="btn-theme" href="#">Apply</a>
                                        </div>
                                    </form>
                                    <hr style="opacity: 1;">
                                    <div class="total__amount">
                                        <p>Total : </p>
                                        <p>AED <span class="final_total">{{ $final_total }}</span></p>
                                    </div>
                                    <a class="btn-theme" href="#">Checkout</a>

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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        function getQty(qty, row) {

            var price = $('#price_' + row).val();
            $('#quantity_' + row).val(qty);
            var total = qty * price;
            $('#showtotal_' + row).html('AED ' + total);
            $('#total_price_' + row).val(total);
            $('#total_qty' + row).val(qty);
            var product_id = $('#prod_id_' + row).val();
            var price = '';
            var new_qty = $('#quantity_' + row).val();

            add_to_cart(product_id, price, new_qty);
            var total_price = 0;
            $('.total_price').each(function() {
                total_price += parseInt($(this).val());

            });

            $('.final_total').html(total_price);
        }

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
