@extends('shopkeeper.layout_2.main_layouts')

@push('css')
    <style>
        .checkout-page {
            --ck-accent:#1A5632;
            --ck-accent-soft: #EEF0FF;
            --ck-ink: #253D30;
            --ck-muted: #6B7280;
            --ck-line: #E5E7EB;
            --ck-surface: #FFFFFF;
            --ck-bg: #F6F7FB;
            --ck-good: #16A34A;
            background: var(--ck-bg);
        }

        .checkout-page .checkout-box,
        .checkout-page .checkout-summary {
            border-radius: 16px;
            border: 1px solid var(--ck-line);
        }

        /* ---------- Left cards ---------- */
        .checkout-box {
            background: var(--ck-surface);
            padding: 32px;
            box-shadow: 0 1px 2px rgba(16, 24, 40, .04);
        }

        .checkout-box-head {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 26px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--ck-line);
        }

        .checkout-box-head h3 {
            margin: 0;
            font-size: 22px;
            color: var(--ck-ink);
        }

        .checkout-box-head p {
            margin: 2px 0 0;
            font-size: 14px;
            color: var(--ck-muted);
        }

        .checkout-step {
            flex: 0 0 38px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: var(--ck-accent);
            color: #fff;
            font-weight: 700;
            display: grid;
            place-items: center;
        }

        /* ---------- Form ---------- */
        .checkout-form-group {
            margin-bottom: 20px;
        }

        .checkout-form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 15px;
            color: var(--ck-ink);
        }

        .checkout-form-group label .opt {
            font-weight: 400;
            color: var(--ck-muted);
            font-size: 13px;
            margin-left: 4px;
        }

        .checkout-form-group input,
        .checkout-form-group textarea,
        .checkout-form-group select {
            width: 100%;
            height: 52px;
            border: 1px solid #D1D5DB;
            border-radius: 10px;
            padding: 0 16px;
            background: #fff;
            color: var(--ck-ink);
            outline: none;
            transition: border-color .15s, box-shadow .15s;
        }

        .checkout-form-group input::placeholder,
        .checkout-form-group textarea::placeholder {
            color: #9CA3AF;
        }

        .checkout-form-group textarea {
            height: 120px;
            padding-top: 14px;
            resize: vertical;
        }

        .checkout-form-group input:hover,
        .checkout-form-group textarea:hover {
            border-color: #9CA3AF;
        }

        .checkout-form-group input:focus,
        .checkout-form-group textarea:focus,
        .checkout-form-group select:focus {
            border-color: var(--ck-accent);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, .15);
        }

        /* ---------- Payment options ---------- */
        .payment-option {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 18px;
            border: 1.5px solid var(--ck-line);
            border-radius: 12px;
            margin-bottom: 12px;
            cursor: pointer;
            transition: border-color .15s, background .15s;
        }

        .payment-option:last-child {
            margin-bottom: 0;
        }

        .payment-option:hover {
            border-color: #C7C9F5;
        }

        .payment-option input {
            width: 20px;
            height: 20px;
            accent-color: var(--ck-accent);
            flex: none;
            margin: 0;
        }

        .payment-option-text strong {
            display: block;
            color: var(--ck-ink);
            font-size: 16px;
        }

        .payment-option-text span {
            font-size: 13px;
            color: var(--ck-muted);
        }

        .payment-option:has(input:checked) {
            border-color: var(--ck-accent);
            background: var(--ck-accent-soft);
        }

        .payment-option:has(input:focus-visible) {
            box-shadow: 0 0 0 4px rgba(99, 102, 241, .2);
        }

        /* ---------- Order summary ---------- */
        .checkout-summary {
            background: var(--ck-surface);
            padding: 30px;
            box-shadow: 0 8px 30px rgba(16, 24, 40, .06);
            position: sticky;
            top: 100px;
        }

        .checkout-summary h3 {
            margin: 0 0 6px;
            font-size: 22px;
            color: var(--ck-ink);
        }

        .checkout-summary .items-count {
            font-size: 14px;
            color: var(--ck-muted);
            margin-bottom: 8px;
        }

        .checkout-product {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid var(--ck-line);
        }

        .checkout-product-img {
            position: relative;
            flex: none;
        }

        .checkout-product img {
            width: 64px;
            height: 64px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid var(--ck-line);
            display: block;
        }

        .checkout-product-qty {
            position: absolute;
            top: -7px;
            right: -7px;
            min-width: 22px;
            height: 22px;
            padding: 0 6px;
            border-radius: 11px;
            background: var(--ck-ink);
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            display: grid;
            place-items: center;
        }

        .checkout-product-content {
            flex: 1;
            min-width: 0;
        }

        .checkout-product-content h4 {
            font-size: 15px;
            line-height: 1.4;
            margin: 0 0 3px;
            color: var(--ck-ink);
        }

        .checkout-product-content span {
            font-size: 13px;
            color: var(--ck-muted);
        }

        .checkout-product strong {
            color: var(--ck-ink);
            white-space: nowrap;
        }

        .checkout-price-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            color: var(--ck-muted);
            font-size: 15px;
        }

        .checkout-price-row span:last-child {
            color: var(--ck-ink);
            font-weight: 500;
        }

        .checkout-price-row .free {
            color: var(--ck-good);
        }

        .checkout-total {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            border-top: 1px dashed #CBD0D8;
            margin-top: 10px;
            padding-top: 18px;
            font-size: 20px;
            font-weight: 700;
            color: var(--ck-ink);
        }

        .checkout-summary .btn-home6 {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            width: 100%;
            text-align: center;
        }

        .checkout-note {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            margin-top: 18px;
            padding: 12px 14px;
            border-radius: 10px;
            background: #F0FDF4;
            color: #166534;
            font-size: 13px;
            line-height: 1.5;
        }

        .checkout-note i {
            margin-top: 3px;
        }

        @media (max-width: 991px) {
            .checkout-summary {
                position: static;
                margin-top: 30px;
            }
        }

        @media (max-width: 767px) {

            .checkout-box,
            .checkout-summary {
                padding: 20px;
            }

            .checkout-box-head h3,
            .checkout-summary h3 {
                font-size: 20px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .checkout-form-group input,
            .checkout-form-group textarea,
            .payment-option {
                transition: none;
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

                        <h2>चेकआउट</h2>

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
                                    चेकआउट
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>

    </div>
    <!--===== HERO END =======-->


    <!--===== CHECKOUT START =======-->
    <div class="vl-contact-inr-area sp1 checkout-page">

        <div class="container">

            <div class="row">

                <!-- BILLING DETAILS -->
                <div class="col-xl-7 col-lg-7">

                    <div class="checkout-box">

                        <div class="checkout-box-head">
                            <div class="checkout-step">1</div>
                            <div>
                                <h3>डिलीवरी विवरण</h3>
                                <p>ताज़ा सामान कहाँ पहुँचाना है, यहाँ बताएँ।</p>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-xl-6 col-lg-6">
                                <div class="checkout-form-group">
                                    <label for="first_name">पहला नाम</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="जैसे: राहुल"
                                        autocomplete="given-name" required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="checkout-form-group">
                                    <label for="last_name">अंतिम नाम</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="जैसे: शर्मा"
                                        autocomplete="family-name">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="checkout-form-group">
                                    <label for="mobile">मोबाइल नंबर</label>
                                    <input type="tel" id="mobile" name="mobile" placeholder="10 अंकों का मोबाइल नंबर"
                                        inputmode="numeric" maxlength="10" pattern="[0-9]{10}" autocomplete="tel"
                                        required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="checkout-form-group">
                                    <label for="email">ईमेल <span class="opt">(वैकल्पिक)</span></label>
                                    <input type="email" id="email" name="email" placeholder="ईमेल पता"
                                        autocomplete="email">
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="checkout-form-group">
                                    <label for="address">पता</label>
                                    <input type="text" id="address" name="address"
                                        placeholder="घर नंबर, सड़क एवं क्षेत्र" autocomplete="street-address" required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="checkout-form-group">
                                    <label for="city">शहर</label>
                                    <input type="text" id="city" name="city" placeholder="शहर"
                                        autocomplete="address-level2" required>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6">
                                <div class="checkout-form-group">
                                    <label for="pincode">पिन कोड</label>
                                    <input type="text" id="pincode" name="pincode" placeholder="6 अंकों का पिन कोड"
                                        inputmode="numeric" maxlength="6" pattern="[0-9]{6}"
                                        autocomplete="postal-code" required>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="checkout-form-group">
                                    <label for="note">ऑर्डर के लिए विशेष निर्देश <span class="opt">(वैकल्पिक)</span></label>
                                    <textarea id="note" name="note" placeholder="जैसे: गेट के पास कॉल करें, शाम 5 बजे के बाद डिलीवरी..."></textarea>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="space30"></div>

                    <!-- PAYMENT -->
                    <div class="checkout-box">

                        <div class="checkout-box-head">
                            <div class="checkout-step">2</div>
                            <div>
                                <h3>भुगतान का तरीका</h3>
                                <p>अपनी सुविधा के अनुसार चुनें।</p>
                            </div>
                        </div>

                        <label class="payment-option">
                            <input type="radio" name="payment" value="cod" checked>
                            <span class="payment-option-text">
                                <strong>कैश ऑन डिलीवरी</strong>
                                <span>सामान मिलने पर नकद या UPI से भुगतान करें</span>
                            </span>
                        </label>

                        <label class="payment-option">
                            <input type="radio" name="payment" value="online">
                            <span class="payment-option-text">
                                <strong>ऑनलाइन भुगतान</strong>
                                <span>UPI, कार्ड या नेट बैंकिंग से अभी भुगतान करें</span>
                            </span>
                        </label>

                    </div>

                </div>


                <!-- ORDER SUMMARY -->
                <div class="col-xl-5 col-lg-5">

                    <div class="checkout-summary">

                        <h3>आपका ऑर्डर</h3>
                        <div class="items-count">3 उत्पाद</div>

                        <!-- PRODUCT 1 -->
                        <div class="checkout-product">

                            <div class="checkout-product-img">
                                <img src="{{ asset('vendor_assets/img/products/product6-imgs(1).png') }}"
                                    alt="ताज़ी जैविक सब्ज़ियाँ">
                                <span class="checkout-product-qty">1</span>
                            </div>

                            <div class="checkout-product-content">
                                <h4>ताज़ी जैविक सब्ज़ियाँ</h4>
                                <span>मात्रा: 1</span>
                            </div>

                            <strong>₹120</strong>

                        </div>


                        <!-- PRODUCT 2 -->
                        <div class="checkout-product">

                            <div class="checkout-product-img">
                                <img src="{{ asset('vendor_assets/img/products/product6-imgs(2).png') }}"
                                    alt="मिश्रित जैविक सब्ज़ियाँ">
                                <span class="checkout-product-qty">1</span>
                            </div>

                            <div class="checkout-product-content">
                                <h4>मिश्रित जैविक सब्ज़ियाँ</h4>
                                <span>मात्रा: 1</span>
                            </div>

                            <strong>₹180</strong>

                        </div>


                        <!-- PRODUCT 3 -->
                        <div class="checkout-product">

                            <div class="checkout-product-img">
                                <img src="{{ asset('vendor_assets/img/products/product6-imgs(3).png') }}"
                                    alt="ताज़े स्थानीय फल एवं सब्ज़ियाँ">
                                <span class="checkout-product-qty">1</span>
                            </div>

                            <div class="checkout-product-content">
                                <h4>ताज़े स्थानीय फल एवं सब्ज़ियाँ</h4>
                                <span>मात्रा: 1</span>
                            </div>

                            <strong>₹140</strong>

                        </div>


                        <div class="space20"></div>

                        <div class="checkout-price-row">
                            <span>उत्पाद राशि</span>
                            <span>₹440</span>
                        </div>

                        <div class="checkout-price-row">
                            <span>डिलीवरी शुल्क</span>
                            <span>₹40</span>
                        </div>

                        <div class="checkout-price-row">
                            <span>छूट</span>
                            <span>₹0</span>
                        </div>

                        <div class="checkout-total">
                            <span>कुल राशि</span>
                            <span>₹480</span>
                        </div>

                        <div class="space24"></div>

                        <a href="{{ url('2/order-success-2') }}" class="btn-home6">
                            ऑर्डर प्लेस करें
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <div class="checkout-note">
                            <i class="fa-solid fa-leaf"></i>
                            <span>आपका ऑर्डर ताज़ा चुनकर पैक किया जाएगा। डिलीवरी से पहले हम आपको कॉल करेंगे।</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!--===== CHECKOUT END =======-->
@endsection