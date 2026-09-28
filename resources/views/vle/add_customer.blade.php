@extends('layouts.main_layouts')

@push('css')
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">ग्राहक प्रविष्टि</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">होम</a></li>
                    <li class="breadcrumb-item"><a href="#">ग्राहक प्रबंधन</a></li>
                    <li class="breadcrumb-item active">ग्राहक प्रविष्टि</li>
                </ol>
            </nav>
        </div>
    </div>

    
    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">

                 <form class="needs-validation" id="productEntryForm" novalidate>
    @csrf

    <div class="row g-3">

        {{-- Customer Name --}}
        <div class="col-md-6">
            <label for="customerName" class="form-label">
                ग्राहक का नाम <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="customerName"
                name="customer_name"
                placeholder="ग्राहक का नाम दर्ज करें"
                required>

            <div id="customer_name_error"
                class="error-message text-danger small mt-1"></div>
        </div>


        {{-- WhatsApp Number --}}
        <div class="col-md-6">
            <label for="whatsappNo" class="form-label">
                WhatsApp नंबर <span class="text-danger">*</span>
            </label>

            <input type="text"
                class="form-control"
                id="whatsappNo"
                name="whatsapp_no"
                placeholder="WhatsApp नंबर दर्ज करें"
                maxlength="10"
                inputmode="numeric"
                required>

            <div id="whatsapp_no_error"
                class="error-message text-danger small mt-1"></div>
        </div>


        {{-- Address --}}
        <div class="col-12">
            <label for="address" class="form-label">
                पता <span class="text-danger">*</span>
            </label>

            <textarea
                class="form-control"
                id="address"
                name="address"
                rows="3"
                placeholder="ग्राहक का पता दर्ज करें"
                required></textarea>

            <div id="address_error"
                class="error-message text-danger small mt-1"></div>
        </div>


        {{-- Buttons --}}
        <div class="col-12 pt-2">

            <button class="btn btn-primary"
                type="submit"
                id="saveProductBtn">

                <i data-feather="save"
                    class="me-1"
                    style="width:16px;height:16px;"></i>

                ग्राहक सहेजें
            </button>

            <button class="btn btn-outline-secondary ms-2"
                type="reset">

                <i data-feather="refresh-cw"
                    class="me-1"
                    style="width:16px;height:16px;"></i>

                रीसेट
            </button>

        </div>

    </div>
</form>

                </div>
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
