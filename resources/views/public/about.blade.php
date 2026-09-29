@extends('public_layouts.main_layout')
@push('css')
    <style>
        .list-style-one {
            padding-left: 20px;
        }

        .list-style-one li {
            margin-bottom: 10px;
            list-style: disc;
        }
    </style>
@endpush
@section('main-content')
    <!-- Inner Banner -->

    <!-- breadcrumb-section -->
    <div class="breadcrumb-wrap bg-mild position-relative" data-bg-src="{{ asset('user_assets/img/bg/breadcumb-bg.png ') }}"
        style="padding: 120px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="breadcumb-content">
                        <br><br><br><br>
                        <h1 class="breadcumb-title">हमारे बारे में</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="index.html">मुख्य पृष्ठ</a></li>
                            <li>हमारे बारे में </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="space overflow-hidden">
        <div class="container">
            <div class="row gy-40 align-items-center">

                <!-- Left Image -->
                <div class="col-xl-6">
                    <div class="why-img-box3">

                        <div class="img1 th--hover-item th_fade_anim">
                            <div class="thumb th--hover-img"
                                data-displacement="{{ asset('user_assets/img/imghover/fluid.jpg') }}" data-intensity="0.2"
                                data-speedin="1" data-speedout="1">

                                <img class="img-cover" src="{{ asset('user_assets/img/normal/about-9.png') }}"
                                    alt="डिजिटल बस्तर - स्थानीय व्यवसाय">
                            </div>
                        </div>

                        <!-- Digital Bastar Badge -->
                        <div class="about-tag">
                            <div class="about-experience-tag">
                                <span class="circle-title-anime">
                                    Digital Bastar ** Digital Bastar **
                                </span>
                            </div>

                            <div class="year-counter">
                                <div class="box-title">
                                    <span class="counter-number" style="font-size: 27px;">100</span>
                                    <span style="font-size: 27px;">%</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- Right Content -->
                <div class="col-xl-6">
                    <div class="why-wrap3">

                        <div class="title-area mb-50">

                            <span class="sub-title text-theme th_fade_anim">
                                <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="icon">
                                डिजिटल बस्तर
                            </span>

                            <h2 class="sec-title th_fade_anim">
                                <span class="th-text-perspective">
                                    स्थानीय व्यवसायों को
                                    डिजिटल पहचान
                                </span>
                            </h2>

                            <p class="th_fade_anim">
                                हमारा उद्देश्य स्थानीय दुकानदारों, विक्रेताओं एवं सेवा प्रदाताओं
                                को डिजिटल प्लेटफॉर्म से जोड़कर उनके व्यवसाय को नई पहचान और बेहतर
                                पहुंच प्रदान करना है। इस पोर्टल के माध्यम से स्थानीय व्यवसाय अपने
                                उत्पादों एवं सेवाओं को डिजिटल रूप से प्रदर्शित कर सकते हैं और अधिक
                                ग्राहकों तक आसानी से पहुंच सकते हैं।
                            </p>

                        </div>


                        <!-- Features -->
                        <div class="checklist th_fade_anim">
                            <ul>

                                <li>
                                    बस्तर के स्थानीय दुकानदारों को जानें
                                </li>

                                <li>
                                    व्यवसाय एवं उत्पादों के लिए डिजिटल कैटलॉग
                                    उपलब्ध कराना
                                </li>

                                <li>
                                    स्थानीय दुकानों और उत्पादों को आसानी से खोजने की सुविधा
                                </li>

                                <li>
                                    उत्पाद एवं कैटलॉग को WhatsApp के माध्यम से साझा करने की सुविधा
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="space-bottom overflow-hidden">
        <div class="container">
            <div class="counter-wrap1 bg-theme th_fade_anim"
                data-bg-src="{{ asset('user_assets/img/bg/counter-bg-shape1-1.png') }}">

                <!-- Local Businesses -->
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-white">
                            <span class="counter-number">100</span>+
                        </h2>
                        <p class="box-text">पंजीकृत व्यवसाय</p>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Products -->
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-white">
                            <span class="counter-number">500</span>+
                        </h2>
                        <p class="box-text">स्थानीय उत्पाद</p>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Services -->
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-white">
                            <span class="counter-number">50</span>+
                        </h2>
                        <p class="box-text">स्थानीय सेवाएं</p>
                    </div>
                </div>

                <div class="divider"></div>

                <!-- Customers -->
                <div class="counter-card">
                    <div class="media-body">
                        <h2 class="box-number text-white">
                            <span class="counter-number">1000</span>+
                        </h2>
                        <p class="box-text">डिजिटल ग्राहक</p>
                    </div>
                </div>

                <div class="divider"></div>

            </div>
        </div>
    </div>

    <section class="space overflow-hidden">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-xl-5">
                    <div class="title-area mb-50">
                        <span class="sub-title text-theme th_fade_anim">
                            <img src="{{ asset('user_assets/img/icon/subtitle-icon1-1.svg') }}" alt="icon">
                            हमारी पहल
                        </span>

                        <h2 class="sec-title th_fade_anim">
                            <span class="th-text-perspective">
                                बस्तर के स्थानीय व्यवसायों को नई पहचान
                            </span>
                        </h2>

                        <p class="th_fade_anim">
                            Digital Bastar का उद्देश्य स्थानीय दुकानदारों, कारीगरों,
                            विक्रेताओं और सेवा प्रदाताओं को एक डिजिटल मंच से जोड़ना है।
                            हमारी पहल स्थानीय व्यवसायों की पहचान बढ़ाने, उनके उत्पादों
                            को प्रदर्शित करने और ग्राहकों तक पहुंच आसान बनाने पर केंद्रित है।
                        </p>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="why-wrap9">
                        <ul class="work-process-list">

                            <li class="work-process-single-list th_fade_anim">
                                <div class="single-work-process">
                                    <div class="box-number">1</div>
                                    <div class="box-content">
                                        <h3 class="box-title">स्थानीय व्यवसायों को डिजिटल पहचान</h3>
                                        <p class="box-text">
                                            स्थानीय दुकानदारों, कारीगरों और सेवा प्रदाताओं
                                            को डिजिटल प्रोफाइल के माध्यम से अपने व्यवसाय की
                                            जानकारी ऑनलाइन प्रदर्शित करने का अवसर प्रदान करना।
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="work-process-single-list th_fade_anim">
                                <div class="single-work-process">
                                    <div class="box-number">2</div>
                                    <div class="box-content">
                                        <h3 class="box-title">स्थानीय उत्पादों का प्रचार</h3>
                                        <p class="box-text">
                                            बस्तर के हस्तशिल्प, पारंपरिक उत्पादों और स्थानीय
                                            सेवाओं को डिजिटल कैटलॉग के माध्यम से अधिक लोगों
                                            तक पहुंचाने में सहायता करना।
                                        </p>
                                    </div>
                                </div>
                            </li>

                            <li class="work-process-single-list th_fade_anim">
                                <div class="single-work-process">
                                    <div class="box-number">3</div>
                                    <div class="box-content">
                                        <h3 class="box-title">व्यापार और ग्राहकों के बीच जुड़ाव</h3>
                                        <p class="box-text">
                                            ग्राहकों को स्थानीय व्यवसाय खोजने और विक्रेताओं
                                            से सीधे संपर्क करने की सुविधा देकर स्थानीय बाजार
                                            में डिजिटल जुड़ाव को बढ़ावा देना।
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="overflow-hidden th-anim-trigger pt-60 pb-60 overflow-hidden" id="shop-sec">

        <div class="course-bg-shape6-1 shape-mockup th_fade_anim" data-speed="1.08" data-right="3%" data-top="30%">
            <img src="{{ asset('user_assets/img/shape/about_shape1_1.png') }}" alt="Digital Bastar">
        </div>

        <div class="course-bg-shape6-2 shape-mockup" data-speed="0.9" data-left="6%" data-bottom="30%">
            <div class="thumb">
                <img src="{{ asset('user_assets/img/shape/category_shape3_1.png') }}" alt="Digital Bastar">
            </div>
        </div>

        <div class="container">

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7">

                    <div class="title-area text-center">

                        <span class="sub-title th_fade_anim">
                            <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="icon">
                            स्थानीय दुकानें
                        </span>

                        <h2 class="sec-title th_fade_anim">
                            <span class="th-text-perspective">
                                स्थानीय व्यवसाय खोजें
                            </span>
                        </h2>

                    </div>

                </div>
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

                <a href="{{ url('shops') }}" class="th-btn style11">
                    सभी दुकानें देखें

                    <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">

                        <path
                            d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583 9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.1541 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                            stroke="currentColor" stroke-width="1.5">
                        </path>

                    </svg>

                </a>

            </div>

        </div>
    </section>
@endsection
@push('js')
@endpush
