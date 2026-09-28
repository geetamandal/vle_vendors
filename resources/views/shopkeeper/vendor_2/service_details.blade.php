@extends('shopkeeper.layout_2.main_layouts')
@push('css')
    <style>
        .service-page {
            
            --sv-muted: #42454b;            
            --sv-surface: #FFFFFF;            
            --ztc-text-text-20-soft: #E8F7EE;
            background: #F6F7FB;
        }

        /* ---------- Main content card ---------- */
        .service-card {
            background: var(--sv-surface);
            border: 1px solid var(--ztc-border-border-1);
            border-radius: 16px;
            padding: 36px;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .04);
        }

        .service-card h2 {
            margin: 0;
            font-size: 30px;
            line-height: 1.35;
            color: var(--sv-ink);
        }

        .service-card .service-lead {
            margin: 14px 0 0;
            font-size: 17px;
            line-height: 1.8;
            color: var(--sv-muted);
        }

        .service-section {
            margin-top: 32px;
            padding-top: 28px;
            border-top: 1px solid var(--ztc-border-border-1);
        }

        .service-section h3 {
            margin: 0 0 12px;
            font-size: 21px;
            color: var(--sv-ink);
        }

        .service-section p {
            margin: 0;
            line-height: 1.85;
            color: var(--sv-muted);
        }

        /* ---------- Help list ---------- */
        .service-list {
            list-style: none;
            margin: 22px 0 0;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
        }

        .service-list li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 0;
            padding: 16px;
            border: 1px solid var(--ztc-border-border-1);
            border-radius: 12px;
            background: #FAFAFC;
            color: var(--sv-ink);
            line-height: 1.6;
        }

        .service-list li::before,
        .service-list li::after {
            content: none;
        }

        .service-list .tick {
            flex: none;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: var(--ztc-text-text-20-soft);
            color: var(--ztc-text-text-20);
            font-size: 12px;
            display: grid;
            place-items: center;
            margin-top: 1px;
        }

        /* ---------- Sidebar ---------- */
        .service-side {
            background: var(--sv-surface);
            border: 1px solid var(--ztc-border-border-1);
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 8px 30px rgba(16, 24, 40, .06);
            position: sticky;
            top: 100px;
        }

        .service-side h3 {
            margin: 0 0 8px;
            font-size: 21px;
            color: var(--sv-ink);
        }

        .service-fact {
            padding: 16px 0;
            border-bottom: 1px solid var(--ztc-border-border-1);
        }

        .service-fact:last-of-type {
            border-bottom: 0;
        }

        .service-fact span {
            display: block;
            margin-bottom: 4px;
            font-size: 13px;
            color: var(--sv-muted);
        }

        .service-fact strong {
            display: block;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;
            color: var(--sv-ink);
        }

        .service-side .btn-home6 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            margin-top: 8px;
            text-align: center;
        }

        @media (max-width: 991px) {
            .service-side {
                position: static;
                margin-top: 30px;
            }
        }

        @media (max-width: 767px) {

            .service-card,
            .service-side {
                padding: 22px 20px;
            }

            .service-card h2 {
                font-size: 24px;
            }

            .service-card .service-lead {
                font-size: 16px;
            }

            .service-list {
                grid-template-columns: 1fr;
            }
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
                        <h2>पौधों की देखभाल एवं विकास</h2>
                        <div class="space16"></div>
                        <ul>
                            <li><a href="{{ url('/2/index-2') }}">होम</a></li>
                            <li><img src="assets/img/icon/arrow-right-inner.html" alt=""></li>
                            <li><a class="aboutus_titlefix" href="#">पौधों की देखभाल एवं विकास</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO END =======-->

    <!--===== SERVICE START =======-->
    <div class="team-details-inner-info sp1 service-page">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8">
                    <div class="service-card">

                        <h2>पौधों की देखभाल एवं विकास</h2>

                        <p class="service-lead">
                            पौधों की बेहतर देखभाल और स्वस्थ विकास के लिए
                            आवश्यक मार्गदर्शन एवं उपयोगी सेवाएँ उपलब्ध कराई जाती हैं।
                            सही देखभाल से पौधों की वृद्धि, गुणवत्ता और उत्पादन क्षमता
                            को बेहतर बनाया जा सकता है।
                        </p>

                        <div class="service-section">
                            <h3>सेवा के बारे में</h3>
                            <p>
                                पौधों की सही वृद्धि के लिए उचित सिंचाई, पोषण, मिट्टी की
                                देखभाल और नियमित निगरानी आवश्यक होती है। स्थानीय विक्रेता
                                एवं VLE के माध्यम से पौधों की देखभाल से संबंधित आवश्यक
                                जानकारी और उपयोगी उत्पाद उपलब्ध कराए जाते हैं।
                            </p>
                        </div>

                        <div class="service-section">
                            <h3>हमारी सहायता</h3>
                            <p>
                                पौधों की देखभाल के लिए उचित पानी, जैविक खाद, मिट्टी की
                                गुणवत्ता और पौधों की नियमित देखभाल से संबंधित मार्गदर्शन
                                उपलब्ध कराया जाता है।
                            </p>

                            <ul class="service-list">
                                <li>
                                    <span class="tick"><i class="fa-solid fa-check"></i></span>
                                    पौधों की नियमित देखभाल से संबंधित मार्गदर्शन
                                </li>
                                <li>
                                    <span class="tick"><i class="fa-solid fa-check"></i></span>
                                    जैविक खाद एवं पोषण संबंधी जानकारी
                                </li>
                                <li>
                                    <span class="tick"><i class="fa-solid fa-check"></i></span>
                                    पौधों की स्वस्थ वृद्धि के लिए उपयोगी सुझाव
                                </li>
                                <li>
                                    <span class="tick"><i class="fa-solid fa-check"></i></span>
                                    स्थानीय स्तर पर आवश्यक उत्पादों की उपलब्धता
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">
                    <div class="service-side">

                        <h3>सेवा जानकारी</h3>

                        <div class="service-fact">
                            <span>सेवा</span>
                            <strong>पौधों की देखभाल एवं विकास</strong>
                        </div>

                        <div class="service-fact">
                            <span>उपलब्धता</span>
                            <strong>स्थानीय विक्रेता एवं VLE</strong>
                        </div>

                        <div class="service-fact">
                            <span>श्रेणी</span>
                            <strong>जैविक खेती एवं पौधों की देखभाल</strong>
                        </div>

                        <a href="{{ url('2/product-2') }}" class="btn-home6">
                            उत्पाद देखें
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--===== SERVICE END =======-->
@endsection