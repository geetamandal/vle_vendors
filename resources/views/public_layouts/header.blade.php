<!-- Top Header Start -->
<header class="top-header top-header-bg-three  {{ app()->getLocale() == 'en' ? 'english-locale' : 'hindi-locale' }}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-sm-7">
                <div class="header-left">
                    <ul>
                        <li>
                            <i class='flaticon-phone-call'></i>
                            <a href="tel:8256987456" style="color: #f88240;">9087654321</a>
                        </li>
                        <li>
                            <i class='flaticon-email'></i>
                            <a href="" style="color: #f88240;"><span class="__cf_email__"
                                    data-cfemail="0a626f6666654a7c6965646424696567">[email&#160;protected]</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Header End -->

<!-- Start Navbar Area -->
<div class="navbar-area navbar-two">
    <div class="mobile-responsive-nav">
        <div class="container-fluid">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('logo.png') }}" class="logo-one" alt="Logo"
                            style="width: 60px; height: 60px;">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('logo.png') }}" class="logo-one" alt="Logo"
                        style="width: 60px; height: 60px;">

                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">

                    @php
                           $lang = session('locale', app()->getLocale());
                    @endphp

                    <ul class="navbar-nav m-auto">

                        <!-- Home -->
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                                {{ __('word.home') }}
                            </a>
                        </li>

                        <!-- About -->
                        <li class="nav-item">
                            <a href="{{ url('/about') }}"
                                class="nav-link {{ request()->is('about*') ? 'active' : '' }}">
                                {{ __('word.about') }}
                            </a>
                        </li>

                        <!-- Product -->
                        <li class="nav-item">
                            <a href="{{ url('/product') }}"
                                class="nav-link {{ request()->is('product*') ? 'active' : '' }}">
                                {{ __('word.product') }}
                            </a>
                        </li>

                        <!-- Service -->
                        <li class="nav-item">
                            <a href="{{ url('/service') }}"
                                class="nav-link {{ request()->is('service*') ? 'active' : '' }}">
                                {{ __('word.service') }}
                            </a>
                        </li>

                        <!-- Contact -->
                        <li class="nav-item">
                            <a href="{{ url('/contact') }}"
                                class="nav-link {{ request()->is('contact*') ? 'active' : '' }}">
                                {{ __('word.contact') }}
                            </a>
                        </li>
                        <!-- Language - Mobile Only -->
                        <li class="nav-item mobile-only-menu-item mobile-language-item">
                            <div class="mobile-language-dropdown">

                                <button type="button" class="mobile-language-btn">
                                    <i class='bx bx-world'></i>
                                    <span>{{ app()->getLocale() == 'hi' ? 'हिंदी' : 'English' }}</span>
                                    <i class='bx bx-chevron-down'></i>
                                </button>

                                <div class="mobile-language-menu">
                                    <a href="{{ route('lang.switch', ['locale' => 'hi']) }}">
                                        हिंदी
                                    </a>

                                    <a href="{{ route('lang.switch', ['locale' => 'en']) }}">
                                        English
                                    </a>
                                </div>

                            </div>
                        </li>
                        <!-- Login - Mobile Only -->
                        <li class="nav-item mobile-only-menu-item">
                            <a href="{{ url('/user-login') }}" class="nav-link">
                                <i class='bx bx-log-in'></i>
                                {{ __('word.login') }}
                            </a>
                        </li>

                        <!-- Wishlist - Mobile Only -->
                        <li class="nav-item mobile-only-menu-item">
                            <a href="{{ url('/wishlist') }}" class="nav-link">
                                <i class='bx bx-heart'></i>
                                <span>  {{ __('word.wishlist') }}</span>
                                <span class="mobile-menu-count">0</span>
                            </a>
                        </li>

                        <!-- Cart - Mobile Only -->
                        <li class="nav-item mobile-only-menu-item">
                            <a href="{{ url('/cart') }}" class="nav-link">
                                <i class='bx bx-cart'></i>
                                <span>  {{ __('word.cart') }}</span>
                                <span class="mobile-menu-count">0</span>
                            </a>
                        </li>

                    </ul>

                    <!-- Desktop Wishlist -->
                    <div class="header-wishlist desktop-only-header-item">
                        <a href="{{ url('/wishlist') }}" class="wishlist-link">
                            <i class='bx bx-heart'></i>
                            <span class="wishlist-count" id="wishlistCount">0</span>
                        </a>
                    </div>

                    <!-- Desktop Cart -->
                    <div class="header-cart desktop-only-header-item">
                        <a href="{{ url('/cart') }}" class="cart-link">
                            <i class='bx bx-cart'></i>
                            <span class="cart-count" id="cartCount">0</span>
                        </a>
                    </div>

                    <!-- Desktop Sidebar -->
                    <div class="nav-sidebar">

                        <!-- Language -->
                        <div class="navbar-language dropdown language-option">

                            <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">

                                <i class='bx bx-world'></i>

                                <span class="lang-name">
                                    {{ app()->getLocale() == 'hi' ? 'हिंदी' : 'English' }}
                                </span>

                            </button>

                            <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">

                                <a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'hi']) }}">
                                    हिंदी
                                </a>

                                <a class="dropdown-item" href="{{ route('lang.switch', ['locale' => 'en']) }}">
                                    English
                                </a>

                            </div>

                        </div>

                        <!-- Desktop Login -->
                        <div class="nav-btn">
                            <a href="{{ url('/user-login') }}" class="default-btn border-radius-5">
                                {{ __('word.login') }}
                            </a>
                        </div>

                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
