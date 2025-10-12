@extends('layouts.frontend')
@section('title', 'KS1 English Tuition in East London | Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description', 'Boost your child’s reading, writing & phonics skills with expert KS1 English tuition at Merit Tutors. Friendly, structured lessons in East London. Free assessment!')
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
                                <span class="banner_span">Ks1 English Tuition</span>
                                <h1>Building Strong <span> Foundations in <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png"
                                            alt=""></span> <br>KS1 English with Merit Tutors</h1>
                                <p>At Merit Tutors, our KS1 English Tuition builds strong foundations in reading, writing,
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
                                <h2>KS1 English <span>Curriculum <img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png"
                                            alt=""></span><img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png"
                                        alt=""><br>Overview:</h2>
                            </div>
                            <div class="default_tite_right">
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><b>Alphabetical order</b></p>
                                        <p><b>Reading</b></p>
                                        <p><b>Capital letters</b></p>
                                        <p><b>Conjunctions Poetry</b></p>
                                        <p><b>Pronouns</b></p>
                                        <p><b>Punctuation</b></p>
                                        <p><b>Speaking & Listening</b></p>

                                    </div>
                                    <div class="col-md-6">
                                        <p><b>Sentences</b></p>
                                        <p><b>Spelling</b></p>
                                        <p><b>Synonyms</b></p>
                                        <p><b>Writing</b></p>
                                        <p><b>Phonics</b></p>
                                        <p><b>Grammar + Punctuation</b></p>

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
                                    <p>At Merit Tutors, our team consists of qualified school teachers and experienced examiners who have a strong background in teaching students from the East London area. This wealth of experience enables us to ensure excellent progress and academic success for every student at our tuition centre.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>
                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text">
                                    <h4><b>Our KS1 
 </b> English Environment</h4>
                                    <p>At Merit Tutors, we help KS1 students build strong foundations in English before they move on to more advanced learning. Our focus is on developing fluency in speaking, reading, and writing—both independently and aloud. Concepts like suffixes, conjunctions, and commonly confused homophones are made simple and easy to understand.

In East London, where many students are bilingual, we ensure that each child confidently differentiates between their home language and English, enabling them to use English accurately and effectively.</p>
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
                                    <h4><span>How Can You  </span> See the Results?</h4>
                                    <p>At Merit Tutors, each KS1 English teacher conducts regular short tests based on the topics covered in each unit. This helps teachers, parents, and students clearly identify progress and areas that need further improvement.

Tests are aligned with personalised booklets. Students are expected to achieve a minimum of 80% on their first attempt. If a re-sit is required, the target score increases by 10% to encourage growth.

Weekly homework is assigned from the provided booklet and must be completed before the next session. Teachers review the homework in class and assess students on the material completed at home.

We maintain detailed online records for every student, tracking their strengths and areas needing support. In addition, students receive paper-based feedback to help them revise and reinforce learning at home.</p>
                                    <div class="wmust_img"><img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png"
                                            alt=""></div>
                                </div>
                            </div>

                            <div class="what_make_us_single">
                                <div class="what_make_us_single_text" style="max-width: 100% !important">
                                    <h4><b>So how do </b>  we teach?</h4>
                                    <p>At Merit Tutors, our KS1 English programme supports students from Year 3 to Year 6. We divide our focus between Lower KS1 (Years 3–4) and Upper KS1 (Years 5–6) to ensure appropriate academic progression and preparation for future challenges.</p>

<p><b> Lower KS1 (Years 3–4):</b>
At this stage, students are expected to have foundational reading and writing skills. For those who need extra support, our experienced tutors are here to fill any gaps. Pupils explore a range of fiction and non-fiction texts and are encouraged to write creatively. Grammar, spelling, handwriting, and overall language fluency are closely monitored and developed.</p>

<p><b>Upper KS1 (Years 5–6):</b>
These students begin preparing for entrance exams and the academic rigour of secondary school. We help them engage with a variety of genres and develop the ability to distinguish between explanation, argument, and persuasive texts. The aim is to build strong comprehension, analytical, and writing skills to support high academic achievement.</p>

<p><b>Small Group Learning:</b>
Each class consists of approximately 5–6 students, allowing for personalised attention in a calm and focused environment. Our tutors use tailored resources aligned with the national curriculum to address individual learning needs effectively.</p>

<p><b>Support for Bilingual Students:</b>
In East London, many students grow up bilingual. We understand the challenges this presents and provide specific support to help them master English—ensuring fluency in speaking, reading, and writing with confidence.</p>

<p><b>Our Commitment:</b>
KS1 is a crucial stage to build strong English foundations. At Merit Tutors, we are committed to ensuring each student develops grammatical awareness, vocabulary, reading fluency, and written expression—so they are fully prepared for the transition to secondary school.</p>
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
                                    <p>“I really enjoy numeracy and at Merit Tutors, they make us do higher level stuff if
                                        we are already getting good marks, which is fun!”

                                        Our students are encouraged not to work at only one level for all - if a student is
                                        doing really well for their age in numeracy, then they are provided with advanced
                                        learning materials so that they develop their skills even further rather than
                                        allowingthem to plateau. We cater for all abilities, including students who are
                                        gifted and talented in a particular area.</p>
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
