<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Redirect;

use MangskieShop\Http\Controllers\BillingAndShippingController;
use MangskieShop\Http\Controllers\OrderController;


class CartController extends Controller
{
    //

    public function index(Request $request){

    	//$request->session()->forget('shoppingCart');
    	//print_r($request->session()->get('shoppingCart'));

    	//$request->session()->forget('shoppingCart');

    	$item = array();
    	$item2 = array();

    	if ($request->session()->exists('shoppingCart')) {
    		# code...
    		foreach($request->session()->get('shoppingCart') as $cart){
    			$product = DB::table('products')->where('id',$cart)->get()->first();

       			$image = DB::table('product_image')->where('productId',$cart)->get()->first();
       			//print_r($image);


       			$item = ['id'=>$product->id,
       			'itemName'=>$product->itemName,
       			'itemPrice'=>$product->itemPrice,
       			'description'=>$product->description,
       			'picture'=>$image->productPicture];


       			$item2[$product->id] =$item;
    		}
    	}

        return view('checkout/cart',['item'=>$item2,]);
    }


    public function add_to_cart(Request $request){
    	$request->session()->push('shoppingCart',$request->id);

		//print_r($request->session()->all());

		echo '<div><span class="close" onclick="closeModal();">X</span></div>';
		echo '<div style="clear:both;"></div><br/>';
		echo '<h2 style="color:black;margin-left:10px;">Added successfully. <a href="'.url('/cart').'">view cart</a>?</h2><br/>';
    }



    public function remove(Request $request){


    	$messages = $request->session()->get('shoppingCart');
    	$newArray = array();

    	foreach ($messages as $msg){
    		if($msg == $request->id){
    			
    		}else{
    			$newArray[] = $msg;
    		}
    	}

    	$request->session()->forget('shoppingCart');
    	$request->session()->put('shoppingCart',$newArray);

    	//print_r($request->session()->get('shoppingCart'));

    }



    public function checkout(Request $request){

        if(Auth::check()){
            
        }else{
           return redirect('login');
        }


        $billingAddress = DB::table('billing_address')->where(['userId'=>Auth::user()->id])->first();
        $shippingAddress = DB::table('shipping_address')->where(['userId'=>Auth::user()->id])->first();


        $province = DB::table('refprovince')->get();

        $city = DB::table('refcitymun')->get();

        $brgy = DB::table('refbrgy')->get();

        $prodItem = '';

    	$totalPrice = 0;
    	$item ='';
    	if($request->item){
    		if($request->item !== ''){
                $prodItem = $request->item;
    			foreach($request->item as $items){
    				$item = $request->item;

    				$item = explode('&', $items);
    				
    				$totalPrice +=  $item[0] * $item[1];

    			}
    		}
    	}
	
		$subtotal =  $totalPrice;
		//echo "<br/>";

		$tax =  $totalPrice * .12;
		//echo "<br/>";

		$totalPrice = $totalPrice + ($totalPrice * .12);
    	return view('checkout/index',['subTotal'=>$subtotal,'tax'=>$tax,'totalPrice'=>$totalPrice,'item'=>$item,'province'=>$province,'citymun'=>$city,'brgy'=>$brgy,'product'=>$prodItem,'billing'=>$billingAddress,'shipping'=>$shippingAddress]);
    
        

    }




    public function order(Request $request){
        
       
    }

    public function checkOrder(Request $request){
    
        $validate = Validator::make($request->all(),[
            'shippingCompleteAddress'=>'required|string|min:6|',
            'shippingProvince'=>'required|string|min:6|',
            'shippingCitymun'=>'required|string|min:6|',
            'shippingBarangay'=>'required|string|min:6|',
            'shippingMobile'=>'required|max:11|',
        ]);

        if(count($validate->errors()->all()) >0){
            echo $validate->errors()->first();
        }else{
            $validate  = Validator::make($request->all(),[
            'billingCompleteAddress'=>'required|string|min:6|',
            'billingProvince'=>'required|string|min:6|',
            'billingCitymun'=>'required|string|min:6|',
            'billingBarangay'=>'required|string|min:6|',
            'billingMobile'=>'required|max:11|',
        ]);

            if(count($validate->errors()->all()) >0){
                echo $validate->errors()->first();
            }else{
                $BillingAndShippingController = new BillingAndShippingController();
                $OrderController = new OrderController();

                $BillingAndShippingController->saveBillingAddress($request);
                $BillingAndShippingController->saveShippingAddress($request);

                //$this->receipt($request);

                $id = $OrderController->putOrder($request);

                $request->session()->forget('lastOrder');
                
                $request->session()->put('lastOrder',$id);

                $request->session()->forget('shoppingCart');
                echo 'ok';

                //redirect('receipt')->with([$request]);
            }

        }

    }



    public function receipt(){


        //print_r(session('lastOrder'));

        $id = "";
        $subTotal = "";

        if(is_array(session('lastOrder')) && count(session('lastOrder')) > 1){
            $id = session('lastOrder');
        }else{
            $id = session('lastOrder')[0];
        }

        

        
        if(is_array($id) && count($id) > 1){
            $orders = DB::table('orders')->whereIn('id',$id)->get(); 
        }else{
             $orders = DB::table('orders')->where(['id'=>$id])->get(); 
        }   
        
        //print_r($orders);


        $billing = DB::table('billing_address')->where(['userId'=>Auth::user()->id])->first();
        $shipping = DB::table('shipping_address')->where(['userId'=>Auth::user()->id])->first();
        $product = DB::table('products')->get();

        return view('receipt',['orders'=>$orders,'billing'=>$billing,'shipping'=>$shipping,'products'=>$product]);
        
    
    }





}

