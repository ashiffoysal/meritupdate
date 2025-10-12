@extends('layouts.frontend')
@section('title', '2024 Summer Maths Competition')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')
<style>
    .page-banner-area {
    padding-top: 30px !important;
    padding-bottom: 30px !important;
}

p {
    margin-bottom: 15px;
    line-height: 1.8;
    color: #000000;
    font-weight: 400;
    font-family: "Roboto", sans-serif;
    font-size: 18px;
}

.who-we-are-content span {
    font-size: 20px;
    color: #ea512e;
    font-weight: 600;
    font-family: emoji;
}

span.mycolor {
    color: #fb2525 !important;
}



.who-we-are-content h3 {
    font-size: 36px !important;
    margin-top: 10px !important;;
    margin-bottom: 10px !important;;
}
</style>
       
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>2024 Summer Maths Competition</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>2024 Summer Maths Competition</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
              <!-- Start Choose Area -->
        <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    
                    <div class="col-lg-12">
                        <div class="who-we-are-content">
                           <a href="{{url('summer-school-application')}}">   <img src="{{ asset('frontend/summerschoolimg/mathscompetition.jpg') }}"></a>
                        </div>
                    </div>
                    
                    
                    <div class="col-lg-12">
                        <div class="who-we-are-content">
                            <h3>2024 Summer Maths Competition</h3>
                            <br>
                            <p>Welcome to the 2024 Summer Maths Competition, brought to you by Merit Tutors! This thrilling event aims to ignite a passion for mathematics in young learners. Whether you're a math enthusiast or seeking to sharpen your skills, this competition offers a fantastic chance to test your skills and win incredible prizes. Sign up now to receive our exclusive Maths book bundle!
                            </p>
                
                            <br>
                            
                            
                            
                            
                            <br>
                            <h3>Competition Details:</h3>
                            <br>
                            
                                <p><span>1.Dates:</span> The competition will run from July 1st, 2024 to August 31st, 2024</p>
                                <p><span>2.Eligibility:</span> Open to all students from ages 7 to 16.</p>
                                <p><span>3.Categories:</span> 
                                Open to all students from
                                <ul>
                                    <li style="font-weight: 800;
    font-size: 20px;">Ages 7 to 16</li>
                                    <li style="font-weight: 800;
    font-size: 20px;">Ages 11 to 13</li>
                                    <li style="font-weight: 800;
    font-size: 20px;">Ages 14 to 16</li>
                                </ul>
                              
                                </p>
                                
                                <h3>Test Date</h3>
                            <ul>
                                    <li style="color:red;font-weight: 800;
    font-size: 20px;">The final test will be held at our centre on August 20th, 2024.</li>
                                    <li style="color:red;font-weight: 800;
    font-size: 20px;">Student entry at 10:30 AM.</li>
                                    <li style="color:red;font-weight: 800;
    font-size: 20px;">Test starts at 11:00 AM.</li>
    <li style="color:red;font-weight: 800;
    font-size: 20px;">Test duration: 1 hour.</li>
                                </ul>
                           
                                
                                
                             <br>
                          
                        
                          <h3>Prizes:</h3>
                                   <ul>
                                       <li style="font-weight: 800;font-size: 20px;"><span> First Prize:</span> iPad.</li>
                                       
                                        <li style="font-weight: 800;font-size: 20px;"><span>Second Prize:</span> £100 cash.</li>
                                        
                                           <li style="font-weight: 800;font-size: 20px;"><span>Third Prize:</span> £50 Amazon voucher.</li>
                                            <li style="font-weight: 800;font-size: 20px;"><span>Exclusive Maths Book Bundle:</span> All participants will receive our exclusive maths book bundle to help them prepare and excel in the competition.</span></li>
                                    </ul>
                         
                                 <h3>Why Participate:</h3>
                        
                                <p><span>- Enhance Your Skills:</span> Improve your problem-solving and critical thinking abilities.</p>
                                <p><span>- Get Recognized:</span> Showcase your talents and earn recognition.</p>
 <p><span>- Win Prizes:</span> Compete for a chance to win an iPad, £100 cash, or a £50 Amazon voucher.</p>
 <p><span>- Exclusive Maths Book Bundle:</span> Register now and receive our exclusive maths book bundle to help you prepare and excel in the competition.</p>
 <p><span>- Have Fun:</span> Enjoy a summer filled with engaging and educational math challenges.</p>

                              
                              <h3>How to Participate:</h3>
                        
                                <p style="color:red">To participate in our Summer Maths Competition, please visit the following link and fill out your details.</p>
                                <br>
                            
                            <a href="{{url('summer-school-application')}}" class="default-btn">Summer Maths Competition  Application</a>
                         
                       
                               
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        
        


        
        
        
        
        
        

@endsection