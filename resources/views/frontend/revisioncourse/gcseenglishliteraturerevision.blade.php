@extends('layouts.frontend')
@section('title', 'GCSE English Literature Revision Course – Boost Exam Confidence  | Merit Tutors')
@section('meta_description', 'Prepare for GCSE English Literature exams with targeted revision from Merit Tutors. Expert guidance, engaging resources, and proven strategies to succeed.')
@section('content')
    <style>
        .myTitle {
            font-size: 40px !important;
            line-height: 51px !important;
        }

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
                                <span class="banner_span">GCSE English Literature Revision Course</span>
                                <h1 class="myTitle">GCSE English Literature Booster <span> Course </span>– Targeted
                                    Revision to Maximise Exam Success</h1>
                                <p>Revision courses with Merit Tutors offer learner-centered learning based on your child’s
                                    personal learning style. Our tutors take the time to understand each child’s needs,
                                    adapting their teaching styles and strategies to ensure our students get the most out of
                                    their lessons.
                                </p>
                                <p>Our English Literature revision course is an excellent way for your child to prepare for
                                    upcoming
                                    GCSE English Literature combined or GCSE English Literature triple exams.
                                    Our revision courses are made up of an intimate study group, normally with 4-6 students
                                    from the same year group. We choose small groups because it allows for ideas to flow
                                    between the group, our learners can raise questions when they wish and topics can be
                                    debated in great detail with the opportunity for everyone to contribute. Courses at
                                    Merit Tutors are designed to fit the needs of the learner while still following a class
                                    structure in order to cover the required curriculum.
                                    We cover the all the relevant course content included in Edexcel, AQA & OCR exam boards
                                    to suit the exam content your child needs.</p>
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
                                <h2>GCSE <span>English Literature Topics <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""></h2>
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
                                <p><b>Reading and Comprehension</b></p>
                                <p>Exploring details of plot, characterisation, events and settings</p>
                                <br>
                                <p>Identifying what is stated explicitly and what is implied</p>
                                <br>
                                <p>Analysing motivation, sequence of events and the relationship between actions or events
                                </p>
                                <br>
                                <p>Identifying theme and distinguishing between themes</p>
                                <br>
                                <p>Using the text as evidence to support a point of view</p>
                                <br>
                                <p>Identifying different responses to a given text (deeper thinking)</p>
                                <br>
                                <p>Considering the writers’ social, historical and cultural context and using this to inform
                                    evaluation</p>
                                <br>
                                <p>Creating a personal response that is derived from analysing and evaluating the text</p>
                                <br>
                                <p>Analysing and evaluating how language, structure, form and presentation contribute to
                                    quality & impact</p>
                                <br>
                                <p>Using high-quality literary terminology to create argument</p>
                                <br>
                                <p>Comparing and contrasting texts studied referring where relevant to theme,
                                    characterisation, context, style and literary quality</p>

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
                                <p><b>Writing</b></p>
                                <p>Producing clear and coherent text</p>
                                <br>
                                <p>Writing effectively about literature for a range of purposes (such as; describe, explain,
                                    summarise, argue, analyse and evaluate)</p>
                                <br>
                                <p>Discussing and maintaining a point of view, keeping a coherent argument</p>
                                <br>
                                <p>Selecting and emphasising the correct key points</p>
                                <br>
                                <p>Using relevant quotations from the text and expanding on their use</p>
                                <br>
                                <p>Accurate spelling, punctuation and grammar</p>

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
                                    <h4><span>The aim of </span> our courses </h4>
                                    <p>AThe aim of our courses is to build on the learners existing knowledge and develop
                                        greater thinking in these areas, while simultaneously identifying gaps in knowledge
                                        and filling them.
                                        At Merit Tutors, our tutors have extensive experience preparing children of all
                                        abilities for their exams. Run by qualified teachers, we have an excellent
                                        understanding of what English Literature examiners are looking for in papers. Your
                                        child will
                                        cover good exam technique, analysing the question to ensure understanding of what
                                        the question is really asking, and providing strategies to help your child cope with
                                        difficult questions.</p>

                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Revision Techniques</b></h4>
                                    <p>We use a range of proven revision methods to help students get the most out of each
                                        course. Our teaching blends tutor-led instruction with pupil-led activities,
                                        ensuring that all learning styles are catered for. Our methods include:</p>

                                    <p><b>Past Papers:</b> Regular practice with real past paper questions helps students
                                        apply their knowledge in a relevant context, understand exam expectations, and
                                        refine their answers for maximum marks.</p>

                                    <p><b>Mock Tests:</b> Tutors conduct mock exams under exam conditions to simulate the
                                        real experience. This helps identify progress and pinpoint areas that need further
                                        improvement.</p>

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
                                    <h4><span>Revision Methods Assessment and Progress Tracking</span> </h4>
                                    <p><b> Teacher Notes:</b> Parents and carers have access to online records to track
                                        their child’s progress and engagement with the course.</p>
                                    <p><b> Paper Feedback: </b> Learners receive clear, written feedback to help consolidate
                                        learning at home and improve exam responses.</p>
                                    <p> <b>Homework:</b> Regular homework assignments help students reinforce their
                                        understanding and apply concepts independently outside of class.</p>
                                    <p>Our goal is to provide a supportive and effective learning environment that maximises
                                        each student’s potential.</p>
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
