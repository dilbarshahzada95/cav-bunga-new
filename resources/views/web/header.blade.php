     <header class="header-area header-default header-style2 header-transparent sticky-header">
         <div class="container-fluid">
             <div class="row row-gutter-0 align-items-center">
                 <div class="col-12">
                     <div class="header-align">
                         <div class="header-align-left">
                             <div class="header-logo-area">

                                 @if (url('login') == url()->current() || url('registerAccount') == url()->current())
                                     <a href="{{ url('/') }}">
                                         <img class="logo-main d-none d-sm-block f-logo"
                                             src="{{ asset('web/assets/img/logo-dark.png') }}" alt="Logo" />
                                         <img class="logo-main d-none d-sm-block f-logo"
                                             src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                         <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                             alt="Logo" />
                                         <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                             alt="Logo" />
                                     </a>
                                 @else
                                     <a href="{{ url('/') }}">
                                         <img class="logo-main d-none d-sm-block f-logo"
                                             src="{{ asset('web/assets/img/logo.png') }}" alt="Logo" />
                                         <img class="logo-main d-sm-none" src="{{ asset('web/assets/img/logo.png') }}"
                                             alt="Logo" />
                                         <img class="logo-light" src="{{ asset('web/assets/img/logo.png') }}"
                                             alt="Logo" />
                                     </a>
                                 @endif


                             </div>
                             <div class="header-navigation-area d-none d-xl-block">
                                 <ul class="main-menu nav justify-content-center position-relative">
                                     <li class="active"><a href="index.html">Home</a></li>
                                     <li><a href="shop.html">Shop</a></li>
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
                                         onclick="window.location.href='{{ url('login') }}'">
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
