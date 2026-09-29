<header class="th-header header-layout3">
    <div class="sticky-wrapper">
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">

                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img src="user_assets/img/final.png" alt="डिजिटल बस्तर">
                            </a>
                        </div>
                    </div>

                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">होम</a>
                                </li>
                                <li>
                                    <a href="{{ url('/about') }}">हमारे बारे में</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shops') }}">दुकानें</a>
                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">संपर्क करें</a>
                                </li>
                            </ul>
                        </nav>

                        <button type="button" class="th-menu-toggle d-block d-lg-none">
                            <i class="fal fa-bars"></i>
                        </button>
                    </div>

                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">

                            <button type="button"
                                class="icon-btn style-border searchBoxToggler d-lg-block d-none">
                                <i class="fal fa-search"></i>
                            </button>

                            <a href="{{ url('/contact') }}" class="th-btn">
                                आवेदन करें
                                <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                        stroke="currentColor" stroke-width="1.5" />
                                </svg>
                            </a>
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>