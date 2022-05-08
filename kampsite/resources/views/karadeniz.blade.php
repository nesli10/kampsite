@php
use App\Models\ilModel;
use App\Models\bolgeModel;
use App\Models\puanModel;
use Illuminate\Support\Facades\Cache;
$loginedUser = Cache::get('loginedUser');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kamp Alanları</title>
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

    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/assetssec/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/libs/css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/assetssec/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">



</head>

<body>

    @include('header')

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('assets') }}/images/bg_5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
                data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span
                            class="mr-2"><a href="/">Anasayfa</a></span> <span>Kamp Alanları</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Kamp
                        Alanları</h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 sidebar">


                </div>

                <div class="col-lg-9">
                    <div class="row">
                        @foreach ($kamp as $value)
                            @php
                                $toplam = 0;
                                $count = puanModel::where('kampid', $value->kampid)->count();
                                $puan = puanModel::where('kampid', $value->kampid)->sum('puan');
                            @endphp
                            <div class="col-md-4 ftco-animate">
                                <div class="destination">
                                    <a href="hotel-single.html"
                                        class="img img-2 d-flex justify-content-center align-items-center"
                                        style="background-image: url({{ asset('assets/images') }}/{{ $value->foto }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3><a href="hotel-single.html"> {{ $value->kampadi }}</a></h3>
                                                <p class="rate">
                                                    @if ($puan != 0)
                                                        <p class="rate">
                                                        <p>puan:{{ $puan / $count }}</p>

                                                </p>
                        @endif
                        </p>
                    </div>
                    <div class="two">
                        <span class="price per-price">₺ {{ $value->ucret }}<br><small>/night</small></span>
                    </div>
                </div>


                <div class="float-xl-right float-none mt-xl-0 mt-4">
                    <a href="#" class="btn-wishlist m-r-10"><i class="far fa-star"></i></a>

                </div>

                </p>

                <p> {{ $value->aciklama }}</p>
                <hr>
                <p class="bottom-area d-flex">
                    <span><i class="icon-map-o"></i> il</span>
                    <span class="ml-auto"><a href="{{ $value->link }}"> göster</a></span>

                </p>
                </form>
            </div>
            <div class="sidebar-wrap bg-light ftco-animate">
                <h3 class="heading mb-4">Değerlendir</h3>
                @if (!empty($loginedUser))
                    <form method="post" action="{{ url('addpuan') }}" class="star-rating">

                        <div class="form-group">
                            @csrf
                            <input type="hidden" name="kampid" id="kampid" value="{{ $value->kampid }}">
                            <label for="inputUserName">puan</label>
                            <input id="puan" type="text" name="puan" data-parsley-trigger="change"
                                placeholder="puan Girin" autocomplete="off" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-danger" name="addpuan" id="kaydet">kaydet</button>

                        </div>

                    </form>
                @else
                    Puan verebilmek için giriş yapmış olmalısınız.
                @endif

            </div>
        </div>
        </div>
        @endforeach


        </div> <!-- .col-md-8 -->
        </div>
        </div>
    </section> <!-- .section -->

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
    <script src="{{ asset('assets') }}/js/button.js"></script>


    <script src="{{ asset('assets/assetssec/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/assetssec/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('assets/assetssec/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/assetssec/assets/libs/js/main-js.js') }}"></script>




</body>

</html>
