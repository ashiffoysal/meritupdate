@extends('layouts.frontend')
@section('title', 'Apps')
@section('content')
<style>
.page-banner-area {
    padding-top: 50px;
    padding-bottom: 50px;
}
li{
    font-family: emoji;
    font-size: 20px;
    font-weight: 500;
    color: #000;
}

p{
    font-family: emoji;
    font-size: 20px;
    font-weight: 500;
    color: #000;
}
img.mypalystore {
    height: 40%;
}
</style>
    <!-- Start Page Banner -->
   
    <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Apps</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Apps</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
        
                <!-- Start Blog Area -->
        <section class="blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Welcome to the Merit Tutors App</h2>
                        <p style="font-family: emoji;
    font-size: 20px;
    font-weight: 500;
    color: #000;">Your one-stop solution for managing your child's educational journey with ease and efficiency. We understand the importance of education and the role parents and students play in achieving academic excellence. Our app is designed to streamline the entire tuition experience, ensuring that parents and students can focus on learning, growth, and success. With features like "Manage Your Tuition," "Counsel Your Children," "Manage Your Payments," and "Manage Your Lessons," the Merit Tutors App is here to make your academic life easier and more productive.</p>
                    </div>
                    <div class="col-md-12 mt-5 text-center">
                    
                      <a href="https://play.google.com/store/apps/details?id=com.merittutors.ecl"><img src="{{asset('frontend/apps.PNG')}}" class="myplaystore"></a> 
                      
                    </div>
                </div>
            </div>
        </section>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                    <h2>Manage Your Tuition</h2>
                    <p>Our "Manage Your Tuition" feature is your personal dashboard for all things related to your child's tuition. Here's how it benefits you:</p>
                    <ul>
                        <li>Easy Enrollment: Register for courses and select your preferred tutors effortlessly.</li>
                        <li>Timetable Management: Access your child's class schedule and important dates.</li>
                        <li>Attendance Tracking: Monitor your child's attendance and receive instant notifications for any missed classes.</li>
                        <li>Announcements: Stay updated with important announcements and news from Merit Tutors.</li>
                    </ul>
            </div>
           
        </div>
        <div class="row">
            <div class="col-md-8">
                <h2>Counsel Your Children</h2>
                <p>We believe in the power of communication between parents, students, and tutors. With the "Counsel Your Children" feature, you can:</p>
                <ul>
                    <li>Direct Messaging: Easily communicate with your child's tutor for progress updates, concerns, or questions.</li>
                    <li>Performance Reports: Access detailed performance reports to understand your child's strengths and areas that may need improvement.</li>
                    <li>Goal Setting: Collaborate with tutors to set academic goals and track your child's progress towards achieving them.</li>
                </ul>
             </div>
             
        </div>
         <div class="row">
            <div class="col-md-8">
                <h2>Manage Your Payments</h2>
                <p>Financial management made hassle-free with our "Manage Your Payments" feature:</p>
                <ul>
                    <li>Transparent Billing: View and download invoices for tuition fees and additional charges.</li>
                    <li>Payment Reminders: Receive timely payment reminders to avoid late fees.</li>
                    <li>Secure Payments: Make tuition payments directly through the app for added convenience and security.</li>
                </ul>
                  </div>
          
        </div>
     
    <div class="row">
            <div class="col-md-8">
        <h2>Manage Your Lessons</h2>
        <p>Effortlessly manage your child's lessons and assignments with this feature:</p>
        <ul>
            <li>Lesson Materials: Access course materials, homework, and study resources.</li>
            <li>Assignment Submission: Submit assignments and track progress.</li>
            <li>Calendar Integration: Sync lesson dates and deadlines with your personal calendar for better time management.</li>
        </ul>
        
            </div>
             
        </div>
    </div>
    
    
    
    
    
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Conclusion:</h2>
                    <p>
The Merit Tutors App is committed to making the academic journey smoother for both parents and students. By providing a comprehensive platform for managing tuition, facilitating communication, handling payments, and accessing course materials, we empower you to actively participate in your child's education.

Download the Merit Tutors App today and embark on a journey towards academic excellence. Together, we can nurture young minds and pave the way for a brighter future.</p>
                </div>
                <div class="col-md-12 row mt-2">
                    <!--<div class="col-md-6 text-right" style="text-align: end;">-->
                    <!--  <a href="#"> <img class="mypalystore" src="{{ asset('frontend/google-play.png') }}"></a> -->
                    <!--</div>-->
                    <div class="col-md-6 text-left" style="text-align: start;">
                         <a href="https://apps.apple.com/fi/app/merit-tutors/id6451216454"> <img class="mypalystore" src="{{ asset('frontend/apple-app-store-logo.jpg') }}"></a> 
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
        <!-- End Blog Area -->

@endsection