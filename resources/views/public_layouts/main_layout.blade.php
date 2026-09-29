<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="author" content="Digital-Bastar">
    <meta name="description" content="Digital Bastar - Local Business Digital Platform">
    <meta name="keywords" content="Digital Bastar, Local Business, Vendors, VLE, Bastar">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('user_assets/img/favicons/favicon-32x32.png') }}">
    <link rel="manifest" href="{{ asset('user_assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('user_assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('user_assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user_assets/css/style.css') }}">
    <style>
        .header-layout3 .header-logo {
            position: relative;
            height: 70px;
            display: flex;
            align-items: center;
        }

        .header-layout3 .header-logo img {
            width: 130px;
            height: 110px;
            object-fit: contain;
            display: block;
            position: relative;
            z-index: 10;
        }

        .language-social {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 180px;
            height: 40px;
        }

        .language-social .dropdown-link {
            position: relative;
        }

        .language-social .dropdown-toggle {
            display: flex;
            align-items: center;
            gap: 5px;
            color: var(--white-color);
            font-size: 16px;
            font-weight: 300;
            text-decoration: none;
            margin: 0;
            border: 0;
            width: auto;
            height: auto;
            background: transparent;
        }

        .language-social .dropdown-toggle i {
            color: #fff !important;
        }

        .language-social .dropdown-toggle::after {
            margin-left: 2px;
        }

        .language-social .dropdown-menu {
            min-width: 130px;
            padding: 8px 0;
            margin-top: 12px;
        }

        .language-social .dropdown-menu li {
            display: block;
        }

        .language-social .dropdown-menu li a {
            display: block;
            width: auto;
            height: auto;
            margin: 0;
            padding: 8px 15px;
            border: 0;
            border-radius: 0;
            background: transparent;
            color: var(--title-color);
            font-size: 14px;
        }

        .language-social .dropdown-menu li a:hover {
            background: #f5f5f5;
            color: var(--theme-color);
        }
    </style>
    @stack('css')
</head>

<body class="th-magic-cursor theme-style2">
    <div id="magic-cursor" class="cursor-black-bg">
        <div id="ball"></div>
    </div>
    <div class="preloader"><button class="th-btn preloaderCls">CANCEL PRELOADER</button>
        <div class="preloader-inner">
            <div class="bounce mb-4"><img src="user_assets/img/logo-icon.svg" alt="img"></div><span
                class="loader">Digital Bastar
                <span class="loading-text">Digital Bastar</span></span>
        </div>
    </div>

    <!-- header -->

    <!-- mobile view header  -->
    @include('public_layouts.menu')

    <!-- mobile view header  -->

    @include('public_layouts.header_new')
    <!-- end header -->
    <div id="smooth-wrapper">
        <div id="smooth-content">

            @yield('main-content')
            <!-- footer -->
            @include('public_layouts.footer')
            <!-- end copyright -->

        </div>
    </div>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%"
            viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
    <script src="{{ asset('user_assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/app.min.js') }}"></script>
    <script src="{{ asset('user_assets/js/hover-effect.umd.js') }}"></script>
    <script src="{{ asset('user_assets/js/main.js') }}"></script>
    @stack('js')
</body>

</html>
