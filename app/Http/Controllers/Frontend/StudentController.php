<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Mail\CustomerRegister;
use Alert;
use Mail;

class StudentController extends Controller
{


    public function registertype(){

        return view('frontend.registertype.registertype');

    }
    // 
    public function singup(){

        return view('frontend.student.register');
    }

    public function singupstore(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email'=> 'required|email|unique:users',     
            'password' => 'required',
            'confirm_password' => 'required|same:password' 
        ]);
        $insert=User::insertGetId([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'user_type'=>1,
            'created_at'=>Carbon::now()->toDateTimeString(),
            'password'=>Hash::make($request->password),
        ]);

       if($insert){

            $email = md5($request->email);
            $code = random_int(100000, 999999);
    
            User::where('id', $insert)->update([
                'code' => $code,
            ]);

            Alert::toast('Please Check Your Email and verify Your Account', 'success');
            Mail::to($request->email)->send(new CustomerRegister($code));
    
            return redirect('/email/verify/' . $email . '/' . $insert);
           
        }else{
            Alert::toast('Faild', 'Message Send Faild');
            return redirect()->back();
        }
    }
    // 
  
}
