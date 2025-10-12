<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Color;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Banner;
use App\Models\AboutUs;
use App\Models\Event;
use App\Models\Review;
use App\Models\TutoringSubject;
use App\Models\User;
use App\Models\Gallery;
use App\Models\StudentResult;
use App\Models\SelectedTutorSubject;
use App\Models\AllResourceProduct;
use App\Models\Branch;
use App\Models\ContactMesssage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Mail\ContactMessage;
use App\Mail\SummerSchoolMail;
use Alert;
// use App\Models\Review;
use Mail;
use App\Rules\Captcha;
use ReCaptcha\ReCaptcha;
use DB;
use Http;

class FrontendController extends Controller
{
    public function home(Request $request)
    {
        
        
       $showPopup = !$request->session()->has('popup_shown');
        if ($showPopup) {
            $request->session()->put('popup_shown', true);
        }
      
        $banner=Banner::first();
        $about=AboutUs::where('keyword','about_us')->first();
        $allgallery=Gallery::where('is_deleted',0)->orderBy('id','DESC')->limit(6)->get();
        $allResources=AllResourceProduct::where('is_deleted',0)->where('is_active',1)->get();
        return view('frontend.home.home',compact('banner','about','allgallery','allResources','showPopup'));
    }
    
    public function schoolDetails(Request $request){
        
         $data=DB::table('elevenplus_school')->where('id',$request->id)->first();
         return view('frontend.eleven-plus.ajax',compact('data'));
       
    }
    
    
    
    public function apps(){
        return view('frontend.apps.index');
    }
    
    public function elevenPlusSchoolList(){
        
          return view('frontend.eleven-plus.index');
          
    }
    
    public function getFreeResources(){
         return view('frontend.getfreeresource.index');
    }
    
    public function getFreeResourcesSubmit(Request $request){
        
        $insert=DB::table('free_resource_user')->insertGetId([
             'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$request->phone,
             'number_of_kids'=>$request->number_of_kids,
             'first_language'=>$request->first_language,
             'ethnicity'=>$request->ethnicity,
             'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        
           if($insert){
                Alert::success('Success', 'Thank you for submiting your Information. We will send an pdf via email');
                return redirect()->back();
            }else{
                Alert::error('Faild', 'Message Send Faild');
                return redirect()->back();
            }
        
        
    }

    public function contact()
    {
        $rand_one=rand(0,9);
        $rand_two=rand(0,8);
        $val=$rand_one + $rand_two;
        
        return view('frontend.contact.contact',compact('rand_one','rand_two','val'));
    }
    public function gallary()
    {
        $alldata=Gallery::where('is_deleted',0)->orderBy('id','DESC')->paginate(6);
        return view('frontend.gallary.index',compact('alldata'));
    }

    // 
    public function contactstore(Request $request){
        
        
   if($request->number == $request->mynumber){
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);
            $insert=ContactMesssage::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'subject'=>$request->subject,
                'message'=>$request->message,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);
            
              $message = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' =>$request->subject,
            'messages' =>$request->message,
        ];
            
            if($insert){
               Mail::to("info@merittutors.co.uk")->send(new ContactMessage($message));
                Alert::success('Success', 'Thank you for contacting Merit Tutors. We can confirm that your query has been sent successfully and will be dealt with as soon as possible.');
                return redirect()->back();
            }else{
                Alert::error('Faild', 'Message Send Faild');
                return redirect()->back();
            }
            
        }else{
             Alert::error('Faild', 'Please Enter Valid Number');
                return redirect()->back();
        }
        
     

    }
    // 
    public function blogs(){
        $allblog=Blog::where('is_deleted',0)->orderBy('id','DESC')->paginate(6);
        return view('frontend.blog.allblog',compact('allblog'));
    }
    // blog details
    public function blogsdetails($slug,$id){

        $popularPost=Blog::where('is_deleted',0)->orderBy('id','DESC')->limit(5)->get();
        $data=Blog::where('id',$id)->first();
        $allcategory=Category::where('is_deleted',0)->get();
        return view('frontend.blog.blogdetails',compact('data','allcategory','popularPost'));
    }
    // about page

    public function productData(){
        return User::where('is_deleted',0)->where('is_verified',1)->where('is_tutor_approve',1)->where('user_type',2)->select(['id','for_home_tutor','for_online_tutor','id','name','photo','headline_for_tutor','expected_hourly_rate','subject','gender']);
    }

    public function filter_shop(Request $request){
        
        
        if ($request->tutor_type != null && $request->sortingval != null && $request->gender != null) {
           
            
             $val=$request->tutor_type;
             if($val==["2"]){
                 
                 $products =$this->productData();
                $products = $products->where('for_home_tutor',1)->whereIn('gender',$request->gender);
                  $products = $products->get();
                return view('frontend.tutorfind.ajax.filter', compact('products'));
                
             }else if($val==["1"]){
                  $products =$this->productData();
                
                $products = $products->where('for_online_tutor',1)->whereIn('gender',$request->gender);
                  $products = $products->get();
                return view('frontend.tutorfind.ajax.filter', compact('products'));
             }
           
        }
        
   
         if ($request->tutor_type != null) {
             $val=$request->tutor_type;
             if($val==["2"]){
                 $products =$this->productData();
                
                $products = $products->where('for_home_tutor',1);
                  $products = $products->get();
                return view('frontend.tutorfind.ajax.filter', compact('products'));
             }else if($val==["1"]){
                  $products =$this->productData();
                
                $products = $products->where('for_online_tutor',1);
                  $products = $products->get();
                return view('frontend.tutorfind.ajax.filter', compact('products'));
             }
                
                
           
           
        }
        if ($request->tutor_type != null && $request->sortingval != null) {
           
             
             $val=$request->tutor_type;
             if($val==["2"]){
                 $products =$this->productData();
                
                $products = $products->where('for_home_tutor',1);
                  $products = $products->get();
                return view('frontend.tutorfind.ajax.filter', compact('products'));
             }else if($val==["1"]){
                  $products =$this->productData();
                
                $products = $products->where('for_online_tutor',1);
                  $products = $products->get();
                return view('frontend.tutorfind.ajax.filter', compact('products'));
             }
           
        }
        // 
       
         $products =$this->productData();
          
        if ($request->subject == null && $request->tutor_type == null && $request->gender == null && $request->price == null && $request->sortingval == null) {
            $products = $products;
        }
        
        
        
        
         if ($request->sortingval != null) {
              
           $val=$request->sortingval[0];
          
           
           
            if ($val == 1) {
               
                $products = $products->orderBy('expected_hourly_rate', 'asc');
            } 
            if ($val == 2) {
                
                $products = $products->orderBy('expected_hourly_rate', 'DESC');
            } 
            if ($val == 3) {
               
                $products = $products->orderBy('name', 'asc');
            }
        }
        
        
        
        if ($request->subject != null) {
            
           

            $categoryId=$request->subject;
            $products=$products->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            
            
        }
        
        
          
    
      
        
        
        if ($request->gender != null) {
           
            $products = $products->whereIn('gender',$request->gender);
           
        }
        if ($request->subject != null && $request->tutor_type != null) {

            if($request->tutor_type==1){
                $products = $products->whereRawIn('json_contains(subject, \'["' . $request->subject . '"]\')')->where('for_online_tutor',1);
            }elseif($request->tutor_type==2){
                $products = $products->whereRawIn('json_contains(subject, \'["' . $request->subject . '"]\')')->where('for_home_tutor',1);
            }
           
        }

        if ($request->subject != null && $request->sortingval != null) {



              $categoryId=$request->subject;
          

                if ($request->sortingval == 1) {
                    $products = $products->orderBy('expected_hourly_rate', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
                } elseif ($request->sortingval == 2) {
                    $products = $products->orderBy('expected_hourly_rate', 'DESC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
                } elseif ($request->sortingval == 3) {
                    $products = $products->orderBy('name', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
                }
                
           
           
        }
        if ($request->price != null) {
            $priceVal = implode(',', $request->price);
            if ($priceVal == 1) {
                $products = $products->where('expected_hourly_rate', '>', '9')->where('expected_hourly_rate', '<=', '20');
            } elseif ($priceVal == 2) {
                $products = $products->where('expected_hourly_rate', '>', '20')->where('expected_hourly_rate', '<=', '30');
            } elseif ($priceVal == 3) {
                $products = $products->where('expected_hourly_rate', '>', '30')->where('expected_hourly_rate', '<=', '40');
            } elseif ($priceVal == 4) {
                $products = $products->where('expected_hourly_rate', '>', '40')->where('expected_hourly_rate', '<=', '50');
            }
            elseif ($priceVal == 5) {
                $products = $products->where('expected_hourly_rate', '>', '50')->where('expected_hourly_rate', '<=', '1000');
            }
        }

       


        if ($request->gender != null && $request->subject != null) {
            $categoryId=$request->subject;
            $products = $products->whereIn('gender', $request->gender)->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });

        }
        if ($request->subject && $request->sortingval != null) {
           
            $sortVal = $request->sortingval;

            $categoryId=$request->subject;

            if ($sortVal == 1) {
                $products = $products->orderBy('expected_hourly_rate', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });;
            } elseif ($sortVal == 2) {
                $products = $products->orderBy('expected_hourly_rate', 'DESC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            } elseif ($sortVal == 3) {
                $products = $products->orderBy('name', 'ASC')->with('Selectedtutor')
                ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                    $query->where('subject_id', $categoryId);
                });
            }
        }
        if ($request->subject != null && $request->gender != null && $request->sortingval != null) {
           
            $sortVal = $request->sortingval;
            $categoryId=$request->subject;
            if ($sortVal == 1) {
                $products = $products->whereIn('gender', $request->gender)->orderBy('expected_hourly_rate', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });;;
            } elseif ($sortVal == 2) {
                $products = $products->whereIn('gender', $request->gender)->orderBy('expected_hourly_rate', 'DESC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            } elseif ($sortVal == 3) {
                $products = $products->whereIn('gender', $request->gender)->orderBy('name', 'ASC')->with('Selectedtutor')
            ->whereHas('Selectedtutor', function($query) use ($categoryId)  {
                $query->where('subject_id', $categoryId);
            });
            }
        }


        $products = $products->get();
        return view('frontend.tutorfind.ajax.filter', compact('products'));
   
    }



    public function termsCondition(){
       $data = AboutUs::select(['details', 'id'])->where('keyword', 'terms_condition')->first();
        return view('frontend.termscondition.index',compact('data'));
    }
    // 
    public function faq(){

     return view('frontend.faq.index');
    }
    public function privacyPolicy(){
    $data = AboutUs::select(['details', 'id'])->where('keyword', 'privacy_policy')->first();
     return view('frontend.privacypolicy.index',compact('data'));
    }
    
    public function termsConditionTutors(){
        
         return view('frontend.termscondition.termsandconditiontutor');
    }
    
    
    // 
    
    public function worksformerittutors(){
        return view('frontend.workformerittutors.index');
    }
    
    // 
    
    public function termsConditionhometutoring(){
        return view('frontend.termscondition.termsandconditionhome');
    }
    
    // 
    public function termsConditiononlinetutoring(){
         return view('frontend.termscondition.termsandconditiononline');
    }
    
    // termsConditiononsitetutoring
     public function termsConditiononsitetutoring(){
         return view('frontend.termscondition.termsandconditiononsite');
    }
    
    public function getsubject($level_id){
      
        $data=TutoringSubject::where('level_id',$level_id)->where('is_deleted',0)->where('status',1)->get();
        return response()->json($data);
    }
    
    public function gcsemeritResults(){
        
        $alldata=StudentResult::where('result_type','GCSE')->paginate(15);
        return view('frontend.result.index',compact('alldata'));
        
    }
    
    public function alevelmeritResults(){
        
        $alldata=StudentResult::where('result_type','A Level')->paginate(15);
        return view('frontend.result.alevelindex',compact('alldata'));
        
    }
    
    
    // 11 +
    
    public function elevenPlusApril(){
        return view('frontend.aprilholiday.elevenplusindex');
    }
    
    public function elevenPlusSummer(){
        return view('frontend.summerholidays.index');
    }
    
    public function mockExam(){
        return view('frontend.mockexambooking.create');
    }
    
    public function mockExamStore(Request $request){
        return $request;
    }
    
    
    public function examCentre(){
         return view('frontend.ourexamcentre.index');
    }
    
    public function allresources(){
        $allResources=AllResourceProduct::where('is_deleted',0)->where('is_active',1)->paginate(6);
        return view('frontend.meritresources.index',compact('allResources'));
    }
    
    public function Detailsresources($id,$sku){
        $data=AllResourceProduct::where('id',$id)->where('is_active',1)->first();
        $popularesource=AllResourceProduct::where('is_deleted',0)->where('is_active',1)->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.meritresources.details',compact('data','popularesource'));
    }
    
    public function worksformerittutorstore(Request $request){
        
  
        $insert=DB::table('apply_works')->insertGetId([
            
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'age'=>$request->age,
                'gender'=>$request->gender,
                'position'=>$request->section,
                'subject'=>$request->subject,
                'branch'=>$request->branch,
                'created_at'=>Carbon::now()->toDateTimeString(),
              
                
                
        ]);
        
         $documents_information = array();
            if($request->hasFile('marksheet')){
                
                
                foreach ($request->marksheet as $key => $photo) {
                    
                    $name = time().rand(111,999).'.'.$photo->getClientOriginalExtension();
                    
                    $newfile =$photo->move(public_path().'/uploads/', $name);
                   
                 
                    
                    $itemyes['exam_type'] = $request->exam_type[$key];
                    $itemyes['result'] = $request->result[$key];   
                    $itemyes['marksheet'] = $name;
                    array_push($documents_information, $itemyes);
                   
                
                }
                $update=DB::table('apply_works')->where('id',$insert)->update([
                    'education_information'=>json_encode($documents_information),
                ]);
                
                
            }
        
        if ($request->hasFile('dbs')) {
                $photodbs =$request->file('dbs');
                $name = 'dbs'.time().'.'.$photodbs->getClientOriginalExtension();
                $newfile =$photodbs->move(public_path().'/uploads/career/', $name);
                DB::table('apply_works')->where('id',$insert)->update([
                    'dbs' => 'uploads/career/'.$name,
                ]);
        }
         if ($request->hasFile('cv')) {
                $photocv =$request->file('cv');
                $name = 'cv_'.time().'.'.$photocv->getClientOriginalExtension();
                $newfile =$photocv->move(public_path().'/uploads/career/', $name);
                DB::table('apply_works')->where('id',$insert)->update([
                    'cv' => 'uploads/career/'.$name,
                ]);
        }
        if($request->hasFile('photo_id')) {
       
                    $photos =$request->file('photo_id');
                    $names = 'photo_id'.time().'.'.$photos->getClientOriginalExtension();
                    $newfiles =$photos->move(public_path().'/uploads/career/', $names);
                    DB::table('apply_works')->where('id',$insert)->update([
                        'photo_id' => 'uploads/career/'.$names,
                    ]);
            
        }
        
        
        if($insert){
            return redirect('/apply-success');
            
        }else{
            
            
           
                Alert::error('Faild', 'Faild!Try Again');
                return redirect()->back();
            
            
        }
        
    }
    
    
    public function applysuccess(){
        return view('frontend.workformerittutors.success');
    }
    
    
    
    public function summerMathsCompetition(){
         return view('frontend.mathscompetition.index');
    }
    
    
    public function summerSchoolApplication(){
        $allBranch=Branch::get();
         return view('frontend.summerschoolapplication.create',compact('allBranch'));
    }
    public function summerSchoolApplicationSubmit(Request $request){
       
  
        $request->validate([
            'branch' => ['required', 'integer'],
            'parent_first_name' => ['required', 'string', 'max:50'],
            'parent_last_name' => ['required', 'string', 'max:50'],
            'application_type' => ['required', 'in:SUMMER SCHOOL,REGULAR TERM,WINTER SCHOOL'], // Add other valid types if needed
            'email' => ['required', 'email'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'regex:/^01[3-9]\d{8}$/'], // Validates Bangladeshi phone numbers
            'post_code' => ['required', 'string', 'max:10'],
            'student_first_name' => ['required', 'string', 'max:50'],
            'student_last_name' => ['required', 'string', 'max:50'],
            'additional_information' => ['nullable', 'string', 'max:500'],
        ]);

        $insert=DB::table('summer_school')->insert([
            
            'student_first_name'=>$request->student_first_name,
            'student_last_name'=>$request->student_last_name,

            'post_code'=>$request->post_code,
            'address'=>$request->address,

            'application_type'=>$request->application_type,
            'branch'=>$request->branch,
        
            'additional_information'=>$request->additional_information,
            'parent_name'=>$request->parent_first_name.$request->parent_last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'created_at'=>Carbon::now()->toDateTimeString(),
        
            
        ]);
          if($insert){
              
                // $myfilesarray=array();
          
                // array_push($myfilesarray,'updatecore/public/SummerCampLeaflet.pdf');
                // $details = [
                //     'title' => 'Summer School',
                //     'files' => $myfilesarray
                // ];
         
                // $sendmail=Mail::to($request->email)->send(new SummerSchoolMail($details));
             
                Alert::success('Success', 'Thank you for submitting the summer school form');
                return redirect()->back();
            }else{
                Alert::error('Faild', 'Faild ! Please Try Again');
                return redirect()->back();
            }
    }
    
    
    
    public function quickEnquiry(){
        
        $rand_one=rand(0,9);
        $rand_two=rand(0,8);
        $val=$rand_one + $rand_two;
        $allBranch=Branch::get();
        return view('frontend.quickinquery.index',compact('rand_one','rand_two','val','allBranch'));
    }
    
    
    public function quickEnquirySubmit(Request $request){
        if($request->mynumber==$request->number){
            
      
              $payload = [
                'branch' => $request->input('branch'),
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'student_name' => $request->input('student_name'),
                'second_student_name' => $request->input('second_student_name'),
                'source_of_information' => $request->input('source_of_information'),
                'inquiry_remarks'=> $request->input('inquiry_remarks'),
            ];
            
       
            $response = Http::post('https://merittutors.uk/api/parents/inquiries', $payload);
    
       
             if ($response->successful()) {
                // return redirect()->back()->with('success', 'Inquery booked success!');
                  Alert::success('Success', 'Thank you for submitting Inquery form');
                return redirect()->back();
            } else {
                
                $errorMessages = $response->json('errors', []);
    
                
                if (empty($errorMessages)) {
                    $errorMessages = ['Failed to book assessment. Please try again.'];
                }
    
              
                return redirect()->back()->with('errorMessages', $errorMessages);
            }
        }else{
            Alert::error('Faild', 'Number is Incorrect');
                return redirect()->back();
        }
    }
   
   
   public function venueHire(){
       return view('frontend.venuehire.index');
   }



}
