<footer class="footer-area footer-area-bg-two">
    <div class="container">
        <div class="footer-top-two">
            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-contact-two">
                        <div class="icon">
                            <i class="flaticon-phone-call-1"></i>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="tel:07782222222">07782-222222</a>
                            </h3>
                            <p>{{ __('word.contact') }}</p>
                        </div>
                        <div class="right">
                            <i class="flaticon-phone-call-1"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-contact-two">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="mailto:collector-bastar@cg.gov.in">
                                    collector-bastar@cg.gov.in
                                </a>
                            </h3>
                            <p>{{ __('word.email') }}</p>
                        </div>
                        <div class="right">
                            <i class="flaticon-email"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7">
                    <div class="footer-contact-two">
                        <div class="icon">
                            <i class="flaticon-pin"></i>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="#" target="_blank">
                                    जिला प्रशासन, बस्तर, छत्तीसगढ़
                                </a>
                            </h3>
                            <p>{{ __('word.pata') }}</p>
                        </div>
                        <div class="right">
                            <i class="flaticon-pin"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="footer-middel pt-100 pb-70">
            <div class="row">

                <!-- About -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget">

                        <div class="footer-logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('/logo.png') }}" class="logo-two" style="width: 120px; height: 120px;"
                                    alt="Logo">
                            </a>
                        </div>

                       <p>{{ __('word.footer_d') }}</p>
                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-5">
                        <h3>{{ __('word.imp_link') }}</h3>

                        <ul class="footer-list">
                            <li>
                                <a href="{{ url('/') }}">{{ __('word.home') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}">{{ __('word.about') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}"> {{ __('word.contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-3">
                        <h3>{{ __('word.quick_link') }}</h3>

                        <ul class="footer-list">
                            <li>
                                <a href="{{ url('services') }}">  {{ __('word.service') }}</a>
                            </li>
                            <li>
                                <a href="{{ url('products') }}">{{ __('word.product') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Office Information -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget ps-2">
                        <h3>{{ __('word.office_info') }}</h3>

                        <p>
                           {{ __('word.f_p') }}<br>
                           {{ __('word.f_p1') }}
                        </p>

                        <p>
                            {{ __('word.f_p2') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                    Copyright @ {{ date('Y') }}.
                    Designed & Developed By District Administration Bastar
                </p>
            </div>
        </div>
    </div>

</footer>
