@extends('layouts.frontend')
@section('title', 'Subject')
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

h5.card-header {
    font-weight: 700;
    font-size: 22px;
}
span.sub_header {
    margin: -10px 27px;
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
               <div class="card">
                    <h5 class="card-header">Manage Subjects</h5>
                    <span class="sub_header">Enter your tutoring Subjects</span>


                    <div class="card-body">

                                 <form action="#" method="post" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                    <select class="form-control" name="level" id="level">
                                    <option disabled selected>Select</option>
                                    @php
                                    $alllevel=DB::table('subject_levels')->get();
                                    @endphp
                                    @foreach($alllevel as $level)
                                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                                    @endforeach

                                                              </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                              <select class="form-control" name="subject" id="subject">
                                                   <option disabled selected>Select</option>
                                                              </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12" style="margin-top:12px">
                                                            <div class="form-group">
                                                                    <div class="">
                                                                        <button type="button" onclick="addsubject()" class="btn btn-success">Add Subject</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>


                    </div>
                </div>

                <!---->
                 <div class="card mt-5">
                    <h5 class="card-header"></h5>

                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12" id="maindata">

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
    $(document).ready(function(){
        $("#level").change(function(){
            var level_id=$(this).val();
            if(level_id) {
                 $.ajax({
                     url: "{{  url('/get/allsubject/bylevel/') }}"+'/'+level_id,
                     type:"GET",
                     data:'json',
                     success:function(data) {

                           $('#subject').empty();
                        $('#subject').append(' <option disabled >Select</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject').append('<option value="' + districtObj.id + '">'+districtObj.name+'</option>');
                       });

                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        });
    });
</script>

<script>
    function addsubject(){
        var subject_id=$("#subject").val();
        var level_id=$("#level").val();

        if(subject_id==null){
            alert("Please Select Subject!!");
        }else{
            if(subject_id) {
                 $.ajax({
                     url: "{{  url('/get/subject/subject/submit') }}",
                     type:"GET",

                     data:{
                         'subject_id':subject_id,
                         'level_id':level_id,
                     },
                     success:function(data) {
                        if(data=='ok'){
                            alert('This Subject Already Created');

                        }else if(data=='no'){
                            getallsubject();
                              alert('success');

                        }


                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        }
    }
</script>

<script>
    function getallsubject(){
            $.ajax({
             url: "{{  url('/get/allsubject/fromcontroller') }}",
             type:"GET",
             data:'json',
             success:function(data) {

                 $("#maindata").html(data);

            }
         });
    }
    getallsubject();
</script>




@endsection
