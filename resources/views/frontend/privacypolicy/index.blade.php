@extends('layouts.frontend')
@section('title', 'Privacy Policy | How Merit Tutors Protects Your Data')
@section('meta_description','Learn how Merit Tutors collects, stores, and protects your personal data. Read our privacy policy to understand your rights and how we ensure your information is secure.')
@section('content')
  <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                    
                                <div class="banner_left_contents">
                                	<span class="banner_span">Privacy Notice</span>
                                    <h1>Merit Tutors
                                        <span>Privacy <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>Policy</h1>
                                    <p>At Merit Tutors, we are committed to protecting your personal data. This Privacy Notice explains how we collect, use, and safeguard your information—whether you are a student, parent/guardian, or prospective tutor.</p>
                                    <p>We reserve the right to update or amend this notice at any time without prior notification. Any changes will be posted on this page. We encourage you to review this notice regularly to stay informed about how we protect your information.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/contact') }}" class="btn_style">Contact Us</a>
                                    </div>
                                </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Banner Section  ================-->
        <!--================  Start (What Makes Us Different?) Section  ================-->
        <section class="what_make_us_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="what_make_us">
                            <div class="default_title_2nd">
                                <h2>Who  <span> We   <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span> Are?</h2>
                            </div>
                            <div class="what_make_us_contents">
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/1.webp" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4>Indroduction</h4>
                                        <p>Merit Tutors Limited is a private tuition centre based in East London. We are dedicated to safeguarding the privacy and security of any personal data collected during the course of our operations.For any inquiries related to this Privacy Notice or the handling of your personal information, you can contact us at: <a href="mailto:{{ $companyInformation->email }}"> {{ $companyInformation->email }}</a>.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                        
                                        <h4>How We <span> Collect Your Information </span></h4>
                                        <p>We may collect and process personal data about you through the following methods:</p>
                                        <ul>
                                            <li>When you complete forms on our website.</li>
                                            <li>When you apply for or participate in one of our programmes.</li>
                                            <li>Through direct communication with us via telephone, post, email, or other means.</li>
                                            <li>Through CCTV footage recorded at our premises, used solely for security and safety purposes.</li>
                                        </ul>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/2.webp" alt="">
                                    </div>
                                </div>
                                <div class="what_make_us_single">
                                    {{-- <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/howitworks/admission-procedure-step-3.png" alt="">
                                    </div> --}}
                                        <div class="what_make_us_single_text">
                                            <h4><span>What Type of Information  </span>We Collect and Why</h4>
                                        </div>
                                        <table>
                                                <thead>
                                                    <tr>
                                                        <th>Type of Information</th>
                                                        <th>Purpose</th>
                                                    <tr>
                                                <thead>
                                                <tbody>
                                                     <tr>
                                                        <td>Student/Guardian’s name, address, email, and telephone number</td>
                                                        <td>To enable effective communication with the student and/or their parent or guardian.</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Details of educational institution attended by the student, including performance reports</td>
                                                        <td>To provide tutors with relevant academic background to support the student’s learning needs.</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Tutor’s name, address, email, and telephone number</td>
                                                        <td>To facilitate direct communication with the tutor.</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Tutor’s identification documents, proof of address, qualifications, references, and enhanced DBS</td>
                                                        <td>To verify the tutor’s identity, qualifications, and ensure compliance with safeguarding standards.</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Tutor’s bank details</td>
                                                        <td>To process payments securely and efficiently to the tutor.</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Communication history, including messages and requests</td>
                                                        <td>To maintain accurate records and ensure effective communication with the Merit Tutors team.</td>
                                                    <tr>
                                                </tbody>
                                        </table>
                                       
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    {{-- </div> --}}
                                </div>
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                          {{-- <span class="banner_span">Step 4</span> --}}
                                        <h4><b>How We Use  </b> Your Information</h4>
                                        <p>We use your information to support our legitimate interests in marketing our website and services, which may include:</p>
                                        <ul>
                                            <li>Promoting our services to registered users.</li>
                                            <li>Notifying you about upcoming promotions, discount codes, or customer surveys.</li>
                                            <li>Conducting research to better understand our customers’ interests.</li>
                                            <li>Analysing interactions to improve the effectiveness of our marketing efforts.</li>
                                          
                                        </ul>
                                         <p>Merit Tutors may contact you by post or telephone to share relevant information or offers.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/4.webp" alt="">
                                    </div>
                                </div>

                                  <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/3.webp" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4>Who Has Access to Your Information?</h4>
                                        <p><span class="myColor">Students:</span> Your personal information may be accessed by tutors in order to provide you with relevant services and communications.

<span class="myColor">Tutors: </span>Certain information you provide (e.g. name, university details, profile picture, grades, and reviews) may be publicly visible to users browsing the site.

<span class="myColor">Messaging Monitoring:</span> Messages exchanged between users may be monitored by Merit Tutors to uphold safeguarding responsibilities and protect our legitimate interests.

<span class="myColor">Marketing Communication:</span> Merit Tutors may contact you by post or telephone regarding offers or important information.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>

                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                          {{-- <span class="banner_span">Step 4</span> --}}
                                        <h4><b>How We Protect </b>  Your Personal Data </h4>
                                        <p>We process your personal data only as necessary and in accordance with this policy. Our practices include:</p>
                                        <ul>
                                            <li>Ensuring all stored data is accurate and up to date.</li>
                                            <li>Correcting or destroying outdated or inaccurate data promptly.</li>
                                            <li>Retaining data only for as long as necessary to meet legal and operational requirements.</li>
                                            <li>Safely deleting or erasing data once no longer needed.</li>
                                            <li>Never selling or sharing your personal data with third parties without your prior consent, except as required by law.</li>
                                          
                                        </ul>
                                        
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/4.webp" alt="">
                                    </div>
                                </div>


                                 <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/5.webp" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4>When Might We Disclose Your Data?</h4>
                                        <p>We may disclose your personal data when necessary, including:</p>
                                         <ul>
                                            <li>To professional advisers.</li>
                                            <li>To relevant staff members within our organisation.</li>
                                            <li>To third-party programme delivery providers (e.g. for DBS checks)</li>
                                            <li>To obtain pre-employment references</li>
                                        </ul>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>

                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                          {{-- <span class="banner_span">Step 4</span> --}}
                                        <h4><b>Data Retention </b></h4>
                                        <p>We retain your personal data for varying periods depending on the service you use. By default, your data will be stored only as long as reasonably necessary to demonstrate compliance with our legal and contractual obligations.We review stored personal data annually to determine whether it is still required. If it is no longer needed, we will stop processing and delete it accordingly.</p>
                                        
                                        
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/6.webp" alt="">
                                    </div>
                                </div>

                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/7.webp" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4>Your Rights</h4>
                                        <p>You have the following rights regarding your personal data held by Merit Tutors:</p>
                                         <ul>
                                            <li>To access the personal data we hold about you.</li>
                                            <li>To be informed about how your data is processed.</li>
                                            <li>To request correction of inaccurate or incomplete data.</li>
                                            <li>To request deletion of your data under certain circumstances.</li>
                                            <li>To request the transfer of your data to another organisation.</li>
                                            <li>To object to or restrict the processing of your data.</li>
                                            <li>To file a complaint regarding how your data is being processed.</li>
                                        </ul>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>

                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text">
                                          {{-- <span class="banner_span">Step 4</span> --}}
                                        <h4><b>Complaints or Queries</b></h4>
                                        <p>Merit Tutors is committed to maintaining the highest standards in the handling of personal data. If you have concerns about how we collect or use your information, please let us know. We welcome feedback and suggestions on how we can improve our processes.</p>
                                    
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/privacypolicy/8.webp" alt="">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.include.newslatter')
@endsection

