@extends('layouts.frontend')
@section('title', 'Work for merit tutors')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')
    <style>

        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <section class="contact-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 row">
                          <div class="card mt-5">
                          <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                            <i class="checkmark" style="margin-left: 24%;">✓</i>
                          </div>
                            <h1>Success</h1> 
                            <p>We received your apply request;<br/> we'll be in touch shortly!</p>
                        </div>       
                   </div>
                </div>
            </div>
</section>


@endsection