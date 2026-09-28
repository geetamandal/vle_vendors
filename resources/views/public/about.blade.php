@extends('public_layouts.main_layout')
@push('css')
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title text-center">
                <h3> हमारे बारे में</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li> हमारे बारे में</li>
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

                            <span class="sp-title">हमारे बारे में</span>

                            <h2>
                                आपकी शासकीय सेवाएँ, अब और भी आसान
                            </h2>

                            <p>
                                हमारा उद्देश्य नागरिकों को विभिन्न शासकीय एवं डिजिटल सेवाओं
                                का लाभ सरल, सुविधाजनक और सुरक्षित तरीके से उपलब्ध कराना है।
                                इस पोर्टल के माध्यम से नागरिकों को आवश्यक दस्तावेज एवं
                                प्रमाण-पत्र संबंधी सेवाओं के लिए एक ही स्थान पर सहायता प्रदान
                                की जाती है।
                            </p>

                        </div>

                        <ul class="about-list">

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                जाति प्रमाण-पत्र संबंधी सेवाएँ
                            </li>

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                आधार कार्ड एवं आधार संबंधी सेवाएँ
                            </li>

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                आय एवं निवास प्रमाण-पत्र संबंधी सेवाएँ
                            </li>

                            <li>
                                <i class='flaticon-arrow-pointing-to-right'></i>
                                विभिन्न शासकीय एवं डिजिटल सेवाओं की सुविधा
                            </li>

                        </ul>

                        <a href="{{ url('/service') }}" class="default-btn border-radius-5">
                            हमारी सेवाएँ  
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
                        <span class="sp-title">हमारी सेवाएं</span>
                        <h2>हम आपके लिए विभिन्न शासकीय सेवाएं प्रदान करते हैं</h2>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-btn">
                        <a href="service-details.html" class="default-btn border-radius-5">अधिक जानकारी</a>
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
                            <a href="service-details.html">जाति प्रमाण पत्र</a>
                        </h3>
                        <p>
                            जाति प्रमाण पत्र हेतु ऑनलाइन आवेदन एवं आवश्यक प्रक्रिया में सहायता प्राप्त करें।

                        </p>
                        <a href="service-details.html" class="read-btn">अधिक जानकारी</a>
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
                            <a href="service-details.html">आधार सेवा</a>
                        </h3>
                        <p>
                            आधार कार्ड से संबंधित विभिन्न सेवाओं एवं आवश्यक प्रक्रियाओं की सुविधा प्राप्त करें।

                        </p>
                        <a href="service-details.html" class="read-btn">अधिक जानकारी</a>
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
                            <a href="service-details.html">पैन कार्ड</a>
                        </h3>
                        <p>
                            पैन कार्ड के लिए आवेदन एवं संबंधित आवश्यक दस्तावेजों की जानकारी प्राप्त करें।

                        </p>
                        <a href="service-details.html" class="read-btn">अधिक जानकारी</a>
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
                            <a href="service-details.html">जन्म प्रमाण पत्र</a>
                        </h3>
                        <p>
                            जन्म प्रमाण पत्र बनवाने एवं आवेदन प्रक्रिया से संबंधित आवश्यक सहायता प्राप्त करें।

                        </p>
                        <a href="service-details.html" class="read-btn">अधिक जानकारी</a>
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
