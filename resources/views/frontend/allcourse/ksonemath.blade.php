@extends('layouts.frontend')
@section('title', 'KS1 Maths Tuition in East London | Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description', 'Help your child build strong Maths foundations with KS1 tuition at Merit Tutors. Fun, engaging lessons in Forest Gate, Ilford & Plaistow. Book a free assessment!')
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
                                <span class="banner_span">Ks1 Maths Tuition</span>
                                <h1>Building Strong <span> Foundations in <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt=""></span> <br>KS1 Maths with Merit
                                    Tutors</h1>
                                <p>At Merit Tutors, our KS1 Maths Tuition builds
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
                            <img src="{{ asset('frontend/update-design') }}/assets/images/ksone/5.webp" alt="">
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
                                <h2>KS1 Maths <span>Curriculum <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Overview:</h2>
                            </div>
                            <div class="default_tite_right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b>Addition</b></p>
                                        <p><b>Subtraction</b></p>
                                        <p><b>Multiplication</b></p>
                                        <p><b>Division</b></p>
                                        <p><b>Number ordering</b></p>
                                        <p><b>Number sequences</b></p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><b>Place value</b></p>
                                        <p><b>Measurement</b></p>
                                        <p><b>Shape, Space</b></p>
                                        <p><b>Telling the time</b></p>
                                        <p><b>Organising data</b></p>
                                        <p><b>Measurement</b></p>
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
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/ksone/1.webp"
                                        alt="">
                                </div>
                                <div class="what_make_us_single_text">
                                    <h4><span>Our Teachers </span> and Students</h4>
                                    <p>At Merit Tutors, we take pride in our
                                        dedicated team of qualified schoolteachers
                                        and experienced examiners. Our staff have
                                        extensive teaching experience, particularly
                                        with pupils from the East London area.
                                        This strong educational background allows us
                                        to provide high-quality, tailored support to
                                        every student. Our teachers are committed to
                                        fostering academic growth and ensuring that
                                        each learner makes measurable progress. With
                                        a deep understanding of curriculum standards
                                        and exam requirements, we help our students
                                        build confidence, achieve success, and
                                        unlock their full potential.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Our Teaching Approach </b> for KS1
                                        Students</h4>
                                    <p>At Merit Tutors, we specialise in teaching
                                        young learners aged 4–7 through positive
                                        reinforcement and individual attention. Our
                                        small group classes (5–6 students) create a
                                        calm, focused environment where every child
                                        can thrive.
                                        We provide personalised resources aligned
                                        with the National Curriculum, ensuring
                                        targeted support while meeting school
                                        standards. For numeracy, we use visual
                                        methods like grids to help students grasp
                                        addition, subtraction, and multiplication
                                        with ease.
                                        Our approach builds confidence, strengthens
                                        foundational skills, and helps students
                                        excel both inside and outside the classroom.
                                    </p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png"
                                            alt=""></div>
                                </div>
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/ksone/2.webp"
                                        alt="">
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/ksone/3.webp"
                                        alt="">
                                </div>
                                <div class="what_make_us_single_text">
                                    <h4><span>Our KS1 </span> Maths Environment</h4>
                                    <p>A high-quality mathematics education in KS1
                                        provides a foundation for understanding the
                                        world, where the ability to reason
                                        mathematically allows one to communicate
                                        daily in real life situations such as using
                                        pocket money and shops. Merit teachers equip
                                        young children to become fluent in the
                                        basics of mathematics so that they can
                                        quickly solve real life numerical problems.
                                    </p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text" style="max-width: 100% !important">
                                    <h4><b>How Can You </b> See the Results?</h4>
                                    <p>Each KS1 numeracy teacher conducts regular,
                                        short tests on the topics they have been
                                        working with in each unit with the students.
                                        This enables the teachers, the parents and
                                        the students themselves to obtain a sense of
                                        the progress that is being made and the
                                        areas that need to be worked on further.
                                        Every week, homework is given to the
                                        students from the booklet provided by the
                                        centre and each student is expected to
                                        complete the work before their next session.
                                        We keep online records of each student and
                                        make sure that we know exactly what topics
                                        they are excelling and struggling in, and
                                        where they need help and advancement. Paper
                                        feedback is also provided to students which
                                        they use at home to further practice and
                                        improve what they have learnt in our
                                        lessons. What the Students Think… “I really
                                        enjoy numeracy and at Merit Tutors, they
                                        make us do higher level stuff if we are
                                        already getting good marks, which is fun!”
                                        Our students are encouraged not to work at
                                        only one level for all - if a student is
                                        doing really well for their age in numeracy,
                                        then they are provided with advanced
                                        learning materials so that they develop
                                        their skills even further rather than
                                        allowingthem to plateau. We cater for all
                                        abilities, including students who are gifted
                                        and talented in a particular area.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_img">
                                    <img src="{{ asset('frontend/update-design') }}/assets/images/ksone/4.webp"
                                        alt="">
                                </div>
                                <div class="what_make_us_single_text">
                                    <h4><span>What the </span>Students Think</h4>
                                    <p>Our KS1 students quickly understand that they are being prepared for the challenges of Year 7, where subjects become more advanced. However, our goal goes beyond academic readiness—we also equip students with essential skills such as using a thesaurus and dictionary, understanding sentence structure, planning their writing, and drafting short pieces of work with confidence.</p>
                                    <p>“We learnt how to make a good plan for a story today, and my teacher said my draft will be really good if I follow my plan well.”</p>
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
