@extends('layouts.frontend')
@section('title', 'Request List')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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

<style>
    aside#layout-menu {
    margin: 15px 0px 0px 50px;
     height: 800px;
}

</style>

   @include('frontend.student.include.tutorcss')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" style="padding-top:220px">
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
                    <h5 class="card-header">Request List</h5>

                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                               <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableExample1" class="data-table" style="width:100%;font-size:14px">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col"> Date</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Tutoring Type</th>
                                    <th scope="col">Tutor Confirmation</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Manage</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach($alldata as $key => $data)
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td>{{ $data->pick_date }}</td>
                                            @php
                                                    $studentname=App\Models\User::where('id',$data->student_id)->select(['name'])->first();
                                            @endphp
                                            <td>{{$studentname->name}}</td>
                                            <td>{{ $data->subject }}</td>
                                            <td>{{ $data->tutor_for }}</td>
                                            <td> @if($data->tutor_is_approve==0) <span style="color:red">You Not Accept</span> @elseif($data->tutor_is_approve==1) <span  style="color:green"> You Accept  </span> @else <span  style="color:Blue"> You Reject  </span>  @endif</td>
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

                                                <a href="{{ url('/tutor/student-request-list/accept/'.$data->id) }}" data-toggle="tooltip" data-placement="top" title="Accept"><i class="fa fa-thumbs-up"></i></a>
                                                <a href="{{ url('/tutor/student-request-list/view/'.$data->id) }}" data-toggle="tooltip" data-placement="top" title="Details Student"><i class="fa fa-eye"></i></a>
                                                @if($data->tutor_is_approve==1)

                                                @else
                                                <a class="rejectreason" data-id="{{ $data->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#" data-toggle="tooltip" data-placement="top" title="Reject"><i class="fa fa-times"></i></a>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reject Reason</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('/tutor/student-request-list/reject') }}" method="post">
          @csrf
        <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Reason</label>
                    <input type="hidden" id="requ_id" name="requ_id">
                    <textarea class="form-control" name="reeject_reason" id="exampleFormControlTextarea1" rows="3" required></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $(".rejectreason").click(function(){
           var cate_id = $(this).data("id");
           if(cate_id) {
             $.ajax({
                 url: "{{  url('/get/tutor/studentrequestlist/reject') }}/"+cate_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {

                      $("#requ_id").val(data.id);
                }
             });
         } else {
             alert('danger');
         }

        });
    });
</script>


@endsection
