@extends('layouts.frontend')
@section('title', 'Expert Home Tutoring in East London – KS1 to A Level | Merit Tutors')
@section('meta_description','Looking for expert home tutoring in East London? Merit Tutors provides tailored one-to-one tuition at home for KS1–A Level students. Book your free assessment today!')
@section('content')
  <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                	<span class="banner_span">Home Tutoring</span>
                                    <h1>Welcome <span>to <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>Merit Tutors</h1>
                                    <p>At <b>Merit Tutors</b>, we believe <b>every child has the ability to succeed.</b><br> They just need the right support, the right plan, and the right teacher.</p>
                                    <p>We’re a team of <b>Qualified School Teachers</b> with a <b>15 years+ Experience</b> for education and a mission: to help students excel academically by offering tailored, high-quality tuition that complements the National Curriculum. Whether your child needs a confidence boost or is aiming for top grades, we’re here to help every step of the way.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{url('assessment')}}" class="btn_style">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_right">
                                <img src="{{ asset('frontend/update-design') }}/assets/images/about/about.png" alt="">
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

        <!--================  Start (What Makes Us Different?) Section  ================-->
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
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent1.png" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4><span>Qualified Teachers,</span> Not Just Tutors</h4>
                                        <p>All our tutors are experienced, school-trained professionals who know how to teach - not just test. We understand what students need to succeed in school and beyond.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                        <h4><b>Individualized</b> Study Programs</h4>
                                        <p>No two students are the same. That’s why we create individualised study programmes tailored to each learner’s goals, abilities, and learning style.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent2.png" alt="">
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent3.png" alt="">
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
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
