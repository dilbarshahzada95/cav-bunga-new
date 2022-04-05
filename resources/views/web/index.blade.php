@extends('layouts.web.master')
@section('content')
    <!--== cavabunga Slider Area ==-->
    <section class="home-slider-area slider-home3">
        <div class="home-slider-content position-relative">
            <div class="swiper-container home-slider3-container">
                <div class="swiper-wrapper">
                    @foreach ($slider as $sliders)
                        <div class="swiper-slide">
                            <!-- Start Slide Item -->
                            <div class="home-slider-item">
                                <div class="bg-thumb bg-img" data-bg-img="{{ asset('slider_image/' . $sliders->image) }}">
                                </div>
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
                    @endforeach


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
    @foreach ($category as $categorylist)
        @if ($categorylist->layout_id == 1)
            @include('web.category_layout.pink')
        @elseif ($categorylist->layout_id == 2)
            @include('web.category_layout.brown')
        @else
            @include('web.category_layout.blue')
        @endif
    @endforeach
@endsection
