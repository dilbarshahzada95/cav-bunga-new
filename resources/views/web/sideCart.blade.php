    <aside class="sidebar-cart-modal">
        <div class="sidebar-cart-inner">
            <div class="sidebar-cart-content">
                <a class="cart-close" href="javascript:void(0);"><i class="lastudioicon-e-remove"></i></a>


                <div class="sidebar-cart">
                    <h4 class="sidebar-cart-title">Shopping Cart</h4>
                    <hr>
                    <div class="product-cart">

                        <div id="cartshow"></div>
                        <div class="cart-total">
                            <hr>
                            <h4>Total: <span class="money">AED<span id="final_total"></span></span></h4>
                        </div>
                        <div class="cart-checkout-btn">
                            <a class="btn-theme" href="{{ url('shoping') }}">Continue shopping</a>
                            <a class="btn-theme" href="{{ url('cart') }}">Go to cart</a>
                        </div>
                    </div>
                </div>


            </div>
    </aside>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            getCart();
        });

        function getCart() {
            $.ajax({
                url: "{{ route('getCart') }}",
                type: "GET",
                dataType: "html",
                success: function(data) {
                    var response = JSON.parse(data);
                    $('#cartshow').html(response.html);
                    $('.cart-count').html(response.cart_count);
                    $('#final_total').html(response.final_total);

                }
            });
        }
    </script>
