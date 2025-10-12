@extends('layouts.frontend')
@section('title', 'Results')
@section('content')

 <style>
     .page-banner-area {
    padding-top: 60px !important;
    padding-bottom: 60px !important;
}
 </style>
 <!-- Start Page Banner -->
 <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Results</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>Results</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Who We Are Area -->
      
        <!-- End Fun Facts Area -->
        <!-- Start Pricing Area -->
          {{--
        <div class="pricing-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Results</span>
                    <h2>Merit Tutors Results</h2>
                </div>

                <div class="pricing-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Name
                            </th>
                             
                            <th>
                                Exam Type
                            </th>
                            <th>
                                Result
                            </th>
                          </tr>
                        </thead>
    
                        <tbody>
                            @foreach($alldata as $data)
                            <tr>
                                <th>
                                    <img class="myoimg" src="{{asset('uploads/'.$data->image)}}" height="35px">
                                </th>
                                <td>{{ $data->full_name }}</td>
                                <td>{{ $data->result_type  }}</td>
                                <td>
                                @foreach(json_decode($data->grade) as $main)
                                  <span class="btn-sm btn-danger mt-2" style="margin:10px !important">{{$main->subject}}</span> -  <span class="btn-sm btn-success mt-2" style="margin:10px !important">{{$main->grade}}</span> 
                                  <br>  
                                  <br>  
                                  @endforeach
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                              <div class="col-lg-12 col-md-12">
                      
                        {{ $alldata->links('vendor.pagination.custom') }}
                       
                    </div>
                    </table>

                    <div class="table-title">
                        <p>Merit Tutors Results.</p>
                    </div>
                </div>
            </div>
        </div>
       --}}
        <!-- End Pricing Area -->\  
        <section class="class-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                      @foreach($alldata as $data)
                    <div class="col-lg-4 col-md-4">
                        <div class="single-class">
                            <div class="class-image">
                                <a href="#">
                                    <img src="{{asset('uploads/'.$data->image)}}" alt="image">
                                </a>
                            </div>

                            <div class="class-content">
                                <div class="price">{{ $data->result_type  }}</div>
                                <h3>
                                    <a href="#">{{ $data->full_name }}</a>
                                </h3>
                                <p>June 24 Candidate</p>

                                <ul class="class-list">
                                    @foreach(json_decode($data->grade) as $main)
                                    <li>
                                        <span >{{$main->subject}}</span>
                                     
                                        
                                          <span class="badge badge-success">{{$main->grade}}</span>
                                    </li><br>
                                    @endforeach
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
             

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                             {{ $alldata->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>

        </section>
<style>
    .myoimg{
        height:35px !important;
    }
</style>
@endsection