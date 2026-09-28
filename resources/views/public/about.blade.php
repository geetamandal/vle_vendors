@extends('public_layouts.main_layout')
@push('css')
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title text-center">
                <h3>  {{ __('word.about') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}"> {{ __('word.home') }}</a>
                    </li>
                    <li>  {{ __('word.about') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- About Area -->
    <div class="about-area about-mt">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('user_assets/images/about-img/ab2.png ') }}" alt="About Images">
                        <div class="line">
                            <img src="{{ asset('user_assets/images/about-img/about-line.png ') }}" alt="About Images">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content pl-20">
                        <div class="section-title">

                            <span class="sp-title"> {{ __('word.about') }}</span>

                            <h2>
                                {{ __('word.about') }}
                            </h2>

                            <p>
                                 {{ __('word.about_p') }}
                               
                            </p>

                        </div>

                        <ul class="about-list">

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                {{ __('word.about_s1') }}
                            </li>

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                 {{ __('word.about_s2') }}
                            </li>

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                {{ __('word.about_s3') }}
                            </li>

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                {{ __('word.about_s4') }}
                            </li>

                        </ul>

                        <a href="{{ url('/service') }}" class="default-btn border-radius-5">
                            {{ __('word.our_service') }} 
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Services Area -->
    <div class="services-area services-area-bg pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <span class="sp-title"> {{ __('word.our_service') }} </span>
                        <h2>{{ __('word.service_title') }} </h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-btn">
                        <a href="service-details.html" class="default-btn border-radius-5">{{ __('word.adhik_ankari') }}</a>
                    </div>
                </div>
            </div>

            <div class="services-slider owl-carousel owl-theme align-items-center">
                <div class="services-item services-bg1">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-project-management'></i>
                        </div>
                        <h3>
                            {{ __('word.seva1') }}
                        </h3>
                        <p>
                           {{ __('word.caste_d') }}

                        </p>
                        <a href="service-details.html" class="read-btn">{{ __('word.adhik_ankari') }}</a>
                        <div class="top">
                            <img src="{{ asset('user_assets/images/services/services-top.png ') }}" alt="Images">
                        </div>
                    </div>


                </div>

                <div class="services-item services-bg2">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-vector'></i>
                        </div>
                        <h3>
                            {{ __('word.seva2') }}
                        </h3>
                        <p>
                            {{ __('word.addhar_d') }}

                        </p>
                        <a href="service-details.html" class="read-btn">{{ __('word.adhik_ankari') }}</a>
                        <div class="top">
                            <img src="{{ asset('user_assets/images/services/services-top.png ') }}" alt="Images">
                        </div>
                    </div>


                </div>

                <div class="services-item services-bg3">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-digital-marketing'></i>
                        </div>
                        <h3>
                            {{ __('word.seva3') }}
                        </h3>
                        <p>
                           {{ __('word.pan_d') }}

                        </p>
                        <a href="service-details.html" class="read-btn">{{ __('word.adhik_ankari') }}</a>
                        <div class="top">
                            <img src="{{ asset('user_assets/images/services/services-top.png ') }}" alt="Images">
                        </div>
                    </div>


                </div>

                <div class="services-item services-bg4">
                    <div class="content">
                        <div class="service-icon">
                            <i class='flaticon-content'></i>
                        </div>
                        <h3>
                            {{ __('word.seva4') }}
                        </h3>
                        <p>
                           {{ __('word.birth') }}

                        </p>
                        <a href="service-details.html" class="read-btn"> {{ __('word.adhik_ankari') }}</a>
                        <div class="top">
                            <img src="{{ asset('user_assets/images/services/services-top.png ') }}" alt="Images">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

    <!-- Project Area -->
    {{-- <div class="project-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-title">Project</span>
                    <h2>Our Recent Project Case</h2>
                </div>

                <div class="project-slider owl-carousel owl-theme pt-45">
                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="{{ asset('user_assets/images/projects/project-img1.jpg ')}}" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Project Management</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="{{ asset('user_assets/images/projects/project-img2.jpg ')}}" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Media Marketing</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="{{ asset('user_assets/images/projects/project-img3.jpg ')}}" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Book Keeping</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="{{ asset('user_assets/images/projects/project-img4.jpg ')}}" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Technology Service</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>

                    <div class="project-item">
                        <a href="project-details.html">
                            <img src="{{ asset('user_assets/images/projects/project-img5.jpg ')}}" alt="Project Images">
                        </a>
                        <div class="content">
                            <h3><a href="project-details.html">Data Entry </a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- Project Area End -->
@endsection
@push('js')
@endpush
