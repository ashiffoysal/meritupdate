@extends('layouts.frontend')
@section('title', 'Lesson Complete')
@section('content')

<link rel="stylesheet" href="{{ asset('frontend') }}/datepicker/mc-calendar.min.css" />
<script src="{{ asset('frontend') }}/datepicker/mc-calendar.min.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
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
                    <div class="card">
                    <h5 class="card-header">Add Lesson Complete Request</h5>
                    <div class="card-body">
                       <div class="content">
                                                      
                                                        <p> All completed lessons must be logged on below for record keeping purposes. Once submitted, it will be sent to the student to confirm the lesson.</p>
                                                    </div>
                                                  
                                                    <!--  -->
                                                    <form action="{{ url('/tutor/lesson-complete-add') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="row">
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Course List:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="course_list">
                                                                            @foreach($allorder as $order)
                                                                            <option value="{{ $order->id}}"> {{$order->order_id}}-{{ $order->subject }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    @error('course_list')
                                                                            <div style="color:red">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Subject:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="subject">
                                                    
                        <!---->
                        
                        
                          @if(Auth::user()->subject !=null)
                                            @php
                                                $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', Auth::user()->id)->get();
                                            @endphp
                                           @foreach($subjectstutor as $sub)
                                           @php
                                            $subjectname=App\Models\TutoringSubject::where('id',$sub->subject_id)->select(['name'])->first();
                                           @endphp
                                           @if($subjectname)
                                           
                                           <option value="{{$subjectname->name}}">{{$subjectname->name}}</option>
                                           @endif
                                            @endforeach
                                            
                                         @endif
                                         
                                @if(Auth::user()->other_subject_name !=null)
                                 @foreach(json_decode(Auth::user()->other_subject_name) as $submore)
                                      
                                         <option value="{{ $submore }}">{{ $submore }}</option>
                                @endforeach
                                        
                                @endif
                                <!---->
                                                                            <option value=""></option>
                                                                        </select>
                                                                       
                                                                    </div>
                                                                    @error('subject')
                                                                            <div style="color:red">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Hour:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <select class="form-control" name="hour">
                                                                            <option value="1">1 Hour</option>
                                                                            <option value="2">2 Hours</option>
                                                                            <option value="3">3 Hours</option>
                                                                            <option value="4">4 Hours</option>
                                                                            <option value="5">5 Hours</option>
                                                                        </select>
                                                                    </div>
                                                                    @error('Hour')
                                                                            <div style="color:red">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Lesson Complete Date:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <input class="form-control" name="date" id="example" type="text" placeholder="Enter Date">
                                                                    </div>
                                                                    @error('date')
                                                                            <div style="color:red">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Lesson Complete Details:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                     <textarea  class="form-control" name="lesson_complete_details" required></textarea>
                                                                    </div>
                                                                    @error('lesson_complete_details')
                                                                            <div style="color:red">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Any Query(Optional):</label>
                                                                    <div class="form-group">
                                                                     <textarea  class="form-control" name="query"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <button type="submit" class="btn btn-success">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                    </div>
                    <!---->
                    
              </div>
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
@endsection