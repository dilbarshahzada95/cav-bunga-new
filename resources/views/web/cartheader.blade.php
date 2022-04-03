@if (url()->current() == url('profile'))
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
                <button class="btn-login" onclick="window.location.href='login.html'">
                    <img src="{{ asset('web/assets/img/icons/user.png') }}" class="img-fluid" alt="">
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
                <img src="{{ asset('web/assets/img/icons/menu.png') }}" class="img-fluid" alt="">
            </button>
        </div>
    </div>
@else
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
                <button class="btn-login" onclick="window.location.href='{{ url('login-user') }}'">
                    <img src="{{ asset('web/assets/img/icons/user.png') }}" class="img-fluid" alt="">
                </button>
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
    </div>
@endif