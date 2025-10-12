@extends('layouts.frontend')
@section('title', 'A-Level Physics Revision Courses in East London | Expert Tutors – Merit Tutors')
@section('meta_description', 'Struggling with A-Level Physics? Get ahead with expert-led revision courses at Merit Tutors in East London. Boost grades, improve confidence, and prepare smarter. Book a free assessment today.')
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
                                <span class="banner_span">A Level Physics Revision Course</span>
                                <h1 class="myTitle">A Level Physics Booster <span> Course </span> <br>– Targeted
                                    Revision to Maximise Exam Success</h1>
                                <p>At Merit Tutors, we understand the importance A Level exam results play when it comes to
                                    university applications. We aim to challenge our pupils to ensure they are confident and
                                    prepared to achieve their potential in their exams. A Level content can be difficult to
                                    understand, therefore our tutors take the time to understand each child’s needs,
                                    adapting their teaching styles and strategies to ensure our students get the most out of
                                    their lessons.
                                </p>
                                <p>Our A Level Physics revision course is designed for Year 12 and Year 13 pupils
                                    preparing
                                    for A Level Physics exam.
                                    Our revision courses are made up of an intimate study group, normally with 4-6 students
                                    from the same year group. Our A Level groups consist of AS and A2 learners, allowing the
                                    AS students to learn advanced techniques early and be ahead of their peers, while
                                    simultaneously allowing our A2 pupils to significantly improve their knowledge and
                                    technique for their exams.</p>
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
                                <h2>A Level <span>Physics Topics <img
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
                                <p><b>Year 1 A Level Course Topics (also suitable for AS students)</b></p>
                                <br>
                                <p>Measurements</p><br>

                                <p>Nuclear and particle physics (inc. photoelectric effect, quarks)</p>
                                <br>
                                <p>Waves (inc. refraction, diffraction, interference)</p>
                                <br>
                                <p>Forces and motion (inc. energy, momentum, Young’s modulus)</p>
                                <br>
                                <p>Electricity (inc. resistivity, circuits, electromotive force)</p>
                                
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
                                <p><b>Year 2 A Level Course Topics (also covers the Year 1 A Level topics above)</b></p>
                                <p>Further mechanics (inc. periodic motion, forced vibrations, resonance)</p>
                                <br>
                                <p>Thermal physics (inc. thermal energy transfer, molecular kinetic energy model)</p>
                                <br>
                                <p>Fields (inc. gravitational fields, electric fields, magnetic fields)</p>
                                <br>
                                <p>Nuclear physics (inc. radioactivity, nuclear instability, induced fission)</p>
                                <br>
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
                                    <p>The aim of our courses is to build on the learners existing knowledge and develop
                                        greater thinking in these areas, while simultaneously identifying gaps in knowledge
                                        and filling them.
                                        At Merit Tutors, our tutors have extensive experience preparing children of all
                                        abilities for their exams. Run by qualified teachers, we have an excellent
                                        understanding of what Physics examiners are looking for in papers. Your
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
