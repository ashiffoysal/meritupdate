@extends('layouts.frontend')
@section('title', '11+ April Holydays Mock Exams')
@section('content')
<style>
    
    .page-banner-area {
    padding-top: 50px !important;
    padding-bottom: 50px !important;
}



.who-we-are-content .who-we-are-list li span {
    font-family: "Roboto", sans-serif;
    display: inline-block;
    height: 30px;
    width: 70px !important;
    margin: 0px -35px !important;
    line-height: 31px;
    font-size: 12px;
    color: #ffffff;
    background-color: #ea512e;
    border-radius: 50px;
    text-align: center;
    position: absolute;
    left: 0;
    top: 0;
    -webkit-transition: 0.5s;
    transition: 0.5s;
}
</style>
     <!-- Start Page Banner -->
     <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>11+ April Holydays Mock Exams Details</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>11+ April Holydays Mock Exams Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Choose Area -->
        <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="who-we-are-content">
                            <span>11+ April Holydays</span>
                            <h3>Easter 11+ Revision and Mock Exams</h3>
                            <br>
                            <p style="color:#000 !important;">Merit Tutors, a leading tuition provider, is now providing mock exams for all students to test their knowledge and understanding during this crucial time. As 11+ specialists, we understand the importance of mock exams; at Merit tutors, we are offering mock exams that have been designed to provide your child with an accurate representation of their 11+ entrance exam. These exams are a helpful checklist to set realistic and manageable goals to achieve greater success in the near future.</p><br>
                            
                            <p style="color:#000 !important;">Merit Tutors wishes to prepare our students thoroughly and efficiently for their 11+ entrance exams, however this cannot be accomplished with a few hours of studying. The nature of this competitive exam is such that it can be quite daunting and strenuous for our young minds. Merit Tutors take the initiative to host fun and entertaining sessions for our bright youth to practise papers in an engaging way. In the company of other like-minded students, Merit Tutors is hoping to create a motivating and friendly environment for our future leaders to express themselves and receive the support they require to open doors of greater success.</p><br>
                            <p style="color:#000 !important;">Our intensive mock exam practise has been scheduled during the Easter season, a pivotal period for all 11+ students. We have carefully selected three most challenging and demanding test papers to expose our students to a possible harsh reality. Under the guidance of our team of subject experts, who take the time out to understand every child and support them in their weak areas, we are confident that our sessions would be beneficial for students of all abilities. Our sessions have been carefully designed to practise the core intensively whilst mastering the required skills at the same time. With small groups of up to 5 students, every student can receive a personalised individual learning plan whilst also benefitting from a class setting. Following the completion of each test, our tutors will be providing valuable and effective feedback to each student, hoping to mark progress. Our fundamental aim is to be in service of our young minds that need our assistance today to shape the future tomorrow. For this reason, we are providing a complete set of 3 most challenging and demanding papers for only £75.</p>
                         <!--    <div class="who-we-are-btn">
                                <a href="{{ url('/assesment')}}" class="default-btn">Book Free Assessment</a>
                            </div> -->
                            <br>
                            <br>
                            <h3>Why should you choose the 11+ revision course at Merit Tutors?</h3>
                            <br>
                            
                                <p style="color:#000">1. Scheduled at a very crucial time for all 11+ students</p>
                                <p style="color:#000">2. Led by experienced and knowledgeable tutors </p>
                                 <p style="color:#000">3. Receive individualised support and help</p>
                                 <p style="color:#000">4. Learning in a fun and engaging way</p>
                                 <p style="color:#000">5. Practising various practise papers </p>
                                 <p style="color:#000">6. Receiving detailed and constructive feedback </p>
                                 <p style="color:#000">7. Reports available for parents to track progress.</p>
                                 
                                 <br><div class="who-we-are-btn">
                                <a href="{{ url('/mock-exam-booking') }}" class="default-btn">Book your exam now</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
         <!-- Start Choose Area -->
        <section class="choose-area">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-5">
                        <div class="who-we-are-content">
                            <h3>Our schedule: </h3>
                            <ul class="who-we-are-list">
                                <li style="color:red">
                                   Week 1- (22 April and 2:30 -4:30)- CEM Papers
                                </li>
                               
                            </ul>
                             <ul class="who-we-are-list">
                                <li  style="color:red">
                                   Week 2- (22 April and 2:30 -4:30)- GLS Papers
                                </li>
                               
                            </ul>
                           
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <h3>Our Price: </h3>
                            <ul class="who-we-are-list">
                                <li  style="color:red">
                                    - A complete set of 3 mock exams- £75 

                                </li>
                               
                            </ul>
                             <ul class="who-we-are-list">
                                <li  style="color:red">
                                   - Detailed and constructive feedback for all 3 mock exams (6 hours)- £60
                                </li>
                               
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->
        <section class="choose-area pb-70" style="margin-top:40px">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-8">
                        <div class="who-we-are-content">
                           <p style="color: #0edd00;font-size: 20px;font-weight: 700;">Register today before spaces fill up and let your child experience learning in a fun way!</p>
                           
                        </div>
                    </div>

                 
                </div>
            </div>
        </section>
        
      

    

        <style>
            .overview-content {
    background-color: #ffffff;
    -webkit-box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
    box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
    padding: 50px;
    max-width: 100% !important;
    /* margin-left: auto; */
    border-radius: 15px;
    margin: 17px 0px 0px 0px;
}
        </style>
        <!-- End Overview Area -->

@endsection
