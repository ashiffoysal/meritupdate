@extends('layouts.frontend')
@section('title', 'KS2 English Tuition in East London | Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description',
    'Improve your child’s grammar, comprehension & writing with KS2 English tuition at Merit Tutors. Expert support in Forest Gate, Ilford & Plaistow. Book today!')
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
                                <span class="banner_span">KS2 English Tuition</span>
                                <h1>Building Strong <span> Foundations in <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt=""></span> <br>KS2 English with Merit Tutors</h1>
                                <p>At Merit Tutors, our KS2 English Tuition builds strong foundations in reading, writing,
                                    and phonics. Our tailored sessions help young learners develop a love for English and
                                    grow in confidence from an early age.</p>
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
                                <h2>KS2 English <span>Curriculum <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Overview:</h2>
                            </div>
                            <div class="default_tite_right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b>Writing</b></p>
                                        <p><b>Reading</b></p>
                                        <p><b>Spelling</b></p>
                                        <p><b>Handwriting</b></p>


                                    </div>
                                    <div class="col-md-6">
                                        <p><b>Grammar + Punctuation</b></p>
                                        <p><b>Peaking & Listening</b></p>
                                        <p><b>Creative Writing</b></p>


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
                                    <p>At Merit Tutors, our team consists of qualified school teachers and experienced
                                        examiners who have a strong background in teaching students from the East London
                                        area. This wealth of experience enables us to ensure excellent progress and academic
                                        success for every student at our tuition centre.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Our KS2
                                        </b> English Environment</h4>
                                    <p>Our KS2 students quickly recognize that their preparation is geared towards Year 7,
                                        where each subject becomes more challenging. However, this is not the sole focus; we
                                        also ensure students gain confidence in using tools such as a thesaurus and
                                        dictionary, understanding sentence structure, planning their writing, and drafting
                                        short pieces of work.

                                    </p>
                                    <p>As one student shared, “We learnt how to make a good plan for a story today, and my
                                        teacher said my draft will be really good if I follow my plan well.”

                                    </p>
                                    <p>East London is a diverse community where many students are bilingual and may
                                        sometimes find it difficult to distinguish between their mother tongue and English.
                                        At Merit Tutors, we are committed to helping every student achieve a strong and
                                        confident command of the English language.</p>
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
                                    <h4><span>How Can You </span> See the Results?</h4>
                                    <p>Each KS2 English teacher regularly administers brief assessments on the topics
                                        covered within each unit. These tests provide valuable insights to teachers,
                                        parents, and students regarding individual progress and highlight areas requiring
                                        further attention.</p>
                                    <p>Assessments follow the structure outlined in each student’s personalised booklet.
                                        Students are expected to achieve a minimum score of 80% on their first attempt. In
                                        the event of a re-sit, the target score increases by 10% above the previous
                                        benchmark.</p>
                                    <p>Weekly homework is assigned from the centre’s provided booklet and must be completed
                                        prior to the next session. Teachers review and assess homework during lessons,
                                        incorporating testing on the material covered at home.</p>
                                    <p>We maintain comprehensive online records for every student, enabling us to monitor
                                        strengths, identify challenges, and tailor support to promote ongoing development.

                                        Additionally, students receive detailed written feedback on their work, which they
                                        can use at home to reinforce learning and improve performance.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>

                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text" style="max-width: 100% !important">
                                    <h4><b>So how do </b> we teach?</h4>
                                    <p>KS2 students range from Year 3 to Year 6. Lower KS2 pupils build upon the foundations established in KS1, while upper KS2 pupils are prepared for upcoming assessments and the increased academic demands of secondary school.</p>

                                    <p><b> Group Tutoring:</b>
                                       Our classes consist of approximately 5 to 6 students to maintain a focused, distraction-free, and supportive learning environment.At Merit Tutors, we develop personalised resources tailored to address each student’s specific learning needs, while ensuring full alignment with the national curriculum.</p>

                                    <p><b>Lower KS2:</b>
                                        By this stage, students are expected to read and write competently. However, any student facing challenges in these areas receives targeted support to ensure they keep pace. Pupils are encouraged to engage with both fiction and non-fiction texts, develop creative writing skills, and improve grammar, spelling, and handwriting through regular monitoring and intervention.</p>

                                    <p><b>Upper KS2: </b>
                                        Students in Years 5 and 6 are typically preparing for entrance to high-achieving secondary schools. At Merit Tutors, we help them reach these goals by exposing them to a broad range of text genres and teaching them to distinguish between explanation, argument, persuasive writing, and more.

</p>
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
                                    <p>Our KS2 students immediately understand that they are being prepared for Year 7 where each subject they learn becomes much more difficult.However, this is not the only objective; they also are confident when they leave that they can use a thesaurus, use a dictionary, understand the concepts of sentence structure, plan writing and draft small pieces of work. “We learnt how to make a good plan for a story today and my teacher said that my draft will be really good if I follow my plan well.”</p>
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
