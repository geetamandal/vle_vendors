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
                            आपके गांव का अपना डिजिटल उद्यमी
                        </h1>

                        <p class="wow animate__animated animate__fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                            Village Level Entrepreneur के साथ सरकारी सेवाओं, ऑनलाइन आवेदन और डिजिटल सुविधाओं का लाभ अपने
                            गांव में ही उठाएं। स्थानीय उत्पादों और बस्तर की पहचान को भी डिजिटल बाजार से जोड़ें।
                        </p>

                        <div class="banner-btn wow animate__animated animate__fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1000ms">
                            <a href="{{ url('about') }}" class="default-btn border-radius-5">अधिक जानें</a>
                            <a href="{{ url('contact') }}" class="default-btn two border-radius-5">संपर्क करें</a>
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
                <span class="sp-title">हमारी विशेषताएं</span>
                <h2>VLE के साथ गांव में डिजिटल सुविधाएं</h2>
            </div>

            <div class="row pt-45 justify-content-center">

                <div class="col-lg-4 col-sm-6">
                    <div class="why-card">
                        <h3>डिजिटल एवं नागरिक सेवाएं</h3>
                        <p>
                            आधार, पैन कार्ड, जन्म प्रमाण पत्र, विभिन्न ऑनलाइन आवेदन और अन्य जरूरी डिजिटल सेवाओं का लाभ अपने
                            गांव में ही प्राप्त करें।
                        </p>
                        <i class='flaticon-customer-service'></i>
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="why-card">
                        <h3>स्थानीय उत्पादों को बाजार</h3>
                        <p>
                            बस्तर के हस्तशिल्प, स्थानीय उत्पादों और ग्रामीण उद्यमों को डिजिटल प्लेटफॉर्म के माध्यम से नए
                            ग्राहकों और बाजार से जोड़ें।
                        </p>
                        <i class='flaticon-document'></i>
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="why-card">
                        <h3>गांव में स्वरोजगार</h3>
                        <p>
                            VLE के रूप में अपने गांव में सेवाएं प्रदान करें, स्थानीय जरूरतों को पूरा करें और अपने व्यवसाय को
                            आगे बढ़ाने के अवसर प्राप्त करें।
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
                            <span class="sp-title">हमारे बारे में</span>
                            <h2>VLE के साथ सेवाओं और रोजगार की नई शुरुआत</h2>
                        </div>

                        <div class="content">
                            <h3><a href="how-works.html">अपने गांव में VLE के रूप में जुड़ें</a></h3>
                            <p>
                                Village Level Entrepreneur के रूप में अपने गांव में डिजिटल एवं नागरिक सेवाएं प्रदान करें और
                                लोगों को उनके जरूरी ऑनलाइन कार्यों में सहायता दें।
                            </p>
                            <div class="number">1</div>
                        </div>

                        <div class="content">
                            <h3><a href="how-works.html">डिजिटल सेवाएं प्रदान करें</a></h3>
                            <p>
                                आधार, पैन कार्ड, प्रमाण पत्र, ऑनलाइन आवेदन एवं अन्य आवश्यक सेवाएं उपलब्ध कराकर ग्रामीण
                                नागरिकों की सुविधा बढ़ाएं।
                            </p>
                            <div class="number">2</div>
                        </div>

                        <div class="content">
                            <h3><a href="how-works.html">स्थानीय उत्पादों को बाजार से जोड़ें</a></h3>
                            <p>
                                बस्तर के हस्तशिल्प, स्थानीय उत्पादों और ग्रामीण व्यवसायों को डिजिटल प्लेटफॉर्म के माध्यम से
                                ग्राहकों तक पहुंचाएं और रोजगार एवं आय के अवसर बढ़ाएं।
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
                <span class="sp-title">VLE सूची</span>
                <h2>अपने नजदीकी VLE केंद्र खोजें</h2>
            </div>

            <div class="project-slider owl-carousel owl-theme pt-45">

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-1.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">बस्तर डिजिटल सेवा केंद्र</a></h3>
                        <p>
                            <strong>उपलब्ध सेवाएं:</strong>
                            आधार सेवा, पैन कार्ड, जन्म प्रमाण पत्र, निवास प्रमाण पत्र
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-2.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">मां दंतेश्वरी ऑनलाइन सेंटर</a></h3>
                        <p>
                            <strong>उपलब्ध सेवाएं:</strong>
                            आधार सेवा, आय प्रमाण पत्र, जाति प्रमाण पत्र
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-3.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">बस्तर डिजिटल सुविधा केंद्र</a></h3>
                        <p>
                            <strong>उपलब्ध सेवाएं:</strong>
                            पैन कार्ड, निवास प्रमाण पत्र, आय प्रमाण पत्र
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-4.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">ग्राम सेवा केंद्र</a></h3>
                        <p>
                            <strong>उपलब्ध सेवाएं:</strong>
                            आधार सेवा, जन्म प्रमाण पत्र, जाति प्रमाण पत्र, पैन कार्ड
                        </p>
                    </div>
                </div>

                <div class="project-item">
                    <a href="#">
                        <img src="user_assets/images/projects/service-5.png" alt="VLE Center">
                    </a>
                    <div class="content">
                        <h3><a href="#">बस्तर ऑनलाइन सेवा केंद्र</a></h3>
                        <p>
                            <strong>उपलब्ध सेवाएं:</strong>
                            जन्म प्रमाण पत्र, निवास प्रमाण पत्र, आय प्रमाण पत्र
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Project Area End -->    
@endsection
