<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\TuitionResource;

class OnlineTuitionController extends Controller
{
  public function __construct(){
      $this->middleware('auth:admin');
  }
  //
  public function index(){
    $allData=TuitionResource::where('is_deleted',0)->orderBy('id','DESC')->get();
    return view('backend.onlinetuitionresources.index',compact('allData'));
  }
  //create
  public function create(){
    $allSubcate=DB::table('video_main_subcategory')->where('cate_id',3)->get();
    return view('backend.onlinetuitionresources.create',compact('allSubcate'));
  }

  //store
  public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'file' => 'required|file|mimes:pdf',
        ]);

        // ✅ Handle File Upload
        $fileName = null;
        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('uploads/tuition_resources'), $fileName);
        }

        // ✅ Insert into database
      $insert=  TuitionResource::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'file' => $fileName,
        ]);

        if ($insert) {
            $notification = array(
                'messege' => 'Uploads success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Uploads Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    //
    public function edit($id){
        $edit=TuitionResource::where('id',$id)->first();
        $allSubcate=DB::table('video_main_subcategory')->where('cate_id',3)->get();
        return view('backend.onlinetuitionresources.update',compact('edit','allSubcate'));
    }

    public function update(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer',
            'file' => 'nullable|file|mimes:pdf',
        ]);

        // ✅ Find record
        $resource = TuitionResource::findOrFail($request->id);

        // ✅ Handle file upload (if new file provided)
        if ($request->hasFile('file')) {
            // Delete old file if exists
            if ($resource->file && file_exists(public_path('uploads/tuition_resources/' . $resource->file))) {
                unlink(public_path('uploads/tuition_resources/' . $resource->file));
            }
            // Upload new file
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('uploads/tuition_resources'), $fileName);
            $resource->file = $fileName;
        }

        // ✅ Update other fields
        $resource->title = $request->title;
        $resource->category_id = $request->category_id;

        // ✅ Save changes
        $update = $resource->save();

        if ($update) {
            $notification = [
                'messege' => 'Update successful!',
                'alert-type' => 'success',
            ];
        } else {
            $notification = [
                'messege' => 'Update failed!',
                'alert-type' => 'error',
            ];
        }

        return redirect()->back()->with($notification);
    }

    public function delete($id)
  {
      // 🔹 Find the record first
      $resource = TuitionResource::find($id);

      if ($resource) {
          // 🔹 Delete file if exists
          if ($resource->file && file_exists(public_path('uploads/tuition_resources/' . $resource->file))) {
              unlink(public_path('uploads/tuition_resources/' . $resource->file));
          }

          // 🔹 Delete record
          $delete = $resource->delete();

          if ($delete) {
              $notification = [
                  'messege' => 'Delete successful!',
                  'alert-type' => 'success',
              ];
          } else {
              $notification = [
                  'messege' => 'Delete failed!',
                  'alert-type' => 'error',
              ];
          }
      } else {
          $notification = [
              'messege' => 'Record not found!',
              'alert-type' => 'error',
          ];
      }

      return redirect()->back()->with($notification);
  }



}
