@extends('public_layouts.main_layout')
@section('title', $title)

@push('css')

<style>
    :root {
        --primary: #0B5D3B;
        --primary-dark: #08482E;
        --primary-light: #EAF5F0;
        --primary-soft: #F5FAF7;
        --success: #198754;
        --danger: #dc3545;
        --border: #E1E8E4;
        --text: #24332C;
        --muted: #718078;
    }

    /* =========================================
       BREADCRUMB
    ========================================= */

    .vendor-breadcrumb {
        padding: 120px 0 80px;
        position: relative;
    }

    .vendor-breadcrumb .breadcumb-title {
        color: #fff;
        font-size: 42px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .vendor-breadcrumb .breadcumb-menu {
        margin: 0;
    }

    .vendor-breadcrumb .breadcumb-menu li {
        color: rgba(255,255,255,.85);
    }

    /* =========================================
       MAIN
    ========================================= */

    .registration-wrapper {
        padding-top: 5px;
    }

    /* =========================================
       STEPS
    ========================================= */

    .registration-steps {
        max-width: 900px;
        margin: 30px auto 32px;
        padding: 24px 35px;

        background: #fff;
        border: 1px solid var(--border);
        border-radius: 15px;

        box-shadow: 0 8px 30px rgba(11,93,59,.07);

        display: flex;
        align-items: flex-start;
        justify-content: center;
    }

    .registration-step {
        min-width: 175px;

        display: flex;
        flex-direction: column;
        align-items: center;

        position: relative;
        z-index: 2;
    }

    .step-circle {
        width: 46px;
        height: 46px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #f3f6f4;
        color: #7b8781;

        border: 2px solid #dfe6e2;

        font-size: 14px;
        font-weight: 700;

        transition: all .3s ease;
    }

    .step-title {
        margin-top: 10px;

        color: #7b8781;

        font-size: 13px;
        font-weight: 500;

        white-space: nowrap;

        transition: all .3s ease;
    }

    .step-line {
        flex: 1;
        max-width: 150px;

        height: 2px;
        margin-top: 22px;

        background: #e2e8e4;

        transition: all .3s ease;
    }

    .registration-step.active .step-circle {
        background: var(--primary);
        border-color: var(--primary);
        color: #fff;

        box-shadow: 0 5px 15px rgba(11,93,59,.25);
    }

    .registration-step.active .step-title {
        color: var(--primary);
        font-weight: 700;
    }

    .registration-step.completed .step-circle {
        background: var(--success);
        border-color: var(--success);
        color: #fff;
    }

    .registration-step.completed .step-title {
        color: var(--success);
        font-weight: 600;
    }

    .registration-step.completed + .step-line {
        background: var(--success);
    }

    /* =========================================
       FORM CARD
    ========================================= */

    .registration-form-card {
        max-width: 1000px;
        margin: 0 auto;

        padding: 38px;

        background: #fff;

        border: 1px solid var(--border);
        border-radius: 16px;

        box-shadow: 0 10px 35px rgba(11,93,59,.06);
    }

    /* =========================================
       STEP CONTENT
    ========================================= */

    .registration-step-content {
        display: none;
    }

    .registration-step-content.active {
        display: block;
        animation: stepFade .25s ease;
    }

    @keyframes stepFade {
        from {
            opacity: 0;
            transform: translateY(6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* =========================================
       SECTION HEADING
    ========================================= */

    .form-section-heading {
        margin-bottom: 30px;
        padding-bottom: 17px;

        border-bottom: 1px solid #edf1ef;

        position: relative;
    }

    .form-section-heading::after {
        content: "";

        position: absolute;
        left: 0;
        bottom: -1px;

        width: 55px;
        height: 3px;

        background: var(--primary);
        border-radius: 5px;
    }

    .form-section-heading h4 {
        margin: 0 0 6px;

        color: var(--text);

        font-size: 21px;
        font-weight: 700;
    }

    .form-section-heading p {
        margin: 0;

        color: var(--muted);

        font-size: 13px;
        line-height: 1.6;
    }

    /* =========================================
       FORM
    ========================================= */

    .registration-form-card .form-group {
        margin-bottom: 21px !important;
    }

    .registration-form-card label {
        display: block;

        margin-bottom: 8px;

        color: #35423B;

        font-size: 13px;
        font-weight: 600;
    }

    .required {
        color: var(--danger) !important;
        font-weight: 600;
    }

    .registration-form-card .form-control,
    .registration-form-card .form-select {
        width: 100%;
        min-height: 46px;

        padding: 10px 14px;

        border: 1px solid #dce4df;
        border-radius: 7px;

        background: #fff;

        color: #26332D;

        font-size: 14px;

        box-shadow: none;

        transition: all .2s ease;
    }

    .registration-form-card .form-control:hover,
    .registration-form-card .form-select:hover {
        border-color: #b8cbc0;
    }

    .registration-form-card .form-control:focus,
    .registration-form-card .form-select:focus {
        border-color: var(--primary);

        box-shadow: 0 0 0 3px rgba(11,93,59,.09);
    }

    .registration-form-card .form-control::placeholder {
        color: #9aa59f;
        font-size: 13px;
    }

    .registration-form-card textarea.form-control {
        min-height: 115px;
        resize: vertical;
        border-radius: 8px;
        line-height: 1.6;
    }

    /* =========================================
       FILE INPUT
    ========================================= */

    .registration-form-card input[type="file"] {
        padding: 8px 12px;
        cursor: pointer;
    }

    .registration-form-card input[type="file"]::file-selector-button {
        margin-right: 10px;
        padding: 6px 13px;

        border: 0;
        border-radius: 5px;

        background: var(--primary-light);
        color: var(--primary);

        font-size: 12px;
        font-weight: 600;

        cursor: pointer;
    }

    /* =========================================
       ERROR
    ========================================= */

    .field-error {
        display: none;

        margin-top: 6px;

        color: var(--danger);

        font-size: 12px;
        line-height: 1.4;
    }

    .is-invalid {
        border-color: var(--danger) !important;
        background: #fffafa !important;
    }

    /* =========================================
       BUTTONS
    ========================================= */

    .step-buttons {
        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-top: 10px;
        padding-top: 24px;

        border-top: 1px solid #edf1ef;
    }

    .step-buttons .btn {
        min-width: 125px;
        min-height: 43px;

        padding: 9px 18px;

        border-radius: 7px;

        font-size: 13px;
        font-weight: 600;

        transition: all .2s ease;
    }

    .step-buttons .btn-primary {
        background: var(--primary);
        border-color: var(--primary);
        color: #fff;

        box-shadow: 0 4px 12px rgba(11,93,59,.16);
    }

    .step-buttons .btn-primary:hover {
        background: var(--primary-dark);
        border-color: var(--primary-dark);

        color: #fff;

        transform: translateY(-1px);

        box-shadow: 0 6px 16px rgba(11,93,59,.22);
    }

    .step-buttons .btn-secondary {
        background: #fff;

        border: 1px solid #d6dfda;

        color: #53615A;
    }

    .step-buttons .btn-secondary:hover {
        background: #f5f8f6;

        border-color: #b7c9bf;

        color: var(--primary);
    }

    #submitBtn {
        min-width: 150px;
    }

    /* =========================================
       SUCCESS SCREEN
    ========================================= */

    .registration-success {
        display: none;

        max-width: 1000px;
        margin: 0 auto;

        padding: 60px 30px;

        background: #fff;

        border: 1px solid var(--border);
        border-radius: 16px;

        text-align: center;

        box-shadow: 0 10px 35px rgba(11,93,59,.06);

        animation: stepFade .3s ease;
    }

    .success-icon {
        width: 75px;
        height: 75px;

        margin: 0 auto 20px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: var(--primary-light);
        color: var(--primary);

        font-size: 32px;
    }

    .registration-success h3 {
        margin-bottom: 10px;

        color: var(--primary);

        font-size: 25px;
        font-weight: 700;
    }

    .registration-success p {
        max-width: 550px;

        margin: 0 auto 25px;

        color: var(--muted);

        font-size: 14px;
        line-height: 1.7;
    }

    .success-reference {
        display: inline-block;

        margin-bottom: 25px;

        padding: 10px 18px;

        background: var(--primary-soft);

        border: 1px solid #dcece4;

        border-radius: 7px;

        color: var(--primary);

        font-size: 13px;
        font-weight: 600;
    }

    /* =========================================
       MOBILE
    ========================================= */

    @media (max-width: 767px) {

        .vendor-breadcrumb {
            padding: 90px 0 65px;
        }

        .vendor-breadcrumb .breadcumb-title {
            font-size: 30px;
        }

        .registration-steps {
            margin: 22px auto 25px;

            padding: 18px 12px;

            overflow-x: auto;

            justify-content: flex-start;

            border-radius: 12px;
        }

        .registration-step {
            min-width: 105px;
        }

        .step-circle {
            width: 38px;
            height: 38px;

            font-size: 13px;
        }

        .step-title {
            margin-top: 8px;

            font-size: 11px;
        }

        .step-line {
            min-width: 30px;
            max-width: 40px;

            margin-top: 18px;
        }

        .registration-form-card {
            padding: 24px 17px;
            border-radius: 12px;
        }

        .form-section-heading {
            margin-bottom: 24px;
        }

        .form-section-heading h4 {
            font-size: 18px;
        }

        .form-section-heading p {
            font-size: 12px;
        }

        .registration-form-card .form-group {
            margin-bottom: 17px !important;
        }

        .step-buttons {
            margin-top: 5px;
            padding-top: 20px;
        }

        .step-buttons .btn {
            min-width: 108px;
            min-height: 42px;

            padding: 8px 13px;
        }

        #submitBtn {
            min-width: 125px;
        }

        .registration-success {
            padding: 45px 20px;
        }

        .registration-success h3 {
            font-size: 21px;
        }
    }

    @media (max-width: 400px) {

        .registration-form-card {
            padding: 20px 14px;
        }

        .registration-step {
            min-width: 98px;
        }

        .step-line {
            min-width: 25px;
        }

        .step-buttons .btn {
            min-width: 100px;
            font-size: 12px;
        }
    }
</style>

@endpush

@section('main-content')

<!-- =========================================
     BREADCRUMB
========================================= -->

    {{-- Breadcrumb --}}
    <div class="breadcrumb-wrap bg-mild position-relative"
        data-bg-src="{{ asset('user_assets/img/bg/breadcumb-bg.png') }}"
        style="padding:120px 0;">

        <div class="container">
            <div class="row">
                <div class="col-lg-7">

                    <div class="breadcumb-content">

                        <br><br><br><br>

                        <h1 class="breadcumb-title">{{ $heading }}</h1>

                        <ul class="breadcumb-menu">
                            <li>
                                <a href="{{ url('/') }}">मुख्य पृष्ठ</a>
                            </li>

                            <li>{{ $heading }}</li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>
    </div>

<!-- =========================================
     REGISTRATION
========================================= -->

<div class="th-checkout-wrapper space-extra-bottom">
<div class="container registration-wrapper">
    <!-- =========================================
         STEP PROGRESS
    ========================================= -->

    <div class="registration-steps">

        <div class="registration-step active"
            id="stepIndicator1">

            <div class="step-circle">
                1
            </div>

            <span class="step-title">
                व्यक्तिगत जानकारी
            </span>

        </div>


        <div class="step-line"></div>


        <div class="registration-step"
            id="stepIndicator2">

            <div class="step-circle">
                2
            </div>

            <span class="step-title">
                पता विवरण
            </span>

        </div>


        <div class="step-line"></div>


        <div class="registration-step"
            id="stepIndicator3">

            <div class="step-circle">
                3
            </div>

            <span class="step-title">
                दस्तावेज़
            </span>

        </div>

    </div>


    <!-- =========================================
         FORM
    ========================================= -->

    <form id="applicationForm"
        onsubmit="return submitRegistration(event)"
        novalidate>

        <div class="registration-form-card">


            <!-- =================================
                 STEP 1
            ================================== -->

            <div class="registration-step-content active"
                id="step1">

                <div class="form-section-heading">

                    <h4>
                        व्यक्तिगत जानकारी
                    </h4>

                    <p>
                        अपनी व्यक्तिगत और व्यवसाय से संबंधित जानकारी दर्ज करें।
                    </p>

                </div>


                <div class="row">


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="name">
                                पूरा नाम
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="name"
                                id="name"
                                class="form-control"
                                placeholder="पूरा नाम दर्ज करें">

                            <div class="field-error"
                                id="err_name"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="mobile_no">
                                मोबाइल नंबर
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="mobile_no"
                                id="mobile_no"
                                class="form-control"
                                placeholder="10 अंकों का मोबाइल नंबर"
                                maxlength="10"
                                inputmode="numeric">

                            <div class="field-error"
                                id="err_mobile_no"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="whatsapp_no">
                                व्हाट्सऐप नंबर
                            </label>

                            <input type="text"
                                name="whatsapp_no"
                                id="whatsapp_no"
                                class="form-control"
                                placeholder="व्हाट्सऐप नंबर दर्ज करें"
                                maxlength="10"
                                inputmode="numeric">

                            <div class="field-error"
                                id="err_whatsapp_no"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="business_name">
                                दुकान / व्यवसाय का नाम
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="business_name"
                                id="business_name"
                                class="form-control"
                                placeholder="दुकान / व्यवसाय का नाम दर्ज करें">

                            <div class="field-error"
                                id="err_business_name"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="business_category">
                                व्यवसाय श्रेणी
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <select name="business_category"
                                id="business_category"
                                class="form-select">

                                <option value="">
                                    व्यवसाय श्रेणी चुनें
                                </option>

                                <option value="grocery">
                                    किराना दुकान
                                </option>

                                <option value="clothing">
                                    कपड़े की दुकान
                                </option>

                                <option value="electronics">
                                    इलेक्ट्रॉनिक्स
                                </option>

                                <option value="restaurant">
                                    रेस्टोरेंट / भोजन
                                </option>

                                <option value="medical">
                                    मेडिकल / फार्मेसी
                                </option>

                                <option value="service">
                                    सेवा प्रदाता
                                </option>

                                <option value="other">
                                    अन्य
                                </option>

                            </select>

                            <div class="field-error"
                                id="err_business_category"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="shop_logo">
                                दुकान का लोगो
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="file"
                                name="shop_logo"
                                id="shop_logo"
                                class="form-control"
                                accept=".jpg,.jpeg,.png">

                            <div class="field-error"
                                id="err_shop_logo"></div>

                        </div>

                    </div>

                </div>


                <div class="step-buttons">

                    <div></div>

                    <button type="button"
                        class="btn btn-primary"
                        onclick="nextStep(1)">

                        आगे बढ़ें

                        <i class="fa fa-arrow-right ms-1"></i>

                    </button>

                </div>

            </div>


            <!-- =================================
                 STEP 2
            ================================== -->

            <div class="registration-step-content"
                id="step2">

                <div class="form-section-heading">

                    <h4>
                        पता विवरण
                    </h4>

                    <p>
                        अपने व्यवसाय का पूरा पता दर्ज करें।
                    </p>

                </div>


                <div class="row">


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="district">
                                जिला
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="district"
                                id="district"
                                class="form-control"
                                placeholder="जिला दर्ज करें">

                            <div class="field-error"
                                id="err_district"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="city">
                                शहर / कस्बा
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="city"
                                id="city"
                                class="form-control"
                                placeholder="शहर / कस्बा दर्ज करें">

                            <div class="field-error"
                                id="err_city"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="pincode">
                                पिन कोड
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="pincode"
                                id="pincode"
                                class="form-control"
                                placeholder="6 अंकों का पिन कोड"
                                maxlength="6"
                                inputmode="numeric">

                            <div class="field-error"
                                id="err_pincode"></div>

                        </div>

                    </div>


                    <div class="col-12">

                        <div class="form-group">

                            <label for="address">
                                पूरा पता
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <textarea name="address"
                                id="address"
                                class="form-control"
                                rows="4"
                                placeholder="दुकान / व्यवसाय का पूरा पता दर्ज करें"></textarea>

                            <div class="field-error"
                                id="err_address"></div>

                        </div>

                    </div>

                </div>


                <div class="step-buttons">

                    <button type="button"
                        class="btn btn-secondary"
                        onclick="prevStep(2)">

                        <i class="fa fa-arrow-left me-1"></i>

                        पीछे जाएं

                    </button>


                    <button type="button"
                        class="btn btn-primary"
                        onclick="nextStep(2)">

                        आगे बढ़ें

                        <i class="fa fa-arrow-right ms-1"></i>

                    </button>

                </div>

            </div>


            <!-- =================================
                 STEP 3
            ================================== -->

            <div class="registration-step-content"
                id="step3">

                <div class="form-section-heading">

                    <h4>
                        दस्तावेज़ विवरण
                    </h4>

                    <p>
                        पहचान से संबंधित आवश्यक दस्तावेज़ की जानकारी दर्ज करें।
                    </p>

                </div>


                <div class="row">


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="id_proof_type">
                                पहचान पत्र का प्रकार
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <select name="id_proof_type"
                                id="id_proof_type"
                                class="form-select">

                                <option value="">
                                    पहचान पत्र चुनें
                                </option>

                                <option value="aadhaar">
                                    आधार कार्ड
                                </option>

                                <option value="pan">
                                    पैन कार्ड
                                </option>

                                <option value="voter">
                                    मतदाता पहचान पत्र
                                </option>

                                <option value="driving_license">
                                    ड्राइविंग लाइसेंस
                                </option>

                            </select>

                            <div class="field-error"
                                id="err_id_proof_type"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="id_proof_number">
                                पहचान पत्र संख्या
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="text"
                                name="id_proof_number"
                                id="id_proof_number"
                                class="form-control"
                                placeholder="पहचान पत्र संख्या दर्ज करें">

                            <div class="field-error"
                                id="err_id_proof_number"></div>

                        </div>

                    </div>


                    <div class="col-md-6">

                        <div class="form-group">

                            <label for="id_proof_document">
                                पहचान पत्र दस्तावेज़
                                {{-- <span class="required">*</span> --}}
                            </label>

                            <input type="file"
                                name="id_proof_document"
                                id="id_proof_document"
                                class="form-control"
                                accept=".jpg,.jpeg,.png,.pdf">

                            <div class="field-error"
                                id="err_id_proof_document"></div>

                        </div>

                    </div>

                </div>


                <div class="step-buttons">

                    <button type="button"
                        class="btn btn-secondary"
                        onclick="prevStep(3)">

                        <i class="fa fa-arrow-left me-1"></i>

                        पीछे जाएं

                    </button>


                    <button type="submit"
                        id="submitBtn"
                        class="btn btn-primary">

                        पंजीकरण करें

                        <i class="fa fa-check ms-1"></i>

                    </button>

                </div>

            </div>

        </div>

    </form>


    <!-- =========================================
         SUCCESS
    ========================================= -->

    <div class="registration-success"
        id="registrationSuccess">

        <div class="success-icon">

            <i class="fa fa-check"></i>

        </div>

        <h3>
            पंजीकरण सफलतापूर्वक पूरा हुआ
        </h3>

        <p>
            आपकी व्यवसाय पंजीकरण जानकारी सफलतापूर्वक दर्ज कर ली गई है।
            यह अभी केवल डेमो पंजीकरण है।
        </p>

        <div class="success-reference">
            आवेदन संख्या: DB-2026-00125
        </div>

        <br>

        <button type="button"
            class="btn btn-primary"
            onclick="resetRegistration()">

            नया पंजीकरण करें

        </button>

    </div>

</div>


</div>
@endsection
@push('js')
   <script>

    let currentStep = 1;

    /* =========================================
       SHOW STEP
    ========================================= */

    function showStep(step) {

        document
            .querySelectorAll('.registration-step-content')
            .forEach(function(content) {

                content.classList.remove('active');

            });


        const target =
            document.getElementById('step' + step);


        if (target) {

            target.classList.add('active');

        }


        document
            .querySelectorAll('.registration-step')
            .forEach(function(indicator) {

                indicator.classList.remove(
                    'active',
                    'completed'
                );

            });


        for (let i = 1; i <= 3; i++) {

            const indicator =
                document.getElementById(
                    'stepIndicator' + i
                );


            if (i < step) {

                indicator.classList.add('completed');

            }


            if (i === step) {

                indicator.classList.add('active');

            }

        }


        currentStep = step;

    }


    /* =========================================
       NEXT STEP
       No validation for wireframe
    ========================================= */

    function nextStep(step) {

        if (step < 3) {

            showStep(step + 1);

            scrollToForm();

        }

    }


    /* =========================================
       PREVIOUS STEP
    ========================================= */

    function prevStep(step) {

        if (step > 1) {

            showStep(step - 1);

            scrollToForm();

        }

    }


    /* =========================================
       SCROLL TO FORM
    ========================================= */

    function scrollToForm() {

        const wrapper =
            document.querySelector(
                '.th-checkout-wrapper'
            );


        if (wrapper) {

            window.scrollTo({

                top: wrapper.offsetTop - 30,

                behavior: 'smooth'

            });

        }

    }


    /* =========================================
       FORM SUBMIT
       Wireframe only
    ========================================= */

    function submitRegistration(event) {

        event.preventDefault();

        return false;

    }


    /* =========================================
       INITIAL STEP
    ========================================= */

    document.addEventListener(
        'DOMContentLoaded',
        function() {

            showStep(1);

        }
    );

</script> 
@endpush


