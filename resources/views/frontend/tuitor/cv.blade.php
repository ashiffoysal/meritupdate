@extends('layouts.frontend')
@section('title', 'Cv')
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
                    <h5 class="card-header">CV Uploads</h5>

                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                               <form action="{{ url('/user/cv') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                @php
                                                                    $check=App\Models\VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('item_name','CV')->first();
                                                                @endphp
                                                                @if($check)
                                                                    @if($check->is_verify==0)
                                                                    <div class="alert alert-warning" role="alert">
                                                                        Your CV Is Pending!!
                                                                    </div>
                                                                    @elseif($check->is_verify==1)
                                                                    <div class="alert alert-success" role="alert">
                                          Your CV has been approved!!
                                                                    </div>
                                                                    @else
                                                                    <div class="alert alert-danger" role="alert">
                                                                       Your CV has been Rejected! Try Again!!
                                                                    </div>
                                                                    @endif
                                                                @else

                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Uploads CV(pdf):<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="file" name="cv"  accept=".pdf">
                                                                        @error('cv')
                                                                            <div style="color:red"> CV is required</div>
                                                                        @enderror
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
                                                    <!--  -->

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
