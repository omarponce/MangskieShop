<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class BillingAndShippingController extends Controller
{
    //
    
    public function saveBillingAddress(Request $request){

        $check = DB::table('billing_address')->where('userId',$request->user()->id)->first();
        
        if(!empty($check)){
            DB::table('billing_address')->where('userId',$request->user()->id)
                        ->update(['completeAddress'=>$request->billingCompleteAddress,
                'province'=>$request->billingProvince,
                'citymun'=>$request->billingCitymun,
                'barangay'=>$request->billingBarangay,
                'mobile'=>$request->billingMobile,
            ]);
        }else{
             DB::table('billing_address')->insert([
                'userId'=>$request->user()->id,
                'completeAddress'=>$request->billingCompleteAddress,
                'province'=>$request->billingProvince,
                'citymun'=>$request->billingCitymun,
                'barangay'=>$request->billingBarangay,
                'mobile'=>$request->billingMobile,
            ]);
        }
        

        //echo 'billing address';
    }




    public function saveShippingAddress(Request $request){

        $check = DB::table('shipping_address')->where('userId',$request->user()->id)->first();
        if(!empty($check)){
             DB::table('shipping_address')->where('userId',$request->user()->id)
                ->update([
                'completeAddress'=>$request->shippingCompleteAddress,
                'province'=>$request->shippingProvince,
                'citymun'=>$request->shippingCitymun,
                'barangay'=>$request->shippingBarangay,
                'mobile'=>$request->shippingMobile,
            ]);
        }else{
              DB::table('shipping_address')->insert([
                'userId'=>$request->user()->id,
                'completeAddress'=>$request->shippingCompleteAddress,
                'province'=>$request->shippingProvince,
                'citymun'=>$request->shippingCitymun,
                'barangay'=>$request->shippingBarangay,
                'mobile'=>$request->shippingMobile,
            ]);
        }   
    }

    

}//end of class
