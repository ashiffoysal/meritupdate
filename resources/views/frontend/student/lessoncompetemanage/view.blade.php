@extends('layouts.frontend')
@section('title', 'Student Lesson Details Information')
@section('content')
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
                 <div class="card mt-1">
                    <h5 class="card-header"><span class="badge bg-label-dark">Lesson Details</span></h5>
                            
                    
                    <div class="card-body">
                         <div class="row">
                          <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                 <p><span class="badge rounded-pill bg-label-success">Lesson Details</span></p>
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Lesson Complete Date:</label> {{ $data->date }} <span></span>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Order ID:</label> <span>  {{ $data->Course->order_id }} </span>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Subject:</label> <span>  {{ $data->subject }}</span>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Hour:</label><span>{{ $data->total_hour }}  Hours</span>
                                        </div>
                                        <br>
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Details:</label><span> {{ $data->lesson_complete_details }} </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                <p><span class="badge rounded-pill bg-label-success">Course Order Details</span></p>
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Tutor Name:</label>  <span>{{ $data->Tutor->name }}</span>
                                        </div>
                                        <br>
                                        @php
                                         $newpurchase_hour=DB::table('newpurchase_hour')->where('order_id',$data->order_id)->sum('total_hour');
                                          $newpurchase_amount=DB::table('newpurchase_hour')->where('order_id',$data->order_id)->sum('paid_amount');
                                         @endphp
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Total Hours(You purchase):</label> <span> {{ $data->Course->total_hour +  $newpurchase_hour }} </span>
                                        </div>
                                       
                                        <br>
                                        <div class="col-md-12">
                                            <label for="" style="font-weight:500">Total Amount :</label> <span>{{ $data->Course->total_amount + $newpurchase_amount }} £</span>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
               
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                <p>Manage</p>
                                <form action="{{ url('/student/lesson-complete/view/'.$data->id) }}" method="post">
                                    @csrf
                                    <div class="asif-tutor col-lg-12 row">
                                     
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Status:</label>
                                            <select name="is_approve" class="form-control" id="">
                                                @if($data->is_approve==0)
                                               <option value="0" @if($data->is_approve==0) selected @endif>pending</option>
                                               <option value="1" @if($data->is_approve==1) selected @endif>approve</option>
                                               <option value="2" @if($data->is_approve==2) selected @endif>reject</option>
                                               @elseif($data->is_approve==1)
                                               <option value="1" @if($data->is_approve==1) selected @endif>approve</option>
                                               @elseif($data->is_approve==2)
                                               <option value="2" @if($data->is_approve==2) selected @endif>reject</option>
                                               @endif
                                           </select>
                                        </div>

                                        <div class="mb-3">
                                            <input type="hidden" name="id" value="{{ $data->id }}">

                                            <input type="hidden" name="course_id" value="{{ $data->course_id }}">
                                            <input type="hidden" name="tutor_id" value="{{ $data->Course->tutor_id }}">
                                            <input type="hidden" name="order_id" value="{{ $data->Course->order_id }}">
                                            <input type="hidden" name="hour_rate" value="{{ $data->Course->hourly_rate }}">
                                            <input type="hidden" name="total_hour" value="{{ $data->total_hour }}">

                                           

                                            <label for="exampleInputEmail1" class="form-label">Any Query:</label>
                                            <textarea name="query" class="form-control" >{{ $data->student_query }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </section>
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


@endsection