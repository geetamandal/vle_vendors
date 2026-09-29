<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Digital- Bastar</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('vendor_assets/img/logo/fav-logo1.png ') }}" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/bootstrap.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/magnific-popup.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/owlcarousel.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/slick-slider.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/nice-select.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/plugins/swiper.min.css ') }}">
    <link rel="stylesheet" href="{{ asset('vendor_assets/css/main.css ') }}">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('vendor_assets/js/plugins/jquery-3-7-1.min.js') }}"></script>
</head>

<body>
    <!--=====HEADER START=======-->
    @include('shopkeeper.layout_1.header')
    <!--=====HEADER END =======-->
    
    <!--=====main =======-->
    @yield('main_content')

    <!--===== main END =======-->

    <div class="space80"></div>
    <!--===== FOOTER START =======-->

    @include('shopkeeper.layout_1.footer')
    <!--===== FOOTER END =======-->


    <!-- MouseCursor Start -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>


    <!--===== JS SCRIPT LINK =======-->
    <script src="{{ asset('vendor_assets/js/plugins/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/fontawesome.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/aos.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/counter.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/magnific-popup.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/owlcarousel.min.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/nice-select.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/waypoints.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/slick-slider.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/swiper.min.js ') }}"></script>

    <!-- GSAP ANIMATION -->
    <script src="{{ asset('vendor_assets/js/plugins/gsap.min.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/ScrollTrigger.min.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/SmoothScroll.js ') }}"></script>
    <script src="{{ asset('vendor_assets/js/plugins/Splitetext.js ') }}"></script>

    <script src="{{ asset('vendor_assets/js/main.js ') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>


</html>
