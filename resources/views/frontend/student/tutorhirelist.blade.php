@extends('layouts.frontend')
@section('title', 'Tutor Hire List')
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
                                    <th scope="col"> Date</th>
                                    <th scope="col">Tutor</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Purchase Hours</th>
                                    <th scope="col">Completed Hours</th>
                                    <th scope="col">Remaining Hours</th>
                                    <th scope="col">Tutor Manage</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($alldata as $key => $data)
                                    
                                      @php
                                            $totalcompleted_hour=App\Models\TutorComplatelesson::where('course_id',$data->order_id)->where('is_approve',1)->where('is_deletd',0)->sum('total_hour');
                                            
                                           $newpurchase_hour=DB::table('newpurchase_hour')->where('order_id',$data->order_id)->sum('total_hour');
                                        @endphp
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>
                                          
                                           {{ Carbon\Carbon::createFromFormat('Y-m-d',$data->pick_date)->format('d-m-Y')}}
                                            </td>
                                        <td>{{$data->Tutor->name}}<br>
                                            {{ $data->Tutor->expected_hourly_rate }}£ per Hour
                                    
                                        </td>
                                        <td>{{ $data->subject }}</td>
                                        <td>{{ $data->total_hour + $newpurchase_hour }} hours</td>
                                      
                                        <td>{{ $totalcompleted_hour }} hours</td>
                                        <td>{{ $newpurchase_hour + $data->total_hour - $totalcompleted_hour  }} hours</td>
                                        <td>
                                            @if($data->tutor_is_approve==0)Please wait for tutor confirmation @elseif($data->tutor_is_approve==1)Approve @elseif($data->tutor_is_approve==2) Reject @endif</td>
                                        <td>
                                             @if($data->is_approve==0)
                                              <span class="btn-sm btn-warning">Pending</span>
                                              @elseif($data->is_approve==1)
                                              <span class="btn-sm btn-success">Assign</span>
                                              @elseif($data->is_approve==2)
                                              <span class="btn-sm btn-danger">Reject</span>
                                              @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('/student/tutorrequestlist/view/'.$data->id) }}" data-toggle="tooltip" data-placement="top" title="Hire Details"><i class="fa fa-eye"></i></a>
                                            @if($data->due_amount !=null)
                                             <a href="{{ url('/student/due_amount/paid/'.$data->order_id) }}" data-toggle="tooltip" data-placement="top" title="Purchase more hour"><i class="fa fa-money"></i></a>
                                            @endif
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