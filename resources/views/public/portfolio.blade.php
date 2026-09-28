@extends('public_layouts.main_layout')
@push('css')
<style>
./* Portfolio Cards - Compact Size */
.page-pricing .pricing-item {
    height: 100%;
    padding: 24px 24px;
    border: 1px solid #e5dfd2;
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
}

/* Icon */
.page-pricing .pricing-item .icon-box {
    width: 55px;
    height: 55px;
    margin-bottom: 18px;
}

/* Category */
.page-pricing .pricing-item-title {
    display: block;
    margin-bottom: 12px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

/* Heading */
.page-pricing .pricing-item-content h2 {
    margin-bottom: 16px;
    font-size: 24px;
    line-height: 1.2;
}

/* Description */
.page-pricing .pricing-item-content p {
    margin: 0;
    font-size: 14px;
    line-height: 1.5;
}
.portfolio-bottom-text {
    margin-top: 28px;
}

.portfolio-bottom-text p {
    margin: 0;
    font-size: 16px;
    font-style: italic;
    line-height: 1.5;
}
</style>
@endpush
@section('main_content')

    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">PROPERTY <span>PORTFOLIO</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home /</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Portfolio</a></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

     <!-- Page Pricing Start -->
    <div class="page-pricing">
    <div class="container">

        <!-- Section Heading Start -->
        <div class="section-title mb-40">
            <span class="section-sub-title wow fadeInUp">THE PORTFOLIO</span>

            <h2 class="text-anime-style-2" data-cursor="-opaque">
                Premium <span>properties & projects</span> across Raipur & Nava Raipur
            </h2>

            <p class="wow fadeInUp" data-wow-delay="0.2s">
                Premium residential, commercial and development opportunities in prime locations.
            </p>
        </div>
        <!-- Section Heading End -->


        <div class="row gy-4">

            <!-- Card 1 -->
            <div class="col-xl-4 col-md-6">
                <div class="pricing-item wow fadeInUp">

                    <div class="pricing-item-header">

                        <div class="icon-box">
                          <img src="{{ asset('user_assets/images/icon-pricing-1.svg') }}" alt="">
                        </div>

                        <div class="pricing-item-content">

                            <span class="pricing-item-title">
                                NAVA RAIPUR · GOVERNANCE
                            </span>

                            <h2>
                                Adjacent to Vidhan Sabha
                            </h2>

                            <p>
                                Plots minutes from Chhattisgarh's seat of governance — a corridor of permanent address value.
                            </p>

                        </div>

                    </div>

                </div>
            </div>


            <!-- Card 2 -->
            <div class="col-xl-4 col-md-6">
                <div class="pricing-item wow fadeInUp" data-wow-delay="0.2s">

                    <div class="pricing-item-header">

                        <div class="icon-box">
                           <img src="{{ asset('user_assets/images/icon-pricing-2.svg') }}" alt="">
                        </div>

                        <div class="pricing-item-content">

                            <span class="pricing-item-title">
                                NAVA RAIPUR · BUREAUCRATIC
                            </span>

                            <h2>
                                Beside senior bureaucrats' homes
                            </h2>

                            <p>
                                Premium pockets around the homes of the state's top officials — neighbourhoods built on trust.
                            </p>

                        </div>

                    </div>

                </div>
            </div>


            <!-- Card 3 -->
            <div class="col-xl-4 col-md-6">
                <div class="pricing-item wow fadeInUp" data-wow-delay="0.4s">

                    <div class="pricing-item-header">

                        <div class="icon-box">
                            <img src="{{ asset('user_assets/images/icon-pricing-3.svg') }}" alt="">
                        </div>

                        <div class="pricing-item-content">

                            <span class="pricing-item-title">
                                RAIPUR CITY · ALL LOCATIONS
                            </span>

                            <h2>
                                Residential & commercial parcels
                            </h2>

                            <p>
                                Premium land in every established neighbourhood — homes, shops, offices, mixed-use.
                            </p>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Page Pricing End -->

    <!-- Page Projects Start -->
    <div class="page-projects">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture1.png')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Residential</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">PLOTS</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture2.png')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Commercial</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">FLATS</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture3.png')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Industrial</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">VILLAS</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture4.png')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Infrastructure</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">HOUSE</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="0.8s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture5.png')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Luxury Living</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">COMMERICAL OFFICE/SPACE</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="1s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture8.png ')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li>Smart Homes</li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">HOUSE</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="1.2s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture6.png ')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Urban Lifestyle</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">PLOTS</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>

                <div class="col-xl-3 col-md-6">
                    <!-- Project Item Start -->
                    <div class="project-item wow fadeInUp" data-wow-delay="1.4s">
                        <!-- Project Item Image Start -->
                        <div class="project-item-image">
                            <a href="{{ url('/portfolio-details') }}" data-cursor-text="View">
                                <figure>
                                    <img src="{{ asset('user_assets/images/portfolio/Picture9.png ')}}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Project Item Image End -->

                        <!-- Project Item Content Start -->
                        <div class="project-item-content">
                            <ul>
                                <li><a href="#">Affordable Housing</a></li>
                            </ul>
                            <h2><a href="{{ url('/portfolio-details') }}">VILLAS</a></h2>
                        </div>
                        <!-- Project Item Content End -->
                    </div>
                    <!-- Project Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Projects End -->
@endsection