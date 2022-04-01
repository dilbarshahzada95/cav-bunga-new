     <header class="header-area header-default header-style2 header-transparent sticky-header">
         <div class="container-fluid">
             <div class="row row-gutter-0 align-items-center">
                 <div class="col-12">
                     <div class="header-align">
                         <div class="header-align-left">
                             <div class="header-logo-area">

                                 @if (url('login-user') == url()->current() || url('registerAccount') == url()->current())
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
                                     <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                     <li><a href="{{ url('shoping') }}">Shop</a></li>
                                     <li><a href="{{ url('about_us') }}">About</a></li>
                                 </ul>
                             </div>
                         </div>
                         @include('web.cartheader')
                     </div>
                 </div>
             </div>
         </div>
     </header>
