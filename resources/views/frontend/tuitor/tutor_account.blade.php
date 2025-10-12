@extends('layouts.frontend')
@section('title', 'Tutor ')
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
                    <h5 class="card-header">Update Profile</h5>
                    
                    <div class="card-body">
                         <div class="row">
                             <form action="{{ url('/tutor/account') }}" method="post" enctype="multipart/form-data">
                        @csrf
                <div class="col-md-12">
           
                              
                             
                                            <div class="">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <!--  -->
                                                    <div class="content" style="padding:15px">
                                                        <span class="badge bg-label-info">Tutor Types</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" for="Branch" class="form-label">For Branch Tutor<span style="color:red"></span></label>
                                                                    <input id="forbranch" type="checkbox"  name="for_branch"  value="1" @if(Auth::user()->for_branch_tutor==1) checked @endif>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" for="online" class="form-label">For Online Tutor<span style="color:red"></span></label>
                                                                    <input type="checkbox"  name="for_online" id="online" value="1" @if(Auth::user()->for_online_tutor==1) checked @endif>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" for="onhome" class="form-label">For Home Tutor<span style="color:red"></span></label>
                                                                    <input type="checkbox"  name="for_home" id="onhome" value="1"  @if(Auth::user()->for_home_tutor==1) checked @endif>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--  -->
                                                    <div class="row">
                                                        <div class="col-md-12" id="branch_section" @if(Auth::user()->for_branch_tutor==1)  @else style="display:none" @endif>
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Branch<span style="color:red">*</span></label>
                                                                    <select name="branch_name" id="" class="form-control">
                                                                        <option value="FOREST GATE" @if(Auth::user()->branch=='FOREST GATE') @endif >FOREST GATE</option>
                                                                        <option value="ILFORD LANE" @if(Auth::user()->branch=='ILFORD LANE') @endif >ILFORD LANE</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Headline<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" required name="headline_for_tutor" placeholder="Enter Headline">{{ Auth::user()->headline_for_tutor }}</textarea> 
                                                                    <span style="font-size:10px">A short catchy summary (25-60 characters) help to promote your profile</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">About Me<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" required name="bio_details" placeholder="Enter about me">{{ Auth::user()->bio_details }}</textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">About my sessions<span style="color:red">*</span></label>
                                                                    <textarea class="form-control" required name="about_my_sessions" id="summernote" placeholder="Enter Your About my session">{!! Auth::user()->about_my_sessions !!}</textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Expericence(Optional)</label>
                                                                    <textarea class="form-control" name="tutor_experience" placeholder="Enter Your Expericence"> {{ Auth::user()->tutor_experience }} </textarea> 
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Expected Hourly Rate ( £ )<span style="color:red">*</span></label>
                                                                    <input type="number" required class="form-control expected_hourly_rate" name="expected_hourly_rate" placeholder="Expected Hourly Rate" value="{{ Auth::user()->expected_hourly_rate }}" min="1" onchange="expectedrate()">
                                                                    <span style="font-size:14px;color: red;" id="you_earn"></span>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- branch -->
                                                </div>
                                            </div>
                                        
                             
                                            <div class="">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <div class="col-lg-12 col-md-12 mt-1">
                                                          <div class="content" style="padding:15px">
                                                           <span class="badge bg-label-info">Basic Information</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Title<span style="color:red">*</span></label>
                                                                        <select class="form-control" name="title">
                                                                        <option value="Mr" @if(Auth::user()->name_of_title=='Mr') selected @endif>Mr</option>
                                                                        <option value="Mrs" @if(Auth::user()->name_of_title=='Mrs') selected @endif>Mrs</option>
                                                                        <option value="Ms" @if(Auth::user()->name_of_title=='Ms') selected @endif>Ms</option>
                                                                        <option value="Miss" @if(Auth::user()->name_of_title=='Miss') selected @endif>Miss</option>
                                                          
                                                                        <option value="Dr" @if(Auth::user()->name_of_title=='Dr') selected @endif>Dr</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Full Name<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{ Auth::user()->name }}" required />
                                                                        <input type="hidden" name="id" value="{{ Auth::user()->id }}" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="phone" placeholder="Enter Mobile number" value="{{ Auth::user()->phone }}" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="email" id="" placeholder="Enter Email" value="{{ Auth::user()->email }}" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Date of Birth<span style="color:red">*</span></label>
                                                                        <input type="date" class="form-control" name="date_of_birth" placeholder="Enter Date of birth" required value="{{ Auth::user()->date_of_birth }}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Gender<span style="color:red">*</span></label>
                                                                        <select class="form-control" name="gender">
                                                                        <option value="Male" @if(Auth::user()->gender=='Male') selected @endif>Male</option>
                                                                        <option value="Female" @if(Auth::user()->gender=='Female') selected @endif>Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Ongoing / Completed Degree Type<span style="color:red">*</span></label>
                                                                        <select class="form-control" name="current_gedree_type"> 
                                                                        <option >-select-</option>
                                                                        <option value="Bachelor" @if(Auth::user()->current_gedree_type=='Bachelor') selected @endif>Bachelor</option>
                                                                        <option value="Master" @if(Auth::user()->current_gedree_type=='Master') selected @endif>Master</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Current University<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="current_university" placeholder="Enter university" required value="{{ Auth::user()->current_university }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label>
                                                                       <input type="text" class="form-control" name="current_subject" placeholder="Enter subject" required value="{{ Auth::user()->current_subject }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                <!--  -->
             
                                            <div class="">
                                                <div class="asif-tutor col-lg-12 row">
                                                    <div class="col-lg-12 col-md-12 mt-1">
                                                         <div class="content" style="padding:15px">
                                                        
                                                             <span class="badge bg-label-info">Contact Information</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Address Line 1<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="address_line_1" placeholder="Address Line 1" value="{{ Auth::user()->address }}" required />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Address Line 2<span style="color:red">(Optional)</span></label>
                                                                        <input type="text" class="form-control" name="address_line_2" placeholder="Address Line 2" value="{{ Auth::user()->address_two }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">City<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="city" placeholder="Enter City" value="{{ Auth::user()->city }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Post Code<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="zip_code" placeholder="Enter Post Code" value="{{ Auth::user()->zip }}" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Travel Distance<span style="color:red">(optional)</span></label>
                                                                        <select name="travel_distence" class="form-control">
                                                                            <option disabled selected>--Select--</option>
                                                                            <option value="1 mile" @if(Auth::user()->travel_distence=='1 mile') selected @endif>1 mile</option>
                                                                            <option value="2 mile"  @if(Auth::user()->travel_distence=='2 mile') selected @endif>2 mile</option>
                                                                            <option value="3 mile"  @if(Auth::user()->travel_distence=='3 mile') selected @endif>3 mile</option>
                                                                            <option value="4 mile"  @if(Auth::user()->travel_distence=='4 mile') selected @endif>4 mile</option>
                                                                            <option value="5 mile"  @if(Auth::user()->travel_distence=='5 mile') selected @endif>5 mile</option>
                                                                            <option value="6 mile"  @if(Auth::user()->travel_distence=='6 mile') selected @endif>6 mile</option>
                                                                            <option value="7 mile"  @if(Auth::user()->travel_distence=='7 mile') selected @endif>7 mile</option>
                                                                            <option value="8 mile"  @if(Auth::user()->travel_distence=='8 mile') selected @endif>8 mile</option>
                                                                            <option value="9 mile"  @if(Auth::user()->travel_distence=='9 mile') selected @endif>9 mile</option>
                                                                            <option value="10 mile"  @if(Auth::user()->travel_distence=='10 mile') selected @endif>10 mile</option>
                                                                            <option value="11 mile"  @if(Auth::user()->travel_distence=='11 mile') selected @endif>11 mile</option>
                                                                            <option value="12 mile"  @if(Auth::user()->travel_distence=='12 mile') selected @endif>12 mile</option>
                                                                            <option value="13 mile"  @if(Auth::user()->travel_distence=='13 mile') selected @endif>13 mile</option>
                                                                            <option value="14 mile"  @if(Auth::user()->travel_distence=='14 mile') selected @endif>14 mile</option>
                                                                            <option value="15 mile"  @if(Auth::user()->travel_distence=='15 mile') selected @endif>15 mile</option>
                                                                        
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            


                                                        <br>
                                                        <br>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="mb-3">
                                                                                                                                            <label for="exampleFormControlInput1" class="form-label">Availability</label>
                                                                                                                                            <textarea class="form-control" name="availability" placeholder="Enter your Availability">{{ Auth::user()->availability }}</textarea>
                                                                        
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <br>
<br>
                                                            <div class="col-md-12">
                                                          
                                                            </div>

<!---->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            
                                    <div class="" id="reference_section" @if(Auth::user()->for_branch_tutor==1) @else style="display:none" @endif >
                                                <div class="asif-tutor col-lg-12 row">
                                                    <div class="col-lg-12 col-md-12 mt-1">
                                                         <div class="content" style="padding:15px">
                                                        
                                                             <span class="badge bg-label-info">Add Reference</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Name<span style="color:red">*</span></label>
                                                                        <input type="text" class="form-control" name="reference_name" placeholder="Enter Name" value="{{ Auth::user()->reference_name }}"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red"></span></label>
                                                                        <input type="text" class="form-control" name="reference_email" placeholder="Enter Email" value="{{ Auth::user()->reference_email }}">
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                                 <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Organisation<span style="color:red"></span></label>
                                                                        <input type="text" class="form-control" name="reference_organisation" placeholder="Enter Organisation" value="{{ Auth::user()->reference_organisation }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Department<span style="color:red"></span></label>
                                                                        <input type="text" class="form-control" name="reference_department" placeholder="Enter Department" value="{{ Auth::user()->reference_department }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                  <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="mb-3">
                                                                        <label for="exampleFormControlInput1" class="form-label">Position<span style="color:red"></span></label>
                                                                        <input type="text" class="form-control" name="reference_position" placeholder="Enter Position" value="{{ Auth::user()->reference_position }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>    
                                                    </div>    
                                                </div>    
                                        </div>    
                                       
                              
                              
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-success" >
                                                    Update
                                                </button>
                                            </div>
                                        
                                
                            </div>
                        </div>
                    </section>
                    </div>
                <div>
            </form>
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

                
                            </div>
                        </div>
                    </section>
                    </div>
                <div>
            </form>

            </div>
        </div>
    </div>
</div>
@include('frontend.student.include.tutorjs')

<script>
$(document).ready(function(){

   $("#forbranch").click(function() {

       if($(this).is(":checked")) {

           $("#branch_section").show();

       } else {

           $("#branch_section").hide();

       }
   });
   
    $("#forbranch").click(function () {
            if ($(this).is(":checked")) {
                $("#reference_section").show();
                
            } else {
                $("#reference_section").hide();
                
            }
        });
   
   
   
});
   
</script>


<script>
    function addmoresub(){
        
       $("#addmoresubjectfield").append('<div class="col-md-12 newassss" id="dvPassport"><div class="form-group row"> <div class="col-md-10 mb-3"><label for="exampleFormControlInput1" class="form-label">Subject Name<span style="color:red">*</span></label> <input type="text" class="form-control" name="other_subject_name[]" placeholder="example: History" value=""/></div><div class="col-md-2" style="padding-top:35px"><a onclick="delrow(this)"><i class="fa fa-trash"></i></a></div> </div>')
        
    }
    
</script>
<script>
function delrow(el) {

$(el).closest(".newassss").remove();

}
</script>
<script>
function delrows(el) {

$(el).closest(".newasssss").remove();

}
</script>
<script>

        function expectedrate(){
            var rate = $(".expected_hourly_rate").val();
            var pay=rate * 0.75;
            if(rate !=null){
               $("#you_earn").html("You Earn "+ pay +" £ (you earn 75% amount of your Hourly Rate)");
            }else{
                $("#you_earn").html("");
            }
            
            
        }

</script>

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

<script>
    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
                $("#AddPassport").hide();
            } else {
                $("#dvPassport").hide();
                $("#AddPassport").show();
            }
        });
    });
</script>
@endsection