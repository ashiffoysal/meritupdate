<!doctype html>
<html lang="zxx">
    <head>
         @yield('meta')
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
       
        <title>@yield('title') | {{ $companyInformation->company_name }}  </title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <meta property="og:type" content="website" />
        <meta name="description" content="@yield('meta_description') {{ $seo->meta_description }}" />
        <meta name="keywords" content="{{ $seo->meta_keyword }}" />
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta property="og:title" content="Tuition Centre in East London (Forest Gate & Ilford) - Best Tutors in East London - Merit Tutors." />
        <meta property="og:url" content="https://www.merittutors.co.uk/" />
        <meta property="og:site_name" content="Merit Tutors I Tuition Centre in East London" />
        <meta name="google-site-verification" content="8yndOVji6sp5Lka51a7GOCgxbY85LJ2-lgZUp13824s" />
         
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.theme.default.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/odometer.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.min.css">
        <!-- Imagelightbox CSS -->
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/imagelightbox.min.css">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('backend')}}/assets/datatabels/dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('uploads/logo/'.$companyInformation->favicon) }}">
        <style type="text/css">
        	.img_laz{width:100%;border:1px solid #e1e1e1;}
        
        </style>

     
     
     
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LDKP2DXTYH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LDKP2DXTYH');
</script>



<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '134063601552703');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=134063601552703&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<script async src="https://www.googletagmanager.com/gtag/js?id=AW-581538066">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-581538066');
</script>
    </head>
        

    <body>
        <style>
    
                .page-banner-area {
            
                padding-top: 120px;
                padding-bottom: 120px;
            }
            .preloader {
                background-color: #25BD0F;
            }
            li.nav-item.asufmenu {
                padding-top: 2px;
            }
        </style>
    @include('sweetalert::alert')
        
        <!-- Start Preloader Area -->
        <!-- <div class="preloader">
            <div class="loader">
                <div class="wrapper">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-1a"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-3"></div>
                </div>
            </div>
        </div> -->
        <!-- End Preloader Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img src="{{ asset('uploads/logo/'.$companyInformation->logo) }}" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{ asset('uploads/logo/'.$companyInformation->logo) }}" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/')}}" class="nav-link active asufmenu">
                                        Home 
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        About 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                              WorksBooks
                                                <i class='bx bx-chevron-down'></i>
                                            </a>
        
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="{{ url('/year1-workbooks') }}" class="nav-link">
                                                       Year 1 WorksBooks
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{ url('/year2-workbooks') }}" class="nav-link">
                                                         Year 2 WorksBooks
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{url('/year3-workbooks')}}" class="nav-link">
                                                         Year 3 WorksBooks
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{url('/year4-workbooks')}}" class="nav-link">
                                                        Year 4 WorksBooks
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{url('/year5-workbooks')}}" class="nav-link">
                                                         Year 5 WorksBooks
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{url('/year6-workbooks')}}" class="nav-link">
                                                         Year 6 WorksBooks
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/about-us')}}" class="nav-link">
                                                About Us
                                            </a>
                                        </li>
                                           <li class="nav-item">
                                           
                                            
                                            <a href="{{ url('/quick-inquiry') }}" class="nav-link">Quick Inquiry For Tuition</a>
                                        </li>
                                          
                                          
                                          
                                           <li class="nav-item">
                                            <a href="{{url('/summer-maths-competition')}}" class="nav-link">
                                                Summer Maths Competition
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/summer-school')}}" class="nav-link">
                                                Summer School
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="{{url('/get-free-resources')}}" class="nav-link">
                                                Get Free Resource
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/finance-support') }}" class="nav-link">
                                                Finance Support
                                            </a>
                                        </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/child-care') }}" class="nav-link">
                                                Child-Care
                                            </a>
                                        </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/blogs') }}" class="nav-link">Blogs</a>
                                        </li>
                                          <li class="nav-item">
                                            <a href="{{ url('/gcse-results') }}" class="nav-link">GCSE Results</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/a-level-results') }}" class="nav-link">A Level Results</a>
                                        </li>
                                          <li class="nav-item">
                                            <a href="{{ url('11-plus-school-list') }}">11 Plus School</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/work-for-merit-tutors') }}">Work For Merit Tutors</a>
                                        </li>
                                      
                                        
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/summer-school')}}" class="nav-link">
                                        Summer School
                                    </a>
                                </li>
                                {{--
                                  <li class="nav-item">
                                    <a href="{{ url('/summer-maths-competition')}}" class="nav-link">
                                        Summer Maths Competition
                                    </a>
                                </li>
                                --}}
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Courses 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Primary Tuition
                                                <i class='bx bx-chevron-down'></i>
                                            </a>
        
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="{{ url('/course/11plus') }}" class="nav-link">
                                                        11 PLUS
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{ url('/course/ks1-maths') }}" class="nav-link">
                                                        KS1 MATHS
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{url('/course/ks1-english')}}" class="nav-link">
                                                        KS1 ENGLISH
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{url('/course/ks2-maths')}}" class="nav-link">
                                                        KS2 MATHS
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{url('/course/ks2-english')}}" class="nav-link">
                                                        KS2 ENGLISH
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Secondary & GCSEs 
                                                <i class='bx bx-chevron-down'></i>
                                            </a>
        
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="{{ url('/course/ks3') }}" class="nav-link">
                                                       KS3
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="{{ url('/course/gcse') }}" class="nav-link">
                                                        GCSE
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                           <li class="nav-item">
                                            <a href="{{url('/course/a-level')}}" class="nav-link">
                                                 A LEVEL
                                            </a>
                                        </li>
                                          <li class="nav-item">
                                            <a href="{{url('/revision-courses')}}" class="nav-link">
                                            Revision Courses
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                           
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Exams Centre London
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/gcse-exams" class="nav-link">
                                                GCSE Exams
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/igcse-exams" class="nav-link">
                                               IGCSE Exams
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/a-level-exams" class="nav-link">
                                               A Level Exams
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/exam-booking-aslevel" class="nav-link">
                                               AS Level Exams
                                            </a>
                                        </li>
                                           <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/aat-exams" class="nav-link">
                                               AAT Exams
                                            </a>
                                        </li>
                                           <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/acca-exams" class="nav-link">
                                               ACCA Exams
                                            </a>
                                        </li>
                                           <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/functional-skills-exams" class="nav-link">
                                               Functional Skills Exams
                                            </a>
                                        </li>
                                          <li class="nav-item">
                                            <a target="_blank" href="https://www.examcentrelondon.co.uk/ucas-registered-centre" class="nav-link">
                                               UCAS Application
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        How It Works 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="{{ url('/on-site-tutoring')}}" class="nav-link">
                                                On-Site Tutoring
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/online-tutoring') }}" class="nav-link">
                                                Online Tutoring
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/home-tutoring') }}" class="nav-link">
                                                Home Tutoring
                                            </a>
                                        </li>
                                        <!-- <li class="nav-item">-->
                                        <!--   <a href="{{ url('/tutor-find') }}" class="nav-link">Find A Tutor</a>-->
                                        <!--</li> -->
                                    </ul>
                                </li>
                              
                                
                              
                                @if(Auth::user())
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Profile 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @if(Auth::user()->user_type==1)
                                        <li class="nav-item">
                                            <a href="{{ url('/student/dashboard') }}" class="nav-link">
                                                Dashboard
                                            </a>
                                            
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/student/dashboard') }}" class="nav-link">
                                               View Profile
                                            </a>
                                        </li>
                                        @else
                                        <li class="nav-item">
                                            <a href="{{ url('/tutor/information') }}" class="nav-link">
                                                Dashboard
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/tutor/information') }}" class="nav-link">
                                               View Profile
                                            </a>
                                        </li>
                                        @endif

                                  
                                        <li class="nav-item">
                                            <a href="{{ url('/user/updatepassword') }}" class="nav-link">
                                               Update Password </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ url('/logout') }}" class="nav-link">
                                               Logout
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @else
                                <!-- <li class="nav-item">-->
                                <!--    <a href="#" class="nav-link">-->
                                <!--        Sign up -->
                                <!--        <i class='bx bx-chevron-down'></i>-->
                                <!--    </a>-->
                                <!--    <ul class="dropdown-menu">-->
                                <!--                <li class="nav-item">-->
                                <!--                    <a href="{{ url('/student/signup')}}" class="nav-link">-->
                                <!--                       Student Or Parent-->
                                <!--                    </a>-->
                                <!--                </li>-->

                                <!--                <li class="nav-item">-->
                                <!--                    <a href="{{ url('/tutor/signup')}}" class="nav-link">-->
                                <!--                        Become A Tutor-->
                                <!--                    </a>-->
                                <!--                </li>-->
                                                
                                <!--                <li class="nav-item">-->
                                <!--                    <a href="{{url('/login')}}" class="nav-link">-->
                                <!--                        Login -->
                                <!--                    </a>-->
                                <!--                </li>-->
                                               
                                <!--            </ul>-->
                                <!--</li>-->
                                {{--
                                <li class="nav-item">
                                    <a href="{{url('/login')}}" class="nav-link asufmenu">
                                        Login 
                                       
                                    </a>
                                </li>
                                --}}
                                @endif

                            </ul>
                            <div class="others-options d-flex align-items-center">
                           

                                <div class="option-item">
                                    <a href="{{ url('/contact') }}" class="default-btn">Contact Us</a>
                                </div>
                            </div>
                              <div class="others-options d-flex align-items-center">
                           

                                <!--<div class="option-item">-->
                                <!--    <a href="{{ url('/quick-inquiry') }}" class="default-btn">Quick Inquery</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <div class="dropdown language-switcher d-inline-block">
                               
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="{{ url('contact')  }}" class="default-btn">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

         @yield('content')

        <!-- Start Footer Area -->
<style>
.footerr-area {
    /* background-image: url(../../assets/img/footer-bg.jpg); */
    /* background-position: center center; */
    /* background-size: cover; */
    /* background-repeat: no-repeat; */
    /* background-attachment: fixed; */
    /* position: relative; */
    /* z-index: 1; */
    background-color: #151852 !important;
    background-color: #151852 !important;
    border-radius: 150px 199px 0px 0px;
}


.default-btn {
    
    background-color: #25BD0F;
    color: #ffffff;
   
}
.default-btn::before {
    background-color: #C90515;
 
}
.nav-item a.active {
    color: #25BD0F !important;
}
.main-navbar .navbar .navbar-nav .nav-item a:hover, .main-navbar .navbar .navbar-nav .nav-item a:focus, .main-navbar .navbar .navbar-nav .nav-item a.active {
    color: #CE0419;
}
.main-banner-content span {
   
    color: #25BD0F !important;
    
}
.optional-btn {

    background-color: #CE0419;
    color: #ffffff;
    
}
a:hover, a:focus {
    /* background-color: #25BD0F !important; */
    /* color: #fff !important; */
    
}

.who-we-are-content span {

    color: #25BD0F;
   
}
.who-we-are-content .who-we-are-list li:hover span {
    background-color: #C90515 !important;
}
.who-we-are-content .who-we-are-list li span {
    color: #ffffff;
    background-color: #25BD0F;
}
/* sobuj  #25BD0F
    red   #C90515
*/
.who-we-are-image::before {

    background-color: #25BD0F !important;
   
}
.who-we-are-image::after {
   
    background-color: #C90515 !important;
  
}
.section-title span {

    color: #25BD0F;
    
}
.single-activities:hover .activities-content h3 a {
    color: #25BD0F !important;
}
.single-activities:hover .number span {
    background-color: #C90515;
    color: #ffffff;
}
.single-activities .activities-content .activities-btn {
  
    color: #25BD0F;
   
}
.single-choose .icon i {

    background-color: #25BD0F;
    color: #ffffff;
 
}
.single-choose-item span {
    
    color: #25BD0F;
   
}
.testimonials-item .testimonials-item-box .icon i {

    background-color: #ffffff;
    color: #25BD0F;

}
.testimonials-item .testimonials-item-box:hover .icon i {
    background-color: #C90515;
    color: #ffffff;
}
.testimonials-item .testimonials-item-box .info-box span {
    
    color: #C90515 !important;
   
}
.event-box-item .event-content .event-list li i {
  
    color: #25BD0F;
}
.event-box-item .event-content .event-list li i {
    
    color: #25BD0F;
}
.event-box-item .event-date h4 {
    
    color: #25BD0F;
  
}
.event-box-item .event-date span {

    color: #25BD0F;

}
.single-blog-item .blog-content .post-meta li span {
    color: #000000;
}
.single-blog-item:hover .blog-content h3 a {
    color: #C90515;
}
.single-footer-widget h3::before {
  
    background-color: #25BD0F !important;
}
.single-footer-widget .social li a:hover, .single-footer-widget .social li a:focus {
    background-color: #25BD0F !important;
}
.single-footer-widget .social li a {

    background-color: #25BD0F;
    color: #ffffff;
   
}
.single-footer-widget .footer-contact-info li i {
   
    color: #25BD0F;
}
.copyright-area .copyright-area-content p a {
   
    color: #25BD0F;
}

.page-banner-content ul li {
 
    color: #25BD0F;
    
}
.page-banner-content ul li::before {
 
    background: #ffffff !important;
}
.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active {
    color: #C90515;
}
.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active {
    color: #C90515;
}
</style>
       
       
        <section class="footerr-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <h2>
                                    <a href="{{ url('/') }}"><img src="{{asset('uploads/logo/'.$companyInformation->logo)}}" alt=""></a>
                                </h2>
                            </div>
                            <p style="font-size: 14px;color:#fff !important">{{ $companyInformation->company_motto }}</p>

                                <ul class="social">
                                    <li>
                                        <a href="{{ $social->facebook }}" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->twitter }}" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->youtube }}" target="_blank">
                                            <i class='bx bxl-youtube'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ $social->instagram }}" target="_blank">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                    </li>
                                </ul>
                        
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contact Us</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    <a href="tel:0208 616 2526">0208 616 2526 (FOREST GATE) </a>
                                    <br>
                                    <hr>
                                     <a href="tel:0208 478 9988"> 0208 478 9988 (ILFORD)</a>
                                        <br>
                                    <hr>
                                           <a href="tel:0208 157 9926">0208 157 9926 (PLAISTOW)</a>    
                                                 <hr>
                                                
                                   
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="mailto:{{$companyInformation->email}}">{{$companyInformation->email}}</a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    FOREST GATE BRANCH<br>
                                    54 UPTON LANE <br>
                                    LONDON <br>
                                    E7 9LN
                                    
                                    <hr>
                                    ILFORD BRANCH<br>
                                    269 ILFORD LANE <br>
                                    ILFORD <br>
                                    IG1 2SD 
                                    
                                    <hr>
                                    PLAISTOW BRANCH<br>
                                    2-4  CUMBERLAND ROAD <br>
                                    LONDON <br>
                                    E13 8NH
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                             <h3>Activities</h3>
    
                            <ul class="quick-links">
                                 <li>
                                    <a href="{{ url('/summer-maths-competition') }}">Summer Maths Competition</a>
                                </li>
                                 <li>
                                    <a href="{{ url('/revision-courses') }}">Revision Courses</a>
                                </li>
                                  <li>
                                    <a href="{{ url('/news-letter') }}">Newsletter</a>
                                </li>
                                <li>
                                    <a href="{{ url('/terms-condition') }}">Terms And Condition</a>
                                </li>
                                 <li>
                                    <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="{{ url('/work-for-merit-tutors') }}">Work For Merit Tutors</a>
                                </li>
                                {{--
                                <li>
                                    <a href="{{ url('/blogs') }}">Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ url('/events') }}">Events</a>
                                </li>
                                --}}
                                  <li>
                                    <a href="{{ url('/gcse-results') }}">GCSE Results</a>
                                </li>
                                <li>
                                    <a href="{{ url('/a-level-results') }}">A Level Results</a>
                                </li>
                                <li>
                                    <a href="{{ url('/assesment') }}">Free Assesment</a>
                                </li>
                                 <li>
                                    <a href="{{ url('/admission-procedure') }}">Admission Procedure</a>
                                </li>
                                
                                 <li>
                                    <a href="{{ url('/venue-hire') }}">Venue Hire</a>
                                </li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Opening And Closing (FOREST GATE BRANCH)</h3>
                            <ul class="quick-links">
                                <li>
                                    <a href="#">Monday (9:00 AM - 7:00 PM) </a>
                                </li>
                                <li>
                                    <a href="#">Tuesday (9:00 AM - 7:00 PM) </a>
                                </li>
                                <li>
                                    <a href="#">Wednesday (9:00 AM - 7:00 PM) </a>
                                </li>
                                <li>
                                    <a href="#">Thursday (9:00 AM - 7:00 PM) </a>
                                </li>
                                <li>
                                    <a href="#">Friday (9:00 AM - 5:00 PM) </a>
                                </li>
                                <li>
                                    <a href="#">Saturday (9:00 AM - 6:00 PM) </a>
                                </li>
                                <li>
                                    <a href="#">Sunday (9:00 AM - 6:00 PM) </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        Copyright © 2025 MeritTutors. All Rights Reserved by
                        <a href="" target="_blank">
                            MeritTutors
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->


<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">-->
<!--  Launch static backdrop modal-->
<!--</button>-->


<!-- Modal -->





        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Jquery Slim JS -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="{{ asset('frontend') }}/assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Imagelightbox JS -->
		<script src="{{ asset('frontend') }}/assets/js/imagelightbox.min.js"></script>
        <!-- Odometer JS -->
        <script src="{{ asset('frontend') }}/assets/js/odometer.min.js"></script>
        <!-- Jquery Appear JS -->
        <script src="{{ asset('frontend') }}/assets/js/jquery.appear.min.js"></script>
        <!-- Ajaxchimp JS -->
		<script src="{{ asset('frontend') }}/assets/js/jquery.ajaxchimp.min.js"></script>
		<!-- Form Validator JS -->
        <script src="{{asset('backend')}}/assets/datatabels/dataTables.min.js"></script>
		<script src="{{asset('backend')}}/assets/datatabels/dataTables-active.js"></script>
		<script src="{{ asset('frontend') }}/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
        <script src="{{ asset('frontend') }}/assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="{{asset('frontend')}}/assets/js/spartan-multi-image-picker.js"></script>

       
        <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {

                    $('.js-example-basic-multiple').select2();

            });
               
            </script>
        <script>
            $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
        </script>
         <script src="{{asset('backend')}}/assets/js/spartan-multi-image-picker.js"></script>
         <script>
    $(document).ready(function() {

        $('#container').removeClass('mainnav-lg').addClass('mainnav-sm');
        $("#thumbnail_img").spartanMultiImagePicker({
            fieldName: 'thumbnail_img',
            maxCount: 1,
            rowHeight: '200px',
            groupClassName: 'col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
        $("#update_image").spartanMultiImagePicker({
            fieldName: 'thumbnail_img',
            maxCount: 1,
            rowHeight: '60px',
            groupClassName: 'col-lg-12 col-md-12 col-sm-12 col-xs-12',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });

        $("#photos").spartanMultiImagePicker({
            fieldName: 'photos[]',
            maxCount: 10,
           rowHeight: '200px',
            groupClassName: 'col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "Drop Here",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });
        $("#product_img").spartanMultiImagePicker({
            fieldName: 'image',
            maxCount: 1,
            rowHeight: '200px',
            groupClassName: 'col-xl-3 col-lg-3 col-md-4 col-sm-4 col-xs-6',
            maxFileSize: '',
            dropFileLabel: "Drag & Drop",
            onExtensionErr: function(index, file) {
                console.log(index, file, 'extension err');
                alert('Please only input png or jpg type file')
            },
            onSizeErr: function(index, file) {
                console.log(index, file, 'file size too big');
                alert('File size too big');
            }
        });

    });
</script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> -->
<script src="{{asset('frontend/timepicker')}}/mdtimepicker.js"></script>
<script>
    $(document).ready(function(){
    $('#timepicker').mdtimepicker(); 
    });
</script>
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script>
		$(document).on("click", "#delete", function(e) {
			e.preventDefault();
			var link = $(this).attr("href");
			swal({
					title: "Are you Want to delete?",
					text: "Once Delete, This will be Permanently Delete!",
					icon: "warning",
					buttons: true,
					dangerMode: true,
				})
				.then((willDelete) => {
					if (willDelete) {
						window.location.href = link;
					} else {
						swal("Safe Data!");
					}
				});
		});
	</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
	$(document).ready(function() {
  $('#summernote').summernote({
	height: 200,  
  });
});
</script>

    <script>
    $(document).ready(function () {
        function filter_data() {
            $(".preimage-cls").css('visibility', 'visible');

            let tag = [];
            var tutor_type = get_filter('tutor_type');
            var subject = get_filter('subject');
            var gender = get_filter('gender');
            var price = get_filter('price');
            var sortingval = get_sort();

            var obj = {
                subject,
                tutor_type,
                gender,
                price,
                sortingval
            };
            console.log(obj);

            
                        tutor_type[1].forEach(function (item) {
                            tag.push(item);
                        });
                        subject[1].forEach(function (item) {
                            tag.push(item);
                        });
                        gender[1].forEach(function (item) {
                            tag.push(item);
                        });
                        price[1].forEach(function (item) {
                           
                             tag.push(item);
                        });
                        // sortingval[1].forEach(function (item) {
                        //     tag.push(item);
                        // });
                        console.log(tag);
                        var gethtml = '';
                        tag.forEach(function (item, index) {
                            gethtml +=
                                '<li style="margin-right: 10px;display: inline-flex;background-color: #00db1d;border: 0px;;color: #fff;padding: 10px 9px 10px 13px;border-radius: 19px;margin-top: 10px;margin-bottom: 20px;" class="select2-selection__choice custom_tag title="Green" data-select2-id="select2-data-11-kqby"><span class= "select2-selection__choice__display" id = "' +
                                index + '" style = "margin-right: 10px" >' +
                                item +
                                '</span> </li>';
                                
                                
                                
                        });
                        $('#tags_value').html(gethtml);
           

            $.ajax({
                url: "{{url('/filter-shop')}}",
                type: 'get',
                data: {
                    subject: subject[0],
                    price:  price[0],
                    gender: gender[0],
                    tutor_type: tutor_type[0],
                    sortingval: sortingval[0]
                },

                success: function (products) {
           
                    $(".preimage-cls").css('visibility','hidden');
                    if (products) {
                        $('#defultData').hide();
                        $("#pagina").hide();
                        $('#filterData').html(products);
                    } else {
                        $('#defultData').show();
                        $('#filterData').hide();
                        $("#pagina").show();
                    }
                }
            })
        }



        function get_filter(class_name) {
            var filter = [];
            var filter_tag_name = [];
            var filter_tag_slug = [];
            $('.' + class_name + ':checked').each(function () {
                filter_tag_name.push($(this).data("name"));
                filter_tag_slug.push($(this).data("slug"));
                filter.push($(this).val());
            });
            var get_filter_array = [filter, filter_tag_name, filter_tag_slug];
            return get_filter_array;
        }

        $('.common_selector').click(function () {
            filter_data();
        });

        $('.common_selector').on('change', function () {
            get_sort();
            filter_data();
        });

        function get_sort() {
            var filter = [];
            var filter_tag_name = [];
            var filter_tag_slug = [];
            $.each($("#sortBy option:selected"), function () {
                filter.push($(this).val());
                filter_tag_name.push($(this).data("name"));
                filter_tag_slug.push($(this).data("slug"));
            });
            var get_filter_array = [filter, filter_tag_name, filter_tag_slug];
            return get_filter_array;
        }


    });

</script>
<script>
    function remove_item(selected_item) {
        // alert("ok");
        // selected_item.parentNode.removeChild(selected_item);
        $(selected_item).closest("li").remove();
    }

</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script>
    $(document).ready(function(){
            $(".img_laz").lazyload({
            effect : "fadeIn"
        });
    })

</script>
<script>
    $(document).ready(function(){
        $("#level").change(function(){
            var level_id=$(this).val();
            if(level_id) {
                 $.ajax({
                     url: "{{  url('/get/allsubject/bylevel/') }}"+'/'+level_id,
                     type:"GET",
                     data:'json',
                     success:function(data) {
                      
                           $('#subject').empty();
                        $('#subject').append(' <option disabled selected>Select Subject</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject').append('<option value="' + districtObj.id + '">'+districtObj.name+'</option>');
                       });
    
                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#subject").change(function(){
            var subject_id=$(this).val();
            $(".preimage-cls").css('visibility', 'visible');
            if(subject_id) {
                 $.ajax({
                     url: "{{url('/filter-by-name')}}",
                    type: 'get',
                    data: {
                        subject_id: subject_id,
                        
                    },
                     success:function(data) {
                         
                      $(".preimage-cls").css('visibility','hidden');
                        if (data) {
                            $('#defultData').hide();
                            $("#pagina").hide();
                            $('#filterData').html(data);
                        } else {
                            $('#defultData').show();
                            $('#filterData').hide();
                            $("#pagina").show();
                        }
                      
    
                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        });
    });
</script>

</body>
</html>