@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endpush

@php
    // ===== Role resolution =====
    // Swap this for your actual auth source, e.g. auth()->user()->role
    $role      = session('user_role', 'admin'); // admin | manager
    $isAdmin   = $role === 'admin';
    $isManager = $role === 'manager';

    $roleLabel = match ($role) {
        'admin'   => 'Admin View — Full CRM Access',
        'manager' => 'Manager View — Team Monitoring',
        default   => 'Dashboard',
    };
@endphp

@section('main-content')
    <div class="page-index page-dashboard-hr">

        <!-- ============ HERO BANNER ============ -->
        <div class="hero-banner">
            <div class="hero-greeting">Welcome back, {{ session('user_name') }} 👋</div>
            <div class="hero-sub">
                JK GROUP REAL ESTATE — {{ $roleLabel }}
            </div>
            <div class="hero-chips">
                <div class="hero-chip">
                    <div class="hc-label"><i data-feather="phone-incoming"></i> Enquiries Today</div>
                    <div class="hc-value">27</div>
                </div>
                <div class="hero-chip">
                    <div class="hc-label"><i data-feather="calendar"></i> Follow-ups Due Today</div>
                    <div class="hc-value">34</div>
                </div>
                <div class="hero-chip">
                    <div class="hc-label"><i data-feather="percent"></i> Enquiry → Closed</div>
                    <div class="hc-value">11%</div>
                </div>
                <div class="hero-chip">
                    <div class="hc-label"><i data-feather="check-circle"></i> Closed This Month</div>
                    <div class="hc-value">14</div>
                </div>
            </div>
        </div>

        <!-- ============ ROW 1: TOP KPI CARDS ============ -->
        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-indigo">
                    <div class="card-body orb-body">
                        <div class="orb-icon"><i data-feather="inbox"></i></div>
                        <div class="orb-value">320</div>
                        <div class="orb-label">Total Enquiries</div>
                        <div class="orb-change up"><i data-feather="trending-up"></i> 27 New Today</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-emerald">
                    <div class="card-body orb-body">
                        <div class="orb-icon"><i data-feather="users"></i></div>
                        <div class="orb-value">146</div>
                        <div class="orb-label">Active Leads</div>
                        <div class="orb-change up"><i data-feather="trending-up"></i> In Pipeline</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-amber">
                    <div class="card-body orb-body">
                        <div class="orb-icon"><i data-feather="phone-call"></i></div>
                        <div class="orb-value">34</div>
                        <div class="orb-label">Follow-ups Due Today</div>
                        <div class="orb-change down"><i data-feather="clock"></i> 9 Overdue</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-cyan">
                    <div class="card-body orb-body">
                        <div class="orb-icon"><i data-feather="award"></i></div>
                        <div class="orb-value">14</div>
                        <div class="orb-label">Closed Deals (This Month)</div>
                        <div class="orb-change up"><i data-feather="trending-up"></i> +2 vs Last Month</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ ROW 2: COMPLETE LEAD PIPELINE ============ -->
        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card pipeline-card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Complete Lead Pipeline — Stage-wise Conversion</h5>
                    </div>
                    <div class="card-body">
                        <div class="pipeline-track">

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#6366F1,#8B5CF6);">
                                    <i data-feather="phone-incoming"></i>
                                </div>
                                <div class="step-label">Enquiry</div>
                                <div class="step-count">320 total</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate">81%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#0EA5E9,#0284C7);">
                                    <i data-feather="clipboard"></i>
                                </div>
                                <div class="step-label">Requirement</div>
                                <div class="step-count">260 captured</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate">81%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#10B981,#059669);">
                                    <i data-feather="home"></i>
                                </div>
                                <div class="step-label">Product Pitch</div>
                                <div class="step-count">210 pitched</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate mid">76%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#F59E0B,#D97706);">
                                    <i data-feather="file-text"></i>
                                </div>
                                <div class="step-label">Offer Sent</div>
                                <div class="step-count">160 sent</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate mid">75%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#EC4899,#DB2777);">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <div class="step-label">Site Visit</div>
                                <div class="step-count">120 visited</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate low">33%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#06B6D4,#0891B2);">
                                    <i data-feather="repeat"></i>
                                </div>
                                <div class="step-label">Follow-up</div>
                                <div class="step-count">95 active</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate mid">63%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#8B5CF6,#7C3AED);">
                                    <i data-feather="users"></i>
                                </div>
                                <div class="step-label">Meeting / Re-visit</div>
                                <div class="step-count">60 scheduled</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate low">37%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#22C55E,#16A34A);">
                                    <i data-feather="credit-card"></i>
                                </div>
                                <div class="step-label">Advance / Payment</div>
                                <div class="step-count">32 received</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate mid">72%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#F97316,#EA580C);">
                                    <i data-feather="file-plus"></i>
                                </div>
                                <div class="step-label">Paperwork</div>
                                <div class="step-count">23 in process</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate mid">70%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#EF4444,#DC2626);">
                                    <i data-feather="book-open"></i>
                                </div>
                                <div class="step-label">Registry</div>
                                <div class="step-count">16 scheduled</div>
                            </div>
                            <div class="pipeline-arrow"><i data-feather="chevron-right"></i><span class="funnel-rate">88%</span></div>

                            <div class="pipeline-step">
                                <div class="step-icon" style="background:linear-gradient(135deg,#001F3B,#00345F);">
                                    <i data-feather="check-square"></i>
                                </div>
                                <div class="step-label">Closed</div>
                                <div class="step-count">14 deals</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ ROW 3: TODAY'S FOLLOW-UPS + LEAD STAGE SUMMARY ============ -->
        <div class="row g-4 mb-4">
            <div class="col-xl-8">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <div>
                            <h5 class="card-title mb-1">Today's Follow-ups</h5>
                            <p class="text-muted mb-0" style="font-size:.8rem;">All follow-ups due across the team</p>
                        </div>
                        <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>Customer</th>
                                        <th>Requirement</th>
                                        <th>Stage</th>
                                        <th>Assigned To</th>
                                        <th>Contact</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10:30 AM</td>
                                        <td>Rahul Mehta</td>
                                        <td>2BHK, Raipur</td>
                                        <td><span class="badge bg-soft-info">Site Visit</span></td>
                                        <td>Priya Sharma</td>
                                        <td>+91 98765 43210</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-success"><i data-feather="phone"></i></button>
                                            @if($isManager)
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reassignModal">
                                                    <i data-feather="user-check"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11:15 AM</td>
                                        <td>Anjali Verma</td>
                                        <td>Commercial Shop</td>
                                        <td><span class="badge bg-soft-warning">Offer Sent</span></td>
                                        <td>Vikas Yadav</td>
                                        <td>+91 91234 56780</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-success"><i data-feather="phone"></i></button>
                                            @if($isManager)
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reassignModal">
                                                    <i data-feather="user-check"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1:00 PM</td>
                                        <td>Suresh Patel</td>
                                        <td>3BHK, Bhilai</td>
                                        <td><span class="badge bg-soft-primary">Meeting / Re-visit</span></td>
                                        <td>Priya Sharma</td>
                                        <td>+91 90000 11122</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-success"><i data-feather="phone"></i></button>
                                            @if($isManager)
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reassignModal">
                                                    <i data-feather="user-check"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4:30 PM</td>
                                        <td>Neha Joshi</td>
                                        <td>Plot, Durg</td>
                                        <td><span class="badge bg-soft-success">Advance / Payment</span></td>
                                        <td>Vikas Yadav</td>
                                        <td>+91 99887 65432</td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-success"><i data-feather="phone"></i></button>
                                            @if($isManager)
                                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reassignModal">
                                                    <i data-feather="user-check"></i>
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Lead Stage Summary</h5>
                        <p class="text-muted mb-0" style="font-size:.8rem;">All leads by stage</p>
                    </div>
                    <div class="card-body">
                        <div id="leadStageChart" class="chart-container"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ ROW 4: ENQUIRY SOURCE + OPERATOR PERFORMANCE ============ -->
        <div class="row g-4 mb-4">
            <div class="col-xl-5">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-1">Enquiry Source</h5>
                        <p class="text-muted mb-0" style="font-size:.8rem;">Where leads are coming from</p>
                    </div>
                    <div class="card-body">
                        <div id="enquirySourceChart" class="chart-container"></div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Walk-in</span><strong>68</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Website</span><strong>94</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Referral</span><strong>72</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Social Media</span><strong>56</strong>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span>Property Portals</span><strong>30</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="card h-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="card-title mb-1">Operator Performance</h5>
                            <p class="text-muted mb-0" style="font-size:.8rem;">Enquiries handled vs. closed this month</p>
                        </div>
                        @if($isManager)
                            <span class="badge bg-soft-primary">Team of 6</span>
                        @endif
                    </div>
                    <div class="card-body">

                        <div class="analytics-list-item">
                            <div class="analytics-rank">1</div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">Priya Sharma</span>
                                    <span class="text-muted small">62 handled · 9 closed</span>
                                </div>
                                <div class="analytics-progress-bar">
                                    <div class="bar" style="width:88%;background:linear-gradient(90deg,#6366F1,#8B5CF6);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="analytics-list-item">
                            <div class="analytics-rank">2</div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">Vikas Yadav</span>
                                    <span class="text-muted small">54 handled · 7 closed</span>
                                </div>
                                <div class="analytics-progress-bar">
                                    <div class="bar" style="width:74%;background:linear-gradient(90deg,#10B981,#059669);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="analytics-list-item">
                            <div class="analytics-rank">3</div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">Ritu Kashyap</span>
                                    <span class="text-muted small">48 handled · 5 closed</span>
                                </div>
                                <div class="analytics-progress-bar">
                                    <div class="bar" style="width:60%;background:linear-gradient(90deg,#F59E0B,#D97706);"></div>
                                </div>
                            </div>
                        </div>

                        <div class="analytics-list-item">
                            <div class="analytics-rank">4</div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between">
                                    <span class="fw-semibold">Amit Sao</span>
                                    <span class="text-muted small">36 handled · 2 closed</span>
                                </div>
                                <div class="analytics-progress-bar">
                                    <div class="bar" style="width:38%;background:linear-gradient(90deg,#06B6D4,#0891B2);"></div>
                                </div>
                            </div>
                        </div>

                        @if($isManager)
                            <div class="text-center mt-2">
                                <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reassignModal">
                                    <i data-feather="refresh-cw" class="btn-icon-prepend"></i> Reassign Absent Operator's Leads
                                </button>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        <!-- ============ ROW 5: PENDING ACTIONS ============ -->
        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Pending Actions</h5>
                    </div>
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="d-flex align-items-center border rounded p-3">
                                    <i data-feather="phone-call" class="text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Follow-up</h6>
                                        <small class="text-muted">34 Due Today</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="d-flex align-items-center border rounded p-3">
                                    <i data-feather="map-pin" class="text-info me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Site Visit</h6>
                                        <small class="text-muted">15 Scheduled</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="d-flex align-items-center border rounded p-3">
                                    <i data-feather="file-text" class="text-warning me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Offer</h6>
                                        <small class="text-muted">20 Pending</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="d-flex align-items-center border rounded p-3">
                                    <i data-feather="credit-card" class="text-success me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Payment</h6>
                                        <small class="text-muted">5 Awaited</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="d-flex align-items-center border rounded p-3">
                                    <i data-feather="file-plus" class="text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Paperwork</h6>
                                        <small class="text-muted">4 In Process</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-4 col-6">
                                <div class="d-flex align-items-center border rounded p-3">
                                    <i data-feather="book-open" class="text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-1">Registry</h6>
                                        <small class="text-muted">3 Scheduled</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============ ROW 6: RECENT ENQUIRIES ============ -->
        <div class="row g-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">Recent Enquiries</h5>
                        <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Enquiry No.</th>
                                        <th>Customer</th>
                                        <th>Requirement</th>
                                        <th>Source</th>
                                        <th>Stage</th>
                                        <th>Assigned To</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="fw-semibold text-primary">#ENQ-2041</span></td>
                                        <td>Rahul Mehta</td>
                                        <td>2BHK, Raipur</td>
                                        <td>Website</td>
                                        <td><span class="badge bg-soft-info">Site Visit</span></td>
                                        <td>Priya Sharma</td>
                                        <td>31 Aug 2026</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-semibold text-primary">#ENQ-2040</span></td>
                                        <td>Anjali Verma</td>
                                        <td>Commercial Shop</td>
                                        <td>Referral</td>
                                        <td><span class="badge bg-soft-warning">Offer Sent</span></td>
                                        <td>Vikas Yadav</td>
                                        <td>31 Aug 2026</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-semibold text-primary">#ENQ-2039</span></td>
                                        <td>Suresh Patel</td>
                                        <td>3BHK, Bhilai</td>
                                        <td>Walk-in</td>
                                        <td><span class="badge bg-soft-primary">Meeting / Re-visit</span></td>
                                        <td>Priya Sharma</td>
                                        <td>30 Aug 2026</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-semibold text-primary">#ENQ-2038</span></td>
                                        <td>Neha Joshi</td>
                                        <td>Plot, Durg</td>
                                        <td>Property Portal</td>
                                        <td><span class="badge bg-soft-success">Advance / Payment</span></td>
                                        <td>Vikas Yadav</td>
                                        <td>30 Aug 2026</td>
                                    </tr>
                                    <tr>
                                        <td><span class="fw-semibold text-primary">#ENQ-2037</span></td>
                                        <td>Deepak Sahu</td>
                                        <td>4BHK, Raipur</td>
                                        <td>Social Media</td>
                                        <td><span class="badge bg-secondary">Closed</span></td>
                                        <td>Ritu Kashyap</td>
                                        <td>29 Aug 2026</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @if($isManager)
        <!-- ============ REASSIGN MODAL (Manager only) ============ -->
        <div class="modal fade" id="reassignModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Reassign Follow-up</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Currently Assigned To</label>
                            <input type="text" class="form-control" value="Priya Sharma (On Leave)" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Reassign To</label>
                            <select class="form-select">
                                <option>Vikas Yadav</option>
                                <option>Ritu Kashyap</option>
                                <option>Amit Sao</option>
                            </select>
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Note (optional)</label>
                            <textarea class="form-control" rows="2" placeholder="Reason for reassignment..."></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Reassign</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('js')
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Lead Stage Summary — donut
            Droom.createChart('#leadStageChart', {
                series: [320, 260, 210, 160, 120, 95, 60, 32, 23, 16, 14],
                chart: {
                    type: 'donut',
                    height: 260,
                    fontFamily: 'Inter, sans-serif'
                },
                labels: [
                    'Enquiry', 'Requirement', 'Product Pitch', 'Offer Sent',
                    'Site Visit', 'Follow-up', 'Meeting/Re-visit',
                    'Advance/Payment', 'Paperwork', 'Registry', 'Closed'
                ],
                colors: [
                    '#6366F1', '#0EA5E9', '#10B981', '#F59E0B', '#EC4899',
                    '#06B6D4', '#8B5CF6', '#22C55E', '#F97316', '#EF4444', '#001F3B'
                ],
                plotOptions: {
                    pie: {
                        donut: {
                            size: '68%',
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Total Leads',
                                    formatter: function(w) {
                                        return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                    }
                                }
                            }
                        }
                    }
                },
                legend: {
                    show: true,
                    position: 'bottom',
                    fontSize: '11px'
                },
                dataLabels: {
                    enabled: false
                }
            });

            // Enquiry Source — donut
            Droom.createChart('#enquirySourceChart', {
                series: [68, 94, 72, 56, 30],
                chart: {
                    type: 'donut',
                    height: 220,
                    fontFamily: 'Inter, sans-serif'
                },
                labels: ['Walk-in', 'Website', 'Referral', 'Social Media', 'Property Portals'],
                colors: ['#6366F1', '#10B981', '#F59E0B', '#06B6D4', '#EC4899'],
                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',
                            labels: {
                                show: true,
                                total: {
                                    show: true,
                                    label: 'Total Enquiries',
                                    formatter: function() {
                                        return '320';
                                    }
                                }
                            }
                        }
                    }
                },
                legend: {
                    show: false
                },
                dataLabels: {
                    enabled: false
                }
            });

        });
    </script>
@endpush