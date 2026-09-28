<!-- Top Header Start -->
<header class="top-header top-header-bg-three">
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
                            <a
                                href="" style="color: #f88240;"><span
                                    class="__cf_email__"
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
                        <img src="{{ asset('logo.png') }}" class="logo-one" alt="Logo" style="width: 60px; height: 60px;">
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
                    <img src="{{ asset('logo.png') }}" class="logo-one" alt="Logo" style="width: 60px; height: 60px;">
                                        
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                                होम
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/about') }}"
                                class="nav-link {{ request()->is('about*') ? 'active' : '' }}">
                                हमारे बारे में
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/product') }}"
                                class="nav-link {{ request()->is('product*') ? 'active' : '' }}">
                                उत्पाद
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/service') }}"
                                class="nav-link {{ request()->is('service*') ? 'active' : '' }}">
                                सेवाएँ
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('/contact') }}"
                                class="nav-link {{ request()->is('contact*') ? 'active' : '' }}">
                                संपर्क करें
                            </a>
                        </li>

                    </ul>

                    
                    <div class="nav-sidebar">
                        <div class="navbar-language dropdown language-option">
                            <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-world'></i>
                                <span class="lang-name"></span>
                            </button>
                            <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                <a class="dropdown-item" href="#">                                    
                                    हिंदी
                                </a>
                                <a class="dropdown-item" href="#">                                    
                                    English
                                </a>                                
                            </div>
                        </div>

                        <div class="nav-btn">
                            <a href="{{ url('/user-login') }}" class="default-btn border-radius-5">Login</a>
                        </div>
                    </div>

                    <div class="mobile-nav-area">
                        <div class="mobile-btn">
                             <a href="{{ url('/user-login') }}" class="default-btn border-radius-5">Login</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
