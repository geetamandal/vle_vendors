@extends('shopkeeper.layout_2.main_layouts')
@push('css')
    <style>

    </style>
@endpush
@section('main_content')
    <!--===== HERO START =======-->
    <div class="vl-hero-inner-area parallaxie" style="background-image:url(assets/img/hero/about-us-inr-herothumb.png)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="inner-hero-info">
                        <h2>हमारे उत्पाद</h2>
                        <div class="space16"></div>
                        <ul>
                            <li><a href="{{ url('/2/index-2') }}">होम</a></li>
                            <li><img src="assets/img/icon/arrow-right-inner.html" alt=""></li>
                            <li><a class="aboutus_titlefix" href="#">हमारे उत्पाद</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO END =======-->

    <div class="vl-vlog-inr-area sp1">
        <div class="container">
            <div class="row">

                <!-- Product 1 -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
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
                                        <a href="{{ url('2/cart-2') }}">
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
                                    <a href="#">ताज़ी जैविक सब्ज़ियाँ</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <div class="product6_info">
                                <div class="product-price">
                                    <span class="new-price">
                                        <a href="#">₹ 120.00</a>
                                    </span>
                                    <span class="old-price">
                                        <a href="#">₹ 150.00</a>
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


                <!-- Product 2 -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="product6-box">
                        <div class="product-thumb">
                            <img class="imgs" src="{{ asset('vendor_assets/img/products/product6-imgs(2).png') }}"
                                alt="मिश्रित जैविक सब्ज़ियाँ">

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
                                        <a href="{{ url('2/cart-2') }}">
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
                                    <a href="#">मिश्रित जैविक सब्ज़ियाँ</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <div class="product6_info">
                                <div class="product-price">
                                    <span class="new-price">
                                        <a href="#">₹ 180.00</a>
                                    </span>
                                    <span class="old-price">
                                        <a href="#">₹ 220.00</a>
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


                <!-- Product 3 -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="product6-box">
                        <div class="product-thumb">
                            <img class="imgs" src="{{ asset('vendor_assets/img/products/product6-imgs(3).png') }}"
                                alt="ताज़े स्थानीय फल एवं सब्ज़ियाँ">

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
                                        <a href="{{ url('2/cart-2') }}">
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
                                    <a href="#">ताज़े स्थानीय फल एवं सब्ज़ियाँ</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <div class="product6_info">
                                <div class="product-price">
                                    <span class="new-price">
                                        <a href="#">₹ 140.00</a>
                                    </span>
                                    <span class="old-price">
                                        <a href="#">₹ 170.00</a>
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


                <!-- Product 4 -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="product6-box">
                        <div class="product-thumb">
                            <img class="imgs" src="{{ asset('vendor_assets/img/products/product6-imgs(4).png') }}"
                                alt="ताज़ी सब्ज़ियों की टोकरी">

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
                                        <a href="{{ url('2/cart-2') }}">
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
                                    <a href="#">ताज़ी सब्ज़ियों की टोकरी</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <div class="product6_info">
                                <div class="product-price">
                                    <span class="new-price">
                                        <a href="#">₹ 200.00</a>
                                    </span>
                                    <span class="old-price">
                                        <a href="#">₹ 250.00</a>
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


                <!-- Product 5 -->
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="product6-box">
                        <div class="product-thumb">
                            <img class="imgs" src="{{ asset('vendor_assets/img/products/product6-imgs(5).png') }}"
                                alt="जैविक उत्पादों की टोकरी">

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
                                        <a href="{{ url('2/cart-2') }}">
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
                                    <a href="#">जैविक उत्पादों की टोकरी</a>
                                </h3>
                            </div>

                            <div class="space16"></div>

                            <div class="product6_info">
                                <div class="product-price">
                                    <span class="new-price">
                                        <a href="#">₹ 350.00</a>
                                    </span>
                                    <span class="old-price">
                                        <a href="#">₹ 420.00</a>
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
    </div>
@endsection
