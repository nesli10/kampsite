@php
use App\Models\ilModel;
use App\Models\bolgeModel;
use App\Models\puanModel;

@endphp
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset("assets/assetssec/assets/vendor/bootstrap/css/bootstrap.min.css") }}">
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/assetssec/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/assetssec/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Admin</title>
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
                                        class="fa fa-fw fa-user-circle"></i>Panel <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route("admin", 1) }}">Kamp Alanları Listesi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/kampekle">Ekle</a>
                                        </li>
                                      
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
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Admin Paneli Listesi </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                    vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Admin
                                                    Paneli </a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Kamp Alanları
                                                Listesi</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="col-md-3">
                            <a href="/kampekle" class="btn btn-dark">Ekle</a>
                        </div>
                        <div class="card">

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">

                                                <th class="border-0">Foto</th>
                                                <th class="border-0">Kamp  İsmi</th>
                                                 <th class="border-0">açıklama</th>
                                                <th class="border-0">il</th>
                                                <th class="border-0">bölge</th>

                                                <th class="border-0">Fiyat</th>
                                                <th class="border-0">Link</th>
                                            
                                                <th class="border-0">Değiştir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($camp as $value)
                                                @php
                                                    $il = ilModel::where('ilid', $value->ilid)->value('iladi');
                                                    $bolge = bolgeModel::where('bolgeid', $value->bolgeid)->value('bolgeadi');
                                                @endphp
                                               
                                                
                                                <tr id="{{ $value->kampid }}">
                                                    <td>
                                                        <div class="m-r-10"><img
                                                                src="{{ asset('assets/images') }}/{{ $value->foto }}"
                                                                alt="user" class="rounded" width="45"></div>
                                                    </td>
                                                    <td>{{ $value->kampadi }} </td>
                                                    <td>{{ $value->aciklama }} </td>
                                                    <td>{{ $il }} </td>
                                                    <td>{{ $bolge }}</td>
                                                    <td>{{ $value->ucret }}</td>
                                                    <td>{{ $value->link }}</td>
                                                   
                                                    
                                                    <td colspan="9"><a href="{{ route('guncelle')."/".$value->kampid  }}" class="btn btn-dark">Değişiklik
                                                            Yap</a>
                                                    </td>
                                                    <td colspan="9"><a href="{{ route('kampSil')."/".$value->kampid  }}" class="btn btn-dark">sil
                                                            </a>
                                                    </td>
                                                </tr>
                                               
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
            <!-- bootstap bundle js -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
            <!-- slimscroll js -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
            <!-- main js -->
            <script src="{{ asset ('assets/assetssec/assets/libs/js/main-js.js')}}"></script>
            <!-- chart chartist js -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
            <!-- sparkline js -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
            <!-- morris js -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
            <!-- chart c3 js -->
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
            <script src="{{ asset ('assets/assetssec/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
            <script src="{{ asset ('assets/assetssec/assets/libs/js/dashboard-ecommerce.js')}}"></script>
</body>

</html>
