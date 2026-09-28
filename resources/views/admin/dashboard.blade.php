@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endpush

@php
    $role = session('user_role', 'vle');

    $roleLabel = match ($role) {
        'admin'   => 'प्रशासक',
        'manager' => 'प्रबंधक',
        'vle'     => 'वीएलई डैशबोर्ड',
        default   => 'वीएलई डैशबोर्ड',
    };
@endphp

@section('main-content')

    <div class="page-index page-dashboard-hr">

        <!-- ============ HERO BANNER ============ -->
        <div class="hero-banner">

            <div class="hero-greeting">
                स्वागत है, {{ session('user_name') }} 👋
            </div>

            <div class="hero-sub">
                वीएलई सेवा पोर्टल — {{ $roleLabel }}
            </div>

            <div class="hero-chips">

                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="file-text"></i>
                        आज के आवेदन
                    </div>
                    <div class="hc-value">18</div>
                </div>

                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="users"></i>
                        कुल ग्राहक
                    </div>
                    <div class="hc-value">245</div>
                </div>

                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="clock"></i>
                        लंबित आवेदन
                    </div>
                    <div class="hc-value">12</div>
                </div>

                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="check-circle"></i>
                        पूर्ण सेवाएं
                    </div>
                    <div class="hc-value">156</div>
                </div>

            </div>
        </div>


        <!-- ============ ROW 1: TOP KPI CARDS ============ -->
        <div class="row g-4 mb-4">

            <!-- Total Applications -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-indigo">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="file-text"></i>
                        </div>

                        <div class="orb-value">320</div>

                        <div class="orb-label">
                            कुल आवेदन
                        </div>

                        <div class="orb-change up">
                            <i data-feather="trending-up"></i>
                            आज 18 नए आवेदन
                        </div>

                    </div>
                </div>
            </div>


            <!-- Total Customers -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-emerald">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="users"></i>
                        </div>

                        <div class="orb-value">245</div>

                        <div class="orb-label">
                            कुल ग्राहक
                        </div>

                        <div class="orb-change up">
                            <i data-feather="user-plus"></i>
                            आज 8 नए ग्राहक
                        </div>

                    </div>
                </div>
            </div>


            <!-- Pending Applications -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-amber">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="clock"></i>
                        </div>

                        <div class="orb-value">12</div>

                        <div class="orb-label">
                            लंबित आवेदन
                        </div>

                        <div class="orb-change down">
                            <i data-feather="alert-circle"></i>
                            4 आवेदन तत्काल
                        </div>

                    </div>
                </div>
            </div>


            <!-- Completed Services -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-cyan">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="check-circle"></i>
                        </div>

                        <div class="orb-value">156</div>

                        <div class="orb-label">
                            पूर्ण सेवाएं
                        </div>

                        <div class="orb-change up">
                            <i data-feather="trending-up"></i>
                            इस माह पूर्ण
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <!-- ============ QUICK INFORMATION ============ -->
        <div class="row g-4">

            <!-- Recent Applications -->
            <div class="col-xl-8">

                <div class="card">

                    <div class="card-header">
                        <div>
                            <h5 class="mb-1">हाल के आवेदन</h5>
                            <p class="text-muted mb-0">
                                हाल ही में प्राप्त सेवा आवेदन
                            </p>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table align-middle">

                                <thead>
                                    <tr>
                                        <th>आवेदक</th>
                                        <th>सेवा</th>
                                        <th>दिनांक</th>
                                        <th>स्थिति</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>रमेश कुमार</td>
                                        <td>आय प्रमाण पत्र</td>
                                        <td>27 सितम्बर 2026</td>
                                        <td>
                                            <span class="badge bg-warning">
                                                लंबित
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>सीमा साहू</td>
                                        <td>जाति प्रमाण पत्र</td>
                                        <td>27 सितम्बर 2026</td>
                                        <td>
                                            <span class="badge bg-success">
                                                पूर्ण
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>मोहन यादव</td>
                                        <td>निवास प्रमाण पत्र</td>
                                        <td>26 सितम्बर 2026</td>
                                        <td>
                                            <span class="badge bg-info">
                                                प्रक्रिया में
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>गीता बाई</td>
                                        <td>जन्म प्रमाण पत्र</td>
                                        <td>26 सितम्बर 2026</td>
                                        <td>
                                            <span class="badge bg-success">
                                                पूर्ण
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Important Information -->
            <div class="col-xl-4">

                <div class="card">

                    <div class="card-header">
                        <div>
                            <h5 class="mb-1">महत्वपूर्ण सूचना</h5>
                            <p class="text-muted mb-0">
                                नवीनतम जानकारी
                            </p>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="d-flex gap-3 mb-4">

                            <div class="orb-icon">
                                <i data-feather="bell"></i>
                            </div>

                            <div>
                                <h6 class="mb-1">
                                    सेवा पोर्टल अपडेट
                                </h6>

                                <p class="text-muted mb-0">
                                    नई सेवाओं की जानकारी पोर्टल पर उपलब्ध है।
                                </p>
                            </div>

                        </div>


                        <div class="d-flex gap-3 mb-4">

                            <div class="orb-icon">
                                <i data-feather="alert-circle"></i>
                            </div>

                            <div>
                                <h6 class="mb-1">
                                    लंबित आवेदन
                                </h6>

                                <p class="text-muted mb-0">
                                    लंबित आवेदनों की समय पर जांच करें।
                                </p>
                            </div>

                        </div>


                        <div class="d-flex gap-3">

                            <div class="orb-icon">
                                <i data-feather="info"></i>
                            </div>

                            <div>
                                <h6 class="mb-1">
                                    आवश्यक दस्तावेज
                                </h6>

                                <p class="text-muted mb-0">
                                    आवेदन स्वीकार करने से पहले आवश्यक दस्तावेज जांचें।
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection


@push('js')

    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            if (typeof feather !== 'undefined') {
                feather.replace();
            }

        });
    </script>

@endpush