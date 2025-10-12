@extends('layouts.frontend')
@section('title', 'Update Profile')
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
                    <h5 class="card-header">Update Student Information</h5>
                            
                      <form action="{{ url('/student/updateprofile') }}" method="post" enctype="multipart/form-data" >
                                @csrf
                    <div class="card-body">
                      
                         <div class="row">
                             <div class="col-md-2 mb-2 mt-2">
                               <span class="badge bg-label-primary">Student Details</span>
                              </div>
                            <div class="col-md-12 row">
                               <div class="col-md-12">
                                     <div class="form-group mb-2">
                                        <label for="">Profile Image</label>
                                        <div id="thumbnail_img"></div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{ Auth::user()->name }}">
                                        @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Phone</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone" value="{{ Auth::user()->phone }}">
                                        @error('phone')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Year/Level</label>
                                        <input type="text" name="student_year" class="form-control" placeholder="Enter Year" value="{{ Auth::user()->student_year }}">
                                        @error('student_year')
                                        <div style="color: red">Year/Level is required</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">School</label>
                                        <input type="text" name="school" class="form-control" placeholder="Enter Student School" value="{{ Auth::user()->student_school }}">
                                        @error('school')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Gender</label>
                                        <select name="gender" class="form-control" placeholder="Select Gender">
                                            <option selected disabled>Select Gender</option>
                                            <option value="male" @if(Auth::user()->gender=='male') selected @endif>Male</option>
                                            <option value="female" @if(Auth::user()->gender=='female') selected @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Date Of Birth</label>
                                        <input type="text" name="date_of_birth" class="form-control" placeholder="Enter Student Date Of Birth" value="{{ Auth::user()->date_of_birth }}">
                                        @error('date_of_birth')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Country</label>
                                        <select name="country" class="form-control" placeholder="Select Country">
                                            <option selected disabled>Select Country</option>
                                            <option value="United Kingdom" @if(Auth::user()->country=='United Kingdom') selected @endif>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">City</label>
                                        <input type="text" name="city" class="form-control" placeholder="Enter City" value="{{ Auth::user()->city }}">
                                        @error('city')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Address line one</label>
                                        <textarea name="address_line_one" class="form-control" placeholder="Enter Address Line 1">{{ Auth::user()->address }}</textarea>
                                        @error('address_line_one')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Address line two</label>
                                        <textarea  name="address_line_two" class="form-control" placeholder="Enter Address Line 2">{{ Auth::user()->address_two }}</textarea>
                                        @error('address_line_two')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>  
                                 <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Instruction to find the house</label>
                                        <input type="text" name="instruction_to_house" class="form-control" placeholder="Instruction to find the house" value="{{ Auth::user()->instruction_to_house }}">
                                    </div>
                                </div>  
                                <div class="col-md-6">
                                <div class="form-group mb-2">
                                      <label for="" class="form-label">Post Code</label>
                                    <input type="text" name="postcode" class="form-control" placeholder="Enter Postcode" value="{{ Auth::user()->zip }}">
                                    @error('postcode')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                </div>             
                            </div>
                        </div>
                      
                    </div>
                    
                      <div class="card-body">
                      
                         <div class="row">
                         
                              <div class="col-md-2 mb-2 mt-2">
                                      <span class="badge bg-label-primary">Parent / Guardian Details</span>
                              </div>
                              
                            <div class="col-md-12 row">
                           
                                 <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label"> Name</label>
                                        <input type="text" name="guardian_name" class="form-control" placeholder="Enter Guardian Name" value="{{ Auth::user()->guardian_name }}" required>
                                        @error('guardian_name')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Phone</label>
                                        <input type="text" name="guardian_phone" class="form-control" placeholder="Enter Guardian Phone" value="{{ Auth::user()->guardian_phone }}" required>
                                        @error('phone')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                 </div>
                                    <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Email</label>
                                        <input type="text" name="guardian_email" class="form-control" placeholder="Enter Guardian Email"  value="{{ Auth::user()->guardian_email }}">
                                      
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Post Code</label>
                                        <input type="text" name="guardian_post_code" class="form-control" placeholder="Enter Guardian Post Code" value="{{ Auth::user()->guardian_post_code }}">
                                        @error('city')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">City</label>
                                        <input type="text" name="guardian_city" class="form-control" placeholder="Enter Guardian City" value="{{ Auth::user()->guardian_city }}">
                                        @error('city')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                  <div class="col-md-6">
                                    <div class="form-group mb-2">
                                         <label for="" class="form-label">Relation</label>
                                        <input type="text" name="guardian_relation" class="form-control" placeholder="Enter Guardian Relation" value="{{ Auth::user()->guardian_relation }}">
                                        @error('guardian_relation')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-2">
                                          <label for="" class="form-label">Address</label>
                                        <textarea name="guardian_address" class="form-control" placeholder="Enter Guardian Address">{{ Auth::user()->guardian_address }}</textarea>
                                        @error('guardian_address')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                              
                               
                              
                                <div class="col-md-8">
                                <button type="submit" class="btn-sm btn-success">
                                    Update
                                </button>
                                 </div>
                            
                                                    
                            </div>
                        </div>
                      
                    </div>
                      </form>
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