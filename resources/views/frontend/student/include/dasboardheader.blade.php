<!-- User -->
 @php
                $notifycounts=App\Models\NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->count();
              @endphp
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('/'.Auth::user()->photo) }}" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('/'.Auth::user()->photo) }}" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                            @if(Auth::user()->user_type==1)
                            <small class="text-muted">Student</small>
                            @endif
                             @if(Auth::user()->user_type==2)
                            <small class="text-muted">Tutor</small>
                             @endif
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    @if(Auth::user()->user_type==2)
                    <li>
                      <a class="dropdown-item" href="{{ url('/tutor/account')}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Edit Profile</span>
                      </a>
                    </li>
                      <li>
                      <a class="dropdown-item" href="{{url('/user/updatepassword')}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Update Password</span>
                      </a>
                    </li>
             
                    <li>
                      <a class="dropdown-item" href="{{ url('/user/notification') }}">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Notification</span><span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">{{ $notifycounts }}</span>
                      </a>
                    </li>
                    
                    <li>
                      <a class="dropdown-item" href="{{ url('/tutor/message') }}">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">My Message</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20"></span>
                        </span>
                      </a>
                    </li>
                    @endif
                      @if(Auth::user()->user_type==1)
                    <li>
                      <a class="dropdown-item" href="{{ url('student/updateprofile')}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Edit Profile</span>
                      </a>
                    </li>
                        <li>
                      <a class="dropdown-item" href="{{url('/user/updatepassword')}}">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Update Password</span>
                      </a>
                    </li>
             
                    <li>
                      <a class="dropdown-item" href="{{ url('/user/notification') }}">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Notification</span><span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">{{ $notifycounts }}</span>
                      </a>
                    </li>
                    
                    <li>
                      <a class="dropdown-item" href="{{ url('/student/message') }}">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">My Message</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20"></span>
                        </span>
                      </a>
                    </li>
                    @endif
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ url('/logout') }}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
{{--
<div class="col-lg-12  mt-5">
    <section class="quote-area" style="padding:0px 0px 0px 0px">
            <div class="container">
                <div class="row">
                    <div class="quote-item">
                        <div class="asif-tutor col-lg-12 row">
                            @if(Auth::user()->user_type==1)
                            <p>Thank you for creating your student account. You now have unlimited access to our tutors with an expertise in their teaching subject! Contact them and schedule a lesson around your availability at the comfort of your homes.</p>
                            @endif
                             @if(Auth::user()->user_type==2)
                            <div class="col-md-12">
                                <p>Thank you for taking the time out to create a Profile. All tutors are kindly reminded to complete their profile and upload all the relevant documentation to allow the account to be verified. Please note that the profile will not go to live on our site untill your account has been verified.</p>
                            </div>
                            <div class="col-md-12 text-left">
                             <br>
                                                <ol>
                                                    <li>Personal Information</li>
                                                    <li>Lesson/Subject Details</li>
                                                    <li>Short Video (Optional)</li>
                                                    <li>Academic certificates</li>
                                                    <li>Verification documents</li>
                                                </ol>
                                                
                                                <br>
                            </div>
                            
                                <div class="col-md-12">
                                                <p>Please note that all verification documents uploaded must be recent. We cannot accept any expired documentation.</p>
                                 </div>
                
   
                                 
                                 <div class="col-md-6 text-left">
                                
                                </div>
                                    
                                 
                                 
                                 
                                 <!---->
                             @endif
                             
                            <h6>Profile Information</h6>
                            <p>Thanks for submitting your profile!</p>
                             
                            <br>
                            @if(Auth::user()->user_type==1)
                            @php
                                $check=App\Models\VerificationCenter::where('user_id',Auth::user()->id)->where('item_name','Proof Of Address')->where('is_verify',1)->first();
                            @endphp
                            @if($check)
                           
                           @else
                           <div class="col-md-12">
                                    <a href="{{url('/user/proof-of-address')}}">
                                        <div class="alert alert-success" role="alert">
                                            Please Uploads Proof Of Address!!
                                        </div>
                                    </a>
                                </div>
                           @endif
                                
                            @else
                            <div class="col-md-12">
                                <a href="{{url('user/dbs-certification')}}">
                                    <div class="alert alert-success" role="alert">
                                        Please Uploads DBS Certification!!
                                    </div>
                                </a>
                            </div>
                            @endif
                            <!--  -->
                            @if(Auth::user()->user_type==1)
                                @php
                                    $course=App\Models\StudentTutorRequest::where('student_id',Auth::user()->id)->where('is_deleted',0)->where('is_approve',1)->where('tutor_is_approve',1)->get();
                                @endphp
                            @foreach($course as $coursedata)
                                @if($coursedata->due_amount !=null)

                                <div class="col-md-12">
                                    <a href="{{ url('/student/due_amount/paid/'.$coursedata->order_id) }}">
                                        <div class="alert alert-danger" role="alert">
                                          Course id:{{ $coursedata->order_id }}, Subject:{{ $coursedata->subject }}, Your Due Amount is {{$coursedata->due_amount}}. Paid Now.
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                           
                            @endif
                            
                        </div>
                    </div>
             
                </div>
            </div>
    </section>
</div>
--}}