@extends('public_layouts.main_layout')

@section('main-content')

    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrap bg-mild position-relative"
        data-bg-src="{{ asset('user_assets/img/bg/breadcumb-bg.png') }}"
        style="padding:120px 0;">

        <div class="container">
            <div class="row">
                <div class="col-lg-7">

                    <div class="breadcumb-content">

                        <br><br><br><br>

                        <h1 class="breadcumb-title">स्थानीय दुकानें</h1>

                        <ul class="breadcumb-menu">
                            <li>
                                <a href="{{ url('/') }}">मुख्य पृष्ठ</a>
                            </li>

                            <li>स्थानीय दुकानें</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>


    {{-- Shops Section --}}
    <section class="overflow-hidden th-anim-trigger space" id="shops-sec">

        {{-- Left Shape --}}
        <div class="course-bg-shape1-1 shape-mockup th_fade_anim"
            data-speed="0.9"
            data-left="6%"
            data-top="20%">

            <img src="{{ asset('assets/img/shape/course_shape1_1.png') }}"
                alt="shape">
        </div>


        {{-- Right Shape --}}
        <div class="course-bg-shape1-2 shape-mockup"
            data-right="6%"
            data-bottom="20%">

            <div class="thumb th-anim-spin">

                <img src="{{ asset('assets/img/shape/course_shape1_2.png') }}"
                    alt="shape">

            </div>

        </div>


        <div class="container">

            {{-- Heading --}}
            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="title-area text-center">

                        <span class="sub-title th_fade_anim">

                            <img src="{{ asset('user_assets/img/icon/subtitle-icon1-1.svg') }}"
                                alt="icon">

                            स्थानीय व्यवसाय

                        </span>

                        <h2 class="sec-title th_fade_anim">
                            अपने आसपास की स्थानीय दुकानें खोजें
                        </h2>

                      

                    </div>

                </div>

            </div>


            {{-- Shops --}}
            <div class="th-course-row columns-3">


                {{-- Shop 1 --}}
                <div class="th-course-single th_fade_anim">

                    <a href="{{ url('/shop-details/1') }}"
                        style="text-decoration:none;color:inherit;display:block;">

                        <div class="course-card">

                            <div class="box-img">

                                <img src="{{ asset('user_assets/img/shop/s3.jpg') }}"
                                    alt=" बस्तर ऑर्गेनिक स्टोर">

                            </div>

                            <h3 class="box-title">
                                बस्तर ऑर्गेनिक स्टोर
                            </h3>

                            <div class="box-content">

                                <div class="course-info">

                                    <div class="box-icon">
                                        <i class="fal fa-user"></i>
                                    </div>

                                    <div class="course-info-details">

                                        <span class="course-info-title">
                                            संचालक
                                        </span>

                                        <h4 class="course-info-text">
                                            रमेश कुमार
                                        </h4>

                                    </div>

                                </div>


                                <div class="course-info">

                                    <div class="box-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <div class="course-info-details">

                                        <span class="course-info-title">
                                            स्थान
                                        </span>

                                        <h4 class="course-info-text">
                                            जगदलपुर, बस्तर
                                        </h4>

                                    </div>

                                </div>

                                <p style="font-size:14px;margin-top:10px;">
                                    किराना एवं दैनिक उपयोग की वस्तुओं की दुकान।
                                </p>

                            </div>

                            <div class="btn-wrap">

                                <span class="th-btn btn-sm style-border2">
                                    दुकान देखें
                                </span>

                            </div>

                        </div>

                    </a>

                </div>
                {{-- Shop 3 --}}
                <div class="th-course-single th_fade_anim">

                    <a href="{{ url('/shop-details/3') }}"
                        style="text-decoration:none;color:inherit;display:block;">

                        <div class="course-card">

                            <div class="box-img">

                                <img src="{{ asset('user_assets/img/shop/s1.webp') }}"
                                    alt="ग्राम सेवा केंद्र">

                            </div>

                            <h3 class="box-title">
                                ग्राम सेवा केंद्र
                            </h3>

                            <div class="box-content">

                                <div class="course-info">

                                    <div class="box-icon">
                                        <i class="fal fa-user"></i>
                                    </div>

                                    <div class="course-info-details">

                                        <span class="course-info-title">
                                            संचालक
                                        </span>

                                        <h4 class="course-info-text">
                                            मोहन यादव
                                        </h4>

                                    </div>

                                </div>


                                <div class="course-info">

                                    <div class="box-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <div class="course-info-details">

                                        <span class="course-info-title">
                                            स्थान
                                        </span>

                                        <h4 class="course-info-text">
                                            नारायणपुर, बस्तर
                                        </h4>

                                    </div>

                                </div>

                                <p style="font-size:14px;margin-top:10px;">
                                    ऑनलाइन डिजिटल सेवाओं की सुविधा।
                                </p>

                            </div>

                            <div class="btn-wrap">

                                <span class="th-btn btn-sm style-border2">
                                    दुकान देखें
                                </span>

                            </div>

                        </div>

                    </a>

                </div>

                {{-- Shop 5 --}}
                <div class="th-course-single th_fade_anim">

                    <a href="javascript:void(0);"
                        style="text-decoration:none;color:inherit;display:block;">

                        <div class="course-card">

                            <div class="box-img">

                                <img src="{{ asset('user_assets/img/shop/s5.jpg') }}"
                                    alt="बस्तर फर्नीचर सेंटर">

                            </div>

                            <h3 class="box-title">
                                बस्तर फर्नीचर सेंटर
                            </h3>

                            <div class="box-content">

                                <div class="course-info">

                                    <div class="box-icon">
                                        <i class="fal fa-user"></i>
                                    </div>

                                    <div class="course-info-details">

                                        <span class="course-info-title">
                                            संचालक
                                        </span>

                                        <h4 class="course-info-text">
                                            राजेश मरकाम
                                        </h4>

                                    </div>

                                </div>


                                <div class="course-info">

                                    <div class="box-icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>

                                    <div class="course-info-details">

                                        <span class="course-info-title">
                                            स्थान
                                        </span>

                                        <h4 class="course-info-text">
                                            कोंडागांव, बस्तर
                                        </h4>

                                    </div>

                                </div>

                                <p style="font-size:14px;margin-top:10px;">
                                    फर्नीचर एवं लकड़ी से बने घरेलू उत्पाद।
                                </p>

                            </div>

                            <div class="btn-wrap">

                                <span class="th-btn btn-sm style-border2">
                                    दुकान देखें
                                </span>

                            </div>

                        </div>

                    </a>

                </div>


              

            </div>

        </div>

    </section>

@endsection
