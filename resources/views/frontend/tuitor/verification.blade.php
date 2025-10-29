@extends('layouts.frontend')
@section('title', 'User Verifications')
@section('content')
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
                    <div class="card">
                    <h5 class="card-header">Profile Verification</h5>
                    <div class="card-body">
                      <div class="table-responsive text-nowrap">
                        <table class="table table-bordered" style="font-size:12px">
                           <thead  class="table-light" style="font-size:12px">
                                                            <tr>
                                                                <th scope="col">MANDATORY ITEMS</th>
                                                                <th scope="col">PROGRESS</th>
                                                                <th scope="col">MANAGE</th>
                                                            </tr>
                                                        </thead>


                                                        <tbody style="font-size:12px">

                                                            @if(Auth::user()->user_type==2)
                                                                <tr>
                                                                <td>Profile image</td>
                                                                <td>
                                                                @if($profileimage)
                                                                    @if($profileimage->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($profileimage->is_verify==1)
                                                                    <span class="badge bg-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-warning">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/profile-image') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                             <tr>
                                                                <td>Photo ID</td>
                                                                <td>
                                                                @if($ids)
                                                                    @if($ids->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($ids->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/id-verifications') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                              <tr>
                                                                <td>Proof of Address</td>
                                                                <td>
                                                                @if($proof_of_address)
                                                                    @if($proof_of_address->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($proof_of_address->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/proof-of-address') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>

                                                            <tr>
                                                                <td>Latest CV (PDF)</td>
                                                                <td>
                                                                @if($cv)
                                                                    @if($cv->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($cv->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/cv') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                                  <tr>
                                                                <td>DBS Certification</td>
                                                                <td>
                                                                @if($dbs)
                                                                    @if($dbs->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($dbs->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-danger">Unverified</span>
                                                                @endif

                                                                </td>
                                                                <td><a href="{{ url('/user/dbs-certification') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>


                                                            @endif
                                                                @if(Auth::user()->user_type==1)
                                                                        <tr>
                                                                <td>Photo ID</td>
                                                                <td>
                                                                @if($ids)
                                                                    @if($ids->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($ids->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a href="{{ url('/user/id-verifications') }}"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Proof of Address</td>
                                                                <td>
                                                                @if($proof_of_address)
                                                                    @if($proof_of_address->is_verify==0)
                                                                    <span class="badge bg-primary">Pending</span>
                                                                    @elseif($proof_of_address->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">Reject</span>
                                                                    @endif
                                                                @else
                                                                    <span class="badge bg-danger">Unverified</span>
                                                                @endif
                                                                </td>
                                                                <td><a style="font-size:12px;" href="{{ url('/user/proof-of-address') }}"><span class="btn" style="font-size:12px;">Upload Now</span></a></td>
                                                            </tr>
                                                              @endif

                                                        </div>
                                                        </tbody>
                        </table>
                      </div>
                    </div>
                    <!---->
                     <div class="card">
                    <h5 class="card-header">Verification Step Summary</h5>
                    <div class="card-body">
                      <div class="table-responsive text-nowrap">
                        <table class="table table-bordered" style="font-size:12px">
                            <thead class="table-light" style="font-size:12px">
                                                            <tr>
                                                                <th scope="col">ITEMS NAME</th>
                                                                <th scope="col">DATE OF SUBMISSION</th>
                                                                <th scope="col">PROGRESS</th>
                                                                <th scope="col">MORE</th>
                                                                  <th scope="col">MANAGE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody style="font-size:12px">
                                                        @foreach($maindata as $data)
                                                            <tr>
                                                                <td>{{$data->item_name}}
                                                                    <br><span style="font-size:10px">{{ $data->proof_of_address }}</span>
                                                            </td>
                                                                <td>{{$data->created_at->format('F-d-Y')}}</td>
                                                                <td>
                                                                    @if($data->is_verify==0)
                                                                    <span class="badge bg-primary">pending</span>
                                                                    @elseif($data->is_verify==1)
                                                                    <span class="badge bg-success">approve</span>
                                                                    @else
                                                                    <span class="badge bg-danger">reject</span>
                                                                    @endif
                                                                </td>
                                                                <td><p style="font-size:10px">{{$data->more}}</p></td>

                                                                <td>
                                                                                 <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="veri view" data-id="{{ $data->id }}" style="font-size:10px;" href="#">View</i></a>
                                                                    @if($data->is_verify !=1)
                                                                    <a class="veri" href="{{url('/user/verification/delete/'.$data->id)}}" style="font-size:10px;">Delete</a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="created_at"></p><br>
        <div class="image_section">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>


<script>
    $(document).ready(function(){
        $(".view").click(function(){
            var id=$(this).data("id");
            $(".modal-title").empty();
            $(".created_at").empty();
            $(".image_section").empty();
             if(id) {
                 $.ajax({
                     url: "{{  url('/get/verification/details/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {

                        $(".modal-title").html(data.item_name);
                        $(".created_at").html(data.date);

                        if(data.image_type==1){
                            $(".image_section").append("<img src='{{asset('/')}}"+data.image+"' height='' width=''>");
                        }
                        if(data.image_type==2){
                            $(".image_section").append("<iframe src='{{asset('/')}}"+data.image+"' width='100%' height='700px'></iframe>");
                        }






                         }
                 });
             } else {
                 alert('sorry data not found');
             }
        });
    });
</script>



@endsection
