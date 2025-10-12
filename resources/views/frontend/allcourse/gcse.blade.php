@extends('layouts.frontend')
@section('title', 'GCSE Tuition in East London | Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description', 'Achieve top GCSE grades with expert tutors at Merit Tutors in East London. Personalised support in Maths, English & Science. Book your free assessment today!')
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
                                <span class="banner_span">GCSE's Tuition</span>
                                <h1>Focused Preparation <span> for <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt="GCSE's Tuition"></span> <br>GCSE's Success</h1>
                                <p>At <b> Merit Tutors </b>, we prepare students for GCSE success through tailored support and expert guidance. Our tutors identify each student's needs, address their weaknesses, and adapt lessons to boost confidence and performance. We create a motivating environment where every child is empowered to achieve their best.</p>
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
                                <h2>Key Features <span>of Our <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>GCSE's Tuition:</h2>
                            </div>
                            <div class="default_tite_right">
                                <p><b>GCSE Maths Tuition at Merit Tutors:</b>Our expert tutors provide targeted support to help students master key maths concepts, improve problem-solving skills, and build confidence for exam success. We tailor each lesson to meet individual needs and ensure strong progress.</p>
                                <br>
                                <p><b>GCSE English Tuition at Merit Tutors: </b> Our dedicated tutors help students strengthen their reading, writing, and analytical skills. We focus on exam techniques, essay structure, and understanding texts to ensure each student is fully prepared and confident for their GCSE English exams.</p>
                                <br>
                                <p> <b>GCSE Science Tuition at Merit Tutors:</b>Our experienced tutors cover Biology, Chemistry, and Physics with a clear focus on exam success. We simplify complex concepts, reinforce core knowledge, and develop strong scientific thinking to help students excel in their GCSE Science exams.</p>
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
                                    <h4><span>Our </span> Approach </h4>
                                    <p>Our tutors have strong teaching backgrounds and the expertise needed to ensure your child’s success. Many of our staff are qualified schoolteachers and graduates from top UK universities.
As a registered private exam centre, we offer capable students the opportunity to sit their GCSE exams early, with full preparation and support.</p>
<p>At the heart of our approach is the student. We take the time to understand each learner’s needs, set clear goals, and deliver a personalised tutoring experience.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Supportive & Motivating </b> Environment</h4>
                                    <p>At Merit Tutors, we create a supportive and motivating space where students feel confident to achieve their best.
Each group typically includes 4–6 students from the same year, allowing focused attention and peer support.
Our tutors listen carefully, adapt their approach to individual needs, and challenge students to think critically and tackle difficult questions.
We aim to make learning enjoyable, helping students feel positive about their progress and confident in their abilities.</p>

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
                                    <p>We regularly assess students through exam-style tests to track progress and identify areas for improvement. Past papers are frequently used, helping students become familiar with exam formats and expectations.
Each student’s performance is recorded online, allowing us to monitor strengths and weaknesses in detail.
Personalised feedback is provided to guide further practice at home, and homework is assigned after every session to reinforce learning.</p>
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
                                <h2>GCSE's <span>Tuition
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Content & Teaching</h2>
                            </div>
                            <div class="default_tite_right">
                                <p>Our expert-led courses provide targeted support in Maths, English, and Science, helping
                                    students master core topics, improve exam technique, and build confidence for GCSE's
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
                                            aria-controls="pills-home" aria-selected="true">GCSE Maths</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">GCSE English</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">GCSE Science</button>
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
                                                        <h3>Course Content And Teaching</h3>
                                                        <p>At <b> Merit Tutors </b>, we cover all key topics across Edexcel, AQA, and OCR exam boards. Our experienced tutors introduce effective methods and techniques to help students confidently tackle a variety of maths questions.
We use a combination of past papers, targeted strategies, and personalised resources to maximise student performance.
With small class sizes of 4–6 students, our sessions are focused, supportive, and exam-driven.
We maintain high expectations for both our students and tutors, aiming to boost grades—often from a 5 to an 8 within a few months.
Our tailored GCSE Maths tuition equips students with the tools, tips, and confidence needed to succeed.</p>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Student Reviews</h3>
                                                        <p>‘“Before coming here, I was not confident in maths but now I find solving non-calculator paper questions much easier.”</p>
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
                                                       <h3>Course Content And Teaching</h3>

                                                        <p>At <b> Merit Tutors </b>, we deliver comprehensive GCSE English support across all major exam boards. Students begin the curriculum as early as Year 9, allowing ample time to cover both English Language and Literature in depth.

Our experienced tutors use a range of effective techniques and innovative resources to build confidence and ensure students can approach exam questions with ease. We strike a balance between support and challenge—helping students master both core skills and more complex analysis.

Through regular mock exams and unique activities—such as student-led marking—we help students understand examiner expectations and apply these insights in their writing.

With a strong focus on literary devices, structured responses, and detailed text analysis, our lessons are designed to secure top marks.

Book your lesson today and give your child the head start they deserve.</p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Student Reviews</h3>
                                                        <p>“My teacher makes reading novels enjoyable and ensures we explore the material in depth. We effectively use the PEE (Point, Evidence, Explain) method during discussions, especially when studying An Inspector Calls.”</p>
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
                                                        <h3>GCSE Science Tuition</h3>
                                                        <p>We cover all essential course material across major exam boards, including Edexcel, AQA, and OCR. Our tutors prepare students thoroughly to ensure a deep understanding of Biology, Chemistry, and Physics.
By teaching a variety of effective techniques, we empower students to approach exam questions with confidence and clarity.
Using diverse educational resources, we ensure students develop a strong grasp of scientific concepts.
Our focus is on enhancing students’ analytical skills so they can effectively apply their knowledge in practice and exams.</p>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Student Reviews</h3>

                                                        <p>"I used to struggle with science because I didn’t know how to effectively learn Biology, Chemistry, and Physics. Now, I can confidently apply my knowledge to tackle even the most challenging exam questions."</p>

                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Success</h3>

                                                        <p>We have taught approximately 700 students, with around 95% exceeding their predicted GCSE grades.</p>

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
