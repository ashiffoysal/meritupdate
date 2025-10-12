@extends('layouts.frontend')
@section('title', 'Terms & Conditions | Merit Tutors – East London’s Trusted Tuition Centre')
@section('meta_description','Review Merit Tutors’ terms and conditions to understand our tuition services, cancellation policies, student conduct, and privacy obligations.')
@section('content')

  <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                    
                                <div class="banner_left_contents">
                                	<span class="banner_span">Terms and condition {{ \Carbon\Carbon::now()->year }} {{-- Current Year --}} -
{{ \Carbon\Carbon::now()->addYear()->year }} {{-- Next Year --}}
</span>
                                    <h1>Merit Tutors
                                        <span>Terms <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>and condition </h1>
                                    <p> <b>Payments should be made at least one month in advance prior to starting lessons.</b></p>


                                    <p>A £50 refundable deposit must be paid for each child on the day of registration (in addition to a minimum of one month in advance for lessons). The deposit will be returned when the parent decide to withdraw their child from our centre and give us at least TWO-WEEK NOTICE.
</p> <p>A £10 admission fee must be paid for each child on the day of registration.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/contact') }}" class="btn_style">Contact Us</a>
                                    </div>
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
                                <h2>A catch-up  <span> lesson must be    <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span> arranged for any missed lessons. </h2>
                            </div>
                            <div class="what_make_us_contents">
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-step-1.png" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4>Catch-up Lesson</h4>
                                        <p>At least TWO WEEKS NOTICE will be required if you wish to change subjects or time slots (which depends on lesson availability) or leave Merit Tutors.</p><div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
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

