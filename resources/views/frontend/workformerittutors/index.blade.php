@extends('layouts.frontend')
@section('title', 'Work for merit tutors')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')

<style>
    body {
  font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  background-color: #fff;
  color: #000; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Poppins", sans-serif; }

a {
  -webkit-transition: .3s all ease;
  -o-transition: .3s all ease;
  transition: .3s all ease; }
  a, a:hover {
    text-decoration: none !important; }

.content {
  padding: 7rem 0; }

h2 {
  font-size: 3.5rem;
  font-weight: 700; }

h3 {
  font-size: 2rem;
  font-weight: 700; }

.form-control {
  border: none;
  border-bottom: 1px solid #d9d9d9;
  padding-left: 0;
  padding-right: 0;
  border-radius: 0; }
  .form-control:active, .form-control:focus {
    outline: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-color: #000; }

.btn, .form-control {
  height: 55px; }

form.border-right {
  padding-right: 6rem !important; }
  @media (max-width: 991.98px) {
    form.border-right {
      padding-right: 0 !important;
      border-right: none !important; } }

label.error {
  font-size: 12px;
  color: red; }

#message {
  resize: vertical; }

#form-message-warning, #form-message-success {
  display: none; }

#form-message-warning {
  color: #B90B0B; }

#form-message-success {
  color: #55A44E;
  font-size: 18px;
  font-weight: bold; }

.submitting {
  float: left;
  width: 100%;
  padding: 10px 0;
  display: none;
  font-weight: bold;
  font-size: 12px;
  color: #000; }

    
</style>
<style>
    #fancy-shape {
clear: both;
max-width: 100%;
display: block;
position: relative;
margin: 6% auto 0;
justify-content: center;
z-index: 2;
box-sizing: border-box;
}
.footer-fancy-shape {
clear: both;
overflow: hidden;
position: absolute;
left: 0;
bottom: 100%;
width: 100%;
margin-bottom: -2px;
direction: ltr;
}
.footer-fancy-shape[data-negative=false].footer-fancy-shape-bottom, .footer-fancy-shape[data-negative=true].footer-fancy-shape-top {
transform: rotate(180deg);
}
@media screen and (max-width:992px){
.footer-fancy-shape-bottom svg {
height: 105px;
}
}
.footer-fancy-shape-bottom svg {
width: calc(130% + 2.5px);
height: 125px;
}
.footer-fancy-shape .footer-fancy-shape-fill {
fill: #5b86e5;
width: calc(100% + 2.5px);
transform: rotateY(0deg);
-webkit-transform-origin: center;
transform-origin: center;
transition: all .5s ease;
}
.footer-fancy-shape svg {
z-index: -1;
display: block;
position: relative;
left: 50%;
transform: translateX(-50%);
-webkit-transform: translateX(-50%);
-ms-transform: translateX(-50%);
}
@media screen and (max-width: 992px) {
.footer-fancy-shape-bottom svg {
height: 105px;
}
}
@media screen and (max-width: 768px) {
.footer-fancy-shape-bottom svg {
height: 85px;
}
}
@media screen and (max-width: 480px) {
.footer-fancy-shape-bottom svg {
height: 55px;
}
}


p {
    font-family: fangsong !important;
    font-size: 18px  !important;
    color: #000030;
}

.privacy-policy-accordion .accordion .accordion-title {
 
    font-family: 'boxicons' !important;
}

.who-we-are-list li {
    list-style: circle;
    color: #000;
    font-family: monospace;
    line-height: 24px;
}
h3.mb-5 {
    font-size: 19px;
    background: #2f8320;
    padding: 15px 21px;
    color: #fff;
    border-radius: 11px;
}

level.form-label.myeducation {
    background: aliceblue;
    font-family: 'Catamaran';
    padding: 10px 10px;
    margin: 20px 0px;
    border-radius: 15px;
}
body{
    font-family: fangsong !important
}

.who-we-are-list li {
    list-style: circle;
    color: #000;
    font-family: emoji;
    line-height: 24px;
    font-size: 18px;
}
</style>

<div id='fancy-shape'>
<section class='footer-fancy-shape footer-fancy-shape-bottom' data-negative='false'>
<svg preserveAspectRatio='none' viewBox='0 0 1000 100' xmlns='http://www.w3.org/2000/svg'>
<path class='fancy-shape1 footer-fancy-shape-fill' d='M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z' opacity='0.33'/>
<path class='fancy-shape2 footer-fancy-shape-fill' d='M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z' opacity='0.66'/>
<path class='fancy-shape3 footer-fancy-shape-fill' d='M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z'/>
</svg>
</section>
<div id='bf-fancy-icon'>
<div class='footer-shape footer-fancy-logo' data-negative='false'>
</div>
</div>
</div>



  <div class="content">
    
    <div class="container">

      
      <div class="row justify-content-center">
        <div class="col-md-10">
          
          <div class="row align-items-center">
              
              <div class="col-lg-12 ml-auto">
              <h3 class="mb-4">Work For Merit Tutors.</h3>
              
              <p>Are you someone who thrives in a vibrant and enjoyable work atmosphere while also making a positive impact on the lives of children? If so, Merit Tutors invites you to become a part of our dedicated family of tutors.
At Merit Tutors, we believe in creating an exceptional work environment that fosters personal and professional growth. We recognize and reward your hard work with a host of benefits designed to ensure your job satisfaction:
</p>
              
              
              
            </div>
            
            <div class="col-lg-12 ml-auto mt-5">
                    <div class="col-md-12">
                        
                        <div class="privacy-policy-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        Why join us
                                    </a>

                                    <div class="accordion-content show" style="display: none;">
                                        
                                        
                                        <ul class="who-we-are-list">
                                            <li>Supportive Team: We're committed to your success in education.</li>
                                            <li>Retention Bonus: Rewarding dedication to our mission.</li>
                                            <li>Competitive Pay: Reflecting your performance.</li>
                                            <li>Impactful Work: Shape the future of young minds.</li>
                                        </ul>
                                        <p>Seeking tutors who are:</p>
                                         <ul class="who-we-are-list">
                                            <li>Bubbly: Infectious enthusiasm.</li>
                                            <li>Enthusiastic: A passion for education.</li>
                                            <li>Dedicated: Committed to child growth.</li>
                                        </ul>
                                        
                                        <p>Join us in making a real difference. Contact us to start your rewarding journey. We welcome diverse educators.</p>
                                        










                                    </div>
                                </li>
                                
                              
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                       
                        <div class="privacy-policy-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        Qualifications and Criteria
                                    </a>

                                    <div class="accordion-content show" style="display: none;">
                                      
                                       <ul class="who-we-are-list">
                                            <li> Qualified Teachers: We value experienced educators who bring a wealth of knowledge and teaching expertise to our team. If you are a qualified teacher with a teaching degree or relevant teaching certifications, we encourage you to apply.</li>
                                            <li>Fresh Graduate Teachers: Recent graduates with a degree in education or a related field are also welcome to join us. We understand that fresh perspectives and innovative approaches can greatly benefit our students.</li>
                                            <li>University Students: At Merit Tutors, we believe in nurturing young talents. We especially invite bright and motivated university students, with a particular emphasis on those attending Russell Group universities, to join our team. Your enthusiasm, dedication, and academic excellence are highly valued.</li>
                                            <li>Academic Excellence: Regardless of your educational background, we require all applicants to have excellent results in both GCSE and A-level examinations. We believe that academic excellence sets a strong foundation for effective teaching and mentorship.</li>
                                        </ul>
                                        
                                        
                                       




                                   </div>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                      <br>
                    <div class="col-md-12">
                       
                        <div class="privacy-policy-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="bx bx-plus"></i>
                                        Application Process:
                                    </a>

                                    <div class="accordion-content show" style="display: none;">
                                        
                                        <p>Applying to join the Merit Tutors team is a simple and straightforward process:</p>
                                        
                                           <ul class="who-we-are-list">
                                            <li>Complete the Application: Begin by completing our user-friendly application form. Provide details about your educational background, teaching experience (if applicable), and any relevant qualifications or certifications.</li>
                                            <li>Submit Your Application: Once you've filled out the application, submit it online through our website. Rest assured that your information will be handled confidentially.</li>
                                            <li>Review and Response: Our team will carefully review your application, considering your qualifications and alignment with our criteria. We aim to respond to applicants as soon as possible to inform you of the next steps.</li>
                                            <li>Interview and Assessment: If your application meets our criteria, one of our managers will reach out to schedule an interview or assessment. This may include a discussion of your teaching philosophy, a demonstration of your teaching skills, or a personal interview</li>
                                            <li>Onboarding: Successful candidates will receive onboarding and training to familiarize themselves with our teaching methodologies and curriculum.</li>
                                        </ul>
                                        <p>At Merit Tutors, we believe in providing equal opportunities to all qualified individuals who share our commitment to education. If you meet our criteria and are eager to make a meaningful impact in the lives of children, we encourage you to apply today. Join us on this exciting journey of teaching, learning, and making a difference in the world of education.</p>
                                    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                 
                   
                
              
           
           
            </div>
            
            
            <div class="col-lg-12 mt-5 mb-5 mb-lg-0">

              <h3 class="mb-5">Apply Form</h3>
            <form action="{{ url('work-for-merit-tutors') }}" class="border-right pr-5 mb-5" method="post" id="" name="" enctype='multipart/form-data'>
                @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="last_name" id="lname" placeholder="Last Name*" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number*" required>
                  </div>
                </div>
                 <div class="row">
                  
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" name="age" id="age" placeholder="Age*" required>
                  </div>
                  <div class="col-md-6 form-group">
                    <select  class="form-control" name="gender">
                        <option disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                
                 <div class="row mt-5">
                  <div class="col-md-12 form-group">
                    <label for="exampleInputEmail1" class="form-label">In which section do you want to apply?</label>
                      
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="section" id="Teacher"  onchange="changesection()" value="Teacher">
                          <label class="form-check-label" for="teacher">
                            Teacher
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="section" id="Admin" checked onchange="changesection()" value="Admin" >
                          <label class="form-check-label" for="Admin" >
                            Admin
                          </label>
                        </div>
                  </div>
                </div>
                  
                 <div class="row mt-5" id="subject_information" style="display:none">
                  <div class="col-md-12 form-group">
                   
                        <input type="text" class="form-control" name="subject" placeholder="Which subject you want to teach?">
                  </div>
                </div>
                
                <div class="row mt-5">
                  <div class="col-md-12 form-group">
                    <label for="exampleInputEmail1" class="form-label">Which Merit Tutors centre are you applying for?</label>
                      
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="branch" id="flexRadioDefault1" value="Forest Gate">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Forest Gate Branch
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="branch" id="flexRadioDefault2" checked value="Ilford Lane">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Ilford Lane Branch
                          </label>
                        </div>
                  </div>
                </div>
                 <div class="row mt-5" id="subject_information" style="margin:10px 0px">
                  <div class="col-md-12 form-group">
                        <!--<level class="form-label myeducation">Educational Information</level>-->
                  </div>
                  <div class="col-md-12 row">
                          <div class="row mb-5">
                            <div class="col-md-4">
                                 <label for="exampleInputEmail1" class="form-label">Exam Type</label>
                                 <input type="text" name="exam_type[]" class="form-control" placeholder="GCSE / A Level">
                            </div>
                            <div class="col-md-4">
                                 <label for="exampleInputEmail1" class="form-label">Result</label>
                                 <input type="text" name="result[]" class="form-control">
                            </div>
                            <div class="col-md-4">
                                 <label for="exampleInputEmail1" class="form-label">Marksheet/Certificate</label>
                                 <input type="file" name="marksheet[]" class="form-control">
                            </div>
                          </div></br>
                       
                        <div class="col-md-12" id="add_more_section">
                            
                        </div>
                        
                        <div class="col-md-12 mt-5 text-right"><button type="button" onclick="add_more()" class="btn-sm btn-success">Add More</button></div>
                        
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-12 form-group">
                       <label for="cv" class="form-label">Updated CV*</label>
                       <input type="file" class="form-control" name="cv" id="cv" required accept="application/pdf">
                  </div>
                </div>
               
                 <div class="row">
                  <div class="col-md-12 form-group">
                       <label for="DBS" class="form-label">DBS *</label>
                       <input type="file" class="form-control" name="dbs" accept="image/*">
                  </div>
                  
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                       <label for="photo_id" class="form-label">Photo ID *</label>
                       <input type="file" class="form-control" name="photo_id" id="photo_id" placeholder="" accept="image/*" required>
                   </div>
                </div>
               
                


                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write about yourself in 500 words *"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 mt-5">
                    <button type="submit"  class="btn btn-primary rounded-0 py-2 px-4">SUBMIT</button>
                    <span class="submitting"></span>
                  </div>
                </div>
              </form>

              <div id="form-message-warning mt-4"></div> 
              <div id="form-message-success">
                Your message was sent, thank you!
              </div>

            </div>
            
          </div>
        </div>  
        </div>
      </div>
  </div>


<script>
    function changesection(){

            
      $("#Admin").click(function(){
         $('#subject_information').hide();
        });
        $("#Teacher").click(function(){
           $('#subject_information').show();   
        });
           
    }
    
    
    function add_more(){
        $("#add_more_section").append('<div class="row"><div class="col-md-4"><label for="exampleInputEmail1" class="form-label">Exam Type</label><input type="text" name="exam_type[]" class="form-control" placeholder="GCSE / A Level"></div><div class="col-md-4"><label for="exampleInputEmail1" class="form-label">Result</label><input type="text" name="result[]" class="form-control"></div><div class="col-md-4"><label for="exampleInputEmail1" class="form-label">Marksheet/Certificate</label><input type="file" name="marksheet[]" class="form-control"></div></div></br>')
    }
</script>

@endsection