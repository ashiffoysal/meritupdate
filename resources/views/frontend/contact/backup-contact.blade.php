@extends('layouts.frontend')
@section('title', 'Contact')
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
                            <h2>Contact Us</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Contact Us</li>
                            </ul>
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
                    <div class="col-lg-12 col-md-12 row">
                       
                        <div class="col-md-4">
                            <div class="contact-information">
                                <h4>FOREST GATE BRANCH</h4>
                                <ul class="socials">
                                    <li>
                                        <a href="{{ $social->facebook }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->skype }}" target="_blank">
                                            <i class='bx bxl-skype'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="contact-list">
                                    
                                    <li class="location">PHONE</li>
                                    <li><i class='bx bx-phone-call'></i><a href="{{ $companyInformation->mobile}}">0208 616 2526</a></li>
                                    <hr>
                                    <li class="location">EMAIL</li>
                                    <li><i class='bx bx-envelope'></i><a href="mailto:{{  $companyInformation->email }}">info@merittutors.co.uk</a></li>
                                    <hr>
                                    <!-- <li class="location">SOCIAL</li>
                                    <li><i class='bx bx-microphone'></i><a href="tel:{{ $companyInformation->telephone }}">{{ $companyInformation->telephone }}</a></li> -->
                                    <li class="location">ADDRESS</li>
                                    <li><i class='bx bx-map'></i><span>54 Upton Lane
                                    London E7 9LN</span></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="contact-information">
                                <h4>ILFORD BRANCH</h4>
                                <ul class="socials">
                                    <li>
                                        <a href="{{ $social->facebook }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->skype }}" target="_blank">
                                            <i class='bx bxl-skype'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="contact-list">
                                    <li class="location">PHONE</li>
                                    <li><i class='bx bx-phone-call'></i><a href="{{ $companyInformation->mobile}}">020 8478 9988</a></li>
                                    <hr>
                                    <li class="location">EMAIL</li>
                                    <li><i class='bx bx-envelope'></i><a href="mailto:{{  $companyInformation->email }}">info@merittutors.co.uk</a></li>
                                    <hr>
                                    <!-- <li class="location">SOCIAL</li>
                                    <li><i class='bx bx-microphone'></i><a href="tel:{{ $companyInformation->telephone }}">{{ $companyInformation->telephone }}</a></li> -->
                                    <li class="location">ADDRESS</li>
                                    <li class="address"><i class='bx bx-map'></i> <span>269 Ilford Lane Ilford IG1 2SD</span></li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="contact-information">
                                <h4>PLAISTOW BRANCH</h4>
                                <ul class="socials">
                                    <li>
                                        <a href="{{ $social->facebook }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->skype }}" target="_blank">
                                            <i class='bx bxl-skype'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="contact-list">
                                    <li class="location">PHONE</li>
                                    <li><i class='bx bx-phone-call'></i><a href="{{ $companyInformation->mobile}}">0208 157 9926</a></li>
                                    <hr>
                                    <li class="location">EMAIL</li>
                                    <li><i class='bx bx-envelope'></i><a href="mailto:{{  $companyInformation->email }}">info@merittutors.co.uk</a></li>
                                    <hr>
                                    <!-- <li class="location">SOCIAL</li>
                                    <li><i class='bx bx-microphone'></i><a href="tel:{{ $companyInformation->telephone }}">{{ $companyInformation->telephone }}</a></li> -->
                                    <li class="location">ADDRESS</li>
                                    <li class="address"><i class='bx bx-map'></i> <span>2-4 Cumberland Road 
London
E13 8NH</span></li>
                                   
                                </ul>
                            </div>
                        </div>
                 
                      
                    </div>
                    <div class=" col-lg-12 col-md-12 mt-10" style="margin-top:50px">
                        <div class="contact-form">
                            <h3>Get In Touch</h3>
                            <form  action="{{ url('/contact') }}" method="post" class="contactForm">
                               @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Enter name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Enter email address">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Enter phone number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="subject" id="subjects" class="form-control" required data-error="Please enter your subjects" placeholder="Enter Subjects">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                      <div class="col-lg-12 col-md-12">
                                        
                                        <div class="form-group" style="padding:10px ">
                                   <span style="color:red"> I am not robot </span><br>
                                    <span>{{ $rand_one }} + {{$rand_two}}</span> = <input style="padding:5px;" type="number" name="number" placeholder="Enter valid number" required>
                                    <input type="hidden" name="mynumber" value="{{ $val }}"><br>
                                    <span class="error_message_robot"></span>
                                </div>
                                        
                                      
                                    </div>
                                  

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn">Send Message</button>
                                        <div id="" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
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