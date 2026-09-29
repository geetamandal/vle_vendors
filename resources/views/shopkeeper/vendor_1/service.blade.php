@extends('shopkeeper.layout_1.main_layout')
@section('main_content')
    <!--===== HERO START =======-->
      <div class="vl-hero-inner-area parallaxie" style="background-image: url(img/hero/about-us-inr-herothumb.png); background-position: center; background-size: cover; background-repeat: no-repeat;">

        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="inner-hero-info">
                        <h2>सेवाएँ</h2>
                        <div class="space16"></div>
                        <ul>
                            <li><a href="{{ url('/1/index-1') }}">होम</a></li>
                            <li><img src="{{ asset('vendor_assets/img/icon/arrow-right-inner.html ') }}" alt=""></li>
                            <li><a class="aboutus_titlefix" href="{{ url('/1/contact') }}">सेवाएँ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO END =======-->

    <!--===== extra  END =======-->
    <div class="service-inr-box-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="service6-box margin-b30">
                        <div class="service6-logos">
                            <h3 class="title"><a href="#">जाति प्रमाण पत्र</a></h3>
                            <div class="inons">
                                <img src="{{ asset('vendor_assets/img/icon/service6-icon(1).svg ')}}" alt="">
                            </div>
                        </div>
                        <div class="space24"></div>
                        <p class="pera-text">जाति प्रमाण पत्र हेतु आवेदन एवं संबंधित प्रक्रिया में सहायता।</p>
                        <div class="space28"></div>
                        <div class="service6-box-bottom">
                            <a href="javascript:void(0);" class="btn3-home6"> अधिक जानकारी</a>
                            <div class="step-number">01</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service6-box margin-b30">
                        <div class="service6-logos">
                            <h3 class="title"><a href="#">आधार सेवा</a></h3>
                            <div class="inons">
                                <img src="{{ asset('vendor_assets/img/icon/service6-icon(2).svg ')}}" alt="">
                            </div>
                        </div>
                        <div class="space24"></div>
                        <p class="pera-text">आधार से संबंधित विभिन्न सेवाओं एवं आवेदन में<br> सहायता।</p>
                        <div class="space28"></div>
                        <div class="service6-box-bottom">
                            <a href="javascript:void(0);" class="btn3-home6"> अधिक जानकारी</a>
                            <div class="step-number">02</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service6-box margin-b30">
                        <div class="service6-logos">
                            <h3 class="title"><a href="#">पैन कार्ड</a></h3>
                            <div class="inons">
                                <img src="{{ asset('vendor_assets/img/icon/service6-icon(3).svg ')}}" alt="">
                            </div>
                        </div>
                        <div class="space24"></div>
                        <p class="pera-text">पैन कार्ड हेतु आवेदन एवं आवश्यक प्रक्रिया में <br>सहायता।

                        </p>
                        <div class="space28"></div>
                        <div class="service6-box-bottom">
                            <a href="javascript:void(0);" class="btn3-home6"> अधिक जानकारी</a>
                            <div class="step-number">03</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service6-box margin-b30">
                        <div class="service6-logos">
                            <h3 class="title"><a href="#">आय प्रमाण पत्र
                                </a></h3>
                            <div class="inons">
                                <img src="{{ asset('vendor_assets/img/icon/service-inr-icon1.html ')}}" alt="">
                            </div>
                        </div>
                        <div class="space24"></div>
                        <p class="pera-text">आय प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया में सहायता।

                        </p>
                        <div class="space28"></div>
                        <div class="service6-box-bottom">
                            <a href="javascript:void(0);" class="btn3-home6"> अधिक जानकारी</a>
                            <div class="step-number">04</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service6-box margin-b30">
                        <div class="service6-logos">
                            <h3 class="title"><a href="#">निवास प्रमाण पत्र</a></h3>
                            <div class="inons">
                                <img src="{{ asset('vendor_assets/img/icon/service-inr-icon2.svg ')}}" alt="">
                            </div>
                        </div>
                        <div class="space24"></div>
                        <p class="pera-text">निवास प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया में सहायता।
                        </p>
                        <div class="space28"></div>
                        <div class="service6-box-bottom">
                            <a href="javascript:void(0);" class="btn3-home6"> अधिक जानकारी</a>
                            <div class="step-number">05</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="service6-box margin-b30">
                        <div class="service6-logos">
                            <h3 class="title"><a href="#">जन्म प्रमाण पत्र</a></h3>
                            <div class="inons">
                                <img src="{{ asset('vendor_assets/img/icon/service-inr-icon3.svg ')}}" alt="">
                            </div>
                        </div>
                        <div class="space24"></div>
                        <p class="pera-text">जन्म प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया में <br>सहायता।

                        </p>
                        <div class="space28"></div>
                        <div class="service6-box-bottom">
                            <a href="javascript:void(0);" class="btn3-home6"> अधिक जानकारी</a>
                            <div class="step-number">06</div>
                        </div>
                    </div>
                </div>

                {{-- <ul>
            <li><a href="#"><i class="fa-solid fa-angle-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
          </ul> --}}
            </div>
        </div>
    </div>
    </div>
    <!--===== extra  END =======-->
@endsection
