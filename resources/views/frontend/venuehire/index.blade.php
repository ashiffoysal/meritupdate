@extends('layouts.frontend')
@section('title', 'Venue Hire')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')

  <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Venue Hire</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>Venue Hire</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Who We Are Area -->
        <section class="who-we-are ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-6">
                        <div class="who-we-are-image-wrap">
                            <img src="{{ asset('frontend/venuehire/1.webp') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>Venue Hire</span>
                            <h3>Venues Available for Hire - Forest Gate, Plaistow, Ilford</h3>
                            <p>Hiring Our Premises
for Classes or
Training (Weekdays)</p>
                            

                            <!--<ul class="who-we-are-list">-->
                            <!--    <li>-->
                            <!--        <span style="width: 100% !important;"> </span>-->
                                  
                            <!--    </li>-->
                               
                            <!--</ul>-->
                            <div class="who-we-are-btn">
                                <a href="{{ url('/contact') }}" class="default-btn">Starting £10 per hour</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Who We Are Area -->
       
   
   
        <!-- Start Choose Area -->
        <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="single-choose-item">
                            <span>More Details</span>
                            <h3>Why Hire Our Premises?</h3>
                            
                            
                            <ul class="who-we-are-list">
                                <li>
                                    <span style="width: 100% !important;font-family: 'boxicons';">Three Convenient Locations: </span>
                                  
                                </li>
                            </ul>
                            <p>54 Upton Lane, Forest Gate, E7 9N 2-4 Cumberland Road, Plaistow, E13 8NH 269 Ilford Lane, Ilford, IG1 2SD</p>
                            
                        
                        <ul class="who-we-are-list">
                                <li>
                                    <span style="width: 100% !important;font-family: 'boxicons';">Flexible Hiring Terms: </span>
                                  
                                </li>
                            </ul>
                            <p>Whether you need space for a single day, weekly sessions, or a long-term arrangement, we offer flexible contracts tailored to your needs.</p>
                                 
                        <ul class="who-we-are-list">
                                <li>
                                    <span style="width: 100% !important;font-family: 'boxicons';">Modern Facilities: </span>
                                  
                                </li>
                            </ul>
                            <p>All of our branches are equipped with clean, spacious rooms, projectors, whiteboards, Wi-Fi, and more to accommodate a range of activities, from educational classes to corporate training.</p>
                            
                              <ul class="who-we-are-list">
                                <li>
                                    <span style="width: 100% !important;font-family: 'boxicons';">Competitive Rates:</span>
                                  
                                </li>
                            </ul>
                            <p>As our centers are unoccupied during daytime hours, we offer highly competitive rates to ensure both parties benefit</p>

                            <div class="choose-btn">
                                <a href="{{ url('/contact')}}" class="default-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="choose-image">
                            <img src="{{ asset('frontend/venuehire/2.webp') }}" alt="image">

                            <!--<div class="choose-image-shape">-->
                            <!--    <div class="shape-1">-->
                            <!--        <img src="assets/img/choose/choose-shape-1.png" alt="image">-->
                            <!--    </div>-->
                            <!--    <div class="shape-2">-->
                            <!--        <img src="assets/img/choose/choose-shape-2.png" alt="image">-->
                            <!--    </div>-->
                            <!--    <div class="shape-3">-->
                            <!--        <img src="assets/img/choose/choose-shape-3.png" alt="image">-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->

        <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                        <div class="single-choose-item">
                            <span>More Details</span>
                            <h3>Contact Us Today!</h3>
                            
                            
                               <p>For more information or to book a viewing, please contact us at:</p>
                            
                            <ul class="who-we-are-list" style="list-style-type: none !important;">
                                <li>
                                    <span style="width: 100% !important;font-family: 'boxicons';">Phone:0208 616 2526</span>
                                  
                                </li>
                                <li>
                                    <span style="width: 100% !important;font-family: 'boxicons';">Email: info@merittutors.co.uk</span>
                                  
                                </li>
                            </ul>
                         
                      
                           
                        </div>
                    </div>

                </div>
            </div>
        </section>










@endsection