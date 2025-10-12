@extends('layouts.backend')
@section('content')
<style>
    <style>
div.dataTables_wrapper div.dataTables_length select {

  height: 33px;
}
div.dataTables_wrapper div.dataTables_filter input {

    height: 25px;
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
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">All Video</h1>
                <!--end::Title-->
            </div>

        </div>
        <!--end::Container-->
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
     
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder fs-3 mb-1">All Video</span>
                                <!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> -->
                            </h3>
                            <div class="card-toolbar">
                                
                                <a href="{{ url('admin/tutorial-video/index') }}" class="btn btn-sm btn-primary"> back</a>
                            </div>
                        </div>
              
                        <div class="card-body py-3">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                 <style>
        .dashboard-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
    .card-icon {
    font-size: 2rem;
    color: #fff;
    padding: 10px 60px;
    border-radius: 10px;

        }
        .bg-primary { background-color: #007bff !important; }
        .bg-success { background-color: #28a745 !important; }
        .bg-warning { background-color: #ffc107 !important; }
        .bg-danger { background-color: #dc3545 !important; }
    </style>
                                
                                {{--
                                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableExample1" class="data-table" style="width:100%">
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-150px">#</th>
                                            <th class="min-w-140px">Title</th>
                                            <th class="min-w-140px">User</th>
                                            <th class="min-w-140px">Path</th>
                                            <th class="min-w-120px">Status</th>
                                            <th class="min-w-100px text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($allData as $key => $data)
                                        <tr>
                                            <td class="text-dark fw-bolder text-hover-primary fs-6"> {{ ++$key }} </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $data->title  }}</a>
                                            </td>
                                             <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $data->user  }}</a>
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"></a>
                                            </td>
                                            
                                            <td>
                                                @if($data->is_active==1)
                                                <span class="badge badge-light-success">Active</span>
                                                @else
                                                <span class="badge badge-light-danger">Deactive</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                @if($data->is_active==1)
                                                <a href="{{url('admin/tutorial-video/deactive/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="fa fa-thumbs-up green"></i>
                                                </a>
                                                @else
                                                <a href="{{url('admin/tutorial-video/active/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fa fa-thumbs-down red"></i>
                                                </a>
                                                @endif
                                                <a href="{{url('admin/tutorial-video/edit/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fas fa-pen-square blue"></i>
                                                </a>
                                                <a id="delete" href="{{url('/admin/tutorial-video/delete/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa fa-trash validation"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                
                                --}}
                                
                                    <div class="container mt-5">
                                        <div class="row g-4">
                                            <!-- Total Users -->
                                            <div class="col-md-12">
                                                <a href="{{ url('admin/video-category/{cate_id}') }}">
                                                <div class="card dashboard-card">
                                                    <div class="card-body d-flex align-items-center">
                                                        <div class="card-icon bg-primary me-3">
                                                            <i class="bi bi-people" style="color: #ffffff;font-size: 2rem;"></i>
                                                        </div>
                                                        <div>
                                                            <h5 class="card-title mb-1">{{ $subcategory->name }}</h5>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                       <div class="container mt-5">
                                        <div class="row g-4">
                                              <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3" id="dataTableExample1" class="data-table" style="width:100%">
                                    <!--begin::Table head-->
                                    <thead class="text-center">
                                        <tr class="fw-bolder text-muted">
                                            <th class="min-w-150px">#</th>
                                            <th class="min-w-140px">Title</th>
                                            <th class="min-w-140px">User</th>
                                            <th class="min-w-140px">Path</th>
                                            <th class="min-w-120px">Status</th>
                                            <th class="min-w-100px text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    @foreach($allData as $key => $data)
                                        <tr>
                                            <td class="text-dark fw-bolder text-hover-primary fs-6"> {{ ++$key }} </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $data->title  }}</a>
                                            </td>
                                             <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6">{{ $data->user  }}</a>
                                            </td>
                                            <td>
                                                <a href="#" class="text-dark fw-bolder text-hover-primary d-block mb-1 fs-6"></a>
                                            </td>
                                            
                                            <td>
                                                @if($data->is_active==1)
                                                <span class="badge badge-light-success">Active</span>
                                                @else
                                                <span class="badge badge-light-danger">Deactive</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                @if($data->is_active==1)
                                                <a href="{{url('admin/tutorial-video/deactive/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                    <i class="fa fa-thumbs-up green"></i>
                                                </a>
                                                @else
                                                <a href="{{url('admin/tutorial-video/active/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fa fa-thumbs-down red"></i>
                                                </a>
                                                @endif
                                                <a href="{{url('admin/tutorial-video/edit/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fas fa-pen-square blue"></i>
                                                </a>
                                                <a id="delete" href="{{url('/admin/tutorial-video/delete/'.$data->id)}}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa fa-trash validation"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                            
                                            
                                        </div>
                                    </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--begin::Body-->
                    </div>
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>

@endsection