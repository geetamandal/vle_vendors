@extends('layouts.main_layouts')

@push('css')
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">Deal Entry</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Deal Management</a></li>
                    <li class="breadcrumb-item active">Deal Entry</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" id="dealEntryForm" novalidate>
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

                                <input type="text" class="form-control" id="customerName" name="customer_name"
                                    placeholder="Enter customer name">

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

                            <!-- Area -->
                            <div class="col-md-6">
                                <label for="area" class="form-label">Area</label>
                                <input type="text" class="form-control" id="area" name="area"
                                    placeholder="Enter area / locality">
                                <div id="area_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Deal Date -->
                            <div class="col-md-6">
                                <label for="dealDate" class="form-label">
                                    Deal Date <span class="text-danger">*</span>
                                </label>
                                <input type="date" class="form-control" id="dealDate" name="deal_date"
                                    value="{{ date('Y-m-d') }}" required>
                                <div id="deal_date_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Address -->
                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter complete address"></textarea>
                            </div>

                            <!-- GSTIN -->
                            <div class="col-md-6">
                                <label for="gstin" class="form-label">GSTIN</label>
                                <input type="text" class="form-control" id="gstin" name="gstin"
                                    placeholder="Enter GSTIN" maxlength="15">
                                <div id="gstin_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Deal Amount -->
                            <div class="col-md-6">
                                <label for="dealAmount" class="form-label">
                                    Deal Amount <span class="text-danger">*</span>
                                </label>
                                <input type="number" class="form-control" id="dealAmount" name="deal_amount"
                                    placeholder="Enter deal amount" min="0" step="0.01" required>
                                <div id="deal_amount_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Expected Closing Date -->
                            <div class="col-md-6">
                                <label for="closingDate" class="form-label">
                                    Expected Closing Date
                                </label>
                                <input type="date" class="form-control" id="closingDate"
                                    name="expected_closing_date">
                                <div id="expected_closing_date_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <input type="hidden" name="deal_status" value="Confirmed" id="dealStatus">

                            <!-- Payment Status -->
                            <div class="col-md-6">
                                <label class="form-label">Payment Status <span class="text-danger">*</span></label>
                                <select name="payment_status" id="paymentStatus" class="form-select" required>
                                    <option value="">Select Payment Status</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Partial">Partial</option>
                                    <option value="Paid">Paid</option>
                                </select>
                                <div id="payment_status_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Deal Description -->
                            <div class="col-12">
                                <label for="dealDescription" class="form-label">
                                    Deal Description <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" id="dealDescription" name="deal_description" rows="3"
                                    placeholder="Enter deal description" required></textarea>
                                <div id="deal_description_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <!-- Remarks -->
                            <div class="col-12">
                                <label for="remarks" class="form-label">Remarks</label>
                                <textarea class="form-control" id="remarks" name="remarks" rows="2" placeholder="Enter remarks"></textarea>
                            </div>

                            <!-- Buttons -->
                            <div class="col-12 pt-2">
                                <button class="btn btn-primary" type="submit" id="saveDealBtn">
                                    <i data-feather="save" class="me-1" style="width:16px;height:16px;"></i>
                                    Save Deal
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
@endsection

@push('js')
    <script src="{{ asset('user_assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            // Customer Name
            $('#customerName').on('input', function() {
                this.value = this.value.replace(/[^A-Za-z\s]/g, '');
            });

            // Mobile
            $('#mobile').on('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '').substring(0, 10);
            });

            // GSTIN
            $('#gstin').on('input', function() {
                this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '').substring(0, 15);
            });

            // Customer Type
            $('#customerType').on('change', function() {

                let type = $(this).val();

                $('#customerName, #mobile, #email, #city, #area, #address').val('');

                $('#oldCustomerSelect')
                    .empty()
                    .append('<option value="">Select Customer</option>');

                if (type === 'old') {

                    $('#customerName')
                        .addClass('d-none')
                        .prop('required', false);

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
                                    data-address="${customer.address || ''}"
                                    data-gstin="${customer.gstin || ''}">
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
                }
            });

            // Existing Customer Selected
            $('#oldCustomerSelect').on('change', function() {

                let selected = $(this).find(':selected');

                if (!$(this).val()) {
                    $('#customerName, #mobile, #email, #city, #address, #gstin').val('');
                    return;
                }

                $('#customerName').val(selected.data('name'));
                $('#mobile').val(selected.data('mobile'));
                $('#email').val(selected.data('email'));
                $('#city').val(selected.data('city'));
                $('#address').val(selected.data('address'));
                $('#gstin').val(selected.data('gstin'));
            });

            // Show Error
            function showError(fieldId, message) {

                $('#' + fieldId + '_error').html(message);

                $('[name="' + fieldId + '"]')
                    .addClass('is-invalid');
            }

            // Validation
            function validateForm() {

                let isValid = true;

                $('.error-message').html('');
                $('.form-control, .form-select').removeClass('is-invalid');

                const customerType = $('#customerType').val();
                const mobile = $('#mobile').val().trim();
                const email = $('#email').val().trim();
                const city = $('#city').val().trim();
                const dealDate = $('#dealDate').val();
                const dealAmount = $('#dealAmount').val();
                const dealStatus = $('#dealStatus').val();
                const paymentStatus = $('#paymentStatus').val();
                const dealDescription = $('#dealDescription').val().trim();

                // Customer Type
                if (!customerType) {
                    showError('customer_type', 'Please select customer type.');
                    isValid = false;
                }

                // Customer
                if (customerType === 'new') {

                    const name = $('#customerName').val().trim();

                    if (!name) {
                        showError('customer_name', 'Customer name is required.');
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

                // Deal Date
                if (!dealDate) {

                    showError(
                        'deal_date',
                        'Deal date is required.'
                    );
                    isValid = false;
                }

                // Deal Amount
                if (!dealAmount || parseFloat(dealAmount) <= 0) {

                    showError(
                        'deal_amount',
                        'Valid deal amount is required.'
                    );
                    isValid = false;
                }

                // Deal Status
                if (!dealStatus) {

                    showError(
                        'deal_status',
                        'Please select deal status.'
                    );
                    isValid = false;
                }

                // Payment Status
                if (!paymentStatus) {

                    showError(
                        'payment_status',
                        'Please select payment status.'
                    );
                    isValid = false;
                }

                // Description
                if (!dealDescription) {

                    showError(
                        'deal_description',
                        'Deal description is required.'
                    );
                    isValid = false;
                }

                return isValid;
            }

            // Submit
            $('#dealEntryForm').on('submit', function(e) {

                e.preventDefault();

                $('.error-message').html('');
                $('.form-control, .form-select').removeClass('is-invalid');

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
                let saveBtn = $('#saveDealBtn');

                saveBtn.prop('disabled', true);

                saveBtn.html(`
            <span class="spinner-border spinner-border-sm me-1"
                role="status"
                aria-hidden="true"></span>
            Saving...
        `);

                $.ajax({
                    url: "{{ url('operator/add-deal') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,

                    success: function(response) {

                        if (response.status === true) {

                            Swal.fire({
                                icon: 'success',
                                title: 'Success!',
                                text: response.message || 'Deal saved successfully.',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                location.reload();
                            });

                        } else {

                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: response.message || 'Deal could not be saved.'
                            });
                        }
                    },

                    error: function(xhr) {

                        if (xhr.status === 422) {

                            let response = xhr.responseJSON;

                            if (response && response.errors) {

                                $.each(response.errors, function(field, messages) {

                                    $('#' + field + '_error')
                                        .html(messages[0]);

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

                        saveBtn.prop('disabled', false);

                        saveBtn.html(`
                    <i data-feather="save"
                        class="me-1"
                        style="width:16px;height:16px;"></i>
                    Save Deal
                `);

                        if (typeof feather !== 'undefined') {
                            feather.replace();
                        }
                    }
                });
            });

            // Reset
            $('#dealEntryForm').on('reset', function() {

                setTimeout(function() {

                    $('.error-message').html('');
                    $('.form-control, .form-select')
                        .removeClass('is-invalid');

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