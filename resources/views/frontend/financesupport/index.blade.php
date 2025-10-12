    <!-- End Page Banner -->
@extends('layouts.frontend')
@section('title', 'Finance Support for Tuition – Flexible Plans Available | Merit Tutors')
@section('meta_description','Discover flexible tuition payment options with Merit Tutors. We offer financial support to make high-quality education affordable for every family in East London.')
@section('content')
  <!--================  Start Banner Section  ================-->
        <section class="banner_section_main other_section_banner_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_section">
                    
                                <div class="banner_left_contents">
                                	<span class="banner_span">Finance Support {{ \Carbon\Carbon::now()->year }} {{-- Current Year --}} -
{{ \Carbon\Carbon::now()->addYear()->year }} {{-- Next Year --}}
</span>
                                    <h1>Finance Support 
                                        <span>Finance <img src="{{ asset('frontend/update-design') }}/assets/images/home/for-shape.png" alt=""></span> <br>for Tuition at Merit Tutors</h1>
                                    <p>Are you single parent or a parent in full time work/education? Besides offering quality learning, Merit Tutors is also an Ofsted Registered Childcare Centre. You can leave your child in our safe care while continuing your work/study. We are aware of how busy things might get and that you may urgently need childcare, hence we have chosen not to limit the availability of this service. We are open all year round and always ready to welcome your child in our trusted and inviting space. Feel free to contact one of our centres to discuss the options available for you and your child today.</p>
                                    <div class="banner_contents_btns">
                                        <a href="{{ url('/contact') }}" class="btn_style">Contact Us</a>
                                    </div>
                                </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        @include('frontend.include.newslatter')
@endsection


        