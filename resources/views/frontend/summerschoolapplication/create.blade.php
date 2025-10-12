@extends('layouts.frontend')
@section('title', 'Apply for Summer School in East London – Secure Your Spot | Merit Tutors')
@section('meta_description','Complete your Summer School application at Merit Tutors today! Limited spots available for KS1–A-Level students. Fun, structured learning this summer in East London.')
@section('content')
    <!--================  Start Assessment-Banner Section  ================-->
    <section class="assessment_banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="assessment_banner">
                        <div class="default_title_2nd">
                            <h2>Enroll in Our Summer Sch<span>ool with <img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png"
                                        alt=""></span>Merit Tutors</h2>
                            <p>Complete the Form Below to Get Started!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================  End Assessment-Banner Section  ================-->

    <!--================  Start Information Section  ================-->
    <section class="information_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="information">
                        <form action="{{ url('/summer-school-application') }}" method="post">
                            @csrf
                            {{-- branch --}}
                            <div class="information_single">
                                <div class="information_single_title">
                                    <h4>Branch Details</h4>
                                </div>
                                <div class="information_single_contents">
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no12">Branch <span>*</span></label>
                                            <div class="iis_select">
                                                <select id="no12" name="branch">
                                                    {{-- <option>Forest Gate Branch, 54 Upton Lane London </option> --}}
                                                    @foreach ($allBranch as $branch)
                                                        <option value="{{ $branch->id }}">{{ $branch->name }} BRANCH,
                                                            {{ $branch->address }}</option>
                                                    @endforeach
                                                </select>
                                                <i class="fa-solid fa-sort-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="information_single">
                                <div class="information_single_title">
                                    <h4>Parent Details</h4>
                                </div>
                                <div class="information_single_contents">
                                    <div class="information_single_contents_left">
                                        <div class="information_input_parents">
                                            <div class="information_input_single">
                                                <label for="no1">Parent First Name <span>*</span></label>
                                                <input type="text" id="no1" name="parent_first_name"
                                                    placeholder="Type First Name" value="{{ old('parent_first_name') }}">
                                                @error('parent_first_name')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="information_input_single">
                                                <label for="no2">Parent Last Name <span>*</span></label>
                                                <input type="text" id="no2" name="parent_last_name"
                                                    placeholder="Type Last Name" value="{{ old('parent_last_name') }}">
                                                <input type="hidden" name="application_type" value="SUMMER SCHOOL">
                                                @error('parent_last_name')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no3">Email <span>*</span></label>
                                            <input type="email" id="no3" name="email" placeholder="Type Email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no7">Address <span>*</span></label>
                                            <input type="text" id="no7" name="address"
                                                placeholder="ex: 49 Featherstone Street, London"
                                                value="{{ old('address') }}">
                                            @error('address')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no5">Phone <span>*</span></label>
                                            <input type="text" id="no5" name="phone" placeholder="Type phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no6">Post Code </label>
                                            <input type="text" id="no6" name="post_code"
                                                placeholder="Tex: EC1Y 8SY" value="{{ old('post_code') }}">
                                            @error('post_code')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="information_single">
                                <div class="information_single_title">
                                    <h4>Student Details</h4>
                                </div>
                                <div class="information_single_contents">
                                    <div class="information_single_contents_left">
                                        <div class="information_input_parents">
                                            <div class="information_input_single">
                                                <label for="no1">Student First Name <span>*</span></label>
                                                <input type="text" name="student_first_name" id="no1"
                                                    placeholder="Type First Name" value="{{ old('student_first_name') }}">
                                                @error('student_first_name')
                                                    <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no2">Student Last Name <span>*</span></label>
                                            <input type="text" id="no2" name="student_last_name"
                                                placeholder="Type Last Name" value="{{ old('student_last_name') }}">
                                            @error('student_last_name')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">Additional information:</label>
                                        <input type="text" id="no25" name="additional_information"
                                            placeholder="Type here" value="{{ old('additional_information') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="information_single_submit"><button type="submit" class="btn_style">Submit
                                    Now</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_shape3"><img
                src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape3.png" alt=""></div>
        <div class="section_shape4"><img
                src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape4.png" alt=""></div>
    </section>
    <!--================  End Information Section  ================-->

    <!--================  Start (Join our Newsletter) Section  ================-->
    <section class="join_our_newsletter_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="join_our_newsletter">
                        <div class="join_our_newsletter_title">
                            <h2>Join our Newslett<span>er to ge<img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos3.png"
                                        alt=""></span>t more updates!</h2>
                            <p>Stay ahead in your child’s education with regular updates and expert tips. Be the first to
                                know about new courses, events, and exclusive offers!</p>
                        </div>
                        <div class="join_our_newsletter_form">
                            <form>
                                <input type="email" placeholder="Enter your email address" required>
                                <div class="jon_form_submit"><button type="submit">Subscribe</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================  End (Join our Newsletter) Section  ================-->
@endsection
