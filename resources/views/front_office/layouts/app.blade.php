<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Wize Genie" />
    <meta name="author" content="linkia.qa" />
    <title>WizeGenie</title>

    <!-- Favicon -->
    <link href="{{ asset('images/favicon.ico') }}" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory ()-->
    <link rel="stylesheet" href="{{ asset('front_office/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins ()-->
    <link rel="stylesheet" href="{{ asset('front_office/css/range-slider/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('front_office/css/subtle-slideshow.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('front_office/css/style.css') }}" />

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>

    @yield('content')

    <!--================================= Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="{{ asset('front_office/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('front_office/js/popper/popper.min.js') }}"></script>
    <script src="{{ asset('front_office/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="{{ asset('front_office/js/owl-carousel/owl-carousel.min.js') }}"></script>
    <script src="{{ asset('front_office/js/slideshow/jquery.velocity.min.js') }}"></script>
    <script src="{{ asset('front_office/js/slideshow/jquery.kenburnsy.js') }}"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="{{ asset('front_office/js/custom.js') }}"></script>
</body>
</html>
