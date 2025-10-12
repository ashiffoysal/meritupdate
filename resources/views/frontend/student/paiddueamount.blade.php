@extends('layouts.frontend')
@section('title', 'Payment')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="{{ asset('frontend/card/card.css') }}">
 <script src="{{asset('frontend/card/card.js')}}"></script>

<style>
    .page-banner-area {
    padding-top: 60px;
    padding-bottom: 50px;
}
.main-navbar .navbar .navbar-nav .nav-item a i {
  
    top: 0px !important; 
 
}
span.btn {
    font-size: 9px !important;
}

.asifdesign {
    padding: 10px 10px;
    background: #f5f5f5;
    border-radius: 8px;
    margin: 19px 10px;
}
</style>
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Dashboard</h2>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    aside#layout-menu {
    margin: 15px 0px 0px 50px;
     height: 800px;
}

</style>

   @include('frontend.student.include.tutorcss')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" style="padding-top:20px">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="position: relative;">
          <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
              
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
           @include('frontend.student.include.sidebar')
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
               
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  
                @include('frontend.student.include.headernotify')
                
                </div>
              </div>
              <!-- /Search -->
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                
                @include('frontend.student.include.dasboardheader')
                
              </ul>
            </div>
          </nav>
          <!-- Content wrapper -->
          <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="card mt-1">
                        <h5 class="card-header"></h5>
                        <div class="row " style="margin:0px 0px">
                            <div class="col-md-3" style="margin:10px 20px">
                                <h3>Please Purchace Hour!</h3>
                                <p>we have  return payment-policy</p>
                            </div>
                        </div>
                        <div class="card-body">
                             <div class="row">
    
                               <form role="form" action="{{  url('/student/due_amount/paid/'.$order_id)  }}" method="POST"
                                                class="require-validation" data-cc-on-file="false" id="payment-form" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}">
                                     {{ csrf_field() }}
                        	 <section class="quote-area" style="">
                        	      <div class="container">
                                    <div class="row">
                                        <div class="">
                                            <div class="asif-tutor col-lg-12 row">
                                                
                                                <div class="col-md-6">
                                                    	<div class="mb-3">
                                                            <label for="exampleInputEmail1" class="form-label">Order ID</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->order_id }}" disabled> 
                                                            
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                	<div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Subject</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->subject }}" disabled>
                                                      
                                                      </div>
                                                </div>
                                                  <div class="col-md-6">
                                                	<div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Tutor & Rate</label>
                                                        @php
                                                            $tutor=App\Models\User::where('id',$data->tutor_id)->select(['id','name'])->first();
                                                        @endphp
                                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $tutor->name }}-( £ {{ $data->hourly_rate }})" disabled>
                                                        
                                                
                                                        
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                	<div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Hour</label>
                                                      <select id="main_hour" class="form-select" name="hour" aria-label="Default select example">
                                              
                                            <option disabled selected>Select</option>
                                            <option value="1">1 Hour</option>
                                            <option value="2">2 Hour</option>
                                            <option value="3">3 Hour</option>
                                            <option value="4">4 Hour</option>
                                            <option value="5">5 Hour</option>
                                            <option value="6">6 Hour</option>
                                            <option value="7">7 Hour</option>
                                            <option value="8">8 Hour</option>
                                            <option value="9">9 Hour</option>
                                            <option value="10">10 Hour</option>
                                            <option value="11">11 Hour</option>
                                            <option value="12">12 Hour</option>
                                            <option value="13">13 Hour</option>
                                            <option value="14">14 Hour</option>
                                            <option value="15">15 Hour</option>
                                            <option value="16">16 Hour</option>
                                            <option value="17">17 Hour</option>
                                            <option value="18">18 Hour</option>
                                            <option value="19">19 Hour</option>
                                            <option value="20">20 Hour</option>
                                            <option value="21">21 Hour</option>
                                            <option value="22">22 Hour</option>
                                            <option value="23">23 Hour</option>
                                            <option value="24">24 Hour</option>
                                            <option value="25">25 Hour</option>
                                            <option value="26">26 Hour</option>
                                            <option value="27">27 Hour</option>
                                            <option value="28">28 Hour</option>
                                            <option value="29">29 Hour</option>
                                            <option value="30">30 Hour</option>
                                            <option value="31">31 Hour</option>
                                            <option value="32">32 Hour</option>
                                            <option value="33">33 Hour</option>
                                            <option value="34">34 Hour</option>
                                            <option value="35">35 Hour</option>
                                            <option value="36">36 Hour</option>
                                            <option value="37">37 Hour</option>
                                            <option value="38">38 Hour</option>
                                            <option value="39">39 Hour</option>
                                            <option value="40">40 Hour</option>
                                            <option value="41">41 Hour</option>
                                            <option value="42">42 Hour</option>
                                            <option value="43">43 Hour</option>
                                            <option value="44">44 Hour</option>
                                            <option value="45">45 Hour</option>
                                            <option value="46">46 Hour</option>
                                            <option value="47">47 Hour</option>
                                            <option value="48">48 Hour</option>
                                            <option value="49">49 Hour</option>
                                            <option value="50">50 Hour</option>
                                         
                                            <option value="55">55 Hour</option>
                                           
                                            <option value="60">60 Hour</option>
                                            
                                            <option value="65">65 Hour</option>
                                           
                                            <option value="70">70 Hour</option>
                                            <option value="80">80 Hour</option>
                                            <option value="100">100 Hour</option>
                                            <option value="150">150 Hour</option>
                                            <option value="200">200 Hour</option>
                                           
                                              </select>
                                                        
                                                      </div>
                                                      @error('hour')
    <div style="color:red">{{ $message }}</div>
@enderror
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="asifdesign">
                                            <div class="asif-tutor col-lg-12 row">
                                                   <div class="col-md-6">
                                            
													<p>Total Hour:<span id="total_hour_text">0 hour</span></p>
                                                </div>
                                                   <div class="col-md-6">
                                          
													<p>Total Amount:<span id="total_amount_text">0 £</span></p>
                                                
                                                  
                                                </div>
                                                <div class="col-md-6">
                                                
                                                    <p>Discount Amount:<span id="discount_amount_text">0 £</span></p>
                                                   
                                                </div>
                                                <div class="col-md-6">
                                                
                                                    <p>Pay Amount:<span id="pay_amount_text">0 £</span></p>
                                                   
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                             <button type="button" class="btn btn-danger btn-block stripebtn" data-toggle="modal" data-target="#StripeCardModal">Pay with Stripe </button>
                                        </div>
                                        <div class="col-md-12">
                                       <div class="modal fade" id="StripeCardModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pay with Stripe</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="demo-container">
                                            <div class="card-wrapper" style="margin-bottom: 30px;"></div>
                                         
                        
                                              
                                                            <input type="hidden" name="total_hours" id="total_hours" value="">
                        
                                                                              <input type="hidden" name="tutor_rate" id="tutor_rate" value="{{ $data->hourly_rate }}">
                                                                              <input type="hidden" name="total_amount" id="total_amount" value="">
                                                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                                                <input type="hidden" name="order_id" value="{{ $data->order_id }}">
                                                                                <input type="hidden" name="amount" id="amount" value="">
                                                <div class="row" style="margin-left: 0px;">
                                                    <div class="col-md-12">
                                                        <div><p class="stripe-error py-3 text-danger"></p></div>
                                                    </div>
                                                    <div class="col-md-12 required" style="margin-top: 10px;">
                                                        <div class="form-group">
                                                            <label style="margin-top: 8px;     font-size: 16px;" class="control-label">Card Number</label>
                                                            <input style="width: 96%;height: 24px;" type="text" autocomplete='off' class="form-control card-number" required size="20" name="number">
                                                        </div>
                                                    </div>
                        
                                                    <div class="col-md-12 required">
                                                        <div class="form-group">
                                                            <label style="margin-top: 8px;     font-size: 16px;" class="control-label">Name on Card</label>
                                                            <input style="width: 96%;height: 24px;" type="text" class="form-control" required size="4" name="name">
                                                        </div>
                                                    </div>
                        <div class="for-setting" style="display: flex;">
                                                    <div class="col-md-4 required" style="width: 33%">
                                                        <div class="form-group">
                                                            <label style="margin-top: 8px;     font-size: 16px;" class='control-label'>CVC</label>
                                                            <input  type="text" autocomplete="off" class="form-control card-cvc" required placeholder="ex. 311" size="4" name="cvc" style="width: 73%; height: 24px">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class="form-group">
                                                            <label style="margin-top: 8px;     font-size: 16px;" class="control-label">Expiration Month</label>
                                                            <input  type="text" class="form-control card-expiry-month" required placeholder="MM" size="2" name="expiry" style="width: 73%; height: 24px">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" style="width: 33%">
                                                        <div class="form-group">
                                                            <label style="margin-top: 8px;     font-size: 16px;" class='control-label'>Expiration Year</label>
                                                            <input type="text" class="form-control card-expiry-year" required placeholder="YYYY" size="4" style="width: 73%; height: 24px">
                                                        </div>
                                                    </div>
                        </div>
                                                </div>
                        
                                                <div class="row" style="margin-left: 0px;">
                                                    <div class="col-md-12">
                                                        <hr>
                                                        <input style="width: 96%;height: 24px;" type="hidden" name="stipe_payment_btn" value="1">
                                                        <button type="submit" class="btn btn-primary btn-sm btn-block stripebtn">Pay with Stripe</button>
                                                    </div>
                                                </div>
                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                             </section>
                             </form>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

@include('frontend.student.include.tutorjs')

<script>
    $(document).ready(function(){
        $("#main_hour").change(function(){
            
            $("#total_hour_text").empty();
            $("#total_amount_text").empty();
            $("#discount_amount_text").empty();
            $("#pay_amount_text").empty();
            
            $("#total_amount").empty();
            $("#amount").empty();
            
            $(".stripebtn").html('Pay with Stripe');
         
            
             
            var hour=$(this).val();
            var rate=$("#tutor_rate").val();
            var total_amount=hour * rate;
            $("#total_hour_text").html(hour+'Hours');
            $("#total_amount_text").html(' £'+total_amount);
            
            $("#total_hours").val(hour);
            
            
            if(hour >19 &&  hour < 49){
                
                var main_discouunt=total_amount * 10/100;
                $("#discount_amount_text").html(' £ '+main_discouunt);
                
                
                $("#total_amount").val(total_amount);
                $("#amount").val(total_amount-main_discouunt);
                 
                   var btnamount=total_amount-main_discouunt;
                $(".stripebtn").html('Pay with Stripe( £'+ btnamount +')');
                 $("#pay_amount_text").html(' £ '+ btnamount);
                    
                 
            }else if(hour >49 &&  hour < 1000){
                
                  var main_discouunt=total_amount * 15/100;
                  $("#discount_amount_text").html(' £ '+main_discouunt);
                  
                 $("#total_amount").val(total_amount);
                $("#amount").val(total_amount-main_discouunt);
                var btnamount=total_amount-main_discouunt;
                $(".stripebtn").html('Pay with Stripe( £'+ btnamount +')');
                
                $("#pay_amount_text").html(' £ '+ btnamount);
            }else{
                 $("#discount_amount_text").html( 0 +'Hours');
                 $("#pay_amount_text").html(' £ '+total_amount);
                 $("#total_amount").val(total_amount);
                 $("#amount").val(total_amount);
                 
                    $(".stripebtn").html('Pay with Stripe( £'+ total_amount +')');
            }
            
            
            
            
            
           
            
            
            
        });
    });
</script>


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    var $form = $(".require-validation");
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
            inputSelector = ['input[type=email]',
                            'input[type=password]',
                            'input[type=text]',
                            'input[type=file]',
                            'textarea'].join(', '),
            $inputs       = $form.find('.required').find(inputSelector),
            $errorMessage = $form.find('.inp-error'),
            valid         = true;
            $errorMessage.addClass('d-none');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('d-none');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
             
            e.preventDefault();
            Stripe.setPublishableKey($form.data('stripe-publishable-key'));
            Stripe.createToken({
                number: $('.card-number').val(),
                cvc: $('.card-cvc').val(),
                exp_month: $('.card-expiry-month').val(),
                exp_year: $('.card-expiry-year').val()
            }, stripeResponseHandler);
        }
    });
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.stripe-error').text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
});
</script>
<script>
        var c = new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
    </script>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection