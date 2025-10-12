<div class="aside-menu flex-column-fluid">
	<!--begin::Aside Menu-->
	<div class="hover-scroll-overlay-y my-2 py-5 py-lg-8" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
		<!--begin::Menu-->
		<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.home*') ? 'active' : '' }}" href="{{route('admin.home')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">DASHBOARD</span>
				</a>
			</div>
				<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.bookpurchase.list*') ? 'active' : '' }}" href="{{route('admin.bookpurchase.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">BOOK PURCHASE</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.staff-video.category*') ? 'active' : '' }}" href="{{route('admin.staff-video.category')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">FOR ADMIN VIDEO</span>
				</a>
			</div>
			{{-- 
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.staff-video.index*') ? 'active' : '' }}" href="{{route('admin.staff-video.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">FOR ADMIN VIDEO</span>
				</a>
			</div>
		 --}}
		 @if(Auth::user()->role==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.adminvideo.create*') ? 'active' : '' }}" href="{{route('admin.adminvideo.create')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ADD VIDEO</span>
				</a>
			</div>
		@endif
		
		    <div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.watch-recored.index*') ? 'active' : '' }}" href="{{route('admin.watch-recored.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">VIDEO WATCHING RECORD</span>
				</a>
			</div>
			
		    <div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.summerschool.index*') ? 'active' : '' }}" href="{{route('admin.summerschool.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					@php
					    $summerall=DB::table('summer_school')->where('application_type','SUMMER SCHOOL')->count();
					@endphp
					<span class="menu-title">SUMMER SCHOOL</span><span class="badge badge-light-success">{{ $summerall }}</span>
				</a>
			</div>
			
				
		    <div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.mathscompetition.index*') ? 'active' : '' }}" href="{{route('admin.mathscompetition.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					@php
					    $mathsall=DB::table('summer_school')->where('application_type','MATHS COMPETITION')->count();
					@endphp
					<span class="menu-title">MATHS COMPETITION</span><span class="badge badge-light-success">{{ $mathsall }}</span>
				</a>
			</div>
			
			
			@if(Auth::user()->assesment==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.assesment.index*') ? 'active' : '' }}" href="{{route('admin.assesment.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					@php
					    $assesmentall=App\Models\Assesment::where('is_deleted',0)->where('is_seen',0)->count();
					@endphp
					<span class="menu-title">ASSESMENT</span><span class="badge badge-light-danger">{{ $assesmentall}}</span>
				</a>
			</div>
			@endif
			<div class="menu-item">
			    @php
			        $applicant_count=DB::table('apply_works')->where('is_deleted',0)->count();
			    @endphp 
				<a class="menu-link {{ request()->routeIs('admin.applycandidate.candidate*') ? 'active' : '' }}" href="{{ route('admin.applycandidate.candidate') }}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ALL APPLICANTE</span> <span class="badge badge-light-danger">{{ $applicant_count }}</span>
				</a>
			</div>
			<!--  -->
			@if(Auth::user()->tutor==1)
			
			@php
			    $totalverification=App\Models\VerificationCenter::where('is_verify',0)->count();
			    $totaltutoreducation=App\Models\TutorEducation::where('is_verify',0)->count();
			    
			@endphp

			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Tutor Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.branchtutor.list*') ? 'active' : '' }}" href="{{route('admin.branchtutor.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">BRANCH TUTOR</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.tutor.shortlist*') ? 'active' : '' }}" href="{{route('admin.tutor.shortlist')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">SHORTLISTED TUTOR (BRANCH)</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.tutor.list*') ? 'active' : '' }}" href="{{route('admin.tutor.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ALL TUTOR</span><span class="badge badge-light-danger">{{ $totalverification + $totaltutoreducation }}</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.approvetutor.list*') ? 'active' : '' }}" href="{{route('admin.approvetutor.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">APPROVE TUTOR</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.rejecttutor.list*') ? 'active' : '' }}" href="{{route('admin.rejecttutor.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">REJECT TUTOR</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.pendingtutor.list*') ? 'active' : '' }}" href="{{route('admin.pendingtutor.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">PENDING TUTOR</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.archivetutor.list*') ? 'active' : '' }}" href="{{route('admin.archivetutor.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ARCHIVE TUTOR</span>
				</a>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.assign-tutor.index*') ? 'active' : '' }}" href="{{route('admin.assign-tutor.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ASSIGN TUTOR</span>
				</a>
			</div>
			
			@endif
			@if(Auth::user()->student_request==1)
			<!--  -->
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Student Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.student-request.index*') ? 'active' : '' }}" href="{{route('admin.student-request.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">STUDENT REQUEST</span>
				</a>
			</div>
			@endif
				@if(Auth::user()->student==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.student.list*') ? 'active' : '' }}" href="{{route('admin.student.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">STUDENT</span>
				</a>
			</div>
			@endif
			
			<!--  -->
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Result Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link" href="{{url('admin/result/create')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ADD RESULT</span>
				</a>
			</div>
				<div class="menu-item">
				<a class="menu-link" href="{{url('admin/result/index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">ALL RESULT</span>
				</a>
			</div>
		
			
			
			
			
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">RESOURCES</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.resources.index*') ? 'active' : '' }}" href="{{route('admin.resources.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">All Resources </span><span class="badge badge-light-danger"></span>
				</a>
			</div>
		
			
			
			<!--  -->
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Tutor Notify</span>
				</div>
			</div>
			@php
			$totalnotify=App\Models\NotifyChat::where('admin_is_seen',0)->count();
			@endphp
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.notify.tutor*') ? 'active' : '' }}" href="{{route('admin.notify.tutor')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">NOTIFICATION </span><span class="badge badge-light-danger">{{ $totalnotify}}</span>
				</a>
			</div>

		
		
			
			
			
			@if(Auth::user()->receive_payment==1)
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Payment Section</span>
				</div>
			</div>
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.receiveindex.list*') ? 'active' : '' }}" href="{{route('admin.receiveindex.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">RECEIVE PAYMENT</span>
				</a>
			</div>
			@endif
			{{--
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.payindex.list*') ? 'active' : '' }}" href="{{route('admin.payindex.list')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">PAYMENT REQUEST</span>
				</a>
			</div>
			--}}

			@if(Auth::user()->payment_request==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.tutior.paymentrequest*') ? 'active' : '' }}" href="{{route('admin.tutior.paymentrequest')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					@php
						$totalrequ=App\Models\AmountWithdrawrequest::where('is_paid',0)->count();
					@endphp
					<span class="menu-title">PAYMENT REQUEST</span><span class="badge badge-light-danger">{{ $totalrequ}}</span>
				</a>
			</div>
			@endif
			@if(Auth::user()->role==1)
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Admin-User</span>
				</div>
			</div>
		
		
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin-user*')) here show   @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">Admin-User</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.admin-user.create*') ? 'active' : '' }}" href="{{url('admin/admin-user/create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> CREATE ADMIN-USER</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.admin-user.index*') ? 'active' : '' }}"  href="{{ route('admin.admin-user.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL ADMIN-USER</span>
						</a>
					</div>
				</div>
			</div>
			@endif
			<div class="menu-item">
				<div class="menu-content pt-8 pb-2">
					<span class="menu-section text-muted text-uppercase fs-8 ls-1">Website Setup</span>
				</div>
			</div>
			@if(Auth::user()->settings==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.companyInformation*')) here show  @elseif(request()->routeIs('admin.seoInformation*')) here show  @elseif(request()->routeIs('admin.socialInformation*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">SETTINGS</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.companyInformation*') ? 'active' : '' }}" href="{{route('admin.companyInformation')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">COMPANY INFORMATION</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.seoInformation*') ? 'active' : '' }}"  href="{{ route('admin.seoInformation') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">SEO</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.socialInformation*') ? 'active' : '' }}" href="{{ route('admin.socialInformation') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">SOICAL</span>
						</a>
					</div>
						<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.subscriveall*') ? 'active' : '' }}" href="{{ route('admin.subscriveall') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL SUBSCRIBER</span>
						</a>
					</div>
					
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.about-us*') ? 'active' : '' }}" href="{{ route('admin.about-us.update') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ABOUT US</span>
						</a>
					</div>
					{{-- 
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('admin.privacy-policy.update*') ? 'active' : '' }}"
                            href="{{ route('admin.privacy-policy.update') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Privacy Policy</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link {{ request()->routeIs('admin.terms-conditions.update*') ? 'active' : '' }}"
                            href="{{ route('admin.terms-conditions.update') }}">
                            <span class="menu-bullet">
                                <span class="bullet bullet-dot"></span>
                            </span>
                            <span class="menu-title">Terms & Conditions</span>
                        </a>
                    </div>
					--}}
				</div>
			</div>
			@endif
			@if(Auth::user()->contact_message==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.contactmessage.index*') ? 'active' : '' }}" href="{{route('admin.contactmessage.index')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">CONTACT MESSAGE</span>
				</a>
			</div>
			@endif
			@if(Auth::user()->banner==1)
			
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.banner.update*') ? 'active' : '' }}" href="{{route('admin.banner.update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">BANNER SECTION</span>
				</a>
			</div>
			@endif

			@if(Auth::user()->terms_and_condition==1)
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.terms-conditions.update*') ? 'active' : '' }}" href="{{route('admin.terms-conditions.update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">TERMS & CONDITION</span>
				</a>
			</div>
			
			<div class="menu-item">
				<a class="menu-link {{ request()->routeIs('admin.privacy-policy.update*') ? 'active' : '' }}" href="{{url('/admin/privacy-policy/update')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">PRIVACY POLICY</span>
				</a>
			</div>
			@endif
			@if(Auth::user()->gallery==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.blog*')) here show  @elseif(request()->routeIs('admin.blog*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">GALLERY SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.gallery.create*') ? 'active' : '' }}" href="{{route('admin.gallery.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> GALLERY CREATE</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.gallery.index*') ? 'active' : '' }}"  href="{{ route('admin.gallery.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL GALLERY</span>
						</a>
					</div>
					
				</div>
			</div>
			@endif
			@if(Auth::user()->events==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.blog*')) here show  @elseif(request()->routeIs('admin.blog*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">EVENT SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.event.create*') ? 'active' : '' }}" href="{{route('admin.event.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> EVENT CREATE</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.event.index*') ? 'active' : '' }}"  href="{{ route('admin.event.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL EVENT</span>
						</a>
					</div>
					
				</div>
			</div>
			@endif
			@if(Auth::user()->blogs==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.blog*')) here show  @elseif(request()->routeIs('admin.blog*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">BLOG SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.blog.create*') ? 'active' : '' }}" href="{{route('admin.blog.create')}}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title"> BLOG CREATE</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.blog.index*') ? 'active' : '' }}"  href="{{ route('admin.blog.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL BLOG</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.category.index*') ? 'active' : '' }}"  href="{{ route('admin.category.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL BLOG-CATEGORY</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.category.create*') ? 'active' : '' }}"  href="{{ route('admin.category.create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ADD BLOG-CATEGORY</span>
						</a>
					</div>
					
				</div>
			</div>
			@endif
			@if(Auth::user()->reviews==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.review*')) here show  @elseif(request()->routeIs('admin.review*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">REVIEW SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.review.index*') ? 'active' : '' }}"  href="{{ route('admin.review.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL REVIEW</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.review.create*') ? 'active' : '' }}"  href="{{ route('admin.review.create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ADD REVIEW</span>
						</a>
					</div>
					
				</div>
			</div>
			@endif
			@if(Auth::user()->fees==1)
			<div data-kt-menu-trigger="click" class="menu-item menu-accordion  @if(request()->routeIs('admin.fees*')) here show  @elseif(request()->routeIs('admin.fees*')) here show  @endif">
				<span class="menu-link">
					<span class="menu-icon">
						<i class="bi bi-layers fs-3"></i>
					</span>
					<span class="menu-title">FEES SECTION</span>
					<span class="menu-arrow"></span>
				</span>
				<div class="menu-sub menu-sub-accordion menu-active-bg">
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.fees.index*') ? 'active' : '' }}"  href="{{ route('admin.fees.index') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ALL FEES</span>
						</a>
					</div>
					<div class="menu-item">
						<a class="menu-link {{ request()->routeIs('admin.fees.create*') ? 'active' : '' }}"  href="{{ route('admin.fees.create') }}">
							<span class="menu-bullet">
								<span class="bullet bullet-dot"></span>
							</span>
							<span class="menu-title">ADD FEES</span>
						</a>
					</div>
				</div>
			</div>
			@endif
			
			<div class="menu-item">
				<a class="menu-link" href="{{route('admin.logout')}}">
					<span class="menu-icon">
						<i class="bi bi-house fs-3"></i>
					</span>
					<span class="menu-title">Logout</span>
				</a>
			</div>
		</div>
	</div>
</div>