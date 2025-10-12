@extends('layouts.backend')
@section('title', 'Assesment')
@section('content')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>


<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-place="true" data-kt-place-mode="prepend" data-kt-place-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Assesment Details</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('/') }}" class="text-muted text-hover-primary">Home</a>
                    </li>
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                 
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <!-- <label class="form-label fw-bold">Notifications:</label> -->
                                <!--end::Label-->
                                <!--begin::Switch-->
                               
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                         
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <!-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a> -->
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
        <div  class="container">
            <!--begin::Navbar-->
            <div  id="printableArea">
            <div class="card mb-10">
                <div class="card-body pt-9 pb-0">
                 
                    
                
                        
                                  <img alt="Logo" src="{{asset('uploads/logo/'.$companyInformation->logo)}}" style="height:60px !important" />
                           
                    
                </div>
            </div>
          
            
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card header-->
                        <div class="card-title fs-3 fw-bolder">
                            <!--logo-->
                         
                            <h2>Assesment Details</h2>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body content">
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Branch Name</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->branch }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Assesment Time</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                    {{ $data->assesment_date_time }}
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Assesment Date</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                <!--begin::Progress-->
                                <div class="d-flex flex-column">
                                   {{ date('d-m-Y', strtotime($data->date));}}
                                    
                                  
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Parent Name</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                {{ $data->parent_name }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Children</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                            <table class="table">
                                    <thead>
                                        <tr>
                                        <!-- <th scope="col">#</th> -->
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last name</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach(json_decode($data->child_information) as $key => $newdata)
                                        <tr>
                                            <!-- <th scope="row">{{ ++$key }}</th> -->
                                            <td>{{$newdata->first_name}}</td>
                                            <td>{{$newdata->last_name}}</td>
                                            <td>{{$newdata->subject}}</td>
                                            <td>{{$newdata->year}}</td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                    </table>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                  
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Parent Phone</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                {{ $data->mobile }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Parent Email</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                                 {{ $data->email }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Address</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                               {{ $data->address }}
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                           <!--begin::Row-->
                           <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Details</div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                               {{ $data->write_details }}
                            </div>
                            <!--end::Col-->
                            
                        </div>
                        <!--end::Row-->
                        <div class="row">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3">Submit Date & Time </div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9">
                          
                               {{ $data->created_at->format('d-m-Y H:i:s') }}
                            </div>
                            <!--end::Col-->
                            
                        </div>
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
          </div>
            <!--end:Form-->
            <div class="card-footer d-flex justify-content-end py-6">
                        <!-- <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button> -->
                           <button type="button" onclick="printDiv('printableArea')" class="btn btn-primary btn-sm" style="float: right">Print</button>
                    </div>
        </div>
            
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.2/jQuery.print.js"
    integrity="sha512-BaXrDZSVGt+DvByw0xuYdsGJgzhIXNgES0E9B+Pgfe13XlZQvmiCkQ9GXpjVeLWEGLxqHzhPjNSBs4osiuNZyg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
</script>
@endsection