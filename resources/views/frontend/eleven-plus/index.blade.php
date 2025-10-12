@extends('layouts.frontend')
@section('title', '11 Plus Tuition in Forest Gate, Ilford & Plaistow – Expert Tutors | Merit Tutors')
@section('meta_description','Prepare your child for 11 Plus success with expert tutors in London. Our proven 11+ courses cover Maths, English, VR & NVR. Book a free assessment today!')
@section('content')

              <section class="banner_section_main other_section_banner_main" style="padding-bottom:10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                	<span class="banner_span">11 Plus School</span>
                                    <h1>11 Plus School   <span>to <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>Information</h1>
                                   
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

   <section class="who-we-are" >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center">
                    <P>
                                Merit Tutors, your trusted source for educational support, is pleased to provide a comprehensive resource for 11 Plus school information in the UK. Our user-friendly website is designed to assist candidates and parents in their journey to find the right school. We offer a detailed school list that includes the names of renowned 11 Plus schools across the UK.
                        
                        At Merit Tutors, we believe that every child deserves access to quality education. Whether you're seeking information on grammar schools, independent schools, or other 11 Plus institutions, our platform is here to support you. We're dedicated to helping you make informed decisions about your child's education, ensuring that they have the best possible start in their academic journey.
                        
                        Visit our website today to explore the wealth of information we offer and embark on the path to educational excellence with Merit Tutors.
                        </P>
                    </div>
            </div>
        </div>
    </section>
         
        
   <section class="who-we-are ptb-100">
            <div class="container">
                @php
                    $elevenCate=DB::table('elevenplus_category')->get();
                @endphp
                @foreach($elevenCate as $cate)
                <div class="row align-items-center">
                     <div class="col-lg-12">
                        <div class="who-we-are-content">
                                <h4><a target="_blank" href="{{ $cate->link  }}">{{ $cate->cate_name }}</a></h4>
                                
                                 <table class="table text-center mt-2">
                                  <thead class="table-heading">
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">School Name</th>
                                      <th scope="col">Gender</th>
                                      <th scope="col">Details</th>
                                      <th scope="col">School webiste</th>
                                      <th scope="col">Application</th>
                                    
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @php
                                        $allSchool=DB::table('elevenplus_school')->where('category_id',$cate->id)->get();
                                      @endphp
                                      
                                      @foreach($allSchool as $key => $school)
                                      <tr>
                                           <td>{{ ++$key }}</td>
                                              <td>{{ $school->name }}</td>
                                              <td>{{ $school->gender }}</td>
                                              
                                            <td><a id="{{$school->id}}" type="button" class="btn btn-warning" onclick="detailsadd(this)">Details</a>
                
                                                 
                                                 </td>
                                              
                                              <td><a target="_blank" class="btn-sm btn-primary" href="{{ $school->school_website }}">Click Here</a></td>
                                              
                                              <td><a target="_blank" class="btn-sm btn-primary" href="{{ $school->apply_link }}">Click Here</a></td>
                                          
                                      </tr>
                                      @endforeach
                                      
                                       
                                      
                                  </tbody>
                                </table>
                                
                            
                           
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="who-we-are-content">
                            <p> {{ $cate->notes }}</p>
                         </div>
                    </div>
                    
                    
                </div>
                @endforeach
                
            </div>
                
            </div>
        </section>
        
        
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">School Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="details">
       
       
       
       
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script>
    
    function detailsadd(el){
       
        
        var id=el.id;
        
                $.ajax({
                    
                    url: "{{ url('/get/school-details') }}",
                    method: "GET", 
                    data: {
                        'id':id
                    }, 
                    success: function(result){
                       
                        $('#staticBackdrop').modal('show');
                         $('#details').html(result);
                       
                    }
                    
                });
    }
    
   
    
</script>

@endsection