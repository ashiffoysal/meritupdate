@extends('layouts.frontend')
@section('title', 'Login | Best Tuition Centre in East London, Forest Gate, Ilford,Plaistow')
@section('meta_description','Merit Tutors are a leading provider of primary, secondary, and A-Level Tuition based in east London (Forest Gate and Ilford).')
@section('content')
<style>
    .information_single_contents {
    display: inline;
    justify-content: space-between;
}
</style>
    <!--================  Start Assessment-Banner Section  ================-->
    <section class="assessment_banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="assessment_banner">
                        <div class="default_title_2nd">
                            <h2>Login Form <img
                                        src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png"
                                        alt=""></span></h2>
                            <p>Please enter a valid email and password to access your dashboard.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================  End Assessment-Banner Section  ================-->

    <!--================  Start Information Section  ================-->
    <section class="information_main">
        <div class="container">
            <div class="row">
            <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if (session('errorMessages'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach (session('errorMessages') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="information">
                        <form action="{{ route('login.custom') }}" method="post" >
                        @csrf
                            <!-- Single -->
                            <div class="information_single">
                                <div class="information_single_contents">
                                    <div class="information_single_contents_left">
                                        <div class="information_input_single">
                                            <label for="no3">Email <span>*</span></label>
                                            <input type="email" name="email_login" id="no3" placeholder="Type Email"
                                                required>
												  @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                        <div class="information_input_single">
                                            <label for="no4">Password</label>
                                            <input type="password" name="password" id="no4"
                                                placeholder="ex: enter password" required>
                                                 @error('password')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single -->
                            <div class="information_single_submit"><button type="submit" class="btn_style">Login</button></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_shape3"><img
                src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape3.png" alt=""></div>
        <div class="section_shape4"><img
                src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape4.png" alt=""></div>
    </section>

@endsection
