@extends('layouts.main_layouts')

@push('css')
    <style>
        .lead-info-item {
            background-color: #f8f9fa;
            border-left: 3px solid #0d6efd;
            border-radius: 6px;
            padding: 10px 14px;
            margin-bottom: 12px;
            transition: background-color 0.2s ease;
        }

        .lead-info-item:hover {
            background-color: #eef2f7;
        }

        .lead-label {
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            color: #6c757d;
            margin-bottom: 4px;
        }

        .lead-value {
            font-size: 14.5px;
            font-weight: 500;
            color: #212529;
            word-break: break-word;
        }

        .activity-item {
            position: relative;
            padding-left: 35px;
            padding-bottom: 25px;
        }

        .activity-item::before {
            content: '';
            position: absolute;
            left: 8px;
            top: 25px;
            bottom: 0;
            width: 1px;
            background: #dee2e6;
        }

        .activity-item:last-child::before {
            display: none;
        }

        .activity-icon {
            position: absolute;
            left: 0;
            top: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            background: var(--bs-primary);
        }
    </style>
@endpush

@section('main-content')
    <div class="page-header">
    <div>
        <h3 class="page-title">VLE Details</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">Home</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="#">VLE Management</a>
                </li>

                <li class="breadcrumb-item active">VLE Details</li>
            </ol>
        </nav>
    </div>

    <div class="page-header-actions">
        <a href="{{ url('/common/vle-list') }}" class="btn btn-primary">
            <i data-feather="arrow-left" class="btn-icon-prepend"></i>
            <span>Back to VLE List</span>
        </a>
    </div>
</div>


<div class="row g-4">

    <!-- VLE Information -->
    <div class="col-lg-12">

        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">VLE Information</h5>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">VLE Name</div>
                            <div class="lead-value">Ramesh Kumar</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">Mobile Number</div>
                            <div class="lead-value">9876543210</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">Email Address</div>
                            <div class="lead-value">ramesh@example.com</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">Shop Name</div>
                            <div class="lead-value">Ramesh Digital Seva</div>
                        </div>
                    </div>

                     <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">Block</div>
                            <div class="lead-value">Bakawand</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">Village</div>
                            <div class="lead-value">Bakawand</div>
                        </div>
                    </div>

                  

                   

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">Pincode</div>
                            <div class="lead-value">494224</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">ID Proof Type</div>
                            <div class="lead-value">Aadhaar Card</div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label">ID Proof Number</div>
                            <div class="lead-value">XXXX XXXX 4587</div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="lead-info-item">
                            <div class="lead-label">Shop Address</div>
                            <div class="lead-value">
                                Main Market Road, Bakawand, Bastar, Chhattisgarh
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

        <!-- VLE Images -->
    <div class="col-lg-12">

        <div class="card">

            <div class="card-header">
                <h5 class="card-title mb-0">VLE Images</h5>
            </div>

            <div class="card-body">

                <div class="row g-4">

                    <!-- Profile Photo -->
                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label mb-2">Profile Photo</div>

                            <img src="{{ asset('assets/images/user-placeholder.png') }}"
                                alt="Profile Photo"
                                style="width:120px;height:120px;object-fit:cover;border-radius:8px;">
                        </div>
                    </div>

                    <!-- Shop Image -->
                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label mb-2">Shop Image</div>

                            <img src="{{ asset('assets/images/shop-placeholder.jpg') }}"
                                alt="Shop Image"
                                style="width:180px;height:120px;object-fit:cover;border-radius:8px;">
                        </div>
                    </div>

                    <!-- Shop Banner -->
                    <div class="col-md-4">
                        <div class="lead-info-item">
                            <div class="lead-label mb-2">Shop Banner Image</div>

                            <img src="{{ asset('assets/images/shop-banner-placeholder.jpg') }}"
                                alt="Shop Banner"
                                style="width:220px;height:120px;object-fit:cover;border-radius:8px;">
                        </div>
                    </div>

                  

                </div>

            </div>
        </div>

    </div>

</div>
@endsection

@push('js')
@endpush
