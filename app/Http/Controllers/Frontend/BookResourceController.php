<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assesment;
use App\Mail\AssesmentMail;
use App\Models\Wallet;
use Carbon\Carbon;
use Alert;
use Mail;
use Http;
use DB;

class BookResourceController extends Controller
{

    public function year1book(){
        return view('frontend.newbookedresource.yearone');
    }
    public function year2book(){
        return view('frontend.newbookedresource.yeartwo');
    }
    public function year3book(){
        return view('frontend.newbookedresource.yearthree');
    }
    public function year4book(){
        return view('frontend.newbookedresource.yearfour');
    }
    public function year5book(){
        return view('frontend.newbookedresource.yearfive');
    }
    public function year6book(){
        return view('frontend.newbookedresource.yearsix');
    }
    public function workbookscheckout($id){
        return view('frontend.newbookedresource.checkout',compact('id'));
    }

    public function checkoutresource(Request $request){


       $validated = $request->validate([
        'name' => 'required',
        'last_name' => 'required',
        'resource_type' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'post_code'=>'required',
        'address'=>'required',
    ]);

    if($request->total_amount !=0){
    $order_id=rand(000000,999999);
    $insert=DB::table('purchasecheckot')->insertGetId([

        'total_amount' => $request->input('total_amount'),
        'order_id' => $order_id,
        'resource_name' => $request->input('resource_name'),
        'name' => $request->input('name'),
        'middle_name' => $request->input('middle_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'address' => $request->input('address'),
        'post_code' => $request->input('post_code'),
        'resource_type' => $request->input('resource_type'),
        'resource_details' => json_encode($request->input('resource_details', [])),
        'payment_method' => $request->input('payment_method'),
        'created_at' => now(),

      ]);


      if($request->resource_type=='combo'){
          DB::table('purchasecheckot')->where('id',$insert)->update([
               'resource_details' =>'',
              ]);
      }else{
            DB::table('purchasecheckot')->where('id',$insert)->update([
              'resource_details' => json_encode($request->input('resource_details', [])),
              ]);
      }

        \Stripe\Stripe::setApiKey("");

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                    [
                        'price_data' => [
                            'currency'     => 'gbp',
                            'product_data' => [
                                'name' =>  "Book Purchase Order Id-".$order_id,
                            ],
                            'unit_amount'  => $request->total_amount*100,

                        ],
                        'quantity'   => 1,
                    ],
            ],
            'mode'        => 'payment',
            'success_url' => url('/purchase-book/'.$order_id.'/'.$request->total_amount.'/success?session_id={CHECKOUT_SESSION_ID}'),
            // 'cancel_url'  => route('checkout'),

        ]);

        return redirect()->away($session->url);
        }else{
             Alert::toast('please select workbook', 'error');
            return redirect()->back();
        }
    }

    public function yearsbooksuccess(Request $request,$order_id,$total_amount){
           DB::table('purchasecheckot')->where('order_id',$order_id)->update([
                'transection_id'=>$request->session_id,
                'is_paid'=>1,
                'payment_method'=>'Card'
             ]);
              $insert=Wallet::insert([
                'order_id'=>$order_id,
                'amount_type'=>'Dabit',
                'amount'=>$total_amount,

                'is_verified'=>1,
                'transection_id'=>$request->session_id,
                'date'=>Carbon::now(),
                'created_at'=>Carbon::now()->toDateTimeString(),
            ]);


             Alert::toast('Payment Success!Please Wait For Confirmation', 'success');
            return redirect('/');

        // return $order_id;
    }
}
