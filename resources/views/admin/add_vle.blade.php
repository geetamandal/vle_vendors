@extends('layouts.main_layouts')
@push('css')
@endpush
@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">VLE एंट्री</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">VLE प्रबंध</a>
                    </li>
                    <li class="breadcrumb-item active">VLE एंट्री</li>
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
                    
                   <form class="needs-validation" id="vleOnboardingForm" novalidate>
    @csrf

    <div class="row g-3">

        <!-- ========================= -->
        <!-- 1. BASIC DETAILS -->
        <!-- ========================= -->

        <div class="col-12">
            <h5 class="mb-0 mt-2">जानकारी</h5>
            <hr class="mt-2 mb-1">
        </div>

        <!-- VLE Name -->
        <div class="col-md-6">
            <label for="vleName" class="form-label">
                VLE नाम  <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="vleName"
                name="vle_name"
                placeholder="Enter VLE name"
                required>

            <div id="vle_name_error" class="error-message text-danger small mt-1"></div>
        </div>

        <!-- Mobile Number -->
        <div class="col-md-6">
            <label for="mobile" class="form-label">
               मोबाइल नंबर <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="mobile"
                name="mobile"
                placeholder="Enter 10-digit mobile number"
                maxlength="10"
                required>

            <div id="mobile_error" class="error-message text-danger small mt-1"></div>
        </div>
         <div class="col-md-6">
            <label for="whatsappNumber" class="form-label">
                WhatsApp Number
            </label>

            <input type="text"
                class="form-control"
                id="whatsappNumber"
                name="whatsapp_number"
                placeholder="Enter WhatsApp number"
                maxlength="10">

            <div id="whatsapp_number_error" class="error-message text-danger small mt-1"></div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <label for="email" class="form-label">
                Email Address
            </label>

            <input type="email"
                class="form-control"
                id="email"
                name="email"
                placeholder="Enter email address">

            <div id="email_error" class="error-message text-danger small mt-1"></div>
        </div>

        <!-- Profile Photo -->
        <div class="col-md-6">
            <label for="profilePhoto" class="form-label">
                Profile Photo <span class="text-danger">*</span>
            </label>

            <input type="file"
                class="form-control"
                id="profilePhoto"
                name="profile_photo"
                accept="image/jpeg,image/jpg,image/png"
                required>

            <div id="profile_photo_error" class="error-message text-danger small mt-1"></div>
        </div>


        <!-- ========================= -->
        <!-- 2. SHOP / BUSINESS DETAILS -->
        <!-- ========================= -->

        <div class="col-12 mt-4">
            <h5 class="mb-0">Shop / Business Details</h5>
            <hr class="mt-2 mb-1">
        </div>

        <!-- Shop Name -->
        <div class="col-md-6">
            <label for="shopName" class="form-label">
                Shop Name <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="shopName"
                name="shop_name"
                placeholder="Enter shop name"
                required>

            <div id="shop_name_error" class="error-message text-danger small mt-1"></div>
        </div>

              <!-- Block -->
        <div class="col-md-6">
            <label for="block" class="form-label">
                Block <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="block"
                name="block"
                placeholder="Enter block"
                required>

            <div id="block_error" class="error-message text-danger small mt-1"></div>
        </div>
        <!-- Village -->
        <div class="col-md-6">
            <label for="village" class="form-label">
                Village <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="village"
                name="village"
                placeholder="Enter village"
                required>

            <div id="village_error" class="error-message text-danger small mt-1"></div>
        </div>

        <!-- Pincode -->
        <div class="col-md-6">
            <label for="pincode" class="form-label">
                Pincode <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="pincode"
                name="pincode"
                placeholder="Enter 6-digit pincode"
                maxlength="6"
                required>

            <div id="pincode_error" class="error-message text-danger small mt-1"></div>
        </div>

          <!-- Shop Address -->
        <div class="col-md-6">
            <label for="shopAddress" class="form-label">
                Shop Address <span class="text-danger">*</span>
            </label>

            <textarea type="text"
                class="form-control"
                id="shopAddress"
                name="shop_address"
                placeholder="Enter shop address"
                required></textarea>

            <div id="shop_address_error" class="error-message text-danger small mt-1"></div>
        </div>


        <!-- Shop Image -->
        <div class="col-md-6">
            <label for="shopImage" class="form-label">
                Shop Image <span class="text-danger">*</span>
            </label>

            <input type="file"
                class="form-control"
                id="shopImage"
                name="shop_image"
                accept="image/jpeg,image/jpg,image/png"
                required>

            <div id="shop_image_error" class="error-message text-danger small mt-1"></div>
        </div>

        <!-- Shop Banner Image -->
        <div class="col-md-6">
            <label for="shopBannerImage" class="form-label">
                Shop Banner Image <span class="text-danger">*</span>
            </label>

            <input type="file"
                class="form-control"
                id="shopBannerImage"
                name="shop_banner_image"
                accept="image/jpeg,image/jpg,image/png"
                required>

            <div id="shop_banner_image_error" class="error-message text-danger small mt-1"></div>
        </div>


        <!-- ========================= -->
        <!-- 3. VLE IDENTIFICATION -->
        <!-- ========================= -->

        <div class="col-12 mt-4">
            <h5 class="mb-0">VLE Identification</h5>
            <hr class="mt-2 mb-1">
        </div>

        <!-- ID Proof Type -->
        <div class="col-md-6">
            <label for="idProofType" class="form-label">
                ID Proof Type <span class="text-danger">*</span>
            </label>

            <select class="form-select"
                id="idProofType"
                name="id_proof_type"
                required>

                <option value="" selected disabled>
                    Select ID Proof Type
                </option>

                <option value="Aadhaar">Aadhaar Card</option>
                <option value="PAN">PAN Card</option>
                <option value="Voter ID">Voter ID</option>
                <option value="Driving License">Driving License</option>
                <option value="Other">Other</option>

            </select>

            <div id="id_proof_type_error" class="error-message text-danger small mt-1"></div>
        </div>

        <!-- ID Proof Number -->
        <div class="col-md-6">
            <label for="idProofNumber" class="form-label">
                ID Proof Number <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="idProofNumber"
                name="id_proof_number"
                placeholder="Enter ID proof number"
                required>

            <div id="id_proof_number_error" class="error-message text-danger small mt-1"></div>
        </div>

      
        <!-- BUTTONS -->
        <!-- ========================= -->

        <div class="col-12 pt-3">

            <button class="btn btn-primary"
                type="submit"
                id="saveVleBtn">

                <i data-feather="save"
                    class="me-1"
                    style="width:16px;height:16px;">
                </i>

                Save VLE
            </button>

            <button class="btn btn-outline-secondary ms-2"
                type="reset">

                <i data-feather="refresh-cw"
                    class="me-1"
                    style="width:16px;height:16px;">
                </i>

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
   
@endpush
