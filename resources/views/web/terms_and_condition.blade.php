<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cavabunga | A Lifestyle brand crafted with love by millennials, for millennials</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{ asset('web/assets/img/favicon.png') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!--== Bootstrap CSS ==-->
    <link href="{{ asset('web/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!--== Font-awesome Icons CSS ==-->
    <link href="{{ asset('web/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Icofont Min Icons CSS ==-->
    <link href="{{ asset('web/assets/css/icofont.min.css') }}" rel="stylesheet" />
    <!--== lastudioIcons CSS ==-->
    <link href="{{ asset('web/assets/css/lastudioIcons.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{ asset('web/assets/css/animate.css') }}" rel="stylesheet" />
    <!--== Aos CSS ==-->
    <link href="{{ asset('web/assets/css/aos.css') }}" rel="stylesheet" />
    <!--== FancyBox CSS ==-->
    <link href="{{ asset('web/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav CSS ==-->
    <link href="{{ asset('web/assets/css/slicknav.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{ asset('web/assets/css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Slick CSS ==-->
    <link href="{{ asset('web/assets/css/slick.css') }}" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="{{ asset('web/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/assets/css/cavabunga.css') }}" rel="stylesheet" />
    <link href="{{ asset('web/assets/css/responsive.css') }}" rel="stylesheet" />

</head>

<body>


    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!--== End Preloader Content ==-->

        @include('web.header')


        <main class="main-content site-wrapper-reveal">
            <section class="terms__condtions">
                <div class="headtitle">
                    <h2>Terms and Conditions</h2>
                </div>
                <div class="container-fluid">
                    <div class="pattern__left">
                        <img src="{{ asset('web/assets/img/pattern/pattern__left.png') }}" alt="">
                    </div>
                    <div class="pattern__right"></div>
                    <div class="col-lg-12 p-0 ">
                        <div class="terms__view">
                            <div class="row justify-content-around">
                                <div class="col-md-3 border-right">
                                    <ul class="nav nav-tabs product-description-tab-menu" id="myTab1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab"
                                                data-bs-target="#contact" type="button" role="tab"
                                                aria-controls="cavabunga__shop__men" aria-selected="true">1. Contact
                                                Us</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                                data-bs-target="#shipping__return" type="button" role="tab"
                                                aria-controls="cavabunga__shop__women" aria-selected="false">2. Shipping
                                                & Returns</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                                data-bs-target="#store__location" type="button" role="tab"
                                                aria-controls="cavabunga__shop__women" aria-selected="false">3. Store
                                                Locations</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                                data-bs-target="#sales" type="button" role="tab"
                                                aria-controls="cavabunga__shop__women" aria-selected="false">4.
                                                Sales</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                                data-bs-target="#customer__service" type="button" role="tab"
                                                aria-controls="cavabunga__shop__women" aria-selected="false">5. Customer
                                                Service</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                                data-bs-target="#payment__option" type="button" role="tab"
                                                aria-controls="cavabunga__shop__women" aria-selected="false">6. Payment
                                                Options</button>
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                                data-bs-target="#FAQ" type="button" role="tab"
                                                aria-controls="cavabunga__shop__women" aria-selected="false">7.
                                                FAQ</button>
                                        </li>
                                        <hr class="d-lg-none d-md-none">
                                    </ul>
                                </div>
                                <div class="col-md-8 tab-content product-description-tab-content" id="myTabContent1">
                                    <div class="tab-pane fade show active" id="contact" role="tabpanel"
                                        aria-labelledby="product-desc-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>Contact Us</h2>
                                                <h4>A. Lorem ipsum dolor sit amet</h4>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae</p>
                                                <h4>B. Lorem ipsum dolor sit, amet consectetur </h4>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="shipping__return" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>Shipping & Return</h2>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum laborum
                                                    ipsum.
                                                    Atque, doloribus obcaecati? Ipsam magnam vero explicabo! Cumque
                                                    accusantium maxime numquam quo nobis alias neque rerum quidem
                                                    accusamus. Reiciendis quibusdam at animi, vel id quaerat atque quas
                                                    cupiditate
                                                    nisi quae aliquid. Fugit provident aliquid, aspernatur perferendis
                                                    porro placeat laboriosam? Illo dolores corporis ullam quaerat
                                                    laudantium, dolor nisi hic! Quibusdam dolore aspernatur dolorem
                                                    magnam
                                                    a velit tempore assumenda odio, corporis veniam tenetur eos
                                                    reiciendis, voluptate non incidunt praesentium quidem vel iusto
                                                    quaerat nulla? Asperiores obcaecati odio nihil eius! Minima?
                                                    Corporis accusamus
                                                    sapiente officiis recusandae odit optio aperiam necessitatibus! Rem
                                                    veritatis explicabo illo assumenda, molestias in maiores adipisci
                                                    autem, eius delectus hic soluta animi exercitationem voluptates
                                                    quaerat
                                                    ipsa quam? Fugiat! Aliquid aut, laudantium omnis asperiores, tempora
                                                    ratione id quis, porro sit necessitatibus quos dignissimos illum
                                                    deserunt! Distinctio tempore nam, facere molestiae accusamus, harum
                                                    ipsum natus totam tempora fugit dolor unde? Error est natus
                                                    molestias tempore? Facere quia asperiores harum quo nulla impedit.
                                                    Repellendus adipisci asperiores optio, dignissimos, eius sit ipsa
                                                    quisquam
                                                    ea porro, consectetur odio nemo ullam nihil et possimus! Quisquam,
                                                    natus! Hic quidem culpa quas at, quaerat quam mollitia, tempore cum,
                                                    earum officia magni nesciunt porro animi? Fugit, est delectus veniam
                                                    quos inventore eligendi sit tenetur pariatur vitae corporis! Fuga,
                                                    numquam? Facilis, illum inventore vel ea in minima nostrum iusto?
                                                    Minus error culpa deleniti. Iure a repellat beatae enim facilis
                                                    eveniet
                                                    corporis ab, in nobis nulla autem unde dignissimos! Itaque dolore
                                                    suscipit omnis facilis quam debitis. Nostrum, veniam consequatur
                                                    similique vero dolor omnis saepe ex nisi culpa libero iure sint
                                                    dolores
                                                    accusantium ad. Ex natus consequuntur asperiores autem praesentium!
                                                    Odit ipsum, nulla rerum deleniti facilis cum. Molestiae quo, illo
                                                    sit facere debitis beatae amet magnam ducimus, laborum, velit sed
                                                    vero animi? Assumenda enim ea at soluta fugit repudiandae
                                                    voluptatum.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="store__location" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>Store Locations</h2>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum laborum
                                                    ipsum.
                                                    Atque, doloribus obcaecati? Ipsam magnam vero explicabo! Cumque
                                                    accusantium maxime numquam quo nobis alias neque rerum quidem
                                                    accusamus. Reiciendis quibusdam at animi, vel id quaerat atque quas
                                                    cupiditate
                                                    nisi quae aliquid. Fugit provident aliquid, aspernatur perferendis
                                                    porro placeat laboriosam? Illo dolores corporis ullam quaerat
                                                    laudantium, dolor nisi hic! Quibusdam dolore aspernatur dolorem
                                                    magnam
                                                    a velit tempore assumenda odio, corporis veniam tenetur eos
                                                    reiciendis, voluptate non incidunt praesentium quidem vel iusto
                                                    quaerat nulla? Asperiores obcaecati odio nihil eius! Minima?
                                                    Corporis accusamus
                                                    sapiente officiis recusandae odit optio aperiam necessitatibus! Rem
                                                    veritatis explicabo illo assumenda, molestias in maiores adipisci
                                                    autem, eius delectus hic soluta animi exercitationem voluptates
                                                    quaerat
                                                    ipsa quam? Fugiat! Aliquid aut, laudantium omnis asperiores, tempora
                                                    ratione id quis, porro sit necessitatibus quos dignissimos illum
                                                    deserunt! Distinctio tempore nam, facere molestiae accusamus, harum
                                                    ipsum natus totam tempora fugit dolor unde? Error est natus
                                                    molestias tempore? Facere quia asperiores harum quo nulla impedit.
                                                    Repellendus adipisci asperiores optio, dignissimos, eius sit ipsa
                                                    quisquam
                                                    ea porro, consectetur odio nemo ullam nihil et possimus! Quisquam,
                                                    natus! Hic quidem culpa quas at, quaerat quam mollitia, tempore cum,
                                                    earum officia magni nesciunt porro animi? Fugit, est delectus veniam
                                                    quos inventore eligendi sit tenetur pariatur vitae corporis! Fuga,
                                                    numquam? Facilis, illum inventore vel ea in minima nostrum iusto?
                                                    Minus error culpa deleniti. Iure a repellat beatae enim facilis
                                                    eveniet
                                                    corporis ab, in nobis nulla autem unde dignissimos! Itaque dolore
                                                    suscipit omnis facilis quam debitis. Nostrum, veniam consequatur
                                                    similique vero dolor omnis saepe ex nisi culpa libero iure sint
                                                    dolores
                                                    accusantium ad. Ex natus consequuntur asperiores autem praesentium!
                                                    Odit ipsum, nulla rerum deleniti facilis cum. Molestiae quo, illo
                                                    sit facere debitis beatae amet magnam ducimus, laborum, velit sed
                                                    vero animi? Assumenda enim ea at soluta fugit repudiandae
                                                    voluptatum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sales" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>Sales</h2>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum laborum
                                                    ipsum.
                                                    Atque, doloribus obcaecati? Ipsam magnam vero explicabo! Cumque
                                                    accusantium maxime numquam quo nobis alias neque rerum quidem
                                                    accusamus. Reiciendis quibusdam at animi, vel id quaerat atque quas
                                                    cupiditate
                                                    nisi quae aliquid. Fugit provident aliquid, aspernatur perferendis
                                                    porro placeat laboriosam? Illo dolores corporis ullam quaerat
                                                    laudantium, dolor nisi hic! Quibusdam dolore aspernatur dolorem
                                                    magnam
                                                    a velit tempore assumenda odio, corporis veniam tenetur eos
                                                    reiciendis, voluptate non incidunt praesentium quidem vel iusto
                                                    quaerat nulla? Asperiores obcaecati odio nihil eius! Minima?
                                                    Corporis accusamus
                                                    sapiente officiis recusandae odit optio aperiam necessitatibus! Rem
                                                    veritatis explicabo illo assumenda, molestias in maiores adipisci
                                                    autem, eius delectus hic soluta animi exercitationem voluptates
                                                    quaerat
                                                    ipsa quam? Fugiat! Aliquid aut, laudantium omnis asperiores, tempora
                                                    ratione id quis, porro sit necessitatibus quos dignissimos illum
                                                    deserunt! Distinctio tempore nam, facere molestiae accusamus, harum
                                                    ipsum natus totam tempora fugit dolor unde? Error est natus
                                                    molestias tempore? Facere quia asperiores harum quo nulla impedit.
                                                    Repellendus adipisci asperiores optio, dignissimos, eius sit ipsa
                                                    quisquam
                                                    ea porro, consectetur odio nemo ullam nihil et possimus! Quisquam,
                                                    natus! Hic quidem culpa quas at, quaerat quam mollitia, tempore cum,
                                                    earum officia magni nesciunt porro animi? Fugit, est delectus veniam
                                                    quos inventore eligendi sit tenetur pariatur vitae corporis! Fuga,
                                                    numquam? Facilis, illum inventore vel ea in minima nostrum iusto?
                                                    Minus error culpa deleniti. Iure a repellat beatae enim facilis
                                                    eveniet
                                                    corporis ab, in nobis nulla autem unde dignissimos! Itaque dolore
                                                    suscipit omnis facilis quam debitis. Nostrum, veniam consequatur
                                                    similique vero dolor omnis saepe ex nisi culpa libero iure sint
                                                    dolores
                                                    accusantium ad. Ex natus consequuntur asperiores autem praesentium!
                                                    Odit ipsum, nulla rerum deleniti facilis cum. Molestiae quo, illo
                                                    sit facere debitis beatae amet magnam ducimus, laborum, velit sed
                                                    vero animi? Assumenda enim ea at soluta fugit repudiandae
                                                    voluptatum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="customer__service" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>Customer Service</h2>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum laborum
                                                    ipsum.
                                                    Atque, doloribus obcaecati? Ipsam magnam vero explicabo! Cumque
                                                    accusantium maxime numquam quo nobis alias neque rerum quidem
                                                    accusamus. Reiciendis quibusdam at animi, vel id quaerat atque quas
                                                    cupiditate
                                                    nisi quae aliquid. Fugit provident aliquid, aspernatur perferendis
                                                    porro placeat laboriosam? Illo dolores corporis ullam quaerat
                                                    laudantium, dolor nisi hic! Quibusdam dolore aspernatur dolorem
                                                    magnam
                                                    a velit tempore assumenda odio, corporis veniam tenetur eos
                                                    reiciendis, voluptate non incidunt praesentium quidem vel iusto
                                                    quaerat nulla? Asperiores obcaecati odio nihil eius! Minima?
                                                    Corporis accusamus
                                                    sapiente officiis recusandae odit optio aperiam necessitatibus! Rem
                                                    veritatis explicabo illo assumenda, molestias in maiores adipisci
                                                    autem, eius delectus hic soluta animi exercitationem voluptates
                                                    quaerat
                                                    ipsa quam? Fugiat! Aliquid aut, laudantium omnis asperiores, tempora
                                                    ratione id quis, porro sit necessitatibus quos dignissimos illum
                                                    deserunt! Distinctio tempore nam, facere molestiae accusamus, harum
                                                    ipsum natus totam tempora fugit dolor unde? Error est natus
                                                    molestias tempore? Facere quia asperiores harum quo nulla impedit.
                                                    Repellendus adipisci asperiores optio, dignissimos, eius sit ipsa
                                                    quisquam
                                                    ea porro, consectetur odio nemo ullam nihil et possimus! Quisquam,
                                                    natus! Hic quidem culpa quas at, quaerat quam mollitia, tempore cum,
                                                    earum officia magni nesciunt porro animi? Fugit, est delectus veniam
                                                    quos inventore eligendi sit tenetur pariatur vitae corporis! Fuga,
                                                    numquam? Facilis, illum inventore vel ea in minima nostrum iusto?
                                                    Minus error culpa deleniti. Iure a repellat beatae enim facilis
                                                    eveniet
                                                    corporis ab, in nobis nulla autem unde dignissimos! Itaque dolore
                                                    suscipit omnis facilis quam debitis. Nostrum, veniam consequatur
                                                    similique vero dolor omnis saepe ex nisi culpa libero iure sint
                                                    dolores
                                                    accusantium ad. Ex natus consequuntur asperiores autem praesentium!
                                                    Odit ipsum, nulla rerum deleniti facilis cum. Molestiae quo, illo
                                                    sit facere debitis beatae amet magnam ducimus, laborum, velit sed
                                                    vero animi? Assumenda enim ea at soluta fugit repudiandae
                                                    voluptatum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="payment__option" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>Payment Options</h2>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum laborum
                                                    ipsum.
                                                    Atque, doloribus obcaecati? Ipsam magnam vero explicabo! Cumque
                                                    accusantium maxime numquam quo nobis alias neque rerum quidem
                                                    accusamus. Reiciendis quibusdam at animi, vel id quaerat atque quas
                                                    cupiditate
                                                    nisi quae aliquid. Fugit provident aliquid, aspernatur perferendis
                                                    porro placeat laboriosam? Illo dolores corporis ullam quaerat
                                                    laudantium, dolor nisi hic! Quibusdam dolore aspernatur dolorem
                                                    magnam
                                                    a velit tempore assumenda odio, corporis veniam tenetur eos
                                                    reiciendis, voluptate non incidunt praesentium quidem vel iusto
                                                    quaerat nulla? Asperiores obcaecati odio nihil eius! Minima?
                                                    Corporis accusamus
                                                    sapiente officiis recusandae odit optio aperiam necessitatibus! Rem
                                                    veritatis explicabo illo assumenda, molestias in maiores adipisci
                                                    autem, eius delectus hic soluta animi exercitationem voluptates
                                                    quaerat
                                                    ipsa quam? Fugiat! Aliquid aut, laudantium omnis asperiores, tempora
                                                    ratione id quis, porro sit necessitatibus quos dignissimos illum
                                                    deserunt! Distinctio tempore nam, facere molestiae accusamus, harum
                                                    ipsum natus totam tempora fugit dolor unde? Error est natus
                                                    molestias tempore? Facere quia asperiores harum quo nulla impedit.
                                                    Repellendus adipisci asperiores optio, dignissimos, eius sit ipsa
                                                    quisquam
                                                    ea porro, consectetur odio nemo ullam nihil et possimus! Quisquam,
                                                    natus! Hic quidem culpa quas at, quaerat quam mollitia, tempore cum,
                                                    earum officia magni nesciunt porro animi? Fugit, est delectus veniam
                                                    quos inventore eligendi sit tenetur pariatur vitae corporis! Fuga,
                                                    numquam? Facilis, illum inventore vel ea in minima nostrum iusto?
                                                    Minus error culpa deleniti. Iure a repellat beatae enim facilis
                                                    eveniet
                                                    corporis ab, in nobis nulla autem unde dignissimos! Itaque dolore
                                                    suscipit omnis facilis quam debitis. Nostrum, veniam consequatur
                                                    similique vero dolor omnis saepe ex nisi culpa libero iure sint
                                                    dolores
                                                    accusantium ad. Ex natus consequuntur asperiores autem praesentium!
                                                    Odit ipsum, nulla rerum deleniti facilis cum. Molestiae quo, illo
                                                    sit facere debitis beatae amet magnam ducimus, laborum, velit sed
                                                    vero animi? Assumenda enim ea at soluta fugit repudiandae
                                                    voluptatum.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="FAQ" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="term__condition__content">
                                            <div class="title">
                                                <h2>FAQ</h2>
                                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
                                                    aperiam ratione. Commodi qui ullam, ducimus distinctio esse eius
                                                    illo veritatis. Aliquam quam deleniti magnam soluta iusto, dicta
                                                    odio vero
                                                    ratione.
                                                </p>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea neque
                                                    exercitationem hic nulla libero eos ab, fugit quod accusantium non,
                                                    adipisci alias magnam in explicabo? Dolor necessitatibus nemo
                                                    suscipit
                                                    sed. Facere, deleniti eum magnam doloribus accusamus autem pariatur
                                                    sed error cum velit inventore dolorum consectetur incidunt voluptate
                                                    id. Omnis aliquam minus ab optio unde ex vero numquam recusandae
                                                    labore earum. Nostrum est voluptatum dicta vero voluptatem
                                                    repudiandae nihil minima praesentium enim consectetur voluptatibus
                                                    nulla dignissimos atque laborum pariatur itaque aut, quisquam magni
                                                    nesciunt
                                                    at et? Maxime assumenda porro ex cum! Libero maiores, fugiat nulla
                                                    perspiciatis rerum inventore id ipsam vero architecto, nostrum dolor
                                                    accusamus quisquam sapiente, corporis assumenda ut aliquam suscipit
                                                    debitis obcaecati labore reiciendis. Aspernatur architecto
                                                    doloremque quam ut? Excepturi dolore, laboriosam quaerat porro
                                                    laborum enim voluptatum adipisci delectus quo ratione quam possimus
                                                    qui pariatur.
                                                    Excepturi non laborum placeat vero repudiandae voluptatum unde ut
                                                    enim, odio ducimus atque iusto. Fuga voluptatum, reprehenderit qui
                                                    praesentium voluptas maiores iste necessitatibus harum laborum
                                                    ipsum.
                                                    Atque, doloribus obcaecati? Ipsam magnam vero explicabo! Cumque
                                                    accusantium maxime numquam quo nobis alias neque rerum quidem
                                                    accusamus. Reiciendis quibusdam at animi, vel id quaerat atque quas
                                                    cupiditate
                                                    nisi quae aliquid. Fugit provident aliquid, aspernatur perferendis
                                                    porro placeat laboriosam? Illo dolores corporis ullam quaerat
                                                    laudantium, dolor nisi hic! Quibusdam dolore aspernatur dolorem
                                                    magnam
                                                    a velit tempore assumenda odio, corporis veniam tenetur eos
                                                    reiciendis, voluptate non incidunt praesentium quidem vel iusto
                                                    quaerat nulla? Asperiores obcaecati odio nihil eius! Minima?
                                                    Corporis accusamus
                                                    sapiente officiis recusandae odit optio aperiam necessitatibus! Rem
                                                    veritatis explicabo illo assumenda, molestias in maiores adipisci
                                                    autem, eius delectus hic soluta animi exercitationem voluptates
                                                    quaerat
                                                    ipsa quam? Fugiat! Aliquid aut, laudantium omnis asperiores, tempora
                                                    ratione id quis, porro sit necessitatibus quos dignissimos illum
                                                    deserunt! Distinctio tempore nam, facere molestiae accusamus, harum
                                                    ipsum natus totam tempora fugit dolor unde? Error est natus
                                                    molestias tempore? Facere quia asperiores harum quo nulla impedit.
                                                    Repellendus adipisci asperiores optio, dignissimos, eius sit ipsa
                                                    quisquam
                                                    ea porro, consectetur odio nemo ullam nihil et possimus! Quisquam,
                                                    natus! Hic quidem culpa quas at, quaerat quam mollitia, tempore cum,
                                                    earum officia magni nesciunt porro animi? Fugit, est delectus veniam
                                                    quos inventore eligendi sit tenetur pariatur vitae corporis! Fuga,
                                                    numquam? Facilis, illum inventore vel ea in minima nostrum iusto?
                                                    Minus error culpa deleniti. Iure a repellat beatae enim facilis
                                                    eveniet
                                                    corporis ab, in nobis nulla autem unde dignissimos! Itaque dolore
                                                    suscipit omnis facilis quam debitis. Nostrum, veniam consequatur
                                                    similique vero dolor omnis saepe ex nisi culpa libero iure sint
                                                    dolores
                                                    accusantium ad. Ex natus consequuntur asperiores autem praesentium!
                                                    Odit ipsum, nulla rerum deleniti facilis cum. Molestiae quo, illo
                                                    sit facere debitis beatae amet magnam ducimus, laborum, velit sed
                                                    vero animi? Assumenda enim ea at soluta fugit repudiandae
                                                    voluptatum.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

        </main>


        <section id="footer" class="cavabunga__footer__section">
            @include('web.footer')
        </section>


    </div>







    <!--=== Modernizr Min Js ===-->
    <script src="{{ asset('web/assets/js/modernizr.js') }}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-main.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-migrate.js') }}"></script>
    <!--=== Popper Min Js ===-->
    <script src="{{ asset('web/assets/js/popper.min.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{ asset('web/assets/js/bootstrap.min.js') }}"></script>
    <!--=== jquery Appear Js ===-->
    <script src="{{ asset('web/assets/js/jquery.appear.js') }}"></script>
    <!--=== jquery Swiper Min Js ===-->
    <script src="{{ asset('web/assets/js/swiper.min.js') }}"></script>
    <!--=== jquery Fancybox Min Js ===-->
    <script src="{{ asset('web/assets/js/fancybox.min.js') }}"></script>
    <!--=== jquery Aos Min Js ===-->
    <script src="{{ asset('web/assets/js/aos.min.js') }}"></script>
    <!--=== jquery Slicknav Js ===-->
    <script src="{{ asset('web/assets/js/jquery.slicknav.js') }}"></script>
    <!--=== jquery Countdown Js ===-->
    <script src="{{ asset('web/assets/js/jquery.countdown.min.js') }}"></script>
    <!--=== jquery Tippy Js ===-->
    <script src="{{ asset('web/assets/js/tippy.all.min.js') }}"></script>
    <!--=== Isotope Min Js ===-->
    <script src="{{ asset('web/assets/js/isotope.pkgd.min.js') }}"></script>
    <!--=== jquery Vivus Js ===-->
    <script src="{{ asset('web/assets/js/vivus.js') }}"></script>
    <!--=== Parallax Min Js ===-->
    <script src="{{ asset('web/assets/js/parallax.min.js') }}"></script>
    <!--=== Slick  Min Js ===-->
    <script src="{{ asset('web/assets/js/slick.min.js') }}"></script>
    <!--=== jquery Wow Min Js ===-->
    <script src="assets/js/wow.min.js')}}"></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="{{ asset('web/assets/js/jquery-zoom.min.js') }}"></script>

    <!--=== Custom Js ===-->
    <script src="{{ asset('web/assets/js/custom.js') }}"></script>

</body>

</html>
