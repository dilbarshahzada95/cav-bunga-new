@extends('layouts.web.master')
@section('content')
    <!--== Start Hero Area Wrapper ==-->
    <section class="cavabunga__login">
        <div class="container-fluid p-0">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="login-form">
                                <form class="login-form-wrapper">
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="title">
                                                <h5>welcome to cavabunga</h5>
                                                <h2>Login to your account</h2>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="UserName" class="form-label">EMAIL</label>
                                                        <input type="email" class="form-control" id="UserName"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0">
                                                        <label for="password" class="form-label">Password
                                                        </label>
                                                        <input type="password" class="form-control" id="password"
                                                            placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group forgot__password">
                                                        <a href="#">
                                                            forgot password?
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group mb-0 form-group-info text-center mt-0">
                                                        <button class="btn btn-theme btn-black" type="submit">Log
                                                            in</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 justify-content-lg-between d-flex mt-4 sm-d-block">
                                            <div class="social__login">
                                                <a href="#">
                                                    <img src="{{ asset('web/assets/img/icons/facebook.png') }}" alt="">
                                                    login with
                                                    facebook
                                                </a>
                                            </div>
                                            <div class="social__login">
                                                <a href="#">
                                                    <img src="{{ asset('web/assets/img/icons/google.png') }}" alt="">
                                                    login
                                                    with
                                                    google
                                                </a>
                                            </div>
                                        </div>
                                        <div class="register__link">
                                            <p>Don’t have an account yet? <a href="register.html">Register
                                                    here!</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0">
                    <div class="home-slider-area cavabunga__login register">
                        <div class="home-slider-content ">
                            <div class="swiper-container home-slider4-container ">
                                <div class="swiper-wrapper ">
                                    <div class="swiper-slide ">
                                        <!-- Start Slide Item -->
                                        <div class="home-slider-item ">
                                            <div class="thumb ">
                                                <div class="bg-thumb "
                                                    data-bg-img="{{ asset('web/assets/img/login.png') }}">
                                                </div>
                                                <div class="image__text">
                                                    <img src="assets/img/pattern/logo-pattern.png" alt="">
                                                    <h5>A lifestyle brand crafted with love by millennials, for
                                                        millennials. </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Slide Item -->
                                    </div>
                                    <div class="swiper-slide ">
                                        <!-- Start Slide Item -->
                                        <div class="home-slider-item ">
                                            <div class="thumb ">
                                                <div class="bg-thumb " data-bg-img="assets/img/login.png ">
                                                </div>
                                                <div class="image__text">
                                                    <img src="{{ asset('web/assets/img/pattern/logo-pattern.png') }}"
                                                        alt="">
                                                    <h5>A lifestyle brand crafted with love by millennials, for
                                                        millennials. </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Slide Item -->
                                    </div>

                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination "></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->
@endsection
