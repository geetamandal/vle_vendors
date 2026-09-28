@extends('layouts.main_layouts')

@push('css') <style>
.service-table td {
vertical-align: middle;
} </style>
@endpush

@section('main-content') <div class="page-header"> <div> <h3 class="page-title">शासकीय सेवाएं</h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">होम</a>
                </li>
                <li class="breadcrumb-item active">
                    शासकीय सेवाएं
                </li>
            </ol>
        </nav>
    </div>

    <div class="page-header-actions">
        <button type="button"
            class="btn btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#addServiceModal">

            <i data-feather="plus" class="btn-icon-prepend"></i>
            सेवा जोड़ें
        </button>
    </div>
</div>


<div class="card">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover service-table">

                <thead>
                    <tr>
                        <th width="60">क्रमांक</th>
                        <th>शासकीय सेवा</th>
                        <th>विवरण</th>
                        <th>आवश्यक दस्तावेज</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>जाति प्रमाण पत्र</td>
                        <td>जाति प्रमाण पत्र हेतु आवेदन</td>
                        <td>आधार कार्ड, निवास प्रमाण, पासपोर्ट साइज फोटो</td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>जन्म प्रमाण पत्र</td>
                        <td>जन्म प्रमाण पत्र हेतु आवेदन</td>
                        <td>आधार कार्ड, अस्पताल/स्कूल रिकॉर्ड, माता-पिता का पहचान पत्र</td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>आधार सेवा</td>
                        <td>आधार से संबंधित सेवा</td>
                        <td>आधार कार्ड, मोबाइल नंबर</td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>पैन कार्ड</td>
                        <td>पैन कार्ड हेतु आवेदन</td>
                        <td>आधार कार्ड, पासपोर्ट साइज फोटो, हस्ताक्षर</td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>निवास प्रमाण पत्र</td>
                        <td>निवास प्रमाण पत्र हेतु आवेदन</td>
                        <td>आधार कार्ड, पता प्रमाण, पासपोर्ट साइज फोटो</td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>आय प्रमाण पत्र</td>
                        <td>आय प्रमाण पत्र हेतु आवेदन</td>
                        <td>आधार कार्ड, आय प्रमाण, निवास प्रमाण</td>
                    </tr>

                    <tr>
                        <td>7</td>
                        <td>अन्य शासकीय सेवा</td>
                        <td>अन्य शासकीय सेवा हेतु आवेदन</td>
                        <td>सेवा के अनुसार आवश्यक दस्तावेज</td>
                    </tr>

                </tbody>

            </table>
        </div>

    </div>
</div>


<!-- सेवा जोड़ें Modal -->
<div class="modal fade"
    id="addServiceModal"
    tabindex="-1"
    aria-labelledby="addServiceModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="addServiceModalLabel">
                    शासकीय सेवा जोड़ें
                </h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>


            <div class="modal-body">

                <div class="row g-3">

                    <div class="col-md-6">

                        <label class="form-label">
                            शासकीय सेवा
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                            name="service_name"
                            class="form-control"
                            placeholder="शासकीय सेवा का नाम दर्ज करें">

                    </div>


                    <div class="col-md-6">

                        <label class="form-label">
                            विवरण
                            <span class="text-danger">*</span>
                        </label>

                        <input type="text"
                            name="description"
                            class="form-control"
                            placeholder="सेवा का विवरण दर्ज करें">

                    </div>


                    <div class="col-12">

                        <label class="form-label">
                            आवश्यक दस्तावेज
                            <span class="text-danger">*</span>
                        </label>

                        <textarea name="document_required"
                            class="form-control"
                            rows="3"
                            placeholder="आवश्यक दस्तावेज दर्ज करें"></textarea>

                    </div>

                </div>

            </div>


            <div class="modal-footer">

                <button type="button"
                    class="btn btn-outline-secondary"
                    data-bs-dismiss="modal">
                    रद्द करें
                </button>

                <button type="button"
                    class="btn btn-primary"
                    id="saveServiceBtn">

                    <i data-feather="save"
                        class="me-1"
                        style="width:16px;height:16px;">
                    </i>

                    सेवा सहेजें

                </button>

            </div>

        </div>

    </div>

</div>


@endsection

@push('scripts') <script>
$(document).ready(function() {


        if (typeof feather !== 'undefined') {
            feather.replace();
        }

    });
</script>


@endpush
