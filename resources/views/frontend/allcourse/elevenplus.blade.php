@extends('layouts.frontend')
@section('title', '11 Plus Tutors East London, Forest Gate, Ilford')
@section('meta_description', 'Merit Tutors are a leading provider of 11 Plus tuition in east London (Forest Gate and
    Ilford). Click here to learn more about what we offer.')
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
                                <span class="banner_span">11 Plus Courses</span>
                                <h2>Focused Preparation <span> for <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt=""></span> <br>the 11+ Exams</h2>
                                <p>At <b> Merit Tutors </b>, we understand that every child learns differently. Our
                                    experienced tutors are skilled in using a wide range of teaching techniques and
                                    strategies tailored to suit individual learning styles. Classwork and homework are
                                    carefully differentiated to ensure they are at the appropriate level for each child. By
                                    actively listening to students’ needs and concerns, we adapt our teaching methods to
                                    best support their academic growth.</p>
                                <p>We are committed to identifying and addressing any areas of weakness early through
                                    regular assessments, feedback, and communication with both students and parents. Our
                                    goal is to foster a positive and supportive learning environment where students feel
                                    motivated, confident, and happy.

                                    Preparing for the 11+ exams requires strategic planning and focused learning. Our course
                                    structure is designed to offer a comprehensive and engaging experience, ensuring
                                    students are well-equipped for success. We provide a wide range of high-quality
                                    resources that cover all relevant areas of the 11+ syllabus.</p>
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
                                        alt=""><br>11+ Programme:</h2>
                            </div>
                            <div class="default_tite_right">
                                <p><b>Age Group:</b> Our 11+ programme is designed for students aged 8 to 11. While the
                                    start time is ultimately a parental decision, we recommend early enrolment to allow
                                    students to gradually adapt to our learning structure and expectations.</p>
                                <br>
                                <p><b>Small Group Tutoring: </b> We maintain small group sizes of around 5–6 students,
                                    allowing for personalized attention from tutors while encouraging collaborative,
                                    peer-supported learning.</p>
                                <br>
                                <p> <b>Tailored Resources:</b> All learning materials are developed in line with the
                                    national curriculum and customized to meet each student’s unique needs and abilities,
                                    while staying aligned with the 11+ exam framework.</p>
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
                                    <h4><span>Progress </span> Monitoring</h4>
                                    <p>In order to keep track of your child’s progress, we regularly provide class
                                        assessments so that we can identify areas in which they may need to improve. At
                                        Merit Tutors, we also believe that it is important to communicate with students
                                        effectively; therefore, we ensure that students are asked about areas they find
                                        difficult so that our tutors can assist them. Both of the above assessment methods
                                        are used as what we term, formative assessment, so that the information we collect
                                        is then fed back into tailoring our teaching focus and the students’ learning
                                        experience. We will also provide homework assignments related to the 11+ so that
                                        your child is spending the necessary amount of time on preparation at home.
                                        Importantly, we believe it is vital to communicate with the parents so that they are
                                        fully aware and updated regarding how their child is doing in class and with their
                                        homework assignments.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Supportive & Motivating </b> Environment</h4>
                                    <p>A positive, small-group setting that motivates students to grow, ask questions, and
                                        feel proud of their progress.</p>
                                    <ul>
                                        <li>Small group sizes of 4-6 students per class.</li>
                                        <li>Tutors listen closely & adapt each student’s learning style.</li>
                                        <li>High expectations to challenge and inspire confidence.</li>
                                        <li>A learning space where students enjoy the journey.</li>
                                    </ul>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png"
                                            alt=""></div>
                                </div>
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent4.png"
                                        alt="">
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
                                <h2>11 +  <span>Course
                                <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Content & Teaching</h2>
                            </div>
                            <div class="default_tite_right">
                                <p>Our expert-led courses provide targeted support in Maths, English, and Science, helping students master core topics, improve exam technique, and build confidence for 11+ success.</p>
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
                                            aria-controls="pills-home" aria-selected="true">YEAR-3, 11+</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">YEAR-4, 11+</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false">YEAR-5, 11+</button>
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
                                                        <h3>Our Approach</h3>
                                                        <p>For Year Three students preparing for the 11+ exams, our tutors build a strong foundation, gradually introducing the syllabus while encouraging independent thinking. Early preparation boosts long-term understanding and confidence, ensuring your child is well-prepared ahead of time.</p>    
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Course Structure</h3>
                                                        <p>We offer a structured, tailored course to meet each student’s needs. For Year Three students, our tutors focus on building a strong foundation, easing them into the 11+ syllabus while promoting independent learning. Our extensive resources and carefully designed programme ensure effective preparation for both the 11+ exams and the Year 4 curriculum.</p>
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Maths</h3>
                                                        <ul>
                                                            <li>Numbers.</li>
                                                            <li>Shapes and Space.</li>
                                                            <li>Measurements and Units.</li>
                                                            <li>Problems.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>English</h3>

                                                        <ul>
                                                            <li>Comprehension.</li>
                                                            <li>Spelling and Punctuation.</li>
                                                            <li>Grammar</li>
                                                            <li>Writing.</li>
                                                            <li>Language skills.</li>
                                                        </ul>
                                                      
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Verbal Reasoning</h3>
                                                        <ul>
                                                            <li>Analysis.</li>
                                                            <li>Coding and Deciphering Words.</li>
                                                            <li>Verbal Math’s Problems and Functions</li>
                                                            <li>Word Associations.</li>
                                                            <li>Incomplete Words.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                   <div class="icon">📝</div>
                                                    <div>
                                                        <h3> Non Verbal Reasoning</h3>
                                                          <ul>
                                                            <li>Identifying Patterns.</li>
                                                            <li>Sequences.</li>
                                                            <li>Codes and Logic.</li>
                                                            
                                                        </ul>
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
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Our Approach</h3>
                                                        <p>We readily prepare your child to enhance their ability to tackle more challenging 11+ content. We ensure our students are taught the relevant skills and have a strong understanding of the material, so that they are able to move into the Year 5 learning materials without any difficulties.</p>    
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Course Structure</h3>
                                                        <p>Our Year Four course provides a structured and supportive foundation for 11+ preparation. We tailor our teaching to meet each child’s needs, focusing on core skills in English, Maths, Verbal and Non-Verbal Reasoning. Students are gradually introduced to more challenging 11+ content, ensuring they build confidence and understanding. With access to a wide range of age-appropriate resources, we prepare them to transition smoothly into the Year Five curriculum and beyond.</p>
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Maths</h3>
                                                        <ul>
                                                            <li>Numbers.</li>
                                                            <li>Shapes and Space.</li>
                                                            <li>Measurements and Units.</li>
                                                            <li>Problems.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>English</h3>

                                                        <ul>
                                                            <li>Comprehension.</li>
                                                            <li>Spelling and Punctuation.</li>
                                                            <li>Grammar</li>
                                                            <li>Writing.</li>
                                                            <li>Language skills.</li>
                                                        </ul>
                                                      
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Verbal Reasoning</h3>
                                                        <ul>
                                                            <li>Analysis.</li>
                                                            <li>Coding and Deciphering Words.</li>
                                                            <li>Verbal Math’s Problems and Functions</li>
                                                            <li>Word Associations.</li>
                                                            <li>Incomplete Words.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                   <div class="icon">📝</div>
                                                    <div>
                                                        <h3> Non Verbal Reasoning</h3>
                                                          <ul>
                                                            <li>Identifying Patterns.</li>
                                                            <li>Sequences.</li>
                                                            <li>Codes and Logic.</li>
                                                            
                                                        </ul>
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
                                                        <h3>Our Approach</h3>
                                                        <p>At Merit Tutors we appreciate that Year 5 is a challenging time for students preparing for 11+ exams. We ensure all our students are equipped with a robust understanding of all the material. Our aim is to teach and train our students in a manner in which they can approach the final exams without making errors. Our structure enables students to have both the confidence and ability to attain the highest results.</p>    
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Course Structure</h3>
                                                        <p>At Merit Tutors, our Year 5 course is designed to meet each student’s needs while preparing them thoroughly for the 11+ exams. We focus on building a strong understanding, minimizing errors, and boosting confidence. With structured lessons and a wide range of relevant resources, we equip students to achieve their best.</p>
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📄</div>
                                                    <div>
                                                        <h3>Maths</h3>
                                                        <ul>
                                                            <li>Numbers.</li>
                                                            <li>Shapes and Space.</li>
                                                            <li>Measurements and Units.</li>
                                                            <li>Problems.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="feature-column">
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>English</h3>

                                                        <ul>
                                                            <li>Comprehension.</li>
                                                            <li>Spelling and Punctuation.</li>
                                                            <li>Grammar</li>
                                                            <li>Writing.</li>
                                                            <li>Language skills.</li>
                                                        </ul>
                                                      
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                    <div class="icon">📝</div>
                                                    <div>
                                                        <h3>Verbal Reasoning</h3>
                                                        <ul>
                                                            <li>Analysis.</li>
                                                            <li>Coding and Deciphering Words.</li>
                                                            <li>Verbal Math’s Problems and Functions</li>
                                                            <li>Word Associations.</li>
                                                            <li>Incomplete Words.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="feature-item">
                                                   <div class="icon">📝</div>
                                                    <div>
                                                        <h3> Non Verbal Reasoning</h3>
                                                          <ul>
                                                            <li>Identifying Patterns.</li>
                                                            <li>Sequences.</li>
                                                            <li>Codes and Logic.</li>
                                                            
                                                        </ul>
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
