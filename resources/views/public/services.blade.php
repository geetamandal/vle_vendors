@extends('public_layouts.main_layout')
@push('css')
    <style>
        .service-center-area .row {
            row-gap: 25px;
        }

        .service-center-card {
            height: 100%;
            border-radius: 12px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .service-center-image {
            width: 100%;
            height: 190px;
            overflow: hidden;
            background: #fff;
        }

        .service-center-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
        }

        .service-center-content {
            padding: 15px 18px 18px;
        }

        .service-center-content h3 {
            font-size: 19px;
            line-height: 1.4;
            margin: 0 0 8px;
        }

        .service-center-content h3 a {
            text-decoration: none;
        }

        .service-location {
            display: flex;
            align-items: center;
            gap: 7px;
            font-size: 13px;
        }

        .service-location i {
            font-size: 18px;
        }

        .service-divider {
            height: 1px;
            margin: 12px 0;
            background: #e5e5e5;
        }

        .service-center-content h4 {
            font-size: 15px;
            margin: 0 0 10px;
        }

        .service-list {
            padding: 0;
            margin: 0 0 15px;
            list-style: none;
        }

        .service-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .service-list li:last-child {
            margin-bottom: 0;
        }

        .service-list li span {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .service-list li span i {
            font-size: 16px;
        }

        .service-more-btn {
            width: 100%;
            min-height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
        }

        .service-more-btn i {
            font-size: 18px;
        }

        @media (max-width: 575px) {
            .service-center-image {
                height: 210px;
            }
        }
    </style>
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{ __('word.service') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}"> {{ __('word.home') }}</a>
                    </li>
                    <li> {{ __('word.service') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <div class="service-center-area pt-100 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-center-card">

                        <div class="service-center-image">
                            <img src="user_assets/images/projects/service-1.png" alt="VLE Center">
                        </div>

                        <div class="service-center-content">

                            <h3>
                                <a href="#"> {{ __('word.s_center') }}</a>
                            </h3>

                            <div class="service-location">
                                <i class="bx bx-map"></i>
                                <span> {{ __('word.bastar') }}</span>
                            </div>

                            <div class="service-divider"></div>

                            <h4> {{ __('word.a_service') }}</h4>

                            <ul class="service-list">
                                <li>
                                    <span><i class="bx bx-fingerprint"></i></span>
                                    {{ __('word.seva2') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-id-card"></i></span>
                                    {{ __('word.seva3') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-file"></i></span>
                                    {{ __('word.seva1') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-home"></i></span>
                                    {{ __('word.residence_certificate') }}
                                </li>
                            </ul>

                            <a href="{{ url('service-details') }}" class="service-more-btn">
                                {{ __('word.more_info') }}
                                <i class="bx bx-chevron-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-center-card">

                        <div class="service-center-image">
                            <img src="user_assets/images/projects/service-2.png" alt="VLE Center">
                        </div>

                        <div class="service-center-content">

                            <h3>
                                <a href="#"> {{ __('word.online') }}</a>
                            </h3>

                            <div class="service-location">
                                <i class="bx bx-map"></i>
                                <span> {{ __('word.kanker') }}</span>
                            </div>

                            <div class="service-divider"></div>

                            <h4>{{ __('word.a_service') }}</h4>

                            <ul class="service-list">
                                <li>
                                    <span><i class="bx bx-fingerprint"></i></span>
                                    {{ __('word.seva2') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-id-card"></i></span>
                                    {{ __('word.seva3') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-rupee"></i></span>
                                    {{ __('word.income') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-user"></i></span>
                                    {{ __('word.seva1') }}
                                </li>
                            </ul>

                            <a href="#" class="service-more-btn">
                                {{ __('word.more_info') }}
                                <i class="bx bx-chevron-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-center-card">

                        <div class="service-center-image">
                            <img src="user_assets/images/projects/service-3.png" alt="VLE Center">
                        </div>

                        <div class="service-center-content">

                            <h3>
                                <a href="#">{{ __('word.suvidha') }}</a>
                            </h3>

                            <div class="service-location">
                                <i class="bx bx-map"></i>
                                <span> {{ __('word.dantewada') }}</span>
                            </div>

                            <div class="service-divider"></div>

                            <h4>{{ __('word.a_service') }}</h4>

                            <ul class="service-list">
                                <li>
                                    <span><i class="bx bx-id-card"></i></span>
                                    {{ __('word.seva3') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-home"></i></span>
                                    {{ __('word.residence_certificate') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-rupee"></i></span>
                                    {{ __('word.income') }}
                                </li>
                            </ul>

                            <a href="#" class="service-more-btn">
                                {{ __('word.more_info') }}
                                <i class="bx bx-chevron-right"></i>
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="service-center-card">

                        <div class="service-center-image">
                            <img src="user_assets/images/projects/service-4.png" alt="VLE Center">
                        </div>

                        <div class="service-center-content">

                            <h3>
                                <a href="#"> {{ __('word.v_s_center') }}</a>
                            </h3>

                            <div class="service-location">
                                <i class="bx bx-map"></i>
                                <span> {{ __('word.narayanpur') }}</span>
                            </div>

                            <div class="service-divider"></div>

                            <h4>{{ __('word.a_service') }}</h4>

                            <ul class="service-list">
                                <li>
                                    <span><i class="bx bx-fingerprint"></i></span>
                                    {{ __('word.seva2') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-file"></i></span>
                                    {{ __('word.seva4') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-user"></i></span>
                                    {{ __('word.seva1') }}
                                </li>
                                <li>
                                    <span><i class="bx bx-id-card"></i></span>
                                    {{ __('word.seva3') }}
                                </li>
                            </ul>

                            <a href="#" class="service-more-btn">
                                {{ __('word.more_info') }}
                                <i class="bx bx-chevron-right"></i>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
