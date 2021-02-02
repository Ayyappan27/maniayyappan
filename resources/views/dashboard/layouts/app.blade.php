<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> :: Wize Genie | Admin ::</title>
    <link rel="apple-touch-icon" href="{{ asset('/dashboard/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/dashboard/app-assets/images/logo/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/pages/dashboard-ecommerce.css')}}">

    
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/pages/page-users.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/plugins/forms/switch.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/core/colors/palette-switch.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/app-assets/css/custom.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/dashboard/assets/css/style.css')}}">
    <!-- END: Custom CSS-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

  

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

    <div class="preloadersection">
         <img class="preloaderinnersection" src="https://miro.medium.com/max/1600/1*CsJ05WEGfunYMLGfsT2sXA.gif" />
    </div>

    <div class="ajaxloader">
        <img class="ajaxinnerloader" src="http://www.clker.com/cliparts/G/R/j/C/W/I/loader.svg.med.png">
    </div>

@include('dashboard.layouts.navbar')
@include('dashboard.layouts.sidebar')

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    @yield('content')
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2021 <a class="text-bold-800 grey darken-2" href="https://linkia.qa" target="_blank">Linkia</a></span><span class="float-md-right d-none d-lg-block">Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
</footer>


<script type="text/javascript">
    document.onreadystatechange = function() { 
    if (document.readyState !== "complete") { 
        document.querySelector("body").style.visibility = "hidden"; 
        document.querySelector(".preloadersection").style.visibility = "visible"; 
    } else { 
        document.querySelector(".preloadersection").style.display = "none"; 
        document.querySelector("body").style.visibility = "visible"; 
    } 
};
</script>
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('/dashboard/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->

<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/chart.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/chartist.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/charts/morris.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('/dashboard/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('/dashboard/app-assets/js/scripts/pages/dashboard-crypto.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/custom/userlist.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
<script src="{{ asset('/dashboard/app-assets/js/scripts/forms/switch.js')}}"></script>
<!-- END: Page JS-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



@include('sweetalert::alert')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote();
    });
</script>

</body>
<!-- END: Body-->

</html>
