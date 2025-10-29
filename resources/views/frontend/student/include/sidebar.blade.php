           {{--
              @if(Auth::user()->user_type==1)
              <li><a href="{{ url('/student/dashboard') }}"> <i class="fa fa-user"></i> Profile</a></li>
              <li><a href="{{ url('/student/updateprofile') }}"> <i class="fa fa-navicon"></i> Edit Profile</a></li>
              <li><a href="{{ url('/user/verification') }}"> <i class="fa fa-bookmark-o"></i> Verification</a></li>
              <li><a href="{{ url('/student/lesson-complete') }}"> <i class="fa fa-file"></i>Lesson Complete Request </a></li>
              <li><a href="{{ url('/student/tutor-hire-list') }}"> <i class="fa fa-users" ></i>Tutor Hire</a></li>
              <li><a href="{{ url('/student/tutorrequestlist') }}"> <i class="fa fa-check-square"></i>Tutor Request</a></li>
              <li><a href="{{ url('/student/savetutor') }}"> <i class="fa fa-heart" aria-hidden="true"></i>Saved Tutor</a></li>
              <li><a href="{{ url('/student/message') }}"><i class="fa fa-comment"></i>My Messages</a></li>
              @php
                $notifycount=App\Models\NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->count();
              @endphp
              <li><a href="{{ url('/user/notification') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Notification (Supports) @if($notifycount > 0)  <span class="badge badge-success" style="color:red;background:#f7f7f7">{{$notifycount}}</span> @endif</a></li>
              <li><a href="{{ url('/student/payment') }}"> <i class="fa fa-gbp"></i>Transaction History</a></li>
              <li><a href="{{ url('/student/payment-history') }}"> <i class="fa fa-money"></i>Payment History</a></li>
              <li><a href="{{ url('/logout') }}"> <i class="fa fa-edit"></i> Logout</a></li>
              @else
              <li><a href="{{ url('/tutor/information') }}"> <i class="fa fa-user"></i> Dashboard</a></li>





              <li><a href="{{ url('/user/verification') }}"> <i class="fa fa-bookmark-o" ></i> Verification</a></li>
              <li><a href="{{ url('/tutor/account') }}"> <i class="fa fa-navicon"></i> Edit Profile</a></li>
               <li><a href="{{ url('/tutor/subject-create') }}"> <i class="fa fa-navicon"></i> Subject Manage</a></li>

              <li><a href="{{ url('/user/video') }}"> <i class="fa fa-navicon"></i>Video Presentation</a></li>

              <li><a href="{{ url('/tutor/message') }}"> <i class="fa fa-comment"></i> My Message</a></li>
              <li><a href="{{ url('/tutor/educational-information') }}"> <i class="fa fa-user"></i> Educational Documents</a></li>
              <li><a href="{{ url('/tutor/student-request-list') }}"> <i class="fa fa-check-square"></i>Student Request</a></li>
              <li><a href="{{ url('/tutor/lesson-complete-list') }}"> <i class="fa fa-file-o"></i>Lesson Completed</a></li>
              <!-- <li><a href="{{ url('/student/payment') }}"> <i class="fa fa-money"></i>Payment Request</a></li> -->
              <li><a href="{{ url('/tutor/wallet') }}"> <i class="fa fa-gbp"></i>Transaction History</a></li>
              <li><a href="{{ url('/tutor/withdraw') }}"> <i class="fa fa-money"></i>Withdraw Payment</a></li>
               @php
                $notifycount=App\Models\NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->count();
              @endphp
              <li><a href="{{ url('/user/notification') }}"><i class="fa fa-envelope" aria-hidden="true"></i>Notification (Supports) @if($notifycount > 0)  <span class="badge badge-success" style="color:red;background:#f7f7f7">{{$notifycount}}</span> @endif</a></li>
              <li><a href="{{ url('/tutor/articals-index') }}"> <i class="fa fa-file-powerpoint-o"></i>My Article</a></li>
              <!-- <li><a href="{{ url('/student/payment-history') }}"> <i class="fa fa-file-powerpoint-o"></i>Tag</a></li> -->
              <li><a href="{{ url('/logout') }}"> <i class="fa fa-edit"></i> Logout</a></li>
              @endif
              --}}


            @if(Auth::user()->user_type==1)
               <!-- Dashboard -->
            <li class="menu-item  {{ (request()->is('/student/dashboard*')) ? 'active' : '' }}">
              <a href="{{ url('/student/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>


               <li class="menu-item {{ (request()->is('/student/updateprofile*')) ? 'active' : '' }}">
              <a href="{{ url('/student/updateprofile') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Edit Profile</div>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('/user/verification*')) ? 'active' : '' }}">
              <a href="{{ url('/user/verification') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Verification</div>
              </a>
            </li>

            <li class="menu-item {{ (request()->is('/student/message*')) ? 'active' : '' }}">
              <a href="{{ url('/student/message') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">My Message</div>
              </a>
            </li>



            <!-- Layouts -->


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>

              <!-- Extended components -->
            <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Extended UI">Manage Tutor</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ (request()->is('/student/tutor-hire-list*')) ? 'active' : '' }}">
                  <a href="{{ url('/student/tutor-hire-list') }}" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Tutor Hire List</div>
                  </a>
                </li>
                <li class="menu-item {{ (request()->is('student/tutorrequestlist*')) ? 'active' : '' }}">
                  <a href="{{ url('/student/tutorrequestlist') }}" class="menu-link">
                    <div data-i18n="Text Divider">Tutor Request</div>
                  </a>
                </li>
                  <li class="menu-item {{ (request()->is('/student/savetutor*')) ? 'active' : '' }}">
                  <a href="{{ url('/student/savetutor') }}" class="menu-link">
                    <div data-i18n="Text Divider">Save Tutor</div>
                  </a>
                </li>


              </ul>
            </li>
            <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ (request()->is('/user/updatepassword*')) ? 'active' : '' }}">
                  <a href="{{url('/user/updatepassword')}}" class="menu-link" >
                    <div data-i18n="Basic">Update Password</div>
                  </a>
                </li>
              </ul>
            </li>
             <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Student Lesson</span>
            </li>
            @php
             $TutorComplatelessoncount=App\Models\TutorComplatelesson::where('student_id',Auth::user()->id)->orderBy('id','DESC')->where('is_approve',0)->count();
             @endphp
                <li class="menu-item {{ (request()->is('/student/lesson-complete*')) ? 'active' : '' }}">
              <a href="{{ url('/student/lesson-complete') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Boxicons">Lesson Complete Request<span class="badge badge-center rounded-pill bg-label-danger">{{$TutorComplatelessoncount }}</span></div>
              </a>
            </li>
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Transaction*</span></li>
            <!-- Cards -->
            <li class="menu-item {{ (request()->is('/student/payment*')) ? 'active' : '' }}">
              <a href="{{ url('/student/payment') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Transaction History</div>
              </a>
            </li>
            {{--
            <li class="menu-item {{ (request()->is('/student/payment-history*')) ? 'active' : '' }}">
              <a href="{{ url('/student/payment-history') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Payment History</div>
              </a>
            </li>
            --}}
            <!-- User interface -->




            @php
                $notifycount=App\Models\NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->count();
              @endphp
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Notification</span></li>
            <li class="menu-item {{ (request()->is('/user/notification*')) ? 'active' : '' }}">
              <a href="{{ url('/user/notification') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Support">Support @if($notifycount > 0)  <span class="badge badge-success" style="color:red;background:#f7f7f7">{{$notifycount}}</span> @endif</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ url('/logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Logout</div>
              </a>
            </li>
            @endif











            @if(Auth::user()->user_type==2)
               <!-- Dashboard -->
            <li class="menu-item {{ (request()->is('/tutor/information*')) ? 'active' : '' }}">
              <a href="{{ url('/tutor/information') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

             @if(Auth::user()->for_branch_tutor==1)

                <li class="menu-item {{ (request()->is('/video/tutorial*')) ? 'active' : '' }}">

                      <a href="{{ url('/video/tutorial') }}" class="menu-link">
                           <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Analytics">Video Tutorial</div>
                          </a>

              </li>

                <li class="menu-item {{ (request()->is('/tutor/subjects*')) ? 'active' : '' }}">

                      <a href="{{ url('/tutor/subjects') }}" class="menu-link">
                           <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Analytics">My Branch Subjects</div>
                          </a>

              </li>
              @endif


              <li class="menu-item {{ (request()->is('/video/online-tutorial*')) ? 'active' : '' }}">

                    <a href="{{ url('/video/online-tutorial') }}" class="menu-link">
                         <i class="menu-icon tf-icons bx bx-collection"></i>
                          <div data-i18n="Analytics">Video Tutorial(Online)</div>
                        </a>

            </li>

            <li class="menu-item {{ (request()->is('/tutor/online-resources*')) ? 'active' : '' }}">

                  <a href="{{ url('/tutor/online-resources') }}" class="menu-link">
                       <i class="menu-icon tf-icons bx bx-collection"></i>
                        <div data-i18n="Analytics">Online Tuition Resources</div>
                      </a>

          </li>
               <li class="menu-item {{ (request()->is('/tutor/account*')) ? 'active' : '' }}">
              <a href="{{ url('tutor/account') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Edit Profile</div>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('/user/verification*')) ? 'active' : '' }}">
              <a href="{{ url('/user/verification') }}" class="menu-link">
         <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Verification</div>
              </a>
            </li>
              <li class="menu-item {{ (request()->is('/tutor/educational-information*')) ? 'active' : '' }}">
              <a href="{{ url('/tutor/educational-information') }}" class="menu-link">
         <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Educational-Documents</div>
              </a>
            </li>
            <!-- <li class="menu-item">-->
            <!--  <a href="{{ url('tutor/subject-create') }}" class="menu-link">-->
            <!--   <i class="menu-icon tf-icons bx bx-collection"></i>-->
            <!--    <div data-i18n="Analytics">Manage Subjects</div>-->
            <!--  </a>-->
            <!--</li>-->
             <li class="menu-item {{ (request()->is('/user/video*')) ? 'active' : '' }}">
              <a href="{{ url('/user/video') }}" class="menu-link">
               <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Analytics">Video Presentation</div>
              </a>
            </li>





            <!-- Layouts -->


              <!-- Extended components -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Student Lesson</span>
            </li>
                <li class="menu-item {{ (request()->is('/tutor/lesson-complete-list*')) ? 'active' : '' }}">
              <a href="{{ url('/tutor/lesson-complete-list') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Boxicons">Lesson Completed</div>
              </a>
            </li>
               <li class="menu-item">
              <a href="javascript:void(0)" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Extended UI">Student Manage</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ (request()->is('/tutor/student-request-list*')) ? 'active' : '' }}">
                  <a href="{{ url('/tutor/student-request-list') }}" class="menu-link">
                    <div data-i18n="Perfect Scrollbar">Student Request</div>
                  </a>
                </li>
                <li class="menu-item {{ (request()->is('/tutor/message*')) ? 'active' : '' }}">
                  <a href="{{ url('/tutor/message') }}" class="menu-link">
                    <div data-i18n="Text Divider">My Message</div>
                  </a>
                </li>
              </ul>
            </li>


            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Account Settings">Article </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ (request()->is('/tutor/articals-index*')) ? 'active' : '' }}">
                  <a href="{{ url('/tutor/articals-index') }}" class="menu-link">
                    <div data-i18n="Connections">My Article</div>
                  </a>
                </li>
              </ul>
            </li>
               <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Authentications">Authentications</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ (request()->is('/user/updatepassword*')) ? 'active' : '' }}">
                  <a href="{{ url('/user/updatepassword')}}" class="menu-link">
                    <div data-i18n="Basic">Update Password</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Transaction</span></li>
            <!-- Cards -->
            <li class="menu-item {{ (request()->is('/tutor/wallet*')) ? 'active' : '' }}">
              <a href="{{ url('/tutor/wallet') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Transaction History</div>
              </a>
            </li>
            <li class="menu-item {{ (request()->is('/tutor/withdraw*')) ? 'active' : '' }}">
              <a href="{{ url('/tutor/withdraw') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Withdraw Payment</div>
              </a>
            </li>
            <!-- User interface -->




            @php
                $notifycount=App\Models\NotifyChat::where('user_id',Auth::user()->id)->select(['id','user_is_seen'])->where('user_is_seen',0)->count();
              @endphp
            <li class="menu-header small text-uppercase"><span class="menu-header-text">Notification</span></li>
            <li class="menu-item {{ (request()->is('/user/notification*')) ? 'active' : '' }}">
              <a href="{{ url('/user/notification') }}" class="menu-link">
                 <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Support">Support @if($notifycount > 0)  <span class="badge badge-success" style="color:red;background:#f7f7f7">{{$notifycount}}</span> @endif</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{ url('/logout') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Logout</div>
              </a>
            </li>
            @endif
