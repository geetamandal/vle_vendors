@extends('public_layouts.main_layout')
@push('css')
<link rel="stylesheet" href="{{ asset('user_assets/css/pages/landing.css') }}">
@endpush
@section('main_content')
    <!-- Banner Area Three -->
    <div class="banner-area-three">
        <div class="container-fluid">
            <div class="row align-items-center justify-align-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <h1 class="wow animate__animated animate__fadeInDown" data-wow-delay="00ms" data-wow-duration="1000ms">
                            {{ __('word.banner_title') }}
                        </h1>

                        <p class="wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                            {{ __('word.banner_description') }}
                        </p>

                        <div class="banner-btn wow animate__animated animate__fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1000ms">
                            <a href="{{ url('about') }}" class="default-btn border-radius-5"> {{ __('word.read_more') }}</a>
                            <a href="{{ url('contact') }}" class="default-btn two border-radius-5"> {{ __('word.contact_kare') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pe-0">
                    <div class="banner-img-three wow animate__animated animate__fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1000ms" data-speed="0.08">
                        <img src="user_assets/images/home-three/banner.png" alt="Banner Images">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area Three End -->

    <!-- Why Area -->
    <div class="why-area pt-40 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-title"> {{ __('word.features') }}</span>
                <h2>{{ __('word.h2_1') }}</h2>
            </div>

            <div class="row pt-45 justify-content-center">

                <div class="col-lg-4 col-sm-6">
                    <div class="why-card">
                        <h3>{{ __('word.feature_h1') }}</h3>
                        <p>
                            {{ __('word.feature_d1') }}
                        </p>
                        <i class='flaticon-customer-service'></i>
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="why-card">
                        <h3>{{ __('word.feature_h2') }}</h3>
                        <p>
                           {{ __('word.feature_d2') }}
                        </p>
                        <i class='flaticon-document'></i>
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="why-card">
                        <h3>{{ __('word.feature_h3') }}</h3>
                        <p>
                           {{ __('word.feature_d3') }}
                        </p>
                        <i class='flaticon-user'></i>
                        <div class="circle"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Why Area Three End -->

    <!-- Work Area -->
    <div class="work-area-two pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="work-img-three">
                        <img src="user_assets/images/work-img/about.png" alt="Work Images">
                        <div class="line">
                            <img src="user_assets/images/work-img/work-line2.png" alt="Work Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="work-content pl-20">
                        <div class="section-title">
                            <span class="sp-title"> {{ __('word.about') }}</span>
                            <h2>{{ __('word.h2_2') }}</h2>
                        </div>

                        <div class="content">
                            <h3>{{ __('word.work_h1') }}</h3>
                            <p>
                               {{ __('word.work_d1') }}
                            </p>
                            <div class="number">1</div>
                        </div>

                        <div class="content">
                            <h3>{{ __('word.work_h2') }}</h3>
                            <p>
                               {{ __('word.work_d2') }}
                            </p>
                            <div class="number">2</div>
                        </div>

                        <div class="content">
                            <h3>{{ __('word.work_h3') }}</h3>
                            <p>
                                {{ __('word.work_d3') }}
                            </p>
                            <div class="number">3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Area Two End -->

    <!-- Project Area -->
    <div class="project-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-title"> {{ __('word.vle_suchi') }}</span>
                <h2>{{  __('word.vle_suchi_h')}}</h2>
            </div>

            <div class="project-slider owl-carousel owl-theme pt-45">

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-1.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">{{  __('word.s_center')}}</a></h3>
                        <p>
                            <strong> {{ __('word.a_service') }}:</strong>
                            आधार सेवा, पैन कार्ड, जन्म प्रमाण पत्र, निवास प्रमाण पत्र
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-2.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">{{  __('word.online')}}</a></h3>
                        <p>
                            <strong> {{ __('word.a_service') }}:</strong>
                            आधार सेवा, आय प्रमाण पत्र, जाति प्रमाण पत्र
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-3.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">{{  __('word.suvidha')}}</a></h3>
                        <p>
                            <strong> {{ __('word.a_service') }}:</strong>
                            पैन कार्ड, निवास प्रमाण पत्र, आय प्रमाण पत्र
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-4.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">{{  __('word.v_s_center')}}</a></h3>
                        <p>
                            <strong> {{ __('word.a_service') }}:</strong>
                            आधार सेवा, जन्म प्रमाण पत्र, जाति प्रमाण पत्र, पैन कार्ड
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-5.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">{{  __('word.b_on_seva')}}</a></h3>
                        <p>
                            <strong> {{ __('word.a_service') }}:</strong>
                            जन्म प्रमाण पत्र, निवास प्रमाण पत्र, आय प्रमाण पत्र
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Project Area End -->    
@endsection
