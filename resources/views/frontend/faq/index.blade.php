@extends('layouts.frontend')
@section('title', 'FAQ')
@section('content')
   <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                            <div class="banner_left">
                                <div class="banner_left_contents">
                                	<span class="banner_span">Merit Tutors</span>
                                    <h1>Frequently  <span>Asked <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>Questions</h1>
                                 
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.include.faq')
        @include('frontend.include.newslatter')
    
@endsection