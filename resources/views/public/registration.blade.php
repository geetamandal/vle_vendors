@extends('public_layouts.main_layout')
@section('title', $title)

@push('css')
    <style>
        /* =========================================
           COMMON
        ========================================= */

        .required {
            color: #dc3545 !important;
            font-weight: 600;
        }

        .field-error {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }


        /* =========================================
           REGISTRATION WRAPPER
        ========================================= */

        .registration-wrapper {
            padding-top: 10px;
        }


        /* =========================================
           STEP PROGRESS
        ========================================= */

        .registration-steps {
            max-width: 850px;
            margin: 35px auto 30px;
            padding: 22px 30px;
            background: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.05);

            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .registration-step {
            min-width: 155px;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .step-circle {
            width: 44px;
            height: 44px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #f1f3f5;
            color: #777;

            border: 2px solid #e2e5e8;

            font-size: 14px;
            font-weight: 600;

            transition: all 0.3s ease;
        }

        .step-title {
            margin-top: 9px;

            font-size: 13px;
            color: #777;
            font-weight: 500;

            white-space: nowrap;

            transition: all 0.3s ease;
        }

        .step-line {
            flex: 1;
            max-width: 150px;

            height: 2px;

            background: #e4e6e8;

            margin-top: 21px;
        }


        /* Active */

        .registration-step.active .step-circle {
            background: #1769aa;
            border-color: #1769aa;
            color: #ffffff;

            box-shadow: 0 4px 12px rgba(23, 105, 170, 0.22);
        }

        .registration-step.active .step-title {
            color: #1769aa;
            font-weight: 600;
        }


        /* Completed */

        .registration-step.completed .step-circle {
            background: #198754;
            border-color: #198754;
            color: #ffffff;
        }

        .registration-step.completed .step-title {
            color: #198754;
            font-weight: 600;
        }

        .registration-step.completed + .step-line {
            background: #198754;
        }


        /* =========================================
           FORM CARD
        ========================================= */

       .registration-form-card .form-control,
.registration-form-card .form-select {
    min-height: 46px;
    border: 1px solid #ddd;
    border-radius: 50px;
    font-size: 14px;
    color: #333;
    box-shadow: none;
}

.registration-form-card textarea.form-control {
    min-height: 110px;
    resize: vertical;
    border-radius: 15px;
}
.registration-form-card input[type="file"] {
    padding: 9px 16px;
    border-radius: 50px;
}

        /* =========================================
           STEP CONTENT
        ========================================= */

        .registration-step-content {
            display: none;
        }

        .registration-step-content.active {
            display: block;
        }


        /* =========================================
           SECTION HEADING
        ========================================= */

        .form-section-heading {
            margin-bottom: 28px;
            padding-bottom: 15px;

            border-bottom: 1px solid #eeeeee;
        }

        .form-section-heading h4 {
            margin: 0 0 5px;

            font-size: 20px;
            font-weight: 600;

            color: #222;
        }

        .form-section-heading p {
            margin: 0;

            font-size: 13px;
            color: #777;
        }


        /* =========================================
           FORM FIELDS
        ========================================= */

        .registration-form-card .form-group {
            margin-bottom: 20px !important;
        }

        .registration-form-card label {
            display: block;

            margin-bottom: 7px;

            font-size: 14px;
            font-weight: 500;

            color: #333;
        }

        .registration-form-card .form-control,
        .registration-form-card .form-select {
            min-height: 46px;

            border: 1px solid #dddddd;
            border-radius: 6px;

            font-size: 14px;

            color: #333;

            box-shadow: none;
        }

        .registration-form-card textarea.form-control {
            min-height: 110px;
            resize: vertical;
        }

        .registration-form-card .form-control::placeholder {
            color: #999;
            font-size: 13px;
        }

        .registration-form-card .form-control:focus,
        .registration-form-card .form-select:focus {
            border-color: #1769aa;

            box-shadow: 0 0 0 3px rgba(23, 105, 170, 0.08);
        }


        /* =========================================
           FILE INPUT
        ========================================= */

        .registration-form-card input[type="file"] {
            padding: 9px 12px;
        }


        /* =========================================
           STEP BUTTONS
        ========================================= */

        .step-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin-top: 10px;
            padding-top: 22px;

            border-top: 1px solid #eeeeee;
        }

        .step-buttons .btn {
            min-width: 125px;
            min-height: 42px;

            border-radius: 6px;

            font-size: 14px;
            font-weight: 500;
        }

        .step-buttons .btn-primary {
            background: #1769aa;
            border-color: #1769aa;
        }

        .step-buttons .btn-primary:hover {
            background: #125789;
            border-color: #125789;
        }


        /* =========================================
           ALERT
        ========================================= */

        #alertBox {
            max-width: 1000px;
            margin: 0 auto 20px;
        }


        /* =========================================
           LOADER
        ========================================= */

        #formLoader {
            display: none;

            position: fixed;
            inset: 0;

            background: rgba(0, 0, 0, 0.45);

            z-index: 9999;

            align-items: center;
            justify-content: center;
        }

        #formLoader.active {
            display: flex;
        }

        .loader-box {
            background: #ffffff;

            border-radius: 12px;

            padding: 32px 40px;

            text-align: center;
        }

        .spinner {
            width: 40px;
            height: 40px;

            border: 4px solid #e9ecef;
            border-top-color: #1769aa;

            border-radius: 50%;

            animation: spin 0.7s linear infinite;

            margin: 0 auto 12px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }


        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 767px) {

            .registration-steps {
                margin: 25px auto 25px;

                padding: 18px 10px;

                overflow-x: auto;

                justify-content: flex-start;
            }

            .registration-step {
                min-width: 95px;
            }

            .step-title {
                font-size: 11px;
            }

            .step-circle {
                width: 38px;
                height: 38px;

                font-size: 13px;
            }

            .step-line {
                min-width: 35px;
                max-width: 45px;

                margin-top: 18px;
            }

            .registration-form-card {
                padding: 22px 16px;
            }

            .form-section-heading h4 {
                font-size: 18px;
            }

            .form-section-heading p {
                font-size: 12px;
            }

            .step-buttons .btn {
                min-width: 110px;
            }
        }
    </style>
@endpush


@section('main-content')


    <!-- =========================================
         BREADCRUMB
    ========================================= -->

    <div class="breadcrumb-wrap bg-mild position-relative"
        data-bg-src="{{ asset('user_assets/img/bg/breadcumb-bg.png') }}"
        style="padding: 120px 0;">

        <div class="container">

            <div class="row">

                <div class="col-lg-7">

                    <div class="breadcumb-content">

                        <br>
                        <br>
                        <br>
                        <br>

                        <h1 class="breadcumb-title">
                            {{ $heading }}
                        </h1>

                        <ul class="breadcumb-menu">

                            <li>
                                <a href="index.html">
                                    मुख्य पृष्ठ
                                </a>
                            </li>

                            <li>
                                {{ $heading }}
                            </li>

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


            <!-- Alert -->

            <div id="alertBox"
                class="alert d-none"
                role="alert">
            </div>


            <!-- =========================================
                 STEP PROGRESS
            ========================================= -->

            <div class="registration-steps">


                <!-- STEP 1 -->

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


                <!-- STEP 2 -->

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


                <!-- STEP 3 -->

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
                method="POST"
                action="{{ url('/application') }}"
                enctype="multipart/form-data"
                novalidate>

                @csrf


                <div class="registration-form-card">


                    <!-- =================================
                         STEP 1
                    ================================== -->

                    <div class="registration-step-content active"
                        id="step1">


                        <!-- Heading -->

                        <div class="form-section-heading">

                            <h4>
                                व्यक्तिगत जानकारी
                            </h4>

                            <p>
                                अपनी व्यक्तिगत और व्यवसाय से संबंधित जानकारी दर्ज करें।
                            </p>

                        </div>


                        <div class="row">


                            <!-- Full Name -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        पूरा नाम
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="name"
                                        id="name"
                                        class="form-control"
                                        placeholder="पूरा नाम दर्ज करें">

                                    <div class="field-error"
                                        id="err_name">
                                    </div>

                                </div>

                            </div>


                            <!-- Mobile -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        मोबाइल नंबर
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="mobile_no"
                                        id="mobile_no"
                                        class="form-control"
                                        placeholder="मोबाइल नंबर दर्ज करें"
                                        maxlength="10">

                                    <div class="field-error"
                                        id="err_mobile_no">
                                    </div>

                                </div>

                            </div>


                            <!-- WhatsApp -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        व्हाट्सऐप नंबर
                                    </label>

                                    <input type="text"
                                        name="whatsapp_no"
                                        id="whatsapp_no"
                                        class="form-control"
                                        placeholder="व्हाट्सऐप नंबर दर्ज करें"
                                        maxlength="10">

                                    <div class="field-error"
                                        id="err_whatsapp_no">
                                    </div>

                                </div>

                            </div>


                            <!-- Business Name -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        दुकान / व्यवसाय का नाम
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="business_name"
                                        id="business_name"
                                        class="form-control"
                                        placeholder="दुकान / व्यवसाय का नाम दर्ज करें">

                                    <div class="field-error"
                                        id="err_business_name">
                                    </div>

                                </div>

                            </div>


                            <!-- Business Category -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        व्यवसाय श्रेणी
                                        <span class="required">*</span>
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
                                        id="err_business_category">
                                    </div>

                                </div>

                            </div>


                            <!-- Shop Logo -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        दुकान का लोगो
                                        <span class="required">*</span>
                                    </label>

                                    <input type="file"
                                        name="shop_logo"
                                        id="shop_logo"
                                        class="form-control"
                                        accept=".jpg,.jpeg,.png">

                                    <div class="field-error"
                                        id="err_shop_logo">
                                    </div>

                                </div>

                            </div>


                        </div>


                        <!-- Buttons -->

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


                        <!-- Heading -->

                        <div class="form-section-heading">

                            <h4>
                                पता विवरण
                            </h4>

                            <p>
                                अपने व्यवसाय का पूरा पता दर्ज करें।
                            </p>

                        </div>


                        <div class="row">


                            <!-- District -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        जिला
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="district"
                                        id="district"
                                        class="form-control"
                                        placeholder="जिला दर्ज करें">

                                    <div class="field-error"
                                        id="err_district">
                                    </div>

                                </div>

                            </div>


                            <!-- City -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        शहर 
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="city"
                                        id="city"
                                        class="form-control"
                                        placeholder="शहर दर्ज करें">

                                    <div class="field-error"
                                        id="err_city">
                                    </div>

                                </div>

                            </div>


                            <!-- Pincode -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        पिन कोड
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="pincode"
                                        id="pincode"
                                        class="form-control"
                                        placeholder="6 अंकों का पिन कोड"
                                        maxlength="6">

                                    <div class="field-error"
                                        id="err_pincode">
                                    </div>

                                </div>

                            </div>
                            <!-- Address -->

                            <div class="col-12">

                                <div class="form-group">

                                    <label>
                                        पूरा पता
                                        <span class="required">*</span>
                                    </label>

                                    <textarea name="address"
                                        id="address"
                                        class="form-control"
                                        rows="4"
                                        placeholder="पूरा पता दर्ज करें"></textarea>

                                    <div class="field-error"
                                        id="err_address">
                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Buttons -->

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


                        <!-- Heading -->

                        <div class="form-section-heading">

                            <h4>
                                दस्तावेज़ विवरण
                            </h4>

                            <p>
                                पहचान से संबंधित आवश्यक दस्तावेज़ की जानकारी दर्ज करें।
                            </p>

                        </div>


                        <div class="row">


                            <!-- ID Proof Type -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        पहचान पत्र का प्रकार
                                        <span class="required">*</span>
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
                                        id="err_id_proof_type">
                                    </div>

                                </div>

                            </div>


                            <!-- ID Proof Number -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        पहचान पत्र संख्या
                                        <span class="required">*</span>
                                    </label>

                                    <input type="text"
                                        name="id_proof_number"
                                        id="id_proof_number"
                                        class="form-control"
                                        placeholder="पहचान पत्र संख्या दर्ज करें">

                                    <div class="field-error"
                                        id="err_id_proof_number">
                                    </div>

                                </div>

                            </div>


                            <!-- Document -->

                            <div class="col-md-6">

                                <div class="form-group">

                                    <label>
                                        पहचान पत्र दस्तावेज़
                                        <span class="required">*</span>
                                    </label>

                                    <input type="file"
                                        name="id_proof_document"
                                        id="id_proof_document"
                                        class="form-control"
                                        accept=".jpg,.jpeg,.png,.pdf">

                                    <div class="field-error"
                                        id="err_id_proof_document">
                                    </div>

                                </div>

                            </div>


                        </div>


                        <!-- Buttons -->

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

                            </button>

                        </div>


                    </div>


                </div>

            </form>


        </div>

    </div>


    <!-- =========================================
         LOADER
    ========================================= -->

    <div id="formLoader">

        <div class="loader-box">

            <div class="spinner"></div>

            <p class="mb-0 text-muted">
                पंजीकरण जमा किया जा रहा है...
            </p>

        </div>

    </div>


    <!-- =========================================
         STEP JAVASCRIPT
    ========================================= -->

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


            document
                .getElementById('step' + step)
                .classList.add('active');


            document
                .querySelectorAll('.registration-step')
                .forEach(function(indicator) {

                    indicator.classList.remove(
                        'active',
                        'completed'
                    );

                });


            for (let i = 1; i <= 3; i++) {

                let indicator =
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
        ========================================= */

        function nextStep(step) {

            if (!validateStep(step)) {

                return;

            }


            showStep(step + 1);


            window.scrollTo({

                top:
                    document.querySelector(
                        '.th-checkout-wrapper'
                    ).offsetTop - 30,

                behavior: 'smooth'

            });

        }


        /* =========================================
           PREVIOUS STEP
        ========================================= */

        function prevStep(step) {

            showStep(step - 1);


            window.scrollTo({

                top:
                    document.querySelector(
                        '.th-checkout-wrapper'
                    ).offsetTop - 30,

                behavior: 'smooth'

            });

        }


        /* =========================================
           VALIDATE STEP
        ========================================= */

        function validateStep(step) {

            let isValid = true;


            /* Clear Errors */

            document
                .querySelectorAll(
                    '#step' + step + ' .field-error'
                )
                .forEach(function(error) {

                    error.style.display = 'none';
                    error.innerHTML = '';

                });


            document
                .querySelectorAll(
                    '#step' + step + ' .is-invalid'
                )
                .forEach(function(input) {

                    input.classList.remove(
                        'is-invalid'
                    );

                });


            let fields = [];


            /* =====================================
               STEP 1
            ===================================== */

            if (step === 1) {

                fields = [

                    {
                        id: 'name',
                        message:
                            'कृपया पूरा नाम दर्ज करें।'
                    },

                    {
                        id: 'mobile_no',
                        message:
                            'कृपया मोबाइल नंबर दर्ज करें।'
                    },

                    {
                        id: 'business_name',
                        message:
                            'कृपया दुकान / व्यवसाय का नाम दर्ज करें।'
                    },

                    {
                        id: 'business_category',
                        message:
                            'कृपया व्यवसाय श्रेणी चुनें।'
                    },

                    {
                        id: 'shop_logo',
                        message:
                            'कृपया दुकान का लोगो अपलोड करें।'
                    }

                ];

            }


            /* =====================================
               STEP 2
            ===================================== */

            if (step === 2) {

                fields = [

                    {
                        id: 'address',
                        message:
                            'कृपया पूरा पता दर्ज करें।'
                    },

                    {
                        id: 'state',
                        message:
                            'कृपया राज्य चुनें।'
                    },

                    {
                        id: 'district',
                        message:
                            'कृपया जिला दर्ज करें।'
                    },

                    {
                        id: 'city',
                        message:
                            'कृपया शहर / कस्बा दर्ज करें।'
                    },

                    {
                        id: 'pincode',
                        message:
                            'कृपया पिन कोड दर्ज करें।'
                    }

                ];

            }


            /* =====================================
               STEP 3
            ===================================== */

            if (step === 3) {

                fields = [

                    {
                        id: 'id_proof_type',
                        message:
                            'कृपया पहचान पत्र का प्रकार चुनें।'
                    },

                    {
                        id: 'id_proof_number',
                        message:
                            'कृपया पहचान पत्र संख्या दर्ज करें।'
                    },

                    {
                        id: 'id_proof_document',
                        message:
                            'कृपया पहचान पत्र दस्तावेज़ अपलोड करें।'
                    }

                ];

            }


            /* =====================================
               REQUIRED FIELD VALIDATION
            ===================================== */

            fields.forEach(function(field) {

                let input =
                    document.getElementById(
                        field.id
                    );


                if (!input) {

                    return;

                }


                let value = '';


                if (input.type === 'file') {

                    value =
                        input.files.length;

                } else {

                    value =
                        input.value.trim();

                }


                if (!value) {

                    isValid = false;


                    input.classList.add(
                        'is-invalid'
                    );


                    let error =
                        document.getElementById(
                            'err_' + field.id
                        );


                    if (error) {

                        error.innerHTML =
                            field.message;

                        error.style.display =
                            'block';

                    }

                }

            });


            /* =====================================
               MOBILE VALIDATION
            ===================================== */

            if (step === 1) {

                let mobile =
                    document.getElementById(
                        'mobile_no'
                    );


                if (
                    mobile.value.trim() &&
                    !/^[6-9][0-9]{9}$/.test(
                        mobile.value.trim()
                    )
                ) {

                    isValid = false;

                    mobile.classList.add(
                        'is-invalid'
                    );


                    let error =
                        document.getElementById(
                            'err_mobile_no'
                        );


                    error.innerHTML =
                        'कृपया सही 10 अंकों का मोबाइल नंबर दर्ज करें।';

                    error.style.display =
                        'block';

                }


                /* WhatsApp */

                let whatsapp =
                    document.getElementById(
                        'whatsapp_no'
                    );


                if (
                    whatsapp.value.trim() &&
                    !/^[6-9][0-9]{9}$/.test(
                        whatsapp.value.trim()
                    )
                ) {

                    isValid = false;

                    whatsapp.classList.add(
                        'is-invalid'
                    );


                    let error =
                        document.getElementById(
                            'err_whatsapp_no'
                        );


                    error.innerHTML =
                        'कृपया सही 10 अंकों का व्हाट्सऐप नंबर दर्ज करें।';

                    error.style.display =
                        'block';

                }

            }


            /* =====================================
               PINCODE VALIDATION
            ===================================== */

            if (step === 2) {

                let pincode =
                    document.getElementById(
                        'pincode'
                    );


                if (
                    pincode.value.trim() &&
                    !/^[0-9]{6}$/.test(
                        pincode.value.trim()
                    )
                ) {

                    isValid = false;

                    pincode.classList.add(
                        'is-invalid'
                    );


                    let error =
                        document.getElementById(
                            'err_pincode'
                        );


                    error.innerHTML =
                        'कृपया सही 6 अंकों का पिन कोड दर्ज करें।';

                    error.style.display =
                        'block';

                }

            }


            return isValid;

        }


        /* =========================================
           REMOVE ERROR ON INPUT
        ========================================= */

        document.addEventListener(
            'input',
            function(e) {

                if (
                    e.target.classList.contains(
                        'is-invalid'
                    )
                ) {

                    e.target.classList.remove(
                        'is-invalid'
                    );


                    let error =
                        document.getElementById(
                            'err_' + e.target.id
                        );


                    if (error) {

                        error.style.display =
                            'none';

                        error.innerHTML =
                            '';

                    }

                }

            }
        );


        /* =========================================
           REMOVE ERROR ON CHANGE
        ========================================= */

        document.addEventListener(
            'change',
            function(e) {

                if (
                    e.target.classList.contains(
                        'is-invalid'
                    )
                ) {

                    e.target.classList.remove(
                        'is-invalid'
                    );


                    let error =
                        document.getElementById(
                            'err_' + e.target.id
                        );


                    if (error) {

                        error.style.display =
                            'none';

                        error.innerHTML =
                            '';

                    }

                }

            }
        );

    </script>

@endsection