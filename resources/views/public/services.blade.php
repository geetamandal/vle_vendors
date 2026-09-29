@extends('public_layouts.main_layout')
@section('title', $title)
@push('css')
    <style>

    </style>
@endpush
@section('main-content')
    <div class="th-hero-wrapper hero-3" id="hero" data-bg-src="{{ asset('user_assets/img/hero/hero_bg_3_1.jpg') }}">

        <div class="container">
            <div class="row gx-40 align-items-center">

                <div class="col-xl-7">
                    <div class="hero-style3">

                        <span class="sub-title wow animate__fadeInUp" data-wow-delay="0.2s">
                            बस्तर के स्थानीय व्यवसायों का डिजिटल मंच
                        </span>

                        <h2 class="hero-title">

                            <span class="title1 wow animate__fadeInUp" data-wow-delay="0.4s">
                                बस्तर से जुड़ें,
                            </span>

                            <span class="title2 wow animate__fadeInUp" data-wow-delay="0.6s">
                                स्थानीय व्यवसाय
                            </span>

                            <span class="title3 text-theme2 wow animate__fadeInUp" data-wow-delay="0.8s">
                                एक ही मंच पर
                            </span>

                        </h2>

                        <p class="hero-text wow animate__fadeInUp" data-wow-delay="0.8s">
                            बस्तर के स्थानीय दुकानदारों, विक्रेताओं और उनके उत्पादों
                            को एक डिजिटल मंच पर खोजें। अपने आसपास के व्यवसायों से
                            जुड़ें और स्थानीय उत्पादों को आसानी से जानें।
                        </p>

                        <div class="btn-wrap wow animate__fadeInUp" data-wow-delay="0.9s">

                            <a href="{{ url('shops') }}" class="th-btn">
                                स्थानीय दुकानें देखें

                                <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <path
                                        d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                        stroke="currentColor" stroke-width="1.5">
                                    </path>

                                </svg>
                            </a>

                        </div>

                    </div>
                </div>

                <div class="col-xl-5 text-xl-start text-center align-self-center">

                    <div class="hero-thumb3-1 wow animate__fadeInRight">

                        <div class="hero-info-card-wrap wow animate__fadeInUp" data-wow-delay="0.4s">

                            <div class="hero-thumb-info jump">
                                <img src="{{ asset('user_assets/img/hero/hero_thumb-info3_1.png') }}" alt="डिजिटल बस्तर">
                            </div>

                        </div>

                        <div class="hero-info-chart jump-reverse">
                            <img src="{{ asset('user_assets/img/hero/hero_thumb3_2.png') }}" alt="स्थानीय व्यवसाय">
                        </div>

                        <div class="thumb">
                            <img src="{{ asset('user_assets/img/hero/hero_thumb3_1.png') }}" alt="डिजिटल बस्तर">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="space bg-smoke5 overflow-hidden" id="about-sec">
        <div class="about-bg-shape6-1 shape-mockup" data-speed="0.9" data-top="10%" data-right="4%">
            <img src="{{ asset('user_assets/img/shape/about_shape3_2.png') }}" alt="Digital Bastar">
        </div>

        <div class="container">
            <div class="row gy-50 gx-80 align-items-center">

                <div class="col-xl-6 col-lg-10">
                    <div class="img-box6">

                        <div class="about-img-shape6-1 th_fade_anim">
                            <img data-speed="0.9" src="{{ asset('user_assets/img/shape/about_shape6_1.png') }}"
                                alt="Digital Bastar">
                        </div>

                        <div class="img1 th_fade_anim">
                            <div class="thumb">
                                <img class="img-cover" src="{{ asset('user_assets/img/normal/about_6_1.png') }}"
                                    alt="Digital Bastar">
                            </div>
                        </div>

                        <div class="about-info-wrap6-1 jump th_fade_anim">

                            <div class="box-icon">
                                <img src="{{ asset('user_assets/img/icon/about-card-icon6-1.svg') }}"
                                    alt="Local Businesses">
                            </div>

                            <div class="box-details">
                                <h2 class="box-number">
                                    <span class="counter-number">100</span>+
                                </h2>
                                <p class="box-text">स्थानीय व्यवसाय</p>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-wrap6">

                        <div class="title-area mb-35">

                            <span class="sub-title text-theme th_fade_anim">
                                <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="icon">
                                डिजिटल बस्तर के बारे में
                            </span>

                            <h2 class="sec-title th_fade_anim">
                                <span class="th-text-perspective">
                                    बस्तर के स्थानीय व्यवसायों को डिजिटल पहचान
                                </span>
                            </h2>

                            <p class="th_fade_anim">
                                डिजिटल बस्तर एक ऐसा डिजिटल मंच है, जो बस्तर के स्थानीय
                                दुकानदारों, विक्रेताओं और व्यवसायों को ग्राहकों से जोड़ने
                                का कार्य करता है। यहां ग्राहक अपने आसपास की स्थानीय
                                दुकानों, उत्पादों और सेवाओं को आसानी से खोज सकते हैं।
                            </p>

                        </div>

                        <div class="row gy-4 flex-row-reverse">

                            <div class="col-md-5">
                                <div class="img-box6-2 th--hover-item th_fade_anim">

                                    <div class="thumb th--hover-img"
                                        data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}"
                                        data-intensity="0.2" data-speedin="1" data-speedout="1">

                                        <img class="img-cover" src="{{ asset('user_assets/img/normal/about_6_2.jpg') }}"
                                            alt="स्थानीय उत्पाद">
                                    </div>

                                    <div class="about-tag th_fade_anim">

                                        <div class="about-experience-tag">
                                            <span class="circle-title-anime">
                                                LOCAL BUSINESS ** LOCAL BUSINESS **
                                            </span>
                                        </div>

                                        <div class="year-counter">
                                            <div class="box-title">
                                                <span class="counter-number">24</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                            <div class="col-md-7">

                                <div class="checklist style4 th_fade_anim">
                                    <ul>
                                        <li>स्थानीय दुकानों और व्यवसायों की खोज करें</li>
                                        <li>बस्तर के स्थानीय उत्पादों को जानें</li>
                                        <li>व्यवसाय और उत्पाद की डिजिटल जानकारी पाएं</li>
                                        <li>स्थानीय विक्रेताओं से सीधे जुड़ें</li>
                                        <li>स्थानीय व्यवसायों को डिजिटल पहचान दें</li>
                                    </ul>
                                </div>

                                <div class="btn-wrap mt-40 th_fade_anim">
                                    <a href="{{ url('about') }}" class="th-btn style11">
                                        हमारे बारे में जानें

                                        <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">

                                            <path
                                                d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.1541 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                                stroke="currentColor" stroke-width="1.5">
                                            </path>

                                        </svg>
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
