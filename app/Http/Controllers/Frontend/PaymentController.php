<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe;
use App\Models\Wallet;
use App\Mail\PaymentMail;
use App\Models\BeforeRequestTutor;
use App\Models\StudentTutorRequest;
use Carbon\Carbon;
use Session;
use Alert;
use Auth;
use Mail;
use DB;

class PaymentController extends Controller
{



     public function handlePost(Request $request)
    {
        // \Stripe\Stripe::setApiKey("");
        //
        // $session = \Stripe\Checkout\Session::create([
        //     'line_items'  => [
        //             [
        //                 'price_data' => [
        //                     'currency'     => 'gbp',
        //                     'product_data' => [
        //                         'name' =>  "MeritTutors Booking ID-".$request->order_id,
        //                     ],
        //                     'unit_amount'  => $request->amount*100,
        //                 ],
        //                 'quantity'   => 1,
        //             ],
        //     ],
        //     'mode'        => 'payment',
        //     'success_url' => url('/mybooked/'.$request->order_id.'/'.$request->amount.'/success?session_id={CHECKOUT_SESSION_ID}'),
        //     'cancel_url'  => route('cancel'),
        //
        // ]);
        //
        // return redirect()->away($session->url);
    }



    public function success(Request $request,$order_id,$amount)
    {


            $insert=Wallet::insert([
                'order_id'=>$request->order_id,
                'user_id'=>Auth::user()->id,
                'amount'=>$request->amount,
                'amount_type'=>'Dabit',
                'transection_id'=>$request->session_id,
                'date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            // request submit
            $beforesubmit=BeforeRequestTutor::where('order_id',$request->order_id)->first();

            $insert=StudentTutorRequest::insertGetId([
                'order_id'=>$beforesubmit->order_id,
                'tutor_id'=>$beforesubmit->tutor_id,
                'student_id'=>Auth::user()->id,
                'tutor_for'=>$beforesubmit->tutor_for,
                'subject'=>$beforesubmit->subject,
                'level'=>$beforesubmit->level,
                'lessons_type'=>$beforesubmit->lessons_type,
                'exam_board'=>$beforesubmit->exam_board,
                'pick_date'=>$beforesubmit->pick_date,
                'pick_time'=>$beforesubmit->pick_time,
                'end_date'=>$beforesubmit->end_date,
                'hourly_rate'=>$beforesubmit->hourly_rate,
                'total_hour'=>$beforesubmit->total_hour,
                'intotal_amount'=>$beforesubmit->total_hour * $beforesubmit->hourly_rate,
                'paid_hour'=>$beforesubmit->total_hour,
                'due_hour'=>0,
                'due_amount'=>0,
                'paid_amount'=>$amount,
                'total_amount'=>$amount,
                'discount_amount'=>0,
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $data = StudentTutorRequest::where("id", $insert)->first();
            Mail::to(Auth::user()->email)->send(new PaymentMail($data));
        if($insert){
            Alert::success('Success', 'Payment Success!Please Wait For Confirmation');
            return redirect('/student/tutorrequestlist');
        }else{
            Session::flash('error', 'Faild.');
            return back();
        }

    }


    public function cancel(){
        return redirect('/');
    }

    public function due_amountpaid($order_id){

        $data=StudentTutorRequest::where('order_id',$order_id)->first();
        return view('frontend.student.paiddueamount',compact('data','order_id'));
    }

    public function due_amountpaidsubmit(Request $request,$order_id){

        $validated = $request->validate([
                'hour' => 'required',
        ]);
        $total_amount=$request->hour * $request->tutor_rate;
        if($request->hour > 19 && $request->hour < 50){
            $main_discount=$total_amount * 10/100;
            $amount=$total_amount-$main_discount;

             $stripetoken = $request->input('stripeToken');
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymet=Stripe\Charge::create ([
                "amount" => $amount*100,
                "currency" => "GBP",
                "source" => $stripetoken,
                "description" => "The hour purchase Order ID-".$request->order_id,
                'shipping' => [
                'name' => Auth::user()->name,
                'phone' => Auth::user()->phone,
                'address' => [
                    'line1' =>  Auth::user()->address,
                    'line2' =>  Auth::user()->address_two,
                    'postal_code' =>  Auth::user()->zip,
                    'city' =>  Auth::user()->city,
                    'state' => "State",
                    'country' =>  Auth::user()->country,
                ],
            ],
        ]);
          if($paymet){
            $insert=Wallet::insert([
                'order_id'=>$order_id,
                'user_id'=>Auth::user()->id,
                'amount'=>$request->amount,
                'amount_type'=>'Dabit',
                'transection_id'=>$order_id,
                'date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $requestupdate=DB::table('newpurchase_hour')->insert([
                'order_id'=>$order_id,
                'user_id'=>Auth::user()->id,
                'total_hour'=>$request->hour,
                'discount'=>$main_discount,
                'tutor_rate'=>$request->tutor_rate,
                'amount'=>$total_amount,
                'paid_amount'=>$amount,
                'created_at'=>Carbon::now(),
            ]);
            Alert::success('Success', 'Payment Success!Please Wait For Confirmation');
            return redirect('/student/dashboard');
        }else{
            Session::flash('error', 'Faild.');
            return back();
        }




        }
        elseif($request->hour >49 &&  $request->hour < 1000){
                $main_discount=$total_amount * 15/100;
                $amount=$total_amount-$main_discount;

                $stripetoken = $request->input('stripeToken');
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymet=Stripe\Charge::create ([
                "amount" => $amount*100,
                "currency" => "GBP",
                "source" => $stripetoken,
                "description" => "The hour purchase Order ID-".$request->order_id,
                'shipping' => [
                'name' => Auth::user()->name,
                'phone' => Auth::user()->phone,
                'address' => [
                    'line1' =>  Auth::user()->address,
                    'line2' =>  Auth::user()->address_two,
                    'postal_code' =>  Auth::user()->zip,
                    'city' =>  Auth::user()->city,
                    'state' => "State",
                    'country' =>  Auth::user()->country,
                ],
            ],
        ]);
          if($paymet){
            $insert=Wallet::insert([
                'order_id'=>$order_id,
                'user_id'=>Auth::user()->id,
                'amount'=>$request->amount,
                'amount_type'=>'Dabit',
                'transection_id'=>$order_id,
                'date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $requestupdate=DB::table('newpurchase_hour')->insert([
                'order_id'=>$order_id,
                'user_id'=>Auth::user()->id,
                'total_hour'=>$request->hour,
                'discount'=>$main_discount,
                'tutor_rate'=>$request->tutor_rate,
                'amount'=>$total_amount,
                'paid_amount'=>$amount,
                'created_at'=>Carbon::now(),
            ]);
            Alert::success('Success', 'Payment Success!Please Wait For Confirmation');
            return redirect('/student/dashboard');
        }else{
            Session::flash('error', 'Faild.');
            return back();
        }



        }else{
            $main_discount=0;
            $amount=$total_amount;
            $stripetoken = $request->input('stripeToken');
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $paymet=Stripe\Charge::create ([
                "amount" => $amount*100,
                "currency" => "GBP",
                "source" => $stripetoken,
                "description" => "The hour purchase Order ID-".$request->order_id,
                'shipping' => [
                'name' => Auth::user()->name,
                'phone' => Auth::user()->phone,
                'address' => [
                    'line1' =>  Auth::user()->address,
                    'line2' =>  Auth::user()->address_two,
                    'postal_code' =>  Auth::user()->zip,
                    'city' =>  Auth::user()->city,
                    'state' => "State",
                    'country' =>  Auth::user()->country,
                ],
            ],
        ]);
          if($paymet){
            $insert=Wallet::insert([
                'order_id'=>$order_id,
                'user_id'=>Auth::user()->id,
                'amount'=>$request->amount,
                'amount_type'=>'Dabit',
                'transection_id'=>$order_id,
                'date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);

            $requestupdate=DB::table('newpurchase_hour')->insert([
                'order_id'=>$order_id,
                'user_id'=>Auth::user()->id,
                'total_hour'=>$request->hour,
                'discount'=>$main_discount,
                'tutor_rate'=>$request->tutor_rate,
                'amount'=>$total_amount,
                'paid_amount'=>$amount,
                'created_at'=>Carbon::now(),
            ]);
            Alert::success('Success', 'Payment Success!Please Wait For Confirmation');
            return redirect('/student/dashboard');
        }else{
            Session::flash('error', 'Faild.');
            return back();
        }
        }



    }



}
