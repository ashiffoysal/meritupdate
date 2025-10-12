@extends('layouts.frontend')
@section('title', 'Request List')
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
                    <h5 class="card-header">Request List</h5>
                            
                    
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                                    <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableExample1" class="data-table" style="width:100%;font-size:14px">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Tutor</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Total Hour</th>
                                    <th scope="col">Total Paid</th>
                                    <th scope="col">Total Due</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Tutor Confirmation</th>
                                    <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $key => $data)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>
                                            <span style="font-size:12px">Start Date: {{ Carbon\Carbon::createFromFormat('Y-m-d',$data->pick_date)->format('d-m-Y')}}</span><br>
                                            <span style="font-size:12px">End Date: {{ Carbon\Carbon::createFromFormat('Y-m-d',$data->end_date)->format('d-m-Y')}}</span>
                                        </td>
                                        <td>{{$data->Tutor->name}}</td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->total_hour }}</td>
                                        <td>{{ $data->total_amount }}</td>
                                        <td>{{ $data->due_amount }}</td>
                                        
                                        <td>
                                             @if($data->is_approve==0)
                                              <span class="btn-sm btn-warning">Pending</span>
                                              @elseif($data->is_approve==1)
                                              <span class="btn-sm btn-success">Assign</span>
                                              @elseif($data->is_approve==3)
                                              <span class="btn rounded-pill btn-danger">Reject</span>
                                              
                                              @endif
                                        </td>
                                        <td>@if($data->tutor_is_approve==0) <span style="color:red">Please wait for Tutor Confirmation</span> @elseif($data->tutor_is_approve==1) <span  style="color:green"> Tutor Accept  </span> @else <span  style="color:Blue"> Tutor Reject(Reason: {{ $data->tutor_reject_reson }})  </span>  @endif</td>
                                        <td>
                                            <a href="{{ url('/student/tutorrequestlist/update/'.$data->id) }}"><i class="fa fa-pencil"></i></a>
                                            @if($data->tutor_is_approve !=1)
                                            <a id="delete" href="{{ url('/student/tutorrequestlist/delete/'.$data->id) }}"><i class="fa fa-trash"></i></a>@endif
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                </table>
                                                    
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
@endsection