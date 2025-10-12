@extends('layouts.frontend')
@section('title', 'News Letter')
@section('content')
<style>
    .header{
    text-align: center;
    background: aliceblue;
    padding: 40px 0px;
    border: 1px solid #b9b9b9;
}

.col-md-12.maincontent.text-center {
    margin-top: 30px;
    border: 1px solid #6b6464;
    padding: 30px;
}
.teacher-details-information {

    border-top: 1px solid #ea512e;
    padding: 40px 30px;
    margin: 20px 0px;
}

.teacher-desc-content {
    margin: 20px 0px;
    padding: 30px 40px;
    border: 1px solid #b8b1b1;
}
img.main_iamge {
    height: 490px !important;
    width: 85%;
}
</style>
  {{--
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Online Tutoring</h2>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Online Tutoring</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
--}}
      <section class="choose-area pt-100 pb-70">
            <div class="container">
                 <div class="row align-items-center">
                    <div class="col-lg-12 header">
                        <div>
                            <h2>MERIT TUTORS NEWSLETTER</h2>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="teacher-details-desc">
                            <div class="teacher-desc-content">
                                     <h4>SUMMER SCHOOL</h4>
                               <p>Are you looking to keep your child engaged with learning while also
                            entertained? We are running our annual summer school once again this year;
                            enjoy peace of mind knowing that your child will be in safe hands and making
                            productive use of their time. Our Maths and English sessions will enable your
                            child to return to school in September all ready and prepared. There are no
                            more concerns over learning gaps! Plus, we have creative activity sessions to
                            keep them happy and active. Call our centre to book your summer school
                            session today.</p><br>
                        <div class="blog-details-desc">
                            <div class="article-content">
                                <ul class="features-list">
                                    <li> <i class="bx bx-check"></i> Date: 1-30 August</li>
                                    <li> <i class="bx bx-check"></i> Time: 9:00 – 3:00</li>
                                    <li> <i class="bx bx-check"></i> Price: from £21 per day</li>
                                    <li> <i class="bx bx-check"></i> Age: 5-15 years</li>
                                </ul>
                            </div>                          
                        </div>                          
                                <br>
                                  <img class="main_iamge" src="{{ asset('uploads/courseimage/IMG-2495.jpg') }}" >
                            </div>
                              <div class="teacher-desc-content">
                                     <h4>NEW PRIMARY MATHS WORKBOOKS!</h4>
                               <p>We are delighted to announce that after months of hard work, we have
                                completed the production of our new primary maths workbooks. We would like
                                especially thank our staff members who worked tirelessly behind this project in
                                order to have it prepared for the upcoming academic year. The resources have
                                been organised and structured to complement the National Curriculum and
                                involve additional exercises to allow students to thoroughly practice. The new
                                workbooks also include more visual aids which will be particularly useful for our
                                younger students and ESOL students. We are extremely excited to utilise them
                                in September and believe our students are too!</p><br>
                                            
                                <br>
                                 
                            </div>
                        </div>
                    </div>
                   
                   

                    <div class="col-lg-4 col-md-12 ">
                        <div class="teacher-details-information">
                            <h3>Issue:</h3>
                            <h5>Friday 29 July 2022</h5>
                        </div>
                        
                        <div class="teacher-details-information">
                            <h3>Important Updates:</h3>
                            <p>Weekday sessions will now run from 3-5pm instead of 5-7pm</p>
                         
                        </div>
                        
                        <div class="teacher-details-information">
                            <h3>September Updates:</h3>
                            <p> A few exciting things that we hope
                            to bring back in September:</p>
                         <div class="blog-details-desc">
                            <div class="article-content">
                         <ul class="features-list">
                                    <li> <i class="bx bx-check"></i> Student of the Month</li>
                                    <li> <i class="bx bx-check"></i> Teacher of the Month</li>
                                    <li> <i class="bx bx-check"></i> Feedback forms (to be
                        completed by parents,
                        students and teachers)</li>
                                  
                                </ul>
                                </div>
                                </div>
                                
                        <p>The monthly winners will be
                        announced here, so don’t forget to
                        grab a copy of our newsletter every
                        month!</p>
                         
                        </div>
                        
                        
                        
                        <div class="teacher-details-information">
                            <h3>ATTENDANCE AND PUNCTUALITY REMINDER:</h3>
                            <p>Late attendance and absences have
                            significant impacts on the learning
                            and performance of students. In
                            order to maintain our aim of quality
                            learning, we request all parents to
                            ensure their child arrives to their
                            allocated session prior to the start of
                            the lesson and holidays or any other
                            arrangements are scheduled outside
                            of tuition hours. However, we can
                            authorise any such absences
                            provided that the centre is notified
                            of the leave a minimum of 24 hours
                            in advance. In the case of an
                            emergency (i.e. sickness), please
                            ensure to update the centre as soon
                            as possible.</p>
                        </div>
                        
                    </div>
                </div>
                
                  <div class="row align-items-center">
                    <div class="col-lg-12 header">
                        <div>
                            <p>Mr Mohammad Bari (Director and Executive Head Teacher)</p>
                           
                            <span>Forest Gate Telephone: 020 8616 2526 | Ilford Telephone: 020 8478 9988</span> <br>

                                <span>Email: info@merittutors.co.uk</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



@endsection
