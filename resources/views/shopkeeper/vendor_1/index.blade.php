@extends('shopkeeper.layout_1.main_layout')
@section('main_content')
    <!--=====HERO START =======-->
    <div class="vl-hero8-area"
        style="background-image:url('{{ asset('vendor_assets/img/bg/hero8-bg.png') }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7">
                    <div class="vl-hero8-info">
                        <div class="vl-hero8-heading">
                            <h3 data-aos="fade-right" data-aos-duration="900"><img
                                    src="{{ asset('vendor_assets/img/icon/hm8-sub-title-dot.png ') }}" alt="">आपकी
                                डिजिटल सेवाओं का विश्वसनीय केंद्र
                            </h3>
                            <div class="space24"></div>
                            <h2 class="" data-aos="fade-left" data-aos-duration=""> सभी ऑनलाइन सेवाएँ, अब आपके नजदीकी
                                सेवा केंद्र पर
                            </h2>
                            <div class="space16"></div>
                            <p data-aos="fade-right" data-aos-duration="1000"> ऑनलाइन आवेदन, प्रमाण पत्र, दस्तावेज़ संबंधी
                                सेवाएँ और विभिन्न
                                डिजिटल सेवाओं के लिए अपने नजदीकी नेट कैफे एवं डिजिटल सेवा केंद्र
                                से आसानी से सहायता प्राप्त करें।</p>
                        </div>
                        <div class="space38"></div>
                        <div class="hero8-btn" data-aos="fade-left" data-aos-duration="1100">
                            <a class="vl-primary-btn-hm8" href="{{ url('/1/service-1') }}"> हमारी सेवाएं देखें<span><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                        <div class="space60"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="vl-hero8-shape-bg">
            <img src="{{ asset('vendor_assets/img/bg/hero8-shape-bg.png ') }}" alt="">
        </div>
        <div class="vl-hero8-thumb aniamtion-key-2">
            <img src="{{ asset('vendor_assets/img/hero/hero8-thumb1.png') }}" alt="">
        </div>
        {{-- <div class="vl-hero8-fish-shape">
            <img class="fish-shape-1 aniamtion-key-5" src="{{ asset('vendor_assets/img/shape/hero8-fish-shape1.png ') }}"
                alt="">
            <img class="fish-shape-2 aniamtion-key-5" src="{{ asset('vendor_assets/img/shape/hero8-fish-shape2.png ') }}"
                alt="">
            <img class="fish-shape-3 aniamtion-key-3" src="{{ asset('vendor_assets/img/shape/hero8-fish-shape3.png ') }}"
                alt="">
        </div> --}}
    </div>
    <!--=====HERO END =======-->


    <!--===== ABOUT START =======-->
    <div class="vl-about8-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-6 col-md-5 mx-auto text-center">
                    <div class="vl-about8-info">
                        <h3 class="sub-title" data-aos="fade-right" data-aos-duration="900"><img
                                src="{{ asset('vendor_assets/img/icon/hm8-sub-title-dot.png') }}" alt=""> हमारे बारे
                            में</h3>
                        <div class="space24"></div>
                        <p class="about8-text " data-aos="fade-left" data-aos-duration="1000">
                            यह डिजिटल सेवा पोर्टल नागरिकों को उनके नजदीकी सेवा केंद्रों
                            के माध्यम से विभिन्न ऑनलाइन एवं नागरिक सेवाओं तक आसान पहुंच
                            प्रदान करने के उद्देश्य से विकसित किया गया है। यहां नागरिक
                            विभिन्न सरकारी सेवाओं, ऑनलाइन आवेदन, प्रमाण पत्र एवं
                            आवश्यक दस्तावेज़ संबंधी कार्यों के लिए सहायता प्राप्त कर सकते हैं।</p>
                        <div class="space38"></div>
                        <div class="about8-btn" data-aos="fade-right" data-aos-duration="1100">
                            <a class="vl-primary-btn-hm8" href="{{ url('/1/service-1') }}"> अधिक जानकारी<span><i
                                        class="fa-solid fa-arrow-right-long"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about8-banner">
            <img class="banner-1" src="{{ asset('vendor_assets/img/about/about8-banner1.png ') }}" alt="">
            <img class="banner-2" src="{{ asset('vendor_assets/img/about/about8-banner2.png ') }}" alt="">
            <img class="banner-3" src="{{ asset('vendor_assets/img/about/about8-banner3.png ') }}" alt="">
            <img class="banner-4" src="{{ asset('vendor_assets/img/about/about8-banner4.png ') }}" alt="">
        </div>
    </div>

    <!--===== ABOUT END =======-->


    <!--===== SERVICE START =======-->
    <div class="vl-pricing8-area sp2">
        <div class="container">
            <div class="row">
                <div class="pricing8-top">
                    <div class="service8-top">
                        <div class="service8-heading">
                            <h3 data-aos="fade-right" data-aos-duration="900"><img
                                    src="assets/img/icon/hm8-sub-title-dot.png" alt="">हमारी सेवाएं</h3>
                            <div class="space24"></div>
                            {{-- <h2 class="text-effect" data-aos="fade-left" data-aos-duration="1000">Sustainable Fish, <br>
                                Transparent Pricing</h2> --}}
                        </div>
                        <div class="service8-right">
                            <p class="pera-text" data-aos="fade-left" data-aos-duration="900"></p>
                            <div class="space28"></div>
                            <div class="service8-top-btn" data-aos="fade-left" data-aos-duration="1000">
                                <a class="vl-primary-btn-hm8" href="{{ url('1/service-1') }}">अधिक जानकारी<span><i
                                            class="fa-solid fa-arrow-right-long"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space60"></div>
                <div class="col-xl-4 col-lg-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="pricing8-box mb-30">

                        <div class="space32"></div>
                        <a class="vl-primary-btn-hm8 vl-primary-hm8-pricing" href="{{ url('/1/service-1') }}">जाति प्रमाण पत्र<span><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>

                        <div class="space32"></div>
                        <div class="features-list">
                            <p>जाति प्रमाण पत्र हेतु आवेदन एवं संबंधित प्रक्रिया<br> में सहायता।</p><br>
                            <h3>आवश्यक दस्तावेज़:</h3>
                            <div class="space24"></div>
                            <ul>

                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt="">आधार कार्ड,</li>
                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt=""> निवास प्रमाण,</li>
                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt="">पासपोर्ट साइज फोटो</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-30" data-aos="zoom-out" data-aos-duration="900">
                    <div class="pricing8-box pricing8-box-main mb-30">

                        <div class="space32"></div>
                        <a class="vl-primary-btn-hm8 vl-primary-hm8-pricing-main" href="{{ url('/1/service-1') }}">जन्म प्रमाण पत्र<span><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                        <div class="space32"></div>
                        <div class="features-list">
                            <p>जन्म प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया <br>में सहायता।</p><br>
                            <h3>आवश्यक दस्तावेज़:</h3>
                            <div class="space24"></div>
                            <ul>

                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt="">आधार कार्ड,</li>
                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt=""> अस्पताल/स्कूल रिकॉर्ड,</li>
                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt="">माता-पिता का पहचान पत्र</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-30" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="pricing8-box">

                        <div class="space32"></div>
                        <a class="vl-primary-btn-hm8 vl-primary-hm8-pricing" href="{{ url('/1/service-1') }}">आधार सेवा<span><i
                                    class="fa-solid fa-arrow-right-long"></i></span></a>
                        <div class="space32"></div>
                        <div class="features-list">
                            <p>आधार से संबंधित विभिन्न सेवाओं एवं आवेदन <br>में सहायता।</p><br>
                            <h3>आवश्यक दस्तावेज़:</h3>
                            <div class="space24"></div>
                            <ul>

                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt="">आधार कार्ड,</li>
                                <li><img src="{{ asset('vendor_assets/img/icon/tick-hm8.svg ')}}" alt=""> मोबाइल नंबर.</li>
                                <li><img src="/img/icon/tick-hm8.svg" alt=""> </li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE END =======-->





    <!--===== TRENDING PRODUCTS AREA START  =======-->
    <div class="vl-trending4-prod-area sp2">
        <div class="container">
            <div class="row">
                <div class="trending4-prod-heading">
                    <div class="offer_product4-top">
                        <div class="offer_product4-header">
                            <h3 class="subtitle" data-aos="fade-right" data-aos-duration="900"><img
                                    src="assets/img/icon/subtitle-icon-hm4.svg" alt="">हमारे उत्पाद

                                <div class="space24"></div>

                                <h2 class="title " data-aos="fade-right" data-aos-duration="1000">स्थानीय विक्रेताओं से
                                    ताज़े उत्पाद
                                </h2>
                        </div>
                        <div class="offer_product4-heading-text">
                            <p class="" data-aos="fade-left" data-aos-duration="1000">हमारे लोकप्रिय और ताज़े
                                उत्पादों को देखें <br>
                                — जिन्हें ग्राहक सबसे अधिक पसंद कर रहे हैं! <br>
                                गुणवत्तापूर्ण उत्पाद अब आपके नज़दीकी स्थानीय विक्रेताओं से।</p>
                            <div class="space28"></div>
                            <div class="btn_area10" data-aos="fade-left" data-aos-duration="1100">
                                <a href="{{ url('/1/product') }}" class="vl-btn10"> सभी उत्पाद देखें<span><svg
                                            xmlns="http://www.w3.org/2000/svg" width="34" height="34"
                                            viewBox="0 0 34 34" fill="none">
                                            <path d="M22.8079 11.1373L11.1406 22.8046" stroke="#25452C"
                                                stroke-width="1.55556" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path
                                                d="M22.8054 17.5005C22.8054 17.5005 23.6439 11.9751 22.8054 11.1366C21.9669 10.2981 16.4414 11.1366 16.4414 11.1366"
                                                stroke="#25452C" stroke-width="1.55556" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space44"></div>
                <div class="col-xl-4 col-lg-4 mb-30" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="product4-box trending4-prod-box">
                        <div class="product4-thumb trending4-prod-thumb">
                            <div class="product4-thumb-img text-center">
                                <img class="product4-imgs"
                                    src="{{ asset('vendor_assets/img/products/product4-img1.png ') }}" alt="">
                                <div class="product4-thumb-shadow text-center">
                                    <img src="{{ asset('vendor_assets/img/products/product4-img1-shadow.png') }}"
                                        alt="">
                                </div>
                            </div>

                            <div class="product4-bottom-shape">
                                <img src="{{ asset('vendor_assets/img/shape/product4-box_shape.png ') }}" alt="">
                            </div>
                            <div class="product4-bottom-shape2">
                                <img src="{{ asset('vendor_assets/img/shape/product4-box_shape2.png ') }}"
                                    alt="">
                            </div>
                            <div class="product4-social trending4-prod-social">
                                <ul class="product4-social-link">
                                    <li><a href="{{ url('1/product-details-1') }}"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(1).svg ') }}"
                                                alt=""></a></li>
                                    <li><a href="{{ url('1/cart-1') }}"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(2).svg ') }} "
                                                alt=""></a></li>
                                    <li><a href="#"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(3).svg ') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="product4-main-content">
                            <h3 class="content-title"><a href="{{ url('1/product-details-1') }}">जैविक अनानास</a></h3>
                            <div class="space16"></div>
                            <div class="product4-main-bottom">
                                <div class="product_star product_star_2">
                                    <ul>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product4-count">
                                    <span>(24 Items)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30" data-aos="zoom-out" data-aos-duration="900">
                    <div class="product4-box trending4-prod-box">
                        <div class="product4-thumb trending4-prod-thumb">
                            <div class="product4-thumb-img text-center">
                                <img class="product4-imgs"
                                    src="{{ asset('vendor_assets/img/products/product4-img2.png ') }}" alt="">
                                <div class="product4-thumb-shadow text-center">
                                    <img src="{{ asset('vendor_assets/img/products/product4-img2-shadow.png ') }}"
                                        alt="">
                                </div>
                            </div>

                            <div class="product4-bottom-shape">
                                <img src="{{ asset('vendor_assets/img/shape/product4-box_shape.png ') }}" alt="">
                            </div>
                            <div class="product4-bottom-shape2">
                                <img src="{{ asset('vendor_assets/img/shape/product4-box_shape2.png ') }}"
                                    alt="">
                            </div>
                            <div class="product4-social trending4-prod-social">
                                <ul class="product4-social-link">
                                    <li><a href="{{ url('1/product-details-1') }}"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(1).svg ') }}"
                                                alt=""></a></li>
                                    <li><a href="{{ url('1/cart-1') }}"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(2).svg ') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(3).svg ') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="product4-main-content">
                            <h3 class="content-title"><a href="{{ url('1/product-details-1') }}">जैविक आम</a></h3>
                            <div class="space16"></div>
                            <div class="product4-main-bottom">
                                <div class="product_star product_star_2">
                                    <ul>
                                         <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product4-count">
                                    <span>(24 Items)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 mb-30" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="product4-box trending4-prod-box">
                        <div class="product4-thumb trending4-prod-thumb">
                            <div class="product4-thumb-img text-center">
                                <img class="product4-imgs"
                                    src="{{ asset('vendor_assets/img/products/product4-img3.png ') }}" alt="">
                                <div class="product4-thumb-shadow text-center">
                                    <img src="{{ asset('vendor_assets/img/products/product4-img3-shadow.png ') }}"
                                        alt="">
                                </div>
                            </div>

                            <div class="product4-bottom-shape">
                                <img src="{{ asset('vendor_assets/img/shape/product4-box_shape.png ') }}" alt="">
                            </div>
                            <div class="product4-bottom-shape2">
                                <img src="{{ asset('vendor_assets/img/shape/product4-box_shape2.png ') }}"
                                    alt="">
                            </div>
                            <div class="product4-social trending4-prod-social">
                                <ul class="product4-social-link">
                                    <li><a href="{{ url('1/product-details-1') }}"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(1).svg') }}"
                                                alt=""></a></li>
                                    <li><a href="{{ url('1/cart-1') }}"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(2).svg ') }}"
                                                alt=""></a></li>
                                    <li><a href="#"><img
                                                src="{{ asset('vendor_assets/img/icon/product4-icon(3).svg ') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space20"></div>
                        <div class="product4-main-content">
                            <h3 class="content-title"><a href="{{ url('1/product-details-1') }}">जैविक सेब</a></h3>
                            <div class="space16"></div>
                            <div class="product4-main-bottom">
                                <div class="product_star product_star_2">
                                    <ul>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                        <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product4-count">
                                    <span>(24 Items)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--===== TRENDING PRODUCTS AREA END  =======-->
@endsection
