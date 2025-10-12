<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\StudentResult;
use App\Models\Category;
use Carbon\Carbon;
use Image;
use Auth;

class GalleryControlller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    // create
    public function create()
    {
        $allCategory=Category::where('is_deleted',0)->get();
        return view('backend.gallery.create',compact('allCategory'));
    }
    // store
    public function store(Request $request)
    {
           
      
        $validated = $request->validate([
            'caption' => 'required',
            'image' => 'required',
        ]);
       
        $insert = Gallery::insertGetId([
            'title' => $request->caption,
            'category_id' => $request->category_id,
            'image' => '',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Gallery' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Gallery::where('id', $insert)->update([
                'image' => $ImageName,
            ]);
        }
     
        if ($insert) {
            $notification = array(
                'messege' => 'Insert success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'insert Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // all slider
    public function index()
    {
        $alldata = Gallery::where('is_deleted', 0)->orderBy('id', 'DESC')->get();
        return view('backend.gallery.index', compact('alldata'));
    }
    // edit
    public function edit($id)
    {
        $allCategory=Category::where('is_deleted',0)->get();
        $edit = Gallery::where('id', $id)->first();
        return view('backend.gallery.update', compact('edit','allCategory'));
    }
    // delete
    public function delete($id)
    {
        $delete = Gallery::where('id', $id)->update([
            'is_deleted' => 1,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($delete) {
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


    // active
    public function active($id)
    {
        $delete = Gallery::where('id', $id)->update([
            'status' => 1,
            'updated_by' => Auth::user()->id,

            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($delete) {
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

    public function deactive($id)
    {
        $delete = Gallery::where('id', $id)->update([
            'status' => 0,
            'updated_by' => Auth::user()->id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($delete) {
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
    // update
    public function update(Request $request){
      
    
        
        $validated = $request->validate([
            'caption' => 'required',
            'category_id' => $request->category_id,
        ]);
       
        $insert = Gallery::where('id',$request->id)->update([

            'title' => $request->caption,
            'updated_at' => Carbon::now()->toDateTimeString(),

        ]);
       
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $ImageName = 'Blog' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            Gallery::where('id', $request->id)->update([
                'image' => $ImageName,
            ]);

        }
     
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
    
    public function resultCreate(){
        return view('backend.result.create');
    }
    public function resultStore(Request $request){
      
    
       
       
        $insert = StudentResult::insertGetId([
            'full_name' =>$request->name,
            
            'result_type' =>$request->result_type,
        ]);
       
      
            $subject = array();
        if ($request->has('subject')) {
            foreach ($request->subject as $key => $no) {
                $item['subject'] = $request->subject[$key];
                $item['grade'] = $request->grade[$key];
                array_push($subject, $item);
            }
            $update=StudentResult::where('id',$insert)->update([
                'grade'=>json_encode($subject),
            ]);
        }
          if ($request->hasFile('image')) {

            $image = $request->file('image');
            $ImageName = 'image' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            StudentResult::where('id', $insert)->update([
                'image' => $ImageName,
            ]);

        }
     
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
    public function resultIndex(){
        $alldata=StudentResult::get();
        return view('backend.result.index',compact('alldata'));
    }
    public function resultEdit($id){
        $edit=StudentResult::where('id',$id)->first();
        return view('backend.result.update',compact('edit'));
    }
    
    public function resultUpdate(Request $request){
         
        $validated = $request->validate([
            'name' => 'required',
            
            
        ]);
       
        $insert = StudentResult::where('id',$request->id)->update([
            'full_name' =>$request->name,
            'result_type' =>$request->result_type,
        ]);
        
          $subject = array();
        if ($request->has('subject')) {
            foreach ($request->subject as $key => $no) {
                $item['subject'] = $request->subject[$key];
                $item['grade'] = $request->grade[$key];
                array_push($subject, $item);
            }
            $update=StudentResult::where('id',$request->id)->update([
                'grade'=>json_encode($subject),
            ]);
        }
       
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $ImageName = 'image' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            StudentResult::where('id', $request->id)->update([
                'image' => $ImageName,
            ]);

        }
     
        if ($insert) {
            $notification = array(
                'messege' => 'update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    
    public function  resultDelete($id){
          $insert = StudentResult::where('id',$id)->delete();
          if ($insert) {
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
}
