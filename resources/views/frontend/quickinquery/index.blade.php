@extends('layouts.frontend')
@section('title', 'Quick Inquiry | Contact Merit Tutors Instantly for Support & Info')
@section('meta_description','Have a quick question? Reach out to Merit Tutors instantly for information about courses, assessments, or enrolment. Fast responses from our expert team.')
@section('content')
    <!--================  Start Assessment-Banner Section  ================-->
    <section class="assessment_banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="assessment_banner">
                        <div class="default_title_2nd">
                            <h2>Unlock Your Potential <span> with <img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png"
                                        alt="">Quick Inquiry</span></h2>
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
                        <form action="{{ url('/quick-inquiry') }}" method="post" >
                        @csrf
                            <!-- Single -->
                            <div class="information_single">
                                <div class="information_single_title">
                                    <h4>Parent Details</h4>
                                </div>
                                <div class="information_single_contents">
                                    <div class="information_single_contents_left">
                                        <div class="information_input_parents">
                                               <div class="information_input_single">
                                            <label for="no3">Parents Name <span>*</span></label>
                                            <input type="text" name="name" id="no3" placeholder="Type Parents Name"
                                                required>
												  @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no3">Email <span>*</span></label>
                                            <input type="email" name="email" id="no3" placeholder="Type Parents Email"
                                                required>
												  @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                       
                                    </div>
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no5">Phone <span>*</span></label>
                                            <input type="text" name="phone" id="no5"
                                                placeholder="Type Phone" required>
												  @error('phone')
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
                                                <label for="no8">Student Name <span>*</span></label>
                                                <input type="text" id="no8" name="student_name"
                                                    placeholder="Type First Name" required>
                                            </div>
                                            <div class="information_input_single">
                                                <label for="no9">Second Student Name <span>*</span></label>
                                                <input type="text" id="no9" name="second_student_name"
                                                    placeholder="Type Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no12">Branch <span>*</span></label>
                                            <div class="iis_select">
                                                <select id="no12" name="branch">
                                                   @foreach ($allBranch as $branch)
                                                        <option value="{{ $branch['id'] }}">{{ $branch['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <i class="fa-solid fa-sort-down"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                             
                            </div>

                            <!-- Single -->
                          <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">Source Of Information</label>
                                        <input type="text" name="source_of_information"  id="no25" placeholder="Type here">
                                    </div>
                                </div>
                            </div>

                            <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">Remarks</label>
                                        <input type="text" name="inquiry_remarks" id="no25" placeholder="Type here">
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
    @include('frontend.include.newslatter')
    <!--================  End (Join our Newsletter) Section  ================-->
 
    <script>
        function onSubmit() {
            // Basic form validation
            if (!validateForm()) {
                return; // Stop form submission if validation fails
            }

            var formData = $("#submitForm").serialize();
            var token = 'ebrfhjUIHB%^45!FL*jIOPJ$78^&ej67^&*bc5eF%ThyIy!werf%^&67';
            console.log(formData);
            $.ajax({
                url: 'https://merittutors.uk/api/quick-inquiry',
                type: 'POST',
                data: formData,
                headers: {
                    'Authorization': token
                },
                success: function(response) {
                    alert('Success:', response);
                    console.log('Success:', response);
                },
                error: function(xhr, status, error) {
                    alert('Error:', error);
                    console.error('Error:', error);
                }
            });
        }

        function validateForm() {
            // Basic form validation example
            var isValid = true;

            // Check if student name is filled
            var studentName = $("input[name='student_name']").val().trim();
            if (studentName === '') {
                alert('Please enter student name.');
                isValid = false;
            }

            // Check if parent/guardian name is filled
            var parentName = $("input[name='name']").val().trim();
            if (parentName === '') {
                alert('Please enter parent/guardian name.');
                isValid = false;
            }

            // Check if email is filled and valid
            var email = $("input[name='email']").val().trim();
            if (email === '') {
                alert('Please enter email.');
                isValid = false;
            } else if (!isValidEmail(email)) {
                alert('Please enter a valid email.');
                isValid = false;
            }

            // Check if mobile number is filled and valid
            var phone = $("input[name='phone']").val().trim();
            // if (phone === '') {
            //     alert('Please enter mobile number.');
            //     isValid = false;
            // } else if (!isValidPhone(phone)) {
            //     alert('Please enter a valid mobile number.');
            //     isValid = false;
            // }

            return isValid;
        }

        // Helper function to validate email
        function isValidEmail(email) {
            var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return pattern.test(email);
        }

        // Helper function to validate phone number
        // function isValidPhone(phone) {
        //     var pattern = /^\d{13}$/;
        //     return pattern.test(phone);
        // }
    </script>

@endsection
