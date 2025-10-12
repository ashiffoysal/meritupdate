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
                                <li>Forget Password</li>
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
                    <h2>Forget Password</h2>

                    <form method="POST" action="{{ route('login.forgetpass') }}"> 
                    @csrf
                        <div class="form-group">
                            <label>Your Email </label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
                               @error('email')
                                <div style="color:red">{{ $message }}</div>
                              @enderror
                        </div>

                        <button type="submit">Submit</button>
                    </form>

                    <div class="important-text">
                        <p>Don't have an account? <a href="{{ url('/register/type') }}">Register now!</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

@endsection