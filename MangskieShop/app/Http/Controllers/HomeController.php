<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home')->with('active_link',$param);
        switch (Auth::user()->role) {
            case 'Client':
            # code...
            return redirect('home/personal_information');
            break;

             case 'Administrator':
            # code...
            return redirect('admin/products');
            break;

             case 'Staff':
            # code...
            return redirect('admin/products');
            break;
        }
       
    }


    public function account_information(){
        return view('user/change_password');
    }


    public function orders(){

         $db = DB::table('orders')->where('userId',Auth::user()->id)->whereIn('status',['Delivered','Shipped','On process'])->orderBy('id','desc')->get();

        $product = DB::table('products')->get();

        $product_image = DB::table('product_image')->get();

        return view('user/orders',['orders'=>$db,'products'=>$product,'product_image'=>$product_image]);
    }




    public function cancellations(){

        $db = DB::table('orders')->where(['userId'=>Auth::user()->id,'status'=>'Cancelled'])->orderBy('id','desc')->get();

        $product = DB::table('products')->get();

        $product_image = DB::table('product_image')->get();

        return view('user/cancellations',['orders'=>$db,'products'=>$product,'product_image'=>$product_image]);

    }





    public function returns(){
        return view('user/returns');
    }


    public function address_book(){
        $billing = DB::table('billing_address')->where('userId',Auth::user()->id)->first();
        $shipping = DB::table('shipping_address')->where('userId',Auth::user()->id)->first();

        $province = DB::table('refprovince')->get();
        $citymun = DB::table('refcitymun')->get();
        $brgy = DB::table('refbrgy')->get();



        return view('user/address_book',['billing'=>$billing,'shipping'=>$shipping,'citymun'=>$citymun,'province'=>$province,'brgy'=>$brgy]);
    }


    public function personal_information(){
        $totalOrder = DB::table('orders')->where('userId',Auth::user()->id)->get();
        //echo count($totalOrder);
        $totalCancellation =  DB::table('orders')->where(['userId'=>Auth::user()->id,'status'=>'Cancelled'])->get();

        //echo count($totalCancellation);


        $totalPending =  DB::table('orders')->where(['userId'=>Auth::user()->id,'status'=>'On process'])->get();


        $billing_address = DB::table('billing_address')->where('userId',Auth::user()->id)->first();

        $shipping_address = DB::table('shipping_address')->where('userId',Auth::user()->id)->first();
        
        return view('user/personal_information',['totalOrder'=>count($totalOrder),'totalCancellation'=>count($totalCancellation),'billing_address'=>$billing_address,'shipping_address'=>$shipping_address,'totalPending'=>count($totalPending)]);
    }


    public function saveshipping(Request $request){

        Validator::make($request->all(),[
            'shippingCompleteAddress'=>'required|string|min:6|',
            'shippingProvince'=>'required|string|min:6|',
            'shippingCitymun'=>'required|string|min:6|',
            'shippingBarangay'=>'required|string|min:6|',
            'shippingMobile'=>'required|max:11|',
        ])->validate();


           
        $BillingAndShippingController = new BillingAndShippingController();
                
        $BillingAndShippingController->saveShippingAddress($request);

        $request->session()->flash('successmsg','Updated Successfully.');
        return redirect('home/address_book');
            

    }


    public function savebilling(Request $request){

        Validator::make($request->all(),[
            'billingCompleteAddress'=>'required|string|min:6|',
            'billingProvince'=>'required|string|min:6|',
            'billingCitymun'=>'required|string|min:6|',
            'billingBarangay'=>'required|string|min:6|',
            'billingMobile'=>'required|max:11|',
        ])->validate();

           
        $BillingAndShippingController = new BillingAndShippingController();
                
        $BillingAndShippingController->saveBillingAddress($request);
        $request->session()->flash('successmsg','Updated Successfully.');

        return redirect('home/address_book');
            


    }





}
