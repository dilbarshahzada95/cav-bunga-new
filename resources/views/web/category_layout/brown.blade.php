<section id="sectionOne" class="section product__gallery wallet__sec">
    <div class="container">
        <div class="row product__grid column-reverse-sm-remove">
            <div class="col-md-6">
                <div class="product__image">
                    <img src="{{ asset('category_image/' . $categorylist['sub_category_image']) }}" alt=""
                        data-aos="fade-right" data-aos-duration="1000">
                    <div class="bottom__rounded"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cavabunga__product__decription" data-aos="fade-right" data-aos-duration="1000">
                    <div class="pattern__right"></div>
                    <h6>{{ $categorylist['sub_category_name'] }}</h6>
                    <h2>{{ $categorylist['sub_category_title'] }}</h2>
                    <p>{{ $categorylist['sub_category_description'] }}</p>
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
                        <h4><a href="{{ url('filter/wallet/' . $categorylist->id) }}">go to shop</a></h4>
                        <img src="{{ asset('web/assets/img/pattern/shop-arrow.png') }}" alt="">

                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
