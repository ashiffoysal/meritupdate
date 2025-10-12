@extends('layouts.frontend')
@section('title', 'Assessment')
@section('content')
<style>
    .apply-form {
    background-color: #ffffff;
    -webkit-box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
     box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
    padding: 50px;
}
.apply-form form .form-group .form-control {
    height: 50px !important;
    color: #1b0238 !important;
    -webkit-box-shadow: unset !important;
    box-shadow: unset !important;
    border: 1px solid #d7d2d2 !important;;
    background-color: transparent !important;;
    -webkit-transition: 0.5s !important;;
    transition: 0.5s !important;;
    border-radius: 7px !important;;
    padding: 0 0 0 15px !important;;
    font-weight: 400 !important;;
}
.h1, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
   
    font-family: "Poppins", sans-serif !important;
    font-weight: bold !important;
}

.form-label {
    font-size: 16px;
    font-weight: 600;
}
</style>
<link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
<script src="https://use.fontawesome.com/5f267863cb.js"></script>
     <!-- Start Page Banner -->
     <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2 style="color:#fff !important;">Assessment</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li>ASSESSMENT FORM</li>
                                @if(session('errorMessages'))
    <div class="alert alert-danger">
        <ul>
            @foreach(session('errorMessages') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <!-- Start Apply Area -->
        <section class="apply-area ptb-100">
            <div class="container">
                <div class="apply-form">
                      {{--
                <form id="submitForm">
    <!-- Include your token as a hidden input field -->

    <!-- Your form fields -->
                        <div class="row">
                        
                            <div class="col-md-12 mt-5">
                                <div class="content">
                                    <h4>Student Details</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Student Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="student_name" placeholder="Student Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Second Student Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control"  name="second_student_name" placeholder="Second Student Name">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Additional information:<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="additional_information" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                             
                              
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h5>Parent Details</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Parent/Guardian Name<span style="color:red">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Parent/Guardian Name">
                                                @error('parent_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                                @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                <input type="text" name="phone" class="form-control" placeholder="Mobile Number">
                                                @error('mobile')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 mt-5">
                                <div class="content">
                                    <h5>CHOOSE A TIME FOR YOUR CHILD'S ASSESSMENT</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Assesment Time<span style="color:red">*</span></label>
                                                <select name="assessment_time" id="" class="form-control">
                                        <option value="14:15">2.15pm-4.15pm</option>
                        
                                         <option value="16:00">4pm-6pm</option>
                            
                            
                            
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date<span style="color:red">*</span></label>
                                                <input type="date" name="assessment_date" class="form-control" placeholder="Date">
                                                 <input type="hidden" name="source_of_information" class="form-control" value="Website">
                                                 
                                                   <input type="hidden" name="inquiry_remarks" class="form-control" value="  ">
                                                   
                                                    <input type="hidden" name="followup_remarks" class="form-control" value="  ">
                                                     <input type="hidden" name="followup_date" class="form-control" value="{{Carbon\Carbon::today()->toDateString()}}">
                                                   
                                                 
                                                 
                                                
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="button" onclick="onSubmit()" class="default-btn" style="border-radius:24px">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                        
                    </form>
                   --}}
                   
                   
                   
                    <form action="{{ url('/testing-assesment') }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h4>Unlock Your Potential with a Free Assessment - Complete the Form Below to Get Started!</h4>
                                </div>
                              
                            
                              <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h5>Parent Details</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Parent First Name<span style="color:red">*</span></label>
                                                <input type="text" name="first_name" class="form-control" placeholder="Parent/Guardian First Name" required>
                                                @error('first_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Parent Last Name<span style="color:red">*</span></label>
                                                <input type="text" name="last_name" class="form-control" placeholder="Parent/Guardian Last Name" required>
                                                @error('last_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                <input type="text" name="email" class="form-control" placeholder="Email"required>
                                                @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                                @error('phone')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Post Code<span style="color:red">*</span></label>
                                                <input type="text" name="postcode" class="form-control" placeholder="Post Code" required>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Referral code</label>
                                                <input type="text" name="referral_code" class="form-control" placeholder="Referral code" value=".">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Address<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="address" id="" cols="30" rows="10" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-md-12 mt-5">
                                <div class="content">
                                    <h4>Student Details</h4>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">First Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control" name="form-0-first_name" placeholder="First Name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Last Name<span style="color:red">*</span></label>
                                                <input type="text" class="form-control"  name="form-0-last_name" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Branch<span style="color:red">*</span></label>
                                                
                                                <select name="form-0-branch"  class="form-control" required>
                                                    @foreach($allBranch as $branch)
                                                    
                                                    <option value="{{$branch['id']}}">{{$branch['name']}}</option>
                                                    @endforeach
                                                    </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">School<span style="color:red">*</span></label>
                                                
                                                <select name="form-0-school"  class="form-control" required>
                                                    
                                                    @foreach($allSchool as $school)
                                                    <option value="{{ $school['id'] }}">{{ $school['name'] }}</option>
                                                    @endforeach
                                                    </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Year<span style="color:red">*</span></label>
                                                <select name="form-0-year_group"  class="form-control" required>
                                                    @foreach($allYear as $year)
                                                    
                                                    <option value="{{ $year['id'] }}">year {{ $year['name'] }}</option>
                                                    @endforeach
                                                    
                                                  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                
                                                @foreach($allSubjects as $key => $subjects)
                                               <div class="form-check">
                                              <input name="form-0-subjects[]" class="form-check-input" type="checkbox" value="{{ $subjects['id'] }}" id="subject_{{$key}}">
                                              <label class="form-check-label" for="subject_{{$key}}">
                                                {{ $subjects['name'] }}
                                              </label>
                                            </div>
                                            @endforeach
                                            
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Assesment Time<span style="color:red">*</span></label>
                                               <input type="time" name="form-0-assessment_time" id="" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Date<span style="color:red">*</span></label>
                                                <input type="date" name="form-0-assessment_date" class="form-control" placeholder="Date" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12 text-end">
                                       
                                    </div>
                                </div>
                                <div class="morestudent" id="morestudent">

                                </div>
                                <div class="row">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2 text-end">
                                        <button type="button" onclick="morestudent()" class="btn btn-sm btn-warning">Add Another Child</button>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-12 col-md-12 mt-5">
                                <div class="content">
                                    <h5></h5>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Remarks/Notes</label>
                                                <textarea class="form-control" name="remarks" id="" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="default-btn" style="border-radius:24px">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
            </div>
        </section>
        <!-- End Apply Area -->
<script>
function deleterow(em) {

$(em).closest(".row").remove();

}
</script>
<script>
    var i=1;
    function morestudent(){
        $("#morestudent").append('<div class="row"><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">First Name<span style="color:red">*</span></label><input type="text" class="form-control" name="form-'+i+'-first_name" placeholder="First Name"></div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Last Name<span style="color:red">*</span></label><input type="text" class="form-control"  name="form-'+i+'-last_name" placeholder="Last Name"></div></div></div> <div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Branch<span style="color:red">*</span></label><select name="form-'+i+'-branch"  class="form-control">@foreach($allBranch as $branch)<option value="{{$branch['id']}}">{{$branch['name']}}</option>@endforeach</select></div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">School<span style="color:red">*</span></label><select name="form-'+i+'-school"  class="form-control">@foreach($allSchool as $school)<option value="{{ $school['id'] }}">{{ $school['name'] }}</option> @endforeach</select></div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Year<span style="color:red">*</span></label><select name="form-'+i+'-year_group"  class="form-control"> @foreach($allYear as $year)<option value="{{ $year['id'] }}">year {{ $year['name'] }}</option>@endforeach</select></div></div></div><div class="col-md-12"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>@foreach($allSubjects as $key => $subjects)<div class="form-check"><input class="form-check-input" name="form-'+i+'-subjects[]" type="checkbox" value="{{ $subjects['id'] }}" id="subject_{{$key}}"><label class="form-check-label" for="subject_{{$key}}">{{ $subjects['name'] }}</label></div>@endforeach</div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Assesment Time<span style="color:red">*</span></label><input type="time" name="form-'+i+'-assessment_time" id="" class="form-control"></div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Date<span style="color:red">*</span></label><input type="date" name="form-'+i+'-assessment_date" class="form-control" placeholder="Date"></div></div></div></div>')
    }
</script>

<script>
    function onSubmit(){
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
            success: function (response) {
                alert('Success:', response);
                console.log('Success:', response);
            },
            error: function (xhr, status, error) {
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