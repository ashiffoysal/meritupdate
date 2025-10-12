@extends('layouts.backend')
@section('title', 'History')
@section('content')
<style>
.form-control {
    padding: 0rem 1rem !important;
}
</style>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
				<!--begin::Title-->
				<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">History Details</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-200 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="{{ url('/admin') }}" class="text-muted text-hover-primary">Home</a>
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
					<li class="breadcrumb-item text-dark">History</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
			<div class="d-flex align-items-center py-1">
				<!--begin::Wrapper-->
				<div class="me-4"> 
		
				
					
				</div>
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
							<h3 class="fw-bolder m-0" style="color:red">Current Balance: {{ $davitamnout - $creditamnout }} £</h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<!-- <a href="account/settings.html" class="btn btn-primary align-self-center">Not Verified</a> -->
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
					<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">

							<div class="col-md-12">
                                <h2>Payment Request:</h2>
                                <br>
                              <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableExample1" class="data-table" style="width:100%;font-size:14px" >
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="">#</th>
                                            <th class="min-w-140px">Date</th>
                                            <th class="min-w-140px">Tutor</th>
                                            <th class="min-w-140px">Amount</th>
                                            <th class="min-w-140px">A/C Holder</th>
                                            <th class="min-w-100px ">Bank Name</th>
                                            <th class="min-w-100px ">A/C Number</th>
                                            <th class="min-w-100px">Short Code</th>
                                            <th class="min-w-100px">Payment Status</th>
                                            
                                            <th class="min-w-100px">Manage</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($allpayment as $key => $datass)
                                        <tr>
                                            <td> {{ ++$key }} </td>
                                            <td>
                                                 
                                               {{ $datass->created_at->format('F-d-Y') }}  
                                            </td>
                                            <td>
                                               {{ $datass->Tutor->name }}<br>
                                               {{ $datass->Tutor->email }}
                                            </td>
                                            <td>
                                                {{ $datass->amount }} £
                                            </td>
                                            <td>
                                                {{ $datass->account_holder_name }}
                                            </td>
                                            <td>
                                                {{ $datass->bank_name }}
                                            </td>
                                            <td>
                                            {{ $datass->account_number }}
                                            </td>
                                            <td>
                                            {{ $datass->account_address }}
                                            </td>
                                                                                    <td>
                                            @if($datass->is_paid==1)
                                               
                                               <span class="badge badge-light-success">Paid</span>
                                               @elseif($datass->is_paid==2)
                                                  
                                               <span class="badge badge-light-danger">reject</span>
                                                @else
                                               <span class="badge badge-light-danger">Unpaid</span>
                                               @endif
                                            </td>
                                            
                                            
                                                 <td>
                                                
                                                      
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
																<a href="{{ url('/admin/tutor/paymentrequest-approve/'.$datass->id.'/'.$data->id) }}" class="menu-link px-3">Approve</a>
																
																
																
																
																
																
																
															</div>
                                                            <div class="menu-item px-3">
																<a href="{{ url('/admin/payment-request/reject/'.$datass->id) }}" class="menu-link px-3">Reject</a>
															</div>
                                                            
															<!--end::Menu item-->
															<!--begin::Menu item-->
                                                            
															<div class="menu-item px-3">
																<a id="delete" href="{{url('/admin/payment-request/delete/'.$datass->id)}}" class="menu-link px-3">Delete</a>
																
																
															</div>
                                                            
															<!--end::Menu item-->
														</div>
														 
														<!--end::Menu-->
													</td>
                                           
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                            </div>
                            
						</div>
					</div>
					<!--end::Card body-->
				</div>
                
				<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
					<!--begin::Card header-->
					<div class="card-header cursor-pointer">
						<!--begin::Card title-->
						<div class="card-title m-0">
							<h3 class="fw-bolder m-0"><p style="font-size:10px"></p></h3>
						</div>
						<!--end::Card title-->
						<!--begin::Action-->
						<!-- <a href="account/settings.html" class="btn btn-primary align-self-center">Not Verified</a> -->
						<!--end::Action-->
					</div>
					<!--begin::Card header-->
					<!--begin::Card body-->
				<div class="card-body p-9">
						<!--begin::Row-->
						<div class="row mb-7">

							<div class="col-md-12">
                                <h2>Wallet History:</h2>
                                <br>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Transection Type</th>
                                        <th scope="col">Transection Id</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allwallet as $key => $data)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td>
                                          
                                            {{ $data->created_at->format('d-M-Y') }}  
                                            </td>
                                        <td>{{ $data->amount }} £</td>
                                        <td>@if($data->amount_type=='Dabit') <span class="btn-sm btn-success">Cash In</span> @elseif($data->amount_type=='Credit') <span class="btn-sm btn-danger">Cash out</span> @endif</td>
                                        <td>{{  $data->transection_id }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            
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