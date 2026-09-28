@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.css') }}">
@endpush

@section('main-content')
    <div class="page-header">
        <div>
            <h3 class="page-title">VLE List</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">VLE Management</a>
                    </li>
                    <li class="breadcrumb-item active">VLE List</li>
                </ol>
            </nav>
        </div>

    </div>

    <div class="row g-4 mb-4">
        <div class="col-12">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">VLE List</h5>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="vleTable" class="table table-striped table-hover align-middle" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>VLE Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Shop Name</th>
                                    <th>Block</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                {{-- Dummy VLE 1 --}}
                                <tr>
                                    <td>1</td>

                                    <td>
                                        <div class="fw-semibold">Ramesh Kumar</div>
                                    </td>

                                    <td>9876543210</td>

                                    <td>
                                        <small class="text-muted">
                                            ramesh@example.com
                                        </small>
                                    </td>

                                    <td>
                                        Ramesh Digital Seva
                                    </td>
                                    <td>Bakawand</td>

                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>

                                    {{-- <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info" title="View VLE">
                                                <i data-feather="eye"></i>
                                            </button>

                                        </div>
                                    </td> --}}

                                    <td>
                                        <div class="d-flex gap-2">
                                            <form action="{{ url('common/vle-details') }}" method="GET">

                                                <input type="hidden" name="id" value="{{ encrypt(1) }}">

                                                <button type="submit" class="btn btn-sm btn-outline-info" title="View VLE">
                                                    <i data-feather="eye"></i>
                                                </button>

                                            </form>
                                        </div>
                                    </td>

                                </tr>


                                {{-- Dummy VLE 2 --}}
                                <tr>
                                    <td>2</td>

                                    <td>
                                        <div class="fw-semibold">Suresh Markam</div>
                                    </td>

                                    <td>9123456780</td>

                                    <td>
                                        <small class="text-muted">
                                            suresh@example.com
                                        </small>
                                    </td>

                                    <td>
                                        Suresh Online Center
                                    </td>
                                    <td>Darbha</td>

                                    <td>
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info" title="View VLE">
                                                <i data-feather="eye"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Dummy VLE 3 --}}
                                <tr>
                                    <td>3</td>

                                    <td>
                                        <div class="fw-semibold">Meena Kashyap</div>
                                    </td>

                                    <td>9988776655</td>

                                    <td>
                                        <small class="text-muted">
                                            meena@example.com
                                        </small>
                                    </td>

                                    <td>
                                        Meena Digital Point
                                    </td>
                                    <td>Tokapal</td>

                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info" title="View VLE">
                                                <i data-feather="eye"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Dummy VLE 4 --}}
                                <tr>
                                    <td>4</td>

                                    <td>
                                        <div class="fw-semibold">Mohan Singh</div>
                                    </td>

                                    <td>9090909090</td>

                                    <td>
                                        <small class="text-muted">
                                            mohan@example.com
                                        </small>
                                    </td>

                                    <td>
                                        Mohan E-Mitra Center
                                    </td>
                                    <td>Lohandiguda</td>

                                    <td>
                                        <span class="badge bg-danger">Rejected</span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info" title="View VLE">
                                                <i data-feather="eye"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>


                                {{-- Dummy VLE 5 --}}
                                <tr>
                                    <td>5</td>

                                    <td>
                                        <div class="fw-semibold">Kavita Nag</div>
                                    </td>

                                    <td>8765432109</td>

                                    <td>
                                        <small class="text-muted">
                                            kavita@example.com
                                        </small>
                                    </td>

                                    <td>
                                        Kavita Service Point
                                    </td>

                                    <td>Bastar</td>

                                    <td>
                                        <span class="badge bg-success">Active</span>
                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <button type="button" class="btn btn-sm btn-outline-info" title="View VLE">
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

@push('js')
    {{-- DataTables JS --}}
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            Droom.initDataTable('#vleTable');

            // Feather icons initialize
            if (typeof feather !== 'undefined') {
                feather.replace();
            }

        });
    </script>
@endpush
