@extends('layouts.web.master')
@section('content')
    <!--== cavabunga Slider Area ==-->
    <section class="home-slider-area slider-home3">
        <div class="home-slider-content position-relative">
            <div class="swiper-container home-slider3-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Start Slide Item -->
                        <div class="home-slider-item">
                            <div class="bg-thumb bg-img"
                                data-bg-img="{{ asset('web/assets/img/slider/home-slider1.png') }}"></div>
                            <div class="slider-content-area">
                                <div class="content">
                                    <div class="inner-content">
                                        <h4>Welcome to</h4>
                                        <img src="{{ asset('web/assets/img/pattern/logo-pattern.png') }}" alt="">
                                        <p>A Lifestyle brand crafted with love by millennials, for millennials
                                        </p>
                                        <a href="{{ url('shoping') }}" class="btn-theme btn-black">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    </div>
                    <div class="swiper-slide">
                        <!-- Start Slide Item -->
                        <div class="home-slider-item">
                            <div class="bg-thumb bg-img"
                                data-bg-img="{{ asset('web/assets/img/slider/home-slider1.png') }}"></div>
                            <div class="slider-content-area">
                                <div class="content">
                                    <div class="inner-content">
                                        <h4>Welcome to</h4>
                                        <img src="assets/img/pattern/logo-pattern.png" alt="">
                                        <p>A Lifestyle brand crafted with love by millennials, for millennials
                                        </p>
                                        <a href="{{ url('shoping') }}" class="btn-theme btn-black">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Slide Item -->
                    </div>
                </div>
                <div class="row position-relative banner__arrow">
                    <div class="cavabunga__footer__arrows">
                        <div class="cavabunga__home__bottom__arrow">
                            <div class="icon-down">
                                <a href="#sectionN">
                                    <img class="d-xl-none" src="{{ asset('web/assets/img/icons/home-arrow.png') }}"
                                        alt="">
                                    <p>scroll down</p>
                                    <img src="{{ asset('web/assets/img/icons/home-arrow.png') }}" alt="">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="sectionN" class="section product__gallery">
        <div class="container">
            <div class="row product__grid">
                <div class="pattern__left">
                    <img src="{{ asset('web/assets/img/pattern/pattern__left.png') }}" alt="">
                </div>
                <div class="col-md-6">
                    <div class="cavabunga__product__decription" data-aos="fade-right" data-aos-duration="1000">

                        <h6>Backpacks</h6>
                        <h2>Discover your new Travel Companion</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus optio eaque explicabo
                            libero, quam voluptas cumque earum vitae, ipsa maiores doloribus sit perferendis.
                            Atque natus amet, beatae sint fugit ipsam.</p>
                        <a href="{{ url('shoping') }}" class="btn-theme btn-black">Explore Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product__image" data-aos="fade-right" data-aos-duration="1000">
                        <div class="pattern__round"></div>
                        <img src="{{ asset('web/assets/img/products/backpack__home__noSjadow.png') }}" alt="">
                        <img class="shadow-img"
                            src="{{ asset('web/assets/img/products/backpack__home__sjadow.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cavabunga__footer__arrows">
                    <div class="cavabunga__bottom__arrow">
                        <div class="icon-down">
                            <a href="#sectionOne"><img src="{{ asset('web/assets/img/pattern/arrow-down.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="cavabunga__goto__arrow">
                        <div class="icon">
                            <h4><a href="{{ url('wallet') }}">go to shop</a></h4>
                            <img src="{{ asset('web/assets/img/pattern/shop-arrow.png') }}" alt="">

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="sectionOne" class="section product__gallery wallet__sec">
        <div class="container">
            <div class="row product__grid column-reverse-sm-remove">
                <div class="col-md-6">
                    <div class="product__image">
                        <img src="{{ asset('web/assets/img/products/wallet.png') }}" alt="" data-aos="fade-right"
                            data-aos-duration="1000">
                        <div class="bottom__rounded"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cavabunga__product__decription" data-aos="fade-right" data-aos-duration="1000">
                        <div class="pattern__right"></div>
                        <h6>Wallets</h6>
                        <h2>everything you need in your back pocket</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus optio eaque explicabo
                            libero, quam voluptas cumque earum vitae, ipsa maiores doloribus sit perferendis.
                            Atque natus amet, beatae sint fugit ipsam.</p>
                        <a href="{{ url('shoping') }}" class="btn-theme btn-black">Explore Now</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cavabunga__footer__arrows">
                    <div class="cavabunga__bottom__arrow">
                        <div class="icon-down">
                            <a href="#sectionTwo"> <img src="{{ asset('web/assets/img/pattern/arrow-down.png') }}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="cavabunga__goto__arrow">
                        <div class="icon">
                            <h4><a href="{{ url('wallet') }}">go to shop</a></h4>
                            <img src="{{ asset('web/assets/img/pattern/shop-arrow.png') }}" alt="">

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="sectionTwo" class="section product__gallery vinity__kit__sec">
        <div class="container">
            <div class="row product__grid">
                <div class="col-md-6">
                    <div class="cavabunga__product__decription" data-aos="fade-right" data-aos-duration="1000">
                        <div class="pattern__rounded"></div>
                        <h6 class="text-pink">men’s vanity kits</h6>
                        <h2>all the essentials available on the go</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus optio eaque explicabo
                            libero, quam voluptas cumque earum vitae, ipsa maiores doloribus sit perferendis.
                            Atque natus amet, beatae sint fugit ipsam.</p>
                        <a href="{{ url('shoping') }}" class="btn-theme btn-black">Explore Now</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="rectangle__height"></div>
                    <div class="product__image" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('web/assets/img/products/mens-kit.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="cavabunga__footer__arrows">
                    <div class="cavabunga__bottom__arrow">
                        <div class="icon-down">
                            <a href="#footer"><img src="{{ asset('web/assets/img/pattern/arrow-down.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="cavabunga__goto__arrow">
                        <div class="icon">
                            <h4><a href="{{ url('wallet') }}">go to shop</a></h4>
                            <img src="{{ asset('web/assets/img/pattern/shop-arrow.png') }}" alt="">

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
