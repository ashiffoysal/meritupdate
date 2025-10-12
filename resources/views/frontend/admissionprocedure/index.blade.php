@extends('layouts.frontend')
@section('title', 'Admission Procedure – Join Merit Tutors')
@section('meta_description','Understand our easy and quick admission process for students from KS1 to A-Level.')
@section('content')
  <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                	<span class="banner_span">Admission Procedure</span>
                                    <h1>How to
                                        <span>Admission<img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br> Get Started</h1>
                                    <p>Getting started at  <b>Merit Tutors</b> is quick and easy.</p>
                                    <p>With just <b>four simple steps</b> - from enquiry to classroom, we ensure that every child is placed at the right academic level, receives tailored support, and gets started smoothly with all the resources and guidance they need. </p>
                                    <p>Just follow four clear steps to begin your child’s learning journey.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/assessment') }}" class="btn_style">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_right">
                                <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-banner.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Banner Section  ================-->
        <!--================  Start (What Makes Us Different?) Section  ================-->
        <section class="what_make_us_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="what_make_us">
                            <div class="default_title_2nd">
                                <h1>How Our <span> Admission  Process<img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span>  Works?</h1>
                            </div>
                            <div class="what_make_us_contents">
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-step-1.png" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                            <span class="banner_span">Step 1</span>
                                        <h4><span>Fill Out the  </span> Free Assessment Form</h4>
                                        <p>Begin by completing our online <a href="{{ url('/assessment') }}" style="">Free Assessment </a> form. This allows us to gather essential details about your child so we can tailor our approach to their educational needs.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                          <span class="banner_span">Step 2</span>
                                        <h4><b>Attend a Free </b> Assessment Session </h4>
                                        <p>Once we receive your form, a member of our team will contact you to schedule a free assessment at one of our centres. This helps us evaluate your child's current academic level and recommend the most suitable support.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-step-2.png" alt="">
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-step-3.png" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                          <span class="banner_span">Step 3</span>
                                        <h4><span>Discuss Results </span>and Preferences</h4>
                                        <p>Once the assessment is complete, we’ll discuss the results with you. You can share your goals, ask questions, and pick a preferred schedule for subjects and lesson times.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                          <span class="banner_span">Step 4</span>
                                        <h4><b>Complete Admission </b> and Begin Classes</h4>
                                        <p>Make the necessary payment and confirm your child’s timetable. From there, they’ll be ready to start lessons with access to resources, feedback, and ongoing support.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-step-4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.include.newslatter')
@endsection

