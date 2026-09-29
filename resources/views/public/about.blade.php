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


    <div class="overflow-hidden space-top overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row gy-50 align-items-start">
                <div class="col-xl-7">
                    <div class="img-box1">
                        <div class="img1 th--hover-item th_fade_anim">
                            <div class="thumb th--hover-img" data-displacement="assets/img/imghover/fluid.jpg"
                                data-intensity="0.2" data-speedin="1" data-speedout="1"><img class="img-cover"
                                    src="assets/img/normal/pipe.png" alt="About"></div>
                        </div>
                        <div class="img2 th--hover-item th_fade_anim" data-speed="1.05">
                            <div class="thumb th--hover-img" data-displacement="assets/img/imghover/fluid.jpg"
                                data-intensity="0.2" data-speedin="1" data-speedout="1"><img
                                    src="assets/img/normal/ui_ux.png" alt="About"></div>
                        </div>
                        <div class="img3 th--hover-item th_fade_anim" data-speed="1.05">
                            <div class="thumb th--hover-img" data-displacement="assets/img/imghover/fluid.jpg"
                                data-intensity="0.2" data-speedin="1" data-speedout="1"><img src="assets/img/normal/amb.png"
                                    alt="About"></div>
                        </div>
                        <div class="about-shape1-1 jump th_fade_anim"><img src="assets/img/shape/about_shape1_1.png"
                                alt="img"></div>
                        <div class="about-tag th_fade_anim">
                            <div class="about-experience-tag"><span class="circle-title-anime">
                                    स्थानीय व्यवसाय • डिजिटल दुकान • ग्राहक संपर्क • व्यापार विकास</span></div>
                            <div class="year-counter">
                                <div class="box-title"><span class="counter-number"></span></div><span class="box-text">
                                    पंजीकृत विद्यार्थी</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-wrap1">
                        <div class="title-area mb-30">
                            <span class="sub-title th_fade_anim">
                               <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="icon">
                                हमारे बारे में
                            </span>

                            <h2 class="sec-title th_fade_anim">
                                <span class="th-text-perspective">स्थानीय व्यवसायों को डिजिटल पहचान</span>
                            </h2>

                            <p class="sec-text th_fade_anim">
                                हमारा उद्देश्य स्थानीय दुकानदारों, विक्रेताओं एवं सेवा प्रदाताओं को
                                डिजिटल प्लेटफॉर्म से जोड़कर उनके व्यवसाय को नई पहचान और बेहतर
                                पहुंच प्रदान करना है। इस पोर्टल के माध्यम से स्थानीय व्यवसाय अपने
                                उत्पादों एवं सेवाओं को डिजिटल रूप से प्रदर्शित कर सकते हैं और अधिक
                                ग्राहकों तक आसानी से पहुंच सकते हैं।
                            </p>
                        </div>

                        <div class="checklist th_fade_anim">
                            <p class="sec-text th_fade_anim"> <strong>स्थानीय व्यवसायों के लिए डिजिटल प्लेटफॉर्म</strong>
                            </p>
                            <ul class="mt-3">
                                <li> <i class="fa-solid fa-check"></i> बस्तर के स्थानीय दुकानदारों को जानें </li>
                                <li> <i class="fa-solid fa-check"></i> व्यवसाय एवं उत्पादों के लिए डिजिटल कैटलॉग उपलब्ध
                                    कराना। </li>
                                <li> <i class="fa-solid fa-check"></i> ग्राहकों को स्थानीय दुकानों और उत्पादों को आसानी से
                                    खोजने की सुविधा। </li>
                               
                                <li> <i class="fa-solid fa-check"></i> उत्पाद एवं कैटलॉग को WhatsApp के माध्यम से आसानी से
                                    साझा करने की सुविधा। </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="career-section space">
        <div class="container">

            <!-- Section Title -->
            <div class="title-area text-center mb-50">

                <span class="sub-title th_fade_anim">
                    <img src="{{ asset('user_assets/img/icon/subtitle-icon1-4.svg') }}" alt="icon">
                    हमारी पहल
                </span>

                <h2 class="sec-title">
                    स्थानीय व्यवसायों को डिजिटल रूप से सशक्त बनाना
                </h2>

            </div>


            <div class="row justify-content-center text-center">

                <div class="col-lg-12">

                    <div class="content-box">

                        <!-- Main Content -->
                        <p class="sec-text mb-25">
                            स्थानीय दुकानदारों, विक्रेताओं एवं सेवा प्रदाताओं को
                            डिजिटल माध्यम से जोड़ना हमारी प्रमुख पहल है। हमारा
                            उद्देश्य छोटे एवं स्थानीय व्यवसायों को एक सरल और
                            सुविधाजनक डिजिटल प्लेटफॉर्म उपलब्ध कराना है, जहां वे
                            अपने व्यवसाय, उत्पादों और सेवाओं को प्रदर्शित कर
                            अधिक ग्राहकों तक पहुंच बना सकें।
                        </p>


                        <div class="row text-start">

                            <!-- Digital Shop -->
                            <div class="col-md-6 mb-3">

                                <div class="initiative-item">

                                    <strong>
                                        • डिजिटल दुकान
                                    </strong>

                                    <p class="mb-0 mt-1">
                                        प्रत्येक पंजीकृत विक्रेता अपने व्यवसाय के
                                        लिए डिजिटल प्रोफाइल और ऑनलाइन दुकान तैयार
                                        कर सकता है, जहां ग्राहक उत्पाद एवं सेवाओं
                                        की जानकारी आसानी से देख सकते हैं।
                                    </p>

                                </div>

                            </div>


                            <!-- Local Business Search -->
                            <div class="col-md-6 mb-3">

                                <div class="initiative-item">

                                    <strong>
                                        • स्थानीय व्यवसाय की खोज
                                    </strong>

                                    <p class="mb-0 mt-1">
                                        ग्राहक अपने आसपास उपलब्ध दुकानदारों,
                                        विक्रेताओं एवं सेवा प्रदाताओं को आसानी से
                                        खोज सकते हैं और उनके व्यवसाय की आवश्यक
                                        जानकारी प्राप्त कर सकते हैं।
                                    </p>

                                </div>

                            </div>


                            <!-- Product & Service -->
                            <div class="col-md-6 mb-3">

                                <div class="initiative-item">

                                    <strong>
                                        • उत्पाद एवं सेवा प्रदर्शन
                                    </strong>

                                    <p class="mb-0 mt-1">
                                        विक्रेता अपने उत्पादों, सेवाओं, कीमतों और
                                        अन्य आवश्यक जानकारी को डिजिटल कैटलॉग के
                                        माध्यम से प्रदर्शित कर सकते हैं।
                                    </p>

                                </div>

                            </div>


                            <!-- Customer Connection -->
                            <div class="col-md-6 mb-3">

                                <div class="initiative-item">

                                    <strong>
                                        • ग्राहकों से सीधा संपर्क
                                    </strong>

                                    <p class="mb-0 mt-1">
                                        ग्राहक विक्रेता से सीधे संपर्क कर सकते हैं
                                        तथा WhatsApp के माध्यम से उत्पाद और
                                        व्यवसाय की जानकारी साझा कर सकते हैं।
                                    </p>

                                </div>

                            </div>


                            <!-- Business Growth -->
                            <div class="col-md-6 mb-3">

                                <div class="initiative-item">

                                    <strong>
                                        • व्यापार विकास
                                    </strong>

                                    <p class="mb-0 mt-1">
                                        डिजिटल उपस्थिति के माध्यम से स्थानीय
                                        व्यवसायों को अपनी पहुंच बढ़ाने, नए
                                        ग्राहकों से जुड़ने और अपने व्यापार को
                                        आगे बढ़ाने में सहायता मिलती है।
                                    </p>

                                </div>

                            </div>


                            <!-- Digital Empowerment -->
                            <div class="col-md-6 mb-3">

                                <div class="initiative-item">

                                    <strong>
                                        • डिजिटल सशक्तिकरण
                                    </strong>

                                    <p class="mb-0 mt-1">
                                        हमारा प्रयास स्थानीय व्यवसायों को आधुनिक
                                        डिजिटल साधनों से जोड़कर उन्हें बदलते
                                        डिजिटल बाजार में अपनी पहचान बनाने के
                                        लिए सक्षम बनाना है।
                                    </p>

                                </div>

                            </div>

                        </div>

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


            <div class="th-course-row columns-3">

                <!-- Shop 1 -->
                <div class="th-course-single th_fade_anim" data-delay=".3">

                    <div class="course-card">

                        <div class="box-img">
                            <a href="#">
                                <img src="{{ asset('user_assets/images/projects/service-1.png') }}"
                                    alt="बस्तर डिजिटल स्टोर">
                            </a>

                            <span class="box-price">
                                जगदलपुर
                            </span>
                        </div>

                        <h3 class="box-title">
                            <a href="#">
                                बस्तर डिजिटल स्टोर
                            </a>
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

                                <div class="meta-thumb">
                                    <img src="{{ asset('user_assets/images/projects/service-1.png') }}" alt="दुकानदार">
                                </div>

                                <div class="media-body">
                                    <h5 class="box-name">
                                        <a href="#">स्थानीय विक्रेता</a>
                                    </h5>
                                </div>

                            </div>

                            <a href="#" class="th-btn btn-sm style-border2">
                                दुकान देखें

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


                <!-- Shop 2 -->
                <div class="th-course-single th_fade_anim" data-delay=".5">

                    <div class="course-card">

                        <div class="box-img">
                            <a href="#">
                                <img src="{{ asset('user_assets/images/projects/service-2.png') }}"
                                    alt="मां दंतेश्वरी हैंडीक्राफ्ट">
                            </a>

                            <span class="box-price">
                                जगदलपुर
                            </span>
                        </div>

                        <h3 class="box-title">
                            <a href="#">
                                मां दंतेश्वरी हैंडीक्राफ्ट
                            </a>
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

                                <div class="meta-thumb">
                                    <img src="{{ asset('user_assets/images/projects/service-2.png') }}" alt="दुकानदार">
                                </div>

                                <div class="media-body">
                                    <h5 class="box-name">
                                        <a href="#">स्थानीय विक्रेता</a>
                                    </h5>
                                </div>

                            </div>

                            <a href="#" class="th-btn btn-sm style-border2">
                                दुकान देखें

                                <svg class="ms-2" width="16" height="14" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">

                                    <path
                                        d="M7.5264 0C7.5264 0.6962 8.21633 1.738 8.9138 2.61293C9.81193 3.7394 10.8838 4.72347 12.1137 5.4748C13.0351 6.0374 14.154 6.57747 15.0528 6.57747M7.5264 13.1712C7.5264 12.475 8.21633 11.4332 8.9138 10.5583C9.81193 9.43187 10.8838 8.44773 12.1137 7.6964C13.0351 7.1338 14.154 8.44773 12.1137 7.6964C13.0351 7.1338 14.1541 6.59373 15.0528 6.59373M15.0528 6.5856H0"
                                        stroke="currentColor" stroke-width="1.5">
                                    </path>

                                </svg>
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Shop 3 -->
                <div class="th-course-single th_fade_anim" data-delay=".7">

                    <div class="course-card">

                        <div class="box-img">
                            <a href="#">
                                <img src="{{ asset('user_assets/images/projects/service-3.png') }}"
                                    alt="बस्तर फैशन हाउस">
                            </a>

                            <span class="box-price">
                                बस्तर
                            </span>
                        </div>

                        <h3 class="box-title">
                            <a href="#">
                                बस्तर फैशन हाउस
                            </a>
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

                                <div class="meta-thumb">
                                    <img src="{{ asset('user_assets/images/projects/service-3.png') }}" alt="दुकानदार">
                                </div>

                                <div class="media-body">
                                    <h5 class="box-name">
                                        <a href="#">स्थानीय विक्रेता</a>
                                    </h5>
                                </div>

                            </div>

                            <a href="#" class="th-btn btn-sm style-border2">
                                दुकान देखें

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

                </div>


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
