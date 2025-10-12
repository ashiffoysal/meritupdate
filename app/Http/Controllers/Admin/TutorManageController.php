<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\UserCreatedMail;
use App\Mail\BdOnlineTutorCreatedMail;
use Mail;
use App\Models\User;
use Hash;
class TutorManageController extends Controller
{
    
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function create(){
        return view("backend.tutormanage.create");
    }
    
     public function store(Request $request){
         
                   // Validation
            $request->validate([
                'name'     => 'required|string|max:255',
                'email'    => 'required|string|email|max:255|unique:users,email',
                'password' => 'required|string|min:6',
                'phone'    => 'required|string|max:20',
                'address'  => 'required|string|max:255',
            ]);
        
            // Create User
            $users = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'phone'    => $request->phone,
                'address'  => $request->address,
                'user_type'=>$request->user_type,
                'is_verified'=>$request->is_verified,
            ]);
            
            if ($request->tutor_type == 'Online Tutor') {
                $users->update([
                    'id_bdonline_tutor' => 1
                ]);
                
                Mail::to($users->email)->send(new BdOnlineTutorCreatedMail($users));
                
            }
            
            if ($request->tutor_type == 'Branch Tutor') {
                $users->update([
                    'for_branch_tutor' => 1
                ]);
                
                Mail::to($users->email)->send(new UserCreatedMail($users));
            }
      
        
        
           
            if ($users) {
            $notification = array(
                'messege' => 'Created success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Created Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
