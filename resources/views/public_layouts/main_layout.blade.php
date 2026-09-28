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
<link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

<style>
.header-wishlist,
.header-cart {
    position: relative;
    display: flex;
    align-items: center;
    margin-right: 12px;
}

.wishlist-link,
.cart-link {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    color: #222;
    font-size: 24px;
    text-decoration: none;
}

.wishlist-link:hover,
.cart-link:hover {
    color: var(--primaryColor);
}

.wishlist-count,
.cart-count {
    position: absolute;
    top: -3px;
    right: -4px;
    min-width: 18px;
    height: 18px;
    padding: 0 4px;
    border-radius: 50%;
    background: #e63946;
    color: #fff;
    font-size: 11px;
    font-weight: 600;
    line-height: 18px;
    text-align: center;
}
.mobile-only-menu-item {
    display: none !important;
}

.mobile-menu-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 18px;
    height: 18px;
    margin-left: 5px;
    padding: 0 4px;
    border-radius: 50%;
    background: #e63946;
    color: #fff;
    font-size: 10px;
    line-height: 18px;
}

/* Mobile Language Dropdown */
.mobile-language-dropdown {
    position: relative;
}

.mobile-language-btn {
    width: 100%;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 0;
    border: 0;
    background: transparent;
    color: #222;
    font-size: 15px;
    text-align: left;
}

.mobile-language-btn i:first-child {
    width: 25px;
    font-size: 20px;
}

.mobile-language-btn i:last-child {
    margin-left: auto;
    font-size: 18px;
}

.mobile-language-menu {
    display: none;
    padding-left: 33px;
}

.mobile-language-menu a {
    display: block;
    padding: 7px 0;
    color: #222;
    text-decoration: none;
    font-size: 14px;
}

.mobile-language-menu a:hover {
    color: var(--primaryColor);
}
.mobile-language-menu {
    display: none;
    padding-left: 33px;
}

.mobile-language-dropdown.open .mobile-language-menu {
    display: block;
}
@media only screen and (max-width: 991px) {

    .navbar-nav .mobile-only-menu-item {
        display: block !important;
    }

    .navbar-nav .mobile-only-menu-item .nav-link {
        display: flex !important;
        align-items: center;
        gap: 8px;
    }

    .mobile-only-menu-item .nav-link i {
        width: 25px;
        font-size: 20px;
    }

    .desktop-only-header-item,
    .nav-sidebar {
        display: none !important;
    }

    .mobile-language-item {
        display: block !important;
    }
}
.navbar-nav .nav-link,
.mobile-language-btn,
.mobile-language-menu a {
    font-weight: 600 !important;
}
@media only screen and (min-width: 992px) {

    .navbar-nav .mobile-only-menu-item,
    .mobile-language-item {
        display: none !important;
    }

    .desktop-only-header-item {
        display: flex !important;
    }
}
</style>
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
<script>
$(document).on('click', '.mobile-language-btn', function (e) {
    e.preventDefault();
    e.stopPropagation();

    $('.mobile-language-dropdown').not($(this).closest('.mobile-language-dropdown')).removeClass('open');

    $(this).closest('.mobile-language-dropdown').toggleClass('open');
});

/* Outside click par dropdown close */
$(document).on('click', function () {
    $('.mobile-language-dropdown').removeClass('open');
});
</script>
@stack('js')
</body>

</html>
