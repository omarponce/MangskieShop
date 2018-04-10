<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use MangskieShop\Http\Controllers;

class ProductController extends Controller
{
    //

    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function index(){

        $featured = DB::table('products')->inRandomOrder()->limit(3)->get();

        return view('products/index',['products'=>$this->list(),'featured'=>$featured]);
    }


    public function details($id){
        $product = DB::table('products')->where('id',$id)->get()->first();

        $image = DB::table('product_image')->where('productId',$id)->get()->first();

        $status = "asdasd";

        if(session('shoppingCart')){
            if(in_array($id, session('shoppingCart'))){
                $status = "added";
            }
        }

        echo $status;
       // return view('products/detail',['product'=>$product,'image'=>$image,'status'=>$status]);
    }


    public function new(){
    	return view('products/new');
    }




    public function product_detail($id){
        //print_r($id);
        $product = DB::table('products')->where('id',$id)->get()->first();

        $image = DB::table('product_image')->where('productId',$id)->get()->first();

         $status = "asdasd";

        if(session('shoppingCart')){
            if(in_array($id, session('shoppingCart'))){
                $status = "added";
            }
        }

       // echo $status;
        
        return view('products/product-detail',['product'=>$product,'image'=>$image,'status'=>$status]);
    }






    public function edit($id){
    	$product = DB::table('products')->where('id',$id)->get()->first();

    	$image = DB::table('product_image')->where('productId',$id)->get()->first();


    	return view('products/edit',['product'=>$product,'image'=>$image]);
    }


    public function delete($id){
    	# code...
    	DB::table('products')->where('id',$id)->delete();
    	$image = DB::table('product_image');


    	$file = $image->where('productId',$id)
    					->get()->first();

    			$image->where('productId',$id)->delete();
    	if($file->productPicture){
    		if(file_exists(public_path().'/images/'.$file->productPicture)){
    			unlink(public_path().'/images/'.$file->productPicture);
    		}
    	}

    	echo 'Deleted successfully!';
    	
    }




    public function search($q)
    {
    	# code...
    	$list = DB::table('products')->where(['itemName'=>$q])->orderBy('id','desc')->paginate(5);

    	$list_image = DB::table('product_image')->get();


    	return ['list'=>$list,'image'=>$list_image];
    }


    public function list(){
    	$list = DB::table('products')->orderBy('id','desc')->paginate(15);

    	$list_image = DB::table('product_image')->get();


    	return ['list'=>$list,'image'=>$list_image];
    }

    public function save(Request $request){
    	$validate = Validator::make($request->all(), [
            'itemName' => 'required|string|max:255|min:1|max:255',
            'description' => 'required|string|max:255|min:1|max:255',
            'shortName' => 'required|string|max:10|min:3|max:255',
            'quantity' => 'required|string|max:255|min:1|max:255',
            'itemPrice' => 'required|string|min:1|max:255',
            'itemPicture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


    	//print_r($validate->errors());
       	foreach($validate->errors()->all() as $message){
       		echo  $message."\n";
       	}

       	//echo $validate->errors()->first();

       	if($request->hasFile('itemPicture')){
       		$imageName = time().'.'.request()->itemPicture->getClientOriginalExtension();
	        request()->itemPicture->move(public_path('images'), $imageName);

	        $product = DB::table('products')->insertGetId([
	        	'itemName'=>$request->itemName,
	        	'description'=>$request->description,
                'shortName'=>$request->shortName,
	        	'quantity'=>$request->quantity,
	        	'itemPrice'=>$request->itemPrice,
        	]);

	        //$product = DB::table('products')->get();


	        DB::table('product_image')->insert([
	        	'productId'=>$product,
	        	'productPicture'=>$imageName,
	        ]);


	        echo'Created successfully!';

       	}

    }



	public function update(Request $request)
	{
		# code...
		$validate = Validator::make($request->all(), [
            'itemName' => 'required|string|max:255|min:1|max:255',
            'description' => 'required|string|max:255|min:1|max:255',
            'shortName' => 'required|string|max:10|min:3|max:255',
            'quantity' => 'required|string|max:255|min:1|max:255',
            'itemPrice' => 'required|string|min:1|max:255',
            'itemPicture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


    	//print_r($validate->errors());
       	foreach($validate->errors()->all() as $message){
       		echo  $message."\n";
       	}


       	if($request->hasFile('itemPicture')){
       		$imageName = time().'.'.request()->itemPicture->getClientOriginalExtension();
	        request()->itemPicture->move(public_path('images'), $imageName);

	        $product = DB::table('products')
	        ->where('id',$request->product_id)
	        ->update([
	        	'itemName'=>$request->itemName,
	        	'description'=>$request->description,
                'shortName'=>$request->shortName,
	        	'quantity'=>$request->quantity,
	        	'itemPrice'=>$request->itemPrice,
        	]);

	        //$product = DB::table('products')->get();


	        DB::table('product_image')
	        ->where('id',$request->image_id)
	        ->update([
	        	'productPicture'=>$imageName,
	        ]);


	        echo'Updated successfully!';

       	}


	}



}
