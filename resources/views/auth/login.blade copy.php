@extends('layouts.frontend')
@section('content')
<style>
.login-form form button {
    background-color: #25BD0F;
    color: #ffffff;
}
.login-form form button:hover {
    background-color: #C90515;
}
</style>
     <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Login</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Login</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="login-form">
                    <h2>Login</h2>

                    <form method="POST" action="{{ route('login.custom') }}"> 
                    @csrf
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" class="form-control" name="email_login" placeholder="Email">
                               @error('email_login')
                                <div style="color:red">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                              @error('password')
                                <div style="color:red">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkme">
                                    <label class="form-check-label" for="checkme">Remember me</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                                 <a href="{{ url('/forget-password') }}" class="lost-your-password">Forgot your password?</a> 
                            </div>
                        </div>

                        <button type="submit">Login</button>
                    </form>

                    <div class="important-text">
                        <p>Don't have an account? <a href="{{ url('/register/type') }}">Register now!</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->
{{-- 
<section class="pt-3 pb-3 page-info section-padding border-bottom bg-white">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <a href="{{url('/')}}"><strong><span class="mdi mdi-home"></span> Home</strong></a> <span class="mdi mdi-chevron-right"></span> <a>Log In</a> 
          </div>
       </div>
    </div>
 </section>
<section class="section-padding">
    <div class="container">
        <div class="login-modal">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('login.custom') }}"> 
                    @csrf
                        <div class="login-modal-right">
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <div class="tab-pane active" id="login" role="tabpanel">
                                <h5 class="heading-design-h5">Login to your account</h5>
                                <fieldset class="form-group">
                                    <label>Enter Email</label>
                                    <input type="text" class="form-control" name="email_login" placeholder="example@gmail.com">
                                </fieldset>
                                @error('email_login')
                                <div class="validation text-danger" >{{ $message }}</div>
                                @enderror
                                <fieldset class="form-group">
                                    <label>Enter Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="********">
                                </fieldset>
                                @error('password')
                                <div class="validation text-danger">{{ $message }}</div>
                                @enderror
                                <fieldset class="form-group">
                                    <button type="submit" class="btn btn-lg btn-secondary btn-block">Enter to your account</button>
                                </fieldset>
                            </form>
                                <div class="login-with-sites text-center">
                                    <p>or Login with your social profile:</p>
                                    <a href="{{url('auth/facebook')}}" class="btn-facebook login-icons btn-lg"><i class="mdi mdi-facebook"></i> Facebook</a>
                                    <a href="{{url('auth/google')}}" class="btn-google login-icons btn-lg"><i class="mdi mdi-google"></i> Google</a>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                            
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">I Agree with <a href="#">Term and Conditions</a></label>
                                </div>   
                            </div>
                            </div>
                            <div class="clearfix"></div>
        
                            <div class="clearfix"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
--}}
@endsection