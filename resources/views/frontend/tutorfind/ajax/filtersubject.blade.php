@if($products->count() > 0 )
@foreach($products as  $datas)

@php
$data=App\Models\User::where('id',$datas->tutor_id)->where('is_deleted',0)->where('is_verified',1)->where('is_tutor_approve',1)->where('user_type',2)->select(['id','subject','name','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_gedree_type','current_university'])->first();

@endphp
@if($data)
   @php
                        $tutor_edu_latest=App\Models\TutorEducation::where('name_of_degree','Degree')->where('is_verify',1)->where('user_id',$data->id,)->orderBy('id','DESC')->first();
                    @endphp
                
        <div class="teacher_details" >
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
                             
@endif
@endforeach
@else
<p><span>Opps! Tutor Not Found</span></p>
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.js"></script>
<script>
    $(document).ready(function(){
            $(".img_laz").lazyload({
            effect : "fadeIn"
        });
    })

</script>
