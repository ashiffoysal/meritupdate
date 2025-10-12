@extends('layouts.frontend')
@section('title', 'Educational-Identification')
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
                    <div class="card">
                    <h5 class="card-header">Educational Verification</h5>
                    <div class="card-body">
                      <div class="table-responsive text-nowrap">
                        <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">MANDATORY ITEMS</th>
                                                                <th scope="col">Institution</th>
                                                                <th scope="col">Subject/Major</th>
                                                                <th scope="col">Grade</th>
                                                                <th scope="col">PROGRESS</th>
                                                                <th scope="col">MANAGE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>GCSE</td>
                                                                <td> 
                                                                    @if($gcse)  
                                                                    {{$gcse->institution}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Institution</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($gcse)  
                                                                    {{$gcse->subject}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Subject</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($gcse)  
                                                                    {{$gcse->grade}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Grade</span>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    @if($gcse)  
                                                                        @if($gcse->is_verify==0)
                                                                        <span class="btn-sm btn-warning">Pending</span>
                                                                        @elseif($gcse->is_verify==1)
                                                                        <span class="btn-sm btn-success">Approved</span>
                                                                        @else
                                                                        <span class="btn-sm btn-danger">Reject</span>
                                                                        @endif
                                                                    @else
                                                                    
                                                                    @endif
                                                                </td>
                                                                <td><a  data-bs-toggle="modal" data-bs-target="#GCSE" href="#"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>A-Level</td>
                                                                <td>
                                                                    @if($alevel)  
                                                                   {{$alevel->institution}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Institution</span>
                                                                    @endif
                                                                </td>
                                                                <td> @if($alevel)  
                                                                   {{$alevel->subject}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Subject</span>
                                                                    @endif</td>
                                                                <td> @if($alevel)  
                                                                    {{$alevel->grade}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Grade</span>
                                                                    @endif</td>
                                                                <td> @if($alevel)  
                                                                         @if($alevel->is_verify==0)
                                                                        <span class="btn-sm btn-warning">Pending</span>
                                                                        @elseif($alevel->is_verify==1)
                                                                        <span class="btn-sm btn-success">Approved</span>
                                                                        @else
                                                                        <span class="btn-sm btn-danger">Reject</span>
                                                                        @endif
                                                                    @else
                                                                    
                                                                    @endif</td>
                                                                <td><a data-bs-toggle="modal" data-bs-target="#alevel" href="#"><span class="btn" >Upload Now</span></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Degree</td>
                                                                <td> @if($degree)  
                                                                    {{$degree->institution}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Institution</span>
                                                                    @endif</td>
                                                                <td> @if($degree)  
                                                                    {{$degree->subject}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Subject</span>
                                                                    @endif</td>
                                                                <td> @if($degree)  
                                                                    {{$degree->grade}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Grade</span>
                                                                    @endif</td>
                                                                <td> @if($degree)  
                                                                    @if($degree->is_verify==0)
                                                                    <span class="btn-sm btn-warning">Pending</span>
                                                                    @elseif($degree->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approved</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Reject</span>
                                                                    @endif
                                                                    @else
                                                                    
                                                                    @endif</td>
                                                                <td><a data-bs-toggle="modal" data-bs-target="#degree" href="#"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Masters</td>
                                                                <td> @if($masters)  
                                                                    {{$masters->institution}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Institution</span>
                                                                    @endif</td>
                                                                <td> @if($masters)  
                                                                    {{$masters->subject}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Subject</span>
                                                                    @endif</td>
                                                                <td> @if($masters)  
                                                                    {{$masters->grade}}
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Enter Grade</span>
                                                                    @endif</td>
                                                                <td> @if($masters)  
                                                                    @if($masters->is_verify==0)
                                                                    <span class="btn-sm btn-warning">Pending</span>
                                                                    @elseif($masters->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approved</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Reject</span>
                                                                    @endif
                                                                    @else
                                                                   
                                                                    @endif</td>
                                                                <td><a data-bs-toggle="modal" data-bs-target="#masters" href="#"><span class="btn">Upload Now</span></a></td>
                                                            </tr>
                                                            @foreach($basic_identity as $identity)
                                                            <tr>
                                                                <td>{{$identity->name_of_degree}}</td>
                                                                <td>   
                                                                    {{$identity->institution}}
                                                                   </td>
                                                                <td>  
                                                                    {{$identity->subject}}
                                                                    </td>
                                                                <td>  
                                                                    {{$identity->grade}}
                                                                   
                                                                    </td>
                                                                <td>  
                                                                    @if($identity->is_verify==0)
                                                                    <span class="btn-sm btn-warning">Pending</span>
                                                                    @elseif($identity->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approved</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Reject</span>
                                                                    @endif
                                                                    </td>
                                                                <td></td>
                                                            </tr>
                                                            @endforeach



                                                            
                                                        </tbody>
                                                    </table>
                      </div>
                    </div>
                    <!---->
                     <div class="card mt-5">
                    <h5 class="card-header">Verification Step Summary</h5>
                    <div class="card-body">
                      <div class="table-responsive text-nowrap">
               
                                                    <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">ITEMS NAME</th>
                                                                <th scope="col">DATE OF SUBMISSION</th>
                                                                <th scope="col">PROGRESS</th>
                                                                <th scope="col">MORE</th>
                                                                          <th scope="col">ACTION</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($maindata as $data)
                                                            <tr>
                                                                <td>{{$data->name_of_degree}}</td>
                                                                <td>{{$data->created_at->format('d-M-Y')}}</td>
                                                                <td>
                                                                    @if($data->is_verify==0)
                                                                    <span class="btn-sm btn-warning">Pending</span>
                                                                    @elseif($data->is_verify==1)
                                                                    <span class="btn-sm btn-success">Approved</span>
                                                                    @else
                                                                    <span class="btn-sm btn-danger">Reject</span>
                                                                    @endif
                                                                </td>
                                                                <td><p style="font-size:10px">{{$data->more}}</p></td>
                                                                  <td> 
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="veri view" data-id="{{ $data->id }}" href="#">View</i></a>
                                                                      
                                                                         @if($data->is_verify !=1)
                                                                         <a class="veri" href="{{ url('/tutor/educational-information/delete/'.$data->id) }}">Delete</a>
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


<!-- Modal -->
<div class="modal fade" id="GCSE" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">GCSE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{ url('/tutor/education-information/gcse') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University/School/College <span style="color:red">*</span></label>
                <input type="text" name="institution" class="form-control" placeholder="Enter institution" required> 
                <input type="hidden" name="name_of_degree" value="GCSE">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="subject"  placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Grade <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="grade"  placeholder="Enter Grade" required>
            </div>
                                        <div class="col-md-12" >
                                                        <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" name="image_type" id="imagep_gcse" value="1" checked>
                                                              <label class="form-check-label" for="imagep_gcse">
                                                                Image
                                                              </label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio" value="2" name="image_type" id="pdf_gcse" >
                                                              <label class="form-check-label" for="pdf_gcse">
                                                               PDF
                                                              </label>
                                                            </div>
                                                            </div>
                                <div class="col-md-12" id="image_section_gcse">                                
                                    <div class="mb-3" id="image_section_gcse">
                                        <label for="exampleFormControlTextarea1" class="form-label">Certificate Image <span style="color:red">*</span></label><br>
                                        <input type="file" name="gcse_image"  accept="image/png, image/jpeg">
                                    </div>
                                </div>
            
            
            
                                                           <div class="col-md-12" style="display:none" id="pdf_section_gcse">
                                                            <div class="form-group">
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500;">Certificate (pdf):<span style="color:red">*</span></label>
                                                                    <div class="form-group">
                                                                        <input type="file" name="thumbnail_img" accept=".pdf">
                                                                        @error('thumbnail_img')
                                                                            <div style="color:red"> Proof Of Address Image (required)</div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
            
            
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="alevel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">A-Level</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{ url('/tutor/education-information/alevel') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University/School/College <span style="color:red">*</span></label>
                <input type="text" name="institution" class="form-control" placeholder="Enter institution" required> 
                <input type="hidden" name="name_of_degree" value="A Level">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="subject"  placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Grade <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="grade"  placeholder="Enter Grade" required>
            </div>
            <div class="col-md-12" >
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="image_type" id="imagep_alevel" value="1" checked>
                      <label class="form-check-label" for="imagep_alevel">
                        Image
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="2" name="image_type" id="pdf_alevel" >
                      <label class="form-check-label" for="pdf_alevel">
                       PDF
                      </label>
                    </div>
            </div>
            <div class="col-md-12" id="image_section_alevel">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Certificate Image <span style="color:red">*</span></label><br>
                    <input type="file" name="alevel_image"  accept="image/png, image/jpeg" >
                </div>
            </div>
            <div class="col-md-12" style="display:none" id="pdf_section_alevel">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500;">Certificate (pdf):<span style="color:red">*</span></label>
                        <div class="form-group">
                            <input type="file" name="thumbnail_img" accept=".pdf">
                            @error('thumbnail_img')
                                <div style="color:red"> Proof Of Address Image (required)</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="modal fade" id="degree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Degree</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{ url('/tutor/education-information/degree') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University/School/College <span style="color:red">*</span></label>
                <input type="text" name="institution" class="form-control" placeholder="Enter institution" required> 
                <input type="hidden" name="name_of_degree" value="Degree">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="subject"  placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Grade <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="grade"  placeholder="Enter Grade" required>
            </div>
             <div class="col-md-12" >
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="image_type" id="imagep_degree" value="1" checked>
                      <label class="form-check-label" for="imagep_degree">
                        Image
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="2" name="image_type" id="pdf_degree" >
                      <label class="form-check-label" for="pdf_degree">
                       PDF
                      </label>
                    </div>
            </div>
        <div class="col-md-12" id="image_section_degree">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Certificate Image <span style="color:red">*</span></label><br>
                <input type="file" name="degree_image"  accept="image/png, image/jpeg" >
            </div>
        </div>
           <div class="col-md-12" style="display:none" id="pdf_section_degree">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500;">Certificate (pdf):<span style="color:red">*</span></label>
                        <div class="form-group">
                            <input type="file" name="thumbnail_img" accept=".pdf">
                            @error('thumbnail_img')
                                <div style="color:red"> Proof Of Address Image (required)</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>
<div class="modal fade" id="masters" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Masters</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{ url('/tutor/education-information/masters') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University/School/College <span style="color:red">*</span></label>
                <input type="text" name="institution" class="form-control" placeholder="Enter institution" required> 
                <input type="hidden" name="name_of_degree" value="Masters">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="subject"  placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Grade <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="grade"  placeholder="Enter Grade" required>
            </div>
               <div class="col-md-12" >
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="image_type" id="imagep_masters" value="1" checked>
                      <label class="form-check-label" for="imagep_masters">
                        Image
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="2" name="image_type" id="pdf_masters" >
                      <label class="form-check-label" for="pdf_masters">
                       PDF
                      </label>
                    </div>
            </div>
            <div class="col-md-12" id="image_section_masters">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Certificate Image <span style="color:red">*</span></label><br>
                    <input type="file" name="masters_image"  accept="image/png, image/jpeg" >
                </div>
            </div>
            <div class="col-md-12" style="display:none" id="pdf_section_masters">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500;">Certificate (pdf):<span style="color:red">*</span></label>
                        <div class="form-group">
                            <input type="file" name="thumbnail_img" accept=".pdf">
                            @error('thumbnail_img')
                                <div style="color:red"> Proof Of Address Image (required)</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="more" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">More Educational Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="{{ url('/tutor/education-information/more') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name Of Degree<span style="color:red">*</span></label>
                <input type="text" name="name_of_degree" class="form-control" placeholder="Enter Name Of Degree" required> 
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">University/School/College <span style="color:red">*</span></label>
                <input type="text" name="institution" class="form-control" placeholder="Enter institution" required> 
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Subject <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="subject"  placeholder="Enter Subject" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Grade <span style="color:red">*</span></label>
                <input type="text" class="form-control" name="grade"  placeholder="Enter Grade" required>
            </div>
               <div class="col-md-12" >
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="image_type" id="imagep_more" value="1" checked>
                      <label class="form-check-label" for="imagep_more">
                        Image
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" value="2" name="image_type" id="pdf_more" >
                      <label class="form-check-label" for="pdf_more">
                       PDF
                      </label>
                    </div>
            </div>
            <div class="col-md-12" id="image_section_more">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Certificate Image <span style="color:red">*</span></label><br>
                    <input type="file" name="more_image"  accept="image/png, image/jpeg" >
                </div>
            </div>
            
              <div class="col-md-12" style="display:none" id="pdf_section_more">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" style="font-weight: 500;">Certificate (pdf):<span style="color:red">*</span></label>
                        <div class="form-group">
                            <input type="file" name="thumbnail_img" accept=".pdf">
                            @error('thumbnail_img')
                                <div style="color:red"> Proof Of Address Image (required)</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    </div>
  </div>
</div>


<script>
    $(document).ready(function(){
        $("#imagep_gcse").click(function(){
           $("#pdf_section_gcse").hide(); 
           $("#image_section_gcse").show(); 
        });
          $("#pdf_gcse").click(function(){
           $("#pdf_section_gcse").show(); 
           $("#image_section_gcse").hide(); 
        });
    });
</script>

<script>
    $(document).ready(function(){
        $("#imagep_alevel").click(function(){
           $("#pdf_section_alevel").hide(); 
           $("#image_section_alevel").show(); 
        });
          $("#pdf_alevel").click(function(){
           $("#pdf_section_alevel").show(); 
           $("#image_section_alevel").hide(); 
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#imagep_degree").click(function(){
           $("#pdf_section_degree").hide(); 
           $("#image_section_degree").show(); 
        });
          $("#pdf_degree").click(function(){
           $("#pdf_section_degree").show(); 
           $("#image_section_degree").hide(); 
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#imagep_masters").click(function(){
           $("#pdf_section_masters").hide(); 
           $("#image_section_masters").show(); 
        });
          $("#pdf_masters").click(function(){
           $("#pdf_section_masters").show(); 
           $("#image_section_masters").hide(); 
        });
    });
</script>
<script>
    $(document).ready(function(){
        $("#imagep_more").click(function(){
           $("#pdf_section_more").hide(); 
           $("#image_section_more").show(); 
        });
          $("#pdf_more").click(function(){
           $("#pdf_section_more").show(); 
           $("#image_section_more").hide(); 
        });
    });
</script>



<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="created_at"></p><br>
        <p class="subject"></p><br>
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
                     url: "{{  url('/get/educationiden/details/') }}/"+id,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        
                        $(".modal-title").html(data.name_of_degree);
                        $(".subject").html('Subject: '+data.subject);
                        $(".created_at").html('Submit Date: '+data.date);
                        
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