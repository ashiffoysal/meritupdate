<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use DB;
use App\Models\User;
use Validator;
use Auth;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function bookPurchaseList(){
        $alldata=DB::table('purchasecheckot')->where('is_deleted',0)->orderby('id','DESC')->where('is_paid',1)->get();
        return view('backend.bookpurchase.index',compact('alldata'));    
    }
    
    
    
    public function bookPurchaseListDetails($id){
        // return $id;
        $data=DB::table('purchasecheckot')->where('id',$id)->first();
        return view('backend.bookpurchase.details',compact('data'));    
    }
    
    public function bookPurchaseListDetailsUpdate(Request $request){
        $update=DB::table('purchasecheckot')->where('id',$request->id)->update([
                'notes'=>$request->notes,
                'status'=>$request->status,
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
    
     public function bookPurchaseListDelete($id){
        // return $id;
        $delete=DB::table('purchasecheckot')->where('id',$id)->update([
                'is_deleted'=>1,
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
    
    
    public function staffVideoCategory(){
        return view('backend.adminWatchVideo.category');
    }
    
    
    public function staffVideoSubCategory($cate_id){
        $category=DB::table('video_main_category')->where('id',$cate_id)->first();
        $allsubcategory=DB::table('video_main_subcategory')->where('cate_id',$cate_id)->get();
        return view('backend.adminWatchVideo.subcategory',compact('allsubcategory','category'));
    }
    
    
    public function staffVideoAll($subcate){
        $subcategory=DB::table('video_main_subcategory')->where('id',$subcate)->first();
         $allData=DB::table('video_tutorial')->where('sub_cate',$subcate)->get();
         return view('backend.adminWatchVideo.allvideo',compact('allData','subcategory'));
    }
    // 
    public function staffVideoRecord(){
        
        
        
        $user = Auth::user();

// Step 2: Decode the user_category JSON field
$userCategories = json_decode($user->user_category, true); // Converts JSON string to an array
// dd($userCategories);
// Step 3: Query the video_tutorial table
$allData = DB::table('video_tutorial')
    ->where('user', 'ADMIN') // Filter for admin videos
    ->where('is_active', 1) // Only active videos
    ->where('is_deleted', 0) // Only non-deleted videos
    ->whereIn('user_category', $userCategories) // Match categories in the decoded array
    ->orderBy('id', 'DESC') // Order by id in descending order
    ->get();
        // $allData=DB::table('video_tutorial')->where('user','ADMIN')->where('is_active',1)->where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.adminWatchVideo.index',compact('allData'));
    }
    // 
    
    public function staffVideoView($id){
        $view=DB::table('video_tutorial')->where('id',$id)->first();
        return view('backend.adminWatchVideo.view',compact('view'));
    }
    // store
    public function staffVideoViewStore(Request $request){
   
        $existingRecord = DB::table('video_watch_admin')
                ->where('user_id', Auth::id())
                ->where('video_id', $request->video_id)
                ->first();
            
            if ($existingRecord) {
                $watchp= $request->watched_time/$request->totalvideolength;
                $watch=$watchp * 100;
                
                $upd=DB::table('video_watch_admin')
                    ->where('id', $existingRecord->id)
                    ->update(['watched_time' => $request->watched_time,'watchpercentage'=>$watch]);
            } else {
                DB::table('video_watch_admin')
                    ->insert([
                        'user_id' => Auth::id(),
                        'video_id' => $request->video_id,
                        'watched_time' => $request->watched_time,
                        'totalvideolength'=>$request->totalvideolength,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
            }
            
            return response()->json([
                'message' => 'Watch time recorded successfully!',
            ]);

    
    }
    
    
    
    public function tutorwatchrecord(){
        $alldata=User::where('is_deleted',0)->where('user_type',2)->where('is_verified',1)->where('for_branch_tutor',1)->OrderBy('id','DESC')->get();
        return view('backend.videowatchrecored.index',compact('alldata'));
    }
    
    // 
    
    public function tutorwatchList($id){
        
         $alldata=DB::table('video_tutorial')->where('user','TUTOR')->where('is_active',1)->where('is_deleted',0)->orderBy('id','DESC')->get();
         $allIndividualdata=DB::table('video_watch')->where('user_id',$id)->orderBy('id','DESC')->get();
         
        //  dd($allIndividualdata);
         return view('backend.videowatchrecored.videowatchlist',compact('alldata','allIndividualdata','id'));
         
    }
    
    
    public function watchrecordforadmin($id){
         $alldata=DB::table('video_tutorial')->where('user','ADMIN')->where('is_active',1)->where('is_deleted',0)->orderBy('id','DESC')->get();
         return view('backend.videowatchrecored.adminvideorecord',compact('alldata','id'));
    }
    // update
    public function update()
    {
        $data = AboutUs::where('keyword', 'about_us')->select(['details', 'id', 'title', 'image'])->first();
        return view('backend.about-us.update', compact('data'));
    }
    // update Store
    public function updateSubmit(Request $request)
    {
        $this->validate($request, [
            'details' => 'required',
        ]);
        $update = AboutUs::where('id', $request->id)->update([
            'title' => $request->title,
            'details' => $request->details,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'About' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/aboutus/' . $ImageName);
            AboutUs::where('id', $update)->update([
                'image' => $ImageName,
            ]);
        }
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

    public function privacyPolicy()
    {
        $data = AboutUs::select(['details', 'id'])->where('keyword', 'privacy_policy')->first();
        return view('backend.about-us.privacy_policy', compact('data'));
    }

    public function termsCondition()
    {
        $data = AboutUs::select(['details', 'id'])->where('keyword', 'terms_condition')->first();
        return view('backend.about-us.terms_conditions', compact('data'));
    }
    
    
    // apply candidate
    public function applycandidate(){
         $alldata = DB::table('apply_works')->where('is_deleted',0)->orderBy('id','DESC')->get();
        return view('backend.workapply.index', compact('alldata'));
    }
    // delete
    public function applycandidateDelete($id){
            $update = DB::table('apply_works')->where('id',$id)->update([
                'is_deleted'=>1,
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
    public function applyCandidateDetails($id){
        $data = DB::table('apply_works')->where('id',$id)->first();
        return view('backend.workapply.details',compact('data'));
    }
    
    // create video
    public function adminVideoCreare(){
        return view('backend.adminvideo.create');
    }
    // store
   public function adminVideoStore(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'category' => 'required|exists:tutoring_subjects,id',
            'user' => 'required|in:ADMIN,TUTOR',
            
            'file' => 'required|file|mimes:mp4,mov,ogg,qt|max:20480', // Max 20MB
        ]);

    
            // Insert data into the database
            DB::table('video_tutorial')->insert([
                'title' => $request->title,
                'main_cate' => $request->maincate,
                'sub_cate' => $request->sub_cate,
                'user' => $request->user,
                'total_time'=>$request->total_time,
                'user_category'=>$request->user_category,
                'tutor_id'=>$request->tutor_id ?? '0',
                'user_id'=>$request->user_id ?? '0',
                'video_path' => $this->uploadFile($request->file('file')), // File upload method
                'created_at' => now(),
                
            ]);

            // Redirect with success message
            return redirect()->route('admin.adminvideo.create')->with('success', 'Video added successfully!');
       
    }

    /**
     * Handles file upload.
     */
    private function uploadFile($file)
    {
        // Define file storage path
        $destinationPath = 'uploads/videotutorial/';
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);

        return $destinationPath . $fileName;
    }
   // 
   public function adminVideoUpdate(Request $request){
       return $request; 
   }
   
    // index
    public function adminVideoIndex(){
        $allData=DB::table('video_tutorial')->orderBy('id','DESC')->get();
        return view('backend.adminvideo.index',compact('allData'));
    }
    
    public function adminVideoEdit($id){
        $edit=DB::table('video_tutorial')->where('id',$id)->first();
        $Main_category=DB::table('video_main_category')->get();
        
        return view('backend.adminvideo.update',compact('edit','Main_category'));
    }
    
    public function adminVideoActive($id){
        $update=DB::table('video_tutorial')->where('id',$id)->update([
            
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
    
    public function adminVideoDeactive($id){
             $update=DB::table('video_tutorial')->where('id',$id)->update([
            
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
    
    
    public function adminVideoDelete($id){
              $update=DB::table('video_tutorial')->where('id',$id)->update([
            
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
    
    public function getSubcate($cate_id){
        
       
        $allsubcate=DB::table('video_main_subcategory')->where('cate_id',$cate_id)->get();
        return response()->json($allsubcate);
    }
    
    public function allCategoryVideo($cate){
        $allsubcategory=DB::table('video_main_subcategory')->where('cate_id',$cate)->get();
          $category=DB::table('video_main_category')->where('id',$cate)->first();
        return view('backend.adminvideo.videcatgory',compact('allsubcategory','category'));
    }
    
    
    public function allSubCategoryVideo($subcate_id){
         $subcategory=DB::table('video_main_subcategory')->where('id',$subcate_id)->first();
         $allData=DB::table('video_tutorial')->where('sub_cate',$subcate_id)->get();
         return view('backend.adminvideo.allvideo',compact('allData','subcategory'));
    }
    
    
}
