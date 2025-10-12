@extends('layouts.frontend')
@section('title', 'Student / Parents Sign up')
@section('content')
        <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Sign up</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>STUDENT SIGN UP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Quote Area -->
        <section class="quote-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                       
                        <div class="quote-image" style=""></div>
                    </div>

                    <div class="col-lg-6">
                        <div class="quote-item">
                            <div class="content">
                                <span>SIGN UP</span>
                                <h3>STUDENT SIGN UP</h3>
                            </div>

                            <form action="{{url('/student/signup')}}" method="post">

                                @csrf

                                <div class="form-group">
                                    <input type="text"  name="name" class="form-control" placeholder="Enter Your Name">
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                @enderror
                                </div>
                             

                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                                    @error('email')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror

                                </div>
                               
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                                    @error('phone')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                               

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                    @error('password')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Enter Confirm Password">
                                    @error('confirm_password')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                  <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required>

      By clicking sign up,you agree to our 
  <a style="color:green" href="{{ url('/terms-conditions-home-tutoring') }}">
      Terms & Condition(Home & Online)</a>
      <a style="color:green" href="{{ url('/terms-conditions-onsite-tutoring') }}"> Terms & Condition (Onsite)</a><br>
                                <button type="submit" class="default-btn">
                                    Submit Now
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Quote Area -->

        <!-- Start Enrollment Area -->
        <section class="enrollment-area pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="enrollment-accordion">
                            <div class="content">
                                <h3>Steps To Student Enrolment:</h3>
                            </div>

                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                       1. Registration
                                    </a>
        
                                    <p class="accordion-content show">
                                      
                                        <a style="color:red" href="{{ url('/student/signup') }}">Register</a> as a student on our website.<a style="display:inline;color:red;cursor:pointer" herf="{{ url('/tutor-guideline') }}">click here</a> for student guideline.
                                    </p>
                                </li>
                                
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                        2. Complete profile
                                    </a>
        
                                    <p class="accordion-content">
                                        {{--
                                        Complete a <a style="color:red" href="{{ url('/assesment') }}"> free assessment </a>to help us identify the best support that we can provide.
                                        --}}
                                        Complete your profile and upload the relevant documents.
                                    </p>
                                </li>
                                
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                       3. Find Tutor
                                    </a>
        
                                    <p class="accordion-content">
                                       <!--Discuss the assessment results as well as any other queries that you may have and choose a suitable day and time for your chosen subject(s). -->
                                       Browse through our tutors with an expertise in their teaching subject.
                                    </p>
                                </li>
                                
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class='bx bx-plus'></i>
                                       4. Schedule Lesson
                                    </a>
        
                                    <p class="accordion-content">
                                        Select your ideal tutor and book your sessions directly.
                                    </p>
                                </li>
                              
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="enrollment-image"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Enrollment Area -->
@endsection