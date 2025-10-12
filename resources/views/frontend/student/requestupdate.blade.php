@extends('layouts.frontend')
@section('title', 'Request Update')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/mc-calendar.min.css" />
<script src="{{ asset('frontend') }}/datepicker/mc-calendar.min.js"></script>
<link href="{{asset('frontend/timepicker')}}/mdtimepicker.css" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
          
         

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
               <!--start-->
                <!---->
                 <div class="card mt-1">
                    <h5 class="card-header">My Request Update</h5>
                            
                    
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                                 <form action="{{ url('/student/tutorrequestlist/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-2 ">
                                    <input type="hidden" name="id" value="{{ $data->id }}">
                                    <label for="exampleInputEmail1" style="font-weight:600">Tutor Name</label>
                                    <input type="text" disabled class="form-control" value="{{ $data->Tutor->name }} (Rate: {{  $data->Tutor->expected_hourly_rate }} per Hour ) ">
                                    
                                </div>
                                <div class="form-group  mb-2">
                              
                                    <label for="exampleInputEmail1" style="font-weight:600">Tutor For</label>
                                    <select name="tutor_type" class="form-control" id="">
                                        <option value="For Home" @if($data->tutor_for=="For Home") selected @endif>For Home</option>
                                        <option value="For Online" @if($data->tutor_for=="For Online") selected @endif>For Online</option>
                                    </select>
                                </div>

                                <div class="form-group  mb-2">
                                <label for="exampleInputEmail1" style="font-weight:600">Subject</label>
                                    <select disabled name="subject" class="form-control" id="">
                                        @foreach($allsubject as $subject)
                                        <option value="{{$subject->name}}" @if($data->subject==$subject->name) selected @endif>{{$subject->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group  mb-2">
                                <label for="exampleInputEmail1" style="font-weight:600">Level</label>
                                    <select name="level" class="form-control" id="">
                                        <option value="GCSE" @if($data->tutor_type=="GCSE") selected @endif>GCSE</option>
                                        <option value="KS1" @if($data->tutor_type=="KS1") selected @endif>KS1</option>
                                        <option value="KS2" @if($data->tutor_type=="KS2") selected @endif>KS2</option>
                                        <option value="KS3" @if($data->tutor_type=="KS3") selected @endif>KS3</option>
                                        <option value="11 Plus" @if($data->tutor_type=="11 Plus") selected @endif>11 Plus</option>
                                        <option value="A level" @if($data->tutor_type=="A level") selected @endif>A Level</option>
                                    </select>
                                </div>
                                <div class="form-group  mb-2">
                                            <label for="exampleInputPassword1"style="font-weight:600">How often would you like lessons? (Optional)</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio1" value="ONCE A WEEK" @if($data->lessons_type=="ONCE A WEEK") checked @endif>
                                                <label class="form-check-label" for="inlineRadio1">ONCE A WEEK</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio2" value="TWICE A WEEK" @if($data->lessons_type=="TWICE A WEEK") checked @endif>
                                                <label class="form-check-label" for="inlineRadio2">TWICE A WEEK</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio3" value="FORTNIGHTLY" @if($data->lessons_type=="FORTNIGHTLY") checked @endif>
                                                <label class="form-check-label" for="inlineRadio3">FORTNIGHTLY</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="lession_type" id="inlineRadio4" value="I’LL DECIDE LATER" @if($data->lessons_type=="I’LL DECIDE LATER") checked @endif>
                                                <label class="form-check-label" for="inlineRadio4">I’LL DECIDE LATER</label>
                                            </div>
                                </div>
                                <div class="form-group  mb-2">
                                    <label for="exampleInputPassword1"  style="font-weight:600">Exam Board (Optional)</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio5" value="AQA"  @if($data->exam_board=="AQA") checked @endif>
                                        <label class="form-check-label" for="inlineRadio5">AQA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio6" value="EDEXCEL"  @if($data->exam_board=="EDEXCEL") checked @endif>
                                        <label class="form-check-label" for="inlineRadio6">EDEXCEL</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio7" value="OCR"  @if($data->exam_board=="OCR") checked @endif>
                                        <label class="form-check-label" for="inlineRadio7">OCR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio8" value="SQA"  @if($data->exam_board=="SQA") checked @endif>
                                        <label class="form-check-label" for="inlineRadio8">SQA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="exam_board" id="inlineRadio9" value="OTHER"   @if($data->exam_board=="OTHER") checked @endif>
                                        <label class="form-check-label" for="inlineRadio9">OTHER</label>
                                    </div>
                                </div>

                                <div class="form-group  mb-2">
                                    <label for="exampleInputEmail1"  style="font-weight:600">Hour (Approximate Hour Which You Want)</label>
                                   <input type="text" class="form-control" disabled value="{{ $data->total_hour }} Hours">
                                </div>
                                <div class="form-group  mb-2">
                                    <label for="exampleInputEmail1"  style="font-weight:600">Start Day</label>
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                    <input class="form-control" name="date" id="example" type="text"  placeholder="Enter Start Date"  value="{{ $data->pick_date }}"/>
                                    @error('date')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group  mb-2">
                                    <label for="exampleInputEmail1"  style="font-weight:600">End Day(Optional)</label>
                                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Pick Day"> -->
                                    <input class="form-control" name="end_date" id="exampletwo" type="text"  placeholder="Enter End Date"  value="{{ $data->end_date }}"/>
                                    @error('date')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>




                                <div class="form-group mb-2">
                                    <label for="exampleInputEmail1"  style="font-weight:600">Pick Time(Optional)</label>
                                    <input type="text" name="time" id="timepicker" class="form-control timepicker" placeholder="Enter Pick Time" value="{{ $data->pick_time }}">
                                    @error('time')
                                        <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn-sm btn-success">
                                    Update
                                </button>
                            </form>
                                                    
                            </div>
                        </div>
                    </div>
                </div>
               <!--end-->
                </div>
            <!-- / Content -->
      

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