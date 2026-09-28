@extends('public_layouts.main_layout')
@push('css')
<style>
  .contact-card-area.pt-100 {
    padding-top: 40px !important;
}
</style>
@endpush
@section('main_content')
     <!-- Inner Banner -->
        <div class="inner-banner inner-bg2">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>  {{ __('word.contact') }}</h3>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}"> {{ __('word.home') }}</a>
                        </li>
                        <li>  {{ __('word.contact') }}</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Contact Card Area -->
        <div class="contact-card-area pt-100 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-phone-call-1"></i>
                            <h3> {{ __('word.phone') }}</h3>
                            <p><a href="tel:07782-222222">07782-222222</a></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-email"></i>
                            <h3> {{ __('word.email') }}</h3>
                            <p><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#48202d242427083e2b272626662b2725"><span class="__cf_email__" data-cfemail="cba3aea7a7a48bbda8a4a5a5e5a8a4a6">[ collector-bastar@cg.gov.in]</span></a></p>
                            <p></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-card">
                            <i class="flaticon-pin"></i>
                            <h3>  {{ __('word.address') }}</h3>
                            <p> जिला प्रशासन, बस्तर, छत्तीसगढ़</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Card Area End -->

        <!-- Contact widget Area -->
        <div class="contact-widget-area pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15070.889249685664!2d81.92356874751644!3d19.207327262388663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a30175f8de4577d%3A0x1be335329e03552f!2sBastar%2C%20Chhattisgarh%20494223!5e0!3m2!1sen!2sin!4v1789645590023!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="contact-widget-form pl-20">
                            <div class="contact-form">
                                <h3> {{ __('word.sampark') }}</h3>
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="नाम*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="ईमेल*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="मोबाइल नंबर*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="विषय*">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="संदेश*"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn">
                                                संदेश भेजें
                                            </button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
        <!-- Contact widget Area End -->
@endsection
@push('js')
    <script src="{{ asset('user_assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            $('#customer_name').on('input', function() {
                this.value = this.value.replace(/[^A-Za-z\s]/g, '');
            });

            $('#mobile').on('input', function() {

                this.value = this.value.replace(/[^0-9]/g, '');

                if (this.value.length > 10) {
                    this.value = this.value.substring(0, 10);
                }
            });


            $('#gstin').on('input', function() {
                this.value = this.value.toUpperCase();
            });

            function showError(fieldId, message) {

                let field = $('#' + fieldId);

                field.addClass('is-invalid');

                field.closest('.form-group')
                    .find('.help-block')
                    .html(message);
            }

            function clearErrors() {

                $('.help-block').html('');

                $('.form-control, .form-select')
                    .removeClass('is-invalid');
            }

            function validateForm() {

                let isValid = true;

                clearErrors();


                const customerName = $('#customer_name').val().trim();
                const mobile = $('#mobile').val().trim();
                const email = $('#email').val().trim();
                const city = $('#city').val().trim();
                const priority = $('#priority').val();
                const requirement = $('#requirement').val().trim();


                // Customer Name
                if (!customerName) {

                    showError(
                        'customer_name',
                        'Customer name is required.'
                    );

                    isValid = false;

                } else if (!/^[A-Za-z\s]+$/.test(customerName)) {

                    showError(
                        'customer_name',
                        'Customer name may only contain letters and spaces.'
                    );

                    isValid = false;
                }


                // Mobile
                if (!mobile) {

                    showError(
                        'mobile',
                        'Mobile number is required.'
                    );

                    isValid = false;

                } else if (!/^\d{10}$/.test(mobile)) {

                    showError(
                        'mobile',
                        'Enter a valid 10-digit mobile number.'
                    );

                    isValid = false;
                }


                // Email
                if (
                    email &&
                    !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
                ) {

                    showError(
                        'email',
                        'Enter a valid email address.'
                    );

                    isValid = false;
                }


                // City
                if (!city) {

                    showError(
                        'city',
                        'City is required.'
                    );

                    isValid = false;
                }


                // Priority
                if (!priority) {

                    showError(
                        'priority',
                        'Please select enquiry priority.'
                    );

                    isValid = false;
                }


                // Requirement
                if (!requirement) {

                    showError(
                        'requirement',
                        'Customer requirement is required.'
                    );

                    isValid = false;
                }


                return isValid;
            }


            $('#contactForm').on('submit', function(e) {

                e.preventDefault();

                clearErrors();


                // Validation
                if (!validateForm()) {

                    Swal.fire({
                        icon: 'warning',
                        title: 'Validation Error',
                        text: 'Please fill all required fields.',
                        confirmButtonText: 'OK'
                    });

                    return;
                }

                let form = this;

                let formData = new FormData(form);

                let saveBtn = $(form).find('button[type="submit"]');

                saveBtn.prop('disabled', true);

                saveBtn.html(`
    <span class="spinner-border spinner-border-sm me-2"
          role="status"
          aria-hidden="true"></span>
    Saving...
`);

                $.ajax({

                    url: '/contact',

                    type: 'POST',

                    data: formData,

                    processData: false,

                    contentType: false,


                    success: function(response) {

                        if (response.status === true) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message ||
                                    'Enquiry saved successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(function() {

                                location.reload();

                            });

                        } else {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message ||
                                    'Enquiry could not be saved.'
                            });
                        }
                    },


                    error: function(xhr) {

                        console.log('ERROR STATUS:', xhr.status);
                        console.log('ERROR RESPONSE:', xhr.responseText);


                        if (xhr.status === 422) {

                            let response = xhr.responseJSON;


                            if (response && response.errors) {

                                $.each(
                                    response.errors,
                                    function(field, messages) {

                                        showError(
                                            field,
                                            messages[0]
                                        );

                                    }
                                );


                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Validation Error',
                                    text: 'Please check the required fields.',
                                    confirmButtonText: 'OK'
                                });


                            } else {

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    text: 'Please check the entered details.'
                                });
                            }


                        } else {

                            let message =
                                'Something went wrong. Please try again.';


                            if (
                                xhr.responseJSON &&
                                xhr.responseJSON.message
                            ) {

                                message =
                                    xhr.responseJSON.message;
                            }


                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: message
                            });
                        }
                    },

                    complete: function() {
                        saveBtn.prop('disabled', false);
                        saveBtn.html('Submit');
                    }

                });

            });

            $('#contactForm input, #contactForm textarea, #contactForm select')
                .on('input change', function() {

                    $(this).removeClass('is-invalid');

                    $(this)
                        .closest('.form-group')
                        .find('.help-block')
                        .html('');
                });

        });
    </script>
@endpush
