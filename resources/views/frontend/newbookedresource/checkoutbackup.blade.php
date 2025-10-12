
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>Year1 Workbooks | {{ $companyInformation->company_name }}  </title>
        
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

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2154849104915670');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2154849104915670&ev=PageView&noscript=1"
/></noscript>



<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '3452523841723929');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=3452523841723929&ev=PageView&noscript=1"
/></noscript>

        
    </head>
    <body>
        <!--================  Start Header Section  ================-->
        <header class="header_main header_main_checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header header_checkout">
                            <div class="logo">
                                <a href="{{url('/')}}"><i class="fas fa-arrow-left"></i><img src="{{ asset('frontend/bookedresource') }}/assets/images/sales-page/logo.png" alt=""></a>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li><a href="#top" class="active">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--================  End Header Section  ================-->

        <!--================  Start Checkout Section  ================-->
        <section class="checkout_section_main">
            <div class="container">
                    @include('sweetalert::alert')
                <div class="row">
                    <div class="col-md-12">
                        <div class="checkout_section">

							<form action="{{ url('checkout-resource') }}" method="post">
								<div class="checkout_contents_all">
								    <div class="checkout_contents_left">
								    	<!-- Start Content Box 1 -->
									    <div class="left-box" id="contentBox1">
								    		<div class="checkout_default_title"><p>Your Details</p></div>
									        <div class="checkout_your_details_contents">
									        	<div class="single_input_item sii_modulas3">
									        		<label for="id1">First Name <span>*</span></label>
									        		@csrf
									        		
							    @if($id==1)
							    <input type="hidden" name="resource_name" value="Year-1">
							    @elseif($id==2)
							     <input type="hidden" name="resource_name" value="Year-2">
							     @elseif($id==3)
							     <input type="hidden" name="resource_name" value="Year-3">
							      @elseif($id==4)
							     <input type="hidden" name="resource_name" value="Year-4">
							      @elseif($id==5)
							     <input type="hidden" name="resource_name" value="Year-5">
							      @elseif($id==6)
							     <input type="hidden" name="resource_name" value="Year-6">
							     @endif
							     
							     
							     
							     
									        	
                                  <input type="hidden" id="total_amount" name="total_amount" value="0">
									        		
									        		
									        		<input type="text" name="name" id="id1" placeholder="Please Enter First name" required value="{{ old('name') }}">
									        		
									        		@error('name')
    <div style="color:red">{{ $message }}</div>
@enderror
									        		
									        	</div>
									        	<div class="single_input_item sii_modulas3">
									        		<label for="id2">Middle Name</label>
									        		<input type="text" name="middle_name" id="id2" placeholder="Please Enter Middle name" value="{{ old('name') }}">
									        		
									        	</div>
									        	<div class="single_input_item sii_modulas3">
									        		<label for="id3">Last Name <span>*</span></label>
									        		<input  name="last_name" type="text" id="id3" placeholder="Please Enter Last name" required value="{{ old('last_name') }}">
									        		@error('last_name')
    <div style="color:red">{{ $message }}</div>
@enderror
									        	</div>
									        	<div class="single_input_item">
									        		<label for="id4">Email <span>*</span></label>
									        		<input type="email" name="email" id="id4" placeholder="Type Your Email" required value="{{ old('email') }}">
									        	</div>
									        	<div class="single_input_item singl e_input_item_flag">
									        		<label for="flag1">Phone<span>*</span></label>
													<div class="phone-input flag_input_default">
			                                            <div class="flag-select">
			                                            <img id="flag-icon" src="https://flagcdn.com/w320/gb.png" alt="Country Flag" class="flag-icon">
			                                                <select id="country-code" class="country-code" required>
			                                                    <option value="+44" data-flag="https://flagcdn.com/w320/gb.png" selected="">+44</option>
			                                                    <option value="+1" data-flag="https://flagcdn.com/w320/us.png">+1</option>
			                                                    <option value="+91" data-flag="https://flagcdn.com/w320/it.png">+39</option>
			                                                </select>
			                                            </div>
			                                            <input type="text" placeholder="Your Number" name="phone" class="phone-number" required value="{{ old('phone') }}">
			                                        </div>
									        	</div>
									        	<div class="single_input_item">
									        		<label for="id5">Address Line <span>*</span></label>
									        		<input type="text" name="address" id="id5" placeholder="Please Enter Address Line" required value="{{ old('address') }}">
									        	</div>
									        	<div class="single_input_item">
									        		<label for="id6">Post Code <span>*</span></label>
									        		<input type="text" name="post_code" id="id6" placeholder="Please Enter Post Code" required value="{{ old('post_code') }}">
									        	</div>
									        </div>

								    		<div class="checkout_default_title mt-3"><p>Selected Books</p></div>
								    		<div class="select_books_contents">
								    			<div class="book-selection">
												    <label class="book-option">
												        <input type="radio" name="resource_type" value="combo">
												        <span class="custom-radio"></span>
												        <div class="book-details">
												            <h4>The Full Package in £50</h4>
												            <ul>
												                <li><span><img src="{{ asset('frontend/bookedresource') }}/assets/images/checkout/check.png" alt=""></span> All 4 Workbooks</li>
												                <li><span><img src="{{ asset('frontend/bookedresource') }}/assets/images/checkout/check.png" alt=""></span> Answer Sheets for all workbooks</li>
												                <li><span><img src="{{ asset('frontend/bookedresource') }}/assets/images/checkout/check.png" alt=""></span> Bonus Guidebooks</li>
												                <li><span><img src="{{ asset('frontend/bookedresource') }}/assets/images/checkout/check.png" alt=""></span> Additional Practice Questions</li>
												            </ul>
												        </div>
												        <span class="book_option_save">
												        	<img src="{{ asset('frontend/bookedresource') }}/assets/images/checkout/save.png" alt="">
												        	<p>Save <br><b>£ 40</b></p>
												        </span>
												    </label>

												    <label class="book-option">
												        <input type="radio" name="resource_type" value="individual">
												        <span class="custom-radio"></span>
												        <div class="book-details">
												            <h4>Pick and Choose</h4>
												            <div class="pick_choose_contents">
												            	<div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb1" class="paccheckbox" name="resource_details[]" value="Workbook 1">
																    <label for="cb1">  @if($id==1) Year 1 @elseif($id==2) Year 2 @elseif($id==3) Year 3
							      @elseif($id==4) Year 4 @elseif($id==5) Year 5
							      @elseif($id==6) Year 6 @endif Workbook 1 <b>£15</b></label>
																</div>
																
																
																
													            <div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb2" class="paccheckbox"  name="resource_details[]" value="Workbook 2">
																    <label for="cb2">  @if($id==1) Year 1 @elseif($id==2) Year 2 @elseif($id==3) Year 3
							      @elseif($id==4) Year 4 @elseif($id==5) Year 5
							      @elseif($id==6) Year 6 @endif Workbook 2 <b>£15</b></label>
																</div>
																
																
																
													            <div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb3" class="paccheckbox" name="resource_details[]" value="Workbook 3">
																    <label for="cb3">  @if($id==1) Year 1 @elseif($id==2) Year 2 @elseif($id==3) Year 3
							      @elseif($id==4) Year 4 @elseif($id==5) Year 5
							      @elseif($id==6) Year 6 @endif Workbook 3 <b>£15</b></label>
																</div>
																
													            <div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb4" class="paccheckbox" name="resource_details[]" value="Workbook 4">
																    <label for="cb4">  @if($id==1) Year 1 @elseif($id==2) Year 2 @elseif($id==3) Year 3
							      @elseif($id==4) Year 4 @elseif($id==5) Year 5
							      @elseif($id==6) Year 6 @endif Workbook 4 <b>£15</b></label>
																</div>
																
																 <div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb5" class="paccheckbox" name="resource_details[]" value="Workbook 4">
																    <label for="cb5">Answer Book   <b>£10</b></label>
																</div>
																
																	 <div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb6" class="paccheckbox" name="resource_details[]" value="Workbook 4">
																    <label for="cb6">Test Book   <b>£10</b></label>
																</div>
																
																
																	 <div class="pick_choose_checkbox">
																    <input type="checkbox" id="cb7" class="paccheckbox" name="resource_details[]" value="Workbook 4">
																    <label for="cb7">Test Answers   <b>£10</b></label>
																</div>
																
												            </div>
												        </div>
												    </label>
												</div>
								    		</div>	
								    		
								    							        		@error('resource_type')
                                            <div style="color:red">{{ $message }}</div>
                                        @enderror
									    </div>
									    <!-- End Content Box 1 -->

									    <!-- Start Content Box 2 -->
									    <div class="left-box" id="contentBox2">
									        <h3>PayPal Payment</h3>
									        <p>This is the PayPal payment section.</p>
									    </div>
									    <!-- End Content Box 2 -->
								    </div>

								    <!-- Right Site(Payment Radio) Design -->
								    <div class="checkout_contents_right">
								    	<div class="checkout_right_contents">
								    		<div class="checkout_default_title"><p>Card Payment</p></div>
									    	<div class="card-payment">
										        <label class="card-option">
										            <input type="radio" name="payment" id="visa" checked onclick="changeTab(1)">
										            <span class="custom-radio"></span>
										            <img src="{{ asset('frontend/bookedresource') }}/assets/images/checkout/visa.png" alt="Visa">
										        </label>
										    </div>
								    	</div>

									    <div class="checkout_submit">
									    	<p>
									    		<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.39014 15.7803C12.4716 15.7803 15.7803 12.4716 15.7803 8.39014C15.7803 4.30868 12.4716 1 8.39014 1C4.30868 1 1 4.30868 1 8.39014C1 12.4716 4.30868 15.7803 8.39014 15.7803Z" stroke="#0B0D1E" stroke-width="1.2"/>
													<path d="M8.39026 8.24121V12.2359" stroke="#0B0D1E" stroke-width="1.2" stroke-linecap="round"/>
													<path d="M8.39002 6.54323C8.94157 6.54323 9.38869 6.09611 9.38869 5.54457C9.38869 4.99302 8.94157 4.5459 8.39002 4.5459C7.83848 4.5459 7.39136 4.99302 7.39136 5.54457C7.39136 6.09611 7.83848 6.54323 8.39002 6.54323Z" fill="#0B0D1E"/>
												</svg>
									    		Additional £ 5 charge for postal service 
									    	</p>
									    	<button type="submit" class="btn_style">
			                                    <span id="my_amount">£ 0</span>
			                                    Make Payment
			                                    <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
			                                        <path d="M19.5082 34.33C28.1063 34.33 35.0765 27.3599 35.0765 18.7617C35.0765 10.1635 28.1063 3.19336 19.5082 3.19336C10.91 3.19336 3.93982 10.1635 3.93982 18.7617C3.93982 27.3599 10.91 34.33 19.5082 34.33Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
			                                        <path class="changepathcolor" d="M19.5082 24.9879L25.7355 18.7605L19.5082 12.5332" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
			                                        <path class="changepathcolor" d="M13.2808 18.7598H25.7354" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
			                                    </svg>
			                                </button>
									    </div>
								    </div>

								    <div class="mobile_submit_btn">
								    	<div class="checkout_submit">
									    	<p>
									    		<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M8.39014 15.7803C12.4716 15.7803 15.7803 12.4716 15.7803 8.39014C15.7803 4.30868 12.4716 1 8.39014 1C4.30868 1 1 4.30868 1 8.39014C1 12.4716 4.30868 15.7803 8.39014 15.7803Z" stroke="#0B0D1E" stroke-width="1.2"/>
													<path d="M8.39026 8.24121V12.2359" stroke="#0B0D1E" stroke-width="1.2" stroke-linecap="round"/>
													<path d="M8.39002 6.54323C8.94157 6.54323 9.38869 6.09611 9.38869 5.54457C9.38869 4.99302 8.94157 4.5459 8.39002 4.5459C7.83848 4.5459 7.39136 4.99302 7.39136 5.54457C7.39136 6.09611 7.83848 6.54323 8.39002 6.54323Z" fill="#0B0D1E"/>
												</svg>
									    		Additional £ 5 charge for postal service 
									    	</p>
									    	<button type="submit" class="btn_style">
			                                    <span id="myamoun">£ 00</span>
			                                    Make Payment
			                                    <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
			                                        <path d="M19.5082 34.33C28.1063 34.33 35.0765 27.3599 35.0765 18.7617C35.0765 10.1635 28.1063 3.19336 19.5082 3.19336C10.91 3.19336 3.93982 10.1635 3.93982 18.7617C3.93982 27.3599 10.91 34.33 19.5082 34.33Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
			                                        <path class="changepathcolor" d="M19.5082 24.9879L25.7355 18.7605L19.5082 12.5332" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
			                                        <path class="changepathcolor" d="M13.2808 18.7598H25.7354" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
			                                    </svg>
			                                </button>
									    </div>
								    </div>
								</div>
							</form>	

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End Checkout Section  ================-->




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
{{-- 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>Year1 Workbooks | {{ $companyInformation->company_name }}  </title>
        
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

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '2154849104915670');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=2154849104915670&ev=PageView&noscript=1"
/></noscript>



<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '3452523841723929');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=3452523841723929&ev=PageView&noscript=1"
/></noscript>

        
        
        
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
                                <a href="#">
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

 
        <!--================  End (TESTIMONIAL) Section  ================-->

        <!--================  Start (Order Now) Section  ================-->
        <section class="order_now_bottom_main">
            <div class="container">
                <div class="row">
                    <form action="{{ url('checkout-resource') }}" method="post">                <div class="col-md-6">
                        <div class="order_now_bottom">
                            <div class="default_title order_now_title2">
                                <span>   Checkout </span>
                                <h3>Basic Info</h3>
                            </div>
                        </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Name</label>
                                  <input type="hidden" name="resource_name" value="Year-1">
                                  <input type="hidden" name="total_amount" value="45">
                                  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter Full Name" required>
                                  @csrf
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                  <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                  <input type="text"  name="phone" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                  <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div> 
                                <div class="mb-3">
                                  <label for="exampleFormControlInput1" class="form-label">Post Code</label>
                                  <input type="text"  name="post_code" class="form-control" id="exampleFormControlInput1">
                                </div>
                    </div>
                    <div class="col-md-6">
                        <div class="order_now_bottom">
                            <div class="default_title order_now_title2">
                                <span>Checkout </span>
                              
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="resource_type" value="individual">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Individual
                                  </label>
                                </div>
                            
                               
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="resource_details[]" value="paper 1">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    paper 1
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="resource_details[]" value="paper 2">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    paper 2
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="resource_details[]" value="paper 3">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    paper 3
                                  </label>
                                </div>
                                  <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="resource_details[]" value="paper 4">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    paper 4
                                  </label>
                                </div>
                               <hr>
                               
                                 <div class="form-check">
                                  <input class="form-check-input" type="radio" name="resource_type" value="ComboPack">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    ComboPack
                                  </label>
                                </div>
                                    <div class="form-check">
                                  <input class="form-check-input" type="radio" name="payment_method" value="card" checked>
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Pay with Card
                                  </label>
                                </div>
                               
                                <button type="submit" class="btn_style">
                                    Submit
                                    <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.5082 34.33C28.1063 34.33 35.0765 27.3599 35.0765 18.7617C35.0765 10.1635 28.1063 3.19336 19.5082 3.19336C10.91 3.19336 3.93982 10.1635 3.93982 18.7617C3.93982 27.3599 10.91 34.33 19.5082 34.33Z" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path class="changepathcolor" d="M19.5082 24.9879L25.7355 18.7605L19.5082 12.5332" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path class="changepathcolor" d="M13.2808 18.7598H25.7354" stroke="white" stroke-width="1.16087" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
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
--}}


<script>
    $(document).ready(function() {
    function calculateTotal() {
        let total = 0;
        let deliveryCharge = 5;
        let isCombo = $("input[name='resource_type'][value='combo']").prop('checked');
        let isIndividual = $("input[name='resource_type'][value='individual']").prop('checked');
        let selectedWorkbooks = $("input[name='resource_details[]']:checked");
        
        if (isCombo) {
            total = 50 + deliveryCharge;
        } else if (isIndividual) {
            if (selectedWorkbooks.length > 0) {
                
                total = selectedWorkbooks.length * 15 + deliveryCharge;
                
                
            }
        }
        
        $("#total_amount").val(total);
        $("#my_amount").html('£'+total);
    }

    $("input[name='resource_type'], input[name='resource_details[]']").on("change", function() {
        calculateTotal();
    });

    calculateTotal();
});

</script>