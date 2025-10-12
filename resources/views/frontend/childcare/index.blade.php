@extends('layouts.frontend')
@section('title', 'Childcare with Tuition in East London – OFSTED Registered | Merit Tutors')
@section('meta_description','Looking for trusted childcare with tuition support in East London? Merit Tutors offers OFSTED-registered childcare services alongside expert KS1–GCSE tutoring. Safe, structured, and educational.')
@section('content')
<style>
    .cp_ountdown_single {
    width: 200px;
    min-height: 200px;
    padding: 60px 40px 10px 40px;
    }
.cp_ountdown_single h3 {
    font-size: 23px;
    line-height: 50px;
}
button.btn.mybutton.btn-success {
    background: #FF6775;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 16px;
    border: none;
    font-weight: 700;
}
</style>
        <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                	<span class="banner_span">Child Care Centre</span>
                                    <h1>Merit Tutors  <span>Child  <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>Care Centre</h1>
                                    <p>Besides offering quality education by our Ofsted registered tutors, Merit Tutors is also an Ofsted Registered Childcare centre. This is ideal for you if you are based in East London, because we are situated in Forest Gate in the borough of Newham. Are you a single parent or a parent in full-time work/education in East London? Our Ofsted Registered Childcare services will enable you to leave your child in our safe care while you are able to continue your work/study life. Furthermore, we are aware and sensitive of the fact that you may need urgent childcare. That is why there is no limit of availability of our services. We are open all year round to ensure your child is in a safe and caring place whilst you are busy with your own demands. In addition to this, you may be provided with extra funds to improve the quality of you and your child’s life. If you have any concerns, feel free to give us a call or visit us. We look forward to hearing from you.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/assessment') }}" class="btn_style">Book a Free Assessment</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_right">
                                <img src="{{ asset('frontend/update-design') }}/assets/images/about/about.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Banner Section  ================-->

        <!--================  Start Our-Services Section  ================-->
        <section class="our_services_main our_story_main" id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_service">
                            <div class="default_title">
                                <div class="default_title_left">
                                    <h2>At Merit  <span>Tutors <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""><br>Centre</h2>
                                </div>
                                <div class="default_tite_right">
                                    <p>We have met basic standards designed to safeguard children.</p>
<p>Our premises, equipment and care provision is safe and suitable.</p>
<p>Local authorities offer us support and can pass on our details to those seeking childcare.</p>
<p>All staff with unsupervised access to children have undergone a Disclosure and Barring Service (DBS) (previously called the Criminal Records Bureau (CRB) check).</p>
<p>At least one staff member has had First Aid training.</p>
<p>At least one staff member has had appropriate training regarding the Common Core Skills.</p>
<p>We can accept Childcare Vouchers.</p>
<p>Parents may be eligible for help with fees under the Working Tax Credit arrangements</p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png" alt=""></div>
            <div class="section_shape2"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png" alt=""></div>
        </section>
        <!--================  End Our-Services Section  ================-->
        <section class="what_make_us_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="what_make_us">
                            <div class="default_title_2nd">
                                <h2>Child <span> Care  <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span></h2>
                            </div>
                            <div class="what_make_us_contents">
                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent1.png" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4><span>Child Care Vouchers,</span></h4>
                                        <p>We are pleased to announce that parents with children at Merit Tutors can take advantage of savings on fees through Childcare Vouchers and Working Tax Credit. Parents can also now effectively increase the number of hours of tuition that their child undertakes for the same amount of money allowing them to give their child that extra boost that keeps them at the top of the class</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>
                                <div class="what_make_us_single" >
                                    <div class="what_make_us_single_text" style="max-width: 100% !important">
                                        <h4><b>Help with Fees via </b>Childcare Vouchers</h4>
                                        <p>Childcare Vouchers are a form of ‘employer supported childcare,’ a popular scheme which an increasing number of employers are adopting. This scheme works via salary sacrifice where an employer pays the employee partially in the form of Childcare vouchers up to a value of £243 per month. These Vouchers are both tax and National Insurance free, thus greater in value than the cash equivalent, and can be used to pay for approved services. As Merit Tutors is a registered childcare provider, these Vouchers can be used here. It may be possible for you to save up to £933 per year as a basic rate taxpayer and up to £623 (£1,225 if you joined the scheme on 5th April 2011 or before) per year as a higher rate taxpayer* . Moreover, both parents can receive Childcare Vouchers from their respective employer to use towards the tuition fees and therefore double the saving. The only requirement for you to take advantage of this scheme is that your child is aged 15 or under and that your employer is signed up to be part of it.</p>
<p>* correct as of 6th April 2011</p>
<p>There are a wide range of these schemes currently running operated by a variety of different providers. www.childcarevouchers.co.uk </p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                   
                                </div>


                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_img">
                                        <img src="{{ asset('frontend/update-design') }}/assets/images/about/dirrerent3.png" alt="">
                                    </div>
                                    <div class="what_make_us_single_text">
                                        <h4><span>Help With Fees via Working Tax Credit<span></h4>
                                        <p>At Merit Tutors, parents may be able to get up to 70% of their fees reimbursed! This means our services can become accessible to those who might not have previously been able to afford it, and guarantees parents can give their children the best education possible without worrying about the financial implications. For you to be eligible to receive the Childcare Element of Working Tax Credit should you enrol your child at Merit Tutors, you need to be working 16 hours or more a week. If you are part of a couple, you both need to be working 16 hours or more a week. You can only claim childcare costs for any child up to the Saturday following 1st September after their 15th birthday.</p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                    </div>
                                </div>

                                <div class="what_make_us_single">
                                    <div class="what_make_us_single_text" style="max-width: 100% !important">
                                        <span class="banner_span">Pricing Detrails</span>
                                        <h4><b>The maximum amount of help you may receive is as follows*</b></h4>
                                        
                                                 <table class="table" style="margin: 50px 0px; padding:50px">
                                                <thead class="thead-dark">
                                                    <tr>
                                                    <th scope="col">Number of children</th>
                                                    <th scope="col">Weekly limit on costs</th>
                                                    <th scope="col">Percentage of costs you can get help with</th>
                                                    <th scope="col">Maximum tax credits for childcare</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">One child</th>
                                                        <td>£175</td>
                                                        <td>70%</td>
                                                        <td>£175 x 70% = £122.50</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Two or more children</th>
                                                        <td>£300</td>
                                                        <td>70%</td>
                                                        <td>£300 x 70% = £210</td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                               <p>For further information, guidance and to ensure that you have the very latest information, please see <a href="http://www.hmrc.gov.uk​"> http://www.hmrc.gov.uk​. </a> You may find leaflet WTC5 (Working Tax Credit – Help with the costs of childcare, 6th April 2011: A guide explaining help with the costs of childcare for parents) particularly helpful. Click the following link to view <a href="http://www.hmrc.gov.uk/leaflets/wtc5.pdf​">  http://www.hmrc.gov.uk/leaflets/wtc5.pdf </a></p>
                                        <div class="wmust_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-different.png" alt=""></div>
                                    </div>
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================  Start (Faqs) Section  ================-->
        @include('frontend.include.faq')
        <!--================  End (Faqs) Section  ================-->

        <!--================  Start (Join our Newsletter) Section  ================-->
        @include('frontend.include.newslatter')
        <!--================  End (Join our Newsletter) Section  ================-->
@endsection