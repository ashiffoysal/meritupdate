@extends('layouts.frontend')
@section('title', 'About Us')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')
 <!-- Start Page Banner -->
 <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>About Us</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Who We Are Area -->
        <section class="who-we-are ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>About Us</span>
                            <h3>{{ $data->title }}</h3>
                                    <p>Merit Tutors is a private tuition centre run by Qualified School
Teachers with a fundamental focus on improving the quality of
education and helping every child excel academically. We strive to
support students who need an extra push with the National
Curriculum by providing them with individualised learning plans.
Our tutors take the time to understand each child’s needs,
adapting their teaching styles and strategies to ensure our
students get the most out of their lessons.</p>
<br>
<p>Established in 2004, we have over 15 years of professional
experience preparing children of all abilities for their exams. The
success of our teaching practice is epitomised in our students’
remarkable results. In 2021, all of our students attained A*-B in
their GCSEs and A-Levels with a further 84% success rate in 11+
entrance exams. We understand how important exams are to you
and your child, and we have mastered what they require to
succeed!</p>

<br>
<p>We believe that every child holds the potential to attain the best
grades with the correct guidance, assistance and hard work. Here
at Merit Tutors, we are well equipped with all the necessary tools
to turn this learning dream into reality. You can be rest assured in
the merit of our teaching.</p>

                           
                            <!-- <div class="who-we-are-btn">
                                <a href="#" class="default-btn">Read More</a>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="who-we-are-image-wrap">
                            <img src="{{ asset('uploads/aboutus/'.$data->image) }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Who We Are Area -->

        <!-- Start Fun Facts Area -->
        {{--
        <section class="fun-facts-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="1200">00</span>
                            </h3>
                            <p>Students</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact bg-1">
                            <h3>
                                <span class="odometer" data-count="305">00</span>
                            </h3>
                            <p>Teachers</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact bg-2">
                            <h3>
                                <span class="odometer" data-count="48">00</span>
                            </h3>
                            <p>Classroom</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact bg-3">
                            <h3>
                                <span class="odometer" data-count="50">00</span>
                            </h3>
                            <p>Bus</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        --}}
        <!-- End Fun Facts Area -->
        <!-- Start Pricing Area -->
        <div class="pricing-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span>Pricing</span>
                    <h2>Pricing and Fees</h2>
                </div>

                <div class="pricing-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>
                                School Year
                            </th>
                            <th>
                                Fees
                            </th>
                            <!-- 
                            <th>
                                Weekly
                            </th>
                            <th>
                                Monthly
                            </th> -->
                          </tr>
                        </thead>
    
                        <tbody>
                            @foreach($allfees as $fees)
                            <tr>
                                <th>{{$fees->fees_title}}</th>
                                <td>£ {{$fees->fees_price}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="table-title">
                        <p>Merit Tutors reserves the right to increase the fees at any time.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Pricing Area -->
         <div class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Gallery</span>
                    <h2>Merit Tutors Gallery</h2>
                </div>
                <div class="row">
                    @foreach($allgallary as $datad)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-gallery-box">
                            <img src="{{ asset('uploads/'.$datad->image) }}" alt="image">
                            <a href="{{ asset('uploads/'.$datad->image) }}" class="gallery-btn" data-imagelightbox="popup-btn">
                                <i class='bx bx-search-alt'></i>
                            </a>
                        </div>
                    </div>
                    @endforeach

                   
                </div>

                <div class="row">
                <div class="col-lg-12 col-md-12">
                      
                      {{ $allgallary->links('vendor.pagination.custom') }}
               
                  </div>
                </div>
            </div>
        </div>
@endsection