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
                <a class="navbar-brand" href="/">kullanici Paneli</a>
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
       
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                       
                        <div class="card">

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="bg-light">
                                            <tr class="border-0">

                                                <th class="border-0">e posta</th>
                                                <th class="border-0">şifre</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $value)
                                             
                                                <tr id="{{ $value->kullaniciid }}">
                                                   
                                                    <td>{{ $value->eposta }} </td>
                                                    <td>{{ $value->sifre }} </td>
                                                   
                                                    <td colspan="9"><a href="" class="btn btn-dark">Değişiklik
                                                            Yap</a>
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
