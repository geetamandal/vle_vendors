@extends('layouts.main_layouts')

@push('css')
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">उत्पाद प्रविष्टि</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">होम</a></li>
                    <li class="breadcrumb-item"><a href="#">उत्पाद प्रबंधन</a></li>
                    <li class="breadcrumb-item active">उत्पाद प्रविष्टि</li>
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

                            <div class="col-md-6">
                                <label for="productName" class="form-label">
                                    उत्पाद का नाम <span class="text-danger">*</span>
                                </label>

                                <input type="text" class="form-control" id="productName" name="product_name"
                                    placeholder="उत्पाद का नाम दर्ज करें" required>

                                <div id="product_name_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-md-6">
                                <label for="category" class="form-label">
                                    श्रेणी <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" id="category" name="category" required>
                                    <option value="" selected disabled>श्रेणी चुनें</option>
                                    <option value="Grocery">किराना</option>
                                    <option value="Stationery">स्टेशनरी</option>
                                    <option value="Food">खाद्य सामग्री</option>
                                    <option value="Daily Use">दैनिक उपयोग</option>
                                    <option value="Other">अन्य</option>
                                </select>

                                <div id="category_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-12">
                                <label for="productDescription" class="form-label">
                                    उत्पाद का विवरण
                                </label>

                                <textarea class="form-control" id="productDescription" name="product_description" rows="3"
                                    placeholder="उत्पाद का विवरण दर्ज करें"></textarea>

                                <div id="product_description_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-md-4">
                                <label for="price" class="form-label">
                                    कीमत <span class="text-danger">*</span>
                                </label>

                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="कीमत दर्ज करें" min="0" step="0.01" required>

                                <div id="price_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-md-4">
                                <label for="quantity" class="form-label">
                                    उपलब्ध मात्रा <span class="text-danger">*</span>
                                </label>

                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="उपलब्ध मात्रा दर्ज करें" min="0" step="1" required>

                                <div id="quantity_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-md-4">
                                <label for="unit" class="form-label">
                                    इकाई <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" id="unit" name="unit" required>
                                    <option value="" selected disabled>इकाई चुनें</option>
                                    <option value="Piece">नग</option>
                                    <option value="Kg">किलोग्राम</option>
                                    <option value="Litre">लीटर</option>
                                    <option value="Packet">पैकेट</option>
                                    <option value="Other">अन्य</option>
                                </select>

                                <div id="unit_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-md-6">
                                <label for="productStatus" class="form-label">
                                    स्थिति <span class="text-danger">*</span>
                                </label>

                                <select class="form-select" id="productStatus" name="status" required>
                                    <option value="Active" selected>सक्रिय</option>
                                    <option value="Inactive">निष्क्रिय</option>
                                </select>

                                <div id="status_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-12">
                                <label for="remarks" class="form-label">
                                    टिप्पणी
                                </label>

                                <textarea class="form-control" id="remarks" name="remarks" rows="2" placeholder="टिप्पणी दर्ज करें"></textarea>

                                <div id="remarks_error" class="error-message text-danger small mt-1"></div>
                            </div>

                            <div class="col-12 pt-2">
                                <button class="btn btn-primary" type="submit" id="saveProductBtn">
                                    <i data-feather="save" class="me-1" style="width:16px;height:16px;"></i>
                                    उत्पाद सहेजें
                                </button>

                                <button class="btn btn-outline-secondary ms-2" type="reset">
                                    <i data-feather="refresh-cw" class="me-1" style="width:16px;height:16px;"></i>
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
