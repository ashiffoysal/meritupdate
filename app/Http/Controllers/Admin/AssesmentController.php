<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assesment;
use DB;

class AssesmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $alldata=Assesment::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.assesmentlist.index',compact('alldata'));
    }

    // 
    public function details($id){
        $data=Assesment::where('id',$id)->first();
        $update=Assesment::where('id',$id)->update([
            'is_seen'=>1,
            ]);
        return view('backend.assesmentlist.view',compact('data'));
    }
       public function delete($id){
       
        $update=Assesment::where('id',$id)->update([
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
    
    
    public function summerSchoolProgram(){
        $alldata=DB::table('summer_school')->where('application_type','SUMMER SCHOOL')->orderBy('id','DESC')->get();
        return view('backend.summerschool.summerschoollist',compact('alldata'));
    }
    public function summerMathscompetition(){
            $alldata=DB::table('summer_school')->where('application_type','MATHS COMPETITION')->orderBy('id','DESC')->get();
           return view('backend.summerschool.mathscompetitionlist',compact('alldata'));
    }
}
