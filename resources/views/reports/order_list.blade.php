@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">ऑर्डर सूची</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li class="breadcrumb-item active">ऑर्डर सूची</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">


            <div class="table-responsive">
                <table id="orderTable" class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th>क्रमांक</th>
                            <th>ग्राहक का नाम</th>
                            <th>मोबाइल नंबर</th>
                            <th>ऑर्डर दिनांक</th>
                            <th>कुल राशि</th>
                            <th>ऑर्डर स्थिति</th>
                            <th>कार्रवाई</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>रमेश कुमार</td>
                            <td>9876543210</td>
                            <td>16-09-2026</td>
                            <td>₹1,250</td>
                            <td>
                                <span class="badge bg-warning">लंबित</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-success me-1" title="स्वीकार करें">
                                    <i data-feather="check"></i>
                                </button>

                                <button type="button" class="btn btn-sm btn-outline-danger" title="अस्वीकार करें">
                                    <i data-feather="x"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>सीमा देवी</td>
                            <td>9123456780</td>
                            <td>16-09-2026</td>
                            <td>₹850</td>
                            <td>
                                <span class="badge bg-warning">लंबित</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-success me-1" title="स्वीकार करें">
                                    <i data-feather="check"></i>
                                </button>

                                <button type="button" class="btn btn-sm btn-outline-danger" title="अस्वीकार करें">
                                    <i data-feather="x"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>मोहन लाल</td>
                            <td>9988776655</td>
                            <td>15-09-2026</td>
                            <td>₹2,100</td>
                            <td>
                                <span class="badge bg-success">स्वीकृत</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-secondary" disabled>
                                    <i data-feather="check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" disabled>
                                    <i data-feather="x"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>


    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#orderTable').DataTable();

            if (typeof feather !== 'undefined') {
                feather.replace();
            }
        });
    </script>
@endpush
