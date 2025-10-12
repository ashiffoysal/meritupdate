<?php

namespace App\Http\Controllers\Frontend;


use App\Models\User;
use App\Models\VerificationCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TutoringSubject;
use App\Models\smschat;
use App\Models\TutorEducation;
use App\Models\SelectedTutorSubject;
use App\Models\Aricle;
use App\Models\StudentTutorRequest;
use Illuminate\Support\Facades\Auth;
use Devfaysal\BangladeshGeocode\Models\Division;
use Image;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use DB;
use App\Mail\GuardianMessage;
use App\Mail\TutorMessage;
use App\Mail\TutorVideoCompleted;
use App\Mail\TutorCompletedConfirmation;
use Mail;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function tutorsubjects(){
        $allsubject=DB::table('video_main_subcategory')->where('cate_id',3)->get();
        $alldata=DB::table('branch_tutor_subjects')->where('tutor_id',Auth::user()->id)->get();
        return view('frontend.tuitor.mysubject',compact('allsubject','alldata'));
    }
    
    public function tutorsubject_delete($id){
        $delete=DB::table('branch_tutor_subjects')->where('tutor_id',Auth::user()->id)->where('id',$id)->delete();
         if ($delete) {
            Alert::toast('successfully Deleted', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }
    public function tutorsubjectStore(Request $request){
        $insert=DB::table('branch_tutor_subjects')->insert([
                'tutor_id'=>Auth::user()->id,
                'subject_id'=>$request->subject,
                'created_at'=>carbon::now()->toDateTimeString(),
            ]);
          if ($insert) {
            Alert::toast('successfully added', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }
    public function dashboard()
    {
        
        $allsubject=TutoringSubject::where('is_deleted',0)->where('status',1)->select(['name','id'])->get();
        return view('frontend.dashboard.dashboard',compact('allsubject'));
    }

// tutor profile update
    public function tutorprofileupdate(Request $request){

   
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date_of_birth' => 'required',
            'address_line_1' => 'required',
            'zip_code' => 'required',
        ]);

        $update=User::where('id',$request->id)->update([

            'for_branch_tutor'=>$request->for_branch,
            'for_online_tutor'=>$request->for_online,
            'for_home_tutor'=>$request->for_home,
            'name'=>$request->name,
            'about_my_sessions'=>$request->about_my_sessions,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'date_of_birth'=>$request->date_of_birth,
            'address'=>$request->address_line_1,
            'address_two'=>$request->address_line_2,
            'branch'=>$request->branch_name,
            'city'=>$request->city,
            'name_of_title'=>$request->title,
            'gender'=>$request->gender,
            'travel_distence'=>$request->travel_distence,
            'gcse_institution'=>$request->gcse_institution,
            'gcse_grade'=>$request->gcse_grade,
            'gcse_subject'=>$request->gcse_subject,
            'a_level_institution'=>$request->a_level_institution,
            'a_level_grade'=>$request->a_level_grade,
            'a_level_subject'=>$request->a_level_subject,
            'degree_institution'=>$request->degree_institution,
            'degree_grade'=>$request->degree_grade,
            'degree_subject'=>$request->degree_subject,
            'masters_institution'=>$request->masters_institution,
            'masters_grade'=>$request->masters_grade,
            'masters_subject'=>$request->masters_subject,
            'headline_for_tutor'=>$request->headline_for_tutor,
            'bio_details'=>$request->bio_details,
            'tutor_experience'=>$request->tutor_experience,
            'expected_hourly_rate'=>$request->expected_hourly_rate,
            'zip'=>$request->zip_code,
            'other_subject'=>$request->other_subject,
            // 'other_subject_name'=>$request->other_subject_name,
            'availability'=>$request->availability,
          
            'current_gedree_type'=>$request->current_gedree_type,
            'current_university'=>$request->current_university,
            'current_subject'=>$request->current_subject,
            
            'reference_name'=>$request->reference_name,
            'reference_email'=>$request->reference_email,
            'reference_organisation'=>$request->reference_organisation,
            'reference_department'=>$request->reference_department,
            'reference_position'=>$request->reference_position,


        ]);
     

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Tutor_profile' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/student/' . $ImageName);
            User::where('id', $request->id)->update([
                'photo' => 'uploads/student/' . $ImageName,
            ]);
        }

        // cv
        if($request->hasFile('cv')) {

            $photo =$request->file('cv');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $newfile =$photo->move(public_path().'/uploads/', $name);
            User::where('id', $request->id)->update([
                'cv' => $name,
            ]);
            
        }
        
        if ($update) {
            Alert::toast('congratulation ! successfully update', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

// tutor informaion update
    public function tutorinformation(){
        return view('frontend.tuitor.information');
    }

    // student request
     public function studentrequestlist(){

        $alldata=StudentTutorRequest::where('tutor_id',Auth::user()->id)
        ->where('is_deleted',0)
        ->where('is_approve',1)
        ->with(['Student','Tutor'])
        ->orderBy('id','DESC')->get();
        return view('frontend.tuitor.studentrequestlist',compact('alldata'));
    }
    public function studentrequestlistview($id){
        $data=StudentTutorRequest::where('tutor_id',Auth::user()->id)
        ->where('id',$id)
        ->with(['Student','Tutor'])
        ->first();
        return view('frontend.tuitor.viewrequest',compact('data'));
    }

    public function studentrequestlistaccept($id){
        $data=StudentTutorRequest::where('tutor_id',Auth::user()->id)
        ->where('id',$id)->update([
            'tutor_is_approve'=>1,
        ]);
        if ($data) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

    public function studentrequestlistreject($id){
        
        $data=StudentTutorRequest::where('tutor_id',Auth::user()->id)->where('id',$id)->select(['id'])->first();
      
        return response()->json($data);
    }
    // 
    public function studentrejectRequest(Request $request){
        $update=StudentTutorRequest::where('tutor_id',Auth::user()->id)->where('id',$request->requ_id)->update([
            'tutor_reject_reson'=>$request->reeject_reason,
            'tutor_is_approve'=>2,
        ]);
        if ($update) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
      
    }

    public function tutor_account(){

        $allsubject=TutoringSubject::where('is_deleted',0)->where('status',1)->select(['name','id'])->get();
        return view('frontend.tuitor.tutor_account',compact('allsubject'));
        
    }

    // dbs
    public function dbscertification(){
         return view('frontend.tuitor.dbs');
    }

     public function dbscertificationsubmit(Request $request){

       
        
        $insert=VerificationCenter::insertGetId([
            'item_name'=>'DBS Certification',
            'user_id'=>Auth::user()->id,
            'date'=>Carbon::now(),
            'image_type'=>$request->image_type,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
       
         if($request->image_type==1){
             if ($request->hasFile('image')) {
           $image = $request->file('image');
           $ImageName = 'Tutor_proof_of_adrress' . '_' . time() . '.' . $image->getClientOriginalExtension();
           Image::make($image)->save('uploads/student/' . $ImageName);
           VerificationCenter::where('id', $insert)->update([
               'image' => 'uploads/student/' . $ImageName,
           ]);
        }
       }
       if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                VerificationCenter::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
                
            }
       }
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }

         
    }
    


    // verification
    public function verification(){

       $maindata=VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
       $dbs=VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('item_name','DBS Certification')->first();
       $proof_of_address=VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('item_name','Proof Of Address')->first();
       $profileimage=VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('item_name','Profile Image')->first();
       
       $cv=VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('item_name','CV')->first();
        $ids=VerificationCenter::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('item_name','Photo ID')->first();
       return view('frontend.tuitor.verification',compact('maindata','dbs','proof_of_address','profileimage','cv','ids'));
    }


    // proof of address
      // verification
      public function proofofaddress(){
       
        return view('frontend.tuitor.proof_of_address');
     }
     public function proofofaddresssubmit(Request $request){
       
       $insert=VerificationCenter::insertGetId([
           'item_name'=>'Proof Of Address',
           'proof_of_address'=>$request->address_type,
           'user_id'=>Auth::user()->id,
           'date'=>Carbon::now(),
           'image_type'=>$request->image_type,
           'created_at'=>Carbon::now()->toDateTimeString(),
       ]);
       
       if($request->image_type==1){
             if ($request->hasFile('image')) {
           $image = $request->file('image');
           $ImageName = 'Tutor_proof_of_adrress' . '_' . time() . '.' . $image->getClientOriginalExtension();
           Image::make($image)->save('uploads/student/' . $ImageName);
           VerificationCenter::where('id', $insert)->update([
               'image' => 'uploads/student/' . $ImageName,
           ]);
        }
       }
       if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                VerificationCenter::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
                
            }
       }
     
       
       if ($insert) {
           Alert::toast('congratulation ! success', 'success');
           return redirect()->back();
       } else {
           Alert::toast('Something Went Wrong', 'error');
           return redirect()->back();
       }
       
   }

//    profilie
    public function profileimage(){

        return view('frontend.tuitor.profileimage');
    }

    public function profileimagesubmit(Request $request){

       
        $validated = $request->validate([
           'thumbnail_img' => 'required',
       ]);
       $insert=VerificationCenter::insertGetId([
           'item_name'=>'Profile Image',
           'user_id'=>Auth::user()->id,
           'date'=>Carbon::now(),
           'created_at'=>Carbon::now()->toDateTimeString(),
       ]);
       
       if ($request->hasFile('thumbnail_img')) {
           $image = $request->file('thumbnail_img');
           $ImageName = 'Profile_Image' . '_' . time() . '.' . $image->getClientOriginalExtension();
           Image::make($image)->save('uploads/student/' . $ImageName);
           VerificationCenter::where('id', $insert)->update([
               'image' => 'uploads/student/' . $ImageName,
           ]);
       }
       $update=User::where('id',Auth::user()->id)->update([
           'photo'=>'uploads/student/' . $ImageName,
           'verification_update'=>Carbon::now()->toDateTimeString(),
       ]);
       if ($insert) {
           Alert::toast('congratulation ! success', 'success');
           return redirect()->back();
       } else {
           Alert::toast('Something Went Wrong', 'error');
           return redirect()->back();
       }

   }


    // cv uploads
    public function cvuploads(){
        return view('frontend.tuitor.cv');
    }

    public function cvuploadsubmit(Request $request){
        $validated = $request->validate([
            'cv' => 'required',
        ]);
        $insert=VerificationCenter::insertGetId([
            'item_name'=>'CV',
            'user_id'=>Auth::user()->id,
            'date'=>Carbon::now(),
            'image_type'=>2,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->hasFile('cv')) {

            $photo =$request->file('cv');
            $name = time().'.'.$photo->getClientOriginalExtension();
            $newfile =$photo->move(public_path().'/uploads/', $name);
            VerificationCenter::where('id', $insert)->update([
                'image' => 'updatecore/public/uploads/'.$name,
            ]);
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
        }
      
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

    // educational
    public function educationalInformation(){
        $maindata=TutorEducation::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        $basic_identity=TutorEducation::where('user_id',Auth::user()->id)->where('basic_identity',1)->orderBy('id','ASC')->get();
        $gcse=TutorEducation::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('name_of_degree','GCSE')->where('basic_identity',0)->first();
        $alevel=TutorEducation::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('name_of_degree','A Level')->where('basic_identity',0)->first();
        $masters=TutorEducation::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('name_of_degree','Degree')->where('basic_identity',0)->first();
        $degree=TutorEducation::where('user_id',Auth::user()->id)->orderBy('id','DESC')->where('name_of_degree','Masters')->where('basic_identity',0)->first();
        return view('frontend.tuitor.educational_identification',compact('maindata','gcse','alevel','masters','degree','basic_identity'));
    }

    // gcse submit
    public function gcsesubmit(Request $request){
        $validated = $request->validate([
            'name_of_degree' => 'required',
            'institution' => 'required',
            'grade' => 'required',
            'subject' => 'required',
        ]);
        $insert=TutorEducation::insertGetId([
            'name_of_degree'=>'GCSE',
            'institution'=>$request->institution,
            'grade'=>$request->grade,
            'subject'=>$request->subject,
            'user_id'=>Auth::user()->id,
            'image_type'=>$request->image_type,
            'date'=>Carbon::now(),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->image_type==1){
            if ($request->hasFile('gcse_image')) {
                $image = $request->file('gcse_image');
                $ImageName = 'GCSe' . '_' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/student/' . $ImageName);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'uploads/student/' . $ImageName,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
                
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
        
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }


        
    }
    public function alevelsubmit(Request $request){
        $validated = $request->validate([
            'name_of_degree' => 'required',
            'institution' => 'required',
            'grade' => 'required',
            'subject' => 'required',
        ]);
        $insert=TutorEducation::insertGetId([
            'name_of_degree'=>'A Level',
            'institution'=>$request->institution,
            'grade'=>$request->grade,
            'subject'=>$request->subject,
            'user_id'=>Auth::user()->id,
            'image_type'=>$request->image_type,
            'date'=>Carbon::now(),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
         if($request->image_type==1){
            if ($request->hasFile('alevel_image')) {
                $image = $request->file('alevel_image');
                $ImageName = 'GCSe' . '_' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/student/' . $ImageName);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'uploads/student/' . $ImageName,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
        }
           if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
                
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
        
        
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }

    }
    public function degreesubmit(Request $request){
        $validated = $request->validate([
            'name_of_degree' => 'required',
            'institution' => 'required',
            'grade' => 'required',
            'subject' => 'required',
        ]);
        $insert=TutorEducation::insertGetId([
            'name_of_degree'=>'Degree',
            'institution'=>$request->institution,
            'grade'=>$request->grade,
            'subject'=>$request->subject,
            'user_id'=>Auth::user()->id,
            'image_type'=>$request->image_type,
            'date'=>Carbon::now(),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->image_type==1){
            if ($request->hasFile('degree_image')) {
                $image = $request->file('degree_image');
                $ImageName = 'GCSe' . '_' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/student/' . $ImageName);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'uploads/student/' . $ImageName,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        
        if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
        
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }

    }
    public function masterssubmit(Request $request){
        $validated = $request->validate([
            'name_of_degree' => 'required',
            'institution' => 'required',
            'grade' => 'required',
            'subject' => 'required',
        ]);
        $insert=TutorEducation::insertGetId([
            'name_of_degree'=>'Masters',
            'institution'=>$request->institution,
            'grade'=>$request->grade,
            'subject'=>$request->subject,
            'user_id'=>Auth::user()->id,
            'image_type'=>$request->image_type,
            'date'=>Carbon::now(),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->image_type==1){
            if ($request->hasFile('masters_image')) {
                $image = $request->file('masters_image');
                $ImageName = 'GCSe' . '_' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/student/' . $ImageName);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'uploads/student/' . $ImageName,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        
        if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
        
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

    // 
    public function moresubmit(Request $request){

        $validated = $request->validate([
            'institution' => 'required',
            'grade' => 'required',
            'subject' => 'required',
        ]);
        $insert=TutorEducation::insertGetId([
            'name_of_degree'=>$request->name_of_degree,
            'institution'=>$request->institution,
            'grade'=>$request->grade,
            'basic_identity'=>1,
            'image_type'=>$request->image_type,
            'subject'=>$request->subject,
            'user_id'=>Auth::user()->id,
            'date'=>Carbon::now(),
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($request->image_type==1){
            if ($request->hasFile('more_image')) {
                $image = $request->file('more_image');
                $ImageName = 'more_image' . '_' . time() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/student/' . $ImageName);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'uploads/student/' . $ImageName,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
        }
        if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                TutorEducation::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
        
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }
    public function allmessage(){
        
        $alldata=DB::table('smschats')
        ->where('smschats.receiver_id',Auth::user()->id)
        ->get();
        return view('frontend.smschat.index',compact('alldata'));
         
    }

    public function viewmessage($id){

        $allsms=DB::table('smschats')
        ->where('receiver_id',Auth::user()->id)
        ->where('sender_id',$id)
        ->orderby('id','ASC')
        ->get();
        return view('frontend.smschat.viewchat',compact('allsms','id'));

    }

    public function tutormessagesubmit(Request $request){
   
        $insert=smschat::insert([
            'message'=>$request->message,
            'type'=>'receiver',
            'sender_id'=>$request->sender_id,
            'outgoing_id'=>$request->sender_id,
            'receiver_id'=>Auth::user()->id,
            'incomming_id'=>Auth::user()->id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            $data=User::where('id',$request->sender_id)->select(['id','name','email'])->first();
             Mail::to($data->email)->send(new TutorMessage($data));
            Alert::toast('Message sent ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }


    // sms chat
    public function messagechat(Request $request){
        $insert=smschat::insertGetId([
            'message'=>$request->message,
            'type'=>'outgoing',
            'sender_id'=>Auth::user()->id,
            'outgoing_id'=>Auth::user()->id,
            'receiver_id'=>$request->tutor_id,
            'incomming_id'=>$request->tutor_id,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            $data=User::where('id',$request->tutor_id)->select(['id','name','email'])->first();
            Mail::to($data->email)->send(new GuardianMessage($data));
            Alert::toast('Messsage sent ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }


    public function tutorarticals(){
        $allsubject=TutoringSubject::get();
        return view('frontend.tuitor.artical',compact('allsubject'));
    }


    public function tutorarticalssubmit(Request $request){
        $insert=Aricle::insert([
            'title'=>$request->title,
            'user_id'=>Auth::user()->id,
            'subject'=>$request->subject,
            'details'=>$request->editor1,
            'created_at'=>carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }

    public function tutorarticalsindex(){
        $alldata=Aricle::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.tuitor.articalindex',compact('alldata'));
    }

    public function tutorarticalsedit($id){
        $allsubject=TutoringSubject::get();
        $data=Aricle::where('user_id',Auth::user()->id)->where('id',$id)->first();
        return view('frontend.tuitor.articaleupdate',compact('data','allsubject'));
    }
    // update
    public function tutorarticalsupdate(Request $request){

        $insert=Aricle::where('id',$request->id)->update([
            'title'=>$request->title,
            'user_id'=>Auth::user()->id,
            'subject'=>$request->subject,
            'details'=>$request->editor1,
            'updated_at'=>carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        }else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }

    }


    public function articaledelete($id){
        $delete=Aricle::where('id',$id)->where('user_id',Auth::user()->id)->delete();
        if ($delete) {
            Alert::toast('congratulation ! success', 'success');
            return redirect()->back();
        }else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
    }
    
    
    // 
    public function idverification(){
        return view('frontend.tuitor.idsverification');
    }
    
    // 
    public function idverificationsubmit(Request $request){
          
       $insert=VerificationCenter::insertGetId([
           'item_name'=>'Photo ID',
           'proof_of_address'=>$request->address_type,
           'user_id'=>Auth::user()->id,
           'date'=>Carbon::now(),
           'image_type'=>$request->image_type,
           'created_at'=>Carbon::now()->toDateTimeString(),
       ]);
        if($request->image_type==1){
             if ($request->hasFile('image')) {
           $image = $request->file('image');
           $ImageName = 'Tutor_proof_of_adrress' . '_' . time() . '.' . $image->getClientOriginalExtension();
           Image::make($image)->save('uploads/student/' . $ImageName);
           VerificationCenter::where('id', $insert)->update([
               'image' => 'uploads/student/' . $ImageName,
           ]);
        }
         $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
       if($request->image_type==2){
            if($request->hasFile('thumbnail_img')) {

                $photo =$request->file('thumbnail_img');
                $name = time().'.'.$photo->getClientOriginalExtension();
                $newfile =$photo->move(public_path().'/uploads/', $name);
                VerificationCenter::where('id', $insert)->update([
                    'image' => 'updatecore/public/uploads/'.$name,
                ]);
                
            }
             $update=User::where('id',Auth::user()->id)->update([
           
                'verification_update'=>Carbon::now()->toDateTimeString(),
            ]);
       }
       if ($insert) {
           Alert::toast('congratulation ! success', 'success');
           return redirect()->back();
       } else {
           Alert::toast('Something Went Wrong', 'error');
           return redirect()->back();
       }
    }


        public function deleteeducationalInformation($id){
           
            $delete=TutorEducation::where('user_id',Auth::user()->id)->where('id',$id)->delete();
            if ($delete) {
               Alert::toast('Delete', 'success');
               return redirect()->back();
           } else {
               Alert::toast('Something Went Wrong', 'error');
               return redirect()->back();
           }
    
        }


     public function deleteverifications($id){
           
            $delete=VerificationCenter::where('user_id',Auth::user()->id)->where('id',$id)->delete();
            if ($delete) {
               Alert::toast('Delete', 'success');
               return redirect()->back();
           } else {
               Alert::toast('Something Went Wrong', 'error');
               return redirect()->back();
           }
    
        }
        
        
        
         public function cropImg(Request $request){

      $folderPath = 'uploads/student/';
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         // $saveFile = new Picture;
         // $saveFile->name = $imageName;
         // $saveFile->save();

        $insert=VerificationCenter::insertGetId([
           'item_name'=>'Profile Image',
           'user_id'=>Auth::user()->id,
           'date'=>Carbon::now(),
           'image' => 'uploads/student/' . $imageName,
           'created_at'=>Carbon::now()->toDateTimeString(),
       ]);
       $update=User::where('id',Auth::user()->id)->update([
           'photo'=>'uploads/student/' . $imageName,
       ]);
       

    
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    
    
    public function videosection(){
        $maindata=DB::table('tutor_video')->where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.tuitor.videouploads',compact('maindata'));
    }
    
    public function videosectionStore(Request $request){
        
         $validated = $request->validate([
            'video_link' => 'required',
        ]);
        $insert=DB::table('tutor_video')->insert([
            'video_link'=>$request->video_link,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if ($insert) {
            Alert::toast('Uploaded successfully', 'success');
            return redirect()->back();
        } else {
            Alert::toast('Something Went Wrong', 'error');
            return redirect()->back();
        }
        
    }
    // tutor subject create
    public function subjectcreate(){
        return view('frontend.tuitor.addsubject');
    }
    
    public function subjectsubmit(Request $request){
            $subject=$request->subject_id;
            $level=$request->level_id;
            $check=DB::table('selected_tutor_subjects')->where('tutor_id',Auth::user()->id)->where('subject_id',$subject)->first();
           if($check){
               
               return response("ok");
               
           }else{
               $insert=DB::table('selected_tutor_subjects')->insert([
                    'tutor_id' =>Auth::user()->id,
                    'subject_id' =>$subject,
                    'level_id' =>$level,
                 ]);
                 $update=User::where('id',Auth::user()->id)->update([
                     'subject'=>$subject,
                    ]);
               return response("no");
           }
            
    }
    
    public function getallsubject(){
         $alldata=DB::table('selected_tutor_subjects')->where('tutor_id',Auth::user()->id)->get();
         return view('frontend.tuitor.ajax.subjectajax',compact('alldata'));
    }
    
    public function gettutorsubjectdelete($bid){
       
        $delete=DB::table('selected_tutor_subjects')->where('tutor_id',Auth::user()->id)->where('id',$bid)->delete();
         return response("ok");
    }
    
    
    
   public function videoTutorial(){
       $allData=DB::table('video_tutorial')->where('user','TUTOR')->where('is_active',1)->where('is_deleted',0)->orderBy('id','DESC')->get();
       
    $allDataindividual=DB::table('video_tutorial')->where('user','TUTOR')->where('is_active',1)->where('tutor_id',Auth::user()->id)->where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('frontend.tuitor.video-tutorial',compact('allData','allDataindividual'));
    }
    
    public function videoTutorialView($id){
            $view=DB::table('video_tutorial')->where('is_active',1)->where('is_deleted',0)->where('id',$id)->first();
        return view('frontend.tuitor.video-view',compact('view'));
    }
    
    
    
    // 
    
    
    public function video_watchstore(Request $request)
    {
        $existingRecord = DB::table('video_watch')
                ->where('user_id', Auth::id())
                ->where('video_id', $request->video_id)
                ->first();
            
                $myvideo=DB::table('video_tutorial')->where('id', $request->video_id)->first();
            if ($existingRecord) {
                $watchp= $request->watched_time/$request->totalvideolength;
                $watch=$watchp * 100;
                if($watch < 95){
                      $upd=DB::table('video_watch')
                    ->where('id', $existingRecord->id)
                    ->update(['watched_time' => $request->watched_time,'watchpercentage'=>$watch]);
                }else{
                      $upd=DB::table('video_watch')
                    ->where('id', $existingRecord->id)
                    ->update(['watched_time' => $request->watched_time,'watchpercentage'=>$watch,'is_comleted'=>1]);
                    $data = [
                'title' => $myvideo->title,
                'name' => Auth::user()->name,
            ];
                    Mail::to(Auth::user()->email)->send(new TutorVideoCompleted($data));
                Mail::to('info@merittutors.co.uk')->send(new TutorCompletedConfirmation($data));
                }
             
            } else {
                DB::table('video_watch')
                    ->insert([
                        'user_id' => Auth::id(),
                        'video_id' => $request->video_id,
                        'watched_time' => $request->watched_time,
                        'totalvideolength'=>$request->totalvideolength,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
            }
            
            return response()->json([
                'message' => 'Watch time recorded successfully!',
            ]);
        
       


    }
   
   
    // Auth::logout();
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
