@extends('shopkeeper.layout_2.main_layouts')

@push('css')
    <style>
        .otp-login-box {
            padding: 40px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .otp-login-box h2 {
            margin-bottom: 10px;
        }

        .otp-login-box .pera_text {
            color: #666;
        }

        .otp-form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
        }

        .otp-form-group input {
            width: 100%;
            height: 55px;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 0 15px;
            outline: none;
        }

        .otp-form-group input:focus {
            border-color: #6366F1;
        }

        .otp-input {
            letter-spacing: 8px;
            text-align: center;
            font-size: 20px;
            font-weight: 600;
        }

        .otp-login-image img {
            width: 100%;
            border-radius: 20px;
        }

        .resend-otp {
            display: inline-block;
            margin-top: 12px;
            color: #6366F1;
            font-weight: 500;
            text-decoration: none;
        }
    </style>
@endpush

@section('main_content')
    <!--===== HERO START =======-->
    <div class="vl-hero-inner-area parallaxie" style="background-image:url(assets/img/hero/about-us-inr-herothumb.png)">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="inner-hero-info">

                        <h2>लॉग इन</h2>

                        <div class="space16"></div>

                        <ul>
                            <li>
                                <a href="{{ url('/2/index-2') }}">होम</a>
                            </li>

                            <li>
                                <img src="assets/img/icon/arrow-right-inner.html" alt="">
                            </li>

                            <li>
                                <a class="aboutus_titlefix" href="#">
                                    लॉग इन
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO END =======-->


    <!--===== LOGIN AREA START =======-->
    <div class="vl-contact-inr-area sp1">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-6"></div>
                <div class="col-xl-6 col-lg-6">
                    <div class="otp-login-box">

                        <h2>विक्रेता लॉग इन</h2>

                        <div class="space16"></div>

                        <p class="pera_text">
                            अपने मोबाइल नंबर से लॉग इन करें। आपके मोबाइल नंबर पर
                            OTP भेजा जाएगा।
                        </p>

                        <div class="space32"></div>

                        <form action="#">

                            <div class="otp-form-group">
                                <label>मोबाइल नंबर</label>

                                <input type="text" placeholder="10 अंकों का मोबाइल नंबर दर्ज करें" maxlength="10">
                            </div>

                            <div class="space24"></div>

                            <button type="button" class="btn-home6">
                                OTP भेजें
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>

                            <div class="space24"></div>

                            <div class="otp-form-group">
                                <label>OTP दर्ज करें</label>

                                <input type="text" class="otp-input" placeholder="------" maxlength="6" disabled>
                            </div>

                            <a href="#" class="resend-otp">
                                OTP दोबारा भेजें
                            </a>

                            <div class="space24"></div>

                            <button type="button" class="btn-home6">
                                लॉग इन करें
                                <i class="fa-solid fa-arrow-right"></i>
                            </button>

                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--===== LOGIN AREA END =======-->
@endsection
