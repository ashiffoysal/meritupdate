@extends('layouts.backend')
@section('title', 'Edit Admin Video')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <div class="page-title d-flex align-items-center me-3 flex-wrap mb-5 mb-lg-0 lh-1">
                <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Edit Admin Video</h1>
            </div>
        </div>
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-fluid">
            <div class="card mb-10">
                <div class="card-body d-flex align-items-center p-5 p-lg-8">
                    <div class="ms-6">
                        <p class="list-unstyled text-gray-600 fw-bold fs-6 p-0 m-0">Edit Admin Video</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-stretch overflow-auto row text-right">
                            <div class="col-md-10"></div>
                            <div class="col-md-2 text-right">
                                <div class="mt-5" style="margin-left: 75px">
                                    <a href="{{ route('admin.adminvideo.index') }}" class="btn btn-primary">All Admin Videos</a>
                                </div>
                            </div>
                        </div>
                        <form class="form" method="POST" id="kt_layout_builder_form" action="{{ route('admin.adminvideo.update', $edit->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="card-body">
                                <div class="tab-content pt-3">
                                    <div class="tab-pane active" id="kt_builder_main">
                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Video Title:</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <input class="form-control form-control-solid" type="text" name="title" placeholder="Enter Title" value="{{ old('title', $edit->title) }}">
                                                
                                                <input type="hidden" name="id"  value="{{ $edit->id }}">
                                                @error('title')
                                                    <div class="validation">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Category:</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <select name="maincate" id="maincate" class="form-select form-select-solid" onchange="mainCateChange(this)">
                                                    <option selected disabled>Select</option>
                                                  
                                                   
                                                    @foreach($Main_category as $cate)
                                                        <option value="{{ $cate->id }}" {{ $cate->id == $edit->main_cate ? 'selected' : '' }}>{{ $cate->name }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">SubCategory:</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <select name="sub_cate" id="subcate" class="form-select form-select-solid">
                                                    <option selected disabled>Select</option>
                                                    
                                                    @foreach(DB::table('video_main_subcategory')->where('cate_id', $edit->main_cate)->get() as $subCate)
                                                        <option value="{{ $subCate->id }}" {{ $subCate->id == $edit->sub_cate ? 'selected' : '' }}>{{ $subCate->name }}</option>
                                                    @endforeach
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">For User:</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <select name="user" class="form-select form-select-solid" id="user-select">
                                                    <option selected disabled>Select</option>
                                                    <option value="ADMIN" {{ $edit->user == 'ADMIN' ? 'selected' : '' }}>Admin</option>
                                                    <option value="TUTOR" {{ $edit->user == 'TUTOR' ? 'selected' : '' }}>Tutor</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-10" id="admin_section" style="display: {{ $edit->user == 'ADMIN' ? 'block' : 'none' }}">
                                            <label class="col-lg-3 col-form-label text-lg-end">For Admin:</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <select name="user_id" class="form-select form-select-solid">
                                                    <option selected disabled>Select</option>
                                                    <option value="0" {{ $edit->user_id == 0 ? 'selected' : '' }}>All Admin</option>
                                                    @foreach(DB::table('admins')->get() as $admins)
                                                        <option value="{{ $admins->id }}" {{ $admins->id == $edit->user_id ? 'selected' : '' }}>{{ $admins->first_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-10" id="tutor_section" style="display: {{ $edit->user == 'TUTOR' ? 'block' : 'none' }}">
                                            <label class="col-lg-3 col-form-label text-lg-end">For Tutor:</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <select name="tutor_id" class="form-select form-select-solid">
                                                    <option selected disabled>Select</option>
                                                    <option value="0" {{ $edit->tutor_id == 0 ? 'selected' : '' }}>All Tutor</option>
                                                    @foreach(DB::table('users')->where('is_deleted', 0)->where('user_type', 2)->where('for_branch_tutor', 1)->get() as $tutors)
                                                        <option value="{{ $tutors->id }}" {{ $tutors->id == $edit->tutor_id ? 'selected' : '' }}>{{ $tutors->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Total Time(s):</label>
                                            <div class="col-lg-9 col-xl-4">
                                                <input class="form-control form-control-solid" type="text" name="total_time" placeholder="Enter total time (s)" value="{{ old('total_time', $edit->total_time) }}" required>
                                                @error('total_time')
                                                    <div class="validation">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <label class="col-lg-3 col-form-label text-lg-end">Video:</label>
                                            <div class="col-lg-3 col-xl-4">
                                                <input class="form-control form-control-solid" type="file" name="file" accept="video/*">
                                                <small class="text-muted">Leave blank if not changing the video.</small>
                                                @error('file')
                                                    <div class="validation">{{ $message }}</div>
                                                @enderror
                                            </div>
                                             <div class="offset-3 col-lg-6 col-xl-12">
                                                <video width="600" controls>
    <source src="{{ asset('/'.$edit->video_path) }}" type="video/mp4">
    Your browser does not support the video tag.
</video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer py-6">
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-9">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <span class="indicator-label">Update</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function mainCateChange(el){
          var type_id=el.value;
          if(type_id) {
             $.ajax({
                 url: "{{  url('get/video/subcate/all/') }}/"+type_id,
                 type:"GET",
                 dataType:"json",
                 success:function(data) {
                   

                        $('#subcate').empty();
                        $('#subcate').append('<option selected disabled>Select</option>');
                        $.each(data,function(index,districtObj){

                         $('#subcate').append('<option value="' + districtObj.id + '">'+districtObj.name+'</option>');
                         
                       });

                     
                        

                     }
             });
         } else {
             alert('sorry data not found');
         }
    }
  

  </script>
  
  <script>
    document.getElementById('user-select').addEventListener('change', function () {
        const value = this.value;

        // Hide all sections
        document.getElementById('admin_section').style.display = 'none';
        document.getElementById('tutor_section').style.display = 'none';

        // Show the selected section
        if (value === 'ADMIN') {
            document.getElementById('admin_section').style.display = 'block';
        } else if (value === 'TUTOR') {
            document.getElementById('tutor_section').style.display = 'block';
        }
    });
</script>
@endsection