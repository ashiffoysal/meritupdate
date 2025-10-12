@extends('layouts.frontend')
@section('title', 'Free Assessment for Tuition – Book Today | Merit Tutors East London')
@section('meta_description','Book a free academic assessment with Merit Tutors in East London. Discover your child’s learning level and get expert recommendations from our experienced tutors.')
@section('content')

    <!--================  Start Assessment-Banner Section  ================-->
    <section class="assessment_banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="assessment_banner">
                        <div class="default_title_2nd">
                            <h1>Unlock Your Potent<span>ial with a Free<img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png"
                                        alt=""></span> Assessment</h1>
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
                        <form action="{{ url('/testing-assesment') }}" method="post" >
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
                                                <label for="no1">Parent First Name <span>*</span></label>
                                                <input type="text" id="no1" name="first_name"
                                                    placeholder="Type First Name" required>
													  @error('first_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="information_input_single">
                                                <label for="no2">Parent Last Name <span>*</span></label>
                                                <input type="text" id="no2" name="last_name"
                                                    placeholder="Type Last Name" required>
													  @error('last_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no3">Email <span>*</span></label>
                                            <input type="email" name="email" id="no3" placeholder="Type Email"
                                                required>
												  @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no4">Referral Code</label>
                                            <input type="text" name="referral_code" id="no4"
                                                placeholder="ex: 1236546">
                                        </div>
                                    </div>
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no5">Phone <span>*</span></label>
                                            <input type="text" name="phone" id="no5"
                                                placeholder="Type Phone Number" required>
												  @error('phone')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no6">Post Code <span>*</span> </label>
                                            <input type="text" name="postcode" id="no6"
                                                placeholder="Tex: EC1Y 8SY" required>
												  @error('postcode')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no7">Address <span>*</span></label>
                                            <input type="text" id="no7" name="address"
                                                placeholder="ex: 49 Featherstone Street, London" required>
												  @error('address')
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
                                                <label for="no8">Student First Name <span>*</span></label>
                                                <input type="text" id="no8" name="form-0-first_name"
                                                    placeholder="Type First Name" required>
                                            </div>
                                            <div class="information_input_single">
                                                <label for="no9">Student Last Name <span>*</span></label>
                                                <input type="text" id="no9" name="form-0-last_name"
                                                    placeholder="Type Last Name" required>
                                            </div>
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no10">School <span>*</span></label>
                                            <div class="iis_select">
                                                    <input type="text" class="form-control"  name="form-0-school" placeholder="Enter School Name" required>
                                                {{--
                                                <select id="no10" name="form-0-school select2">
                                                    @foreach ($allSchool as $school)
                                                        <option value="{{ $school['id'] }}">{{ $school['name'] }}</option>
                                                    @endforeach
                                                </select>  --}}
                                                <i class="fa-solid fa-sort-down"></i>
                                            </div>
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no11">Study Year <span>*</span></label>
                                            <div class="iis_select">
                                                <select id="no11" name="form-0-year_group">
                                                    @foreach ($allYear as $year)
                                                        <option value="{{ $year['id'] }}">year {{ $year['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <i class="fa-solid fa-sort-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no12">Branch <span>*</span></label>
                                            <div class="iis_select">
                                                <select id="no12" name="form-0-branch">
                                                    @foreach ($allBranch as $branch)
                                                        <option value="{{ $branch['id'] }}">{{ $branch['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                <i class="fa-solid fa-sort-down"></i>
                                            </div>
                                        </div>

                                        <div class="information_input_parents">
                                            <div class="information_input_single">
                                                <label for="no14">Assessment Date <span>*</span></label>
                                                <input type="date" id="no14" name="form-0-assessment_date"
                                                    required>
                                            </div>
                                            <div class="information_input_single">
                                                <label for="no15">Assessment Time <span>*</span></label>
                                                <input id="no15" type="time" name="form-0-assessment_time">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ii_single_checkbox">
                                    <label class="iischeckbox_label">Subject <span>*</span></label>
                                    <div class="subjects">
                                        @foreach ($allSubjects as $key => $subjects)
                                            <label class="subject-option">
                                                <input name="form-0-subjects[]" type="checkbox"
                                                    value="{{ $subjects['id'] }}" id="subject_{{ $key }}" />
                                                <span> {{ $subjects['name'] }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="morestudent" id="morestudent">

                            </div>
                            <div class="information_single_add_btn"><a onclick="morestudent()"><i
                                        class="fa-solid fa-circle-plus"></i> Add New Student</a></div>

                            <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">Remarks</label>
                                        <input type="text" name="remarks" id="no25" placeholder="Type here">
                                    </div>
                                </div>
                            </div>
                             <div class="information_single information_single_last">
                                <div class="information_single_contents">
                                    <div class="information_input_single">
                                        <label for="no25">I am not robot: {{ $rand_one }} + {{$rand_two}} = ?</label>
                                        <input type="number" name="number" id="no25" placeholder="Please Enter Total Number" required>
                                          <input type="hidden" name="mynumber" value="{{ $val }}">
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="information_single_submit"><button type="submit" class="btn_style">Sbmit
                                    Now</button></div> -->
                                    <div class="information_single_submit">
                                        <button type="submit" class="btn_style" id="submitBtn">Submit Now</button>
                                    </div>

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
        var i = 1;

        function morestudent() {
            $("#morestudent").append(
                '<div class="information_single"><div class="information_single_title"><h4> Student Details</h4> <a onclick="deleterow(this)"  style="color:red;cursor:pointer"><i class="fa-solid fa-trash"></i> Delete</a></div><div class="information_single_contents"><div class="information_single_contents_left"><div class="information_input_parents"><div class="information_input_single"><label for="no8">Student First Name <span>*</span></label><input type="text" id="no8" name="form-' +
                i +
                '-first_name" placeholder="Type First Name" required></div><div class="information_input_single"><label for="no9">Student Last Name <span>*</span></label><input type="text" id="no9" name="form-' +
                i +
                '-last_name" placeholder="Type Last Name" required></div></div><div class="information_input_single"><label for="no10">School <span>*</span></label><div class="iis_select">   <input type="text" class="form-control"  name="form-' +
                i +
                '-school" placeholder="Enter School Name" required><i class="fa-solid fa-sort-down"></i></div></div><div class="information_input_single"><label for="no11">Study Year <span>*</span></label><div class="iis_select"><select id="no11"  name="form-' +
                i +
                '-year_group">@foreach ($allYear as $year)<option value="{{ $year['id'] }}">year {{ $year['name'] }}</option>@endforeach</select><i class="fa-solid fa-sort-down"></i></div></div></div><div class="information_single_contents_left"><div class="information_input_single"><label for="no12">Branch <span>*</span></label><div class="iis_select"><select id="no12" name="form-' +
                i +
                '-branch">@foreach ($allBranch as $branch)<option value="{{ $branch['id'] }}">{{ $branch['name'] }}</option>@endforeach</select><i class="fa-solid fa-sort-down"></i></div></div><div class="information_input_parents"><div class="information_input_single"><label for="no14">Assessment Date <span>*</span></label><input type="date" id="no14" name="form-' +
                i +
                '-assessment_date" required></div><div class="information_input_single"><label for="no15">Assessment Time <span>*</span></label><input  id="no15" type="time" name="form-' +
                i +
                '-assessment_time"></div></div></div></div><div class="ii_single_checkbox"><label class="iischeckbox_label">Subject <span>*</span></label><div class="subjects">@foreach ($allSubjects as $key => $subjects)<label class="subject-option"><input name="form-' +
                i +
                '-subjects[]" type="checkbox" value="{{ $subjects['id'] }}" id="subject_{{ $key }}"/><span> {{ $subjects['name'] }}</span></label>@endforeach</div></div></div>'
                )
        }
    </script>
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
    <script>
function deleterow(em) {

$(em).closest(".information_single").remove();

}


$(document).ready(function () {
  $(".select2").select2();
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");
        const submitBtn = document.getElementById("submitBtn");

        form.addEventListener("submit", function () {
            submitBtn.disabled = true;
            submitBtn.innerText = "Submitting..."; // optional loading message
        });
    });
</script>

@endsection
