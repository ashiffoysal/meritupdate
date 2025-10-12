<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AboutUs;
use App\Models\StudentFee;
use App\Models\User;
use App\Models\Gallery;
use App\Models\TutoringSubject;
use App\Models\TutorEducation;
use App\Models\Studentfeedback;
use App\Models\TutorComplatelesson;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubmissionReference;
use DB;
use Carbon\Carbon;
use Alert;
use Session;

class PagesController extends Controller
{
    public function aboutUs()
    {
        $data = AboutUs::where('keyword', 'about_us')->select(['details', 'id', 'title', 'image'])->first();
        $allfees = StudentFee::where('is_deleted',0)->get();
        $allgallary=Gallery::where('is_deleted',0)->orderBy('id','DESC')->paginate(6);
        return view('frontend.aboutus.index', compact('data','allfees','allgallary'));
    }
    public function termsCondition()
    {
        $data = AboutUs::where('keyword', 'terms_condition')->select(['details', 'id', 'title', 'image'])->first();
        // return $data;
        return view('frontend.termscondition.index', compact('data'));
    }
    public function privancyPolicy()
    {
        $data = AboutUs::where('keyword', 'privacy_policy')->select(['details', 'id', 'title', 'image'])->first();
        //return $data;
        return view('frontend.privacypolicy.index', compact('data'));
    }
    public function paymentPolicy()
    {
        $data = AboutUs::where('keyword', 'payment_policy')->select(['details', 'id', 'title', 'image'])->first();
        //return $data;
        return view('frontend.paymentpolicy.index', compact('data'));
    }

    // admission procedure
    public function admission_procedure(){

        return view('frontend.admissionprocedure.index');

    }

    public function tutorfind(){
        $allteacher=User::where('user_type',2)->where('is_verified',1)->where('is_tutor_approve',1)->orderBy('id','DESC')->paginate(10);
        $allsubject=TutoringSubject::get();
        return view('frontend.tutorfind.index',compact('allsubject','allteacher'));
    }
    // child care
    public function child_care(){
        return view('frontend.childcare.index');
    }

    public function tutordetails($id){
        
        $data=User::where('user_type',2)->where('id',$id)->first();
        
        $alleducation=TutorEducation::where('user_id',$id)->where('is_verify',1)->get();
        $allreview=Studentfeedback::where('tutor_id',$id)->orderBy('id','DESC')->get();
        $reviewcount=Studentfeedback::where('tutor_id',$id)->count();

        $lessoncompleted=TutorComplatelesson::where('tutor_id',$id)->where('is_approve',1)->count();
        return view('frontend.tutorfind.tutordetails',compact('data','alleducation','allreview','reviewcount','lessoncompleted'));
       
    }

    public function tutorfindresult(Request $request){
        $subject=$request->subject;
        $level=$request->level;
        $price=$request->price;
        $gender=$request->gender;
        $tutor_type=$request->tutor_type;

        if($level=="All_Level"){
            if($gender=="All"){
                if($tutor_type=="All_Type"){
                    $data=User::select(['id','subject','name','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                }else{
                    if($tutor_type=='Online_Tutor'){
                        $data=User::select(['id','subject','name','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('for_online_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }else{
                        $data=User::select(['id','subject','name','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('for_home_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }
                }
                // online/offline
            }else{
                if($tutor_type=="All_Type"){
                    $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('gender',$gender)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                }else{
                    if($tutor_type=='Online_Tutor'){
                        $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('gender',$gender)->where('for_online_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }else{
                        $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('gender',$gender)->where('for_home_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }
                }

            }
            // gender
        }else{
            if($gender=="All"){
                if($tutor_type=="All_Type"){
                    $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                }else{
                    if($tutor_type=='Online_Tutor'){
                        $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('for_online_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }else{
                        $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('for_home_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }
                }
                // online/offline
            }else{
                if($tutor_type=="All_Type"){
                    $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('gender',$gender)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                }else{
                    if($tutor_type=='Online_Tutor'){
                        $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('gender',$gender)->where('for_online_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }else{
                        $data=User::select(['id','name','subject','expected_hourly_rate','headline_for_tutor','for_home_tutor','for_online_tutor','photo','current_subject','current_gedree_type','current_university'])->where('gender',$gender)->where('for_home_tutor',1)->whereRaw('json_contains(subject, \'["' . $subject . '"]\')')->get();
                    }
                }

            }
        }
        return view('frontend.tutorfind.ajax.ajaxsearch',compact('data'));

        
    }




    // summer school
    public function summerschool(){
        return view('frontend.summerschool.index');
    }

    // OnSite

    public function onsite(){
        return view('frontend.onsite.index');
    }
// online
     public function online(){
        return view('frontend.online.index');
    }

    // 
    public function hometutoring(){
         return view('frontend.hometutoring.index');
    }


    public function financesupport(){
        return view('frontend.financesupport.index');
    }

// filter by name
    public function filterbyname(Request $request){
        
         $subject_id=$request->subject_id;
         
         $products=DB::table('selected_tutor_subjects')->where('subject_id',$subject_id)->select(['id','tutor_id','subject_id'])->orderBy('id','DESC')->get();
        
         return view('frontend.tutorfind.ajax.filtersubject', compact('products'));
    }
    
    public function newsletterSubmit(Request $request){
    
      $check=DB::table('subscription')->where('email',$request->EMAIL)->first();
      if($check){
             Alert::error('warning!', 'Already Subscrived ');
                return redirect()->back();
      }else{
            $insert=DB::table('subscription')->insert([
                'email'=>$request->EMAIL,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            if ($insert) {
               Alert::success('success', 'Thank you for contacting Merit Tutors.');
                return redirect()->back();
            } else {
                Alert::error('Faild', 'Something Went Wrong');
                return redirect()->back();
            }
        }
    }
    
    public function tutorguidline(){
       
        return view('frontend.guidline.tutor');
        
    }
     public function studentguidline(){
         
        return view('frontend.guidline.student');
        
    }
    
     public function newsletter(){
         
         return view('frontend.newsletter.index');
         
    }
    
    public function referencecheckpage($id,$email){
        $data=User::where('id',$id)->first();
        
        $check=DB::table('submission_references')->where('user_id',$id)->first();
        
        return view('frontend.reference.index',compact('data','check'));
    }
    
    public function referencecheckconfirm(Request $request){
            
            $insert=DB::table('submission_references')->insert([
                'user_id'=>$request->user_id,
                'company'=>$request->company_name,
                'positions'=>$request->positions,
                'start_date'=>$request->start_date,
                'start_month'=>$request->start_month,
                'start_year'=>$request->start_year,
                'end_date'=>$request->end_date,
                'end_month'=>$request->end_month,
                'end_year'=>$request->end_year,
                'Punctuality_and_Attendance'=>$request->Punctuality_and_Attendance,
                'Reliability'=>$request->Reliability,
                'Relationship_with_Colleagues'=>$request->Relationship_with_Colleagues,
                'Overall_Contribution'=>$request->Overall_Contribution,
                
                'Safeguarding_and_Child_Protection'=>$request->Safeguarding_and_Child_Protection,
                'concerns_about_children'=>$request->concerns_about_children,
                're_employ'=>$request->reemploy,
                'accept_status'=>1,
                'created_at'=>Carbon::now()->toDateTimeString(),
                
            ]);
            if ($insert) {
                Session::flash('message', 'Thanks for your contribution!'); 
                return redirect()->back();
            } else {
                Alert::toast('Something Went Wrong', 'error');
                return redirect()->back();
            }
    }
    
     public function referencecheckdecline(Request $request){
         
           $insert=DB::table('submission_references')->insert([
                'user_id'=>$request->user_id,
                'reference_email'=>$request->reference_email,
                'reference_name'=>$request->reference_name,
                'accept_status'=>0,
                'decline_text'=>$request->decline_text,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            if ($insert) {
                Session::flash('message', 'Thanks for your contribution!'); 
                return redirect()->back();
            } else {
                Session::flash('message', 'Some Error!'); 
                return redirect()->back();
            }
            
     }
    
    




}
