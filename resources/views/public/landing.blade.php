@extends('public_layouts.main_layout')
@section('title', $title)
@push('css')
    <style>
        .testimonial-card {
            height: 100%;
            min-height: 320px;
            display: flex;
            flex-direction: column;
        }

        .testimonial-card .testimonial-content {
            flex: 1;
        }

        .testimonial-slider .swiper-slide {
            height: auto;
        }

        .testimonial-slider .swiper-slide>* {
            height: 100%;
        }
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
                                {{-- <img src="{{ asset('user_assets/img/hero/hero_thumb-info3_1.png') }}" alt="डिजिटल बस्तर"> --}}
                            </div>

                        </div>

                        <div class="hero-info-chart jump-reverse">
                            {{-- <img src="{{ asset('user_assets/img/hero/hero_thumb3_2.png') }}" alt="स्थानीय व्यवसाय"> --}}
                        </div>

                        <div class="thumb">
                            <img src="{{ asset('user_assets/img/hero/hero.png') }}" alt="डिजिटल बस्तर">
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
                                <img class="img-cover" src="{{ asset('user_assets/img/normal/about_1.png') }}"
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
                                <img src="{{ asset('user_assets/img/icon/favicon-bastar.png') }}" alt="icon"
                                    style="height: :32px;width:32px">
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
    <section class="overflow-hidden space-bottom overflow-hidden" id="course-sec">
        
        <div class="container">

            <div class="title-area text-center">
                <span class="sub-title text-theme th_fade_anim">
                    <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="icon">
                    स्थानीय दुकानें
                </span>

                <h2 class="sec-title th_fade_anim">
                    <span class="th-text-perspective">
                        बस्तर के स्थानीय व्यवसाय खोजें
                    </span>
                </h2>
            </div>

            <div class="slider-area">

                <div class="swiper th-slider course-slider2 has-shadow" id="CourseSlider2"
                    data-slider-options='{"autoHeight":"true","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>

                    <div class="swiper-wrapper">
                        <!-- Shop 1 -->
                        <div class="swiper-slide th_fade_anim" data-delay=".3">
                            <div class="course-card">

                                <div class="box-img">
                                    <a href="#">
                                        <img src="{{ asset('user_assets/img/product/service-10.png') }}"
                                            alt="बस्तर डिजिटल स्टोर">
                                    </a>
                                    <span class="box-price">जगदलपुर</span>
                                </div>

                                <h3 class="box-title">
                                    <a href="#">बस्तर डिजिटल स्टोर</a>
                                </h3>

                                <div class="box-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width:100%">
                                            Rated <strong class="rating">5.00</strong> out of 5
                                        </span>
                                    </div>
                                    <span class="ms-2">4.9 (120)</span>
                                </div>

                                <div class="box-content">

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-store"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">श्रेणी:</span>
                                            <h4 class="course-info-text">
                                                किराना एवं दैनिक जरूरतें
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-location-dot"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">स्थान:</span>
                                            <h4 class="course-info-text">
                                                जगदलपुर, बस्तर
                                            </h4>
                                        </div>
                                    </div>

                                </div>

                                <div class="btn-wrap">

                                    <div class="meta-box">                                        
                                        <div class="media-body">
                                            <h5 class="box-name">
                                                <a href="#">स्थानीय विक्रेता</a>
                                            </h5>
                                        </div>
                                    </div>

                                    <a href="#" class="th-btn btn-sm style-border2">
                                        दुकान देखें
                                        <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                                stroke="currentColor" stroke-width="1.5">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>


                        <!-- Shop 2 -->
                        <div class="swiper-slide th_fade_anim" data-delay=".5">
                            <div class="course-card">

                                <div class="box-img">
                                    <a href="#">
                                        <img src="{{ asset('user_assets/img/product/service-9.png') }}"
                                            alt="मां दंतेश्वरी हैंडीक्राफ्ट">
                                    </a>
                                    <span class="box-price">जगदलपुर</span>
                                </div>

                                <h3 class="box-title">
                                    <a href="#">मां दंतेश्वरी हैंडीक्राफ्ट</a>
                                </h3>

                                <div class="box-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width:100%">
                                            Rated <strong class="rating">5.00</strong> out of 5
                                        </span>
                                    </div>
                                    <span class="ms-2">4.8 (96)</span>
                                </div>

                                <div class="box-content">

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-store"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">श्रेणी:</span>
                                            <h4 class="course-info-text">
                                                हस्तशिल्प एवं कला
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-location-dot"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">स्थान:</span>
                                            <h4 class="course-info-text">
                                                जगदलपुर, बस्तर
                                            </h4>
                                        </div>
                                    </div>

                                </div>

                                <div class="btn-wrap">

                                    <div class="meta-box">                                        
                                        <div class="media-body">
                                            <h5 class="box-name">
                                                <a href="#">स्थानीय विक्रेता</a>
                                            </h5>
                                        </div>
                                    </div>

                                    <a href="#" class="th-btn btn-sm style-border2">
                                        दुकान देखें
                                        <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                                stroke="currentColor" stroke-width="1.5">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>


                        <!-- Shop 3 -->
                        <div class="swiper-slide th_fade_anim" data-delay=".7">
                            <div class="course-card">

                                <div class="box-img">
                                    <a href="#">
                                        <img src="{{ asset('user_assets/img/product/service-8.png') }}"
                                            alt="बस्तर फैशन हाउस">
                                    </a>
                                    <span class="box-price">बस्तर</span>
                                </div>

                                <h3 class="box-title">
                                    <a href="#">बस्तर फैशन हाउस</a>
                                </h3>

                                <div class="box-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width:100%">
                                            Rated <strong class="rating">5.00</strong> out of 5
                                        </span>
                                    </div>
                                    <span class="ms-2">4.7 (84)</span>
                                </div>

                                <div class="box-content">

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-store"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">श्रेणी:</span>
                                            <h4 class="course-info-text">
                                                कपड़े एवं फैशन
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-location-dot"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">स्थान:</span>
                                            <h4 class="course-info-text">
                                                बस्तर
                                            </h4>
                                        </div>
                                    </div>

                                </div>

                                <div class="btn-wrap">

                                    <div class="meta-box">                                        
                                        <div class="media-body">
                                            <h5 class="box-name">
                                                <a href="#">स्थानीय विक्रेता</a>
                                            </h5>
                                        </div>
                                    </div>

                                    <a href="#" class="th-btn btn-sm style-border2">
                                        दुकान देखें
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


                        <!-- Shop 4 -->
                        <div class="swiper-slide th_fade_anim" data-delay=".3">
                            <div class="course-card">

                                <div class="box-img">
                                    <a href="#">
                                        <img src="{{ asset('user_assets/img/product/service-6.png') }}"
                                            alt="बस्तर ऑर्गेनिक स्टोर">
                                    </a>
                                    <span class="box-price">दरभा</span>
                                </div>

                                <h3 class="box-title">
                                    <a href="#">बस्तर ऑर्गेनिक स्टोर</a>
                                </h3>

                                <div class="box-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span style="width:100%">
                                            Rated <strong class="rating">4.90</strong> out of 5
                                        </span>
                                    </div>
                                    <span class="ms-2">4.9 (75)</span>
                                </div>

                                <div class="box-content">

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-store"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">श्रेणी:</span>
                                            <h4 class="course-info-text">
                                                जैविक एवं स्थानीय उत्पाद
                                            </h4>
                                        </div>
                                    </div>

                                    <div class="course-info">
                                        <div class="box-icon">
                                            <i class="fal fa-location-dot"></i>
                                        </div>

                                        <div class="course-info-details">
                                            <span class="course-info-title">स्थान:</span>
                                            <h4 class="course-info-text">
                                                दरभा, बस्तर
                                            </h4>
                                        </div>
                                    </div>

                                </div>

                                <div class="btn-wrap">

                                    <div class="meta-box">                                        
                                        <div class="media-body">
                                            <h5 class="box-name">
                                                <a href="#">स्थानीय विक्रेता</a>
                                            </h5>
                                        </div>
                                    </div>

                                    <a href="#" class="th-btn btn-sm style-border2">
                                        दुकान देखें
                                        <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583 9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.1541 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                                stroke="currentColor" stroke-width="1.5">
                                            </path>
                                        </svg>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <button data-slider-prev="#CourseSlider2" class="slider-arrow style6 slider-prev">
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.4672 0C8.4672 0.783225 7.69103 1.95525 6.90638 2.93955C5.89598 4.20682 4.69013 5.3139 3.30645 6.15915C2.26988 6.79208 1.01115 7.39965 1.90735e-06 7.39965M8.4672 14.8176C8.4672 14.0344 7.69103 12.8623 6.90638 11.878C5.89598 10.6108 4.69013 9.5037 3.30645 8.65845C2.26988 8.02552 1.01115 7.41795 1.90735e-06 7.41795M1.90735e-06 7.4088H16.9344"
                            stroke="currentColor" />
                    </svg>
                </button>

                <button data-slider-next="#CourseSlider2" class="slider-arrow style6 slider-next">
                    <svg width="17" height="15" viewBox="0 0 17 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.4672 0C8.4672 0.783225 9.24338 1.95525 10.028 2.93955C11.0384 4.20682 12.2443 5.3139 13.628 6.15915C14.6645 6.79208 15.9233 7.39965 16.9344 7.39965M8.4672 14.8176C8.4672 14.0344 9.24338 12.8623 10.028 11.878C11.0384 10.6108 12.2443 9.5037 13.628 8.65845C14.6645 8.02552 15.9233 7.41795 16.9344 7.41795M16.9344 7.4088H0"
                            stroke="currentColor" />
                    </svg>
                </button>

            </div>

            <div class="btn-wrap mt-60 justify-content-center th_fade_anim">
                <a href="{{ url('shops') }}" class="th-btn">
                    सभी दुकानें देखें
                    <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583 9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                            stroke="currentColor" stroke-width="1.5">
                        </path>
                    </svg>
                </a>
            </div>

        </div>
    </section>

    <section class="overflow-hidden space-bottom overflow-hidden" id="course-sec" style="margin-top: 30px">
        <div class="process-bg-shape4-1 shape-mockup d-xxl-block d-none" data-right="6%" data-top="20%">
            <div class="thumb th-anim-spin">
                <img src="{{ asset('user_assets/img/shape/process_shape1_1.png') }}" alt="img">
            </div>
        </div>        
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-theme th_fade_anim">
                    <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="img">
                    कैसे काम करता है
                </span>

                <h2 class="sec-title th_fade_anim">
                    <span class="th-text-perspective">
                        डिजिटल बस्तर से खरीदारी करना आसान है
                    </span>
                </h2>
            </div>

            <div class="process-card-wrap4">

                <div class="process-card4 th_fade_anim th--hover-item">
                    <div class="process-card-bg"></div>

                    <div class="box-img th--hover-img"
                        data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}" data-intensity="0.2"
                        data-speedin="1" data-speedout="1">
                        <img src="{{ asset('user_assets/img/process/process-card-3-1.png') }}" alt="दुकान खोजें">
                    </div>

                    <div class="box-content">
                        <h3 class="box-title">स्थानीय दुकानें<br>खोजें</h3>
                        <p class="box-text">
                            अपने आसपास की स्थानीय दुकानों, विक्रेताओं और व्यवसायों को आसानी से खोजें।
                        </p>
                    </div>
                </div>

                <div class="process-card4 th_fade_anim th--hover-item">
                    <div class="process-card-bg"></div>

                    <div class="box-img th--hover-img"
                        data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}" data-intensity="0.2"
                        data-speedin="1" data-speedout="1">
                        <img src="{{ asset('user_assets/img/process/process-card-3-2.png') }}" alt="उत्पाद देखें">
                    </div>

                    <div class="box-content">
                        <h3 class="box-title">उत्पाद<br>देखें</h3>
                        <p class="box-text">
                            स्थानीय दुकानों के उत्पादों और कैटलॉग को देखें और अपनी पसंद के उत्पाद चुनें।
                        </p>
                    </div>
                </div>

                <div class="process-card4 th_fade_anim th--hover-item">
                    <div class="process-card-bg"></div>

                    <div class="box-img th--hover-img"
                        data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}" data-intensity="0.2"
                        data-speedin="1" data-speedout="1">
                        <img src="{{ asset('user_assets/img/process/process-card-3-3.png') }}" alt="ऑर्डर करें">
                    </div>

                    <div class="box-content">
                        <h3 class="box-title">पसंद का उत्पाद<br>ऑर्डर करें</h3>
                        <p class="box-text">
                            पसंदीदा उत्पाद चुनें, कार्ट में जोड़ें और आसानी से अपना ऑर्डर करें।
                        </p>
                    </div>
                </div>

                <div class="process-card4 th_fade_anim th--hover-item">
                    <div class="process-card-bg"></div>

                    <div class="box-img th--hover-img"
                        data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}" data-intensity="0.2"
                        data-speedin="1" data-speedout="1">
                        <img src="{{ asset('user_assets/img/process/process-card-3-4.png') }}"
                            alt="स्थानीय व्यवसाय से जुड़ें">
                    </div>

                    <div class="box-content">
                        <h3 class="box-title">स्थानीय व्यवसाय<br>से जुड़ें</h3>
                        <p class="box-text">
                            स्थानीय विक्रेताओं से जुड़ें और बस्तर के स्थानीय उत्पादों को बढ़ावा दें।
                        </p>
                    </div>
                </div>

                <div class="process-bg-line4-1 text-center shape-mockup th_fade_anim" data-top="0" data-left="0"
                    data-right="0" data-bottom="0">
                    <img src="{{ asset('user_assets/img/process/process-line4-1.png') }}" alt="png">
                </div>

            </div>
        </div>
    </section>
    <section class="space-top overflow-hidden">
        <div class="why-bg-shape6-1 shape-mockup th_fade_anim" data-right="4%" data-top="10%">
            <img data-speed=".9" src="{{ asset('user_assets/img/shape/hero_shape2_1.png') }}" alt="img">
        </div>

        <div class="container">
            <div class="row gy-40 align-items-center">

                <div class="col-xl-6">
                    <div class="why-img-box6 th_fade_anim">
                        <div class="why-img-bg-shape6-1" data-speed=".9">
                            <img src="{{ asset('user_assets/img/shape/why_shape6_1.png') }}" alt="">
                        </div>

                        <div class="img1 th--hover-item">
                            <div class="thumb th--hover-img"
                                data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}"
                                data-intensity="0.2" data-speedin="1" data-speedout="1">
                                <img class="img-cover" src="{{ asset('user_assets/img/normal/why.png') }}"
                                    alt="डिजिटल बस्तर">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="why-wrap6">

                        <div class="title-area mb-50">
                            <span class="sub-title text-theme th_fade_anim">
                                <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="img">
                                डिजिटल बस्तर क्यों?
                            </span>

                            <h2 class="sec-title th_fade_anim">
                                <span class="th-text-perspective">
                                    स्थानीय व्यवसायों को एक डिजिटल मंच से जोड़ें
                                </span>
                            </h2>

                            <p class="th_fade_anim">
                                डिजिटल बस्तर बस्तर के स्थानीय दुकानदारों, विक्रेताओं और व्यवसायों
                                को डिजिटल पहचान देने के साथ ग्राहकों को उनके व्यवसायों तक आसानी
                                से पहुंचने का एक सरल और सुविधाजनक माध्यम प्रदान करता है।
                            </p>
                        </div>

                        <div class="why-card-wrap6">
                            <div class="row gy-4">

                                <div class="col-md-6 th_fade_anim">
                                    <div class="why-card6">
                                        <div class="title-wrap">
                                            <div class="box-icon">
                                                <img src="{{ asset('user_assets/img/icon/why-card-icon6-1.svg') }}"
                                                    alt="स्थानीय व्यवसाय">
                                            </div>
                                            <h3 class="box-title">स्थानीय व्यवसाय</h3>
                                        </div>

                                        <p class="box-text">
                                            बस्तर के स्थानीय दुकानों और व्यवसायों को एक ही मंच पर आसानी से खोजें।
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 th_fade_anim">
                                    <div class="why-card6">
                                        <div class="title-wrap">
                                            <div class="box-icon">
                                                <img src="{{ asset('user_assets/img/icon/why-card-icon6-2.svg') }}"
                                                    alt="डिजिटल पहचान">
                                            </div>
                                            <h3 class="box-title">डिजिटल पहचान</h3>
                                        </div>

                                        <p class="box-text">
                                            स्थानीय व्यवसायों को डिजिटल उपस्थिति और ग्राहकों तक बेहतर पहुंच प्रदान करें।
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 th_fade_anim">
                                    <div class="why-card6">
                                        <div class="title-wrap">
                                            <div class="box-icon">
                                                <img src="{{ asset('user_assets/img/icon/why-card-icon6-3.svg') }}"
                                                    alt="आसान खोज">
                                            </div>
                                            <h3 class="box-title">आसान खोज</h3>
                                        </div>

                                        <p class="box-text">
                                            स्थान और व्यवसाय की श्रेणी के अनुसार अपने आसपास की दुकानें आसानी से खोजें।
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 th_fade_anim">
                                    <div class="why-card6">
                                        <div class="title-wrap">
                                            <div class="box-icon">
                                                <img src="{{ asset('user_assets/img/icon/why-card-icon6-4.svg') }}"
                                                    alt="स्थानीय जुड़ाव">
                                            </div>
                                            <h3 class="box-title">स्थानीय जुड़ाव</h3>
                                        </div>

                                        <p class="box-text">
                                            ग्राहकों और स्थानीय व्यवसायों के बीच बेहतर डिजिटल जुड़ाव को बढ़ावा दें।
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="testi-area-2 space overflow-hidden" id="testi-sec">
        <div class="container">

            <div class="title-area text-center">
                <span class="sub-title text-theme th_fade_anim">
                    <img src="{{ asset('user_assets/img/icon/subtitle-icon1-1.svg') }}" alt="img">
                    ग्राहक अनुभव
                </span>

                <h2 class="sec-title th_fade_anim">
                    <span class="th-text-perspective">
                        डिजिटल बस्तर के बारे में लोगों की राय
                    </span>
                </h2>
            </div>

            <div class="testi-slider2 slider-area">
                <div class="swiper th-slider has-shadow" id="testiSlide2"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"autoHeight": "true"}'>

                    <div class="swiper-wrapper">

                        <div class="swiper-slide th_fade_anim">
                            <div class="testi-card2">
                                <div class="box-icon">
                                    <img src="{{ asset('user_assets/img/icon/quote2.svg') }}" alt="icon">
                                </div>

                                <h3 class="box-title">स्थानीय दुकानें आसानी से मिलीं</h3>

                                <p class="box-text">
                                    डिजिटल बस्तर के माध्यम से मुझे अपने आसपास की स्थानीय दुकानों
                                    को खोजने और उनकी जानकारी देखने में आसानी हुई।
                                </p>

                                <div class="testi-review-wrap">
                                    <span class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-title">4.8</span>
                                </div>

                                <div class="testi-card-profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('user_assets/img/testimonial/testi_2_1.png') }}"
                                            alt="ग्राहक">
                                    </div>
                                    <div class="media-left">
                                        <h4 class="testi-card_name">राहुल शर्मा</h4>
                                        <span class="testi-card_desig">जगदलपुर</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide th_fade_anim">
                            <div class="testi-card2">
                                <div class="box-icon">
                                    <img src="{{ asset('user_assets/img/icon/quote2.svg') }}" alt="icon">
                                </div>

                                <h3 class="box-title">व्यवसाय को मिली डिजिटल पहचान</h3>

                                <p class="box-text">
                                    डिजिटल बस्तर ने हमारे स्थानीय व्यवसाय को ऑनलाइन पहचान देने
                                    और नए ग्राहकों तक पहुंच बनाने में मदद की।
                                </p>

                                <div class="testi-review-wrap">
                                    <span class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-title">4.9</span>
                                </div>

                                <div class="testi-card-profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('user_assets/img/testimonial/testi_2_2.png') }}"
                                            alt="व्यवसायी">
                                    </div>
                                    <div class="media-left">
                                        <h4 class="testi-card_name">सुरेश कश्यप</h4>
                                        <span class="testi-card_desig">स्थानीय व्यवसायी</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide th_fade_anim">
                            <div class="testi-card2">
                                <div class="box-icon">
                                    <img src="{{ asset('user_assets/img/icon/quote2.svg') }}" alt="icon">
                                </div>

                                <h3 class="box-title">स्थानीय व्यवसायों से जुड़ना आसान</h3>

                                <p class="box-text">
                                    एक ही मंच से अलग-अलग स्थानीय व्यवसायों की जानकारी मिलना
                                    बहुत सुविधाजनक है। इससे स्थानीय दुकानों को पहचानना आसान हुआ।
                                </p>

                                <div class="testi-review-wrap">
                                    <span class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-title">4.9</span>
                                </div>

                                <div class="testi-card-profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('user_assets/img/testimonial/testi_2_3.png') }}"
                                            alt="ग्राहक">
                                    </div>
                                    <div class="media-left">
                                        <h4 class="testi-card_name">नेहा पटेल</h4>
                                        <span class="testi-card_desig">बस्तर</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide th_fade_anim">
                            <div class="testi-card2">
                                <div class="box-icon">
                                    <img src="{{ asset('user_assets/img/icon/quote2.svg') }}" alt="icon">
                                </div>

                                <h3 class="box-title">व्यवसाय की जानकारी एक जगह</h3>

                                <p class="box-text">
                                    अपने व्यवसाय की जानकारी को डिजिटल रूप से प्रस्तुत करना
                                    और ग्राहकों तक पहुंचाना हमारे लिए उपयोगी अनुभव रहा।
                                </p>

                                <div class="testi-review-wrap">
                                    <span class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-title">4.8</span>
                                </div>

                                <div class="testi-card-profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('user_assets/img/testimonial/testi_2_4.png') }}"
                                            alt="व्यवसायी">
                                    </div>
                                    <div class="media-left">
                                        <h4 class="testi-card_name">अमित देव</h4>
                                        <span class="testi-card_desig">स्थानीय विक्रेता</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide th_fade_anim">
                            <div class="testi-card2">
                                <div class="box-icon">
                                    <img src="{{ asset('user_assets/img/icon/quote2.svg') }}" alt="icon">
                                </div>

                                <h3 class="box-title">स्थानीय बाजार से जुड़ाव</h3>

                                <p class="box-text">
                                    डिजिटल प्लेटफॉर्म के माध्यम से स्थानीय व्यवसायों को जानना
                                    और उनके डिजिटल स्टोर तक पहुंचना काफी आसान है।
                                </p>

                                <div class="testi-review-wrap">
                                    <span class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-title">4.7</span>
                                </div>

                                <div class="testi-card-profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('user_assets/img/testimonial/testi_2_5.png') }}"
                                            alt="ग्राहक">
                                    </div>
                                    <div class="media-left">
                                        <h4 class="testi-card_name">पूजा साहू</h4>
                                        <span class="testi-card_desig">जगदलपुर</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide th_fade_anim">
                            <div class="testi-card2">
                                <div class="box-icon">
                                    <img src="{{ asset('user_assets/img/icon/quote2.svg') }}" alt="icon">
                                </div>

                                <h3 class="box-title">डिजिटल उपस्थिति का लाभ</h3>

                                <p class="box-text">
                                    डिजिटल बस्तर जैसे मंच से स्थानीय व्यवसायों को अपनी पहचान
                                    बनाने और ग्राहकों तक पहुंचने का एक नया माध्यम मिलता है।
                                </p>

                                <div class="testi-review-wrap">
                                    <span class="testi-card_review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-title">4.8</span>
                                </div>

                                <div class="testi-card-profile">
                                    <div class="box-thumb">
                                        <img src="{{ asset('user_assets/img/testimonial/testi_2_6.png') }}"
                                            alt="व्यवसायी">
                                    </div>
                                    <div class="media-left">
                                        <h4 class="testi-card_name">मोहन कश्यप</h4>
                                        <span class="testi-card_desig">स्थानीय व्यवसायी</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <button data-slider-prev="#testiSlide2" class="slider-arrow style3 slider-prev">
                    <i class="far fa-arrow-left"></i>
                </button>

                <button data-slider-next="#testiSlide2" class="slider-arrow style3 slider-next">
                    <i class="far fa-arrow-right"></i>
                </button>
            </div>

        </div>
    </section>

@endsection
