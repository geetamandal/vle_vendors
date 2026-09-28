```blade
@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h3 class="page-title">ऑफर सूची</h3>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">होम</a>
                    </li>

                    <li class="breadcrumb-item">
                        <a href="#">ऑफर प्रबंधन</a>
                    </li>

                    <li class="breadcrumb-item active">
                        ऑफर सूची
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

                        <table id="offerTable" class="table table-hover align-middle">

                            <thead>
                                <tr>
                                    <th>क्रमांक</th>
                                    <th>ऑफर शीर्षक</th>
                                    <th>ऑफर प्रकार</th>
                                    <th>छूट</th>
                                    <th>प्रारंभ दिनांक</th>
                                    <th>समाप्ति दिनांक</th>
                                    <th>स्थिति</th>
                                    <th>कार्यवाही</th>
                                </tr>
                            </thead>

                            <tbody>

                                {{-- Offer 1 --}}
                                <tr>
                                    <td>1</td>

                                    <td>
                                        <div class="fw-semibold">
                                            त्योहारी विशेष ऑफर
                                        </div>
                                    </td>

                                    <td>
                                        प्रतिशत छूट
                                    </td>

                                    <td>
                                        <span class="fw-semibold">
                                            20%
                                        </span>
                                    </td>

                                    <td>15-09-2026</td>

                                    <td>30-09-2026</td>

                                    <td>
                                        <span class="badge bg-success">
                                            सक्रिय
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info"
                                                title="ऑफर देखें">

                                                <i data-feather="eye"></i>

                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Offer 2 --}}
                                <tr>
                                    <td>2</td>

                                    <td>
                                        <div class="fw-semibold">
                                            पेंटिंग सेवा पर विशेष बचत
                                        </div>
                                    </td>

                                    <td>
                                        फिक्स्ड छूट
                                    </td>

                                    <td>
                                        <span class="fw-semibold">
                                            ₹5,000
                                        </span>
                                    </td>

                                    <td>10-09-2026</td>

                                    <td>25-09-2026</td>

                                    <td>
                                        <span class="badge bg-success">
                                            सक्रिय
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info"
                                                title="ऑफर देखें">

                                                <i data-feather="eye"></i>

                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Offer 3 --}}
                                <tr>
                                    <td>3</td>

                                    <td>
                                        <div class="fw-semibold">
                                            मानसून स्पेशल ऑफर
                                        </div>
                                    </td>

                                    <td>
                                        प्रतिशत छूट
                                    </td>

                                    <td>
                                        <span class="fw-semibold">
                                            15%
                                        </span>
                                    </td>

                                    <td>01-09-2026</td>

                                    <td>20-09-2026</td>

                                    <td>
                                        <span class="badge bg-success">
                                            सक्रिय
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info"
                                                title="ऑफर देखें">

                                                <i data-feather="eye"></i>

                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Offer 4 --}}
                                <tr>
                                    <td>4</td>

                                    <td>
                                        <div class="fw-semibold">
                                            नए ग्राहकों के लिए विशेष ऑफर
                                        </div>
                                    </td>

                                    <td>
                                        फिक्स्ड छूट
                                    </td>

                                    <td>
                                        <span class="fw-semibold">
                                            ₹2,500
                                        </span>
                                    </td>

                                    <td>05-09-2026</td>

                                    <td>05-10-2026</td>

                                    <td>
                                        <span class="badge bg-success">
                                            सक्रिय
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info"
                                                title="ऑफर देखें">

                                                <i data-feather="eye"></i>

                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Offer 5 --}}
                                <tr>
                                    <td>5</td>

                                    <td>
                                        <div class="fw-semibold">
                                            घर की पेंटिंग पर विशेष छूट
                                        </div>
                                    </td>

                                    <td>
                                        प्रतिशत छूट
                                    </td>

                                    <td>
                                        <span class="fw-semibold">
                                            25%
                                        </span>
                                    </td>

                                    <td>01-08-2026</td>

                                    <td>31-08-2026</td>

                                    <td>
                                        <span class="badge bg-secondary">
                                            समाप्त
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info"
                                                title="ऑफर देखें">

                                                <i data-feather="eye"></i>

                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Offer 6 --}}
                                <tr>
                                    <td>6</td>

                                    <td>
                                        <div class="fw-semibold">
                                            दिवाली मेगा ऑफर
                                        </div>
                                    </td>

                                    <td>
                                        प्रतिशत छूट
                                    </td>

                                    <td>
                                        <span class="fw-semibold">
                                            30%
                                        </span>
                                    </td>

                                    <td>01-10-2026</td>

                                    <td>31-10-2026</td>

                                    <td>
                                        <span class="badge bg-warning text-dark">
                                            आगामी
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button"
                                                class="btn btn-sm btn-outline-info"
                                                title="ऑफर देखें">

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

            $('#offerTable').DataTable({
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
```
