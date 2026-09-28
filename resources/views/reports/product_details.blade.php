@extends('layouts.main_layouts')

@push('css')
    <style>
        .product-header {
            background: linear-gradient(135deg, #f8f9ff, #ffffff);
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 20px;
        }


        .product-icon {
            width: 52px;
            height: 52px;
            border-radius: 10px;
            background: #eef2ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 4px;
            color: #212529;
        }

        .product-category {
            color: #6c757d;
            font-size: 13px;
        }

        .product-info-item {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 14px 16px;
            height: 100%;
        }

        .product-label {
            font-size: 12px;
            font-weight: 600;
            color: #6c757d;
            margin-bottom: 6px;
        }

        .product-value {
            font-size: 15px;
            font-weight: 500;
            color: #212529;
        }

        .product-description {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 16px;
        }

        .product-description p {
            margin: 0;
            font-size: 14px;
            line-height: 1.6;
            color: #495057;
        }
    </style>
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">उत्पाद विवरण</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ url('common/product-list') }}">उत्पाद प्रबंधन</a>
                    </li>
                    <li class="breadcrumb-item active">उत्पाद विवरण</li>
                </ol>
            </nav>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ url('common/product-list') }}" class="btn btn-outline-secondary">
                <i data-feather="arrow-left" class="me-1" style="width:16px;height:16px;"></i>
                सूची
            </a>

            @if (session('role_id') == 2)
                <a href="{{ url('vle/add-product') }}" class="btn btn-primary">
                    <i data-feather="plus" class="me-1" style="width:16px;height:16px;"></i>
                    उत्पाद जोड़ें
                </a>
            @endif
        </div>
    </div>

    <div class="card">
        <div class="card-body">

            <div class="product-header mb-4">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex align-items-center gap-3">
                        <div class="product-icon">
                            <i data-feather="package"></i>
                        </div>

                        <div>
                            <div class="product-title">चावल</div>
                            <div class="product-category">
                                श्रेणी : किराना
                            </div>
                        </div>
                    </div>

                    <span class="badge bg-success px-3 py-2">
                        सक्रिय
                    </span>

                </div>
            </div>

            <h6 class="fw-semibold mb-3">उत्पाद की जानकारी</h6>

            <div class="row g-3 mb-4">

                <div class="col-md-4">
                    <div class="product-info-item">
                        <div class="product-label">कीमत</div>
                        <div class="product-value">₹50 / किलोग्राम</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-info-item">
                        <div class="product-label">उपलब्ध मात्रा</div>
                        <div class="product-value">100 किलोग्राम</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="product-info-item">
                        <div class="product-label">इकाई</div>
                        <div class="product-value">किलोग्राम</div>
                    </div>
                </div>

            </div>

            <h6 class="fw-semibold mb-3">उत्पाद विवरण</h6>

            <div class="product-description mb-4">
                <p>
                    उच्च गुणवत्ता वाला चावल।
                </p>
            </div>

            <h6 class="fw-semibold mb-3">टिप्पणी</h6>

            <div class="product-description">
                <p>
                    उपलब्ध स्टॉक के अनुसार बिक्री की जाएगी।
                </p>
            </div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        });
    </script>
@endpush
