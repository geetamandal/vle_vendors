@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">पूछताछ सूची</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>

                    <li class="breadcrumb-item active">पूछताछ सूची</li>
                </ol>
            </nav>
        </div>

    </div>

    <div class="row g-4 mb-4">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">पूछताछ सूची</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="enquiryTable" class="table table-striped table-hover align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>नाम</th>
                                    <th>मोबाइल न.</th>
                                    <th>ईमेल</th>
                                    <th>सेवा</th>
                                    <th>पूछताछ का दिनांक</th>
                                    <th>विवरण</th>

                                </tr>
                            </thead>

                            <tbody>

                                {{-- Dummy Enquiry 1 --}}
                                <tr>
                                    <td>1</td>

                                    <td>
                                        <div class="fw-semibold">Ramesh Kumar</div>
                                    </td>

                                    <td>9876543210</td>

                                    <td>
                                        <small class="text-muted">
                                            ramesh.kumar@example.com
                                        </small>
                                    </td>

                                    <td>
                                        जाति प्रमाण पत्र
                                    </td>
                                    <td>15-09-2026</td>
                                    <td>
                                        जाति प्रमाण पत्र हेतु आवेदन
                                    </td>
                                </tr>


                                {{-- Dummy Enquiry 2 --}}
                                <tr>
                                    <td>2</td>

                                    <td>
                                        <div class="fw-semibold">Suresh Markam</div>
                                    </td>

                                    <td>9123456780</td>

                                    <td>
                                        <small class="text-muted">
                                            suresh.markam@example.com
                                        </small>
                                    </td>

                                    <td>
                                        जन्म प्रमाण पत्र
                                    </td>
                                    <td>18-09-2026</td>
                                    <td>
                                        जन्म प्रमाण पत्र हेतु आवेदन
                                    </td>
                                </tr>


                                {{-- Dummy Enquiry 3 --}}
                                <tr>
                                    <td>3</td>

                                    <td>
                                        <div class="fw-semibold">Meena Kashyap</div>
                                    </td>

                                    <td>9988776655</td>

                                    <td>
                                        <small class="text-muted">
                                            meena.kashyap@example.com
                                        </small>
                                    </td>

                                    <td>
                                        पैन कार्ड
                                    </td>
                                    <td>14-09-2026</td>
                                    <td>
                                        पैन कार्ड हेतु आवेदन
                                    </td>
                                </tr>


                                {{-- Dummy Enquiry 4 --}}
                                <tr>
                                    <td>4</td>

                                    <td>
                                        <div class="fw-semibold">Mohan Singh</div>
                                    </td>

                                    <td>9090909090</td>

                                    <td>
                                        <small class="text-muted">
                                            mohan.singh@example.com
                                        </small>
                                    </td>

                                    <td>
                                        आय प्रमाण पत्र
                                    </td>
                                    <td>13-09-2026</td>
                                    <td>
                                        आय प्रमाण पत्र हेतु आवेदन
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- DataTables JS --}}
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            Droom.initDataTable('#enquiryTable');

            // Feather icons initialize
            if (typeof feather !== 'undefined') {
                feather.replace();
            }

        });
    </script>
@endpush
