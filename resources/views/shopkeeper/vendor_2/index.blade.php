@extends('shopkeeper.layout_2.main_layouts')
@push('css')
    <style>
        .testimonials9-box {
            height: 100%;
            min-height: 320px;
            display: flex;
            flex-direction: column;
        }

        .testimonials9-author-wrap {
            margin-top: auto;
        }
    </style>
@endpush
@section('main_content')
    <!--===== HERO START =======-->
    <div class="vl-hero7">
        <div class="hero7-area parallaxie"
            style="background-image: url('{{ asset('vendor_assets/img/hero/hero7-bg.png') }}');">
            <div class="container">
                <div class="row">
                    <div class="vl-hero7-info">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero7-header">

                                    <h3 data-aos="fade-right" data-aos-duration="900">
                                        खेतों से सीधे आपके घर तक,
                                        <br>
                                        ताज़गी और शुद्धता के साथ।
                                    </h3>

                                    <div class="space24"></div>

                                    <h2 class="text-effect" data-aos="fade-left" data-aos-duration="1000">
                                        ताज़ा जैविक उत्पाद,
                                        <br>
                                        स्थानीय विक्रेता से
                                    </h2>

                                    <div class="space16"></div>

                                    <p class="text-anime-style-3" data-aos="fade-right" data-aos-duration="1100">
                                        अपने स्थानीय विक्रेता से ताज़ी सब्ज़ियाँ, फल,
                                        अनाज और अन्य जैविक उत्पाद आसानी से खोजें,
                                        उत्पाद देखें और अपने पसंदीदा सामान का ऑर्डर करें।
                                    </p>

                                    <div class="space38"></div>

                                    <div class="hero7-btn-area">
                                        <a href="contact.html" class="btn2-home7 hero7-btn-fxr" data-aos="zoom-out"
                                            data-aos-duration="900">
                                            उत्पाद देखें
                                        </a>

                                        <a href="contact.html" class="btn3-home7" data-aos="zoom-out"
                                            data-aos-duration="900">
                                            हमसे संपर्क करें
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== HERO END =======-->

    <!--===== ABOUT START =======-->
    <div class="vl-about9-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 mx-auto text-center">
                    <div class="about9-area-info">
                        <div class="about9-heading">

                            <h3 data-aos="zoom-out" data-aos-duration="800">
                                <img src="{{ asset('vendor_assets/img/icon/hm7-sub-title2-dot.png') }}" alt="">
                                हमारे बारे में
                            </h3>

                            <div class="space24"></div>

                            <h2 class="text-effect">
                                स्थानीय विक्रेताओं से जुड़ें और ताज़े जैविक उत्पाद
                                आसानी से अपने घर तक पहुँचाएँ।
                                हमारा उद्देश्य स्थानीय किसानों और विक्रेताओं को
                                डिजिटल रूप से सशक्त बनाना और ग्राहकों तक
                                गुणवत्तापूर्ण उत्पाद पहुँचाना है।
                            </h2>

                            <div class="space28"></div>

                            <div class="about9-btn" data-aos="zoom-out" data-aos-duration="900">
                                {{-- <a class="btnhm9" href="about-us.html">
                                हमारे बारे में
                                <i class="fa-solid fa-arrow-right"></i>
                            </a> --}}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===== ABOUT END =======-->

    <!--===== PRODUCTS START =======-->
    <div class="vl-product6-area sp1">
        <div class="container">
            <div class="row">
                <div class="product6-heading">
                    <div class="service6-top">

                        <div class="service6-top-left">
                            <h3 class="product6-subtitle" data-aos="fade-right" data-aos-duration="900">
                                हमारे उत्पाद
                            </h3>

                            <div class="space16"></div>

                            <h2 class="clr-white text-anime-style-3" data-aos="fade-left" data-aos-duration="1000">
                                स्थानीय विक्रेताओं से <br>
                                ताज़े उत्पाद
                            </h2>
                        </div>

                        <div class="service6-top-right">
                            <p class="product6-pera text-effect" data-aos="fade-left" data-aos-duration="900">
                                अपने आसपास के स्थानीय विक्रेताओं और VLEs से
                                ताज़े जैविक उत्पाद आसानी से खोजें, देखें और
                                अपनी पसंद के उत्पाद खरीदें।
                            </p>

                            <div class="space24"></div>

                            <a href="contact.html" class="btn4-home6" data-aos="fade-left" data-aos-duration="1000">
                                सभी उत्पाद देखें
                            </a>
                        </div>

                    </div>
                </div>

                <div class="space44"></div>

                <div class="swiper myproduct6" data-aos="zoom-out" data-aos-duration="900">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="product6-box">
                                <div class="product-thumb">
                                    <img class="imgs" src="{{ asset('vendor_assets/img/products/product6-imgs(1).png') }}"
                                        alt="ताज़ी जैविक सब्ज़ियाँ">

                                    <div class="fav-icon">
                                        <span><i class="fa-solid fa-heart"></i></span>
                                    </div>

                                    <div class="product6-line">
                                        <img src="{{ asset('vendor_assets/img/shape/product6-line.png') }}" alt="">
                                    </div>

                                    <div class="product6-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(1).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(2).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(3).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <div class="product6-box-content">
                                    <div class="product6-content_text">
                                        <h3>
                                            <a href="contact.html">ताज़ी जैविक सब्ज़ियाँ</a>
                                        </h3>
                                    </div>

                                    <div class="space16"></div>

                                    <div class="product6_info">
                                        <div class="product-price">
                                            <span class="new-price">
                                                <a href="contact.html">₹ 120.00</a>
                                            </span>
                                            <span class="old-price">
                                                <a href="contact.html">₹ 150.00</a>
                                            </span>
                                        </div>

                                        <div class="product_star product6_star">
                                            <ul>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product6-box">
                                <div class="product-thumb">
                                    <img class="imgs"
                                        src="{{ asset('vendor_assets/img/products/product6-imgs(2).png') }}"
                                        alt="जैविक अनाज">

                                    <div class="fav-icon">
                                        <span><i class="fa-solid fa-heart"></i></span>
                                    </div>

                                    <div class="product6-line">
                                        <img src="{{ asset('vendor_assets/img/shape/product6-line.png') }}"
                                            alt="">
                                    </div>

                                    <div class="product6-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(1).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(2).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(3).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <div class="product6-box-content">
                                    <div class="product6-content_text">
                                        <h3>
                                            <a href="contact.html">जैविक अनाज</a>
                                        </h3>
                                    </div>

                                    <div class="space16"></div>

                                    <div class="product6_info">
                                        <div class="product-price">
                                            <span class="new-price">
                                                <a href="contact.html">₹ 180.00</a>
                                            </span>
                                            <span class="old-price">
                                                <a href="contact.html">₹ 220.00</a>
                                            </span>
                                        </div>

                                        <div class="product_star product6_star">
                                            <ul>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product6-box">
                                <div class="product-thumb">
                                    <img class="imgs"
                                        src="{{ asset('vendor_assets/img/products/product6-imgs(3).png') }}"
                                        alt="ताज़े फल">

                                    <div class="fav-icon">
                                        <span><i class="fa-solid fa-heart"></i></span>
                                    </div>

                                    <div class="product6-line">
                                        <img src="{{ asset('vendor_assets/img/shape/product6-line.png') }}"
                                            alt="">
                                    </div>

                                    <div class="product6-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(1).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(2).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(3).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <div class="product6-box-content">
                                    <div class="product6-content_text">
                                        <h3>
                                            <a href="contact.html">ताज़े स्थानीय फल</a>
                                        </h3>
                                    </div>

                                    <div class="space16"></div>

                                    <div class="product6_info">
                                        <div class="product-price">
                                            <span class="new-price">
                                                <a href="contact.html">₹ 140.00</a>
                                            </span>
                                            <span class="old-price">
                                                <a href="contact.html">₹ 170.00</a>
                                            </span>
                                        </div>

                                        <div class="product_star product6_star">
                                            <ul>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product6-box">
                                <div class="product-thumb">
                                    <img class="imgs"
                                        src="{{ asset('vendor_assets/img/products/product6-imgs(4).png') }}"
                                        alt="प्राकृतिक खाद">

                                    <div class="fav-icon">
                                        <span><i class="fa-solid fa-heart"></i></span>
                                    </div>

                                    <div class="product6-line">
                                        <img src="{{ asset('vendor_assets/img/shape/product6-line.png') }}"
                                            alt="">
                                    </div>

                                    <div class="product6-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(1).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(2).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(3).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <div class="product6-box-content">
                                    <div class="product6-content_text">
                                        <h3>
                                            <a href="contact.html">प्राकृतिक जैविक खाद</a>
                                        </h3>
                                    </div>

                                    <div class="space16"></div>

                                    <div class="product6_info">
                                        <div class="product-price">
                                            <span class="new-price">
                                                <a href="contact.html">₹ 200.00</a>
                                            </span>
                                            <span class="old-price">
                                                <a href="contact.html">₹ 250.00</a>
                                            </span>
                                        </div>

                                        <div class="product_star product6_star">
                                            <ul>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="product6-box">
                                <div class="product-thumb">
                                    <img class="imgs"
                                        src="{{ asset('vendor_assets/img/products/product6-imgs(5).png') }}"
                                        alt="जैविक उत्पादों की टोकरी">

                                    <div class="fav-icon">
                                        <span><i class="fa-solid fa-heart"></i></span>
                                    </div>

                                    <div class="product6-line">
                                        <img src="{{ asset('vendor_assets/img/shape/product6-line.png') }}"
                                            alt="">
                                    </div>

                                    <div class="product6-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(1).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(2).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="{{ asset('vendor_assets/img/icon/product6-icons(3).svg') }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <div class="product6-box-content">
                                    <div class="product6-content_text">
                                        <h3>
                                            <a href="contact.html">जैविक उत्पादों की टोकरी</a>
                                        </h3>
                                    </div>

                                    <div class="space16"></div>

                                    <div class="product6_info">
                                        <div class="product-price">
                                            <span class="new-price">
                                                <a href="contact.html">₹ 350.00</a>
                                            </span>
                                            <span class="old-price">
                                                <a href="contact.html">₹ 420.00</a>
                                            </span>
                                        </div>

                                        <div class="product_star product6_star">
                                            <ul>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                                <li><a href="#"><i class="fa-solid fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="product6-arrow">
                    <div class="prev-arrow" data-aos="fade-right" data-aos-duration="900">
                        <img src="{{ asset('vendor_assets/img/icon/left-arrow-hm6.svg') }}" alt="">
                    </div>

                    <div class="next-arrow" data-aos="fade-left" data-aos-duration="900">
                        <img src="{{ asset('vendor_assets/img/icon/right-arrow-hm6.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=====PRODUCTS  END =======-->

    <!--===== service start =======-->
    <div class="vl-service6-area sp1">
        <div class="container">
            <div class="row">

                <div class="service6-top">
                    <div class="service6-top-left">
                        <h3 data-aos="fade-right" data-aos-duration="900">
                            हमारी सेवाएँ
                        </h3>

                        <div class="space16"></div>

                        <h2 class="text-anime-style-3" data-aos="fade-left" data-aos-duration="1000">
                            जैविक खेती और स्थानीय <br>
                            उत्पादों से जुड़ी सेवाएँ
                        </h2>
                    </div>

                    <div class="service6-top-right">
                        <p class="text-effect" data-aos="fade-left" data-aos-duration="900">
                            स्थानीय विक्रेता एवं VLE के माध्यम से जैविक उत्पाद,
                            बीज, पौधे और खेती से जुड़ी आवश्यक सेवाएँ आसानी से
                            उपलब्ध कराएँ।
                        </p>

                        <div class="space24"></div>

                        <a href="service.html" class="btn-home6" data-aos="fade-left" data-aos-duration="1000">
                            सभी सेवाएँ देखें
                        </a>
                    </div>
                </div>

                <div class="space44"></div>

                <div class="swiper myservicehm6" data-aos="zoom-out" data-aos-duration="900">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="service6-box">
                                <div class="service6-logos">
                                    <h3 class="title">
                                        <a href="service-single.html">
                                            पौधों की देखभाल एवं <br>
                                            विकास
                                        </a>
                                    </h3>

                                    <div class="inons">
                                        <img src="{{ asset('vendor_assets/img/icon/service6-icon(1).svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <p class="pera-text">
                                    पौधों की बेहतर देखभाल और स्वस्थ विकास के लिए
                                    आवश्यक मार्गदर्शन एवं उपयोगी सेवाएँ उपलब्ध कराएँ।
                                </p>

                                <div class="space28"></div>

                                <div class="service6-box-bottom">
                                    <a href="contact.html" class="btn3-home6">और जानें</a>
                                    <div class="step-number">01</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service6-box">
                                <div class="service6-logos">
                                    <h3 class="title">
                                        <a href="service-single.html">
                                            कम्पोस्ट एवं <br>
                                            मिट्टी स्वास्थ्य
                                        </a>
                                    </h3>

                                    <div class="inons">
                                        <img src="{{ asset('vendor_assets/img/icon/service6-icon(2).svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <p class="pera-text">
                                    जैविक खेती के लिए मिट्टी की गुणवत्ता बनाए रखने
                                    और प्राकृतिक खाद से जुड़े उपयोगी उत्पाद उपलब्ध कराएँ।
                                </p>

                                <div class="space28"></div>

                                <div class="service6-box-bottom">
                                    <a href="contact.html" class="btn3-home6">और जानें</a>
                                    <div class="step-number">02</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service6-box">
                                <div class="service6-logos">
                                    <h3 class="title">
                                        <a href="service-single.html">
                                            जैविक बीज एवं <br>
                                            पौधों की आपूर्ति
                                        </a>
                                    </h3>

                                    <div class="inons">
                                        <img src="{{ asset('vendor_assets/img/icon/service6-icon(3).svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <p class="pera-text">
                                    स्थानीय स्तर पर उपलब्ध गुणवत्तापूर्ण जैविक बीज
                                    और विभिन्न प्रकार के पौधे आसानी से प्राप्त करें।
                                </p>

                                <div class="space28"></div>

                                <div class="service6-box-bottom">
                                    <a href="contact.html" class="btn3-home6">और जानें</a>
                                    <div class="step-number">03</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service6-box">
                                <div class="service6-logos">
                                    <h3 class="title">
                                        <a href="service-single.html">
                                            पौधों की देखभाल एवं <br>
                                            विकास
                                        </a>
                                    </h3>

                                    <div class="inons">
                                        <img src="{{ asset('vendor_assets/img/icon/service6-icon(1).svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <p class="pera-text">
                                    पौधों की बेहतर देखभाल और स्वस्थ विकास के लिए
                                    आवश्यक मार्गदर्शन एवं उपयोगी सेवाएँ उपलब्ध कराएँ।
                                </p>

                                <div class="space28"></div>

                                <div class="service6-box-bottom">
                                    <a href="contact.html" class="btn3-home6">और जानें</a>
                                    <div class="step-number">01</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service6-box">
                                <div class="service6-logos">
                                    <h3 class="title">
                                        <a href="service-single.html">
                                            कम्पोस्ट एवं <br>
                                            मिट्टी स्वास्थ्य
                                        </a>
                                    </h3>

                                    <div class="inons">
                                        <img src="{{ asset('vendor_assets/img/icon/service6-icon(2).svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <p class="pera-text">
                                    जैविक खेती के लिए मिट्टी की गुणवत्ता बनाए रखने
                                    और प्राकृतिक खाद से जुड़े उपयोगी उत्पाद उपलब्ध कराएँ।
                                </p>

                                <div class="space28"></div>

                                <div class="service6-box-bottom">
                                    <a href="contact.html" class="btn3-home6">और जानें</a>
                                    <div class="step-number">02</div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="service6-box">
                                <div class="service6-logos">
                                    <h3 class="title">
                                        <a href="service-single.html">
                                            जैविक बीज एवं <br>
                                            पौधों की आपूर्ति
                                        </a>
                                    </h3>

                                    <div class="inons">
                                        <img src="{{ asset('vendor_assets/img/icon/service6-icon(3).svg') }}"
                                            alt="">
                                    </div>
                                </div>

                                <div class="space24"></div>

                                <p class="pera-text">
                                    स्थानीय स्तर पर उपलब्ध गुणवत्तापूर्ण जैविक बीज
                                    और विभिन्न प्रकार के पौधे आसानी से प्राप्त करें।
                                </p>

                                <div class="space28"></div>

                                <div class="service6-box-bottom">
                                    <a href="contact.html" class="btn3-home6">और जानें</a>
                                    <div class="step-number">03</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="service6-arrow">
                    <div class="prev-arrow" data-aos="fade-right" data-aos-duration="1000">
                        <img src="{{ asset('vendor_assets/img/icon/left-arrow-hm6.svg') }}" alt="">
                    </div>

                    <div class="next-arrow" data-aos="fade-left" data-aos-duration="1000">
                        <img src="{{ asset('vendor_assets/img/icon/right-arrow-hm6.svg') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== service end =======-->

    <!--===== HOW IT WORKS START =======-->
    <div class="vl-service9-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mx-auto text-center">
                    <div class="service9-heading">
                        <h3 data-aos="fade-right" data-aos-duration="900">
                            <img src="{{ asset('vendor_assets/img/icon/hm7-sub-title2-dot.png') }}" alt="">
                            यह कैसे काम करता है?
                        </h3>

                        <div class="space24"></div>

                        <h2 class="text-effect">स्थानीय उत्पादों से जुड़ना हुआ आसान</h2>
                    </div>
                </div>

                <div class="space40"></div>

                <section class="process-section">
                    <div class="process-grid">
                        <!-- Step 1 -->
                        <div class="card top-left" data-aos="zoom-out" data-aos-duration="900">
                            <div class="card-flex">
                                <div class="icon">
                                    <img src="{{ asset('vendor_assets/img/icon/service9-icon1.png') }}" alt="">
                                </div>

                                <h3>
                                    <a href="#">विक्रेता खोजें</a>
                                </h3>
                            </div>

                            <div class="space16"></div>
                            <p>
                                अपने आसपास के स्थानीय विक्रेता और VLE आसानी से खोजें और उनकी डिजिटल दुकान देखें।
                            </p>

                            <a class="btnhm9-2" href="#">
                                आगे बढ़ें
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <!-- Step 2 -->
                        <div class="card top-right" data-aos="zoom-out" data-aos-duration="900">
                            <div class="card-flex">
                                <div class="icon">
                                    <img src="{{ asset('vendor_assets/img/icon/service9-icon2.png') }}" alt="">
                                </div>

                                <h3>
                                    <a href="#">उत्पाद देखें</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <p>
                                विक्रेता की डिजिटल दुकान पर उपलब्ध उत्पादों की जानकारी, कीमत और अन्य विवरण देखें।
                            </p>

                            <a class="btnhm9-2" href="#">
                                उत्पाद देखें
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <!-- Center -->
                        <div class="center-circle">
                            <div class="center-circle-logo">
                                <img class="keyframe5"
                                    src="{{ asset('vendor_assets/img/logo/service9-center-logo-bg.png') }}"
                                    alt="">

                                <img class="logos" src="{{ asset('vendor_assets/img/logo/service9-center-logo.png') }}"
                                    alt="">
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="card bottom-left" data-aos="zoom-out" data-aos-duration="1000">
                            <div class="card-flex">
                                <div class="icon">
                                    <img src="{{ asset('vendor_assets/img/icon/service9-icon3.png') }}" alt="">
                                </div>

                                <h3>
                                    <a href="#">ऑर्डर करें</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <p>
                                अपनी पसंद के उत्पाद चुनें, Wishlist में सेव करें और आसानी से अपना ऑर्डर करें।
                            </p>

                            <a class="btnhm9-2" href="#">
                                ऑर्डर करें
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                        <!-- Step 4 -->
                        <div class="card bottom-right" data-aos="zoom-out" data-aos-duration="1000">
                            <div class="card-flex">
                                <div class="icon">
                                    <img src="{{ asset('vendor_assets/img/icon/service9-icon4.png') }}" alt="">
                                </div>

                                <h3>
                                    <a href="#">ऑर्डर प्राप्त करें</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <p>
                                अपने ऑर्डर की जानकारी और पिछला ऑर्डर देखें तथा स्थानीय विक्रेता से उत्पाद प्राप्त करें।
                            </p>

                            <a class="btnhm9-2" href="#">
                                ऑर्डर देखें
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="line9-shape">
                        <img src="{{ asset('vendor_assets/img/shape/service9-line-shp.png') }}" alt="">
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!--===== HOW IT WORKS END =======-->
    <!--===== FAQ START =======-->
    <div class="vl-faq9-area sp1">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 mx-auto text-center">
                    <div class="service9-heading">
                        <h3 data-aos="fade-right" data-aos-duration="900">
                            <img src="{{ asset('vendor_assets/img/icon/hm7-sub-title2-dot.png') }}" alt="">
                            अक्सर पूछे जाने वाले प्रश्न
                        </h3>

                        <div class="space24"></div>

                        <h2 class="text-effect">पोर्टल के बारे में सामान्य प्रश्न</h2>
                    </div>
                </div>

                <div class="space60"></div>

                <div class="col-xl-6">
                    <div class="vl-faq-content-wrap-2 vl-faq-inner" data-sal="slide-up" data-sal-duration="1000"
                        data-sal-delay="100" data-sal-easing="ease-in-out">

                        <div class="vl-faq-accordion">
                            <div class="accordion" id="accordionExample">

                                <div class="vl-accordion-item" data-aos="fade-right" data-aos-duration="800">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            पोर्टल पर स्थानीय विक्रेता के उत्पाद कैसे देखें?
                                            <span class="vl-faqarrow vl-faqarrow-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="para">
                                                पोर्टल पर उपलब्ध स्थानीय विक्रेता या VLE की डिजिटल दुकान पर जाकर
                                                उनके उत्पादों की पूरी कैटलॉग देख सकते हैं और अपनी पसंद के उत्पाद
                                                चुन सकते हैं।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vl-accordion-item" data-aos="fade-right" data-aos-duration="900">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            क्या मैं किसी उत्पाद को Wishlist में सेव कर सकता हूँ?
                                            <span class="vl-faqarrow vl-faqarrow-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="para">
                                                हाँ, ग्राहक अपनी पसंद के उत्पादों को Wishlist में सेव कर सकते हैं,
                                                ताकि उन्हें बाद में आसानी से देखा और खरीदा जा सके।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vl-accordion-item" data-aos="fade-right" data-aos-duration="1000">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            क्या मैं पोर्टल से उत्पाद का ऑर्डर कर सकता हूँ?
                                            <span class="vl-faqarrow vl-faqarrow-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="para">
                                                हाँ, ग्राहक उपलब्ध उत्पादों को देखकर अपनी आवश्यकता के अनुसार
                                                ऑर्डर कर सकते हैं और अपने ऑर्डर की जानकारी देख सकते हैं।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vl-accordion-item" data-aos="fade-right" data-aos-duration="1100">
                                    <h2 class="accordion-header" id="heading4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false"
                                            aria-controls="collapse4">
                                            क्या मैं अपने पिछले ऑर्डर देख सकता हूँ?
                                            <span class="vl-faqarrow vl-faqarrow-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                    </h2>

                                    <div id="collapse4" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="para">
                                                ग्राहक अपने पिछले ऑर्डर की जानकारी और ऑर्डर हिस्ट्री को
                                                पोर्टल के माध्यम से देख सकते हैं।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="vl-accordion-item" data-aos="fade-right" data-aos-duration="1200">
                                    <h2 class="accordion-header" id="heading5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false"
                                            aria-controls="collapse5">
                                            क्या उत्पादों को WhatsApp पर शेयर कर सकते हैं?
                                            <span class="vl-faqarrow vl-faqarrow-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </span>
                                        </button>
                                    </h2>

                                    <div id="collapse5" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="para">
                                                हाँ, ग्राहक और विक्रेता उपलब्ध उत्पादों या पूरी कैटलॉग को
                                                WhatsApp के माध्यम से आसानी से शेयर कर सकते हैं।
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="faq9-thumb image-anime">
                        <img src="{{ asset('vendor_assets/img/faq/faq9-thumb.png') }}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== FAQ END =======-->
    <!--===== TESTIMONIALS START =======-->
    <div class="vl-testimonials9-area sp1">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 mx-auto text-center">
                    <div class="testimonials9-heading">
                        <div class="service9-heading">
                            <h3 data-aos="fade-right" data-aos-duration="900">
                                <img src="{{ asset('vendor_assets/img/icon/hm7-sub-title2-dot.png') }}" alt="">
                                ग्राहकों की प्रतिक्रिया
                            </h3>

                            <div class="space24"></div>

                            <h2 class="text-effect">ग्राहकों का भरोसा, हमारी पहचान</h2>
                        </div>
                    </div>
                </div>

                <div class="space60"></div>

                <div class="row">
                    <div class="swiper mySwipertesti9" data-aos="zoom-out" data-aos-duration="900">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonials9-box">

                                    <div class="star_icon star_hm9">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="space16"></div>

                                    <p class="pera-text">
                                        “इस पोर्टल के माध्यम से मुझे अपने स्थानीय विक्रेता से
                                        जैविक और ताज़े उत्पाद आसानी से मिल जाते हैं। उत्पाद
                                        देखना और ऑर्डर करना बहुत आसान है।”
                                    </p>

                                    <div class="space24"></div>

                                    <div class="testimonials9-author-wrap">
                                        <div class="testimonials9-author-info">
                                            <div class="author-imgs">
                                                <img src="{{ asset('vendor_assets/img/testimonil/testimonials9-author.png') }}"
                                                    alt="">
                                            </div>

                                            <div class="author-bio">
                                                <h3><a href="testimonials.html">रीना शर्मा</a></h3>
                                                <div class="space8"></div>
                                                <p>ग्राहक</p>
                                            </div>
                                        </div>

                                        <div class="testimonials9-quote">
                                            <img src="{{ asset('vendor_assets/img/icon/quote-testi9.png') }}"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials9-box">

                                    <div class="star_icon star_hm9">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="space16"></div>

                                    <p class="pera-text">
                                        “डिजिटल पोर्टल ने मेरे व्यवसाय को ऑनलाइन पहचान दी है।
                                        अब ग्राहक मेरे उत्पादों की पूरी कैटलॉग देख सकते हैं
                                        और आसानी से मुझसे संपर्क कर सकते हैं।”
                                    </p>

                                    <div class="space24"></div>

                                    <div class="testimonials9-author-wrap">
                                        <div class="testimonials9-author-info">
                                            <div class="author-imgs">
                                                <img src="{{ asset('vendor_assets/img/testimonil/testi-inr-author3.png') }}"
                                                    alt="">
                                            </div>

                                            <div class="author-bio">
                                                <h3><a href="testimonials.html">रमेश साहू</a></h3>
                                                <div class="space8"></div>
                                                <p>स्थानीय विक्रेता</p>
                                            </div>
                                        </div>

                                        <div class="testimonials9-quote">
                                            <img src="{{ asset('vendor_assets/img/icon/quote-testi9.png') }}"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials9-box">

                                    <div class="star_icon star_hm9">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="space16"></div>

                                    <p class="pera-text">
                                        “मुझे अपने आसपास के स्थानीय दुकानदारों और उनके
                                        उत्पादों को एक ही जगह पर देखने की सुविधा मिली।
                                        इससे खरीदारी पहले से काफी आसान हो गई है।”
                                    </p>

                                    <div class="space24"></div>

                                    <div class="testimonials9-author-wrap">
                                        <div class="testimonials9-author-info">
                                            <div class="author-imgs">
                                                <img src="{{ asset('vendor_assets/img/testimonil/testi-inr-author9.png') }}"
                                                    alt="">
                                            </div>

                                            <div class="author-bio">
                                                <h3><a href="testimonials.html">पूजा वर्मा</a></h3>
                                                <div class="space8"></div>
                                                <p>ग्राहक</p>
                                            </div>
                                        </div>

                                        <div class="testimonials9-quote">
                                            <img src="{{ asset('vendor_assets/img/icon/quote-testi9.png') }}"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonials9-box">

                                    <div class="star_icon star_hm9">
                                        <ul>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                            <li><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="space16"></div>

                                    <p class="pera-text">
                                        “अपने उत्पादों को डिजिटल कैटलॉग में दिखाना और
                                        ग्राहकों तक पहुँचाना अब बहुत आसान हो गया है।
                                        यह स्थानीय व्यवसायों के लिए उपयोगी प्लेटफॉर्म है।”
                                    </p>

                                    <div class="space24"></div>

                                    <div class="testimonials9-author-wrap">
                                        <div class="testimonials9-author-info">
                                            <div class="author-imgs">
                                                <img src="{{ asset('vendor_assets/img/testimonil/testimonials9-author.png') }}"
                                                    alt="">
                                            </div>

                                            <div class="author-bio">
                                                <h3><a href="testimonials.html">अमित पटेल</a></h3>
                                                <div class="space8"></div>
                                                <p>VLE / विक्रेता</p>
                                            </div>
                                        </div>

                                        <div class="testimonials9-quote">
                                            <img src="{{ asset('vendor_assets/img/icon/quote-testi9.png') }}"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="vl-testimonials9-arrow">
                        <div class="prev-arrow" data-aos="fade-right" data-aos-duration="900">
                            <img src="{{ asset('vendor_assets/img/icon/arrow-left-hm9.svg') }}" alt="">
                        </div>

                        <div class="next-arrow" data-aos="fade-left" data-aos-duration="900">
                            <img src="{{ asset('vendor_assets/img/icon/arrow-right-hm9.svg') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== TESTIMONILS END =======-->
@endsection
