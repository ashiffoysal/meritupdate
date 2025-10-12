@extends('layouts.frontend')
@section('title', 'GCSE Chemistry Revision Course Tutors East London, Forest Gate, Ilford')
@section('meta_description','Merit Tutors are a leading provider of A-Level tuition in east London (Forest Gate and Ilford). Click here to learn more about what we offer.')
@section('content')

<style>
.page-banner-area {
    padding-top: 50px;
    padding-bottom: 50px;
}
</style>
     <!-- Start Page Banner -->
     <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Revision Courses</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Revision Courses </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Choose Area -->
        <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                          <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>Revision Courses</span>
                            <h5>GCSE Revision Course List</h5>
                            <ul class="who-we-are-list">
                                <li>
                                    <span>1</span>
                                    
                                  <a href="{{ url('/gcse-chemistry-revision-courses') }}">GCSE Chemistry</a>   
                                </li>
                                <li>
                                    <span>2</span>
                                   <a href="{{ url('/gcse-biology-revision-courses') }}">GCSE Biology </a>
                                </li>
                                <li>
                                    <span>3</span>
                                   <a href="{{ url('/gcse-maths-revision-courses') }}">GCSE Maths</a> 
                                </li>
                                <li>
                                    <span>4</span>
                                    <a href="{{ url('/gcse-physics-revision-courses') }}">GCSE Physics </a>
                                </li>
                                <li>
                                    <span>5</span>
                                   <a href="{{ url('/gcse-english-language-revision-courses') }}">GCSE English Language</a>
                                </li>
                                 <li>
                                    <span>6</span>
                                   <a href="{{ url('/gcse-english-literature-revision-courses') }}">GCSE English Literature </a>
                                </li>
                                
                            </ul>
                            <br>
                            <br>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="who-we-are-content">
                            <span>Revision Courses</span>
                            <h5>A Level Revision Course List</h5>
                            <ul class="who-we-are-list">
                                <li style="font-size:17px !important;"> 
                                    <span>1</span>
                                  <a href="{{ url('/alevel-chemistry-revision-courses') }}">A Level Chemistry</a>   
                                </li>
                                <li style="font-size:17px !important;">
                                    <span>2</span>
                                     <a href="{{ url('/alevel-biology-revision-courses') }}">A Level Biology </a>
                                </li>
                                <li style="font-size:17px !important;">
                                    <span>3</span>
                                     <a href="{{ url('/alevel-maths-revision-courses') }}">A Level Maths  </a>
                                </li>
                                <li style="font-size:17px !important;">
                                    <span>4</span>
                                    <a href="{{ url('/alevel-physics-revision-courses') }}"> A Level Physics </a>
                                </li>
                                <li style="font-size:17px !important;">
                                    <span>5</span>
                                    <a href="{{ url('/alevel-psychology-revision-courses') }}"> A Level Psychology</a>
                                </li>
                                
                            </ul>
                            <br>
                            <br>
               
                            
                        </div>
                    </div>
               
                 
                </div>
            </div>
        </section>
        <!-- End Choose Area -->



        <style>
            .overview-content {
    background-color: #ffffff;
    -webkit-box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
    box-shadow: 0 2px 28px 0 rgb(0 0 0 / 9%);
    padding: 50px;
    max-width: 100% !important;
    /* margin-left: auto; */
    border-radius: 15px;
    margin: 17px 0px 0px 0px;
}
        </style>
        <!-- End Overview Area -->

@endsection