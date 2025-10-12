
@extends('layouts.frontend')
@section('title', 'Find Tutor')
@section('content')
<link rel="stylesheet" href="{{asset('frontend/findtutorresponsive/zamanovi.css')}}">
<link rel="stylesheet" href="{{asset('frontend/findtutorresponsive/responsive.css')}}" >

     <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="box_left_sel" style="border: 1px solid #e0e0e0;border-radius: 5px;padding: 10px">

                        <div class="tutor_typ_left">
                            <h3 style="font-size: 16px;margin-bottom: 10px;color: #00db1d;font-weight: 800 !important;">
                                Tutor Type</h3>
                            <div class="brdr" style=" border: 1px solid #ededed;margin-bottom: 10px;"></div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input tutor_type common_selector tutor_wish" name="tutor_type" id="t-1"
                                    value="1" data-name="Online-Tutor" data-slug="type-online">
                                <label class="form-check-label" for="t-1"><b>Online Tutor</b></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input tutor_type common_selector tutor_wish" name="tutor_type" id="t-2"
                                    value="2" data-name="Home-Tutor" data-slug="type-online">
                                <label class="form-check-label" for="t-2"><b>Home Tutor</b></label>
                            </div>
                        </div>
                        <div class="gen_left" style="margin-top:15px">
                            <h3 style="font-size: 16px;margin-bottom: 10px;color: #00db1d;font-weight: 800 !important;">
                                Gender</h3>
                            <div class="brdr" style=" border: 1px solid #ededed;margin-bottom: 10px;"></div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input gender common_selector gender_wish" name="gender" id="g-1"
                                    value="Male" data-name="Male" data-slug="gender-Male">
                                <label class="form-check-label" for="g-1"><b>Male</b></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input  type="checkbox" class="form-check-input gender common_selector gender_wish" name="gender" id="g-2"
                                    value="Female" data-name="Female" data-slug="gender-Female">
                                <label class="form-check-label" for="g-2"><b>Female</b></label>
                            </div>
                        </div>
                        <div class="subj_left" style="margin-top:15px">
                            <h3 style="font-size: 16px;margin-bottom: 10px;color: #00db1d;font-weight: 800 !important;">
                                Subjects</h3>
                            <div class="brdr" style=" border: 1px solid #ededed;margin-bottom: 10px;"></div>
                            <div class="side_scrll">
                                
                                
                                @foreach($allsubject as $subject)
                                <div class="form-check form-check-inline">
                                    <input type="checkbox" class="form-check-input subject common_selector subject_wish" name="subject" id="b-{{ $subject->id }}"
                                    value="{{ $subject->id}}" data-name="{{ $subject->name}}" data-slug="brand-{{ $subject->name }}">
                                    <label class="form-check-label" for="b-{{ $subject->id }}"><b>{{ $subject->name}}</b></label>
                                </div>
                                <br>
                                 @endforeach
                                
                               
                            </div>
                        </div>
                        <div class="filter_price_left" style="margin-top:15px">
                            <h3 style="font-size: 16px;margin-bottom: 10px;color: #00db1d;font-weight: 800 !important;">
                                Filter By Price</h3>
                            <div class="brdr" style=" border: 1px solid #ededed;margin-bottom: 10px;"></div>
                            
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input price common_selector price_wish" name="price" value="1" id="p-1" data-name="£10 - £20" data-slug="price-1">
                                <label class="form-check-label" for="p-1"><b>£10 - £20</b></label>
                            </div>
                            
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input price common_selector price_wish" name="price" value="2" id="p-2" data-name="£21 - £30" data-slug="price-2" >
                                <label class="form-check-label" for="p-2"><b>£21 - £30</b></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input price common_selector price_wish" name="price" value="3"  id="p-3" data-name="£31 - £40" data-slug="price-3">
                                <label class="form-check-label" for="p-3"><b>£31 - £40</b></label>
                            </div>
                            <br>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input price common_selector price_wish" name="price" value="4"  id="p-4" data-name="£41 - £50" data-slug="price-4">
                                <label class="form-check-label" for="p-4"><b>£41 - £50</b></label>
                            </div>
                            <br>
                           <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input price common_selector price_wish" name="price" value="5"  id="p-5" data-name="£51 - Other" data-slug="price-5">
                                <label class="form-check-label" for="p-4"><b>£51 - Other</b></label>
                            </div>
                            <br>
                        </div>

                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="box_right_tea">

                        <!--BUTTON START-->
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="sel_option" style="margin-bottom: 28px;" >
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <select class="form-select" aria-label="sel_option"
                                                style="border: 1px solid #00db1d;" name="level" id="level">
                                                
                                            
                                    <option disabled selected>Select Level</option>

                                           @php
                                    $alllevel=DB::table('subject_levels')->get();
                                    @endphp
                                    @foreach($alllevel as $level)
                                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                                    @endforeach
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-select" aria-label="sel_option"
                                                style="border: 1px solid #00db1d;" name="subject" id="subject">
                                                   <option disabled selected>Select Subject</option>               
                                                              </select>
                                        </div>

                                        <div class="col-sm-5 offset-sm-1">
                                            <span class="sr" style="font-weight: 600;">Sort By:</span>
                                            <select  aria-label="sel_option"
                                                style="width:82%;display:inline-block; border:1px solid #00db1d;"  class="form-select alt_cls common_selector" name="sortBy" id="sortBy">

                                                <option selected data-slug="sortBy-Price-Low-to-High" data-name="Name (A to Z)" value="3">Name (A to Z)</option>
                                                <option  data-slug="sortBy-Price-Low-to-High" data-name="Price (Low to High)" value="1">Hourly Rate (Low
                                                    to High)
                                                </option>
                                                <option data-slug="sortBy-Price-High-to-Low" data-name="Price (High to Low)" value="2">Hourly Rate (High to Low)
                                                </option>
                                               
                                            </select>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="tag_button" id="tags_value">
                                    
                                   
                                    <button type="button" class="btn btn-success"
                                        style="background-color: #00db1d;border: 0px;">KSI Math</button>
                                        
                                           <button type="button" class="btn btn-success"
                                        style="background-color: #00db1d;border: 0px;">KSI Math</button>
                                        
                                    
                                </div>
                            </div>

                        </div>
                        <!--BUTTON END-->
                        <div class="row">
                            <div class="col-sm-12" id="defultData">
                                
                                <div class="teacher_det_scrl">  
                                
                                  @foreach($allteacher as $key => $data)
                                            @php
                                                    $tutor_edu_latest=App\Models\TutorEducation::where('name_of_degree','Degree')->where('is_verify',1)->where('user_id',$data->id,)->orderBy('id','DESC')->first();
                                                @endphp
                                    <div class="teacher_details">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="teac_prof">
                                                    <a href="{{ url('tutor-find/details/'.$data->id) }}"><img class="img-fluid img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="pro-img1"></a>
                                                    <div class="online">
                                                        <h5 style="line-height: 16px;">Online</h5>
                                                    </div>
                                                    <div class="rated">
                                                        <h5> Top Rated</h5>
                                                    </div>
                                                </div>
    
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="tech_cont">
                                                    <h4>{{  $data->name }} <i class='bx bxs-check-shield'></i></h4>
                                                    <div class="eb">
                                                        <span><i class='bx bxs-book'></i> {{ $data->current_subject }}</span>
                                                        <span class="con" style="margin-left: 10px;"><i
                                                                class='bx bxs-map'></i>@if($data->current_gedree_type !=NULL) ({{$data->current_gedree_type }} )@endif
                                                                
                                        @if($data->current_university !=NULL)
                                         {{$data->current_university }}
                                        @endif</span>
                                                    </div>
    
                                                    <span class="enroll" style="margin-top:10px;width: 40%;"><i
                                                            class='bx bxs-user'></i> 12 Enrolled
                                                        Students</span>
                                                    <span class="course" style="margin-top:10px;width: 40%;">12
                                                        Courses</span>
    
                                                    <span class="lang"
                                                        style="margin-top:10px;display: block;"><b>Subjects:</b>  @if($data->subject !=null)
                                            @php
                                                $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', $data->id)->get();
                                            @endphp
                                           @foreach($subjectstutor as $sub)
                                           @php
                                            $subjectname=App\Models\TutoringSubject::where('id',$sub->subject_id)->select(['name'])->first();
                                           @endphp
                                           @if($subjectname)
                                          {{$subjectname->name}}
                                           @endif
                                            @endforeach
                                            
                                         @endif</span>
                                                    <p class="te_details">{{ $data->headline_for_tutor }}</p>
                                                    <a href="{{ url('tutor-find/details/'.$data->id) }}" class="rem">Read More</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="main_te" style="width: 100%;
                                                    display: inline-flex">
                                                    <div class="tech_review">
                                                        <span class="review"><i class='bx bxs-star'></i> <b>5</b>
                                                            star</span>
                                                        <br>
                                                        <span class="re"><b>12</b> reviews</span>
                                                    </div>
                                                    <div class="tech_pamt">
                                                        <span class="money"><b>£ {{ $data->expected_hourly_rate }} / hr</b></span>
                                                        <br>
                                                        <span>per hour</span>
                                                    </div>
                                                </div>
    
                                                <div class="tech_btn_main">
                                                    <div class="tech_button">
                                                        <a href="{{ url('tutor-find/details/'.$data->id) }}" class="nxt_oper" target="_blank">Book For Enroll</a>
    
                                                    </div>
                                                    <div class="tech_btn_msg">
                                                        <a href="{{ url('tutor-find/details/'.$data->id) }}" class="nxt_msg" target="_blank">Message</a>
    
                                                    </div>
                                                </div>
                                            </div>
    
                                        </div>
    
                                    </div>
                                @endforeach
                               
                            </div>
                            </div>
                            <div class="col-sm-12" id="filterData">
                                
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </section>
@endsection