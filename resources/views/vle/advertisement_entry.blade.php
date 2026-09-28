```blade
@extends('layouts.main_layouts')

@push('css')
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">विज्ञापन प्रविष्टि</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="#">विज्ञापन प्रबंधन</a>
                    </li>

                    <li class="breadcrumb-item active">
                        विज्ञापन प्रविष्टि
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">

                    <form class="needs-validation" id="advertisementEntryForm" novalidate>
                        @csrf

                        <div class="row g-3">

                            {{-- Advertisement Title --}}
                            <div class="col-md-6">
                                <label for="advertisementTitle" class="form-label">
                                    विज्ञापन शीर्षक <span class="text-danger">*</span>
                                </label>

                                <input type="text"
                                    class="form-control"
                                    id="advertisementTitle"
                                    name="advertisement_title"
                                    placeholder="विज्ञापन शीर्षक दर्ज करें"
                                    required>

                                <div id="advertisement_title_error"
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


                            {{-- Advertisement Image --}}
                            <div class="col-md-6">
                                <label for="advertisementImage" class="form-label">
                                    विज्ञापन चित्र <span class="text-danger">*</span>
                                </label>

                                <input type="file"
                                    class="form-control"
                                    id="advertisementImage"
                                    name="advertisement_image"
                                    accept=".jpg,.jpeg,.png"
                                    required>

                                <div class="form-text">
                                    JPG, JPEG या PNG
                                </div>

                                <div id="advertisement_image_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>

                            {{-- Advertisement Description --}}
                            <div class="col-12">
                                <label for="description" class="form-label">
                                    विज्ञापन विवरण <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    class="form-control"
                                    id="description"
                                    name="description"
                                    rows="4"
                                    placeholder="विज्ञापन का विवरण दर्ज करें"
                                    required></textarea>

                                <div id="description_error"
                                    class="error-message text-danger small mt-1"></div>
                            </div>


                            {{-- Buttons --}}
                            <div class="col-12 pt-2">

                                <button class="btn btn-primary"
                                    type="submit"
                                    id="saveAdvertisementBtn">

                                    <i data-feather="save"
                                        class="me-1"
                                        style="width:16px;height:16px;"></i>

                                    विज्ञापन सहेजें
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
```
