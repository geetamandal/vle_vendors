<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | VLE Bastar</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
   <style>
    .alog-brand {
        position: relative;
        width: 50%;
        height: 100%;
        overflow: hidden;
        padding: 0 !important;
        margin: 0 !important;
    }

    .auth-left-image {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    @media (max-width: 768px) {

        .alog-brand-title,
        .alog-brand-desc,
        .alog-brand-stats,
        #alog-brand-stat,
        .alog-features {
            display: none;
        }
    }
</style>
</head>

<body class="auth-login-page">

    <div class="auth-page auth-premium">
        <!-- Static Decorative Orbs -->
        <div class="auth-orb auth-orb-1"></div>
        <div class="auth-orb auth-orb-2"></div>
        <div class="auth-orb auth-orb-3"></div>

        <div class="alog-wrapper">
            <!-- Left Brand Panel -->

            <!-- Left Brand Panel -->
            <div class="alog-brand">
                <div class="alog-brand-orb alog-brand-orb-1"></div>
                <div class="alog-brand-orb alog-brand-orb-2"></div>

                <div class="position-relative w-100 h-100" style="z-index: 2;">

                    <!-- Left Brand Panel -->
                    <div class="alog-brand">
                        <img src="{{ asset('assets/images/auth.png') }}" alt="Authentication" class="auth-left-image" style="height: 590px;width:auto">
                    </div>

                </div>
            </div>

            <!-- Right Form Panel -->
            <div class="alog-form">
                <div class="alog-form-inner">

                    <!-- Heading -->
                    <div class="text-center mb-4">
                        <img src="logo.png" alt="VLE" style="width: 90px; height: 90px;">
                        <p class="text-muted" style="font-size: 0.88rem;">
                            Enter your registered mobile number to login
                        </p>
                    </div>

                    <!-- Login Form -->
                    <form id="loginForm" class="submit-form" method="POST">
                        @csrf

                        <!-- Mobile Number -->
                        <div class="mb-3">
                            <label class="form-label alog-label" for="mobile">
                                Mobile Number
                                <span class="text-danger-600">*</span>
                            </label>

                            <div class="alog-input-wrap">
                                <span class="alog-input-icon">
                                    <i data-feather="smartphone" style="width: 16px; height: 16px;"></i>
                                </span>

                                <input type="tel" class="form-control alog-input" id="mobile" name="mobile_no"
                                    placeholder="Enter Mobile Number" maxlength="10" inputmode="numeric"
                                    autocomplete="tel">
                            </div>

                            <span class="text-danger mobile-error d-block mt-1"></span>
                        </div>


                        <!-- CAPTCHA -->
                        <div class="mb-4">

                            <label class="form-label alog-label" for="captcha">
                                Security Verification
                                <span class="text-danger-600">*</span>
                            </label>

                            <div class="d-flex align-items-center gap-2 mb-3">

                                <img src="{{ url('/generate-captcha') }}" alt="CAPTCHA" id="captcha-image"
                                    style="height: 48px; border-radius: 10px;">

                                <button type="button" class="btn btn-link p-0" id="btnRefreshCaptcha"
                                    onclick="refreshCaptcha()" title="Refresh CAPTCHA">

                                    <i data-feather="refresh-cw" style="width: 18px; height: 18px;"></i>
                                </button>

                            </div>

                            <div class="alog-input-wrap">
                                <span class="alog-input-icon">
                                    <i data-feather="shield" style="width: 16px; height: 16px;"></i>
                                </span>

                                <input type="text" class="form-control alog-input" name="captcha" id="captcha"
                                    placeholder="Enter CAPTCHA code" maxlength="6" inputmode="numeric"
                                    autocomplete="off">
                            </div>

                            <span class="text-danger captcha-error d-block mt-1"></span>

                        </div>


                        <!-- OTP Section -->
                        <div id="otpSection" style="display: none;" class="mb-4">

                            <label class="form-label alog-label" for="otp">
                                OTP
                                <span class="text-danger-600">*</span>
                            </label>

                            <div class="alog-input-wrap">
                                <span class="alog-input-icon">
                                    <i data-feather="key" style="width: 16px; height: 16px;"></i>
                                </span>

                                <input type="text" class="form-control alog-input" id="otp" name="otp"
                                    placeholder="Enter OTP" maxlength="6" inputmode="numeric" autocomplete="off">
                            </div>

                            <span class="text-danger otp-error d-block mt-1"></span>

                        </div>


                        <!-- Send OTP Button -->
                        <div id="sendOtpButton">
                            <button type="button" id="sendOtpBtn" class="btn alog-submit-btn w-100">

                                Send OTP
                                <i data-feather="arrow-right" style="width: 16px; height: 16px;"></i>
                            </button>
                        </div>


                        <!-- Verify OTP / Login Button -->
                        <div id="verifyOtpButton" style="display: none;">
                            <button type="button" id="verifyOtpBtn" class="btn alog-submit-btn w-100">

                                Login
                                <i data-feather="log-in" style="width: 16px; height: 16px;"></i>
                            </button>
                        </div>

                    </form>

                    <!-- Security Message -->
                    <div class="text-center mt-4">
                        <p class="text-muted mb-0" style="font-size: 0.80rem;">
                            <i data-feather="lock" style="width: 13px; height: 13px;"></i>
                            A secure verification code will be sent to your registered mobile number.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('user_assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            // Common validation
            function validateMobile(mobile) {
                if (!mobile) return 'Mobile number is required.';
                if (!/^\d+$/.test(mobile)) return 'Mobile number must contain only digits.';
                if (mobile.length !== 10) return 'Mobile number must be 10 digits.';
                if (!/^[6-9]\d{9}$/.test(mobile)) return 'Please enter a valid mobile number.';
                return '';
            }

            function validateOtp(otp) {
                if (!otp) return 'OTP is required.';
                if (!/^\d+$/.test(otp)) return 'OTP must contain only digits.';
                if (otp.length !== 6) return 'OTP must be 6 digits.';
                return '';
            }

            function validateCaptcha(captcha) {
                if (!captcha) return 'CAPTCHA is required.';
                if (!/^\d+$/.test(captcha)) return 'CAPTCHA must contain only digits.';
                if (captcha.length !== 6) return 'CAPTCHA must be 6 digits.';
                return '';
            }

            // SEND OTP
            $('#sendOtpBtn').on('click', function() {

                let mobile = $('#mobile').val().trim();
                let captcha = $('#captcha').val().trim();

                $('.mobile-error, .captcha-error').html('');

                let mobileError = validateMobile(mobile);
                let captchaError = validateCaptcha(captcha);

                // Show both errors together
                if (mobileError) $('.mobile-error').html(mobileError);
                if (captchaError) $('.captcha-error').html(captchaError);

                if (mobileError || captchaError) {
                    if (mobileError) $('#mobile').focus();
                    else $('#captcha').focus();
                    return;
                }

                let btn = $('#sendOtpBtn');

                btn.prop('disabled', true).html('Sending OTP...');

                $.ajax({
                    url: "/send-otp",
                    type: "POST",
                    headers: {
                        'Accept': 'application/json'
                    },
                    data: {
                        _token: "{{ csrf_token() }}",
                        mobile_no: mobile,
                        captcha: captcha
                    },

                    success: function(response) {

                        if (response.success) {

                            $('#otpSection').show();

                            $('#sendOtpButton').hide();

                            $('#verifyOtpButton').show();
                            // Disable Mobile Number and CAPTCHA
                            $('#mobile').prop('disabled', true);
                            $('#captcha').prop('disabled', true);

                            // Disable CAPTCHA refresh button
                            $('#btnRefreshCaptcha').prop('disabled', true);

                            // Disable CAPTCHA image
                            $('#captcha-image').css({
                                'opacity': '0.5',
                                'pointer-events': 'none'
                            });

                            $('#otp').focus();

                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'OTP Sent',
                                    text: 'OTP has been sent to your mobile number.',
                                    timer: 1500,
                                    showConfirmButton: false
                                });
                            }


                        } else {
                            handleSendError(response);
                            btn.prop('disabled', false).html('Send OTP');
                        }
                    },

                    error: function(xhr) {

                        btn.prop('disabled', false).html('Send OTP');

                        if (xhr.status === 422) {
                            handleSendError(xhr.responseJSON);
                        } else {
                            showError('Something went wrong. Please try again.');
                        }
                    }
                });
            });

            // VERIFY OTP
            $('#verifyOtpBtn').on('click', function() {

                let mobile = $('#mobile').val().trim();
                let otp = $('#otp').val().trim();

                $('.mobile-error, .otp-error').html('');

                let mobileError = validateMobile(mobile);
                let otpError = validateOtp(otp);

                // Show both errors together
                if (mobileError) $('.mobile-error').html(mobileError);
                if (otpError) $('.otp-error').html(otpError);

                if (mobileError || otpError) {
                    if (mobileError) $('#mobile').focus();
                    else $('#otp').focus();
                    return;
                }

                let btn = $('#verifyOtpBtn');

                btn.prop('disabled', true).html('Verifying...');

                $.ajax({
                    url: "/verify-otp",
                    type: "POST",

                    data: {
                        _token: "{{ csrf_token() }}",
                        mobile_no: mobile,
                        otp: otp
                    },

                    success: function(response) {

                        if (response.success) {

                            window.location.href = response.redirect;

                        } else {

                            $('.otp-error').html(response.message);

                            btn.prop('disabled', false)
                                .html('Login');
                        }
                    },

                    error: function(xhr) {

                        btn.prop('disabled', false)
                            .html('Login');

                        if (xhr.status === 422) {
                            handleVerifyError(xhr.responseJSON);
                        }
                    }
                });
            });

            // SEND OTP ERROR
            function handleSendError(response) {

                if (response.field === 'mobile') {
                    $('.mobile-error').html('User not found or inactive.');
                }

                if (response.field === 'captcha') {
                    $('.captcha-error').html('Invalid CAPTCHA.');
                    refreshCaptcha();
                }

                if (response.errors) {

                    if (response.errors.mobile_no) {
                        $('.mobile-error').html('Please enter a valid mobile number.');
                    }

                    if (response.errors.captcha) {
                        $('.captcha-error').html('CAPTCHA is required.');
                    }
                }
            }


            // VERIFY OTP ERROR
            function handleVerifyError(response) {

                if (response.message === 'Invalid OTP') {
                    $('.otp-error').html('Invalid OTP.');
                } else if (response.message === 'User not active') {
                    $('.mobile-error').html('User not found or inactive.');
                } else if (response.message) {
                    $('.otp-error').html(response.message);
                }

                if (response.errors) {

                    if (response.errors.mobile_no) {
                        $('.mobile-error').html('Please enter a valid mobile number.');
                    }

                    if (response.errors.otp) {
                        $('.otp-error').html('OTP must be 6 digits.');
                    }
                }
            }


            // SWEET ALERT ERROR
            function showError(message) {

                if (typeof Swal !== 'undefined') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: message
                    });
                }
            }

        });

        function refreshCaptcha() {

            $('#captcha-image').attr(
                'src',
                "{{ url('/generate-captcha') }}?" + new Date().getTime()
            );

        }
    </script>

</body>

</html>
