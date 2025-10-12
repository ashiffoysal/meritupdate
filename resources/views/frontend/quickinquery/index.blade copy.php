@extends('layouts.frontend')
@section('title', 'Quick Inquiry')
@section('content')
<script src="https://www.google.com/recaptcha/api.js"></script>
<style>
.contact-form .contactForm .form-group .form-control {
    border: 1px solid #a79b9b;
}
li.location {
    padding: 30px 0px 0px 0px !important;
    font-weight: 700;
    /* border-bottom: 1px solid #b9b3b3; */
}
.offset-md-2.col-lg-7.col-md-12.mt-10 {
    margin-top: 60px;
}


.contact-information .contact-list li {
    margin-bottom: 10px;
    position: relative;
    padding-left: 37px;
}

.col-md-5.asgrid {
    /* padding: 0px 100px 0px 0px; */
    border-left: 1px solid #a1a1a1;
    /* margin: 0px 7px 0px -56px; */
    padding: 0px 36px;
    border-bottom: 1px solid #a1a1a1;
}
.gird-bottom{
    border-bottom: 1px solid #d5cdcd;
    margin-right:10px;
}

hr:not([size]) {
    height: 1px;
    width: 87% !important;
}

ul.socials {
    margin-top:30px;
    list-style: none;
   
}
ul.socials li {
    display: inline;
    padding: 4px 9px;
    /* border: 1px solid #d5d3d3; */
    border-radius: 100%;
    margin: 0px 2px;
    font-size: 18px;
}
</style>
      <!-- Start Page Banner -->
      <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Quick Inquiry</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Quick Inquiry</li>
                            </ul>
 
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Contact Area -->
        <section class="contact-area ptb-100">
            <div class="container">
                <div class="row">
                     <div class=" col-lg-12 col-md-12 mt-10" style="margin-top:50px">
                        <div class="contact-form">
                            <h3>Unlock Your Potential with Quick Inquiry - Complete the Form Below to Get Started!</h3>
                            <form  action="{{ url('/quick-inquiry') }}" method="post" class="contactForm">
                               @csrf
                                <div class="row">
                                     <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h5>Parent Details</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Branch<span style="color:red">*</span></label>
                                                <select class="form-control" name="branch">
                                                    <option value="1">Forest Gate</option>
                                                     <option value="2">ILFORD</option>
                                                      <option value="3">PLAISTOW</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label"> Parent Name<span style="color:red">*</span></label>
                                                <input type="text" name="name" class="form-control" placeholder="Parent/Guardian First Name" required>
                                                @error('name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Parent Email<span style="color:red">*</span></label>
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
                                                <label for="exampleFormControlInput1" class="form-label">Parent Phone Number<span style="color:red">*</span></label>
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
                                                <label for="exampleFormControlInput1" class="form-label">Student Name<span style="color:red">*</span></label>
                                                <input type="text" name="student_name" class="form-control" placeholder=" Student Name" required>
                                            </div>
                                        </div>
                                    </div>
                                           
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Second Student Name</label>
                                                <input type="text" name="second_student_name" class="form-control" placeholder="Second Student Name" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                      <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Source Of Information</label>
                                                <input type="text" name="source_of_information" class="form-control" placeholder="Source Of Information">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Inquiry Remarks<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="inquiry_remarks" id="" cols="30" rows="10" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    
                                       </div>
                                      <div class="col-lg-12 col-md-12">
                                        
                                        <div class="form-group" style="padding:10px ">
                                   <span style="color:red"> I am not robot: </span>
                                    <span>{{ $rand_one }} + {{$rand_two}}</span> = <input style="padding:5px;" type="number" name="number" placeholder="Enter valid number" required>
                                    <input type="hidden" name="mynumber" value="{{ $val }}"><br>
                                    <span class="error_message_robot"></span>
                                </div>
                                        
                                      
                                    </div>
                                    
                                      <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="default-btn" style="border-radius:24px">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                                </div>
                            </div>
                                  
                                </div>
                            </form>
                        </div>
                    </div>
                   
                   

                 

                </div>
            </div>
        </section>
        <!-- End Contact Area -->

        <!-- Map -->
     
        <!-- End Map -->
@endsection