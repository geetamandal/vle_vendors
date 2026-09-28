@extends('public_layouts.main_layout')
@push('css')
    <style>
    .vle-profile-area {
        background: #fff;
    }

    /* Image */
    .vle-image-card {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
    }

    .vle-image-card img {
        width: 100%;
        height: 550px;
        display: block;
        object-fit: cover;
        transition: transform .5s ease;
    }

    .vle-image-card:hover img {
        transform: scale(1.03);
    }


    /* Verified Badge */
    .vle-image-overlay {
        position: absolute;
        left: 22px;
        bottom: 22px;
        z-index: 2;
    }

    .vle-image-overlay span {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        padding: 9px 15px;
        background: #fff;
        color: #F85F0A;
        border-radius: 6px;
        font-size: 13px;
        font-weight: 600;
        box-shadow: 0 6px 20px rgba(0, 0, 0, .12);
    }

    .vle-image-overlay i {
        color: #F85F0A;
        font-size: 17px;
    }


    /* Details */
    .vle-details {
        padding-left: 20px;
    }


    /* Heading */
    .vle-heading {
        margin-bottom: 25px;
    }

    .vle-label {
        display: inline-block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 8px;

        color: #F85F0A;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .vle-label::before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 25px;
        height: 2px;
        background: #F85F0A;
        transform: translateY(-50%);
    }

    .vle-heading h2 {
        margin: 0 0 10px;
        color: #202020;
        font-size: 32px;
        line-height: 1.3;
        font-weight: 700;
    }

    .vle-heading p {
        margin: 0;
        color: #666;
        font-size: 14px;
        line-height: 1.8;
    }


    /* Info Cards */
    .vle-info-card {
        height: 100%;
        min-height: 105px;

        display: flex;
        align-items: center;
        gap: 14px;

        padding: 17px;

        background: #fff;
        border: 1px solid #eeeeee;
        border-radius: 9px;

        transition: all .3s ease;
    }

    .vle-info-card:hover {
        border-color: rgba(248, 95, 10, .35);
        box-shadow: 0 8px 25px rgba(248, 95, 10, .10);
        transform: translateY(-3px);
    }

    /* Icon */
    .vle-icon {
        width: 46px;
        height: 46px;
        min-width: 46px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: rgba(248, 95, 10, .08);
        color: #F85F0A;
        border-radius: 50%;
    }

    .vle-icon i {
        color: #F85F0A;
        font-size: 20px;
    }

    /* Info Text */
    .vle-info {
        min-width: 0;
    }

    .vle-info span {
        display: block;
        margin-bottom: 4px;

        color: #999;
        font-size: 10px;
        font-weight: 600;
        letter-spacing: .6px;
        text-transform: uppercase;
    }

    .vle-info h4 {
        margin: 0;

        color: #252525;
        font-size: 14px;
        line-height: 1.5;
        font-weight: 600;

        word-break: break-word;
    }


    /* Responsive */
    @media (max-width: 991px) {

        .vle-details {
            padding-left: 0;
        }

        .vle-image-card img {
            height: 450px;
        }

        .vle-heading h2 {
            font-size: 28px;
        }
    }

    @media (max-width: 575px) {

        .vle-image-card img {
            height: 350px;
        }

        .vle-heading h2 {
            font-size: 24px;
        }

        .vle-info-card {
            min-height: auto;
            padding: 13px;
        }

        .vle-icon {
            width: 40px;
            height: 40px;
            min-width: 40px;
        }

        .vle-info h4 {
            font-size: 13px;
        }

        .vle-footer {
            font-size: 12px;
        }
    }

    /* service  */
      .service-document {
            font-size: 13px;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .service-document strong {
            display: block;
            margin-bottom: 4px;
            font-size: 14px;
        }

        .services-card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .services-card .service-document {
            min-height: 65px;
        }

        .services-card .read-btn {
            margin-top: auto;
        }

        .services-card .top {
            margin-top: auto;
        }

        .services-area .row>[class*="col-"] {
            display: flex;
            margin-bottom: 30px;
        }

        .services-area .services-card {
            width: 100%;
        }


</style>
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg2">
        <div class="container">
            <div class="inner-title text-center">
                <h3>सेवा केंद्र विवरण</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li>सेवा केंद्र विवरण</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <!-- Blog Area -->
    <div class="blog-area pt-40 vle-profile-area">
        <div class="container">
            <div class="row align-items-center g-4 pt-45">

                <!-- VLE Image -->
                <div class="col-lg-6">
                    <div class="vle-image-card">

                        <img src="user_assets/images/projects/service-1.png" alt="VLE Center">

                        <div class="vle-image-overlay">
                            <span>
                                <i class="bx bx-check-circle"></i>
                                Verified VLE Center
                            </span>
                        </div>

                    </div>
                </div>

                <!-- VLE Details -->
                <div class="col-lg-6">
                    <div class="vle-details">

                        <div class="vle-heading">

                            <span class="vle-label">
                                VLE CENTER
                            </span>

                            <h2>
                                बस्तर डिजिटल सेवा केंद्र
                            </h2>

                            <p>
                                आपके क्षेत्र में उपलब्ध डिजिटल एवं नागरिक सेवा केंद्र
                            </p>

                        </div>


                        <div class="row g-3">

                            <!-- Shop Name -->
                            <div class="col-sm-6">
                                <div class="vle-info-card">

                                    <div class="vle-icon">
                                        <i class="flaticon-user"></i>
                                    </div>

                                    <div class="vle-info">
                                        <span>Shop Name</span>
                                        <h4>बस्तर डिजिटल सेवा केंद्र</h4>
                                    </div>

                                </div>
                            </div>


                            <!-- Location -->
                            <div class="col-sm-6">
                                <div class="vle-info-card">

                                    <div class="vle-icon">
                                        <i class="flaticon-customer-service"></i>
                                    </div>

                                    <div class="vle-info">
                                        <span>Location</span>
                                        <h4>जगदलपुर, बस्तर</h4>
                                    </div>

                                </div>
                            </div>


                            <!-- Block & Village -->
                            <div class="col-sm-6">
                                <div class="vle-info-card">

                                    <div class="vle-icon">
                                        <i class="flaticon-document"></i>
                                    </div>

                                    <div class="vle-info">
                                        <span>Block & Village</span>
                                        <h4>Bakawand, Bakawand</h4>
                                    </div>

                                </div>
                            </div>


                            <!-- Shop Address -->
                            <div class="col-sm-6">
                                <div class="vle-info-card">

                                    <div class="vle-icon">
                                        <i class="flaticon-wall-clock"></i>
                                    </div>

                                    <div class="vle-info">
                                        <span>Shop Address</span>
                                        <h4>Main Market Road, Bakawand, Bastar</h4>
                                    </div>

                                </div>
                            </div>

                        </div>                       
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog Area End -->


<div class="services-area" style="margin-top: 20px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="service-icon">
                            <i class='flaticon-vector'></i>
                        </div>

                        <h3>जाति प्रमाण पत्र</h3>

                        <p>
                            जाति प्रमाण पत्र हेतु आवेदन एवं संबंधित प्रक्रिया में सहायता।
                        </p>

                        <div class="service-document">
                            <strong>आवश्यक दस्तावेज़:</strong>
                            आधार कार्ड, निवास प्रमाण, पासपोर्ट साइज फोटो
                        </div>

                        <a href="#" class="read-btn">
                           जानकारी हेतु संपर्क करें
                        </a>

                        <div class="top">
                            <img src="user_assets/images/services/services-top.png" alt="Images">
                            <img src="user_assets/images/services/services-top2.png" alt="Images">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="service-icon">
                            <i class='flaticon-project-management'></i>
                        </div>

                        <h3>जन्म प्रमाण पत्र</h3>

                        <p>
                            जन्म प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया में सहायता।
                        </p>

                        <div class="service-document">
                            <strong>आवश्यक दस्तावेज़:</strong>
                            आधार कार्ड, अस्पताल/स्कूल रिकॉर्ड, माता-पिता का पहचान पत्र
                        </div>

                        <a href="#" class="read-btn">
                            जानकारी हेतु संपर्क करें
                        </a>

                        <div class="top">
                            <img src="user_assets/images/services/services-top.png" alt="Images">
                            <img src="user_assets/images/services/services-top2.png" alt="Images">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="service-icon">
                            <i class='flaticon-digital-marketing'></i>
                        </div>

                        <h3>आधार सेवा</h3>

                        <p>
                            आधार से संबंधित विभिन्न सेवाओं एवं आवेदन में सहायता।
                        </p>

                        <div class="service-document">
                            <strong>आवश्यक दस्तावेज़:</strong>
                            आधार कार्ड, मोबाइल नंबर
                        </div>

                        <a href="#" class="read-btn">
                            जानकारी हेतु संपर्क करें
                        </a>

                        <div class="top">
                            <img src="user_assets/images/services/services-top.png" alt="Images">
                            <img src="user_assets/images/services/services-top2.png" alt="Images">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="service-icon">
                            <i class='flaticon-content'></i>
                        </div>

                        <h3>पैन कार्ड</h3>

                        <p>
                            पैन कार्ड हेतु आवेदन एवं आवश्यक प्रक्रिया में सहायता।
                        </p>

                        <div class="service-document">
                            <strong>आवश्यक दस्तावेज़:</strong>
                            आधार कार्ड, पासपोर्ट साइज फोटो, हस्ताक्षर
                        </div>

                        <a href="#" class="read-btn">
                            जानकारी हेतु संपर्क करें
                        </a>

                        <div class="top">
                            <img src="user_assets/images/services/services-top.png" alt="Images">
                            <img src="user_assets/images/services/services-top2.png" alt="Images">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="service-icon">
                            <i class='flaticon-open-book'></i>
                        </div>

                        <h3>निवास प्रमाण पत्र</h3>

                        <p>
                            निवास प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया में सहायता।
                        </p>

                        <div class="service-document">
                            <strong>आवश्यक दस्तावेज़:</strong>
                            आधार कार्ड, पता प्रमाण, पासपोर्ट साइज फोटो
                        </div>

                        <a href="#" class="read-btn">
                            जानकारी हेतु संपर्क करें
                        </a>

                        <div class="top">
                            <img src="user_assets/images/services/services-top.png" alt="Images">
                            <img src="user_assets/images/services/services-top2.png" alt="Images">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="services-card">
                        <div class="service-icon">
                            <i class='flaticon-operator'></i>
                        </div>

                        <h3>आय प्रमाण पत्र</h3>

                        <p>
                            आय प्रमाण पत्र हेतु आवेदन एवं आवश्यक प्रक्रिया में सहायता।
                        </p>

                        <div class="service-document">
                            <strong>आवश्यक दस्तावेज़:</strong>
                            आधार कार्ड, आय प्रमाण, निवास प्रमाण
                        </div>

                        <a href="#" class="read-btn">
                            जानकारी हेतु संपर्क करें
                        </a>

                        <div class="top">
                            <img src="user_assets/images/services/services-top.png" alt="Images">
                            <img src="user_assets/images/services/services-top2.png" alt="Images">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    
@endsection
