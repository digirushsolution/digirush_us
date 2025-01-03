<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link rel="icon" href="{{ asset('admin/images/favicon-32x32.png')}}" type="image/png" /> --}}
	<link rel="icon" href="{{ asset('admin/images/DigiRush_Favicon.png')}}" type="image/png" />

  <!--plugins-->
  <link href="{{ asset('admin/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.16/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- loader-->
	<link href="{{ asset('admin/css/pace.min.css')}}" rel="stylesheet" />

  <!--Theme Styles-->
  <link href="{{ asset('admin/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{ asset('admin/css/header-colors.css')}}" rel="stylesheet" />
  <title>Digirush</title>
  @yield('heads')
</head>
<body>
  <!--start wrapper-->
  <div class="wrapper">
        @include('include.admin.header')
        @include('include.admin.sidebar')
        @yield('content')
  </div>
  <!--end wrapper-->
  <!-- Bootstrap bundle JS -->
  <script src="{{ asset('admin/js/bootstrap.bundle.min.js')}}"></script>
  <!--plugins-->
  <script src="{{ asset('admin/js/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{ asset('admin/plugins/peity/jquery.peity.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{ asset('admin/js/pace.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
	<script src="{{ asset('admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{ asset('admin/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
  <script src="{{ asset('admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('admin/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{ asset('admin/js/table-datatable.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.16/dist/sweetalert2.min.js"></script>

  <!--app-->
  <script src="{{ asset('admin/js/app.js')}}"></script>
  
  @yield('scripts')
  <script>
     new PerfectScrollbar(".best-product")
     new PerfectScrollbar(".top-sellers-list")
  </script>

</body>

</html>