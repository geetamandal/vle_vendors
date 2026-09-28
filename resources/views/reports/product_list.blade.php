@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h3 class="page-title">उत्पाद सूची</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"> <a href="{{ url('/') }}">होम</a> </li>
                    <li class="breadcrumb-item"> <a href="#">उत्पाद प्रबंधन</a> </li>
                    <li class="breadcrumb-item active">उत्पाद सूची</li>
                </ol>
            </nav>
        </div>
        @if (session('role_id') === 2)
            <div> <a href="{{ url('vle/add-product') }}" class="btn btn-primary"> <i data-feather="plus" class="me-1"
                        style="width:16px;height:16px;"></i>
                    उत्पाद जोड़ें </a> </div>
        @endif
    </div>

    <div class="masonry-grid">
        <div class="masonry-item">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="productTable" class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th>क्रमांक</th>
                                    <th>उत्पाद का नाम</th>
                                    <th>श्रेणी</th>
                                    <th>कीमत</th>
                                    <th>उपलब्ध मात्रा</th>
                                    <th>इकाई</th>
                                    <th>स्थिति</th>
                                    <th>कार्रवाई</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>चावल</td>
                                    <td>किराना</td>
                                    <td>₹50</td>
                                    <td>100</td>
                                    <td>किलोग्राम</td>
                                    <td>
                                        <span class="badge bg-success">सक्रिय</span>
                                    </td>
                                    <td>
                                        <a href="{{ url('common/product-details/' . encrypt(1)) }}"
                                            class="btn btn-sm btn-outline-primary" title="विवरण">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>कॉपी</td>
                                    <td>स्टेशनरी</td>
                                    <td>₹40</td>
                                    <td>50</td>
                                    <td>नग</td>
                                    <td>
                                        <span class="badge bg-success">सक्रिय</span>
                                    </td>
                                    <td>
                                        <a href="{{ url('common/product-details/' . encrypt(2)) }}"
                                            class="btn btn-sm btn-outline-primary" title="विवरण">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>दाल</td>
                                    <td>किराना</td>
                                    <td>₹120</td>
                                    <td>30</td>
                                    <td>किलोग्राम</td>
                                    <td>
                                        <span class="badge bg-success">सक्रिय</span>
                                    </td>
                                    <td>
                                        <a href="{{ url('common/product-details/' . encrypt(3)) }}"
                                            class="btn btn-sm btn-outline-primary" title="विवरण">
                                            <i data-feather="eye"></i>
                                        </a>
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
            $('#productTable').DataTable({
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
