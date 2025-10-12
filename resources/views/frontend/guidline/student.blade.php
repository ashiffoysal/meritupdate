@extends('layouts.frontend')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">


<style>
.blog-details-desc .article-content h3 {
  
    color: #3de2e2;
}


.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #1b0238;
    /*font-family: "Catamaran", sans-serif;*/
    font-family: 'Dosis', sans-serif !important;
    font-weight: 800 !important;
}

h6 {
    font-size: 16px;
    font-weight: 600;
     font-family: 'Dosis', sans-serif !important;
}
p {
    

    font-weight: 200 !important;
    color:#000 !important;
}

</style>
<style>
.blog-details-desc .article-content h3 {
  
    color: #3de2e2;
}
h6 {
    font-size: 16px;
    font-weight: 600;
}
</style>
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Student Guideline</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Student Guideline</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-details-desc">
                    
                            <div class="article-content">
                                <h3>Creating a Profile:</h3>
                                <p>All students must create an account to contact a tutor or schedule a lesson.</p>
                                <h6>1. Create an account on our website </h6>

                                <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/studentsignupm.PNG')}}" alt="image">
                                </div>
                                <br>
                                <br>
                                <h6>2. Complete your profile by selecting the option ‘Edit Profile’, providing us with your personal
information alongside relevant information about your stage at education. A profile image
can also be uploaded. Please note that for students under the age of 18, we will require
contact details of the parent or guardian. </h6>
                                            
                         
                                <br>
                                <h6>3. Personal information such as address and contact number will be kept confidential unless
it’s a home lesson booking, in which case such details will be made available for the tutor.</h6>
    <br>
                                <h6>4. Students looking to book home tutoring lessons must upload the following verification
documents. Please note that you will not be able to use our services until the documents are
verified. The documents must be submitted in either a PDF or image format on their portal
under ‘Verification’:</h6>
                                <ul class="features-list">
                                    <li>
                                        <i class='bx bx-check'></i>
                                         Passport
                                    </li>
                                    
                                    <li>
                                        <i class='bx bx-check'></i>
                                         Proof of address (parent/guardian’s utility bill or bank statement)
                                    </li>
                                </ul>
                                <br>
                                <h6>
                                    Once submitted, your account will be verified in the next three to five working days. Once
verified, make use of our limited chat system and find the right tutor for yourself!
                                </h6>
                                <br>
                                <h3>Booking Lessons:</h3>
                                  <br>
                                <h6>
                                   1. Browse through our list of tutors and select your own tutor. Save any potential
tutors that you come across during your search by clicking the ‘Save’ button,
located on the left to the tutor’s name.
                                </h6>
                                 <br>
                                  <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/save.PNG')}}" alt="image">
                                </div>
                                 <br>
                                <h6>
                                   2. Use our filter option to filter down the tutors or search by subject.
                                </h6>   <br>
                                   <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/chat.PNG')}}" alt="image">
                                </div>
                                  <br>
                                <h6>
                                   3. You can access your list of saved tutors from your portal, under ‘Saved Tutors’.
                                </h6>
                               
                                <br>
                                <h6>
                                   4. Select the tutor(s) that you would like to schedule a lesson with.<br> Unsure about
the tutor? Message the tutor from their profile via our in-built SMS chat and
speak to them directly to see if they are able to help you.
                                </h6>
                             
                                <br>
                                
                                  <h6>
                                   5. Once you’ve selected the tutor, click the option ‘Schedule a Lesson’ and the
following page should load. Complete the lesson booking, entering the relevant
information:
                                </h6>
                                 <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/lessonschedule.PNG')}}" alt="image">
                                </div>
                                <br>
                                
                                
                                
                                
                                  <h6>
                                   6. Once the page is complete, proceed to payment. The system will automatically calculate the
total amount, based on the tutor’s hourly rate. Parent can either make the full payment or
pay for the first month. A promotional discount is also available which will be calculated
automatically; there is no need to enter any promotional codes.
                                </h6>
                                <br>
                                <ul class="features-list">
                                     <li>
                                        <i class='bx bx-check'></i>
                                        10% discount is in place for any lesson bookings over 20 hours
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                         15% discount is in place for any lesson bookings over 50 hours.
                                    </li>
                                    
                                   
                                </ul>
                                
                                <h6>7. Once the payment is made, a lesson request will be sent to the tutor. Tutors will have three
working days to either accept or reject the lesson. You will be notified of its process via
email. In the case the tutor in unable to take the session, the full payment will be refunded
within three to five working days.</h6>
                                <br>
                                <h3>Updating the Portal:</h3>
                                  <br>
                                <h6>1. Once a lesson is complete, it is necessary to update the portal within three working days of
the lesson. The tutor will send you a lesson complete request which you will be able to view
from your portal under ‘Lesson Complete Request’.</h6>
         <br>
                                <h6>2. Manage the appropriate lesson by confirming the lesson. You can view the lesson in more
details by clicking the ‘View’ Sign.</h6>
   <br>
                                         <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/requestlist.PNG')}}" alt="image">
                                </div>
                                <br>
                                   <h6>3.The portal will automatically update itself once the lesson is confirmed.</h6>
                                    
                                       <br>
                                   <h6>4.The portal will automatically update itself once the lesson is confirmed.</h6>

                                <p>For any other enquiries, please contact our Support Team on your profile or email us on
                                    <a style="color:red">info@merittutors.co.uk</a>.</p>
                               
                                
                            </div>
                             
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
        
@endsection