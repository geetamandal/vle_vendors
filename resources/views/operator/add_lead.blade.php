@extends('layouts.main_layouts')
@push('css')
@endpush
@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">Enquiry Entry</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Enquiry Management</a>
                    </li>
                    <li class="breadcrumb-item active">Enquiry Entry</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Masonry Grid -->
    <div class="masonry-grid">

        <!-- 1. Custom Validation (needs-validation) -->
        <div class="masonry-item">
            <div class="card">                
                <div class="card-body">
                    
                    <form class="needs-validation" id="leadEntryForm" novalidate>
                        @csrf
                        <div class="row g-3">

                            <!-- Customer Type -->
                            <div class="col-md-6">
                                <label for="customerType" class="form-label">
                                    Customer Type <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" id="customerType" name="customer_type" required>
                                    <option value="" selected disabled>Select Customer Type</option>
                                    <option value="old">Existing Customer</option>
                                    <option value="new">New Customer</option>
                                </select>

                                <div id="customer_type_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Customer Name -->
                            <div class="col-md-6">
                                <label for="customerName" class="form-label">
                                    Customer Name <span class="text-danger">*</span>
                                </label>

                                <!-- New Customer -->
                                <input type="text" class="form-control" id="customerName" name="customer_name"
                                    placeholder="Enter customer name">

                                <!-- Existing Customer -->
                                <select class="form-select d-none mt-2" id="oldCustomerSelect" name="old_customer_id">
                                    <option value="">Select Customer</option>
                                </select>

                                <div id="customer_name_error" class="error-message text-danger small mt-1"></div>
                                <div id="old_customer_id_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Mobile -->
                            <div class="col-md-6">
                                <label for="mobile" class="form-label">
                                    Mobile Number <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    placeholder="Enter 10-digit mobile number" maxlength="10" required>

                                <div id="mobile_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>

                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email address">

                                <div id="email_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- City -->
                            <div class="col-md-6">
                                <label for="city" class="form-label">
                                    City <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control" id="city" name="city"
                                    placeholder="Enter city" required>

                                <div id="city_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Enquiry Date -->
                            <div class="col-md-6">
                                <label for="enquiryDate" class="form-label">
                                    Enquiry Date <span class="text-danger">*</span>
                                </label>

                                <input type="date" class="form-control" id="enquiryDate" name="enquiry_date"
                                    value="{{ date('Y-m-d') }}" required>

                                <div id="enquiry_date_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Address -->
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>

                                <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter complete address"></textarea>
                            </div>

                            <!-- GSTIN -->
                            <div class="col-md-4">
                                <label for="gstin" class="form-label">GSTIN</label>

                                <input type="text" class="form-control" id="gstin" name="gstin"
                                    placeholder="Enter GSTIN (Optional)" maxlength="15">
                            </div>

                            <!-- Priority -->
                            <div class="col-md-4">
                                <label for="priority" class="form-label">
                                    Enquiry Priority <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" id="priority" name="priority" required>
                                    <option value="" selected disabled>Select Priority</option>
                                    <option value="High">High</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Low">Low</option>
                                </select>

                                <div id="priority_error" class="error-message text-danger small mt-1"></div>
                            </div>
                            <div class="col-md-4">
                                <label for="reference" class="form-label">
                                    Reference <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" id="reference" name="reference" required>
                                    <option value="" selected disabled>Select Reference</option>
                                    <option value="Website">Website</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Referral">Referral</option>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Walk-in">Walk-in</option>
                                    <option value="Existing Customer">Existing Customer</option>
                                    <option value="Other">Other</option>
                                </select>

                                <div id="reference_error" class="error-message text-danger small mt-1"></div>
                            </div>
                            <!-- Requirement -->
                            <div class="col-md-12">
                                <label for="requirement" class="form-label">
                                    Customer Requirement <span class="text-danger">*</span>
                                </label>

                                <textarea class="form-control" id="requirement" name="requirement" rows="3"
                                    placeholder="Describe customer requirement" required></textarea>

                                <div id="requirement_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Buttons -->
                            <div class="col-12 pt-2">
                                <button class="btn btn-primary" type="submit" id="saveLeadBtn">
                                    <i data-feather="save" class="me-1" style="width:16px;height:16px;"></i>
                                    Save Enquiry
                                </button>

                                <button class="btn btn-outline-secondary ms-2" type="reset">
                                    <i data-feather="refresh-cw" class="me-1" style="width:16px;height:16px;"></i>
                                    Reset
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Masonry Grid -->
@endsection

@push('css')
    <script src="{{ asset('user_assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {

            // Customer Name - only letters and spaces
            $('#customerName').on('input', function() {
                this.value = this.value.replace(/[^A-Za-z\s]/g, '');
            });

            // Mobile - only numbers
            $('#mobile').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');

                if (this.value.length > 10) {
                    this.value = this.value.substring(0, 10);
                }
            });


            // Customer Type Change
            $(document).on('change', '#customerType', function() {

                let type = $(this).val();

                $('#customerName, #mobile, #email, #city, #address').val('');
                $('#oldCustomerSelect')
                    .empty()
                    .append('<option value="">Select Customer</option>');

                if (type === 'old') {

                    // Show existing customer dropdown
                    $('#customerName').addClass('d-none').prop('required', false);

                    $('#oldCustomerSelect')
                        .removeClass('d-none')
                        .prop('required', true);

                    $.ajax({
                        url: "{{ url('common/customer-list') }}",
                        type: "GET",
                        data: {
                            type: 'old'
                        },

                        success: function(response) {

                            if (response.status && response.data.length > 0) {

                                $.each(response.data, function(index, customer) {

                                    $('#oldCustomerSelect').append(`
                                    <option value="${customer.id}"
                                        data-name="${customer.customer_name || ''}"
                                        data-mobile="${customer.mobile || ''}"
                                        data-email="${customer.email || ''}"
                                        data-city="${customer.city || ''}"
                                        data-address="${customer.address || ''}">
                                        ${customer.customer_name} - ${customer.mobile || ''}
                                    </option>
                                `);
                                });

                            } else {

                                $('#oldCustomerSelect').append(
                                    '<option value="" disabled>No Existing Customer Found</option>'
                                );
                            }
                        },

                        error: function() {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'Customer data could not be loaded.'
                            });
                        }
                    });

                } else if (type === 'new') {

                    $('#oldCustomerSelect')
                        .addClass('d-none')
                        .prop('required', false);

                    $('#customerName')
                        .removeClass('d-none')
                        .prop('required', true);

                } else {

                    $('#oldCustomerSelect')
                        .addClass('d-none')
                        .prop('required', false);

                    $('#customerName')
                        .removeClass('d-none')
                        .prop('required', false);
                }
            });


            // Existing Customer Selected
            $(document).on('change', '#oldCustomerSelect', function() {

                let selected = $(this).find(':selected');

                if ($(this).val() === '') {
                    $('#customerName, #mobile, #email, #city, #address').val('');
                    return;
                }

                // Fill customer details
                $('#customerName').val(selected.data('name'));
                $('#mobile').val(selected.data('mobile'));
                $('#email').val(selected.data('email'));
                $('#city').val(selected.data('city'));
                $('#address').val(selected.data('address'));
            });


            // Show Validation Error
            function showError(fieldId, message) {

                $('#' + fieldId + '_error').html(message);

                $('[name="' + fieldId + '"]').addClass('is-invalid');
            }


            // Form Validation
            function validateForm() {

                let isValid = true;

                $('.error-message').html('');
                $('.form-control, .form-select').removeClass('is-invalid');

                const customerType = $('#customerType').val();
                const priority = $('#priority').val();
                const mobile = $('#mobile').val().trim();
                const email = $('#email').val().trim();
                const enquiryDate = $('#enquiryDate').val();
                const city = $('#city').val().trim();
                const requirement = $('#requirement').val().trim();
                const reference = $('#reference').val();

                // Customer Type
                if (!customerType) {
                    showError('customer_type', 'Please select a customer type.');
                    isValid = false;
                }

                // Customer Name / Existing Customer
                if (customerType === 'new') {

                    const name = $('#customerName').val().trim();

                    if (!name) {
                        showError('customer_name', 'Customer name is required.');
                        isValid = false;
                    } else if (!/^[A-Za-z\s]+$/.test(name)) {
                        showError('customer_name', 'Only letters and spaces are allowed.');
                        isValid = false;
                    }

                } else if (customerType === 'old') {

                    if (!$('#oldCustomerSelect').val()) {
                        showError(
                            'old_customer_id',
                            'Please select an existing customer.'
                        );
                        isValid = false;
                    }
                }

                // Mobile
                if (!mobile) {
                    showError('mobile', 'Mobile number is required.');
                    isValid = false;

                } else if (!/^\d{10}$/.test(mobile)) {
                    showError(
                        'mobile',
                        'Enter a valid 10-digit mobile number.'
                    );
                    isValid = false;
                }

                // Email
                if (email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    showError('email', 'Enter a valid email address.');
                    isValid = false;
                }

                // Enquiry Date
                if (!enquiryDate) {
                    showError('enquiry_date', 'Enquiry date is required.');
                    isValid = false;
                }

                // City
                if (!city) {
                    showError('city', 'City is required.');
                    isValid = false;
                }
                // Priority
                if (!priority) {
                    showError('priority', 'Please select a priority.');
                    isValid = false;
                }
                // Reference
                if (!reference) {
                    showError('reference', 'Please select a reference.');
                    isValid = false;
                }

                // Requirement
                if (!requirement) {
                    showError('requirement', 'Requirement is required.');
                    isValid = false;
                }

                return isValid;
            }


            // Lead Form Submit
            $('#leadEntryForm').on('submit', function(e) {
                e.preventDefault();

                // Clear old errors
                $('.error-message').html('');
                $('.form-control, .form-select').removeClass('is-invalid');

                // Validate
                if (!validateForm()) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validation Error',
                        text: 'Please fill all required fields correctly.',
                        timer: 2000,
                        showConfirmButton: false
                    });

                    return;
                }

                let form = this;
                let formData = new FormData(form);
                let saveBtn = $('#saveLeadBtn');

                // Disable button
                saveBtn.prop('disabled', true);

                // Loading
                saveBtn.html(`
        <span class="spinner-border spinner-border-sm me-1"
              role="status"
              aria-hidden="true"></span>
        Saving...
    `);

                $.ajax({
                    url: 'add-enquiry',
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {

                        if (response.status === true) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message || 'Enquiry saved successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                location.reload();
                            });

                        } else {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message || 'Enquiry could not be saved.'
                            });

                        }
                    },
                    error: function(xhr) {

                        console.log('ERROR STATUS:', xhr.status);
                        console.log('ERROR RESPONSE:', xhr.responseText);

                        if (xhr.status === 422) {

                            let response = xhr.responseJSON;

                            if (response && response.errors) {

                                $.each(response.errors, function(field, messages) {

                                    $('#' + field + '_error').html(messages[0]);

                                    $('[name="' + field + '"]')
                                        .addClass('is-invalid');
                                });

                            } else {

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    text: 'Please check the entered details.'
                                });
                            }

                        } else if (xhr.status === 404) {

                            Swal.fire({
                                icon: 'error',
                                title: 'Customer Not Found',
                                text: xhr.responseJSON?.message || 'Customer not found.'
                            });

                        } else {

                            let message = 'Something went wrong. Please try again.';

                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                message = xhr.responseJSON.message;
                            }

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: message
                            });
                        }
                    },

                    complete: function() {

                        // Enable button
                        saveBtn.prop('disabled', false);

                        // Restore button
                        saveBtn.html(`
                <i data-feather="save"
                   class="me-1"
                   style="width:16px;height:16px;"></i>
                Save Enquiry
            `);

                        // Feather
                        if (typeof feather !== 'undefined') {
                            feather.replace();
                        }
                    }
                });
            });
            // Reset Form
            $('#leadEntryForm').on('reset', function() {

                setTimeout(function() {

                    $('.error-message').html('');
                    $('.form-control, .form-select').removeClass('is-invalid');

                    $('#oldCustomerSelect')
                        .addClass('d-none')
                        .prop('required', false);

                    $('#customerName')
                        .removeClass('d-none')
                        .prop('required', false);

                }, 100);
            });

        });
    </script>
@endpush
