<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Wallet;
use App\Models\VerificationCenter;
use App\Models\TutorEducation;

class StudentPaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $alldata=Wallet::where('user_id',Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        $dabit_amount=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Dabit')->sum('amount');
        $credit_amount=Wallet::where('user_id',Auth::user()->id)->where('amount_type','Credit')->sum('amount');
        return view('frontend.student.paymentrequest',compact('alldata','dabit_amount','credit_amount'));
    }

    public function paymentHistory(){
        $alldata=Wallet::where('user_id',Auth::user()->id)->orderBy('id','DESC')->get();
        return view('frontend.student.paymenthistory',compact('alldata'));
    }
    
    public function getverification($id){
        $data=VerificationCenter::where('id',$id)->first();
        return response()->json($data);
    }
    
     public function geteducationiden($id){
         $data=TutorEducation::where('id',$id)->first();
          return response()->json($data);
     }
}
