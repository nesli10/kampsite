<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kamp </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/aos.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/jquery.timepicker.css">


    <link rel="stylesheet" href="{{ asset('assets') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/icomoon.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
</head>

<body>

    @include('header')

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <strong>Size uygun <br></strong> Kamp Alanları
                    </h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kamp Yapmak, Ziyaret Etmek, Yeni
                        Keşifler için Harika Yerler Bulun</p>
                    <div class="block-17 my-4">
                        <form action="" method="post" class="d-block d-flex">
                            <div class="fields d-block d-flex">
                                <div class="textfield-search one-third">
                                    <input type="text" class="form-control" placeholder="Kamp alanları">
                                </div>
                                <div class="select-wrap one-third">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control" placeholder="Keyword search">
                                        <option value="">marmara</option>
                                        <option value="">ege</option>
                                        <option value="">akdeniz</option>
                                        <option value="">iç anadolu</option>
                                        <option value="">karadeniz</option>
                                        <option value="">doğu anadolu</option>
                                    </select>
                                </div>
                            </div>
                            <input type="button" class="search-submit btn btn-primary" value="Ara">
                        </form>
                    </div>
                    <p>5 yıldızlı otellerde değil, milyon yıldızlı gökyüzünün altında uyanmak senin elinde.</p>
                    
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-guarantee"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Güvenilirlik</h3>
                            <p>Ülkemizin eşsiz güzelliklerini keşfedin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-like"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Gezginler Bizi Seviyor</h3>
                            <p>Ülkemizin eşsiz güzelliklerini keşfedin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-detective"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">En İyi Seyahat</h3>
                            <p>Ülkemizin eşsiz güzelliklerini keşfedin.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon"><span class="flaticon-support"></span></div>
                        </div>
                        <div class="media-body p-2 mt-2">
                            <h3 class="heading mb-3">Özel Desteğimiz</h3>
                            <p>Ülkemizin eşsiz güzelliklerini keşfedin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-destination">
        <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate">
                    <span class="subheading">Öne Çıkanlar</span>
                    <h2 class="mb-4"><strong>bölgeler</strong> </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="destination-slider owl-carousel ftco-animate">
                        <div class="item">
                            <div class="destination">
                                <a href="/ege" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('assets') }}/images/foto1.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{route("egelist")}}">ege</a></h3>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="/icanadolu" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('assets') }}/images/foto5.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{route("icanadolulist")}}">iç anadolu</a></h3>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="/marmara" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('assets') }}/images/foto4.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{route("marmaralist")}}">marmara</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="/doguanadolu" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('assets') }}/images/dscscsc.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{route("doguanadolulist")}}">doğu anadolu</a></h3>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="/akdeniz" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('assets') }}/images/foto3.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{route("akdenizlist")}}">akdeniz</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="destination">
                                <a href="/karadeniz" class="img d-flex justify-content-center align-items-center"
                                    style="background-image: url({{ asset('assets') }}/images/foto2.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <h3><a href="{{route("karadenizlist")}}">karadeniz</a></h3>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


   

    </div>
    </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url({{ asset('assets') }}/images/bg_1.jpg);">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <h2 class="mb-4">Hakkımızda Bilgiler</h2>
                    <span class="subheading"></span>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="1000">0</strong>
                                    <span>Mutlu Müşteri</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="100">0</strong>
                                    <span>Kamp Alanı</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="7000">0</strong>
                                    <span>Ziyaretçi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-md-5 heading-section ftco-animate">
                    <span class="subheading">Kamp Alanları</span>
                    <h2 class="mb-4 pb-3"><strong></strong> Misyonumuz & Vizyonumuz</h2>
                    <p>2022 yılından bu yana hizmet verdiğimiz kampçılık ve doğa sporları alanında her yıl onlarca doğa
                        severin kamp alanlarını birlikte yapıyoruz. temel amacımız doğa severlerin doğada kaliteli vakit
                        geçirmesini sağlamak.</p>
                    <p></p>

                </div>

            </div>
        </div>
        </div>
    </section>

    @include('footer')



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('assets') }}/js/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('assets') }}/js/aos.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap-datepicker.js"></script>
    <script src="{{ asset('assets') }}/js/jquery.timepicker.min.js"></script>
    <script src="{{ asset('assets') }}/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets') }}/js/google-map.js"></script>
    <script src="{{ asset('assets') }}/js/main.js"></script>

</body>

</html>
