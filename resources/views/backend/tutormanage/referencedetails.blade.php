@extends('layouts.backend')
@section('title', 'Assesment View')
@section('content')
<style>
	.form-control {
    display: block;
    width: 100%;
     padding: 0rem 1rem; 
    font-size: 1.1rem;
    font-weight: 500;
    line-height: 1.5;
    color: #181c32;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #e4e6ef;
    appearance: none;
    border-radius: 0;
    box-shadow: inset 0 1px 2px rgb(0 0 0 / 8%);
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Tutor Video Presentation</h1>
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
					<li class="breadcrumb-item text-dark">Reference  Details</li>
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
	
		<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Reference Details</h3>
					</div>
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
					    <div class="col-md-12">
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-2 fw-bold">Name
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">	
									   @if($data->reference_name !=null) {{ $data->reference_name }} @else Not Yet @endif
									</div>
									<!--end::Col-->
								</div>
								
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-2 fw-bold">Email
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									   @if($data->reference_email !=null)  {{ $data->reference_email }} @else Not Yet @endif							
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-2 fw-bold">Organisation
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									    @if($data->reference_organisation !=null)  {{ $data->reference_organisation }} @else Not Yet @endif									
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-2 fw-bold">Department
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									       @if($data->reference_department !=null) {{ $data->reference_department }} @else Not Yet @endif							
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-2 fw-bold">Position
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									    @if($data->reference_position !=null) {{ $data->reference_position }}	@else Not Yet @endif			
									</div>
									<!--end::Col-->
								</div>
								
							</div>
						
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				
				<!--end::Card body-->
			</div>
			@if($reference)
			@if($reference->accept_status==1)
	        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Submission Details</h3>
					</div>
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
					    <div class="col-md-12">
					        	<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Company Name:
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center"> 
									{{ $reference->company }}
									</div>
									<!--end::Col-->
								</div>
									<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Position:
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center"> 
									{{ $reference->positions }}
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Start Date Information:
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center"> 
									{{ $reference->start_date }}-{{ $reference->start_month }}-{{ $reference->	start_year }}
									</div>
									<!--end::Col-->
								</div>
								
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">End Date Information:
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									    {{ $reference->end_date }}-{{ $reference->end_month }}-{{ $reference->		end_year }}							
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<label class="col-lg-3 fw-bold ">Punctuality and Attendance
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									    {{ $reference->Punctuality_and_Attendance }}							
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Reliability
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">	
									{{ $reference->Reliability }}							
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Relationship with Colleagues
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									    {{ $reference->Relationship_with_Colleagues }}								
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Overall Contribution
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									     {{ $reference->Overall_Contribution }}							
									</div>
									<!--end::Col-->
								</div>
							</div>
						
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				
				<!--end::Card body-->
			</div>
			   <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Mandatory information</h3>
					</div>
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
					    <div class="col-md-12">
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-12 fw-bold">Was the applicant subject to any disciplinary action or allegations during their period of employment If YES, please provide details:*
								    </label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">	
									    {{ $reference->Safeguarding_and_Child_Protection }}
									</div>
									<!--end::Col-->
								</div>
								
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-12 fw-bold">Do you have any concerns about the Applicant working with children?
								    </label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">	
									{{ $reference->concerns_about_children }}
									
									</div>
									<!--end::Col-->
								</div>
								
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-12 fw-bold">Would you re-employ this person?
								    </label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">
									    {{ $reference->	re_employ }}							
									</div>
									<!--end::Col-->
								</div>
								
							
							</div>
						
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				
				<!--end::Card body-->
			</div>
			@else
			<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">Submission Details</h3>
					</div>
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
					    <div class="col-md-12">
					        <div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold "> Status
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center"> 
									Decline
									</div>
									<!--end::Col-->
								</div>
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-3 fw-bold ">Decline Reason
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Phone number must be active" aria-label="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center"> 
									{{ $reference->decline_text }}
									</div>
									<!--end::Col-->
								</div>
								
								
							</div>
						
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				
				<!--end::Card body-->
			</div>
			@endif
			@else
			
			 <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
					    <div class="col-md-12">
							
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-12 fw-bold">Submission Not Yet
								    </label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center">							
									</div>
									<!--end::Col-->
								</div>
								
							
							</div>
						
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				
				<!--end::Card body-->
			</div>
			@endif
		

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
@endsection