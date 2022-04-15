@if (url()->current() == url('profile'))
    <div class="header-action-login">
        <button class="btn-login" onclick="window.location.href='{{ url('login-user') }}'">
            <img src="{{ asset('web/assets/img/icons/user.png') }}" class="img-fluid" alt="">
        </button>
    </div>
    <div class="header-action-cart">
        <button class="btn-cart cart-icon d-flex">
            <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                class="d-lg-block d-md-block d-sm-none img-fluid" alt="">
            <img src="{{ asset('web/assets/img/icons/cart.png') }}" class="d-lg-none d-md-none d-sm-block img-fluid"
                alt="">
            <span class="cart-count text-dark">0 items</span>
        </button>
    </div>
    <button class="btn-menu d-xl-none">
        <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid" alt="">
    </button>
@elseif (url()->current() == url('responsiblites'))
    <div class="header-action-login">
        <button class="btn-login" onclick="window.location.href='{{ url('login-user') }}'">
            <img src="{{ asset('web/assets/img/icons/user-dark.png') }}" class="img-fluid" alt="">
        </button>
    </div>
    <div class="header-action-cart" style="background: #63748614;">
        <button class="btn-cart cart-icon">
            <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}" class="img-fluid" alt="">
            <span class="cart-count text-dark">0 items</span>
        </button>
    </div>
    <button class="btn-menu d-xl-none">
        <img src="{{ asset('web/assets/img/icons/menu-dark.png') }}" class="img-fluid" alt="">
    </button>
@elseif (url()->current() == url('order_tracking'))
    <div class="header-action-login">
        <button class="btn-login" onclick="window.location.href='{{ url('login-user') }}'">
            <img src="{{ asset('web/assets/img/icons/user.png') }}" class="img-fluid d-sm-none d-lg-block d-md-block"
                alt="">
            <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                class="img-fluid d-sm-block d-lg-none d-md-none" alt="">
        </button>
    </div>
    <div class="header-action-cart">
        <button class="btn-cart cart-icon">
            <img src="{{ asset('web/assets/img/icons/cart.png') }}" class="img-fluid d-sm-none d-lg-block d-md-block"
                alt="">
            <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                class="img-fluid d-sm-block d-lg-none d-md-none" alt="">
            <span class="cart-count">0 items</span>
        </button>
    </div>
    <button class="btn-menu d-xl-none">
        <img src="{{ asset('web/assets/img/icons/menu-dark.png') }}" class="img-fluid" alt="">
    </button>
@elseif (url()->current() == url('cart'))
    <div class="header-action-login">
        @if (empty(Auth::user()->id))
            <button class="btn-login" onclick="window.location.href='login.html'">
                <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                    class="img-fluid d-lg-block d-md-block d-sm-none" alt="">
                <img src="{{ asset('web/assets/img/icons/user.png') }}"
                    class="img-fluid d-lg-none d-md-none d-sm-block" alt="">
            </button>
        @else
            <div class="log__drop">
                <button class="logout__drop">
                    <img src="{{ asset('web/assets/img/icons/user-dark.png') }}">
                </button>

                <div class="log__drop-content">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ url('profile') }}"> Profile</a>
                    <a href="{{ url('order_tracking') }}"> Order Tracking</a>
                </div>
            </div>
        @endif
    </div>
    <div class="header-action-cart green-gradient">
        <button class="btn-cart cart-icon">
            <img src="{{ asset('web/assets/img/icons/cart.png') }}" class="img-fluid" alt="">
            <span class="cart-count">0 items</span>
        </button>
    </div>
    <button class="btn-menu d-xl-none">
        <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid" alt="">
    </button>
@else
    <div class="header-action-flag">
        <dropdown>
            <input id="toggle2" type="checkbox">
            <label for="toggle2" class="animate"><img src="{{ asset('web/assets/img/flags/uae.png') }}"
                    alt=""></label>
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
    <div class="header-action-login">
        @if (empty(Auth::user()->id))
            <button class="btn-login" onclick="window.location.href='{{ url('login-user') }}'">
                <img src="{{ asset('web/assets/img/icons/user.png') }}" class="img-fluid" alt="">
            </button>
        @else
            <div class="log__drop">
                <button class="logout__drop">
                    <img src="{{ asset('web/assets/img/icons/user.png') }}">
                </button>

                <div class="log__drop-content">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="{{ url('profile') }}"> Profile</a>
                    <a href="{{ url('order_tracking') }}"> Order Tracking</a>
                </div>
            </div>
        @endif

    </div>
    <div class="header-action-cart">
        <button class="btn-cart cart-icon">
            <img src="{{ asset('web/assets/img/icons/cart.png') }}" class="img-fluid" alt="">
            <span class="cart-count">0 items</span>
        </button>
    </div>
    <button class="btn-menu d-xl-none">
        <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid" alt="">
    </button>
    </div>
@endif
