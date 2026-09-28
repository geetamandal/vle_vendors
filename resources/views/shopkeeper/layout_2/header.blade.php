<!--===== HEADER START =======-->
<header class="homepage7-body">
    <div class="vl-header-area vl-transparent-header" id="vl-header-sticky">

        <div class="vl-header-content-area white-bg">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-xl-2 col-md-6 col-6">
                        <div class="vl-logo">
                            <a href="index.html">
                                <img src="{{ asset('vendor_assets/img/logo/logo-hm9.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="vl-main-menu text-center home5_padding">
                            <nav class="vl-mobile-menu-active">
                                <ul>
                                    <li>
                                        <a href="{{ url('/2/index-2') }}"
                                            class="{{ request()->is('2/index-2') ? 'active' : '' }}">
                                            होम
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('2/product-2') }}"
                                            class="{{ request()->is('2/product-2') ? 'active' : '' }}">
                                            उत्पाद
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('2/service-2') }}"
                                            class="{{ request()->is('2/service-2') ? 'active' : '' }}">
                                            सेवाएँ
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ url('2/contact-2') }}"
                                            class="{{ request()->is('2/contact-2') ? 'active' : '' }}">
                                            संपर्क करें
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-6">
                        <div class="vl-menu-sidebar-area">

                            <div class="sidebar-cart sidebar-cart9">
                                <img src="{{ asset('vendor_assets/img/icon/cart-icon-hm8.svg') }}" alt="">
                                <span>
                                    <a class="clr-white" href="{{ url('2/cart-2') }}">3</a>
                                </span>
                            </div>

                            <div class="menu-line">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1" height="24" viewBox="0 0 1 15"
                                    fill="none">
                                    <path opacity="0.3" d="M0.5 0.5L0.499999 14.5" stroke="#141E3E"
                                        stroke-linecap="round" />
                                </svg>
                            </div>

                            <div class="vl-header-btn d-none d-xl-block text-end">
                                <a class="btnhm9" href="{{ url('2/user-login-2') }}">
                                    लॉग इन
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>

                            <div class="vl-header-action-item d-block d-xl-none">
                                <button type="button" class="vl-offcanvas-toggle">
                                    <i class="fa-solid fa-bars-staggered"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>
<!--===== HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="homepage1-body">
    <div class="vl-offcanvas">

        <div class="vl-offcanvas-wrapper">

            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="index.html">
                        <img src="{{ asset('vendor_assets/img/footer/footer1-logo.png') }}" alt="">
                    </a>
                </div>

                <div class="vl-offcanvas-close">
                    <button class="vl-offcanvas-close-toggle">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>

            <div class="vl-offcanvas-menu d-xl-none mb-40">
                <nav></nav>
            </div>

            <div class="space20"></div>

            <div class="vl-offcanvas-info">
                <h3 class="vl-offcanvas-sm-title">संपर्क करें</h3>

                <div class="space20"></div>

                <span>
                    <a href="#">
                        <i class="fa-regular fa-envelope"></i>
                        cattlefarm@orgaanic.com
                    </a>
                </span>

                <span>
                    <a href="tel:8801712345678">
                        <i class="fa-solid fa-phone"></i>
                        +91 9090909090
                    </a>
                </span>

                <span>
                    <a href="#">
                        <i class="fa-solid fa-location-dot"></i>
                        बस्तर ,छत्तीसगढ़
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="vl-offcanvas-overlay"></div>
</div>
<!--===== MOBILE HEADER ENDS =======-->
