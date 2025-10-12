<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentTutorRequest;
use App\Models\TutorComplatelesson;
use App\Models\TutorEducation;
use App\Models\Wallet;
use App\Models\AmountWithdrawrequest;
use App\Models\VerificationCenter;
use App\Models\SubmissionReference;
use Carbon\Carbon;
use DB;
use App\Mail\TutorWithdrawPayment;
use Mail;
use App\Mail\AccountLiveMail;
use App\Mail\ReferenceSubmission;

class TuitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function delete($id){
        $data=User::where('id',$id)->update([
            'is_deleted'=>1,
        ]);
        if($data) {
            $notification = array(
                'messege' => 'Delete success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => ' Delete Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function index(){

        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('verification_update', 'desc')->get();
        return view('backend.tutormanage.index',compact('alldata'));

    }

    public function details($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();

        $data=User::where('id',$id)->first();

        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();

        return view('backend.tutormanage.view',compact('data','davitamnout','totalwork','totalwork','davitamnout'));
    }

    public function educationdetails($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $educational_in=TutorEducation::where('user_id',$id)->OrderBy('id','DESC')->get();
        return view('backend.tutormanage.educationinformation',compact('data','educational_in','id','totalwork','davitamnout'));
    }

    public function cvdetails($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $alldata=VerificationCenter::where('user_id',$id)->orderBy('id','DESC')->get();
        return view('backend.tutormanage.tutorcv',compact('data','alldata','totalwork','davitamnout'));
    }

    public function history($id){
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $allwallet=Wallet::where('user_id',$id)->orderBy('id','DESC')->get();
        $alltutorlessoncomplate=TutorComplatelesson::where('tutor_id',$id)->orderBy('id','DESC')->get();

        return view('backend.tutormanage.history',compact('data','allwallet','alltutorlessoncomplate','totalwork','davitamnout'));

    }


    // 
   
    public function approve($id){
        $data=User::where('id',$id)->update([
            'is_tutor_approve'=>1,
        ]);
        if($data) {
            
             $user=User::where('id',$id)->select(['id','name','email'])->first();
            Mail::to($user->email)->send(new AccountLiveMail($user));
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function reject($id){

        $data=User::where('id',$id)->update([
            'is_tutor_approve'=>2,
        ]);
        if($data) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    // 
    public function branchtutor(){
        $alldata=User::where('is_deleted',0)->where('for_branch_tutor',1)->where('user_type',2)->orderBy('id','DESC')->get();
        return view('backend.branchtutor.index',compact('alldata'));
    }

    public function educationdetailsstatus(Request $request){
        $data=TutorEducation::where('id',$request->edu_id)->update([
            'is_verify'=>$request->input('is_vefiried'),
            'more'=>$request->input('query'),
        ]);
        if($data) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function verificationverified(Request $request){
       
        $update=VerificationCenter::where('id',$request->v_id)->update([
            'is_verify'=>$request->input('is_vefiried'),
            'more'=>$request->input('query'),
        ]);
        if($update) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

     public function paymentrequest(){
        $alldata=AmountWithdrawrequest::orderBy('id','DESC')->where('is_deleted',0)->get();
        return view('backend.paymentrequestsend.index',compact('alldata'));
    }
    
   public function paymentrequesthistory($id){
       
         $allpayment=AmountWithdrawrequest::where('tutor_id',$id)->where('is_deleted',0)->orderBy('id','DESC')->get();
         
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');
        
        $creditamnout=Wallet::where('user_id',$id)->where('amount_type','Credit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
        $allwallet=Wallet::where('user_id',$id)->orderBy('id','DESC')->get();
        return view('backend.tutormanage.paymenthistory',compact('data','allpayment','id','totalwork','davitamnout','creditamnout','allwallet'));
        
    }
    
    // 
    public function paymentrequestdelete($id){
        $delete=AmountWithdrawrequest::where('id',$id)->update([
            'is_deleted'=>1,    
        ]);
        if($delete) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
    public function paymentrequestreject($id){
          $delete=AmountWithdrawrequest::where('id',$id)->update([
            'is_paid'=>2,    
        ]);
        if($delete) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        
    }
    // approve page
        
    public function paymentrequestapprove($id,$tutor_id){
        
         $data_id=AmountWithdrawrequest::where('id',$id)->first();
         $user_id=User::where('id',$tutor_id)->first();
         
         
          $allpayment=AmountWithdrawrequest::where('tutor_id',$tutor_id)->where('is_deleted',0)->orderBy('id','DESC')->get();
         
        $davitamnout=Wallet::where('user_id',$tutor_id)->where('amount_type','Dabit')->sum('amount');
        
        $creditamnout=Wallet::where('user_id',$tutor_id)->where('amount_type','Credit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$tutor_id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$tutor_id)->first();
        
         
         return view('backend.tutormanage.payment',compact('data_id','tutor_id','user_id','data','allpayment','totalwork','davitamnout','creditamnout'));
        
    }
    
    
    public function paymentrequststore(Request $request){
         $davitamnout=Wallet::where('user_id',$request->tutor_id)->where('amount_type','Dabit')->sum('amount');
        $creditamnout=Wallet::where('user_id',$request->tutor_id)->where('amount_type','Credit')->sum('amount');
        if($davitamnout - $creditamnout < $request->amount){
             $notification = array(
                'messege' => '!No Enough Amount in This Tutor',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }else{
            
                $validated = $request->validate([
                    'amount' => 'required',
                    'transection_id' => 'required',
                ]);
            $insert=Wallet::insert([
                'order_id'=>$request->requ_id,
                'user_id'=>$request->tutor_id,
                'amount'=>$request->amount,
                'amount_type'=>'Credit',
                'transection_id'=>$request->transection_id,
                'date'=>Carbon::now(),
                'is_verified'=>1,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
             if($insert) {
                
                 $update=AmountWithdrawrequest::where('id',$request->requ_id)->update([
                        'is_paid'=>1,
                        'is_approve'=>1,
                     ]);
                     
                     $user=User::where('id',$request->tutor_id)->first();
                     Mail::to($user->email)->send(new TutorWithdrawPayment($user));
                    $notification = array(
                        'messege' => 'success!',
                        'alert-type' => 'success'
                    );
                    return redirect()->back()->with($notification);
                }else{
                    $notification = array(
                        'messege' => 'Faild!',
                        'alert-type' => 'error'
                    );
                    return redirect()->back()->with($notification);
                }
        }
            
            
    }
    
    
    
// video
    public function videodetails($id){
        
        $educational_in=DB::table('tutor_video')->where('user_id',$id)->orderBy('id','DESC')->get();
        $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');

        $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
        $data=User::where('id',$id)->first();
   
        return view('backend.tutormanage.video',compact('data','educational_in','id','totalwork','davitamnout'));
    }
    
    public function videodetailsstatus(Request $request){
        
        
        $update=DB::table('tutor_video')->where('id',$request->edu_id)->update([
            
            'is_approve'=>$request->input('is_vefiried'),
            'more'=>$request->input('query'),
            
        ]);
        
         if($update) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
       
        
    }
    
    public function verificationupdate(Request $request){
      
        $data=VerificationCenter::where('id',$request->id)->update([
            'is_verify'=>$request->is_vefiried,
            'more'=>$request->more,
        ]);
        return response("ok");
    }
     
    public function educationverifyupdate(Request $request){
      
        $data=TutorEducation::where('id',$request->id)->update([
            'is_verify'=>$request->is_vefiried,
            'more'=>$request->more,
        ]);
        return response("ok");
    }
    // 
    public function approvetutor(){
        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('id','DESC')->where('is_tutor_approve',1)->get();
        return view('backend.tutormanage.approve',compact('alldata'));
    }
    
    public function rejectetutor(){
        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('id','DESC')->where('is_tutor_approve',2)->get();
        return view('backend.tutormanage.reject',compact('alldata'));
    }
    
    public function pendingtutor(){
        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('id','DESC')->where('is_tutor_approve',NULL)->get();
        return view('backend.tutormanage.pending',compact('alldata'));
    }
     public function archivetutor(){
        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('id','DESC')->where('is_archive',1)->get();
        return view('backend.tutormanage.archive',compact('alldata'));
    }
    public function tutorarchive($id){
        $update=User::where('id',$id)->update([
            'is_archive'=>1,
        ]);
         if($update) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
     public function tutorremovearchive($id){
        $update=User::where('id',$id)->update([
            'is_archive'=>0,
        ]);
         if($update) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
    
    public function shortlistedtutor(){
        $alldata=User::where('is_deleted',0)->where('user_type',2)->orderBy('id','DESC')->where('shortlisted',1)->get();
        return view('backend.tutormanage.shortlistedtutor',compact('alldata'));
    }
    
    public function addshortlistedtutor($id){
       
       
        $user=User::where('id',$id)->first();
        if($user->reference_email !=null){
            
                $updatenew=User::where('id',$id)->update([
                    'shortlisted'=>1,
                ]);
            $update=Mail::to($user->reference_email)->send(new ReferenceSubmission($user));
            if($updatenew) {
                $notification = array(
                    'messege' => 'success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }else{
                $notification = array(
                    'messege' => 'Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
            
        }else{
             $notification = array(
                    'messege' => 'Need to added reference!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
        }
        
        
    }
    
    
    public function removeshortlistedtutor($id){
        $updatenew=User::where('id',$id)->update([
                    'shortlisted'=>0,
                ]);
        if($updatenew) {
            $notification = array(
                'messege' => 'success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'messege' => 'Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
    public function referencedetails($id){
         
          $educational_in=DB::table('tutor_video')->where('user_id',$id)->orderBy('id','DESC')->get();
          $davitamnout=Wallet::where('user_id',$id)->where('amount_type','Dabit')->sum('amount');
          $totalwork=StudentTutorRequest::where('tutor_id',$id)->where('is_approve',1)->where('tutor_is_approve',1)->count();
           $data=User::where('id',$id)->first();
           
           $reference=SubmissionReference::where('user_id',$id)->first();
           
           return view('backend.tutormanage.referencedetails',compact('data','educational_in','id','totalwork','davitamnout','reference'));
         
    }
     


}
