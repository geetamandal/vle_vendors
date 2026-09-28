<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VLE - Bastar</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-05-09-26.css') }}">
    <style>

    </style>
    @stack('css')
</head>

<body class="page-index">

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div> --}}

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay"></div>

    <!-- Sidebar -->
    @include('layouts.sidebar_main')

    <!-- Main Content -->
    <div class="main-content">

        <!-- Header -->
        @include('layouts.header')

        <!-- Page Content -->
        <div class="page-content">

            @yield('main-content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
    </div>

    <!-- Back to Top -->
    <button class="back-to-top" id="backToTop">
        <i data-feather="arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    
    @stack('js')

</body>

</html>
