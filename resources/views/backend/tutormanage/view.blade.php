@extends('layouts.backend')
@section('title', 'Assesment View')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Tutor Overview</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="index.html" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Tutor</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-200 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">Overview</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center py-1">
				<!--begin::Wrapper-->
				<div class="me-4">
		
				
					<!--end::Menu-->
				</div>
				<!--end::Wrapper-->
				<!--begin::Button-->
				
				<!--end::Button-->
			</div>
			<!--end::Actions-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container">
			<!--begin::Navbar-->
			@include('backend.tutormanage.include.header')
			<!--end::Navbar-->
			<!--begin::details View-->
			<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Profile Details</h3>
					</div>
					
						<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Manage
														<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24"></polygon>
																	<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)"></path>
																</g>
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true" style="">
															<!--begin::Menu item-->
													
                                                            <div class="menu-item px-3">
																<a href="{{url('/admin/tutor/approve/'.$data->id)}}" class="menu-link px-3">Approve</a>
															</div>
                                                            <div class="menu-item px-3">
																<a href="{{url('/admin/tutor/reject/'.$data->id)}}" class="menu-link px-3">Reject</a>
															</div>
                                                            <div class="menu-item px-3">
																<a href="{{ url('/admin/user/notify/'.$data->id) }}" class="menu-link px-3">Notify</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
                                                            
															<div class="menu-item px-3">
																<a id="delete" href="{{url('/admin/tutor/delete/'.$data->id)}}" class="menu-link px-3">Delete</a>
															</div>
                                                            
															
					</div>
					<!--end::Card title-->
					<!--begin::Action-->
					<a href="" class="btn btn-primary align-self-center">@if($data->is_tutor_approve==1) Approve @endif @if($data->is_tutor_approve==null) Pending @endif  @if($data->is_tutor_approve==2) Reject @endif</a>
					<!--end::Action-->
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9"> 
					<!--begin::Row-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Account created(Date & Time)</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark"> {{$data->created_at->format('d-m-Y H:i:s')}}</span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Tutor Type</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">@if($data->for_branch_tutor==1) Branch Tutor @endif @if($data->for_online_tutor==1) Online Tutor @endif @if($data->for_home_tutor==1) Home Tutor @endif</span>
						</div>
						<!--end::Col-->
					</div>
					@if($data->for_branch_tutor==1)
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Branch</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">{{$data->branch}}</span>
						</div>
						<!--end::Col-->
					</div>
					@endif


					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Full Name</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">{{ $data->name }}</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Email</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 fv-row">
							<span class="fw-bold fs-6">{{ $data->email }}</span>@if($data->is_verified==1) <span class="badge badge-success">Verified</span> @else <span class="badge badge-success">Unverified</span>@endif
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Contact Phone
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">{{ $data->phone }}</span>
							
						</div>
						<!--end::Col-->
					</div>
						<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Current / Completed Degree
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">{{ $data->current_gedree_type }}</span>
							
						</div>
						<!--end::Col-->
					</div>
						<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Univeristy
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">{{ $data->current_university }}</span>
							
						</div>
						<!--end::Col-->
					</div>
						<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Subject
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8 d-flex align-items-center">
							<span class="fw-bolder fs-6 me-2">{{ $data->current_subject }}</span>
							
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Address Line 1</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<a href="#" class="fw-bold fs-6 text-dark text-hover-primary">{{ $data->address }}</a>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Address Line 2</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<a href="#" class="fw-bold fs-6 text-dark text-hover-primary">{{ $data->address_two }}</a>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Country
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">{{$data->country}}</span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">City
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">{{$data->city}}</span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Post Code
						<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">{{$data->zip}}</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Hourly Rate</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">{{$data->expected_hourly_rate}} £</span>
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Subject</label>
						<!--end::Label-->
						<!--begin::Col-->
						@php
							$subject=App\Models\SelectedTutorSubject::where('tutor_id',$data->id)->get();
						@endphp
						<div class="col-lg-8">
						@foreach($subject as $sub)<button style="margin: 8px 5px;color:#fff" class="btn-sm btn-success" s> {{$sub->Subject->name ?? ''}} </button>@endforeach
						</div>
						<!--end::Col-->
					</div>
					<div class="row mb-7">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Communication</label>
						<!--end::Label-->
						<!--begin::Col-->
						<div class="col-lg-8">
							<span class="fw-bolder fs-6 text-dark">Email, Phone</span>
						</div>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row mb-10">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Allow Changes</label>
						<!--begin::Label-->
						<!--begin::Label-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6">Yes</span>
						</div>
						<!--begin::Label-->
					</div>
						<div class="row mb-10">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">About Me</label>
						<!--begin::Label-->
						<!--begin::Label-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6">{{ $data->bio_details }}</span>
						</div>
						<!--begin::Label-->
					</div>
						<div class="row mb-10">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Tutor Headline</label>
						<!--begin::Label-->
						<!--begin::Label-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6">{!! $data->headline_for_tutor !!}</span>
						</div>
						<!--begin::Label-->
					</div>
						<div class="row mb-10">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">About My Sessions</label>
						<!--begin::Label-->
						<!--begin::Label-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6">{!! $data->about_my_sessions !!}</span>
						</div>
						<!--begin::Label-->
					</div>
					<div class="row mb-10">
						<!--begin::Label-->
						<label class="col-lg-4 fw-bold text-muted">Availability</label>
						<!--begin::Label-->
						<!--begin::Label-->
						<div class="col-lg-8">
							<span class="fw-bold fs-6">{{$data->	availability}}</span>
						</div>
						<!--begin::Label-->
					</div>
					
				</div>
				<!--end::Card body-->
			</div>

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
@endsection