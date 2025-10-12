@extends('layouts.frontend')
@section('title', 'Student Request Information')
@section('content')
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
                 <div class="card mt-2">
                    <h5 class="card-header">Student Request Details</h5>
                    
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                        
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Student Name:</label> <span> {{$data->Student->name}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">School:</label><span>@if($data->tutor_is_approve==1) {{ $data->Student->student_school }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Country:</label><span>@if($data->tutor_is_approve==1) {{ $data->Student->country }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">City:</label><span>@if($data->tutor_is_approve==1) {{ $data->Student->city }} @else Hidden @endif</span>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Address Line1:</label><span> @if($data->tutor_is_approve==1) {{ $data->Student->address }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Address Line2:</label><span> @if($data->tutor_is_approve==1) {{ $data->Student->address_two }} @else Hidden @endif</span>
                                        </div>
                                    </div>
                               
                            </div>
                            
                               <div class="col-md-12">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Subject:</label> <span> {{$data->subject}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Pick Date:</label><span> {{$data->pick_date }}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Order Id:</label> <span> {{$data->order_id}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Pick Time:</label><span> {{$data->pick_time }} </span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Lessons Type:</label><span>{{ $data->lessons_type }} </span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Exam Board:</label><span>@if($data->tutor_is_approve==1) {{ $data->exam_board }} @else Hidden @endif</span>
                                        </div>
                                       
                                    </div>
                                
                           
                            </div>
                        </div>
                    </div>
                </div>
               <!--end-->
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
        $("#imagep").click(function(){
           $("#pdf_section").hide(); 
           $("#image_section").show(); 
        });
          $("#pdf").click(function(){
           $("#pdf_section").show(); 
           $("#image_section").hide(); 
        });
    });
</script>

@endsection