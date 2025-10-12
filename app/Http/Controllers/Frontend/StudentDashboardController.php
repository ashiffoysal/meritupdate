<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Wallet;
use App\Models\SaveTutor;
use App\Models\TutoringSubject;
use App\Models\TutorComplatelesson;
use App\Models\StudentTutorRequest;
use App\Models\Studentfeedback;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Alert;
use Image;
use DB;

class StudentDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function dashboard(){

        $totalwallet=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Dabit')->sum('amount');
        $totalhire=StudentTutorRequest::where('student_id',Auth::user()->id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $totalhour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('is_approve',1)->sum('total_hour');
        return view('frontend.student.studentdashboard',compact('totalwallet','totalhire','totalhour'));

    }
    public function updatepassword(){

        return view('frontend.student.updatepassword');
        
    }

    // 
    public function updatepasswordStore(Request $request){
        
        $validatedData = $request->validate([
            'current_password' => 'required|min:6',
            'password' => 'required|min:6',
            'password_confirmation' => 'required',
        ]);
        $password = Auth::user()->password;
        $oldpass = $request->current_password;
        $newpass = $request->password;
        $confirm = $request->password_confirmation;
        if (Hash::check($oldpass, $password)) {
            if ($newpass === $confirm) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
               
                Alert::success('Success', 'Success');
                return Redirect()->back();
            } else {
                Alert::error('error', 'Faild ! Please Try Again');
                return Redirect()->back();
            }
        } else {
            Alert::error('error', 'Current Password Is Not Correct');
            return Redirect()->back();
        }
    }

    // 
    public function updateprofile(){

        return view('frontend.student.updateprofile');
        
    }


    public function updateprofileStore(Request $request){
       
        $validatedData = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'school' => 'required',
            'date_of_birth' => 'required',
            'address_line_one' => 'required',
            'postcode' => 'required',
        ]);

        $insert=User::where('id',Auth::user()->id)->update([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'student_year'=>$request->student_year,
            'gender'=>$request->gender,
            'student_school'=>$request->school,
            'date_of_birth'=>$request->date_of_birth,
            'address'=>$request->address_line_one,
            'city'=>$request->city,
            'country'=>$request->country,
            'address_two'=>$request->address_line_two,
            'zip'=>$request->postcode,
            'instruction_to_house'=>$request->instruction_to_house,
            
            'guardian_name'=>$request->guardian_name,
            'guardian_phone'=>$request->guardian_phone,
            'guardian_email'=>$request->guardian_email,
            'guardian_post_code'=>$request->guardian_post_code,
            'guardian_city'=>$request->guardian_city,
            'guardian_relation'=>$request->guardian_relation,
            'guardian_address'=>$request->guardian_address,
        ]);
        if ($request->hasFile('thumbnail_img')) {
            $image = $request->file('thumbnail_img');
            $ImageName = 'Student' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/student/' . $ImageName);
            User::where('id', Auth::user()->id)->update([
                'photo' => 'uploads/student/' . $ImageName,
            ]);
        }
        if ($insert) {
            Alert::toast('Update Success!', 'success');
            return Redirect()->back();
        } else {
            Alert::toast('Faild ! Please Try Again','error');
            return Redirect()->back();
        }
    }
    // 
    public function savetutor(){
        $alldata=SaveTutor::where('student_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.student.savetutor',compact('alldata'));
    }

    // request list
    public function studentrequestlist(){
        $alldata=StudentTutorRequest::where('student_id',Auth::user()->id)->where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('frontend.student.studentrequestlist',compact('alldata'));
    }

    public function studentrequestdelete($id){
        $delete=StudentTutorRequest::where('id',$id)->update([
            'is_deleted'=>1,
        ]);
        if ($delete) {
            Alert::success('Success', 'Success');
            return Redirect()->back();
        } else {
            Alert::error('error', 'Faild ! Please Try Again');
            return Redirect()->back();
        }
    }
    // 
    public function studentrequestupdate($id){
        $allsubject=TutoringSubject::where('is_deleted',0)->get();
        $data=StudentTutorRequest::where('student_id',Auth::user()->id)->where('id',$id)->first();
        return view('frontend.student.requestupdate',compact('data','allsubject'));
    }

    public function studentrequsubmit(Request $request,$id){
        
        $validated = $request->validate([
            
            'time' => 'required',
        ]);
       
        $update=StudentTutorRequest::where('id',$request->id)->update([
         
            'tutor_for'=>$request->tutor_type,
            'subject'=>$request->subject,
            'level'=>$request->level,
            'lessons_type'=>$request->lession_type,
            'exam_board'=>$request->exam_board,
            'pick_time'=>$request->time,
            'pick_date'=>$request->date,
            // 'end_date'=>$request->end_date,
            'updated_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($update){
            Alert::toast('Update Success!', 'success');
            return redirect()->back();
        }else{
            Alert::toast('Faild! Please Try Again!', 'error');
            return redirect()->back();
        }
    }

    // 
    public function lessioncomplate(){
  
        $alldata=TutorComplatelesson::where('student_id',Auth::user()->id)->orderBy('id','DESC')->get();
       
        return view('frontend.student.lessioncomplate',compact('alldata'));
    }
    
    public function tutorHireList(){
        $alldata=StudentTutorRequest::where('student_id',Auth::user()->id)
        ->where('is_deleted',0)
        ->where('is_approve',1)
        ->with(['Student','Tutor'])
        ->orderBy('id','DESC')->get();
        return view('frontend.student.tutorhirelist',compact('alldata'));
    }

    // 
    public function tutorHireview($id){
        $data=StudentTutorRequest::where('student_id',Auth::user()->id)->where('id',$id)->first();
        $alllessonhistory=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$data->id)->paginate(5);

        $totalhourcompleted=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$data->id)->where('is_deletd',0)->where('is_approve',1)->sum('total_hour');

        return view('frontend.student.requestview',compact('data','alllessonhistory','totalhourcompleted'));
    }

    public function lessioncomplateview($id){
        $data=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->orderBy('id','DESC')->first();
        return view('frontend.student.lessoncompetemanage.view',compact('data'));
    }

    // 
    public function lessioncomplatestatusupdate(Request $request){



        // check due payment

        $check=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->where('is_approve',1)->first();
       
        if( $check){
            $update=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->update([
                'student_query'=>$request->input('query'),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]);
            Alert::toast('Already Approve!', 'success');
            return redirect()->back();
        }else{

        $lessondetails=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->first();
        
        $duepayment=StudentTutorRequest::where('id',$lessondetails->course_id)->select(['id','order_id','due_hour','due_amount','total_hour','intotal_amount','total_amount','paid_hour'])->first();
        
        $completed_hour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$lessondetails->course_id)->where('is_approve',1)->sum('total_hour');
        
         $checkhour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->first();
         
        $newpurchase_hour=DB::table('newpurchase_hour')->where('order_id',$duepayment->order_id)->orderBy('id','DESC')->sum('total_hour');
        
        if( $duepayment->paid_hour + $newpurchase_hour >=  $completed_hour + $checkhour->total_hour ){

                $update=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$request->id)->update([
                    'is_approve'=>$request->input('is_approve'),
                    'student_query'=>$request->input('query'),
                    'updated_at'=>Carbon::now()->toDateTimeString(),
                ]);

                if($request->is_approve==1){
                    // for tutor
                    $rand=rand(111,999);
                    $mainhouramount=$request->input('hour_rate') * $request->input('total_hour');
                    $rate = $mainhouramount * 65 / 100;
                    $insertone=Wallet::insert([
                        'user_id'=>$request->input('tutor_id'),
                        'amount'=> $rate,
                        'order_id'=>$request->input('order_id'),
                        'amount_type'=>'Dabit',
                        'is_verified'=> 1,
                        'date'=>Carbon::now()->toDateTimeString(),
                        'created_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                    // for student
                    $inserttwo=Wallet::insert([
                        'user_id'=>Auth::user()->id,
                        'amount'=>$request->input('hour_rate') * $request->input('total_hour'),
                        'order_id'=>$request->input('order_id'),
                        'amount_type'=>'Credit',
                        'is_verified'=> 1,
                        'date'=>Carbon::now()->toDateTimeString(),
                        'created_at'=>Carbon::now()->toDateTimeString(),
                    ]);
                    

                }

                if($update){
                    Alert::toast('Update Success!', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Faild! Please Try Again!', 'error');
                    return redirect()->back();
                }
            }else{
                
                 Alert::toast('please purchace hour!!', 'error');
                return redirect('/student/due_amount/paid/'.$duepayment->order_id);

            }
        }

    }


    public function feedbacksubmit(Request $request){
        $check=Studentfeedback::where('student_id',Auth::user()->id)->where('course_id',$request->course_id)->first();
        if($check){
            Alert::toast('Already You Given FeedBack', 'error');
            return redirect()->back();
        }else{
            $insert=Studentfeedback::insert([
                'star'=>$request->rate,
                'details'=>$request->feedback_details,
                'student_id'=>Auth::user()->id,
                'tutor_id'=>$request->tutor_id,
                'course_id'=>$request->course_id,
                'order_id'=>$request->order_id,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            if($insert){
                Alert::toast(' Success!', 'success');
                return redirect()->back();
            }else{
                Alert::toast('Faild! Please Try Again!', 'error');
                return redirect()->back();
            }
        }

    }

    // lessioncomplateapprove 
    public function lessioncomplateapprove($id){


        // check due payment

        $check=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->where('is_approve',1)->first();
       
        if($check){
            Alert::toast('Already Approve!', 'success');
            return redirect()->back();
        }else{

            $lessondetails=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->first();
           
            
            $duepayment=StudentTutorRequest::where('id',$lessondetails->course_id)->select(['id','order_id','due_hour','due_amount','total_hour','intotal_amount','total_amount','paid_hour'])->first();
            
            $completed_hour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('course_id',$lessondetails->course_id)->where('is_approve',1)->sum('total_hour');
            
                 $checkhour=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->first();
                 
           $newpurchase_hour=DB::table('newpurchase_hour')->where('order_id',$duepayment->order_id)->orderBy('id','DESC')->sum('total_hour');

            if( $duepayment->paid_hour + $newpurchase_hour >=  $completed_hour + $checkhour->total_hour ){
                
                $update=TutorComplatelesson::where('student_id',Auth::user()->id)->where('id',$id)->update([
                    'is_approve'=>1,
                    'updated_at'=>Carbon::now()->toDateTimeString(),
                ]);

                $data=TutorComplatelesson::where('student_id',Auth::user()->id)->with('Course')->where('id',$id)->first();
                $course=StudentTutorRequest::where('id',$data->course_id)->select(['hourly_rate'])->first();
            
                // for tutor
                $rand=rand(111,999);
                $mainhouramount= $course->hourly_rate * $lessondetails->total_hour;
                
                $rate = $mainhouramount * 65 / 100;
               
                $insertone=Wallet::insert([
                    'user_id'=>$data->tutor_id,
                    'amount'=> $rate,
                    'order_id'=>$data->Course->order_id,
                    'amount_type'=>'Dabit',
                    'is_verified'=> 1,
                    'transection_id'=>$lessondetails->id.'-'.$lessondetails->total_hour,
                    'date'=>Carbon::now()->toDateTimeString(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);
                // for student
                $inserttwo=Wallet::insert([
                    'user_id'=>Auth::user()->id,
                    'amount'=> $course->hourly_rate * $lessondetails->total_hour,
                    'order_id'=>$data->Course->order_id,
                    'amount_type'=>'Credit',
                    'is_verified'=> 1,
                    'transection_id'=>$lessondetails->id.'-'.$lessondetails->total_hour,
                    'date'=>Carbon::now()->toDateTimeString(),
                    'created_at'=>Carbon::now()->toDateTimeString(),
                ]);

                if($update){
                    Alert::toast('Update Success!', 'success');
                    return redirect()->back();
                }else{
                    Alert::toast('Faild! Please Try Again!', 'error');
                    return redirect()->back();
                }
            }else{

                Alert::toast('please purchace hour!!', 'error');
                return redirect('/student/due_amount/paid/'.$duepayment->order_id);
            }



            
        }
    }

    public function lessioncomplatereject($id){

        $update=TutorComplatelesson::where('id',$id)->update([
            'is_approve'=>2,
        ]);

        if($update){
            Alert::toast(' Success!', 'success');
            return redirect()->back();
        }else{
            Alert::toast('Faild! Please Try Again!', 'error');
            return redirect()->back();
        }
    }


}
