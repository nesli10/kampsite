@php
use App\Models\ilModel;
use App\Models\bolgeModel;
@endphp
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/assetssec/assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/libs/css/style.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/assetssec/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/">Admin Paneli</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Kamp Alanları</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>panel <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('admin', 1) }}">Kamp Alanları
                                                Listesi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/kampekle">Ekle</a>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> Güncelle </h2>

                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Admin
                                                Paneli</a></li>

                                        <li class="breadcrumb-item active" aria-current="page"> Güncelle</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- validation form -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end validation form -->
                <!-- ============================================================== -->
            </div>
            <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Kamp Alanı</h5>
                        <div class="card-body">
                            @php
                               
                                    $il = ilModel::where('ilid', $guncelle->ilid)->value('iladi');
                                    $bolge = bolgeModel::where('bolgeid', $guncelle->bolgeid)->value('bolgeadi');
                                    $marka=bolgeModel::all();
                                
                            @endphp
                            <form action="{{ route('post.kampguncelle') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">                                    
                                    <input type="hidden" id="kampid" name="kampid"
                                        value="{{  $guncelle->kampid}}">
                                    <label for="inputUserName">Kamp Alanı İsmi</label>
                                    <input id="kampadi" type="text" name="kampadi" data-parsley-trigger="change"
                                        placeholder="İsim Girin" autocomplete="off" class="form-control"
                                        value="{{$guncelle->kampadi}}">
                                </div>
                                 <div class="form-group">
                                    <label for="inputUserName">açıklama</label>
                                    <input id="aciklama" type="text" name="aciklama" data-parsley-trigger="change"
                                        placeholder="Fiyat Girin" autocomplete="off" class="form-control"
                                        value="{{ $guncelle->aciklama}}">
                                </div>
                                <div class="form-group">
                                    <label for="foto">FOTOĞRAF</label>
                                    <br>
                                    <input type="file" name="foto" id="foto"
                                        value="{{ $guncelle->foto  }}">
                                </div>
                                 
                                <div class="form-group">
                                    <label for="inputUserName">il</label>
                                    <input id="il" type="text" name="il" data-parsley-trigger="change"
                                        placeholder="il Girin" autocomplete="off" class="form-control"
                                        value="{{ $il }}">
                                </div>
                                 
                                 <div class="form-group">
                                    <label for="inputUserName">bölge</label>
                                    <input id="bolge" type="text" name="bolge" data-parsley-trigger="change"
                                        placeholder="bölge Girin" autocomplete="off" class="form-control"
                                        value="{{$bolge}}">
                                </div> 
                                   {{-- <div class="form-group">
                                    <select name="bolge" id="bolge" class="form-control" >
                                         @foreach($marka as $item)
                                        <option value="{{$item->bolgeid}}">{{$item->bolgeadi}}</option>
                                       @endforeach
                                   </select>
                                </div> --}}

                                <div class="form-group">
                                    <label for="inputUserName">ücret</label>
                                    <input id="ucret" type="text" name="ucret" data-parsley-trigger="change"
                                        placeholder="Fiyat Girin" autocomplete="off" class="form-control"
                                        value="{{ $guncelle->ucret}}">
                                </div>

                                <div class="form-group row">
                                    <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Web
                                        Site</label>
                                    <div class="col-9 col-lg-10">
                                        <input id="link" name="link" type="text" data-parsley-type="url"
                                            placeholder="link" class="form-control"
                                            value="{{$guncelle->link}}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-dark" id="kaydet">kaydet</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->


            </div>

        </div>
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- end footer -->
        <!-- ============================================================== -->
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> --}}
    <script src="{{ asset('assets/assetssec/assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/assetssec/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/assetssec/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/assetssec/assets/vendor/parsley/parsley.js') }}"></script>
    <script src="{{ asset('assets/assetssec/assets/libs/js/main-js.js') }}"></script>

    {{-- <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('input[name=_token]').val()
                }
            })
            $('#kaydet').on('click', function() {

                let data = {
                    kampid: $("#kampid").val(),
                    kampadi: $('#kampadi').val(),
                    Foto: $('#foto').val(),
                    il: $('#il').val(),
                    ucret: $('#ucret').val(),
                    link: $('#link').val(),
                    
                }

                $.ajax({
                    type: 'POST',
                    url: '{{ route("adminekle") }}',
                    data: data,
                    success: function(success) {
                        if (success.islemDurum == 1) {
                            window.location.href = '{{ route("admin", 1) }}'
                        } else {
                            alert("kamp eklenemedi.")
                        }

                    }
                })

            })
        })
    </script> --}}
</body>

</html>
