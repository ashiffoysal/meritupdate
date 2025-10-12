@extends('layouts.frontend')
@section('title', 'KS3 Tuition in East London | Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description',
    'Prepare for GCSE success with strong KS3 foundations. Merit Tutors offers expert KS3 tuition in Maths, English & Science across East London. Free assessment!')
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
                                <span class="banner_span">KS3 Tuition</span>
                                <h2>Focused Preparation <span> for <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt=""></span> <br>KS3 Success</h2>
                                <p>At <b> Merit Tutors </b>, we recognise that every student learns differently. Our
                                    experienced tutors tailor lessons and homework to individual needs, ensuring appropriate
                                    challenge and support. Through regular assessments and ongoing feedback, we identify and
                                    address areas for improvement early.

                                    Our goal is to create a positive, motivating environment where students build confidence
                                    and achieve academic growth. With a structured course and high-quality resources aligned
                                    to the KS3 curriculum, we prepare students thoroughly for the challenges ahead.</p>
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
                                    <h4><span>Our </span> Approach </h4>
                                    <p>At Merit Tutors, we aim to provide your child with a solid foundation in the key
                                        concepts required for KS3. Our goal is to build their confidence and equip them with
                                        the essential skills needed to transition smoothly into GCSEs and succeed within the
                                        secondary school curriculum. Recognising that each KS3 year group has unique
                                        learning needs, our tutors take the time to understand your child’s individual
                                        requirements, delivering personalised and tailored teaching to support their
                                        progress.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Supportive & Motivating </b> Environment</h4>
                                    <p>Our teachers understand the challenges some students face, and we are committed to
                                        providing empathetic and comprehensive support throughout your child’s academic
                                        journey. From an early stage, we aim to challenge students to develop strong
                                        analytical skills and critical thinking, preparing them effectively for GCSEs and
                                        beyond.

                                        We listen carefully to each student’s needs and strive to meet their expectations.
                                        Our centre designs personalised, diagnostic resources aligned with the national
                                        curriculum to target individual learning needs while maintaining curriculum
                                        standards.</p>

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
                                    <h4><span>Progress </span> Monitoring </h4>
                                    <p>Each teacher regularly conducts tests designed to simulate school examinations,
                                        enabling students, teachers, and parents to monitor progress and identify areas for
                                        improvement. Past papers are frequently incorporated into lessons to help students
                                        become familiar with test formats and develop the confidence to tackle challenging
                                        questions instinctively.</p>

                                    <p>We maintain detailed online records for each student to track specific topics in
                                        mathematics where they face difficulties and identify opportunities for further
                                        development. Written feedback is provided on assessments, allowing students to
                                        practice and reinforce learning at home.</p>

                                    <p>Additionally, regular homework is assigned after each class to ensure sufficient
                                        practice and consolidation of course material outside the classroom.</p>
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


    <section class="our_branches_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="our_branches">
                        <div class="default_title">
                            <div class="default_title_left">
                                <h2>KS3 <span>Tuition
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Content & Teaching</h2>
                            </div>
                            <div class="default_tite_right">
                                <p>Our expert-led courses provide targeted support in Maths, English, and Science, helping
                                    students master core topics, improve exam technique, and build confidence for 11+
                                    success.</p>
                                <div class="dtr_img"><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                        alt=""></div>
                            </div>
                        </div>
                        <div class="our_branches_contents">
                            <div class="our_branches_contents_btn">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Maths</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">English</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">Science</button>
                                    </li>
                                </ul>
                            </div>

                            <!-- Start Tabs Contents all -->
                            <div class="tab-content our_branches_tab_contents_main" id="pills-tabContent">
                                <!-- Start 1st Tab -->
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <section class="features-section">
                                        <div class="features-container">
                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Course Content</h3>
                                                        <ul>
                                                            <li>Numbers.</li>
                                                            <li>Algebra.</li>
                                                            <li>Ratio, Proportion and Rates of Change.</li>
                                                            <li>Geometry and Measures.</li>
                                                            <li>Probability.
                                                            <li>
                                                            <li>Statistics</li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Student Reviews</h3>
                                                        <p>“Each lesson we do a refresher of the previous topic we studied
                                                            so we don’t forget, then start a new topic and then get homework
                                                            on it. It’s hard but it helps me at school and I can be ahead of
                                                            all my friends.”</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </section>
                                </div>
                                <!-- End 1st Tab -->

                                <!-- Start 2nd Tab -->
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <section class="features-section">
                                        <div class="features-container">
                                            <div class="feature-column">

                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>English</h3>

                                                        <ul>
                                                            <li>Reading.</li>
                                                            <li>Writing.</li>
                                                            <li>Grammar & Spelling</li>
                                                            <li>Spoken English.</li>

                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Student Reviews</h3>
                                                        <p>Currently, our class is focusing on linguistic devices. Whenever
                                                            there's something I don’t fully understand, the teacher takes
                                                            time to go over it with me one-on-one while the rest of the
                                                            class continues with their work. This individual support is
                                                            extremely helpful as it ensures I don’t fall behind</p>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- End 2nd Tab -->

                                <!-- Start 3rd Tab -->
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <section class="features-section">
                                        <div class="features-container">
                                            <div class="feature-column">


                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>We cover all the KS3 syllabus in:</h3>
                                                        <ul>
                                                            <li>Biology.</li>
                                                            <li>Chemistry.</li>
                                                            <li>Physics.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Student Reviews</h3>

                                                        <p>"I used to struggle with science because I didn’t fully
                                                            understand how to approach learning Biology, Chemistry, and
                                                            Physics. Now, I’m able to apply what I’ve learned to even the
                                                            more challenging and unfamiliar questions on exam papers."</p>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- End 3rd Tab -->
                            </div>
                            <!-- End Tabs Contents all -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our_services_main" id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="our_service">
                        <div class="default_title">
                            <div class="default_title_left">
                                <h2>Invest in Your Child's <span>Future with <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span> Merit <img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Tutors</h2>
                                <!-- <div class="dtl_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""></div> -->
                            </div>
                            <div class="default_tite_right">
                                <p>We cover all major exam boards - Edexcel, AQA, and OCR - ensuring every topic and skill
                                    required is taught with precision.</p>
                                <div class="dtr_img"><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                        alt=""></div>
                            </div>
                        </div>
                        <div class="our_service_contents">
                            <div class="our_service_contents_left">
                                <img src="{{ asset('frontend/update-design') }}/assets/images/home/our-service-cover.png"
                                    alt="">
                                <div class="our_service_contents_left_img"><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/our-service.png"
                                        alt=""></div>
                            </div>
                            <div class="our_service_contents_right">
                                <div class="oscr_single_parent">
                                    <div class="oscr_single">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/courses/1.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="oscr_single_parent oscr_single_parent2">
                                    <div class="oscr_single">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/courses/2.png"
                                            alt="">
                                    </div>
                                    <div class="sss">
                                        <div class="oscr_single oscr_single2">
                                            <img src="{{ asset('frontend/update-design') }}/assets/images/courses/3.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="oscr_single_parent oscr_single_parent3">
                                    <div class="oscr_single">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/courses/4.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="our_service_contents_right_icon"><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/service-icon.png"
                                        alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png"
                alt=""></div>
        <div class="section_shape2"><img
                src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png" alt=""></div>
    </section>

    @include('frontend.include.newslatter')
    <!--================  End (Join our Newsletter) Section  ================-->
@endsection
