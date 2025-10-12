@extends('layouts.frontend')
@section('title', 'Contact Merit Tutors – Reach Our East London Tuition Centres')
@section('meta_description','Need help with tuition or want to book a free assessment? Contact Merit Tutors in East London. Reach us via phone, email, or visit our branches in Forest Gate, Ilford & Plaistow.')
@section('content')
    <style>
        .our_branches_main {
            padding: 200px 0px 105px 0px;
        }
    </style>

    @include('frontend.include.branches')
    <!--================  End (Our-Branches) Section  ================-->
    <!--================  Start (Our-Branches) Section  ================-->
    <section class="information_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (session('errorMessages'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach (session('errorMessages') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="information">
                        <form action="{{ url('/contact') }}" method="post">
                            @csrf
                            <!-- Single -->
                            <div class="information_single">
                                <div class="information_single_title">
                                    <h4>Complete the contact form.</h4>
                                </div>
                                <div class="information_single_contents">
                                    <div class="information_single_contents_left">
                                    
                                        <div class="information_input_single">
                                            <label for="no3">Name <span>*</span></label>
                                            <input type="text" name="name" id="no3" placeholder="Enter Your Name"
                                                required>
                                            @error('name')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no4">Email</label>
                                            <input type="email" name="email" id="no4"
                                                placeholder="Enter Your Email" required>
                                        </div>
                                          @error('email') 
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                    </div>
                                     <input type="hidden" name="mynumber" value="{{ $val }}">
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no5">Phone <span>*</span></label>
                                            <input type="text" name="phone" id="no5"
                                                placeholder="Enter Your Phone" required>
                                            @error('phone')
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no6">Subject </label>
                                            <input type="text" name="subject" id="no6"
                                                placeholder="Type Here" required>
                                            @error('subject') 
                                                <div style="color: red">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">Message</label>
                                        <input type="text" name="message" id="no25" placeholder="Type here" required>
                                    </div>
                                </div>
                            </div>
                                <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">I am not robot: {{ $rand_one }} + {{$rand_two}} = ?</label>
                                        <input type="number" name="number" id="no25" placeholder="Please Enter Total Number" required>
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
@endsection
