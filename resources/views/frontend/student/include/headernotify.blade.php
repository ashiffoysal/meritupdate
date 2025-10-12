  
  
  
  
  @php
    
    $newstudentrequest=App\Models\StudentTutorRequest::where('tutor_id',Auth::user()->id)->where('is_approve',1)->where('tutor_is_approve',0)->first();
    $newnotification=App\Models\NotifyChat::where('user_id',Auth::user()->id)->where('user_is_seen',0)->first();
    
    $TutorComplatelesson=App\Models\TutorComplatelesson::where('student_id',Auth::user()->id)->orderBy('id','DESC')->where('is_approve',0)->first();
  @endphp
                
  
                 @if(Auth::user()->user_type==1)
                     @if($TutorComplatelesson)
                     <span class="badge bg-label-success" style="font-size:10px;margin:0px 10px">you have new lesson completed request</span>
                    @endif
                @endif
                 
                 @if(Auth::user()->user_type==2)
                     @if($newstudentrequest)
                     <span class="badge bg-label-danger" style="font-size:10px;margin:0px 10px">you have new student request</span>
                     @endif
                 @endif
               @if($newnotification)
                 <span class="badge bg-label-primary" style="font-size:10px;margin:0px 10px">you have new Notification</span>
                 @endif
                 