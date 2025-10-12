@extends('layouts.frontend')
@section('title', 'KS2 Maths Tuition in East London | Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description', 'Strengthen your child’s Maths skills with expert KS2 tuition at Merit Tutors. Covering key topics in Forest Gate, Ilford & Plaistow. Free assessment available!')
@section('content')

    <style>
        .features-section {
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .features-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
            display: flex;
            gap: 40px;
            max-width: 1200px;
            width: 100%;
            flex-wrap: wrap;
        }

        .feature-column {
            flex: 1;
            min-width: 300px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .feature-item .icon {
            font-size: 24px;
            margin-top: 4px;
        }

        .feature-item h3 {
            margin: 0 0 8px;
            font-size: 18px;
            color: #111827;
        }

        .feature-item p,
        .feature-item ul {
            margin: 0;
            color: #374151;
            font-size: 15px;
            line-height: 1.6;
        }

        .feature-item ul {
            padding-left: 20px;
        }

        .feature-item ul li {
            margin-bottom: 6px;
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
                                <span class="banner_span">Ks2 Maths Tuition</span>
                                <h1>Building Strong <span> Foundations in <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt=""></span> <br>KS2 Maths with Merit
                                    Tutors</h1>
                                <p>At Merit Tutors, our KS2 Maths Tuition builds
                                    strong foundations in number skills,
                                    problem-solving, and mathematical confidence.
                                    Our tailored sessions help young learners
                                    develop a love for maths from an early age.</p>
                                <div class="banner_contents_btns">
                                    <a href="{{ url('/assessment') }}" class="btn_style">Book a Free Assessment</a>
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
                                <h2>KS2 Maths <span>Curriculum <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Overview:</h2>
                            </div>
                            <div class="default_tite_right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b>Addition and Subtraction</b></p>
                                        <p><b>Multiplication and Division</b></p>
                                        <p><b>Number and Place Value</b></p>
                                        <p><b>Ratio</b></p>
                                        <p><b>Fractions, Decimals and Percentages</b></p>

                                    </div>
                                    <div class="col-md-6">
                                        <p><b>Algebra</b></p>
                                        <p><b>Geometry</b></p>
                                        <p><b>Measurement</b></p>
                                        <p><b>Statistics</b></p>

                                    </div>
                                </div>
                                <div class="dtr_img"><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png"
                alt=""></div>
        <div class="section_shape2"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png"
                alt=""></div>
    </section>
    <!--================  End Our-Services Section  ================-->
    <!--================  Start (What Makes Us Different?) Section  ================-->
    <section class="what_make_us_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="what_make_us">
                        <div class="default_title_2nd">
                            <h2>What Makes<span> Us <img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png"
                                        alt=""></span> Different?</h2>
                        </div>
                        <div class="what_make_us_contents">
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent1.png"
                                        alt="">
                                </div>
                                <div class="what_make_us_single_text">
                                    <h4><span>Our Teachers </span> and Students</h4>
                                    <p>At Merit Tutors, our team comprises qualified schoolteachers and experienced examiners with a strong track record of teaching students across East London. This wealth of expertise enables us to deliver consistent progress and outstanding academic success for every student at our tuition centre.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>So How Do We Teach?</b></h4>
                                    <p>KS2 students range from Year 3 to Year 6. Lower KS2 pupils are taught to begin to add on from what they have learnt in KS1, while upper KS2 pupils are being prepared for the tests to come as well as the much more difficult level of learning they will encounter at secondary school. Group Tutoring: Our classes have around 5/6 students as we like to ensure that our classes are not big and distracting for the students, enabling focus and a calm learning environment. Merit Tutors create personalised resources so that we are able to target specific problems in learning for each student, but don’t worry, we also make sure to keep in line with the national curriculum. Lower KS2 Maths: Tutors will ensure that students are able to effectively use whole numbers and be able to use each function confidently. Simple fractions and multiplications will also become easy for our students. Upper KS2 Maths: Merit Tutors will teach students at this stage to start to understand arithmetic problems and to begin using algebra.
                                    </p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png"
                                            alt=""></div>
                                </div>
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent4.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent1.png"
                                        alt="">
                                </div>
                                <div class="what_make_us_single_text">
                                    <h4><span>Our KS2 </span> Maths Environment</h4>
                                    <p>At KS2 mathematics moves away from simply learning about the numbers to actually solving more difficult problems and applying their mathematical learning.Here at Merit Tuition, we allow the students to effectively and quickly use and apply the numerical mathematical foundations that they have already developed . We aim to not only prepare our students in mathematics for KS2 SATs, but also to ensure that they are able to succeed in their future years at secondary school.
                                    </p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text" style="max-width: 100% !important">
                                    <h4><b>How Can You </b> See the Results?</h4>
                                    <p>At <b> Merit Tutors </b>, our KS2 English teachers regularly conduct short assessments based on the units covered in class. These tests help teachers, parents, and students clearly track progress and identify areas for improvement.

                                    </p><p> Students receive weekly homework from a centre-provided booklet, which must be completed before their next session. During class, teachers review the homework and assess students on the material covered at home.

                                    </p><p> We maintain detailed online records for each student, allowing us to monitor their strengths, challenges, and areas needing support. In addition, students receive written feedback to guide their practice at home and reinforce the skills learned during lessons.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent1.png"
                                        alt="">
                                </div>
                                <div class="what_make_us_single_text">
                                    <h4><span>What the </span>Students Think</h4>
                                    <p>I prepared for my Year 6 SATs at Merit Tutors and had an excellent experience. I achieved all Level 5s in my Maths SATs papers, exceeding my initial prediction of Level 4.</p>
                                    <p>My teacher is very supportive and consistently helps me improve. Thanks to their guidance, I can now confidently recall multiplication tables up to 12 by heart.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.include.newslatter')
    <!--================  End (Join our Newsletter) Section  ================-->
@endsection
