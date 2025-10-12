@extends('layouts.frontend')
@section('title', 'Request Details')
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

.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
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
                    <h5 class="card-header">My Request Details</h5>
                            
                    
                    <div class="card-body">
                         <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                @php
                                    $newpurchase_hour=DB::table('newpurchase_hour')->where('order_id',$data->order_id)->sum('total_hour');
                                     $newpurchase_amount=DB::table('newpurchase_hour')->where('order_id',$data->order_id)->sum('paid_amount');
                                @endphp
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Tutor Name:</label> <span> {{$data->Tutor->name}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Hour:</label><span> {{ $data->total_hour + $newpurchase_hour}} Hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Amount:</label><span> £ {{ $data->total_amount + $newpurchase_amount}} </span>
                                        </div>
                                         <div class="col-md-6">
                                            <label for="" style="font-weight:500">Completed Hours:</label><span> {{$totalhourcompleted}} Hours</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Remaining Hour:</label><span> {{ $newpurchase_hour + $data->total_hour - $totalhourcompleted}} Hours</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Subject:</label> <span> {{$data->subject}}</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Start Date:</label><span>@if($data->tutor_is_approve==1) {{$data->pick_date }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Pick Time:</label><span>@if($data->tutor_is_approve==1) {{$data->pick_time }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Lessons Type:</label><span>@if($data->tutor_is_approve==1) {{ $data->lessons_type }} @else Hidden @endif</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Exam Board:</label><span>@if($data->tutor_is_approve==1) {{ $data->exam_board }} @else Hidden @endif</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                     <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Total Hours(You purchase):</label> <span>  {{$data->total_hour + $newpurchase_hour}} Hours</span>
                                        </div>
                                        
                                      
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Paid Amount:</label><span> {{$data->paid_amount + $newpurchase_amount}} £</span>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" style="font-weight:500">Due Amount:</label><span> {{$data->due_amount}} £</span>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @if($data->tutor_is_approve==1)
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <h6>Feedback</h6>
                                        @php
                                        $feedback=App\Models\Studentfeedback::where('student_id',Auth::user()->id)->where('course_id',$data->id)->first();
                                        @endphp

                                        <form action="{{ url('user/feedback/submit') }}" method="post">
                                            @csrf
                                          <div class="form-group">
                                                <label for="exampleFormControlInput1">Review </label><br>
                                                <div class="rate">
                                                    <input type="radio" id="star5" name="rate" value="5" @if($feedback) @if($feedback->star==5) checked @endif  @endif/>
                                                    <label for="star5" title="text">5 stars</label>
                                                    <input type="radio" id="star4" name="rate" value="4"  @if($feedback)  @if($feedback->star==4) checked @endif  @endif />
                                                    <label for="star4" title="text">4 stars</label>
                                                    <input type="radio" id="star3" name="rate" value="3"  @if($feedback)  @if($feedback->star==3) checked @endif  @endif/>
                                                    <label for="star3" title="text">3 stars</label>
                                                    <input type="radio" id="star2" name="rate" value="2"  @if($feedback)  @if($feedback->star==2) checked @endif  @endif/>
                                                    <label for="star2" title="text">2 stars</label>
                                                    <input type="radio" id="star1" name="rate" value="1"  @if($feedback)  @if($feedback->star==1) checked @endif  @endif/>
                                                    <label for="star1" title="text">1 star</label>
                                                </div>
                                          </div>
                                          <br>
                                          <br>
                                          <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Review Details</label>
                                            <input type="hidden" name="tutor_id" value="{{  $data->tutor_id }}">
                                            <input type="hidden" name="course_id" value="{{  $data->id }}">
                                            <input type="hidden" name="order_id" value="{{  $data->order_id }}">
                                            <textarea class="form-control" name="feedback_details" id="exampleFormControlTextarea1" rows="3" required> @if($feedback)   {{ $feedback->details }}   @endif</textarea>
                                          </div>
                                          <div class="form-group">
                                            <button type="submit" class="btn-sm btn-success">Submit</button>
                                          </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="quote-area" style="padding:10px 0px 0px 0px">
                        <div class="container">
                            <div class="row">
                                
                                <div class="quote-item">
                                    <div class="asif-tutor col-lg-12 row">
                                        <h6>Lesson Complete History</h6>
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                  
                                                    <th scope="col">Lesson Details</th>
                                                    <th scope="col">Hours</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($alllessonhistory as $history)
                                                <tr>
                                                    <th scope="row">{{  $history->created_at->format('d-F-Y') }}</th>
                                                    <td>{{  $history->lesson_complete_details}}</td>
                                                     <td>{{  $history-> total_hour }}</td>
                                                    <td> @if($history->is_approve==0)
                                              <span class="btn-sm btn-warning">Pending</span>
                                              @elseif($history->is_approve==1)
                                              <span class="btn-sm btn-success">Assign</span>
                                              @elseif($history->is_approve==2)
                                              <span class="btn-sm btn-danger">Reject</span>
                                              @endif</td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                             
                                        </table>

                                    </div>
                                    <div class="col-md-12">
                                        {{ $alllessonhistory->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    @endif 
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