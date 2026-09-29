<header class="th-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul class="header-left-wrap">
                            <li><i class="fa-regular fa-phone"></i><a href="tel:256214203215">9090909090</a>
                            </li>
                            <li><i class="fa-regular fa-envelope"></i><a href="mailto:info@escul.com">info@escul.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links ps-0">
                        <ul>
                            <li>
                                <i class="fas fa-store"></i>
                                <a href="{{ url('registration') }}">विक्रेता बनें</a>
                            </li>
                            <li>
                                <div class="th-social language-social">
                                    <div class="dropdown-link">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="far fa-globe"></i> भाषा
                                        </a>

                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <li>
                                                <a href="#">हिंदी</a>
                                                <a href="#">English</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="container">
            <div class="menu-area">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a href="{{ url('/') }}">
                                <img src="user_assets/img/bastar.png" alt="डिजिटल बस्तर"
                                    style="width: 90px; height: 90px; object-fit: contain;">
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
                        </nav><button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                class="fal fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">

                            <button type="button" class="icon-btn style-border searchBoxToggler d-lg-block d-none">
                                <i class="fal fa-search"></i>
                            </button>

                            <a href="{{ url('/login') }}" class="th-btn">
                                <i class="far fa-user me-2"></i>
                                यूज़र लॉगिन
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
