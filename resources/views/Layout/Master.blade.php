<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href="{{asset('admin/assets/img/brand/favicon.png')}}" rel="icon" type="image/png" >
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{asset('admin/assets/js/plugins/nucleo/css/nucleo.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{asset('admin/assets/css/argon-dashboard.css?v=1.1.0')}}" rel="stylesheet" />
</head> 

<body class="">

  <!-- Sidebar -->
  @include('Layout.Include.Sidebar')
  <!-- End Sidbar -->

  <div class="main-content">
    
    <!-- Navbar -->
    @include('Layout.Include.Navbar')
    <!-- End Navbar -->

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          @yield('content')
        </div>
      </div>
    </div>
    
  </div>
  <!--   Core   -->
  <script src="{{asset('admin/assets/js/plugins/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <!--   Optional JS   -->
  <script src="{{asset('admin/assets/js/plugins/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/chart.js/dist/Chart.extension.js')}}"></script>
  <!--   Argon JS   -->
  <script src="{{asset('admin/assets/js/argon-dashboard.min.js?v=1.1.0')}}"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
  @yield('admin-js')
</body>

</html>