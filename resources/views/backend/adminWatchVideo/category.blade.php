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
                                <span class="card-label fw-bolder fs-3 mb-1">All Video Category</span>
                                <!-- <span class="text-muted mt-1 fw-bold fs-7">Over 500 orders</span> -->
                            </h3>
                          
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

        <div class="container mt-5">
        <div class="row g-4">
            <!-- Total Users -->
            <div class="col-md-4">
                <a href="{{ url('admin/staff-watch-video/subcategory/1') }}">
                <div class="card dashboard-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="card-icon bg-primary me-3">
                            <i class="bi bi-youtube" style="color: #ffffff;font-size: 2rem;"></i>
                        </div>
                        @php
                        
                            $countCate=DB::table('video_tutorial')
    ->where('main_cate', 1)
    ->count();
                        @endphp
                        <div>
                            <h5 class="card-title mb-1">Exam Centre London</h5>
                            <h6 class="card-subtitle mb-0">{{ $countCate }} Videos</h6>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- New Orders -->
            <div class="col-md-4">
                 <a href="{{ url('admin/staff-watch-video/subcategory/2') }}">
                <div class="card dashboard-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="card-icon bg-success me-3">
                            <i class="bi bi-youtube" style="color: #ffffff;font-size: 2rem;"></i>
                        </div>
                        <div>
                            @php
                        
                            $countCateend=DB::table('video_tutorial')
    ->where('main_cate', 2)
    ->count();
                        @endphp
                            <h5 class="card-title mb-1">Merit Tutors</h5>
                            <h6 class="card-subtitle mb-0">{{ $countCateend }} Videos</h6>
                        </div>
                    </div>
                </div>
                </a>
            </div>

            <!-- Revenue -->
            <div class="col-md-4">
                <a href="{{ url('admin/staff-watch-video/subcategory/3') }}">
                <div class="card dashboard-card">
                    <div class="card-body d-flex align-items-center">
                        <div class="card-icon bg-warning me-3">
                            <i class="bi bi-youtube" style="color: #ffffff;font-size: 2rem;"></i>
                        </div>
                        <div>
                            @php
                        
                            $countCateendNew=DB::table('video_tutorial')
    ->where('main_cate', 3)
    ->count();
                        @endphp
                            <h5 class="card-title mb-1">For Tutors</h5>
                            <h6 class="card-subtitle mb-0">{{ $countCateendNew }} Videos</h6>
                        </div>
                    </div>
                </div>
                </a>
            </div>

          
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