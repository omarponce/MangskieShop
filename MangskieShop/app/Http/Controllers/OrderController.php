<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use MangskieShop\Order;

class OrderController extends Controller
{
    //

    

    public function putOrder(Request $request){

    	$ids=array();

    	$db = DB::table('orders');


    	$from=Date('Y-m-d', strtotime("+5 days"));
		$to=Date('Y-m-d', strtotime("+10 days"));

		if(is_array($request->idQuantity)){
			foreach($request->idQuantity as $prod){

				$explode = explode('&', $prod);

				$item = DB::table('products')->where('id',$explode[2])->first();
				
				//echo $item->quantity.'<br/>';

				//echo $item->quantity;
				$itemLeft = $item->quantity - $explode[1];

				DB::table('products')->where('id',$explode[2])->update(['quantity'=>$itemLeft]);

				//echo $itemLeft.'<br/>';


				$id = DB::table('orders')->insertGetId([
		    		'userId'=>$request->user()->id,
		    		'productId'=>$explode[2],
		    		'quantity'=>$explode[1],
		    		'status'=>'On process',
		    		'deliveryDateFrom'=>$from,
		    		'deliveryDateTo'=>$to,
		    	]);

				//echo $id;
		    	$ids[]= $id;
				
			}
		}

		return $ids;
    	
    }


    public function cancelOrder($id){
    	DB::table('orders')->where('id',$id)->update(['status'=>'Cancelled']);

    	return redirect('home/orders');

    }



}
