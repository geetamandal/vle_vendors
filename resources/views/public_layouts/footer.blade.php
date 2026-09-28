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
                            <p>हमसे संपर्क करें</p>
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
                            <p>ईमेल करें</p>
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
                            <p>स्थान</p>
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

                        <p>
                            जिला प्रशासन बस्तर का आधिकारिक पोर्टल। नागरिकों को
                            विभिन्न सरकारी सेवाओं, योजनाओं एवं आवश्यक जानकारी
                            एक ही स्थान पर उपलब्ध कराने का प्रयास।
                        </p>

                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-5">
                        <h3>महत्वपूर्ण लिंक</h3>

                        <ul class="footer-list">
                            <li>
                                <a href="{{ url('/') }}">होम</a>
                            </li>
                            <li>
                                <a href="{{ url('about') }}">हमारे बारे में</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}">संपर्क करें</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-3">
                        <h3>त्वरित लिंक</h3>

                        <ul class="footer-list">
                            <li>
                                <a href="{{ url('services') }}">सेवाएँ</a>
                            </li>
                            <li>
                                <a href="{{ url('products') }}">उत्पाद</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Office Information -->
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget ps-2">
                        <h3>कार्यालय जानकारी</h3>

                        <p>
                            जिला प्रशासन बस्तर<br>
                            जिला बस्तर, छत्तीसगढ़
                        </p>

                        <p>
                            कार्यालय समय: प्रातः 10:00 बजे से शाम 5:30 बजे तक
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
