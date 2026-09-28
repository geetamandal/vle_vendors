 @extends('layouts.main_layouts')
 @section('main-content')
     <!-- Page Header -->
     <div class="page-header">
         <div>
             <h3 class="page-title">Profile</h3>
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="{{ url('/operator/dashboard') }}">Dashboard</a></li>
                     <li class="breadcrumb-item active">Profile</li>
                 </ol>
             </nav>
         </div>
         <div class="page-header-actions">
             <button class="btn btn-primary"><i data-feather="edit" class="btn-icon-prepend"></i> Edit Profile</button>
         </div>
     </div>

     <!-- Profile Cover - Premium Glassmorphic -->
     <div class="profile-hero">
         <!-- Cover Background -->
         <div class="profile-cover-bg">
             <div class="profile-cover-orb orb-1"></div>
             <div class="profile-cover-orb orb-2"></div>
             <div class="profile-cover-orb orb-3"></div>
             <div class="profile-cover-pattern"></div>
         </div>

         <!-- Profile Glass Card overlay -->
         <div class="profile-glass-card">
             <div class="profile-glass-inner">
                 <!-- Avatar -->
                 <div class="profile-avatar-wrapper">
                     <div class="profile-avatar-ring">
                         <div class="profile-avatar">
                             <div class="avatar-placeholder"
                                 style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; font-size: 2.8rem; font-weight: 800; color: #fff; background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 100%);">

                                 @php
                                     $name = trim($user->fullname ?? '');
                                     $nameParts = preg_split('/\s+/', $name);

                                     if (count($nameParts) >= 2) {
                                         $initials = strtoupper(
                                             substr($nameParts[0], 0, 1) .
                                                 substr($nameParts[count($nameParts) - 1], 0, 1),
                                         );
                                     } else {
                                         $initials = strtoupper(substr($name, 0, 2));
                                     }
                                 @endphp

                                 {{ $initials ?: 'U' }}

                             </div>
                         </div>
                     </div>

                     <span class="profile-status-dot"></span>
                 </div>

                 <!-- Info -->

                 <div class="profile-info-block">

                     {{-- Full Name --}}
                     <h2 class="profile-name">
                         {{ $user->fullname ?? 'N/A' }}
                     </h2>


                     {{-- Designation --}}
                     <p class="profile-role">

                         <i data-feather="briefcase"
                             style="width: 14px; height: 14px; margin-right: 6px; vertical-align: -2px;">
                         </i>

                         {{ $user->designation ?? 'Operator' }}

                     </p>


                     <div class="profile-meta">

                         {{-- Address --}}
                         @if (!empty($user->address))
                             <span class="profile-meta-item">

                                 <i data-feather="map-pin" style="width: 13px; height: 13px;">
                                 </i>

                                 {{ $user->address }}

                             </span>
                         @endif




                         {{-- Email --}}
                         @if (!empty($user->email))
                             <span class="profile-meta-item">

                                 <i data-feather="mail" style="width: 13px; height: 13px;">
                                 </i>

                                 {{ $user->email }}

                             </span>
                         @endif

                     </div>

                 </div>





                 <!-- Action buttons -->
                 <div class="profile-actions">
                     <button class="btn btn-primary btn-sm"><i data-feather="user-plus"
                             style="width: 14px; height: 14px; margin-right: 4px;"></i> Profile</button>

                 </div>
             </div>
         </div>
     </div>

     <!-- Profile Nav Tabs -->
     <ul class="nav nav-tabs mb-4" id="profileTabs" role="tablist">
         <li class="nav-item" role="presentation">
             <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                 type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
         </li>

     </ul>

     <!-- Tab Content -->
     <div class="tab-content" id="profileTabContent">
         <!-- Overview Tab -->
         <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
             <div class="row g-4">
                 <!-- About Card -->


                 <!-- Recent Posts -->

                 <div class="col-xl-8">
                     <div class="card mb-4">

                         <div class="card-header d-flex justify-content-between align-items-center">
                             <h5 class="card-title mb-0">Profile</h5>

                             <button type="button" class="btn btn-primary btn-sm" id="editProfileBtn">
                                 <i class="fas fa-edit me-1"></i>
                                 Edit Profile
                             </button>
                         </div>

                         <div class="card-body">

                             <form id="operatorProfileForm">

                                 @csrf

                                 <div class="row">

                                     {{-- Full Name --}}
                                     <div class="col-md-6 mb-3">
                                         <label class="form-label">
                                             Full Name <span class="text-danger">*</span>
                                         </label>

                                         <input type="text" class="form-control profile-field" name="fullname"
                                             id="fullname" value="{{ $user->fullname }}" placeholder="Enter full name"
                                             readonly>

                                         <span class="text-danger error-text fullname_error"></span>
                                     </div>


                                     {{-- Mobile Number --}}
                                     <div class="col-md-6 mb-3">
                                         <label class="form-label">
                                             Mobile Number <span class="text-danger">*</span>
                                         </label>

                                         <input type="text" class="form-control" name="mobile_no" id="mobile_no"
                                             value="{{ $user->mobile_no }}" readonly>

                                         <span class="text-muted small">
                                             Mobile number cannot be changed.
                                         </span>

                                         <span class="text-danger error-text mobile_no_error"></span>
                                     </div>


                                     {{-- Email --}}
                                     <div class="col-md-6 mb-3">
                                         <label class="form-label">
                                             Email
                                         </label>

                                         <input type="email" class="form-control profile-field" name="email"
                                             id="email" value="{{ $user->email }}" placeholder="Enter email" readonly>

                                         <span class="text-danger error-text email_error"></span>
                                     </div>


                                     {{-- Designation --}}
                                     <div class="col-md-6 mb-3">
                                         <label class="form-label">
                                             Designation
                                         </label>

                                         <input type="text" class="form-control profile-field" name="designation"
                                             id="designation" value="{{ $user->designation }}"
                                             placeholder="Enter designation" readonly>

                                         <span class="text-danger error-text designation_error"></span>
                                     </div>


                                     {{-- Address --}}
                                     <div class="col-md-12 mb-3">
                                         <label class="form-label">
                                             Address
                                         </label>

                                         <textarea class="form-control profile-field" name="address" id="address" rows="4"
                                             placeholder="Enter address" readonly>{{ $user->address }}</textarea>

                                         <span class="text-danger error-text address_error"></span>
                                     </div>


                                     {{-- Update Button --}}
                                     <div class="col-md-12" id="updateButtonSection" style="display: none;">

                                         <button type="submit" class="btn btn-success" id="updateProfileBtn">

                                             <i class="fas fa-save me-1"></i>
                                             Update Profile

                                         </button>

                                         <button type="button" class="btn btn-secondary ms-2" id="cancelEditBtn">

                                             Cancel

                                         </button>

                                     </div>

                                 </div>

                             </form>

                         </div>
                     </div>
                 </div>


             </div>
         </div>


     </div>
 @endsection
 @push('js')
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <script>
         $(document).ready(function() {
             $('#editProfileBtn').on('click', function() {

                 $('.profile-field').prop('readonly', false);

                 // Mobile number will ALWAYS remain readonly
                 $('#mobile_no').prop('readonly', true);

                 $('#updateButtonSection').show();

                 $('#editProfileBtn').hide();

             });

             $('#cancelEditBtn').on('click', function() {

                 location.reload();

             });

             $('#operatorProfileForm').on('submit', function(e) {

                 e.preventDefault();

                 $('.error-text').html('');

                 $('#updateProfileBtn').prop('disabled', true);

                 $.ajax({

                     url: "/operator/profile-update",

                     type: "POST",

                     data: $(this).serialize(),

                     success: function(response) {

                         if (response.status) {

                             Swal.fire({
                                 icon: 'success',
                                 title: 'Success',
                                 text: response.message,
                                 timer: 2000,
                                 showConfirmButton: false
                             }).then(function() {

                                 location.reload();

                             });

                         }

                     },

                     error: function(xhr) {

                         if (xhr.status === 422) {

                             let errors = xhr.responseJSON.errors;

                             $.each(errors, function(field, messages) {

                                 $('.' + field + '_error').html(messages[0]);

                             });

                         } else {

                             Swal.fire({
                                 icon: 'error',
                                 title: 'Error',
                                 text: 'Something went wrong. Please try again.'
                             });

                         }

                     },

                     complete: function() {

                         $('#updateProfileBtn').prop('disabled', false);

                     }

                 });

             });


             // Full name - numbers not allowed
             $('#fullname').on('input', function() {

                 this.value = this.value.replace(/[0-9]/g, '');

             });


             // Mobile - only numbers
             $('#mobile_no').on('input', function() {

                 this.value = this.value.replace(/[^0-9]/g, '');

             });

         });
     </script>
 @endpush
