<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerificationCenter;
use Carbon\Carbon;

class StudentManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $alldata=User::where('is_deleted',0)->where('user_type',1)->orderBy('id','DESC')->get();
        return view('backend.studentmanage.index',compact('alldata'));
    }
    public function details($id){
        $data=User::where('id',$id)->first();
        $studentdbs=VerificationCenter::where('user_id',$id)->orderBy('id','DESC')->get();
        return view('backend.studentmanage.view',compact('data','studentdbs'));
    }

    public function detailsverified(Request $request){
       
        $update=VerificationCenter::where('id',$request->v_id)->update([
            'is_verify'=>$request->input('is_vefiried'),
            'more'=>$request->input('query'),
        ]);
        if($update) {
            if($request->input('is_vefiried')==1){
                 $profile=VerificationCenter::where('id',$request->v_id)->first();
                    if($profile->item_name=='Profile Image'){
                        $update=User::where('id',$profile->user_id)->update([
                            'photo'=>$profile->image,
                        ]);
                    }
            }
           
            
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
    
    
    public function delete($id){
        $update=User::where('id',$id)->update([
            'is_deleted'=>1,
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

  
}
