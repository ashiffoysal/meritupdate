<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\AllResourceProduct;
use DB;
use Image;

class MeritResourceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    
     public function create()
    {
        $allCategory=Category::where('is_deleted',0)->where('is_active',1)->get();
        $allLevels=DB::table('subject_levels')->get();
        $allSubCategory=DB::table('subcategories')->get();
        return view('backend.tuitionresources.create',compact('allCategory','allLevels','allSubCategory'));
    }
    
    public function getSubcategory($cate_id){
        
        $data=DB::table('subcategories')->where('category_id',$cate_id)->get();
        return response()->json($data);
        
    }
    
    public function store(Request $request){
       
        $insert=AllResourceProduct::insertGetId([
                'title'=>$request->title,
                'sku'=>$request->sku,
                'price'=>$request->price,
                'category_id'=>$request->category_id,
                'subcategory_id'=>$request->subcategory_id,
                'description'=>$request->description,
                'levels'=>$request->levels,
                'purchase_link'=>$request->purchase_link,
                'tags'=>$request->tags,
        ]);
        
        if ($request->hasFile('pdf')) {
             $extension = $request->pdf->getClientOriginalExtension();
                if($extension =='pdf'){
                     $photo =$request->file('pdf');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/allresource/', $name);
                        AllResourceProduct::where('id',$insert)->update([
                            'pdf' => 'uploads/allresource/'.$name,
                        ]);
                    
                }
            }
            
             
        if ($request->hasFile('image')) {
           
              
                    
                     $photo =$request->file('image');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/allresource/', $name);
                        AllResourceProduct::where('id',$insert)->update([
                            'thumbnail_image' => 'uploads/allresource/'.$name,
                        ]);
              
            }
            
            if ($insert) {
                $notification = array(
                    'messege' => 'Resource Create success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Resource Create Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

    }
    public function index() {
        $alldata=AllResourceProduct::where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.tuitionresources.index',compact('alldata'));
    }
    
    public function active($id){
        $update=AllResourceProduct::where('id',$id)->update([
            'is_active'=>1,    
        ]);
         if ($update) {
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
    
    public function deactive($id){
        $update=AllResourceProduct::where('id',$id)->update([
            'is_active'=>0,    
        ]);
         if ($update) {
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
    
      public function delete($id){
        $update=AllResourceProduct::where('id',$id)->update([
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
    
    
   public function edit($id){
        $data=AllResourceProduct::where('id',$id)->first();
          $allCategory=Category::where('is_deleted',0)->where('is_active',1)->get();
        $allLevels=DB::table('subject_levels')->get();
        
        return view('backend.tuitionresources.update',compact('data','allCategory','allLevels'));

    }
    
    
        public function update(Request $request){
       
        $Update=AllResourceProduct::where('id',$request->id)->update([
                'title'=>$request->title,
                'sku'=>$request->sku,
                'price'=>$request->price,
                'category_id'=>$request->category_id,
                'subcategory_id'=>$request->subcategory_id,
                'description'=>$request->description,
                'levels'=>$request->levels,
                'purchase_link'=>$request->purchase_link,
                'tags'=>$request->tags,
        ]);
        
        if ($request->hasFile('pdf')) {
             $extension = $request->pdf->getClientOriginalExtension();
                if($extension =='pdf'){
                     $photo =$request->file('pdf');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/allresource/', $name);
                        AllResourceProduct::where('id',$request->id)->update([
                            'pdf' => 'uploads/allresource/'.$name,
                        ]);
                    
                }
            }
            
             
        if ($request->hasFile('image')) {
           
              
                    
                     $photo =$request->file('image');
                        $name = time().'.'.$photo->getClientOriginalExtension();
                        $newfile =$photo->move(public_path().'/uploads/allresource/', $name);
                        AllResourceProduct::where('id',$request->id)->update([
                            'thumbnail_image' => 'uploads/allresource/'.$name,
                        ]);
              
            }
            
            if ($Update) {
                $notification = array(
                    'messege' => 'Resource Update success!',
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Resource Update Faild!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }

    }
    
    
}
