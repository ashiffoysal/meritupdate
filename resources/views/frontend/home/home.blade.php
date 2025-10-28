@extends('layouts.frontend')
@section('title', ' Best Tuition Centre in East London, Forest Gate, Ilford,Plaistow')
@section('meta_description','Merit Tutors are a leading provider of primary, secondary, and A-Level Tuition based in east London (Forest Gate and Ilford).')
@section('content')
<style>
   .banner_left_contents h1{
    font-size: 69px;
    line-height: 81px;
    font-weight: 700;
    color: #1B2431;
}
</style>
        <!--================  Start Banner Section  ================-->
        <section class="banner_section_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                    <h1>Top Tuition Centre <span><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br> in East London</h1>
                                    <p>Merit Tutors are <b>OFSTED Registered Childcare Centre</b> based on East London’s Tuition Centre of choice. A leading provider of Primary, Secondary and A-Level Tuition since 2004.</p>
                                    <p>We provide premium tuitions at the following:</p>
                                    <ul>
                                        <li><a href="#">
                                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.81015" width="29.2881" height="29.2881" rx="14.6441" fill="#FF6775"/>
                                            <path d="M19.5254 12.0983L12.8135 18.8102L9.7627 15.7593" stroke="white" stroke-width="1.95254" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            Forest Gate Branch
                                        </a></li>
                                        <li><a href="#">
                                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.81015" width="29.2881" height="29.2881" rx="14.6441" fill="#FF6775"/>
                                            <path d="M19.5254 12.0983L12.8135 18.8102L9.7627 15.7593" stroke="white" stroke-width="1.95254" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            Ilford Branch
                                        </a></li>
                                        <li><a href="#">
                                            <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.81015" width="29.2881" height="29.2881" rx="14.6441" fill="#FF6775"/>
                                            <path d="M19.5254 12.0983L12.8135 18.8102L9.7627 15.7593" stroke="white" stroke-width="1.95254" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>

                                            Plaistow Branch
                                        </a></li>
                                    </ul>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/assessment') }}" class="btn_style">Book a Free Assessment</a>
                                        <a href="{{url('/admission-procedure')}}" class="btn_style">Admission Procedure</a>
                                    </div>
                                </div>
                                <div class="banner_left_students">
                                    <ul>
                                        <li><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/student1.png" alt=""></li>
                                        <li><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/student2.png" alt=""></li>
                                        <li><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/student3.png" alt=""></li>
                                        <li><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/student4.png" alt=""></li>
                                        <li><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/student5.png" alt=""></li>
                                    </ul>
                                    <p><span>800+</span> Happy Students</p>
                                </div>
                            </div>
                            <div class="banner_right">
                                <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/banner-right.png" alt="">
                                <div class="banner_right_logo"><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/banner-logo.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="section10" class="demo">
              <a href="#banner"><span></span><i class="fa-solid fa-angles-down"></i></a>
            </section>
        </section>
        <!--================  End Banner Section  ================-->

        <!--================  Start Our-Services Section  ================-->
        <section class="our_services_main" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_service">
                            <div class="default_title">
                                <div class="default_title_left">
                                    <h2>Why <span>Choose <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span> Our<img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""><br>Services</h2>
                                    <!-- <div class="dtl_img"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""></div> -->
                                </div>
                                <div class="default_tite_right">
                                    <p>At Merit Tutors, we are dedicated to providing exceptional educational support tailored to meet the unique needs of each learner. Here are some compelling reasons why families trust us with their children’s education:</p>
                                    <div class="dtr_img"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                </div>
                            </div>

                            <div class="our_service_contents">
                                <div class="our_service_contents_left">
                                    <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/our-service-cover.png" alt="">
                                    <div class="our_service_contents_left_img"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/our-service.png" alt=""></div>
                                </div>
                                <div class="our_service_contents_right">
                                    <div class="oscr_single_parent">
                                        <div class="oscr_single">
                                            <h3>100%</h3>
                                            <p>of our A Level students in 2021 achieved grade A+ to B</p>
                                        </div>
                                    </div>
                                    <div class="oscr_single_parent oscr_single_parent2">
                                        <div class="oscr_single">
                                            <h3>96%</h3>
                                            <p>Success Rate on 11+ & Year 6 SATs</p>
                                        </div>
                                        <div class="sss">
                                            <div class="oscr_single oscr_single2">
                                                <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/service-logo.png" alt="">
                                                <p>Ofsted Registered Childcare Centre</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="oscr_single_parent oscr_single_parent3">
                                        <div class="oscr_single">
                                            <h3>100%</h3>
                                            <p>of our GCSE students secured grade 9 to 7 in 2021</p>
                                        </div>
                                    </div>
                                    <div class="our_service_contents_right_icon"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/service-icon.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_shape"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png" alt=""></div>
            <div class="section_shape2"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png" alt=""></div>
        </section>
        <!--================  End Our-Services Section  ================-->

        <!--================  Start Our-Enjoyable-Courses Section  ================-->
        @include('frontend.include.courses')
        <!--================  End Our-Enjoyable-Courses Section  ================-->

        <!--================  Start Expert-Tutors Section  ================-->
        <section class="expert_tutors_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="expert_tutors">
                            <div class="expert_tutors_left">
                                <h4><span>Expert Tutors <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span> from Top UK Universities with Qualified Teacher Status (QTS) <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""></h4>
                                <ul>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et1.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et2.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et3.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et4.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et5.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et6.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et7.png" alt=""></a></li>
                                    <li><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et8.png" alt=""></a></li>
                                </ul>
                                <div class="expert_tutors_btn"><a href="#">All our Tutors are <span class="etbtn_img_black"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/etbtn-black.png" alt=""></span> <span class="etbtn_img_white"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/etbtn-white.png" alt=""></span></a></div>
                            </div>
                            <div class="expert_tutors_right">
                                <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et-cover.png" alt="">
                                <div class="expert_tutors_img"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/et-img.png" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_shape"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png" alt=""></div>
            <div class="section_shape2"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png" alt=""></div>
        </section>
        <!--================  End Expert-Tutors Section  ================-->

        <!--================  Start Child’s-Progress Section  ================-->
        <section class="clilds_progress_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="clilds_progress">
                            <div class="clilds_progress_countdown">
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single">
                                        <h3>100%</h3>
                                        <p>GCSE Pass Rate</p>
                                        <div class="cp_ountdown_single_icon"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/icon4.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                        <h3>95%</h3>
                                        <p>SATs Above Average</p>
                                        <div class="cp_ountdown_single_icon"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/icon5.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                        <h3>100%</h3>
                                        <p>A Level Pass Rate</p>
                                        <div class="cp_ountdown_single_icon"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/icon6.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                        <h3>100%</h3>
                                        <p>11 Plus Pass Rate</p>
                                        <div class="cp_ountdown_single_icon"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/icon7.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clilds_progress_contents">
                                <div class="clilds_progress_contents_left">
                                    <img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/childs-progress-cover.png" alt="">
                                    <div class="clilds_progress_contents_left_img"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/childs-progress.png" alt=""></div>
                                </div>
                                <div class="clilds_progress_contents_right">
                                    <h4>Distance Won’t Stop Your Child’s Progress</h4>
                                    <span>Online Learning, Tailored for Your Child</span>
                                    <p>We understand that attending in-person sessions might not always be possible. That’s why we bring high-quality learning directly to your home with personalized one-to-one online tuition for children aged 7 to 18.</p>
                                    <p>Our online programs cover Primary, Secondary, GCSE, A-Level, and 11+ preparation, tailored to fit each student’s individual needs.</p>
                                    <a href="#" class="btn_style3">View Details</a>
                                </div>
                                <div class="clilds_progress_contents_arrow"><a href="#"><img class="lazy" data-src="{{ asset('frontend/update-design') }}/assets/images/home/cpc-btn-icon.png" alt=""></a></div>
                                <div class="cpc_round_main"><div class="cpc_round"></div></div>
                                <div class="cpc_round_main cpc_round_main2"><div class="cpc_round"></div></div>
                            </div>
                            <div class="clilds_progress_contents_btn"><a href="#" class="btn_style">Book a Free Assessment</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Child’s-Progress Section  ================-->

        <!--================  Start (What Parents Say About Us) Section  ================-->
        @include('frontend.include.reviews')
        <!--================  End (Stories & Feedback) Section  ================-->

        <!--================  Start (Our Featured Products) Section  ================-->
        @include('frontend.include.books')
        <!--================  End (Our Featured Products) Section  ================-->

        <!--================  Start (Our-Branches) Section  ================-->
        @include('frontend.include.branches')
        <!--================  End (Our-Branches) Section  ================-->

        <!--================  Start (Join our Newsletter) Section  ================-->
        @include('frontend.include.newslatter')
        <!--================  End (Join our Newsletter) Section  ================-->
@endsection
