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
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Tutor Educational Information</h1>
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
					<li class="breadcrumb-item text-dark">Educational Information</li>
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
			@if($educational_in->count() > 0)
			@foreach($educational_in as $key => $data)
			<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
				<!--begin::Card header-->
				<div class="card-header cursor-pointer">
					<!--begin::Card title-->
					<div class="card-title m-0">
						<h3 class="fw-bolder m-0">{{$data->name_of_degree}}</h3>
					</div>
				</div>
				<!--begin::Card header-->
				<!--begin::Card body-->
				<div class="card-body p-9">
					<!--begin::Row-->
					<div class="row">
					
							<div class="col-md-7">
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Institution</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-dark">{{$data->institution}}</span>
										</div>
										<!--end::Col-->
									</div>
										<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Subject</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<span class="fw-bolder fs-6 text-dark">{{$data->subject}}</span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Input group-->
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Grade</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> {{ $data->grade }}</span>
										</div>
										<!--end::Col-->
									</div>
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Status</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> @if($data->is_verify==0) Pending @elseif($data->is_verify==1) Approve @else Reject @endif</span>
										</div>
										<!--end::Col-->
									</div>
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Manage</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> 
												<select id="is_vefiried_{{ $data->id }}" class="form-control" name="is_vefiried">
													<option value="1"@if($data->is_verify==1) selected @endif>approve</option>
													<option value="0" @if($data->is_verify==0) selected @endif>pending</option>
													<option value="2"@if($data->is_verify==2) selected @endif>reject</option>
												</select>
											</span>
										</div>
										<!--end::Col-->
									</div>
									<div class="row mb-7">
										<!--begin::Label-->
										<label class="col-lg-4 fw-bold text-muted">Query</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<span class="fw-bold fs-6"> 
												<input type="hidden" value="{{ $data->id }}" name="edu_id">
												<input class="form-control" id="more_{{ $data->id }}" type="text" value="{{ $data->more }}" name="query">
											</span>
										</div>
										<div class="col-lg-4">
											
										</div>
										<div class="col-lg-8 mt-5">
											<button type="button" data-id="{{ $data->id }}" class="btn btn-warning">Update</button>
										</div>
										<!--end::Col-->
									</div>
							</div>
							<div class="col-md-12">
								<div class="row mb-7">
									<!--begin::Label-->
									<label class="col-lg-2 fw-bold text-muted">Certificate Image
									<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
									<!--end::Label-->
									<!--begin::Col-->
									<div class="col-lg-8 d-flex align-items-center row">
									    @if($data->image==null)
									    <p>Not Uploaded</p>
									    @else
									  

										 @if($data->image_type==2)
							
            								<iframe src="{{ asset(''.$data->image) }}" width="100%" height="700px;"></iframe>
            								
            								
            								@elseif($data->image_type==1)
            								 <div class="col-lg-12" id="div{{ $data->id }}">
            								<img src="{{ asset('/'.$data->image) }}" class="img-fluid" alt="">
            								 </div>
            								 <br>
            								 <div class="col-lg-12 rot" style="margin-top:20px">
                                            <a style="cursor:pointer;color: #fff;background: #28e910;padding: 6px;border-radius: 5px;" data-id="{{ $data->id }}" class="clickme">Rotate image</a>
                                           </div>
            								
            								@endif
										@endif
										
									</div>
									<!--end::Col-->
								</div>
							</div>
						</form>
					</div>
					
					<!--end::Input group-->
					<!--begin::Input group-->
				
				</div>
				<!--end::Card body-->
			</div>
			@endforeach
			@else
			<p>Not Uploads Any Educational Information</p>
			@endif

		

		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>

<script>
    $(document).ready(function(){
        $(".btn-warning").click(function(){
            var id=$(this).data("id"); 
            var more=$("#more_"+id).val(); 
            var is_vefiried=$("#is_vefiried_"+id).val(); 
           
            
             if(id) {
                 $.ajax({
                     url: "{{  url('/admin/tutoreducation/update') }}",
                     type:"GET",
                     data:{
                         'id':id,
                         'more':more,
                         'is_vefiried':is_vefiried
                     },
                     success:function(data) {
                        iziToast.success({
					message: 'success',
					'position': 'topRight'
				});
                          
    
                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        });
    });
</script>

<script>

var rotateDegrees = 0;
$(".clickme").click(function(){
   
    var id=$(this).data("id");
   
  rotateDegrees += 90;
  $("#div"+id).css("transform","rotate(" + rotateDegrees + "deg)");
  
 
});

</script>
@endsection