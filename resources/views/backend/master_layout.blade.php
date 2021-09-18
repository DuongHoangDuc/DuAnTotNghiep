<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NOOB Shop | @yield('title')</title>
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('fonts/fontawesome-pro-5.14.0-web/css/all.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
</head>
<body>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Topbar Start -->
      @include('backend.share.navbar') 
    <!-- end Topbar -->
    <!-- ========== Left Sidebar Start ========== -->
      @include('backend.share.sidebar') 
    <!-- Left Sidebar End -->
    <!--========================= -->
    <!-- Start Page Content here -->
    <!-- ========================================== -->
    <div class="content-page">
      <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
        <!-- start page title -->
         @include('backend.share.sub_menu')   
        <!-- end page title --> 
        @yield('content')
       </div> <!-- end container-fluid -->
    </div>
    <!-- end content -->
      <!-- Footer Start -->
      @include('backend.share.footer')
      <!-- end Footer -->
    </div>
    <!-- =============================== -->
    <!-- End Page content -->
    <!-- ============================== -->
  </div>
  <!-- END wrapper -->

  <!-- Right Sidebar -->
  @include('backend.share.sidebar_right')
  <!-- /Right-bar -->

  <!-- Right bar overlay-->
  <div class="rightbar-overlay"></div>
  <a href="javascript:void(0);" class="right-bar-toggle demos-show-btn">
      <i class="mdi mdi-settings-outline mdi-spin"></i> &nbsp;Choose Demos
  </a>

  <!-- Vendor js -->
  <script src="{{ asset('js/vendor.min.js') }}"></script>

  <!--C3 Chart-->
  <script src="{{ asset('libs/d3/d3.min.js') }}"></script>
  <script src="{{ asset('libs/c3/c3.min.js') }}"></script>

  <script src="{{ asset('libs/echarts/echarts.min.js') }}"></script>

  <script src="{{ asset('js/pages/dashboard.init.js') }}"></script>

  <!-- App js -->
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script src="{{ asset('js/admin.js') }}"></script>

  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>

  {{-- ckeditor --}}
  {{-- <script type="text/javascript" src="{{ asset('libs/ckeditor/ckeditor.js') }}"></script>
  <script>
    CKEDITOR.replace('Description');
  </script>    --}}
    
</body>
</html>