@extends('layouts.frontend')
@section('title', 'A-Level Tuition in Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description',
    'Looking for expert A-Level tuition in Forest Gate, Ilford, or Plaistow? Merit Tutors offers qualified tutors, tailored revision, and proven results. Book a free assessment today!')
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
                                <span class="banner_span">A Level Tuition</span>
                                <h1>Focused Preparation <span> for <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt="A Level Tuition"></span> <br>A Level Success</h1>
                                <p>At <b> Merit Tutors </b>, we bring extensive experience in preparing students thoroughly
                                    for their A Level exams. Our tutors take the time to understand each student’s
                                    individual needs and tailor their teaching methods accordingly to support academic
                                    growth.</p>
                                <p>We recognize the importance of A Level exams and what it takes to succeed. We firmly
                                    believe every student has the potential to achieve top grades with the right guidance
                                    and support. Our approach focuses on identifying and addressing each student’s
                                    weaknesses while fostering a motivating and supportive environment, enabling them to
                                    build confidence and reach their full potential.</p>
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
                <div class="col-md-12" style="margin-bottom:20px ">
                    <div class="our_service">
                        <div class="default_title">
                            <div class="default_title_left">
                                <h2>Key Features <span>of Our <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt="">A Level Tuition</h2>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_service">
                        <div class="default_title">
                            {{-- <div class="default_title_left">
                                <h2>Key Features <span>of Our <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>A Level Tuition:</h2>
                            </div> --}}
                            <div class="default_tite_right">
                                <p><b>A Level Maths Tuition at Merit Tutors:</b>Our expert tutors provide focused support to
                                    help students master advanced mathematical concepts, enhance problem-solving abilities,
                                    and build confidence for exam success. Each lesson is tailored to individual needs,
                                    ensuring steady progress and deep understanding.</p>
                                <br>
                                <p><b>A Level English Tuition at Merit Tutors: </b>Our dedicated tutors assist students in
                                    refining their critical reading, essay writing, and analytical skills. We emphasize exam
                                    techniques, textual analysis, and structured argumentation to fully prepare students for
                                    their A Level English exams with confidence.</p>
                                <br>
                                <p><b>A Level Biology Tuition at Merit Tutors:</b>Our experienced tutors provide
                                    comprehensive support in A Level Biology, helping students master complex concepts from
                                    cellular biology to ecology. We focus on developing strong analytical skills, exam
                                    techniques, and practical understanding to ensure students excel in both written exams
                                    and coursework. Lessons are tailored to individual needs to build confidence and achieve
                                    top results.</p>

                                <div class="dtr_img"><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                        alt=""></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our_service">
                        <div class="default_title">
                            {{-- <div class="default_title_left">
                                <h2>Key Features <span>of Our <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>A Level Tuition:</h2>
                            </div> --}}
                            <div class="default_tite_right">

                                <p><b>A Level Chemistry Tuition at Merit Tutors:</b> Our expert tutors offer in-depth
                                    guidance in A Level Chemistry, covering topics from atomic structure to organic
                                    chemistry. We focus on developing problem-solving skills, practical application, and
                                    exam strategies to help students grasp challenging concepts and excel in their
                                    assessments. Lessons are personalised to support each student’s progress and confidence.
                                </p>
                                <p><b>A Level Physics Tuition at Merit Tutors:</b> Our experienced tutors provide thorough
                                    support in A Level Physics, guiding students through topics such as mechanics,
                                    electromagnetism, and quantum physics. We emphasize developing strong analytical and
                                    problem-solving skills, practical understanding, and exam techniques to ensure students
                                    excel in both theory and application. Lessons are tailored to each student’s needs to
                                    build confidence and achieve excellent results.</p>
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
                                    <h4><span>Our A-Level </span> Learning Environment </h4>
                                    <p>At Merit Tutors, we understand the critical role A-Level results play in securing a
                                        place at top universities. Our learning environment is designed to equip students
                                        with the in-depth knowledge and exam skills needed to succeed at this advanced level
                                        and beyond.

                                        We challenge our students to reach their full academic potential while ensuring they
                                        build the confidence to excel in their exams. Recognising the complexity of A-Level
                                        content, our tutors use a range of proven techniques and strategies to help students
                                        grasp difficult concepts and achieve the highest possible grades.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Personalised Resources </b> and Group Learning</h4>
                                    <p>At Merit Tutors, our tailored resources are fully aligned with the national
                                        curriculum, allowing us to directly address each student’s areas for improvement
                                        while ensuring they stay on track academically.</p>

                                    <p>Group Tutoring: Our small group classes, typically consisting of 5–6 students,
                                        provide the perfect balance of peer-to-peer learning and individual attention from
                                        tutors.</p>

                                    <p>Our A-Level students include both AS and A2 learners. AS students benefit from early
                                        exposure to key concepts, gaining a strong foundation and staying ahead in school.
                                        A2 students focus on refining advanced techniques and deepening subject knowledge in
                                        preparation for final exams.</p>

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
                                    <h4><span>Assessment and Progress Tracking</span> </h4>
                                    <p>At Merit Tutors, regular assessments are conducted using past A-Level exam papers.
                                        Students are initially expected to achieve a pass mark of 80%. If not achieved, a
                                        second attempt is offered with a target of 90% to reinforce learning and mastery of
                                        content.

                                    </p>
                                    <p> Past papers are frequently integrated into lessons to familiarise students with
                                        exam-style questions and accepted answer structures, ensuring they are well-prepared
                                        and confident on exam day.

                                    </p>
                                    <p>We maintain detailed online records for each student, tracking their progress and
                                        development of analytical skills.
                                    </p>
                                    <p>Comprehensive paper-based feedback is also provided, enabling students to review
                                        their work at home and continue refining their performance between lessons.</p>
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
                                <h2>A Level <span>Tuition
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Content & Teaching</h2>
                            </div>
                            <div class="default_tite_right">
                                <p>Our expert-led courses provide targeted support in Maths, English, and Science, helping
                                    students master core topics, improve exam technique, and build confidence for A Level
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
                                            aria-controls="pills-home" aria-selected="true">A Level Maths</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">A Level English</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">A Level Biology</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-physics-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-physics" type="button" role="tab"
                                            aria-controls="pills-physics" aria-selected="false">A Level Physics</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-chemistry-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-chemistry" type="button" role="tab"
                                            aria-controls="pills-chemistry" aria-selected="false">A Level
                                            Chemistry</button>
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
                                                        <h3> Maths Course</h3>
                                                        <p>Maths is a demanding and technical subject that requires
                                                            consistent practice and deep understanding. At Merit Tutors, we
                                                            ensure students develop a solid grasp of the full syllabus while
                                                            carefully assessing their strengths and areas for improvement.
                                                        </p>

                                                        <p>Our goal is to equip each student with the skills and confidence
                                                            to approach exam papers effectively, using the correct methods
                                                            and techniques. As with all our subjects, we prioritise
                                                            individual success by maintaining strong communication with
                                                            students to identify their needs and provide targeted support to
                                                            help them achieve top grades.</p>
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
                                                        <h3>Course Content English</h3>

                                                        <p>At Merit Tutors, we foster a highly analytical and critical
                                                            approach to English Language and Literature. Our aim is to
                                                            challenge students to think independently and engage deeply with
                                                            texts, encouraging creative and insightful responses.</p>

                                                        <p>We cover all relevant material in depth to ensure students are
                                                            fully prepared and confident when approaching exam papers.
                                                            Students are taught to develop their own analytical thinking and
                                                            are encouraged to read widely around the subject to strengthen
                                                            their understanding and interpretation.</p>

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
                                                        <h3>A Level Biology Tuition</h3>
                                                        <p>Biology requires a unique approach and specific exam techniques.
                                                            At Merit Tutors, we ensure students understand how to
                                                            effectively tackle the subject by guiding them through the
                                                            correct methods and strategies.</p>

                                                        <p> We hold in-depth discussions and thoroughly cover the syllabus
                                                            to build confidence and clarity across all topics.
                                                            Our small group setting allows for efficient content delivery
                                                            and interactive learning, enabling us to cover a wide range of
                                                            objectives without spending excessive time on any single
                                                            topic—maximising both understanding and productivity.</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- End 3rd Tab -->
                                <!-- Start 4rd Tab -->
                                <div class="tab-pane fade" id="pills-physics" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <section class="features-section">
                                        <div class="features-container">
                                            <div class="feature-column">


                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>A Level Physics Tuition</h3>
                                                        <p>Physics is a subject that combines scientific theory with
                                                            mathematical application, making it both intellectually
                                                            stimulating and academically challenging. Many students,
                                                            including those applying for competitive courses like Medicine,
                                                            take Physics to strengthen their university applications and
                                                            often find it demanding.

                                                            At Merit Tutors, our experienced teachers—many of whom have
                                                            navigated similar academic paths—provide expert guidance to help
                                                            students succeed. We ensure comprehensive coverage of the entire
                                                            syllabus, from Kinematics and Oscillations to Nuclear Physics.

                                                            Our focus is on equipping students with the technical knowledge
                                                            and exam techniques needed to approach the Physics paper with
                                                            confidence, precision, and a clear understanding of how to
                                                            secure top marks.</p>
                                                    </div>
                                                </div>

                                            </div>


                                        </div>
                                    </section>
                                </div>
                                <!-- End 3rd Tab -->
                                <!-- End 3rd Tab -->
                                <!-- Start 4rd Tab -->
                                <div class="tab-pane fade" id="pills-chemistry" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <section class="features-section">
                                        <div class="features-container">
                                            <div class="feature-column">


                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>A Level Chemistry Tuition</h3>
                                                        <p>Chemistry combines both scientific theory and mathematical
                                                            application—two areas students often find challenging. At Merit
                                                            Tutors, we help students build strength and confidence in both
                                                            aspects, enabling them to achieve high levels of attainment.

                                                            We provide thorough coverage of the entire syllabus, ensuring
                                                            there are no gaps in subject knowledge or essential skills. Our
                                                            tutors focus on helping students grasp the technical elements of
                                                            Chemistry with clarity and confidence.

                                                            We foster an open and supportive learning environment where
                                                            students feel comfortable asking questions. If a concept isn't
                                                            understood the first time, we take the time to revisit it until
                                                            the student is fully confident before progressing further.</p>
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
