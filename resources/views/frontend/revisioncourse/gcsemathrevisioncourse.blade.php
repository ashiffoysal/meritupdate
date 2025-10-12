@extends('layouts.frontend')
@section('title', 'GCSE Maths Revision Course – Boost Exam Confidence | Merit Tutors')
@section('meta_description', 'Merit Turors master GCSE Maths with targeted revision strategies. Small group sessions & expert tutors in East London. Book your free assessment today!')
@section('content')

    <style>
        .myTitle{
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
                                <span class="banner_span">GCSE Maths Revision Course</span>
                                <h1 class="myTitle">GCSE Maths Booster  <span> Course </span> <br>– Targeted Revision to Maximise Exam Success</h1>
                                <p>At <b> Merit Tutors </b>, our GCSE Maths Revision Courses are designed to provide learner-centred support tailored to each student’s individual learning style. Our experienced tutors take the time to understand every student’s strengths and areas for development, adapting their teaching methods to maximise progress.

This course offers an effective way for students to prepare for their upcoming GCSE Maths exams. We focus on developing core mathematical skills, deepening subject knowledge, and building exam confidence to help each student reach their full potential.</p>
                                <p>Our sessions are conducted in small groups of 4–6 students from the same year group. This intimate setting encourages collaborative learning, open discussions, and ample opportunities for students to ask questions and clarify their understanding.

All revision courses are structured around the needs of the learner while ensuring comprehensive coverage of the required curriculum. We teach content relevant to all major exam boards, including Edexcel, AQA, and OCR, to ensure students are fully prepared for the specific exam they will sit.</p>
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
                                <h2>GCSE <span>Maths Topics <img
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
                                <p><b>Number:</b>Multiples, Factors, Prime numbers, Fractions, Decimals, Percentages, Rounding numbers, Estimating, Surds.</p>
                                <br>
                                <p><b>Algebra:</b> Algebra basics, Powers and Roots, Multiplying out brackets, Factorising, Solving equations, Rearranging formulas, Factorising quadratics, Completing the square, Algebraic fractions, Sequences, Inequalities, Graphic inequalities, Iterative methods, Simultaneous equations, Proof, Functions.</p>
                                <br>
                                <p><b>Graphs: </b>Straight lines, Gradients, Intercepts, Coordinates and ratio, Parallel and perpendicular lines, Quadratic graphs, Solving equations using graphs, Graph transformations, Real-life graphs.
 </p>

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

                                <p><b>Ratio proportion & rates of change:</b> Ratios, Direct and inverse proportion, Percentages, Compound growth and decay, Unit conversions, Speed, Density, Pressure.
                                </p>
                                <p><b>Geometry & measures: </b> Angles, Parallel lines, Polygons, Triangles and quadrilaterals, Circle geometry, Congruent shapes, The four transformations, Area and perimeter, 3D shapes, Enlargements and projections, Loci and construction, Bearings, Measures, Pythagoras’ theorem, Trigonometry, The Sine and Cosine rules, Vectors.</p>
                                <p><b>Statistics & probability: </b>  Probability basics, Counting outcomes, Probability experiments, The AND/OR rules, Tree diagrams, Conditional probability, Sets and Venn diagrams, Sampling and bias, Mean, Median, Mode, Range, Frequency tables, Box plots, Histograms, Time series, Scatter graphs, Comparing data sets.</p>
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
                                    <h4><span>Our Course  </span> Approach </h4>
                                    <p>At Merit Tutors, our courses are designed to build on each learner’s existing knowledge while developing critical thinking and identifying gaps in understanding. Our aim is to strengthen applied learning through targeted strategies that ensure every student progresses with confidence.

                                            Led by qualified and experienced teachers, we specialise in preparing children of all abilities for their exams. With a deep understanding of what Maths examiners look for, we focus on:</p>
                                            <ul>
                                                <li>Developing strong exam techniques.</li>
                                                <li>Teaching students how to analyse questions effectively.</li>
                                                <li>Providing strategies to approach challenging problems.</li>
                                            </ul>                                    
                            <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Revision Methods</b></h4>
                                    <p>We use a range of proven revision methods to help students get the most out of each course. Our teaching blends tutor-led instruction with pupil-led activities, ensuring that all learning styles are catered for. Our methods include:</p>

                                    <p><b>Past Papers:</b> Regular practice with real past paper questions helps students apply their knowledge in a relevant context, understand exam expectations, and refine their answers for maximum marks.</p>

                                    <p><b>Mock Tests:</b>  Tutors conduct mock exams under exam conditions to simulate the real experience. This helps identify progress and pinpoint areas that need further improvement.</p>

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
                                    <p><b> Teacher Notes:</b> Parents and carers have access to online records to track their child’s progress and engagement with the course.</p>
                                    <p><b> Paper Feedback: </b> Learners receive clear, written feedback to help consolidate learning at home and improve exam responses.</p>
                                    <p> <b>Homework:</b> Regular homework assignments help students reinforce their understanding and apply concepts independently outside of class.</p>
                                    <p>Our goal is to provide a supportive and effective learning environment that maximises each student’s potential.</p>
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
