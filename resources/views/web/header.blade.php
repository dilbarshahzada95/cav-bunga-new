@if (url()->current() == url('register-user'))
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area d-none d-xl-block d-md-none d-lg-none">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active"><a href="{{ url('shoping') }}">Shop</a></li>
                                    <li><a href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif (url()->current() == url('profile'))
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area d-none d-xl-block">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('shoping') }}">Shop</a></li>
                                    <li><a href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-right profile__head">
                            <div class="header-action-area blue-gradident">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                                <div class="header-action-flag">
                                    <dropdown>
                                        <input id="toggle2" type="checkbox">
                                        <label for="toggle2" class="animate"><img
                                                src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                        <ul class="animate m-0">
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                        </ul>
                                    </dropdown>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login"
                                        onclick="window.location.href='{{ url('login-user') }}'">
                                        <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                            class="img-fluid" alt="">
                                    </button>
                                </div>
                                <div class="header-action-cart">
                                    <button class="btn-cart cart-icon d-flex">
                                        <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                                            class="d-lg-block d-md-block d-sm-none img-fluid" alt="">
                                        <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                            class="d-lg-none d-md-none d-sm-block img-fluid" alt="">
                                        <span class="cart-count text-dark">0 items</span>
                                    </button>
                                </div>
                                <button class="btn-menu d-xl-none">
                                    <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid"
                                        alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif (url()->current() == url('responsiblites'))
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">
                                <a href="#">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="assets/img/logo.png" alt="Logo" />
                                    <img class="logo-light" src="assets/img/logo.png" alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area d-none d-xl-block">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li><a class="text-dark" href="{{ url('/') }}">Home</a></li>
                                    <li><a class="text-dark" href="{{ url('shoping') }}">Shop</a></li>
                                    <li><a class="text-white" href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="header-align-right">
                            <div class="header-action-area">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                                <div class="header-action-flag">
                                    <dropdown>
                                        <input id="toggle2" type="checkbox">
                                        <label for="toggle2" class="animate"><img
                                                src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                        <ul class="animate m-0">
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img src="assets/img/flags/bangaladesh.png')}}"
                                                    alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                        </ul>
                                    </dropdown>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login"
                                        onclick="window.location.href='{{ url('login-user') }}'">
                                        <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                                            class="img-fluid" alt="">
                                    </button>
                                </div>
                                <div class="header-action-cart" style="background: #63748614;">
                                    <button class="btn-cart cart-icon">
                                        <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                                            class="img-fluid" alt="">
                                        <span class="cart-count text-dark">0 items</span>
                                    </button>
                                </div>
                                <button class="btn-menu d-xl-none">
                                    <img src="{{ asset('web/assets/img/icons/menu-dark.png') }}"
                                        class="img-fluid" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif (url()->current() == url('shoping'))
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area d-none d-xl-block">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li class="active"><a href="{{ url('shopping') }}">Shop</a></li>
                                    <li><a href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-right">
                            <div class="header-action-area">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                                <div class="header-action-flag">
                                    <dropdown>
                                        <input id="toggle2" type="checkbox">
                                        <label for="toggle2" class="animate"><img
                                                src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                        <ul class="animate m-0">
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                        </ul>
                                    </dropdown>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login"
                                        onclick="window.location.href='{{ url('login-user') }}'">
                                        <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                            class="img-fluid" alt="">
                                    </button>
                                </div>
                                <div class="header-action-cart">
                                    <button class="btn-cart cart-icon">
                                        <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                            class="img-fluid" alt="">
                                        <span class="cart-count">0 items</span>
                                    </button>
                                </div>
                                <button class="btn-menu d-xl-none">
                                    <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid"
                                        alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif (url()->current() == url('order_tracking'))
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area d-none d-xl-block">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li><a class="text-dark" href="{{ url('/') }}">Home</a></li>
                                    <li><a class="text-dark" href="{{ url('shoping') }}">Shop</a></li>
                                    <li><a class="text-white" href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="header-align-right">
                            <div class="header-action-area">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                                <div class="header-action-flag">
                                    <dropdown>
                                        <input id="toggle2" type="checkbox">
                                        <label for="toggle2" class="animate"><img
                                                src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                        <ul class="animate m-0">
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                        </ul>
                                    </dropdown>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login"
                                        onclick="window.location.href='{{ url('login-user') }}'">
                                        <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                            class="img-fluid d-sm-none d-lg-block d-md-block" alt="">
                                        <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                                            class="img-fluid d-sm-block d-lg-none d-md-none" alt="">
                                    </button>
                                </div>
                                <div class="header-action-cart">
                                    <button class="btn-cart cart-icon">
                                        <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                            class="img-fluid d-sm-none d-lg-block d-md-block" alt="">
                                        <img src="{{ asset('web/assets/img/icons/cart-dark.png') }}"
                                            class="img-fluid d-sm-block d-lg-none d-md-none" alt="">
                                        <span class="cart-count">0 items</span>
                                    </button>
                                </div>
                                <button class="btn-menu d-xl-none">
                                    <img src="{{ asset('web/assets/img/icons/menu-dark.png') }}"
                                        class="img-fluid" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@elseif (url()->current() == url('cart'))
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>
                            </div>
                            <div class="header-navigation-area d-none d-xl-block">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('shoping') }}">Shop</a></li>
                                    <li><a href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-right">
                            <div class="header-action-area">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                                <div class="header-action-flag">
                                    <dropdown>
                                        <input id="toggle2" type="checkbox">
                                        <label for="toggle2" class="animate"><img
                                                src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                        <ul class="animate m-0">
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                        </ul>
                                    </dropdown>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login" onclick="window.location.href='login.html'">
                                        <img src="{{ asset('web/assets/img/icons/user-dark.png') }}"
                                            class="img-fluid d-lg-block d-md-block d-sm-none" alt="">
                                        <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                            class="img-fluid d-lg-none d-md-none d-sm-block" alt="">
                                    </button>
                                </div>
                                <div class="header-action-cart green-gradient">
                                    <button class="btn-cart cart-icon">
                                        <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                            class="img-fluid" alt="">
                                        <span class="cart-count">0 items</span>
                                    </button>
                                </div>
                                <button class="btn-menu d-xl-none">
                                    <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid"
                                        alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@else
    <header class="header-area header-default header-style2 header-transparent sticky-header">
        <div class="container-fluid">
            <div class="row row-gutter-0 align-items-center">
                <div class="col-12">
                    <div class="header-align">
                        <div class="header-align-left">
                            <div class="header-logo-area">

                                <a href="{{ url('/') }}">
                                    <img class="logo-main d-none d-sm-block f-logo"
                                        src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                    <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>



                            </div>
                            <div class="header-navigation-area d-none d-xl-block">
                                <ul class="main-menu nav justify-content-center position-relative">
                                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('shoping') }}">Shop</a></li>
                                    <li><a href="{{ url('about_us') }}">About</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-align-right">
                            <div class="header-action-area">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="lastudioicon-zoom-1"></i>
                                    </button>
                                </div>
                                <div class="header-action-flag">
                                    <dropdown>
                                        <input id="toggle2" type="checkbox">
                                        <label for="toggle2" class="animate"><img
                                                src="{{ asset('web/assets/img/flags/uae.png') }}" alt=""></label>
                                        <ul class="animate m-0">
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
                                                    alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                            <li class="animate">
                                                <p>German</p><img
                                                    src="{{ asset('web/assets/img/flags/german.png') }}" alt="">
                                            </li>
                                            <li class="animate">
                                                <p>bangaladesh</p><img
                                                    src="{{ asset('web/assets/img/flags/bangaladesh.png') }}"
                                                    alt="">
                                            </li>
                                            <li class="animate">
                                                <p>Turkey</p>
                                                <img src="{{ asset('web/assets/img/flags/turkey.png') }}" alt=" ">
                                            </li>
                                        </ul>
                                    </dropdown>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login"
                                        onclick="window.location.href='{{ url('login-user') }}'">
                                        <img src="{{ asset('web/assets/img/icons/user.png') }}"
                                            class="img-fluid" alt="">
                                    </button>
                                </div>
                                <div class="header-action-cart">
                                    <button class="btn-cart cart-icon">
                                        <img src="{{ asset('web/assets/img/icons/cart.png') }}"
                                            class="img-fluid" alt="">
                                        <span class="cart-count">0 items</span>
                                    </button>
                                </div>
                                <button class="btn-menu d-xl-none">
                                    <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid"
                                        alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endif


@include('web.sideCart')
