<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use MangskieShop\Http\Controllers\ProductController;


use MangskieShop\Http\Controllers\AprioriController;



class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
       
    	return view('admin/index');
    }


    public function orders(){ 

        $db = DB::table('orders')->orderBy('id','desc')->paginate(15);

        $product = DB::table('products')->get();
    	return view('admin/orders',['orders'=>$db,'products'=>$product]);
    }



    public function buyer($id){
        $order = DB::table('orders')->where(['id'=>$id])->get();

        $user = DB::table('users')->where(['id'=>$order[0]->userId])->get();

        $billing = DB::table('billing_address')->where(['userId'=>$order[0]->userId])->get();
    
        $shipping = DB::table('shipping_address')->where(['userId'=>$order[0]->userId])->get();

        if(count($user) >0 ){
            echo '<h4>Name: '.$user[0]->surname.','.$user[0]->firstName.' '.$user[0]->middleName.'</h4>';  
            echo '<br/><br/>';
        }

        if(count($billing) > 0){
            echo '<h4>Billing Address</h4>';
            echo '<br/>';
            echo $billing[0]->completeAddress;
            echo '<br/>';
            echo $billing[0]->barangay.' '.$billing[0]->citymun.' '.$billing[0]->province;
             echo '<br/><br/>';
        }

        if(count($shipping) > 0){
            echo '<h4>Shipping Address</h4>';
            echo '<br/>';
            echo $shipping[0]->completeAddress;
            echo '<br/>';
            echo $shipping[0]->barangay.' '.$shipping[0]->citymun.' '.$shipping[0]->province;
        }


    }


    public function updateOrderStatus(Request $request){

        DB::table('orders')->where('id',$request->id)->update(['status'=>$request->status]);

        return redirect('admin/orders');

    }



    public function cancellations(){

        /*$db = DB::table('orders')->where(['status'=>'Cancelled'])->orderBy('id','desc')->get();

        $product = DB::table('products')->get();

        $product_image = DB::table('product_image')->get();

    	return view('admin/cancellations',['orders'=>$db,'products'=>$product,'product_image'=>$product_image]);*/

         $db = DB::table('orders')->where('status','Cancelled')->orderBy('id','desc')->paginate(15);

        $product = DB::table('products')->get();
        return view('admin/cancellations',['orders'=>$db,'products'=>$product]);
    }



    public function returns(){
    	return view('admin/returns');
    }

    public function reports(){
        /*$items = DB::table('products')->get();

        

        $sales = array();
        foreach($items as $product){
            
          $totalOrder = DB::table('orders')->where(['productId'=>$product->id,'status'=>'Delivered'])->sum('quantity');
          $totalSales = $totalOrder * $product->itemPrice;
           $sales[] = [$product->shortName,$totalSales,$product->id];
        }*/

        //print_r($sales);
    	return view('admin/reports');
    }

    public function products(){
     $products = new ProductController;

     $image = $products->list()['image'];

     $products = $products->list()['list'];
     

     return view('admin/products')->with(['products'=>$products,'image'=>$image]);
    }

    public function forecast(){

    	return view('admin/forecast');
    }

    public function itemSet($arr){
        //print_r($arr);

        $combination = 3;

        
        $offsetAndGet = array();
        $unique = array();


        //kuhanin yung item iloop sa dami ng bilang ng item for example iloop ng 6 times bawat item

        //using array_splice kumuha ng items na idadagdag sa itemSet


        for($i = 0; $i < count($arr); $i++){

            for($a = 0; $a < count($arr); $a++){
                echo $arr[$i];
                $array = $arr;
                echo $i.' | '.$a;
                print_r(array_splice($array,$i+1,$a));
                echo '<br/>';
            }
        }


/*

            
        $x = 0;
        while ( $x < count($arr)) {
            for($c = 1; $c <= $combination; $c++){
                $offsetAndGet[]=['offset'=>$x,'get'=>$c];
            }
            $x++;
        }

        echo 'ALL POSIBLE COMBINATIONS<br/><br/>';
        sort($arr);
        foreach($offsetAndGet as $og){
            $array = $arr;
            $comb = array_splice($array, $og['offset'],$og['get']);
            sort($comb);
            $unique[] = $comb;
            //print_r($comb);
            //echo '<br/>';
        }
        //sort($arr);

        rsort($arr);

        //  print_r($arr);
        foreach($offsetAndGet as $og){
            $array = $arr;
            $comb = array_splice($array, $og['offset'],$og['get']);
            rsort($comb);
            $unique[] = $comb;
            // print_r($comb);
            //echo '<br/>';
        }

        //print_r(array_splice($arr, 0,4));


        $unique = array_unique($unique, SORT_REGULAR);

        for($i = 0; $i < count($unique); $i++){
            if(isset($unique[$i][0]) && $unique[$i][0] !== ""){
                echo $unique[$i][0];
            }

            if(isset($unique[$i][1]) && $unique[$i][1] !== ""){
                echo ' || '.$unique[$i][1];
            }

            if(isset($unique[$i][2]) && $unique[$i][2] !== ""){
                echo ' || '.$unique[$i][2];
            }

            if(isset($unique[$i][3]) && $unique[$i][3] !== ""){
                echo ' || '.$unique[$i][3];
            }
            
            echo'<br/>';
        }

*/





       


/*


        for($i = 0; $i < count($arr); $i++){


            echo $arr[$i];
            for ($c=1; $c < $combination; $c++) {  //to get number combination
                # code...
                if(isset($arr[$c])){
                   echo $arr[$c]; 
                }
                
            }
            echo '<br/>';

        }
*/

    



    }

    public function apriori(){

        $array = array('Alpha','Beta','Gamma','Sigma');

        $this->itemSet($array);


        /*
        $min_support = 2;

         $array = [['I1','I2','I5'],
            ['I2','I4'],
            ['I2','I3'],
            ['I1','I2','I4'],
            ['I1','I3'],
            ['I2','I3'],
            ['I1','I3'],
            ['I1','I2','I3','I5'],
            ['I1','I2','I3']];


        $productSet = ['I1','I2','I3','I4','I5'];


         
        $newArray = array();

            for($i = 0; $i < count($array); $i++){
                $newArray[] = [array_count_values($array[$i])];
            }

            

            $sup = array();
            for($p = 0; $p < count($productSet); $p++){
            $sum = 0;
                foreach($newArray as $item) {
                    foreach($item as $product){
                        if(isset($product[$productSet[$p]])){
                            $sum = $product[$productSet[$p]] + $sum;
                        }
                        
                    }

                }

                $sup[] = [$productSet[$p]=>$sum,];

            }*/

            //print_r($sup);
            




            /*
            $arrayList = array();

            for ($i=0; $i < count($productSet); $i++) { 
                # code...

                for ($k=0; $k < count($productSet); $k++) { 
                    # code...

                    if(isset($productSet[$k+1]) && $productSet[$i] !== $productSet[$k+1]){

                        $arr = [$productSet[$i],$productSet[$k+1]];

                        sort($arr);

                        $arrayList[] = [$arr];

                        //print_r($arr);
                        //echo '<br/>';
                    }
                }
            }*/

            //print_r($arrayList);

            //$arr = array_unique($arrayList, SORT_REGULAR);

            //print_r($arr);

            /*foreach($arr as $array){
                echo $array[0][0].','.$array[0][1];
                echo "<br/>";
            }*/

            //$countSupport  = array_sum($array);

            //print_r($countSupport);



        /*$colname = ['css','html'];
        $query = DB::table('sets')
         ->whereRaw('FIND_IN_SET(?,sets)', [$colname])
         ->get();

        foreach($query as $que){
            echo $que->sets.'<br/>';
        }*/


    //	return view('admin/apriori');
    }

    public function accounts(){

        $user = DB::table('users')->paginate(10);
    	return view('admin/accounts',['users'=>$user]);
    }








}
