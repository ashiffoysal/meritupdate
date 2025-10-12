@extends('layouts.frontend')
@section('title', 'Hire Tutor')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/mc-calendar.min.css" />
<script src="{{ asset('frontend') }}/datepicker/mc-calendar.min.js"></script>
<link href="{{asset('frontend/timepicker')}}/mdtimepicker.css" rel="stylesheet">


<style>
.checked {
  color: orange;
}
</style>
<!-- <script src="https://use.fontawesome.com/5f267863cb.js"></script> -->

<style>
.pricing-table .table tbody tr th {

    font-size: 14px;
}
.pricing-table .table thead th {

    font-size: 14px;
  
}
.teacher-details-information {
 
    border-top: 3px solid #02ff6a;
 
}
.teacher-details-information h3::before {

    background-color: #02ff6a;
}
.pricing-table .table tbody tr td {
    border: 1px solid #f0f0f0;
    font-weight: 400;
    color: #6b6b84;
    overflow-x: auto;
    font-family: "Roboto", sans-serif;
    padding: 22px 25px;
    font-size: 16px;
}


blockquote, .blockquote {
    background-color: #fafafa;
    padding: 30px !important;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px;
    border-left: 3px solid #02ff6a;
    border-right: 3px solid #02ff6a;
    border-radius: 5px;
}
img.asifimage {
    height: 80px;
    margin: 10px 0px;
    padding: 10px 10px;
    border: 1px solid;
    border-radius: 14%;
}
</style>
    <!-- Start Page Banner -->
    <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>TUTOR HIRE</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>TUTOR HIRE</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        <!-- Start Teacher Details Area -->
        <section class="teacher-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12 row " style="padding:30px 20px">
                        <h3>Book your lesson </h3>
                        <p>Unsure? Need some clarification? speak to the tutor and see if they can assist you. </p>
                    </div>
                    <div class="col-lg-8 col-md-12 row">
                        <div class="col-md-12">
                            <section class="quote-area" style="padding:0px 0px 30px 0px">
                                <div class="container">
                                    <div class="row">
                                        <div class="quote-item">
                                            <div class="asif-tutor col-lg-12 row">
                            <form action="{{ url('/tutor/contact-a-tutor/submit') }}" method="post">
                                                @csrf
                                          
                                            <div class="form-group">
                                                <input type="hidden" name="tutor" value="{{ $data->id }}">
                                                <input type="hidden" name="hourly_rate" value="{{ $data->expected_hourly_rate }}">

                                                <label for="exampleInputEmail1" style="font-weight:600">Tutor For</label>
                                                <select name="tutor_type" class="form-control" id="">
                                                    @if($data->for_home_tutor==1)
                                                    <option value="For Home">For Home</option>
                                                    @endif
                                                    @if($data->for_online_tutor==1)
                                                    <option value="For Online">For Online</option>
                                                    @endif
                                                </select>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1" style="font-weight:600">Subject</label>
                                                <select name="subject" class="form-control" id="">
                                                @php
                                             $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', $data->id)->get();
                                            @endphp
                                                  @foreach($subjectstutor as $sub)
                                                    <option value="{{$sub->Subject->name}}">{{$sub->Subject->name}}</option>
                                                @endforeach
                                                
                                                 @if($data->other_subject_name !=NULL)
                                        @foreach(json_decode($data->other_subject_name) as $submore)
                                        <option value="{{$submore}}">{{$submore}}</option>
                                        @endforeach
                                         
                                    @endif
                                                </select>
                                                
                                            </div>

                                   
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"  style="font-weight:600">Level</label>
                                                <select name="level" class="form-control" id="">
                                                    <option value="GCSE">GCSE</option>
                                                    <option value="KS1">KS1</option>
                                                    <option value="KS2">KS2</option>
                                                    <option value="KS3">KS3</option>
                                                    <option value="11 Plus">11 Plus</option>
                                                    <option value="A level">A Level</option>
                                                </select>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputPassword1"  style="font-weight:600">Exam Board (Optional)</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio5" value="AQA">
                                                    <label class="form-check-label" for="inlineRadio5">AQA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio6" value="EDEXCEL">
                                                    <label class="form-check-label" for="inlineRadio6">EDEXCEL</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio7" value="OCR">
                                                    <label class="form-check-label" for="inlineRadio7">OCR</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio8" value="CIE">
                                                    <label class="form-check-label" for="inlineRadio8">CIE</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio9" value="OTHER" checked>
                                                    <label class="form-check-label" for="inlineRadio9">OTHER</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1"style="font-weight:600">How often would you like lessons? (Required)</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio1" value="ONCE A WEEK" checked>
                                                    <label class="form-check-label" for="inlineRadio1">ONCE A WEEK</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio2" value="TWICE A WEEK">
                                                    <label class="form-check-label" for="inlineRadio2">TWICE A WEEK</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio3" value="FORTNIGHTLY">
                                                    <label class="form-check-label" for="inlineRadio3">THRICE A WEEK</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"  style="font-weight:600">Start Date <span style="color:red"> (Optional)</span></label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                                <input class="form-control" name="date" id="example" type="text" placeholder="Enter Start Date" value="{{ Carbon\Carbon::today()->toDateString() }}" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"  style="font-weight:600">End Date <span style="color:red"> (Optional)</span></label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                                <input class="form-control exampletwo" name="enddate" id="exampletwo" type="text" placeholder="Enter End Date"  value="{{ Carbon\Carbon::today()->toDateString() }}"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="hour"  style="font-weight:600">Hour <span style="color:red"> *</span><br><span  style="color:green;font-size:12px"> ( A 10% discount is available for lesson bookings over 20 hours and a 15% discount is in place for bookings over 50 hours. )</span></label>
                                                <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                              <select name="main_total_hour" class="form-control">
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
                                            
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"  style="font-weight:600">Pick Time (Approximate Schedule-Time)</label>
                                                <input type="text" name="time" id="timepicker" class="form-control timepicker" placeholder="Enter Pick Time">
                                            </div>
                                            @php
                                            $check=App\Models\StudentTutorRequest::where('is_approve',0)->where('is_deleted',0)->where('student_id',Auth::user()->id)->where('tutor_id',$data->id)->select(['id'])->first();
                                            @endphp
                                            @if($check)
                                            
                                            <span style="color:red">You Allready Submit Request This Tutor.Please Wait For Confirmation</span>
                                            @else
                                            <button type="submit" class="btn default-btn">Go-To Payment</button>
                                            @endif
                                            </form>
                                                    
                                          
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="teacher-details-information">
                            <h3>Profile Details</h3>
                            <img class="asifimage" src="{{ asset('/'.$data->photo) }}">
                            <ul>
                                <li>
                                    <span>Name:</span>
                                    {{$data->name}}
                                </li>
                               
                                <li>
                                    <span>Address:</span>
                                    {{$data->city}}
                                </li>
                                <li>
                                    <span>Tutor Type:</span>
                                     @if($data->for_home_tutor==1)
                                    <span class="btn-sm btn-danger" style="font-size: 12px;margin:0px 5px;color:#fff;background:#00918a !important;border-color:#00918a !important">HOME TUTOR</span>
                                     @endif
                                     @if($data->for_online_tutor==1)
                                    <span class="btn-sm btn-danger" style="font-size: 12px;margin:0px 5px;color:#fff;background:#00918a !important;border-color:#00918a !important">ONLINE TUTOR</span>
                                     @endif
                                      
                                    
                                    
                                    
                                </li>
                            </ul>
                        </div>
                         
                    </div>
                </div>
            </div>
        </section>
        <!-- End Teacher Details Area -->
        <script>
            const myDatePicker = MCDatepicker.create({ 
                el: '#example',
                dateFormat: 'MMM-DD-YYYY',
            });
        </script>
          <script>
            const mydDatePicker = MCDatepicker.create({ 
                el: '#exampletwo',
                dateFormat: 'MMM-DD-YYYY',
            });
        </script>
@endsection