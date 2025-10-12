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
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Tutor Guideline</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Tutor Guideline</li>
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
                                <h6>1. Register your interest as a tutor and create a profile </h6>
                              

                                <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/tutorsignup.PNG')}}" alt="image">
                                </div>
                                <br>
                                <br>
                                <h6>2. Once your profile is created, you can login and access your portal at any time from the ‘login’ tab on our website, located on the top right hand corner. </h6>
                                            
                                    
                                <h6>3. Tutors will be required to complete their profile:Select the option ‘Edit profile’ from the options and enter all personal details alongside all relevant lesson information.</h6>
                                  <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/edit.PNG')}}" alt="image">
                                </div>
                                <br>
                                <br>
                                
                                <!--image-->
                                <h6>4. Whilst all personal information will remain confidential, the following information will be made available to all potential students on the respected tutor’s profile</h6>
                                
                                <ul class="features-list">
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Headline 
                                    </li>
                                     <li>
                                        <i class='bx bx-check'></i>
                                        Full Name
                                    </li>
                                  
                                    
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Degree and University 
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        About me
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        About my sessions 
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                       Subjects 
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                       Experience 
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                       Availability 
                                    </li>
                                    <li>
                                        <i class='bx bx-check'></i>
                                        Hourly rate  
                                    </li>
                                       <li>
                                        <i class='bx bx-check'></i>
                                        Current/Completed University name and Degree
                                    </li>
                                </ul>
                                 <br>
                                <br>
                                <h6>5. See below of how this information will appear on the tutor’s profile:</h6>
                                <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/profile.PNG')}}" alt="image">
                                </div>
                                
                                <p>university course, which will be written under the Tutor’s name.</p>
                                
                                <br>
                                <br>
                                <h6>6. Travel distance is only applicable to home tutors. In this case, the city of the home tutor will be visible to help inform the scheduling of lessons.</h6>
                                
                                <br>
                                <br>
                                <h6>7.Once all the relevant information has been updated, the ‘Submit Now’ button must be
clicked to save all changes. </h6>
<br>
                                <br>
                                <h6>8. From the dashboard, select the option ‘Manage Subjects’ and enter all subjects that you
would like to teach using our drop down list. Please note that tutors must have achieved a
minimum grade A in the subject they would like to teach if not studying at degree level.</h6><br>
                                <br>
                                <h6>9. Tutors are highly encouraged to post a video, consisting of a short introduction about
themselves alongside how they would structure their sessions, tutors are recommended to
highlight any key points that may be appealing to students since this would be a
fundamental tool used by students to select a tutor of their choice. This can be uploaded
under the option ‘Video Presentation’.</h6>
<br>
                                <br>
 <h6>10. Videos must be uploaded using Vimeo; click the link which will open Vimeo.</h6><br>
                                <br>
                                <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/vemio.PNG')}}" alt="image">
                                </div>
                                <br>
                                <br>
                               <h6> 11. Join Vimeo by either creating an account for free or using your Google account.</h6>
                               <br>
                               <br>
                               <h6> 12. Once you’ve successfully created your account, select the option ‘New Video’ thereafter
                                    ‘Uplaod’ as shown below:</h6>
                                    
                                <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/vimeouploads.PNG')}}" alt="image">
                                </div>
                                <br>
                                    
                                   
                                <h6>13. Once the video has been uploaded successfully, select the option ‘Embed’ from the top right
                            hand corner and a link should load up. Copy this link (‘Copy Embed Code’) and paste this link
                            in your portal under ‘Video Presentation’:</h6>
                            <br>
                               <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/vimeoembed.PNG')}}" alt="image">
                                </div>
                            <br>
                                <h6>14. Once submitted, the video will be sent for
verification. You can track its progress under
‘Video Summary’.</h6><br>
                                <h6>15.Tutors will then be required to submit all academic certificates issued by the exam board.
 We are unable to accept any other types of certificates or emails containing results.
Tutors must only submit their GCSEs and A-Level certificates for the subjects they would like
to tutor. It is not necessary to upload the results for all the subjects. University Certificate must also be uploaded if applicable, otherwise for current undergraduates, a student
enrolment confirmation would be sufficient.</h6>
                                    
                                    
                                    <br>
                               <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/gcse.PNG')}}" alt="image">
                                </div>
                            <br>
                                    

                                <h6>16.Upload the remaining certificates in this manner. All uploaded certificates can be seen below
the ‘Verification Step Summary’. In the event an incorrect certificate has been uploaded,
tutors will be able to delete it under the option ‘Manage ‘and re-upload it for verification.</h6>
                    <h6>17.Upload the following verification documents:</h6>
                                <ul class="features-list">
                                    <li>
                                        <i class='bx bx-check'></i>
                                         Profile Image.
                                    </li>
                                      <li>
                                        <i class='bx bx-check'></i>
                                       Proof of ID (passport or driving licence). 
                                    </li>
                                      <li>
                                        <i class='bx bx-check'></i>
                                        Proof of address (Utility bill or bank statement- within the last 3 months).
                                    </li>
                                       <li>
                                        <i class='bx bx-check'></i>
                                        Updated CV 
                                    </li>
                                       <li>
                                        <i class='bx bx-check'></i>
                                       DBS Certification
                                    </li>
                                </ul>
                                <p>All documents must be uploaded in either a PDF or image format. The system will not
                                    accept any other formats.</p>
                                    <br>
                                    <br>
                                    <h6>18.Your profile will now be complete and will be sent automatically for verification. Merit
                                    Tutors will get in touch if we require any further information. Once all the verification checks
                                    have taken, your profile will go live on our site. You will receive an email confirming this
                                    change.</h6>
                                    
                                <br>
                                <h3>Lesson Request:</h3>
                                <h6>1. Students may contact you regarding any queries they may have before scheduling any
                                sessions. These messages can be accessed from your portal, under the section ‘My
                                Messages’. Tutors will be sent a notification via email when they receive a message and are
                                highly encouraged to respond to the query at their earliest convenience.</h6>
                                <br>
                                
                               
                                <h6>2. Lesson requests received are not confirmed until the tutor confirms. Lesson requests can be
                                viewed under ‘Student Request’ on your portal.
                                </h6>
                                <br>
                                <h6>3. Tutors will be able to view the request in greater detail by selecting the ‘view’ option under
‘Manage’. Based on the information provided, the tutor can either accept or reject the
lesson request.
                                </h6>
                                
                                
                                
                               <br>
                                <h3>Updating the Portal:</h3>
                                <p>
                                    All completed lessons must be logged on to the portal. This can be accessed under ‘Completed
Lessons’.
                                </p><br>
                                  <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/lessoncompleted.PNG')}}" alt="image">
                                </div>
                                
                                <br>
                                <h6>1. Complete the following page.</h6>
                                <br>
                                <h6>2. Click ‘Submit’ to save changes. This will be sent to the student to confirm the lesson. You will
be able to view its progress under the page ‘Completed Lessons’.
                                </h6>
                                <br>
                                <h6>3.The student will have three working days to confirm the lesson. If the lesson is not
confirmed within this time frame, the tutor can contact our Support Team via the
‘Notification’ tool on their portal.</h6>

                                <br>
                                <h6>4. Once the lesson is confirmed, the payment will be made available in your account which can
be withdrawn at the end of the month.</h6>

          <br>
                                <h3>Withdrawal Request:</h3>
                                <p>
                                   You must request for a withdrawal on your portal to receive your payment.
                                </p>
                                <br>
                                <h6>1. Select the option ‘Withdraw Payment’ from your portal and the following page should load:</h6>
                                <br>
                               
                                <div class="article-image">
                                   <img src="{{asset('frontend/tutorguidline/withdraw-amount.PNG')}}" alt="image">
                                </div>
                                <br>
                                <h6>2. Enter the details of your desired bank account that you would like us to transfer the funds
to.
                                </h6>
                                <br>
                                <h6>3.We will process your request at the end of the month and send you an email once the funds
have been transferred.</h6>

                                <br>
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