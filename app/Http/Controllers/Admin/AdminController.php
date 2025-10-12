<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Admin;
use Carbon\Carbon;
use Alert;
use Hash;

class AdminController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create(){
        $allrole=Role::get();
        return view('backend.adminuser.create',compact('allrole'));
    }

    public function store(Request $request){
               
         $validated = $request->validate([
                'email' => 'required|unique:admins',
                'username' => 'required',
            ]);

         $insert=Admin::insert([
            'first_name'=>$request->name,
            'user_name'=>$request->username,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'email'=>$request->email,
            'address'=>$request->address,

            'password'=>Hash::make($request->password),

            'role'=>$request->role,
            
            'user_category'=>json_encode($request->user_category),

            'assesment'=>$request->assesment,
            'tutor'=>$request->tutor,
            'student_request'=>$request->student_request,
            'student'=>$request->student,
            'receive_payment'=>$request->receive_payment,
            'payment_request'=>$request->payment_request,
            'contact_message'=>$request->contact_message,
            'settings'=>$request->settings,
            'banner'=>$request->banner,
            'terms_and_condition'=>$request->terms_and_condition,
            'gallery'=>$request->gallery,
            'events'=>$request->events,
            'blogs'=>$request->blogs,
            'reviews'=>$request->reviews,
            'fees'=>$request->fees,
            'created_at'=>Carbon::now()->toDateTimeString(),
         ]);

        if ($insert) {
            $notification = array(
                'messege' => 'Insert success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Insert Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }
    public function index(){
        $alldata=Admin::where('is_deleted',0)->where('is_super_admin',0)->get();
        return view('backend.adminuser.index',compact('alldata'));
    }
    public function edit($id){
        $edit=Admin::where('id',$id)->first();
        $allrole=Role::get();
        return view('backend.adminuser.update',compact('edit','allrole'));
    }
    public function delete($id){

        $update=Admin::where('id',$id)->update([
            'is_deleted'=>1,
        ]);
        if ($update) {
            $notification = array(
                'messege' => 'Delete success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Delete Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

    // 
    public function update(Request $request){
        $validated = $request->validate([
                'email' => 'required',
                'username' => 'required',
            ]);

         $insert=Admin::where('id',$request->id)->update([
            'first_name'=>$request->name,
            'user_name'=>$request->username,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'email'=>$request->email,
            'address'=>$request->address,

           'user_category'=>json_encode($request->user_category),

            'role'=>$request->role,

            'assesment'=>$request->assesment,
            'tutor'=>$request->tutor,
            'student_request'=>$request->student_request,
            'student'=>$request->student,
            'receive_payment'=>$request->receive_payment,
            'payment_request'=>$request->payment_request,
            'contact_message'=>$request->contact_message,
            'settings'=>$request->settings,
            'banner'=>$request->banner,
            'terms_and_condition'=>$request->terms_and_condition,
            'gallery'=>$request->gallery,
            'events'=>$request->events,
            'blogs'=>$request->blogs,
            'reviews'=>$request->reviews,
            'fees'=>$request->fees,
            'created_at'=>Carbon::now()->toDateTimeString(),
         ]);

        if ($insert) {
            $notification = array(
                'messege' => 'Update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
