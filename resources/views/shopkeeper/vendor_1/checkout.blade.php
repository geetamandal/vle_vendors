@extends('shopkeeper.layout_1.main_layout')
<style>
    /* =========================================
   CHECKOUT AREA
========================================= */

    .checkout-area {
        padding-top: 70px !important;
        padding-bottom: 80px !important;
    }


    /* =========================================
   CHECKOUT BOX
========================================= */

    .checkout-box {
        background: #ffffff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
        border: 1px solid #edf1f5;
    }


    /* =========================================
   CHECKOUT HEADER
========================================= */

    .checkout-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding-bottom: 22px;
        margin-bottom: 25px;
        border-bottom: 1px solid #edf1f5;
    }

    .checkout-header h3 {
        margin: 0 0 6px;
        font-size: 24px;
        font-weight: 600;
        color: #222;
    }

    .checkout-header p {
        margin: 0;
        font-size: 14px;
        color: #777;
    }


    /* =========================================
   CHECKOUT STEP
========================================= */

    .checkout-step {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 14px;
        background: #eef5ff;
        color: #1769aa;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
        white-space: nowrap;
    }

    .checkout-step span {
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #1769aa;
        color: #fff;
        border-radius: 50%;
        font-size: 12px;
    }


    /* =========================================
   CHECKOUT SECTION
========================================= */

    .checkout-section {
        padding: 24px 0;
        border-bottom: 1px solid #edf1f5;
    }

    .checkout-section:first-of-type {
        padding-top: 0;
    }

    .checkout-section:last-of-type {
        border-bottom: none;
    }


    /* =========================================
   SECTION HEADING
========================================= */

    .checkout-section h5 {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 20px;
        font-size: 17px;
        font-weight: 600;
        color: #222;
    }

    .checkout-section h5 i {
        width: 34px;
        height: 34px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef5ff;
        color: #1769aa;
        border-radius: 7px;
        font-size: 18px;
    }


    /* =========================================
   FORM LABEL
========================================= */

    .checkout-section label {
        display: block;
        margin-bottom: 7px;
        font-size: 13px;
        font-weight: 600;
        color: #333;
    }

    .checkout-section label span {
        color: #dc3545;
    }


    /* =========================================
   FORM INPUT
========================================= */

    .checkout-section .form-control,
    .checkout-section .form-select {
        width: 100%;
        min-height: 48px;
        padding: 11px 14px;
        border: 1px solid #dfe5eb;
        border-radius: 7px;
        background: #fff;
        color: #333;
        font-size: 14px;
        outline: none;
        box-shadow: none;
        transition: all 0.25s ease;
    }

    .checkout-section textarea.form-control {
        min-height: 110px;
        resize: vertical;
    }

    .checkout-section .form-control::placeholder {
        color: #a5a5a5;
        font-size: 13px;
    }

    .checkout-section .form-control:focus,
    .checkout-section .form-select:focus {
        border-color: #1769aa;
        box-shadow: 0 0 0 3px rgba(23, 105, 170, 0.08);
    }


    /* =========================================
   VALIDATION ERROR
========================================= */

    .checkout-section small.text-danger {
        display: block;
        margin-top: 5px;
        font-size: 12px;
    }


    /* =========================================
   DIFFERENT ADDRESS CHECKBOX
========================================= */

    .different-address {
        margin-top: 25px;
        padding: 15px 18px;
        background: #f8fbff;
        border: 1px solid #e1edf8;
        border-radius: 8px;
    }

    .custom-check {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        color: #444;
        font-size: 13px;
        font-weight: 500;
        cursor: pointer;
    }

    .custom-check input {
        width: 17px;
        height: 17px;
        accent-color: #1769aa;
        cursor: pointer;
    }


    /* =========================================
   DIFFERENT ADDRESS BOX
========================================= */

    .different-address-box {
        display: none;
        margin-top: 15px;
        padding: 20px;
        background: #f8fbff;
        border: 1px solid #e1edf8;
        border-radius: 8px;
    }

    .different-address-box h5 {
        display: flex;
        align-items: center;
        gap: 9px;
        margin: 0 0 15px;
        font-size: 15px;
        font-weight: 600;
        color: #333;
    }

    .different-address-box h5 i {
        color: #1769aa;
        font-size: 19px;
    }

    .different-address-box .form-control {
        border: 1px solid #dfe5eb;
        border-radius: 7px;
        resize: vertical;
    }


    /* =========================================
   CHECKOUT SUMMARY
========================================= */

    .checkout-summary {
        position: sticky;
        top: 25px;
        background: #fff;
        padding: 28px;
        border-radius: 12px;
        border: 1px solid #edf1f5;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
    }


    /* =========================================
   SUMMARY TITLE
========================================= */

    .checkout-summary::before {
        content: "ऑर्डर का सारांश";
        display: block;
        padding-bottom: 20px;
        margin-bottom: 8px;
        border-bottom: 1px solid #edf1f5;
        font-size: 21px;
        font-weight: 600;
        color: #222;
    }


    /* =========================================
   SUMMARY ROW
========================================= */

    .checkout-summary .summary-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding: 11px 0;
        font-size: 14px;
        color: #666;
    }

    .checkout-summary .summary-row strong {
        color: #222;
        font-weight: 600;
    }


    /* =========================================
   DISCOUNT
========================================= */

    .checkout-summary .discount {
        color: #1769aa !important;
    }


    /* =========================================
   FREE DELIVERY
========================================= */

    .checkout-summary .free-delivery {
        color: #1769aa !important;
    }


    /* =========================================
   SUMMARY DIVIDER
========================================= */

    .summary-divider {
        height: 1px;
        background: #edf1f5;
        margin: 10px 0;
    }


    /* =========================================
   SUMMARY TOTAL
========================================= */

    .checkout-summary .summary-total {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 0 18px;
    }

    .checkout-summary .summary-total span {
        font-size: 16px;
        font-weight: 600;
        color: #222;
    }

    .checkout-summary .summary-total strong {
        font-size: 23px;
        font-weight: 700;
        color: #1769aa;
    }


    /* =========================================
   PAYMENT SECTION
========================================= */

    .payment-section {
        margin-top: 5px;
        padding-top: 20px;
        border-top: 1px solid #edf1f5;
    }

    .payment-section h4 {
        margin: 0 0 14px;
        font-size: 16px;
        font-weight: 600;
        color: #222;
    }


    /* =========================================
   PAYMENT OPTION
========================================= */

    .payment-option {
        position: relative;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 15px;
        border: 1px solid #dfe5eb;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.25s ease;
    }

    .payment-option:hover {
        border-color: #1769aa;
        background: #f8fbff;
    }

    .payment-option.active {
        border-color: #1769aa;
        background: #f8fbff;
    }

    .payment-option input {
        position: absolute;
        opacity: 0;
        pointer-events: none;
    }


    /* =========================================
   CUSTOM RADIO
========================================= */

    .payment-radio {
        width: 19px;
        height: 19px;
        min-width: 19px;
        border: 2px solid #c7d0d9;
        border-radius: 50%;
        position: relative;
    }

    .payment-option.active .payment-radio {
        border-color: #1769aa;
    }

    .payment-option.active .payment-radio::after {
        content: "";
        position: absolute;
        width: 9px;
        height: 9px;
        background: #1769aa;
        border-radius: 50%;
        top: 3px;
        left: 3px;
    }

    .payment-option strong {
        display: block;
        margin-bottom: 3px;
        color: #333;
        font-size: 13px;
        font-weight: 600;
    }

    .payment-option small {
        display: block;
        color: #888;
        font-size: 11px;
    }


    /* =========================================
   PLACE ORDER BUTTON
========================================= */

    .place-order-btn {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 20px;
        padding: 14px 20px;
        border: none;
        border-radius: 7px;
        background: #1769aa;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .place-order-btn:hover {
        background: #0d558d;
        color: #fff;
        transform: translateY(-1px);
    }

    .place-order-btn i {
        font-size: 19px;
    }


    /* =========================================
   MOBILE
========================================= */

    @media (max-width: 991px) {

        .checkout-area {
            padding-top: 60px !important;
            padding-bottom: 60px !important;
        }

        .checkout-summary {
            position: static;
        }

        .checkout-box {
            padding: 25px;
        }

        .checkout-summary {
            padding: 25px;
        }
    }


    /* =========================================
   MOBILE 767
========================================= */

    @media (max-width: 767px) {

        .checkout-area {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        .checkout-box,
        .checkout-summary {
            padding: 20px 16px;
        }

        .checkout-header {
            align-items: flex-start;
            flex-direction: column;
            gap: 15px;
        }

        .checkout-header h3 {
            font-size: 21px;
        }

        .checkout-header p {
            font-size: 13px;
        }

        .checkout-step {
            font-size: 12px;
        }

        .checkout-section {
            padding: 20px 0;
        }

        .checkout-section h5 {
            font-size: 16px;
        }

        .checkout-summary::before {
            font-size: 19px;
        }

        .checkout-summary .summary-total strong {
            font-size: 21px;
        }
    }


    /* =========================================
   SMALL MOBILE
========================================= */

    @media (max-width: 480px) {

        .checkout-area {
            padding-top: 45px !important;
        }

        .checkout-box,
        .checkout-summary {
            border-radius: 9px;
            padding: 18px 14px;
        }

        .checkout-section .form-control,
        .checkout-section .form-select {
            min-height: 45px;
            font-size: 13px;
        }

        .checkout-section h5 i {
            width: 31px;
            height: 31px;
            font-size: 16px;
        }

        .different-address {
            padding: 13px;
        }

        .custom-check {
            font-size: 12px;
            line-height: 1.5;
        }

        .payment-option {
            padding: 13px;
        }

        .place-order-btn {
            padding: 13px 15px;
            font-size: 14px;
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
                        <h2>चेकआउट</h2>
                        <div class="space16"></div>
                        <ul>
                            <li><a href="{{ url('/1/index-1') }}">होम</a></li>
                            <li><img src="{{ asset('vendor_assets/img/icon/arrow-right-inner.html ') }}" alt=""></li>
                            <li><a class="aboutus_titlefix" href="{{ url('/1/checkout-1') }}">चेकआउट</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO END =======-->
    <!-- Inner Banner End -->
    <div class="checkout-area pt-100 pb-70">
        <div class="container">

            <div class="row g-4">

                <!-- Billing Details -->
                <div class="col-lg-8">

                    <div class="checkout-box">

                        <div class="checkout-header">
                            <div>
                                <h3>बिलिंग विवरण</h3>
                                <p>अपना डिलीवरी पता और संपर्क जानकारी दर्ज करें</p>
                            </div>

                            <div class="checkout-step">
                                <span>1</span>
                                विवरण
                            </div>
                        </div>
                        <form id="checkoutForm">

                            <!-- Personal Details -->
                            <div class="checkout-section">

                                <h5>
                                    <i class='bx bx-user'></i>
                                    व्यक्तिगत जानकारी
                                </h5>

                                <div class="row g-3">

                                    <!-- First Name -->
                                    <div class="col-md-6">
                                        <label>
                                            नाम <span>*</span>
                                        </label>

                                        <input type="text" name="first_name" class="form-control"
                                            placeholder="अपना पहला नाम दर्ज करें">

                                        <small class="text-danger error-first_name"></small>
                                    </div>
                                    <!-- Mobile -->
                                    <div class="col-md-6">
                                        <label>
                                            मोबाइल नंबर <span>*</span>
                                        </label>

                                        <input type="text" name="mobile" maxlength="10" class="form-control"
                                            placeholder="10 अंकों का मोबाइल नंबर">

                                        <small class="text-danger error-mobile"></small>
                                    </div>


                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label>
                                            ईमेल पता
                                        </label>

                                        <input type="email" name="email" class="form-control"
                                            placeholder="अपना ईमेल पता दर्ज करें">

                                        <small class="text-danger error-email"></small>
                                    </div>

                                </div>

                            </div>
                            <!-- Address Details -->
                            <div class="checkout-section">

                                <h5>
                                    <i class='bx bx-map'></i>
                                    डिलीवरी पता
                                </h5>

                                <div class="row g-3">

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label>
                                            पूरा पता <span>*</span>
                                        </label>

                                        <input type="text" name="address" class="form-control"
                                            placeholder="मकान नंबर, गली, मोहल्ला आदि">

                                        <small class="text-danger error-address"></small>
                                    </div>
                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label>
                                            शहर <span>*</span>
                                        </label>

                                        <input type="text" name="city" class="form-control" placeholder="शहर का नाम">

                                        <small class="text-danger error-city"></small>
                                    </div>
                                    <!-- State -->
                                    <div class="col-md-6">
                                        <label>
                                            राज्य <span>*</span>
                                        </label>

                                        <select name="state" class="form-select">
                                            <option value="">राज्य चुनें</option>
                                            <option value="छत्तीसगढ़">छत्तीसगढ़</option>
                                            <option value="मध्य प्रदेश">मध्य प्रदेश</option>
                                            <option value="महाराष्ट्र">महाराष्ट्र</option>
                                            <option value="ओडिशा">ओडिशा</option>
                                            <option value="उत्तर प्रदेश">उत्तर प्रदेश</option>
                                            <option value="अन्य">अन्य</option>
                                        </select>

                                        <small class="text-danger error-state"></small>
                                    </div>
                                    <!-- Pincode -->
                                    <div class="col-md-6">
                                        <label>
                                            पिन कोड <span>*</span>
                                        </label>

                                        <input type="text" name="pincode" maxlength="6" class="form-control"
                                            placeholder="6 अंकों का पिन कोड">

                                        <small class="text-danger error-pincode"></small>
                                    </div>
                                    <!-- Landmark -->
                                    <div class="col-md-6">
                                        <label>
                                            नज़दीकी स्थान
                                        </label>

                                        <input type="text" name="landmark" class="form-control"
                                            placeholder="नज़दीकी स्थान / लैंडमार्क">

                                    </div>

                                </div>

                            </div>
                            <!-- Additional Note -->
                            <div class="checkout-section">

                                <h5>
                                    <i class='bx bx-note'></i>
                                    अतिरिक्त जानकारी
                                </h5>

                                <label>
                                    ऑर्डर संबंधी जानकारी
                                </label>

                                <textarea name="note" class="form-control" rows="4"
                                    placeholder="डिलीवरी से संबंधित कोई विशेष निर्देश हो तो यहां लिखें..."></textarea>

                            </div>
                        </form>

                    </div>

                </div>
                <!-- Order Summary -->
                <div class="col-lg-4">

                    <div class="checkout-summary">


                        <div class="summary-row">
                            <span>उत्पाद मूल्य</span>
                            <strong>₹1,647</strong>
                        </div>


                        <div class="summary-row">
                            <span>डिस्काउंट</span>
                            <strong class="discount">- ₹150</strong>
                        </div>


                        <div class="summary-row">
                            <span>डिलीवरी शुल्क</span>
                            <strong class="free-delivery">निःशुल्क</strong>
                        </div>


                        <div class="summary-divider"></div>


                        <div class="summary-total">
                            <span>कुल राशि</span>
                            <strong>₹1,497</strong>
                        </div>


                        <!-- Payment -->
                        <div class="payment-section">

                            <h4>भुगतान का तरीका</h4>

                            <label class="payment-option active">

                                <input type="radio" name="payment_method" value="cod" checked>

                                <span class="payment-radio"></span>

                                <div>
                                    <strong>कैश ऑन डिलीवरी</strong>
                                    <small>डिलीवरी के समय भुगतान करें</small>
                                </div>
                            </label>
                        </div>
                        <!-- Place Order -->
                       <button type="button"
    class="place-order-btn"
    onclick="window.location.href='{{ url('1/placeorder-success-1') }}'">

    ऑर्डर प्लेस करें
    <i class='bx bx-right-arrow-alt'></i>
</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
