@extends('layouts.frontend')
@section('title', 'Exam Centre London')
@section('content')
<style>
    .page-banner-area {
    padding-top: 40px;
    padding-bottom: 40px;
}
</style>
     <!-- Start Page Banner -->
     <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Our Exam Centre</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Our Exam Centre</li>
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
                            <!--<span>Exam Centre London | Private Exam Centre</span>-->
                           <a href="https://examcentrelondon.co.uk"> <img src="https://examcentrelondon.co.uk/uploads/logo/logo_1662996021.png"></a>
                            <h3>Exam Centre London</h3>
                            <br>
                            <p>Merit Tutors aims to help all the students to face the barriers of education and achieve the best grades. We acknowledge that students come from various educational backgrounds, therefore Merit Tutors, in a collaboration with Exam Centre London, calls out all candidates including home educators, distance learners, independent learners and others to join Merit Tutors to make their dreams more achievable. Our central aim is to provide all candidates, regardless of their background, a fair chance to access the best opportunities in all career paths. 
							</p>
                         <!--    <div class="who-we-are-btn">
                                <a href="{{ url('/assesment')}}" class="default-btn">Book Free Assessment</a>
                            </div> -->
                            <br>
                            <h4>Why should you take your exams with Exam Centre London?</h4>
                            <br>
                            
                                <p>1. An established Exam Centre, serving its community for many years</p>
                                <p>2. A JCQ approved examination centre</p>
                                <p>3. Experienced staff </p>
                                <p>4. Close to many transport hubs</p>
                                <p>5. Ranked as one of the top exam providers by many of our candidates </p>
                                <br>
                              <a href="https://examcentrelondon.co.uk/" class="default-btn">Visit our website</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="facilities-area pt-10 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12" style="padding-bottom: 30px;">
                            <h4 class="text-left">What qualifications can I achieve at Exam Centre London? </h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="">
                            <div class="facilities-content">
                                <p>Exam Centre London provides a wealth of examinations, suitable to all candidates. Starting from the well accredited qualification of Functional Skills to the national GCSEs and A Level exam. As a private candidate, we assure you that you will receive the best support and service, in a safe and welcoming environment.  Whilst English and Maths are the most common subjects, Exam Centre London offers a wide range of subjects including the Science Practical’s and the associated coursework with any exams. Whether you are sitting the exam for the first time or looking to improve your grades, Exam Centre London will be able to support you in this journey. </p>
                                
                                
                                <p>Exam Centre London is pleased to declare that we are providing exams from all exam boards, including AQA, Edexcel, OCR and WJEC, helping you achieve whichever qualification you are required to progress further. To ensure you have a stress-free experience, we take it on ourself to arrange any Science Practical endorsements or coursework that may be associated with your exams. Our primary focus is to provide everyone the opportunity to achieve their dreams in a welcoming and tranquil environment. </p>

<p><a style="color:red" href="https://examcentrelondon.co.uk">Click here</a> to browse through our qualifications to help you find the best and most suitable assessment options. </p>

<p>Unsure which qualification to opt for? Speak to our experienced advisors today on <span style="color:red">0208 616 2526</span>  and get clarification instantly!</p>

                            </div>
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
