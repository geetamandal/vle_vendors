@extends('shopkeeper.layout_1.main_layout')
@section('main_content')

  <!--===== HERO START =======-->
  <div class="vl-hero-inner-area parallaxie" style="background-image: url(img/hero/about-us-inr-herothumb.png); background-position: center; background-size: cover; background-repeat: no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <div class="inner-hero-info">
            <h2>उत्पाद</h2>
            <div class="space16"></div>
            <ul>
              <li><a href="{{ url('/1/index-1') }}">होम</a></li>
              <li><img src="{{ asset('vendor_assets/img/icon/arrow-right-inner.html ')}}" alt=""></li>
              <li><a class="aboutus_titlefix" href="{{ url('/1/contact') }}">उत्पाद</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO END =======-->

   <!--===== TRENDING PRODUCTS AREA START  =======-->
    <div class="vl-trending4-prod-area sp2">
        <div class="container">
            <div class="row">
               
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