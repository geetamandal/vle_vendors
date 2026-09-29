@extends('shopkeeper.layout_1.main_layout')
<style>
   /* =========================================
    ORDER SUCCESS AREA
 ========================================= */

.order-success-area {
    padding-top: 70px;
    padding-bottom: 80px;
    background: #f8fbff;
}


/* =========================================
   SUCCESS CARD
========================================= */

.order-success-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 45px 50px;
    text-align: center;
    border: 1px solid #e9eef4;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
}


/* =========================================
   SUCCESS ICON
========================================= */

.success-icon {
    width: 82px;
    height: 82px;
    margin: 0 auto 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eef5ff;
    border: 7px solid #f7faff;
    border-radius: 50%;
    color: #1769aa;
}

.success-icon i {
    font-size: 48px;
}


/* =========================================
   SUCCESS HEADING
========================================= */

.order-success-card h2 {
    margin: 0 0 12px;
    color: #222;
    font-size: 28px;
    font-weight: 700;
}

.success-message {
    max-width: 570px;
    margin: 0 auto;
    color: #777;
    font-size: 14px;
    line-height: 1.8;
}


/* =========================================
   ORDER DETAILS
========================================= */

.order-details {
    margin-top: 30px;
    padding: 5px 20px;
    background: #f8fbff;
    border: 1px solid #e4edf7;
    border-radius: 10px;
}

.order-detail-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 14px 0;
    border-bottom: 1px solid #e5edf5;
    text-align: left;
}

.order-detail-item:last-child {
    border-bottom: none;
}

.order-detail-item span {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #666;
    font-size: 13px;
}

.order-detail-item span i {
    color: #1769aa;
    font-size: 18px;
}

.order-detail-item strong {
    color: #333;
    font-size: 13px;
    font-weight: 600;
}

.order-detail-item:first-child strong {
    color: #1769aa;
}

.order-detail-item.total-item {
    padding-top: 17px;
    padding-bottom: 17px;
}

.order-detail-item.total-item span {
    color: #222;
    font-size: 15px;
    font-weight: 600;
}

.order-detail-item.total-item strong {
    color: #1769aa;
    font-size: 20px;
    font-weight: 700;
}


/* =========================================
   DELIVERY INFO
========================================= */

.delivery-info {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 22px;
    padding: 17px;
    text-align: left;
    background: #f8fbff;
    border: 1px solid #e4edf7;
    border-radius: 9px;
}

.delivery-icon {
    width: 45px;
    height: 45px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eef5ff;
    color: #1769aa;
    border-radius: 50%;
}

.delivery-icon i {
    font-size: 23px;
}

.delivery-info h5 {
    margin: 0 0 4px;
    color: #333;
    font-size: 14px;
    font-weight: 600;
}

.delivery-info p {
    margin: 0;
    color: #777;
    font-size: 12px;
    line-height: 1.6;
}


/* =========================================
   BUTTONS
========================================= */

.success-buttons {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    margin-top: 28px;
}

.continue-shopping-btn,
.view-order-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 7px;
    min-height: 46px;
    padding: 11px 20px;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
}


/* Continue Shopping */

.continue-shopping-btn {
    background: #1769aa;
    color: #fff !important;
    border: 1px solid #1769aa;
}

.continue-shopping-btn:hover {
    background: #0d558d;
    border-color: #0d558d;
    color: #fff !important;
}


/* View Order */

.view-order-btn {
    background: #fff;
    color: #1769aa !important;
    border: 1px solid #1769aa;
}

.view-order-btn:hover {
    background: #1769aa;
    color: #fff !important;
}


/* =========================================
   THANK YOU
========================================= */

.thank-you-text {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    margin-top: 25px;
    color: #888;
    font-size: 12px;
}

.thank-you-text i {
    color: #1769aa;
    font-size: 15px;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991px) {

    .order-success-area {
        padding-top: 60px;
        padding-bottom: 65px;
    }

    .order-success-card {
        padding: 40px 35px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    .order-success-area {
        padding-top: 50px;
        padding-bottom: 55px;
    }

    .order-success-card {
        padding: 32px 20px;
        border-radius: 11px;
    }

    .success-icon {
        width: 72px;
        height: 72px;
    }

    .success-icon i {
        font-size: 40px;
    }

    .order-success-card h2 {
        font-size: 23px;
    }

    .success-message {
        font-size: 13px;
    }

    .order-details {
        padding: 3px 14px;
    }

    .order-detail-item {
        padding: 12px 0;
    }

    .order-detail-item span {
        font-size: 12px;
    }

    .order-detail-item strong {
        font-size: 12px;
    }

    .order-detail-item.total-item strong {
        font-size: 18px;
    }

    .delivery-info {
        align-items: flex-start;
        padding: 14px;
    }

    .success-buttons {
        flex-direction: column;
        width: 100%;
    }

    .continue-shopping-btn,
    .view-order-btn {
        width: 100%;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 480px) {

    .order-success-area {
        padding-top: 45px;
    }

    .order-success-card {
        padding: 28px 15px;
    }

    .order-success-card h2 {
        font-size: 21px;
    }

    .delivery-info h5 {
        font-size: 13px;
    }

    .delivery-info p {
        font-size: 11px;
    }

}
</style>

@section('main_content')

    <!--===== HERO START =======-->
    <div class="vl-hero-inner-area parallaxie"
        style="background-image: url(img/hero/about-us-inr-herothumb.png); background-position: center; background-size: cover; background-repeat: no-repeat;">

        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="inner-hero-info">

                        <h2>ऑर्डर सफल</h2>

                        <div class="space16"></div>

                        <ul>
                            <li>
                                <a href="{{ url('/1/index-1') }}">
                                    होम
                                </a>
                            </li>

                            <li>
                                <img src="{{ asset('vendor_assets/img/icon/arrow-right-inner.html') }}"
                                    alt="">
                            </li>

                            <li>
                                <a class="aboutus_titlefix" href="javascript:void(0);">
                                    ऑर्डर सफल
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--===== HERO END =======-->


    <!--===== ORDER SUCCESS START =======-->

    <div class="order-success-area">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-xl-7 col-lg-8 col-md-10">

                    <div class="order-success-card">

                        <!-- Success Icon -->
                        <div class="success-icon">
                            <i class='bx bx-check'></i>
                        </div>

                        <!-- Heading -->
                        <h2>ऑर्डर सफलतापूर्वक हो गया!</h2>

                        <p class="success-message">
                            आपका ऑर्डर हमें प्राप्त हो गया है।
                            जल्द ही आपका ऑर्डर डिलीवरी के लिए तैयार किया जाएगा।
                        </p>


                        <!-- Order Details -->
                        <div class="order-details">

                            <div class="order-detail-item">

                                <span>
                                    <i class='bx bx-receipt'></i>
                                    ऑर्डर नंबर
                                </span>

                                <strong>
                                    #ORD-10025
                                </strong>

                            </div>


                            <div class="order-detail-item">

                                <span>
                                    <i class='bx bx-calendar'></i>
                                    ऑर्डर की तारीख
                                </span>

                                <strong>
                                    {{ date('d M Y') }}
                                </strong>

                            </div>


                            <div class="order-detail-item">

                                <span>
                                    <i class='bx bx-wallet'></i>
                                    भुगतान का तरीका
                                </span>

                                <strong>
                                    कैश ऑन डिलीवरी
                                </strong>

                            </div>


                            <div class="order-detail-item total-item">

                                <span>
                                    कुल राशि
                                </span>

                                <strong>
                                    ₹1,497
                                </strong>

                            </div>

                        </div>


                        <!-- Delivery Message -->
                        <div class="delivery-info">

                            <div class="delivery-icon">
                                <i class='bx bx-package'></i>
                            </div>

                            <div>
                                <h5>आपका ऑर्डर जल्द पहुंचाया जाएगा</h5>

                                <p>
                                    डिलीवरी के समय आपको भुगतान करना होगा।
                                    ऑर्डर की स्थिति की जानकारी आपको समय-समय पर दी जाएगी।
                                </p>
                            </div>

                        </div>


                        <!-- Buttons -->
                        <div class="success-buttons">

                            <a href="{{ url('/1/product-1') }}"
                                class="continue-shopping-btn">
                                <i class='bx bx-shopping-bag'></i>
                                खरीदारी जारी रखें
                            </a>

                            {{-- <a href="{{ url('/1/') }}"
                                class="view-order-btn">
                                ऑर्डर देखें
                                <i class='bx bx-right-arrow-alt'></i>
                            </a> --}}

                        </div>


                        <!-- Thank You -->
                        <div class="thank-you-text">
                            <i class='bx bx-heart'></i>
                            खरीदारी करने के लिए धन्यवाद!
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--===== ORDER SUCCESS END =======-->

@endsection