<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
         <title>Year 4 Workbooks | {{ $companyInformation->company_name }}  </title>
        
        <meta name="csrf-token" content="{{ csrf_token() }}">

        
        <meta property="og:type" content="website" />
        <meta name="description" content="@yield('meta_description') {{ $seo->meta_description }}" />
        <meta name="keywords" content="{{ $seo->meta_keyword }}" />
        <meta name="author" content="{{ $seo->meta_author }}">
        <meta property="og:title" content="Tuition Centre in East London (Forest Gate & Ilford) - Best Tutors in East London - Merit Tutors." />
        <meta property="og:url" content="https://www.merittutors.co.uk/" />
        <meta property="og:site_name" content="Merit Tutors I Tuition Centre in East London" />
        <meta name="google-site-verification" content="8yndOVji6sp5Lka51a7GOCgxbY85LJ2-lgZUp13824s" />
     <link rel="icon" type="image/png" href="{{ asset('uploads/logo/'.$companyInformation->favicon) }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="{{ asset('frontend/bookedresource') }}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('frontend/bookedresource') }}/assets/css/owl.theme.default.min.css">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <!-- Normalize -->
        <link rel="stylesheet" href="{{ asset('frontend/bookedresource') }}/assets/css/normalize.css">
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ asset('frontend/bookedresource') }}/assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('frontend/bookedresource') }}/assets/css/responsive.css">
        
        
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
<!-- End Meta Pixel Code -->

        
        
        
    </head>
    <body>
        <!--================  Start Header Section  ================-->
        <header class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/logo.png" alt=""></a>
                                <div id="nav-icon4" class="menu_icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li><a href="#top" class="active">Top</a></li>
                                    <li><a href="#whyus">Why Us</a></li>
                                    <li><a href="#preview">Preview</a></li>
                                    <li><a href="#benefits">Benefits</a></li>
                                    <li><a href="#offers">Offers</a></li>
                                    <li><a href="#feedback">Feedbacks</a></li>
                                </ul>
                            </div>
                            <div class="header_btn">
                                <a href="{{ url('workbooks-checkout/4') }}">
                                    Order Now
                                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.6104 29.8327C23.9742 29.8327 29.9437 23.8631 29.9437 16.4994C29.9437 9.13555 23.9742 3.16602 16.6104 3.16602C9.24659 3.16602 3.27705 9.13555 3.27705 16.4994C3.27705 23.8631 9.24659 29.8327 16.6104 29.8327Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.6104 21.8317L21.9437 16.4984L16.6104 11.165" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.277 16.498H21.9436" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--================  End Header Section  ================-->

        <!--================  Start Banner Section  ================-->
        <section class="banner_main" id="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner">
                            <div class="banner_contents">
                                <h1><span>Primary Year 4 Maths Activity Workbook :</span> For 8-9 Years Old Child (KS2)</h1>
                                <p>This Year 4 Maths workbook 1 is the perfect practice material for 8-9 year olds to develop and solidly the basic mathematical skills they need in Year 4.</p>
                                <a href="{{ url('workbooks-checkout/4') }}" class="btn_style">
                                    <span>£ 15</span>
                                    Order Now
                                    <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5082 34.33C28.1063 34.33 35.0765 27.3599 35.0765 18.7617C35.0765 10.1635 28.1063 3.19336 19.5082 3.19336C10.91 3.19336 3.93982 10.1635 3.93982 18.7617C3.93982 27.3599 10.91 34.33 19.5082 34.33Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="changepathcolor" d="M19.5082 24.9879L25.7355 18.7605L19.5082 12.5332" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path class="changepathcolor" d="M13.2808 18.7598H25.7354" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="banner_img">
                                <img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/CoverMockupYear4Book1.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Banner Section  ================-->

        <!--================  Start (Why Choose Us) Section  ================-->
        <section class="why_choose_us_main" id="whyus">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="why_choose_us">
                            <div class="why_choose_us_top_contents">
                                <div class="why_choose_us_top_left">
                                    <p class="p_border">Why Choose Us?</p>
                                    <h3>A must-have resource for students, parents, and educators alike!</h3>
                                </div>
                                <div class="why_choose_us_top_right">
                                    <p>Whether you're a parent guiding your child’s learning, a teacher enhancing classroom material, or a student striving for excellence, this resource is designed to support all your educational needs.</p>
                                </div>
                            </div>
                            <div class="why_choose_us_contents">
                                <div class="why_choose_us_single">
                                    <div class="why_choose_us_single_img"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/why-us-1.png" alt=""></div>
                                    <h4>Engaging Exercises</h4>
                                    <p>Packed with interactive and visually appealing exercises, this resource transforms learning into a fun and rewarding experience.</p>
                                </div>
                                <div class="why_choose_us_single">
                                    <div class="why_choose_us_single_img"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/why-us-2.png" alt=""></div>
                                    <h4>Comprehensive Coverage</h4>
                                    <p>Covers all essential topics, from basic concepts to advanced applications, ensuring thorough understanding for learners of all levels.</p>
                                </div>
                                <div class="why_choose_us_single">
                                    <div class="why_choose_us_single_img"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/why-us-3.png" alt=""></div>
                                    <h4>Tailored for Success</h4>
                                    <p>Carefully structured content tailored to build confidence and mastery, empowering learners to achieve their goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (Why Choose Us) Section  ================-->

        <!--================  Start (PREVIEW) Section  ================-->
        <section class="preview_main" id="preview">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="preview_section">
                            <div class="default_title">
                                <span>PREVIEW</span>
                                <h3>Inside the Workbook: A Closer Look</h3>
                                <p>Discover engaging activities, colorful illustrations, and step-by-step examples that make learning fun and easy for your child.</p>
                            </div>
                            <div class="preview_tabs">
                                <div class="preview_tabs_items">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="wordbook1-tab" data-bs-toggle="pill" data-bs-target="#wordbook1" type="button" role="tab" aria-controls="wordbook1" aria-selected="true">WordBoook 1</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wordbook2-tab" data-bs-toggle="pill" data-bs-target="#wordbook2" type="button" role="tab" aria-controls="wordbook2" aria-selected="false">WordBoook 2</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wordbook3-tab" data-bs-toggle="pill" data-bs-target="#wordbook3" type="button" role="tab" aria-controls="wordbook3" aria-selected="false">WordBoook 3</button>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wordbook4-tab" data-bs-toggle="pill" data-bs-target="#wordbook4" type="button" role="tab" aria-controls="wordbook4" aria-selected="false">WordBoook 4</button>
                                      </li>
                                         <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wordbook5-tab" data-bs-toggle="pill" data-bs-target="#wordbook5" type="button" role="tab" aria-controls="wordbook5" aria-selected="false">Answer Book</button>
                                      </li>
                                         <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wordbook6-tab" data-bs-toggle="pill" data-bs-target="#wordbook6" type="button" role="tab" aria-controls="wordbook6" aria-selected="false">Test Answers</button>
                                      </li>
                                      
                                       <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="wordbook7-tab" data-bs-toggle="pill" data-bs-target="#wordbook7" type="button" role="tab" aria-controls="wordbook7" aria-selected="false">Test Book</button>
                                      </li>
                                    </ul>
                                </div>

                                <div class="tab-content preview_tab_contents" id="pills-tabContent">
                                    <!-- Start Tab-1 Contents -->
                                    <div class="tab-pane fade show active" id="wordbook1" role="tabpanel" aria-labelledby="wordbook1-tab">
                                        <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                                <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/CoverMockupYear4Book1.webp" alt="Page 1"></div>
                                                       <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/contentspage.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-1.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-2.png" alt="Page 2"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-3.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-4.png" alt="Page 4"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-5.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-6.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book1/Image-7.png" alt="Page 4"></div>
                                                 
                                                </div>
                                                <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-1 Contents -->

                                    <!-- Start Tab-2 Contents -->
                                    <div class="tab-pane fade" id="wordbook2" role="tabpanel" aria-labelledby="wordbook2-tab">
                                        <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                               <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/CoverMockupYear4Book2.webp" alt="Page 1"></div>
                                                       <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/contentspage.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-1.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-2.png" alt="Page 2"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-3.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-4.png" alt="Page 4"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-5.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-6.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book2/Image-7.png" alt="Page 4"></div>
                                                 
                                                </div>
                                                <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-2 Contents -->

                                    <!-- Start Tab-3 Contents -->
                                    <div class="tab-pane fade" id="wordbook3" role="tabpanel" aria-labelledby="wordbook3-tab">
                                         <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                            <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/CoverMockupYear4Book3.webp" alt="Page 1"></div>
                                                       <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/contentspage.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-1.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-2.png" alt="Page 2"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-3.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-4.png" alt="Page 4"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-5.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-6.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/Image-7.png" alt="Page 4"></div>
                                                 
                                                </div>
                                                    <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-3 Contents -->

                                    <!-- Start Tab-4 Contents -->
                                    <div class="tab-pane fade" id="wordbook4" role="tabpanel" aria-labelledby="wordbook4-tab">
                                         <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                            <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/CoverMockupYear4Book4.webp" alt="Page 1"></div>
                                                       <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book3/contentspage.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-1.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-2.png" alt="Page 2"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-3.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-4.png" alt="Page 4"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-5.png" alt="Page 5"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-6.png" alt="Page 3"></div>
                                                    <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/book4/Image-7.png" alt="Page 4"></div>
                                                 
                                                </div>
                                                    <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-4 Contents -->
                                        <!-- Start Tab-5 Contents -->
                                    <div class="tab-pane fade" id="wordbook5" role="tabpanel" aria-labelledby="wordbook5-tab">
                                        <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                                <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/answerbooks/1.webp" alt="Page 1"></div>
                                                       
                                                  <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/answerbooks/4.jpg" alt="Page 4"></div>
                                                </div>
                                                <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-5 Contents -->
                                    
                                    
                                          <!-- Start Tab-6 Contents -->
                                    <div class="tab-pane fade" id="wordbook6" role="tabpanel" aria-labelledby="wordbook6-tab">
                                        <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                                <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/answerbooks/2.webp" alt="Page 1"></div>
                                                       
                                                  <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/answerbooks/4.jpg" alt="Page 4"></div>
                                                </div>
                                                <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-6 Contents -->
                                    
                                    
                                    
                                            <!-- Start Tab-7 Contents -->
                                    <div class="tab-pane fade" id="wordbook7" role="tabpanel" aria-labelledby="wordbook7-tab">
                                        <div class="preview_tabs_carousel">
                                            <div class="book-slider">
                                                <div class="book-container">
                                                    <div class="book active"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/answerbooks/3.webp" alt="Page 1"></div>
                                                       
                                                  <div class="book"><img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/answerbooks/4.jpg" alt="Page 4"></div>
                                                </div>
                                                <button class="prev"><i class="fa fa-arrow-left"></i></button>
                                                <button class="next"><i class="fa fa-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-7 Contents -->
                                </div>
                            </div>
                            <div class="preview_bottom_items">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon1.png" alt="">
                                        <span>Reading Age</span>
                                        <p>8-9 Years</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon2.png" alt="">
                                        <span>First Edition By</span>
                                        <p>Merit Tutors</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon3.png" alt="">
                                        <span>Print Length</span>
                                        <p>258 Pages</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon4.png" alt="">
                                        <span>Dimensions</span>
                                        <p>8.5” x 0.43” x 11”</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon5.png" alt="">
                                        <span>Language</span>
                                        <p>English</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon6.png" alt="">
                                        <span>Publication date</span>
                                        <p>July 3, 2023</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/icon7.png" alt="">
                                        <span>ISB-13</span>
                                        <p>979-8854416030</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- Start Preview Single Section -->
                            <div class="preview_single_section" id="benefits">
                                <div class="preview_single_section_contents">
                                    <div class="pssc_contents">
                                        <p class="p_border">This Year 4 Maths workbook is the perfect practice material</p>
                                        <h3>For 8-9 year olds to develop and solidly the basic mathematical skills they need in Year 4.</h3>
                                        <p>Matched to the National Curriculum, this book contains numerous questions compiled in 96 pages to help your child practice and perfect their understanding of the following mathematical topics:</p>
                                        <ul>
                                            <li>
                                                <span>
                                                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="0.664551" width="36.6102" height="36.6102" rx="18.3051" fill="#E86A7E"/>
                                                        <path d="M24.4068 14.7744L16.0169 23.1642L12.2034 19.3507" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                Counting forward and backward.
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="0.664551" width="36.6102" height="36.6102" rx="18.3051" fill="#E86A7E"/>
                                                        <path d="M24.4068 14.7744L16.0169 23.1642L12.2034 19.3507" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                Number recognition and sequencing.
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="0.664551" width="36.6102" height="36.6102" rx="18.3051" fill="#E86A7E"/>
                                                        <path d="M24.4068 14.7744L16.0169 23.1642L12.2034 19.3507" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span>     
                                                Workbook 1 starts with numbers up to 10, Workbook 2 up to 30, Workbook 3 up to 100, and Workbook 4 transitions into advanced number-related concepts like multiplication and division.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="preview_single_section_img">
                                    <img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/workbooks.webp" alt="">
                                    <div class="psci_content_box">
                                        <ul>
                                            <li>
                                                <h4>8-9 <b>Years</b></h4>
                                                <p>Reading Age</p>
                                            </li>
                                            <li><span></span></li>
                                            <li>
                                                <h4>English</h4>
                                                <p>Language</p>
                                            </li>
                                            <li><span></span></li>
                                            <li>
                                                <h4>8.5 x 0.43 x 11</h4>
                                                <p>Dimensions (In)</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Preview Single Section -->

                            <!-- Start Preview Single Section 2 -->
                            <div class="preview_single_section preview_single_section2">
                                <div class="preview_single_section_img pscimg2">
                                    <img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/AboutMeritTutorsYear2.webp
" alt="">
                                </div>
                                <div class="preview_single_section_contents">
                                    <div class="pssc_contents">
                                        <p class="p_border">More Topics</p>
                                        <ul>
                                            <li>
                                                <span>
                                                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="0.664551" width="36.6102" height="36.6102" rx="18.3051" fill="#E86A7E"/>
                                                        <path d="M24.4068 14.7744L16.0169 23.1642L12.2034 19.3507" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                The workbooks progressively develop mathematical skills, starting with basic addition and subtraction (up to 10 in Workbook 1).
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="0.664551" width="36.6102" height="36.6102" rx="18.3051" fill="#E86A7E"/>
                                                        <path d="M24.4068 14.7744L16.0169 23.1642L12.2034 19.3507" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span> 
                                                Advancing to larger numbers and word problems (Workbook 2 and 3).
                                            </li>
                                            <li>
                                                <span>
                                                    <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect y="0.664551" width="36.6102" height="36.6102" rx="18.3051" fill="#E86A7E"/>
                                                        <path d="M24.4068 14.7744L16.0169 23.1642L12.2034 19.3507" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
                                                </span>     
                                                Culminating in abstract concepts like multiplication, division, and fractions (Workbook 4).
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="pssc_contentbox">
                                        <div class="pssc_cbox_img">
                                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_110_4623)">
                                                <path d="M24.8915 15.3448L16.5908 23.668C14.1489 26.1165 12.9278 27.3408 11.4294 27.4761C11.1816 27.4986 10.9324 27.4986 10.6847 27.4761C9.18617 27.3408 7.96519 26.1165 5.52322 23.668L2.75632 20.8935C1.2282 19.3612 1.2282 16.8769 2.75632 15.3448M24.8915 15.3448L13.8239 4.24706M24.8915 15.3448H2.75632M2.75632 15.3448L13.8239 4.24706M13.8239 4.24706L11.057 1.47266" stroke="#E86A7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M29 26.1236C29 27.6363 27.7737 28.8626 26.261 28.8626C24.7483 28.8626 23.522 27.6363 23.522 26.1236C23.522 24.6109 26.261 22.0151 26.261 22.0151C26.261 22.0151 29 24.6109 29 26.1236Z" stroke="#E86A7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_110_4623">
                                                <rect width="30" height="30" fill="white" transform="translate(0.305115 0.16748)"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="pssc_cbox_contents">
                                            <p>Friendly and colorful illustrations</p>
                                            <span>to make learning enjoyable</span>
                                        </div>
                                    </div>
                                    <div class="pssc_contentbox">
                                        <div class="pssc_cbox_img">
                                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.0551 3.91748H6.55511C5.1744 3.91748 4.05511 5.03677 4.05511 6.41748V23.9175C4.05511 25.2982 5.1744 26.4175 6.55511 26.4175H24.0551C25.4358 26.4175 26.5551 25.2982 26.5551 23.9175V6.41748C26.5551 5.03677 25.4358 3.91748 24.0551 3.91748Z" stroke="#E86A7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M4.05511 11.4175H26.5551" stroke="#E86A7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M11.5551 26.4175V11.4175" stroke="#E86A7E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <div class="pssc_cbox_contents">
                                            <p>xamples with guided instructions</p>
                                            <span>for parents to actively support their child's learning.</span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <!-- End Preview Single Section 2 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (PREVIEW) Section  ================-->

        <!--================  Start (Order Now) Section  ================-->
        <section class="order_now_main" id="offers">
            <div class="enlsm_img"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/order-bg.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="order_now">
                            <div class="default_title order_now_title">
                                <span>Order Now</span>
                                <h3>Unlock Your Child’s Full Potential with Year 4 Maths Workbooks</h3>
                                <p>Choose Individual Books or Get the Complete Learning Package for the Best Value!</p>
                            </div>
                            <div class="preview_tabs order_now_tabs">
                                <div class="preview_tabs_items order_now_tabs_items">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                      <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="package-tab" data-bs-toggle="pill" data-bs-target="#package" type="button" role="tab" aria-controls="package" aria-selected="true">The Full Package</button>
                                      </li>
                                     
                                    </ul>
                                </div>

                                <div class="tab-content order_now_tab_contents" id="pills-tabContent">
                                    <!-- Start Tab-1 Contents -->
                                    <div class="tab-pane fade show active" id="package" role="tabpanel" aria-labelledby="package-tab">
                                        <div class="order_now_contents">
                                            <div class="order_now_contents_img">
                                                <img src="{{ asset('frontend/bookedresource') }}/assets/images/yearfour/ComboPackYear4.webp" alt="">
                                            </div>
                                          <div class="order_now_contents_right">
                                                <div class="pssc_contents">
                                                    <h3>This pack includes everything you need to support your child's learning throughout the entire Year 4 Maths curriculum.</h3>
                                                    <p class="p_border">What we will provide</p>
                                                    <ul>
                                                        <li>
                                                            <span>
                                                                <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect y="0.711914" width="36.6102" height="36.6102" rx="18.3051" fill="#30A3D0"/>
                                                                    <path d="M24.4068 14.8218L16.0169 23.2116L12.2034 19.398" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </span> 
                                                            All 4 Workbooks
                                                        </li>
                                                        <li>
                                                            <span>
                                                                <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect y="0.711914" width="36.6102" height="36.6102" rx="18.3051" fill="#30A3D0"/>
                                                                    <path d="M24.4068 14.8218L16.0169 23.2116L12.2034 19.398" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </span> 
                                                        Answer Book for all 4 Workbooks

                                                        </li>
                                                        <li>
                                                            <span>
                                                                <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect y="0.711914" width="36.6102" height="36.6102" rx="18.3051" fill="#30A3D0"/>
                                                                    <path d="M24.4068 14.8218L16.0169 23.2116L12.2034 19.398" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </span>     
                                                            Test Book to assess progress

                                                        </li>
                                                        <li>
                                                            <span>
                                                                <svg width="37" height="38" viewBox="0 0 37 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect y="0.711914" width="36.6102" height="36.6102" rx="18.3051" fill="#30A3D0"/>
                                                                    <path d="M24.4068 14.8218L16.0169 23.2116L12.2034 19.398" stroke="white" stroke-width="2.44068" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </span> 
                                                          Test Answer Sheets
                                                        </li>
                                                    </ul>
                                                    <a href="{{ url('workbooks-checkout/1') }}" class="btn_style">
                                                        <span>£ 50</span>
                                                        Order Now
                                                        <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M19.5082 34.33C28.1063 34.33 35.0765 27.3599 35.0765 18.7617C35.0765 10.1635 28.1063 3.19336 19.5082 3.19336C10.91 3.19336 3.93982 10.1635 3.93982 18.7617C3.93982 27.3599 10.91 34.33 19.5082 34.33Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path class="changepathcolor" d="M19.5082 24.9879L25.7355 18.7605L19.5082 12.5332" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path class="changepathcolor" d="M13.2808 18.7598H25.7354" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Tab-1 Contents -->

                                    <!-- Start Tab-2 Contents -->
                                    <div class="tab-pane fade" id="choose" role="tabpanel" aria-labelledby="choose-tab">
                                        <div class="order_now_contents">
                                            2
                                        </div>
                                    </div>
                                    <!-- End Tab-2 Contents -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (Order Now) Section  ================-->

        <!--================  Start (FEEDBACKS) Section  ================-->
        <section class="endorsed_leading_schoools_main feedback_main" id="feedback">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="endorsed_leading_schoools">
                            <div class="default_title feedback_title">
                                <span>FEEDBACKS</span>
                                <h3>Real Stories, Real Success: See What Parents and Students Say</h3>
                                <p>Explore heartfelt video testimonials from our happy parents and thriving students who have experienced the benefits of our program firsthand.</p>
                            </div>
                            <div class="feedback_carousel owl-carousel owl-theme">
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video" muted>
                                            <source src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/video1.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                    <div class="feedback_carousel_contents">
                                        <p>Muhamad Nauval Azhar</p>
                                        <span>Parent</span>
                                    </div>
                                </div>
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video" muted>
                                            <source src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/video2.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                    <div class="feedback_carousel_contents">
                                        <p>Daisy Amila</p>
                                        <span>Student</span>
                                    </div>
                                </div>
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video" muted>
                                            <source src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/video1.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                    <div class="feedback_carousel_contents">
                                        <p>Muhamad Nauval Azhar</p>
                                        <span>Parent</span>
                                    </div>
                                </div>
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video" muted>
                                            <source src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/video3.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                    <div class="feedback_carousel_contents">
                                        <p>Ahmed Rafiq</p>
                                        <span>Student</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="endorsed_carousel owl-carousel owl-theme owl-loaded">
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed2.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Elmhurst School</p>
                                </div>
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed3.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Salwin School</p>
                                </div>
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed2.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Elmhurst School</p>
                                </div>
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed1.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Cleveland School</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (FEEDBACKS) Section  ================-->

        <!--================  Start (Endorsed by Leading Schools) Section  ================-->
        {{--
        <section class="endorsed_leading_schoools_main">
            <div class="enlsm_img"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed-bg.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="endorsed_leading_schoools">
                            <div class="default_title endorsed_title">
                                <span>Endorsed by Leading Schools</span>
                                <h3>Trusted by Educators, Recognized for Excellence</h3>
                                <p>We are honored to be recommended by top schools, reflecting the impact of our learning resources. Click on any letter below to view the full endorsement.</p>
                            </div>
                            <div class="endorsed_carousel owl-carousel owl-theme owl-loaded">
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed2.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Elmhurst School</p>
                                </div>
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed3.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Salwin School</p>
                                </div>
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed2.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Elmhurst School</p>
                                </div>
                                <div class="endorsed_carousel_single">
                                    <div class="endorsed_img">
                                        <img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/endorsed1.png" alt="">
                                        <div class="endorsed_img_btn"><a href="#">View Letter</a></div>
                                    </div>
                                    <p>Cleveland School</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (Endorsed by Leading Schools) Section  ================-->
 --}}
        <!--================  Start (TESTIMONIAL) Section  ================-->
        <section class="testimonials_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="testimonials">
                            <div class="why_choose_us_top_contents testimonials_top_contents">
                                <div class="why_choose_us_top_left">
                                    <p class="p_border">TESTIMONIAL</p>
                                    <h3>What Parents & Teachers Are Saying on WhatsApp & Facebook</h3>
                                </div>
                                <div class="why_choose_us_top_right">
                                    <p>We’re proud to receive glowing feedback from<br> Parents & Teachers directly through WhatsApp or Facebook.<br> Here are some snapshots of their experiences.</p>
                                </div>
                            </div>
                            <div class="testimonials_carousel owl-carousel owl-theme owl-loaded">
                                <div class="testimonials_single">
                                    <p>Well-structured and child-friendly—reinforces core maths skills with practical examples!</p>
                                    <div class="testimonials_single_profile">
                                        <div class="testimonials_profile_left">
                                            <!--<span><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/profile2.png" alt=""></span>-->
                                            <p>MAMUN <span>Teacher</span></p>
                                        </div>
                                        <span><a href="#"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/facebook.png" alt=""></a></span>
                                    </div>
                                </div>
                                <div class="testimonials_single">
                                    <p>Great for confident learners—challenges with problem-solving and builds deeper understanding!
</p>
                                    <div class="testimonials_single_profile">
                                        <div class="testimonials_profile_left">
                                            <!--<span><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/profile3.png" alt=""></span>-->
                                            <p>Tabir Hasan<span>Parent</span></p>
                                        </div>
                                        <span><a href="#"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/whatsapp.png" alt=""></a></span>
                                    </div>
                                </div>
                                <div class="testimonials_single">
                                    <p>My granddaughter loves math and is working her way through this no problem.
I will be buying the next in the series.</p>
                                    <div class="testimonials_single_profile">
                                        <div class="testimonials_profile_left">
                                            <!--<span><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/profile2.png" alt=""></span>-->
                                            <p>Aqsa <span>Teacher</span></p>
                                        </div>
                                        <span><a href="#"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/facebook.png" alt=""></a></span>
                                    </div>
                                </div>
                                <div class="testimonials_single">
                                    <p>A great range of sums that my child can work out mostly on his own and then some with assistance and he is keen to pick the book up, so a big win!</p>
                                    <div class="testimonials_single_profile">
                                        <div class="testimonials_profile_left">
                                            <!--<span><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/profile1.png" alt=""></span>-->
                                            <p>David Anthony <span>Parent</span></p>
                                        </div>
                                        <span><a href="#"><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/whatsapp.png" alt=""></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (TESTIMONIAL) Section  ================-->

        <!--================  Start (Order Now) Section  ================-->
        <section class="order_now_bottom_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="order_now_bottom">
                            <div class="default_title order_now_title2">
                                <span>ORDER NOW</span>
                                <h3>Primary Year 4 Maths Activity Workbook</h3>
                                <p>For 8-9 Years Old Child (KS2)</p>
                                <a href="{{ url('workbooks-checkout/4') }}" class="btn_style">
                                    <span>£ 50</span>
                                    Order Now
                                    <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5082 34.33C28.1063 34.33 35.0765 27.3599 35.0765 18.7617C35.0765 10.1635 28.1063 3.19336 19.5082 3.19336C10.91 3.19336 3.93982 10.1635 3.93982 18.7617C3.93982 27.3599 10.91 34.33 19.5082 34.33Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path class="changepathcolor" d="M19.5082 24.9879L25.7355 18.7605L19.5082 12.5332" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path class="changepathcolor" d="M13.2808 18.7598H25.7354" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (Order Now) Section  ================-->

        <!--================  Start (Footer) Section  ================-->
        <footer class="footer_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <div class="copyright"><p>Copyright © {{ Carbon\Carbon::now()->format('Y') }} MeritTutors. All Rights Reserved by MeritTutors</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--================  End (Footer) Section  ================-->




        <!-- ~~~~~~~~~~ JS Files ~~~~~~~~~~-->
        <!-- jQuery -->
        <script src="{{ asset('frontend/bookedresource') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('frontend/bookedresource') }}/assets/js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!-- Owl Carousel -->
        <script src="{{ asset('frontend/bookedresource') }}/assets/js/owl.carousel.min.js"></script>
        <!-- Modernizr -->
        <script src="{{ asset('frontend/bookedresource') }}/assets/js/modernizr-3.11.2.min.js"></script>
        <!-- Custom JS (Handed)-->
        <script src="{{ asset('frontend/bookedresource') }}/assets/js/scripts.js"></script>
    </body>
</html>