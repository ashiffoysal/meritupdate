@extends('layouts.frontend')
@section('title', 'Article Update')
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
                    <h5 class="card-header">Add Articles</h5>

                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">

                                  <form action="{{ url('/tutor/articals/update') }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Title:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                                                                        <input type="hidden" class="form-control" name="id" value="{{ $data->id }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Subject:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <select name="subject" class="form-control">
                                                                            @foreach($allsubject as $subject)
                                                                            <option value="{{$subject->name}}" @if($data->subject==$subject->name) selected @endif>{{$subject->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 700;">Details:<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <textarea class="form-control" name="editor1">{{ $data->details }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <button type="submit" class="btn btn-success">Update</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
        CKEDITOR.replace( 'editor1' );
</script>
@endsection
