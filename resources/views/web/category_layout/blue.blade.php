<section id="sectionN" class="section product__gallery">
    <div class="container">
        <div class="row product__grid">
            <div class="pattern__left">
                <img src="{{ asset('web/assets/img/pattern/pattern__left.png') }}" alt="">
            </div>
            <div class="col-md-6">
                <div class="cavabunga__product__decription" data-aos="fade-right" data-aos-duration="1000">

                    <h6>{{ $categorylist['sub_category_name'] }}</h6>
                    <h2>{{ $categorylist['sub_category_title'] }}</h2>
                    <p>{{ $categorylist['sub_category_description'] }}</p>
                    <a href="{{ url('shoping') }}" class="btn-theme btn-black">Explore Now</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product__image" data-aos="fade-right" data-aos-duration="1000">
                    <div class="pattern__round"></div>
                    <img src="{{ asset('/' . $categorylist['sub_category_image']) }}" alt="">
                    <img class="shadow-img" src="{{ asset('/' . $categorylist['sub_category_image']) }}" alt="">
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
