<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assesment;
use App\Mail\AssesmentMail;
use Carbon\Carbon;
use Alert;
use Mail;
use Http;

class AssesmentController extends Controller
{
    public function create(){

         $rand_one=rand(0,9);
        $rand_two=rand(0,8);
        $val=$rand_one + $rand_two;

         $SchoolAPI = 'https://merittutors.uk/api/parents/schools';
          $response = Http::get($SchoolAPI);
          $allSchool = $response->json();
         //   year
          $yearAPI = 'https://merittutors.uk/api/parents/year-groups';
          $response = Http::get($yearAPI);
          $allYear = $response->json();
         //   year


          $subjectsAPI = 'https://merittutors.uk/api/parents/subjects';
          $response = Http::get($subjectsAPI);
          $allSubjects = $response->json();
         //   year

          $branchAPI = 'https://merittutors.uk/api/parents/branches';
          $response = Http::get($branchAPI);
          $allBranch = $response->json();
         //   year

         return view('frontend.assesmentfrom.create',compact('allSchool','allYear','allSubjects','allBranch','rand_one','rand_two','val'));

    }

    //
    public function store(Request $request){

            $validatedData = $request->validate([
                'branch' => 'required',
                'parent_name' => 'required',
                'mobile' => 'required',
            ]);
            $insert=Assesment::insertGetId([
                'branch'=>$request->branch,
                'parent_name'=>$request->parent_name,
                'email'=>$request->email,
                'mobile'=>$request->mobile,
                'parent_relation'=>$request->parent_relation,
                'address'=>$request->address,
                'assesment_date_time'=>$request->assesment_date_time,
                'date'=>$request->date,
                'write_details'=>$request->write_details ?? 'null',
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $child_information = array();
            if ($request->has('first_name')) {
                foreach ($request->first_name as $key => $no) {

                    $item['first_name'] = $request->first_name[$key];
                    $item['last_name'] = $request->last_name[$key];
                    $item['subject'] = $request->subject[$key];
                    $item['year'] = $request->year[$key];
                    array_push($child_information, $item);
                }
                $update=Assesment::where('id',$insert)->update([
                    'child_information'=>json_encode($child_information),
                ]);
            }
            if($insert){
                $data=Assesment::where('id',$insert)->select(['id'])->first();
                Mail::to($request->email)->send(new AssesmentMail($data));
                Alert::success('success', 'Thank you for submitting your free assessment request');
                return redirect()->back();
            }else{
                Alert::error('Failed', 'Thank you for submitting your free assessment request');
                return redirect()->back();

            }

    }



     public function testingassesment(){

          $rand_one=rand(0,9);
        $rand_two=rand(0,8);
        $val=$rand_one + $rand_two;

          $SchoolAPI = 'https://merittutors.uk/api/schools';
          $response = Http::get($SchoolAPI);
          $allSchool = $response->json();
         //   year
          $yearAPI = 'https://merittutors.uk/api/year-groups';
          $response = Http::get($yearAPI);
          $allYear = $response->json();
         //   year


          $subjectsAPI = 'https://merittutors.uk/api/subjects';
          $response = Http::get($subjectsAPI);
          $allSubjects = $response->json();
         //   year

          $branchAPI = 'https://merittutors.uk/api/branches';
          $response = Http::get($branchAPI);
          $allBranch = $response->json();
         //   year

        return view('frontend.assesmentfrom.testingassessmetform',compact('allSchool','allYear','allSubjects','allBranch','rand_one','rand_two','val'));
    }

    // public function testingassesmentSubmit(Request $request){


    //     $additionalData = [
    //         'first_name' => $request->input('first_name'),
    //         'last_name' => $request->input('last_name'),
    //         'email' => $request->input('email'),
    //         'phone' => $request->input('phone'),
    //         'postcode' => $request->input('postcode'),
    //         'referral_code' => $request->input('referral_code'),
    //         'address' => $request->input('address'),
    //         'remarks'=>$request->input('remarks') ?? 'NULL',
    //     ];


    //       $students = [];
    //     $index = 0;


    //     while ($request->has("form-{$index}-first_name")) {
    //         $students[] = [
    //             'first_name' => $request->input("form-{$index}-first_name"),
    //             'last_name' => $request->input("form-{$index}-last_name"),
    //             'branch' => $request->input("form-{$index}-branch"),
    //             'school' => $request->input("form-{$index}-school"),
    //             'year_group' => $request->input("form-{$index}-year_group"),
    //             'subjects' => implode(',', $request->input("form-{$index}-subjects", [])),
    //             'assessment_date' => $request->input("form-{$index}-assessment_date"),
    //             'assessment_time' => $request->input("form-{$index}-assessment_time"),
    //         ];
    //         $index++;
    //     }
    //     $sdata=json_encode($students);

    //     $payload = array_merge($additionalData, ['students' => $sdata]);


    //     $response = Http::post('https://merittutors.uk/api/book-assessment', $payload);


    //      if ($response->successful()) {
    //         return redirect()->back()->with('success', 'Assessment booked success!');
    //     } else {

    //         $errorMessages = $response->json('errors', []);


    //         if (empty($errorMessages)) {
    //             $errorMessages = ['Failed to book assessment. Please try again.'];
    //         }


    //         return redirect()->back()->with('errorMessages', $errorMessages);
    //     }
    // }


   public function testingassesmentSubmit(Request $request)
{

    if($request->number == $request->mynumber){
        // Validate request data
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'postcode' => 'required|string|max:20',
            'address' => 'required|string|max:500',


        ]);

        $additionalData = [
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'postcode' => $validatedData['postcode'],
            'address' => $validatedData['address'],

        ];

        $students = [];
        $index = 0;

        // Collect student data dynamically
        while ($request->has("form-{$index}-first_name")) {
            $students[] = [
                'first_name' => $request->input("form-{$index}-first_name"),
                'last_name' => $request->input("form-{$index}-last_name"),
                'branch' => $request->input("form-{$index}-branch"),
                'school' => $request->input("form-{$index}-school"),
                'year_group' => $request->input("form-{$index}-year_group"),
                'subjects' => implode(',', (array) $request->input("form-{$index}-subjects", [])),
                'assessment_date' => $request->input("form-{$index}-assessment_date"),
                'assessment_time' => $request->input("form-{$index}-assessment_time"),
            ];
            $index++;
        }

        $sdata = json_encode($students);
        $payload = array_merge($additionalData, ['students' => $sdata]);

        try {
            // Use a timeout and handle network errors
            $response = Http::timeout(10)->post('https://merittutors.uk/api/parents/book-assessment', $payload);

            if ($response->successful()) {
                // return redirect()->back()->with('success', 'Assessment booked successfully!');
                Alert::success('Success', 'Thank you for booked Assessment with  Merit Tutors. We can confirm that your query has been sent successfully and will be dealt with as soon as possible.');
                return redirect()->back();
            } else {
                // Get error messages or provide a default error message
                $errorMessages = $response->json('errors', ['Failed to book assessment. Please try again.']);
                return redirect()->back()->with('errorMessages', $errorMessages);
            }
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Failed to book assessment', ['exception' => $e]);
            return redirect()->back()->with('errorMessages', ['Failed to book assessment due to a network error. Please try again.']);
        }
     } else{
            Alert::error('Faild', 'Please Enter Valid Number');
                return redirect()->back();
     }
    }
}
