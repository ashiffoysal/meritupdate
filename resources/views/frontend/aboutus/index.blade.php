@extends('layouts.frontend')
@section('title', 'About Merit Tutors – Leading Tuition Centre in East London Since 2004')
@section('meta_description','Discover the story behind Merit Tutors — East London’s trusted tuition centre since 2004. Learn about our mission, team of expert tutors, and commitment to student success.')
@section('content')
<style>
    .cp_ountdown_single {
    width: 200px;
    min-height: 200px;
    padding: 60px 40px 10px 40px;
    }
.cp_ountdown_single h3 {
    font-size: 23px;
    line-height: 50px;
}
button.btn.mybutton.btn-success {
    background: #FF6775;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 16px;
    border: none;
    font-weight: 700;
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
                                	<span class="banner_span">About us</span>
                                    <h1>Welcome <span>to <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>Merit Tutors</h1>
                                    <p>At <b>Merit Tutors</b>, we believe <b>every child has the ability to succeed.</b><br> They just need the right support, the right plan, and the right teacher.</p>
                                    <p>We’re a team of <b>Qualified School Teachers</b> with a <b>15 years+ Experience</b> for education and a mission: to help students excel academically by offering tailored, high-quality tuition that complements the National Curriculum. Whether your child needs a confidence boost or is aiming for top grades, we’re here to help every step of the way.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/assessment') }}" class="btn_style">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_right">
                                <img src="{{ asset('frontend/update-design') }}/assets/images/about/1.webp" alt="">
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
                                    <h2>Let’s <span>hear Our <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""><br>Story</h2>
                                </div>
                                <div class="default_tite_right">
                                    <p><b>Established in 2004, Merit Tutors has supported students across London for over 15 years.</b> From early learners to exam-ready teens, our personalized approach has helped hundreds of students turn challenges into achievements.</p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                </div>
                            </div>

                            <div class="our_enjoyable_course_top_contents">
                                <div class="oectc_single">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/icon1.png" alt="">
                                    <h4>Established in<br>2004</h4>
                                    <p>Merit Tutors has supported students across London for over 15 years</p>
                                </div>
                                <div class="oectc_single">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/icon2.png" alt="">
                                    <h4>Consistent exam success</h4>
                                    <p>100% of our GCSE and A-Level students achieved A-B grades in 2021</p>
                                </div>
                                <div class="oectc_single">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/icon3.png" alt="">
                                    <h4>Personalized Learning Plans</h4>
                                    <p>Countless students with renewed confidence and a love for learning</p>
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
        <section class="what_make_us_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="what_make_us">
                            <div class="default_title_2nd">
                                <h2>What Makes<span> Us <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span> Different?</h2>
                            </div>
                            <div class="what_make_us_contents">
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/22.webp" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4><span>Qualified Teachers,</span> Not Just Tutors</h4>
                                        <p>All our tutors are experienced, school-trained professionals who know how to teach - not just test. We understand what students need to succeed in school and beyond.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                        <h4><b>Individualised</b> Study Programs</h4>
                                        <p>No two students are the same. That’s why we create individualised study programmes tailored to each learner’s goals, abilities, and learning style.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/3.webp" alt="">
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/4.webp" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4><span>Proven Outstanding</span> Exam Success</h4>
                                        <p>We’ve mastered the strategies that work, whether it’s navigating tricky 11+ papers, smashing GCSE targets, or preparing for A-Level success. 100% of our GCSE and A-Level students achieved A-B grades in 2021.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                        <h4><b>Real Relationships,</b> Real Results</h4>
                                        <p>We build trust and rapport with our students, offering guidance and motivation beyond the classroom. It's not just about passing exams - it’s about growing into confident, capable learners.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/5.webp" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



      <section class="clilds_progress_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="default_title default_title2 default_title3">
                            <div class="default_title_left">
                                <h2>Merit <span>Tutors <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left2.png" alt=""> <br>Pricing & Fees</h2>
                            </div>
                            <div class="default_tite_right">
                                <p>We offer competitive rates designed to reflect the quality of our tuition and experience of our qualified teachers.</p>
                                <p style="color: #FF6775">Merit Tutors reserves the right to increase the fees at any time.</p>
                                <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right3.png" alt=""></div>
                            </div>
                        </div>
                        <div class="clilds_progress mt-2">
                            <div class="clilds_progress_countdown">
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single">
                                        <button class="btn mybutton btn-success">Years 1-5</button>
                                        <p>£ 10</p>
                                        <div class="cp_ountdown_single_icon"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon4.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                     <button class="btn mybutton btn-success">11 Plus</button>
                                        <p>£ 12</p>
                                        <div class="cp_ountdown_single_icon"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon5.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                     
                                        <button class="btn mybutton btn-success">Years 6-9</button>
                                        <p>£ 12</p>
                                        <div class="cp_ountdown_single_icon"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon5.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                    
                                        <button class="btn mybutton btn-success">Years 10-11</button>
                                        <p>£ 14</p>
                                        <div class="cp_ountdown_single_icon"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon6.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="cp_ountdown_single_parent">
                                    <div class="cp_ountdown_single cp_ountdown_single2">
                                        
                                        <button class="btn mybutton btn-success">Years 12-13</button>
                                        <p>£ 17</p>
                                        <div class="cp_ountdown_single_icon"><img src="{{ asset('frontend/update-design') }}/assets/images/home/icon7.png" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clilds_progress_contents">
                                <div class="clilds_progress_contents_left">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/home/childs-progress-cover.png" alt="">
                                    <div class="clilds_progress_contents_left_img"><img src="{{ asset('frontend/update-design') }}/assets/images/about/6.webp" alt=""></div>
                                </div>
                                <div class="clilds_progress_contents_right">
                                    <h4>Distance Won’t Stop Your Child’s Progress</h4>
                                    <span>Online Learning, Tailored for Your Child</span>
                                    <p>We understand that attending in-person sessions might not always be possible. That’s why we bring high-quality learning directly to your home with personalized one-to-one online tuition for children aged 7 to 18.</p>
                                    <p>Our online programs cover Primary, Secondary, GCSE, A-Level, and 11+ preparation, tailored to fit each student’s individual needs.</p>
                                    <a href="{{ url('/online-tutoring') }}" class="btn_style3">View Details</a>
                                </div>
                                <div class="clilds_progress_contents_arrow"><a href="{{ url('/online-tutoring') }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/cpc-btn-icon.png" alt=""></a></div>
                                <div class="cpc_round_main"><div class="cpc_round"></div></div>
                                <div class="cpc_round_main cpc_round_main2"><div class="cpc_round"></div></div>
                            </div>
                            <div class="clilds_progress_contents_btn"><a href="{{ url('/assessment') }}" class="btn_style">Book a Free Assessment</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  Start (Merit Tutors Gallery) Section  ================-->
        @include('frontend.include.gallery')
        <!--================  End (Merit Tutors Gallery) Section  ================-->

        <!--================  Start (Faqs) Section  ================-->
        @include('frontend.include.faq')
        <!--================  End (Faqs) Section  ================-->

        <!--================  Start (Join our Newsletter) Section  ================-->
        @include('frontend.include.newslatter')
        <!--================  End (Join our Newsletter) Section  ================-->
@endsection