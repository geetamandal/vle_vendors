@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h3 class="page-title">विज्ञापन सूची</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="#">विज्ञापन प्रबंधन</a>
                    </li>

                    <li class="breadcrumb-item active">
                        विज्ञापन सूची
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">

                        <table id="advertisementTable" class="table table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>क्रमांक</th>
                                    <th>विज्ञापन शीर्षक</th>
                                    <th>उत्पाद / श्रेणी</th>
                                    <th>प्रारंभ दिनांक</th>
                                    <th>समाप्ति दिनांक</th>
                                    <th>कार्यवाही</th>
                                </tr>
                            </thead>

                            <tbody>

                                {{-- Advertisement 1 --}}
                                <tr>
                                    <td>1</td>

                                    <td>
                                        <div class="fw-semibold">
                                            त्योहारी सीजन पर विशेष छूट
                                        </div>
                                    </td>
                                    <td>
                                        इलेक्ट्रॉनिक्स
                                    </td>

                                    <td>15-09-2026</td>

                                    <td>30-09-2026</td>
                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                title="विज्ञापन देखें">
                                                <i data-feather="eye"></i>
                                            </button>

                                          

                                        </div>
                                    </td>
                                </tr>


                                {{-- Advertisement 2 --}}
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="fw-semibold">
                                            मोबाइल फोन पर शानदार ऑफर
                                        </div>
                                    </td>
                                    <td>
                                        मोबाइल एवं एक्सेसरीज
                                    </td>

                                    <td>10-09-2026</td>

                                    <td>25-09-2026</td>
                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                title="विज्ञापन देखें">
                                                <i data-feather="eye"></i>
                                            </button>

                                           

                                        </div>
                                    </td>
                                </tr>


                                {{-- Advertisement 3 --}}
                                <tr>
                                    <td>3</td>

                                    <td>
                                        <div class="fw-semibold">
                                            घरेलू उत्पादों पर 20% तक की छूट
                                        </div>
                                    </td>
                                    <td>
                                        घरेलू सामान
                                    </td>

                                    <td>01-09-2026</td>

                                    <td>20-09-2026</td>
                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                title="विज्ञापन देखें">
                                                <i data-feather="eye"></i>
                                            </button>

                                           

                                        </div>
                                    </td>
                                </tr>
                                {{-- Advertisement 4 --}}
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="fw-semibold">
                                            नए ग्राहकों के लिए विशेष ऑफर
                                        </div>
                                    </td>
                                    <td>
                                        सभी श्रेणियाँ
                                    </td>

                                    <td>05-09-2026</td>

                                    <td>05-10-2026</td>
                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                title="विज्ञापन देखें">
                                                <i data-feather="eye"></i>
                                            </button>

                                          

                                        </div>
                                    </td>
                                </tr>
                                {{-- Advertisement 5 --}}
                                <tr>
                                    <td>5</td>

                                    <td>
                                        <div class="fw-semibold">
                                            त्योहार विशेष खरीदारी अभियान
                                        </div>
                                    </td>
                                    <td>
                                        फैशन एवं कपड़े
                                    </td>

                                    <td>01-08-2026</td>

                                    <td>31-08-2026</td>
                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                title="विज्ञापन देखें">
                                                <i data-feather="eye"></i>
                                            </button>


                                        </div>
                                    </td>
                                </tr>
                                {{-- Advertisement 6 --}}
                                <tr>
                                    <td>6</td>
                                    <td>
                                        <div class="fw-semibold">
                                            किराना उत्पादों पर विशेष बचत
                                        </div>
                                    </td>
                                    <td>
                                        किराना
                                    </td>

                                    <td>12-09-2026</td>

                                    <td>30-09-2026</td>
                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info"
                                                title="विज्ञापन देखें">
                                                <i data-feather="eye"></i>
                                            </button>

                                          

                                        </div>
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


@push('scripts')
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#advertisementTable').DataTable({
                pageLength: 10,
                ordering: true,
                searching: true,
                lengthChange: true
            });

            if (typeof feather !== 'undefined') {
                feather.replace();
            }

        });
    </script>
@endpush
