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
                            <h2>Change Password</h2>
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>Change Password</li>
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
                    <h2>Change Password</h2>

                <form  action="{{ url('forget/password-update/'.$email.'/'.$id) }}" method="post"> 
                    @csrf
                        <div class="form-group">
                            <label>code </label>
                            <input type="text" class="form-control" name="code" placeholder="Enter Code" value="{{ old('code') }}">
                               @error('code')
                                <div style="color:red">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            
                             <input type="hidden" name="id" value="{{ $id }}">
                              @error('password')
                                <div style="color:red">{{ $message }}</div>
                              @enderror
                        </div>
                           <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirm">
                              @error('password_confirmation')
                                <div style="color:red">{{ $message }}</div>
                              @enderror
                        </div>
                        <div class="row align-items-center">
                    
                          
                        </div>

                        <button type="submit">Update</button>
                    </form>

                    <div class="important-text">
                        <p>you have an account? <a href="{{ url('login') }}">Login!</a></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

@endsection