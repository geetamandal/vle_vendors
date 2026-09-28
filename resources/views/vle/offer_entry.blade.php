@extends('layouts.main_layouts')

@push('css')
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">ऑफर प्रविष्टि</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="#">ऑफर प्रबंधन</a>
                    </li>

                    <li class="breadcrumb-item active">
                        ऑफर प्रविष्टि
                    </li>

                </ol>
            </nav>
        </div>
    </div>


    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">

                    <form class="needs-validation" id="offerEntryForm" novalidate>
                        @csrf

                        <div class="row g-3">

                            {{-- Offer Title --}}
                            <div class="col-md-6">
                                <label for="offerTitle" class="form-label">
                                    ऑफर शीर्षक <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                    class="form-control"
                                    id="offerTitle"
                                    name="offer_title"
                                    placeholder="ऑफर शीर्षक दर्ज करें"
                                    required>

                                <div id="offer_title_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                            {{-- Offer Type --}}
                            <div class="col-md-6">
                                <label for="offerType" class="form-label">
                                    ऑफर प्रकार <span class="text-danger">*</span>
                                </label>

                                <select class="form-select"
                                    id="offerType"
                                    name="offer_type"
                                    required>

                                    <option value="">ऑफर प्रकार चुनें</option>
                                    <option value="Percentage">प्रतिशत छूट (%)</option>
                                    <option value="Flat">फिक्स्ड छूट (₹)</option>

                                </select>

                                <div id="offer_type_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                            {{-- Discount Value --}}
                            <div class="col-md-6">
                                <label for="discountValue" class="form-label">
                                    छूट मूल्य <span class="text-danger">*</span>
                                </label>

                                <input type="number"
                                    class="form-control"
                                    id="discountValue"
                                    name="discount_value"
                                    placeholder="छूट मूल्य दर्ज करें"
                                    min="0"
                                    step="0.01"
                                    required>

                                <div id="discount_value_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                           

                            {{-- Start Date --}}
                            <div class="col-md-6">
                                <label for="startDate" class="form-label">
                                    प्रारंभ दिनांक <span class="text-danger">*</span>
                                </label>

                                <input type="date"
                                    class="form-control"
                                    id="startDate"
                                    name="start_date"
                                    required>

                                <div id="start_date_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                            {{-- End Date --}}
                            <div class="col-md-6">
                                <label for="endDate" class="form-label">
                                    समाप्ति दिनांक <span class="text-danger">*</span>
                                </label>

                                <input type="date"
                                    class="form-control"
                                    id="endDate"
                                    name="end_date"
                                    required>

                                <div id="end_date_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                            {{-- Offer Image --}}
                            <div class="col-md-6">
                                <label for="offerImage" class="form-label">
                                    ऑफर चित्र <span class="text-danger">*</span>
                                </label>

                                <input type="file"
                                    class="form-control"
                                    id="offerImage"
                                    name="offer_image"
                                    accept=".jpg,.jpeg,.png"
                                    required>

                                <div class="form-text">
                                    JPG, JPEG या PNG
                                </div>

                                <div id="offer_image_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                           

                            {{-- Offer Description --}}
                            <div class="col-12">
                                <label for="description" class="form-label">
                                    ऑफर विवरण <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    rows="4"
                                    placeholder="ऑफर का विवरण दर्ज करें"
                                    required></textarea>

                                <div id="description_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                            {{-- Buttons --}}
                            <div class="col-12 pt-2">

                                <button class="btn btn-primary"
                                    type="submit"
                                    id="saveOfferBtn">

                                    <i data-feather="save"
                                        class="me-1"
                                        style="width:16px;height:16px;"></i>

                                    ऑफर सहेजें

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