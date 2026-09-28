@extends('layouts.main_layouts')

@push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/apexcharts/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endpush

@section('main-content')
    <div class="page-index page-dashboard-hr">
        <!-- ============ HERO BANNER ============ -->
        <div class="hero-banner">

            <div class="hero-greeting">
                Welcome back, {{ session('user_name') }} 👋
            </div>

            <div class="hero-sub">
                JK GROUP — here's what's happening across your business today.
            </div>

            <div class="hero-chips">

                <!-- Today's Follow-ups -->
                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="calendar"></i>
                        Today's Follow-ups
                    </div>

                    <div class="hc-value">
                        {{ $todayFollowUps }}
                    </div>
                </div>


                <!-- Overdue Follow-ups -->
                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="alert-circle"></i>
                        Overdue Follow-ups
                    </div>

                    <div class="hc-value">
                        {{ $overdueFollowUps }}
                    </div>
                </div>


                <!-- Upcoming Follow-ups -->
                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="clock"></i>
                        Upcoming Follow-ups
                    </div>

                    <div class="hc-value">
                        {{ $upcomingFollowUps }}
                    </div>
                </div>


                <!-- New Leads Today -->
                <div class="hero-chip">
                    <div class="hc-label">
                        <i data-feather="user-plus"></i>
                        New Leads Today
                    </div>

                    <div class="hc-value">
                        {{ $newLeadsToday }}
                    </div>
                </div>

            </div>
        </div>

        <!-- ============ ROW 1: SALES PIPELINE ============ -->
        <div class="row g-4 mb-4">

            <!-- Total Active Leads -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-indigo">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="users"></i>
                        </div>

                        <div class="orb-value">
                            {{ $totalActiveLeads }}
                        </div>

                        <div class="orb-label">
                            Total Active Leads
                        </div>

                        <br>

                        <div id="orbSpark1" class="orb-sparkline"></div>

                    </div>
                </div>
            </div>


            <!-- Total Follow-ups -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-emerald">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="file-text"></i>
                        </div>

                        <div class="orb-value">
                            {{ $totalFollowUps }}
                        </div>

                        <div class="orb-label">
                            Total Follow-ups
                        </div>

                        <br>

                        <div id="orbSpark2" class="orb-sparkline"></div>

                    </div>
                </div>
            </div>


            <!-- Completed Follow-ups -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-amber">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="check-circle"></i>
                        </div>

                        <div class="orb-value">
                            {{ $completedFollowUps }}
                        </div>

                        <div class="orb-label">
                            Completed Follow-ups
                        </div>

                        <br>

                        <div id="orbSpark3" class="orb-sparkline"></div>

                    </div>
                </div>
            </div>


            <!-- Missed Follow-ups -->
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="card stat-orb orb-cyan">
                    <div class="card-body orb-body">

                        <div class="orb-icon">
                            <i data-feather="alert-triangle"></i>
                        </div>

                        <div class="orb-value">
                            {{ $missedFollowUps }}
                        </div>

                        <div class="orb-label">
                            Missed Follow-ups
                        </div>

                        <br>

                        <div id="orbSpark4" class="orb-sparkline"></div>

                    </div>
                </div>
            </div>

        </div>
        
        <!-- ============ ROW 4: ORDER FLOW PIPELINE (conversion funnel) ============ -->
        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card pipeline-card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Order Flow Pipeline — Conversion Funnel</h5>
                    </div>
                    <div class="card-body">
                        <div class="pipeline-track">

                            @foreach ($leadStageCounts as $index => $stage)
                                <div class="pipeline-step">

                                    @php
                                        $icons = [
                                            1 => 'user-plus',
                                            2 => 'clipboard',
                                            3 => 'package',
                                            4 => 'file-text',
                                            5 => 'map-pin',
                                            6 => 'phone-call',
                                            7 => 'users',
                                            8 => 'credit-card',
                                            9 => 'file',
                                            10 => 'edit',
                                            11 => 'check-circle',
                                        ];

                                        $gradients = [
                                            1 => 'linear-gradient(135deg,#6366F1,#8B5CF6)',
                                            2 => 'linear-gradient(135deg,#10B981,#059669)',
                                            3 => 'linear-gradient(135deg,#F59E0B,#D97706)',
                                            4 => 'linear-gradient(135deg,#EC4899,#DB2777)',
                                            5 => 'linear-gradient(135deg,#06B6D4,#0891B2)',
                                            6 => 'linear-gradient(135deg,#6366F1,#8B5CF6)',
                                            7 => 'linear-gradient(135deg,#10B981,#059669)',
                                            8 => 'linear-gradient(135deg,#F59E0B,#D97706)',
                                            9 => 'linear-gradient(135deg,#EC4899,#DB2777)',
                                            10 => 'linear-gradient(135deg,#06B6D4,#0891B2)',
                                            11 => 'linear-gradient(135deg,#EF4444,#DC2626)',
                                        ];
                                    @endphp

                                    <div class="step-icon"
                                        style="background:{{ $gradients[$stage->id] ?? 'linear-gradient(135deg,#6366F1,#8B5CF6)' }};">

                                        <i data-feather="{{ $icons[$stage->id] ?? 'circle' }}"></i>

                                    </div>

                                    <div class="step-label">
                                        {{ $stage->stage_name }}
                                    </div>

                                    <div class="step-count">
                                        {{ $stage->lead_count }} total
                                    </div>

                                </div>

                                @if (!$loop->last)
                                    @php
                                        $previousCount = (int) $leadStageCounts[$index]->lead_count;
                                        $nextCount = (int) $leadStageCounts[$index + 1]->lead_count;

                                        $conversionRate =
                                            $previousCount > 0 ? round(($nextCount / $previousCount) * 100) : 0;
                                    @endphp

                                    <div class="pipeline-arrow">

                                        <i data-feather="chevron-right"></i>

                                        <span
                                            class="funnel-rate
                    {{ $conversionRate < 50 ? 'low' : ($conversionRate < 75 ? 'mid' : '') }}">

                                            {{ $conversionRate }}%

                                        </span>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============ ROW 6: PAYMENTS + LEADS + TOP PRODUCTS ============ -->
        <div class="row g-4 mb-4">
            <div class="col-xl-8">
                <div class="card h-100">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Top Selling Products</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enquiry Date</th>
                                        <th>Customer Name</th>
                                        <th>Mobile</th>
                                        <th>City</th>
                                        <th>Requirement</th>
                                        <th>Priority</th>
                                        <th>Status</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leads as $key => $lead)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>

                                            <td>
                                                {{ $lead->enquiry_date ? \Carbon\Carbon::parse($lead->enquiry_date)->format('d M Y') : '-' }}
                                            </td>

                                            <td>
                                                <div class="fw-semibold">
                                                    {{ $lead->customer_name ?? '-' }}
                                                </div>

                                                @if (!empty($lead->email))
                                                    <small class="text-muted">
                                                        {{ $lead->email }}
                                                    </small>
                                                @endif
                                            </td>

                                            <td>{{ $lead->mobile ?? '-' }}</td>

                                            <td>{{ $lead->city ?? '-' }}</td>

                                            <td>
                                                {{ \Illuminate\Support\Str::limit($lead->requirement ?? ($lead->remarks ?? '-'), 40) }}
                                            </td>

                                            <td>
                                                @if ($lead->priority === 'High')
                                                    <span class="badge bg-danger">High</span>
                                                @elseif ($lead->priority === 'Medium')
                                                    <span class="badge bg-warning text-dark">Medium</span>
                                                @elseif ($lead->priority === 'Low')
                                                    <span class="badge bg-success">Low</span>
                                                @else
                                                    <span class="badge bg-secondary">-</span>
                                                @endif
                                            </td>

                                            <td>
                                                {{ $lead->stage_name ?? '-' }}
                                            </td>                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card h-100">

                    <div class="card-header">
                        <h5 class="card-title mb-1">Lead Priority</h5>

                        <p class="text-muted mb-0" style="font-size:.8rem;">
                            Priority wise assigned leads
                        </p>
                    </div>

                    <div class="card-body">

                        <div id="leadPriorityChart" class="chart-container"></div>

                        <div class="mt-3">

                            @foreach ($leadPriorityCounts as $priority)
                                <div class="d-flex justify-content-between align-items-center mb-3">

                                    <span>{{ $priority->priority }}</span>

                                    <strong>{{ $priority->lead_count }}</strong>

                                </div>
                            @endforeach

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

            // =========================================================
            // Orb Sparklines
            // =========================================================

            var sparkCommon = {
                chart: {
                    type: 'area',
                    height: 40,
                    sparkline: {
                        enabled: true
                    }
                },
                stroke: {
                    curve: 'smooth',
                    width: 2
                },
                fill: {
                    opacity: .25
                },
                tooltip: {
                    enabled: false
                }
            };

            Droom.createChart('#orbSpark1', Object.assign({}, sparkCommon, {
                series: [{
                    data: [10, 15, 12, 18, 14, 20, 24]
                }],
                colors: ['#6366F1']
            }));

            Droom.createChart('#orbSpark2', Object.assign({}, sparkCommon, {
                series: [{
                    data: [5, 8, 6, 10, 9, 13, 14]
                }],
                colors: ['#10B981']
            }));

            Droom.createChart('#orbSpark3', Object.assign({}, sparkCommon, {
                series: [{
                    data: [8, 9, 7, 11, 13, 12, 15]
                }],
                colors: ['#F59E0B']
            }));

            Droom.createChart('#orbSpark4', Object.assign({}, sparkCommon, {
                series: [{
                    data: [18, 16, 14, 15, 12, 10, 9]
                }],
                colors: ['#06B6D4']
            }));


            // =========================================================
            // Revenue & Orders Trend
            // =========================================================

            Droom.createChart('#revenueTrendChart', {
                series: [{
                        name: 'Revenue (₹ Thousand)',
                        type: 'area',
                        data: [180, 210, 195, 240, 260, 230, 268]
                    },
                    {
                        name: 'Orders',
                        type: 'line',
                        data: [8, 10, 9, 13, 14, 11, 12]
                    }
                ],

                chart: {
                    height: 320,
                    type: 'line',
                    fontFamily: 'Inter, sans-serif',
                    toolbar: {
                        show: false
                    }
                },

                stroke: {
                    curve: 'smooth',
                    width: [0, 3]
                },

                fill: {
                    type: 'gradient',
                    gradient: {
                        shadeIntensity: 1,
                        opacityFrom: .35,
                        opacityTo: .05,
                        stops: [0, 90, 100]
                    }
                },
                colors: ['#6366F1', '#EC4899'],
                xaxis: {
                    categories: [
                        'Mon',
                        'Tue',
                        'Wed',
                        'Thu',
                        'Fri',
                        'Sat',
                        'Sun'
                    ]
                },
                yaxis: [{
                        title: {
                            text: 'Revenue (₹ Thousand)'
                        }
                    },
                    {
                        opposite: true,
                        title: {
                            text: 'Orders'
                        }
                    }
                ],

                legend: {
                    position: 'top',
                    horizontalAlign: 'right'
                },

                grid: {
                    borderColor: '#f1f5f9'
                }
            });

            // =========================================================
            // Lead Priority Wise Donut
            // =========================================================

            var leadPriorityLabels = @json($leadPriorityCounts->pluck('priority')->values());

            var leadPrioritySeries = @json(
                $leadPriorityCounts->pluck('lead_count')->map(function ($count) {
                        return (int) $count;
                    })->values());

            var totalPriorityLeads = leadPrioritySeries.reduce(function(total, value) {
                return total + value;
            }, 0);


            Droom.createChart('#leadPriorityChart', {

                series: leadPrioritySeries,

                chart: {
                    type: 'donut',
                    height: 260,
                    fontFamily: 'Inter, sans-serif'
                },

                labels: leadPriorityLabels,

                colors: [
                    '#EF4444', // High
                    '#F59E0B', // Medium
                    '#10B981' // Low
                ],

                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',

                            labels: {
                                show: true,

                                total: {
                                    show: true,
                                    label: 'Total Leads',

                                    formatter: function() {
                                        return totalPriorityLeads;
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
            // =========================================================
            // Lead Source Donut
            // =========================================================

            var leadSourceLabels = @json($leadSourceCounts->pluck('reference')->values());

            var leadSourceSeries = @json(
                $leadSourceCounts->pluck('total')->map(function ($count) {
                        return (int) $count;
                    })->values());

            var totalSourceLeads = leadSourceSeries.reduce(function(total, value) {
                return total + value;
            }, 0);


            Droom.createChart('#paymentModeChart', {

                series: leadSourceSeries,

                chart: {
                    type: 'donut',
                    height: 260,
                    fontFamily: 'Inter, sans-serif'
                },

                labels: leadSourceLabels,

                colors: [
                    '#F59E0B',
                    '#10B981',
                    '#6366F1',
                    '#06B6D4',
                    '#EC4899',
                    '#8B5CF6',
                    '#EF4444'
                ],

                plotOptions: {
                    pie: {
                        donut: {
                            size: '70%',

                            labels: {
                                show: true,

                                total: {
                                    show: true,
                                    label: 'Total Leads',

                                    formatter: function() {
                                        return totalSourceLeads;
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
