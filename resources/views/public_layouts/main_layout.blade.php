<!DOCTYPE html>

<html lang="hi">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--=== Link Of CSS Files ===-->
<link rel="stylesheet" href="{{ asset('user_assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/fonts/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/odometer.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}">

<!--=== Title & Favicon ===-->
<title>जिला प्रशासन बस्तर</title>
<link rel="icon" type="image/png" href="{{ asset('user_assets/images/favicon.png') }}">

@stack('css')
</head>

<body>

<!-- Preloader -->
{{-- 
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
--}}
<!-- End Preloader -->

@include('public_layouts.header')

@yield('main_content')

@include('public_layouts.footer')

<!--=== Go Top ===-->
<div class="go-top">
    <i class='bx bxs-up-arrow-alt'></i>
    <i class='bx bxs-up-arrow-alt'></i>
</div>
<!--=== End Go Top ===-->

<!--=== Essential JS ===-->
<script src="{{ asset('user_assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('user_assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('user_assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('user_assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('user_assets/js/appear.min.js') }}"></script>
<script src="{{ asset('user_assets/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('user_assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('user_assets/js/carousel-thumbs.js') }}"></script>
<script src="{{ asset('user_assets/js/wow.min.js') }}"></script>
<script src="{{ asset('user_assets/js/ajaxchimp.min.js') }}"></script>
<script src="{{ asset('user_assets/js/form-validator.min.js') }}"></script>
<script src="{{ asset('user_assets/js/contact-form-script.js') }}"></script>
<script src="{{ asset('user_assets/js/custom.js') }}"></script>
@stack('js')
</body>

</html>
