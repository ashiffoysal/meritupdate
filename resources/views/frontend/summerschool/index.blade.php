@extends('layouts.frontend')
@section('title', 'Summer School in East London – Fun & Focused Learning | Merit Tutors')
@section('meta_description','Join Merit Tutors’ Summer School in East London for fun, focused academic sessions. Boost confidence, prevent learning loss & get ahead before term starts!')
@section('content')
<style>
    .cp_ountdown_single {
     width: 395;
height: 547;
    padding: 60px 40px 10px 40px;

border-radius: 30px;

    }
.cp_ountdown_single h3 {
    font-size: 23px;
    line-height: 50px;
}
</style>
        <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                	<span class="banner_span">Summer School</span>
                                    <h1>Welcome <span>to our<img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>summer school {{ now()->year }}</h1>
                                    <p>Our Summer School is designed to help students excel in their studies while enjoying a Fun and Engaging Learning Environment. Whether you want to catch up, get ahead, or explore new subjects, our expert tutors are here to guide you every step of the way</p>
                                    <p><b>To Join in our Summer School</b>, please visit the following link and 
Fill out your details.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('summer-school-application') }}" class="btn_style">Summer School Application</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_right">
                                <img src="{{ asset('frontend/update-design') }}/assets/images/about/summer-school.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Banner Section  ================-->

        <!--================  Start Our-Services Section  ================-->
        <section class="our_services_main our_story_main" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_service">
                            <div class="default_title">
                                <div class="default_title_left">
                                    <h2>Summer  <span>School  <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""><br>{{ now()->year }}
!</h2>
                                </div>
                                {{-- <div class="default_tite_right">
                                    <p><b>Established in 2004, Merit Tutors has supported students across London for over 15 years.</b> From early learners to exam-ready teens, our personalized approach has helped hundreds of students turn challenges into achievements.</p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                </div> --}}
                            </div>

                            <div class="our_enjoyable_course_top_contents">
                                <div class="oectc_single">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/home/icon1.png" alt="">
                                    <h4>Age Groups & Year Groups</h4>
                                    <p>Age: 5-15 Years
Year: From 1 to GCSE</p>
                                </div>
                                <div class="oectc_single">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/home/icon2.png" alt="">
                                    <h4>Date and Duration</h4>
                                    <p>From 22nd July
To 31st Augus</p>
                                </div>
                                <div class="oectc_single">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/home/icon3.png" alt="">
                                    <h4>Offered Subjects</h4>
                                    <p>Mathematics, English
Programming/
Creative Activities</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png" alt=""></div>
            <div class="section_shape2"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png" alt=""></div>
        </section>
        <!--================  End Our-Services Section  ================-->
          <section class="our_featured_products_main our_priding_fees_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_featured_products">
                            <div class="default_title default_title2">
                                <div class="default_title_left">
                                    <h2>Our <span>Pricing & <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""> <br>Fees</h2>
                                </div>
                                <div class="default_tite_right">
                                    <p>We offer competitive rates designed to reflect the quality of our service and the experience of our qualified teachers. <span>Merit Tutors reserves the right to increase the fees at any time.</span></p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right4.png" alt=""></div>
                                </div>
                            </div>
                            <div class="our_pricing_fees_contents">
                                <div class="our_pricing_fees_single_main">
                                    <div class="our_pricing_fees_single">
                                        <h5>Full Day Package Rate <br>(1-2 Days a week)</h5>
                                        <a href="#">Total Rate Per Day £25</a>
                                        <ul>
                                            <li>Maths <span>2 Hours</span></li>
                                            <li>English <span>2 Hours</span></li>
                                            <li class="active">Break <span>1 Hour</span></li>
                                            <li>Programing/Creative Activities <span>1 Hour</span></li>
                                        </ul>
                                        <div class="our_pricing_fees_single_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon6.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="our_pricing_fees_single_main">
                                    <div class="our_pricing_fees_single our_pricing_fees_single2">
                                        <h5>Hourly Rates <br>by Subject</h5>
                                        <a href="#">Maths & English</a>
                                        <ul>
                                            <li>2-4 Hours <span>-</span> <span>£6 Per Hour</span></li>
                                            <li>6-10 Hours <span>-</span> <span>£5 Per Hour</span></li>
                                            <li>10 Hours + <span>-</span> <span>£4 Per Hour</span></li>
                                        </ul>
                                        <div class="our_pricing_fees_single_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon9.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="our_pricing_fees_single_main">
                                    <div class="our_pricing_fees_single">
                                        <h5>Full Day Package Rate <br>(3-5 Days a week)</h5>
                                        <a href="#">Total Rate Per Day £27</a>
                                        <ul>
                                            <li>Maths <span>2 Hours</span></li>
                                            <li>English <span>2 Hours</span></li>
                                            <li class="active">Break <span>1 Hour</span></li>
                                            <li>Programing/Creative Activities <span>1 Hour</span></li>
                                        </ul>
                                        <div class="our_pricing_fees_single_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon10.png" alt=""></div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_shape3"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape3.png" alt=""></div>
            <div class="section_shape4"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape4.png" alt=""></div>
        </section>
        <!--================  End (Our Pricing & Fees) Section  ================-->
        <!--================  Start (Merit Tutors Gallery) Section  ================-->

        <!--================  Start (Faqs) Section  ================-->
        @include('frontend.include.summer-school-faq')
        <!--================  End (Faqs) Section  ================-->

        <!--================  Start (Join our Newsletter) Section  ================-->
        @include('frontend.include.newslatter')
        <!--================  End (Join our Newsletter) Section  ================-->
@endsection