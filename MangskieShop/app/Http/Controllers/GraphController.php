<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use MangskieShop\Http\Controllers\ProductController;


class GraphController extends Controller
{
    //


   	public function totalSalesPerItem(){
   		$items = DB::table('products')->get();

        

        $sales = array();
        foreach($items as $product){
            
          $totalOrder = DB::table('orders')->where(['productId'=>$product->id,'status'=>'Delivered'])->sum('quantity');
          $totalSales = $totalOrder * $product->itemPrice;
           $sales[] = [$product->shortName,$totalSales,$product->id];
        }

        //print_r($sales);
    	return view('graphs/totalSalesPerItem',['sales'=>$sales]);
   	}


   	public function wholeYearSalesPerItem($yr){


   		$items = DB::table('products')->get();

   		$sales = array();

   		foreach($items as $item){
   			$jan = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','1')->sum('quantity');

   			$totalSalesOfJanuary = $jan * $item->itemPrice;


   			$feb = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','2')->sum('quantity');

   			$totalSalesOfFebruary = $feb * $item->itemPrice;



   			$mar = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','3')->sum('quantity');

   			$totalSalesOfMarch = $mar * $item->itemPrice;


   			$apr = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','4')->sum('quantity');

   			$totalSalesOfApril = $apr* $item->itemPrice;



   			$may = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','5')->sum('quantity');

   			$totalSalesOfMay = $may * $item->itemPrice;



   			$jun = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','6')->sum('quantity');

   			$totalSalesOfJune = $jun * $item->itemPrice;


   			$july = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','7')->sum('quantity');

   			$totalSalesOfJuly = $july * $item->itemPrice;


   			$aug = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','8')->sum('quantity');

   			$totalSalesOfAugust = $aug * $item->itemPrice;



   			$sept = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','9')->sum('quantity');

   			$totalSalesOfSeptember= $sept * $item->itemPrice;


   			$oct = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','10')->sum('quantity');

   			$totalSalesOfOctober = $oct * $item->itemPrice;


   			$nov = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','11')->sum('quantity');

   			$totalSalesOfNovember = $nov * $item->itemPrice;


   			$dec = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','12')->sum('quantity');

   			$totalSalesOfDecember = $dec * $item->itemPrice;



   			$sales[] = [$item->shortName,$totalSalesOfJanuary,$totalSalesOfFebruary,$totalSalesOfMarch,$totalSalesOfApril,$totalSalesOfMay,$totalSalesOfJune,$totalSalesOfJuly,$totalSalesOfAugust,$totalSalesOfSeptember,$totalSalesOfOctober,$totalSalesOfNovember,$totalSalesOfDecember];
   		}

   		//print_r($sales);
   		


   		return view('graphs/wholeYearSalesPerItem',['sales'=>$sales,'year'=>$yr]);
   	}



   	public function yearlySales($yr){

   		$items = DB::table('products')->get();

   		$sales = array();

   		foreach($items as $item){
   			$jan = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','1')->sum('quantity');

   			$totalSalesOfJanuary = $jan * $item->itemPrice;


   			$feb = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','2')->sum('quantity');

   			$totalSalesOfFebruary = $feb * $item->itemPrice;



   			$mar = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','3')->sum('quantity');

   			$totalSalesOfMarch = $mar * $item->itemPrice;


   			$apr = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','4')->sum('quantity');

   			$totalSalesOfApril = $apr* $item->itemPrice;



   			$may = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','5')->sum('quantity');

   			$totalSalesOfMay = $may * $item->itemPrice;



   			$jun = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','6')->sum('quantity');

   			$totalSalesOfJune = $jun * $item->itemPrice;


   			$july = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','7')->sum('quantity');

   			$totalSalesOfJuly = $july * $item->itemPrice;


   			$aug = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','8')->sum('quantity');

   			$totalSalesOfAugust = $aug * $item->itemPrice;



   			$sept = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','9')->sum('quantity');

   			$totalSalesOfSeptember= $sept * $item->itemPrice;


   			$oct = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','10')->sum('quantity');

   			$totalSalesOfOctober = $oct * $item->itemPrice;


   			$nov = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','11')->sum('quantity');

   			$totalSalesOfNovember = $nov * $item->itemPrice;


   			$dec = DB::table('orders')->where(['status'=>'Delivered','productId'=>$item->id])->whereYear('created_at',$yr)->whereMonth('created_at','12')->sum('quantity');

   			$totalSalesOfDecember = $dec * $item->itemPrice;



   			$sales[] = [$item->shortName,$totalSalesOfJanuary,$totalSalesOfFebruary,$totalSalesOfMarch,$totalSalesOfApril,$totalSalesOfMay,$totalSalesOfJune,$totalSalesOfJuly,$totalSalesOfAugust,$totalSalesOfSeptember,$totalSalesOfOctober,$totalSalesOfNovember,$totalSalesOfDecember];
   		}


   		foreach($sales as $sale){
   			$jan = $sale[1] + $jan;
   			$feb = $sale[2] + $feb;
   			$mar = $sale[3] + $mar;
   			$apr = $sale[4] + $apr;
   			$may = $sale[5] + $may;
   			$jun = $sale[6] + $jun;
   			$july = $sale[7] + $july;
   			$aug = $sale[8] + $aug;
   			$sept = $sale[9] + $sept;
   			$oct = $sale[10] + $oct;
   			$nov = $sale[11] + $nov;
   			$dec = $sale[12] + $dec;
   		}
   		$monthly[] = [$jan,$feb,$mar,$apr,$may,$jun,$july,$aug,$sept,$oct,$nov,$dec];


   		//print_r($monthly);
   		return view('graphs/yearlySales',['sales'=>$monthly,'year'=>$yr]);
   	}


}
