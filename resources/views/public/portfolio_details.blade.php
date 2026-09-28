@extends('public_layouts.main_layout')
@push('css')
@endpush
@section('main_content')

    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">PLOTS</h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home/</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/portfolio') }}">portfolio/</a></li>
                                <li class="breadcrumb-item"><a href="javascript:void(0);">PLOTS</a></li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-category-list project-category-list wow fadeInUp">
                            <ul>
                                <li><span>Project Category</span> Residential</li>
                                <li><span>Client Name</span> Praveen Mandal</li>
                                <li><span>Start Date</span> 07 November, 2026</li>
                                <li><span>Duration</span> 01 Years , 5 Month</li>
                                <li><span>Location</span> Raipur, Chhattisgarh</li>
                            </ul>
                        </div>
                        <!-- Page Category List End -->
                        
                        <!-- Sidebar CTA Box Start -->
                       
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Page Single image Start -->
                        <div class="page-single-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('user_assets/images/portfolio/Picture1.png')}}" alt="">
                            </figure>
                        </div>
                        <!-- Page Single image End -->
                        
                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <h2 class="text-anime-style-2">Project <span>overview</span></h2>
                            <p class="wow fadeInUp">The Modern, Functional Designs project focuses on creating contemporary living and working spaces that balance aesthetic appeal, practicality, and long-term usability. This project reflects our commitment to smart planning, clean design principles, and efficient space utilization, ensuring every area serves a clear purpose without compromising visual appeal.</p>

                            <!-- Project Planning Box Start -->
                            <div class="project-planning-box">
                                <h2 class="text-anime-style-2">Planning & <span>execution</span></h2>
                                <p class="wow fadeInUp">Detailed planning played a crucial role in the success of this project. From layout development to material selection, every decision was made with functionality and durability in mind. Our construction team ensured precise execution, maintaining consistency between the approved designs and final build.</p>
                                
                                <!-- Project Planning Item List Start -->
                                <div class="project-planning-item-list wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Project Planning Item Start -->
                                    <div class="project-planning-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('user_assets/images/icon-project-planning-item-1.svg ')}}" alt="">
                                        </div>
                                        <div class="project-planning-item-no">
                                            <h2><span class="counter">250</span>+</h2>
                                        </div>
                                        <div class="project-planning-item-content">
                                            <h3>Projects Completed</h3>
                                            <p>Successfully delivere residential and commercial projects.</p>
                                        </div>
                                    </div>
                                    <!-- Project Planning Item End -->
                                    
                                    <!-- Project Planning Item Start -->
                                    <div class="project-planning-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('user_assets/images/icon-project-planning-item-2.svg ')}}" alt="">
                                        </div>
                                        <div class="project-planning-item-no">
                                            <h2><span class="counter">120</span>+</h2>
                                        </div>
                                        <div class="project-planning-item-content">
                                            <h3>Our Happy Clients</h3>
                                            <p>Successfully delivere residential and commercial projects.</p>
                                        </div>
                                    </div>
                                    <!-- Project Planning Item End -->
                                    
                                    <!-- Project Planning Item Start -->
                                    <div class="project-planning-item">
                                        <div class="icon-box">
                                            <img src="{{ asset('user_assets/images/icon-project-planning-item-3.svg ')}}" alt="">
                                        </div>
                                        <div class="project-planning-item-no">
                                            <h2><span class="counter">98</span>%</h2>
                                        </div>
                                        <div class="project-planning-item-content">
                                            <h3>Client Satisfaction Rate</h3>
                                            <p>Successfully delivere residential and commercial projects.</p>
                                        </div>
                                    </div>
                                    <!-- Project Planning Item End -->
                                </div>
                                <!-- Project Planning Item List End -->

                                <!-- Section Footer Text Start -->
                                <div class="section-footer-text section-satisfy-img wow fadeInUp" data-wow-delay="0.4s">
                                    <!-- Satisfy Client Images Start -->
                                   
                                    <!-- Satisfy Client Images End -->    
                                </div>
                                <!-- Section Footer Text End -->
                            </div>
                            <!-- Project Planning Box End -->
                            
                            <!-- Project Entry Info Box Start -->
                           
                            <!-- Project Entry Info Box End -->
                            
                            <!-- Project Challenges Box Start -->
                            <div class="project-challenges-box">
                                <h2 class="text-anime-style-2">Project challenge <span>and solutions</span></h2>
                                <p class="wow fadeInUp">Every construction project comes with unique challenges that require strategic planning and expert execution. During this project, the primary challenges included efficient space utilization, strict timeline management.</p>

                                <!-- Project Challenges Item List Start -->
                                <div class="project-challenges-item-list">
                                    <!-- Project Challenges Item Start -->
                                    <div class="project-challenges-item">
                                        <!-- Project Challenges Image Start -->
                                        <div class="project-challenges-image">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('user_assets/images/project-challenges-image-1.jpg ')}}" alt="">
                                            </figure>
                                        </div>
                                        <!-- Project Challenges Image End -->

                                        <!-- Project Challenges Item Content Start -->
                                        <div class="project-challenges-item-content wow fadeInUp">
                                            <div class="project-challenges-item-header">
                                                <h3>Project challenge:</h3>
                                                <p>The primary challenge of this project was managing tight timelines while maintaining high construction quality.</p>
                                            </div>
                                            <div class="project-challenges-item-body">
                                                <div class="icon-box">
                                                    <img src="{{ asset('user_assets/images/icon-project-challenges-item-body-1.svg ')}}" alt="">
                                                </div>
                                                <div class="project-challenges-item-body-content">
                                                    <h3>Short Website-Friendly</h3>
                                                    <p>Delivering quality construction within strict timelines & design requirement.</p>
                                                </div>
                                            </div>
                                            <div class="project-challenges-item-btn">
                                                <a href="{{ url('/contact') }}" class="btn-default">contact us</a>
                                            </div>
                                        </div>
                                        <!-- Project Challenges Item Content End -->
                                    </div>
                                    <!-- Project Challenges Item End -->

                                    <!-- Project Challenges Item Start -->
                                    <div class="project-challenges-item">
                                        <!-- Project Challenges Image Start -->
                                        <div class="project-challenges-image">
                                            <figure class="image-anime reveal">
                                                <img src="{{ asset('user_assets/images/project-challenges-image-2.jpg ')}}" alt="">
                                            </figure>
                                        </div>
                                        <!-- Project Challenges Image End -->

                                        <!-- Project Challenges Item Content Start -->
                                        <div class="project-challenges-item-content wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="project-challenges-item-header">
                                                <h3>Project solutions:</h3>
                                                <p>To overcome project challenges, a structured execution plan was implemented, supported by detailed scheduling and efficient resource management.</p>
                                            </div>
                                            <div class="project-challenges-body-list">
                                                <ul>
                                                    <li>Modern construction techniques, high-quality materials, and strict supervision were applied to maintain precision.</li>
                                                    <li>Clear communication, proactive continuous allowed the team to adapt quickly to on-site conditions.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Project Challenges Item Content End -->
                                    </div>
                                    <!-- Project Challenges Item End -->
                                </div>
                                <!-- Project Challenges Item List End -->
                            </div>
                            <!-- Project Challenges Box End -->
                        </div>
                        <!-- Project Entry End -->

                        <!-- Page Single FAQs Start -->
                       
                        <!-- Page Single FAQs End -->
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->
@endsection