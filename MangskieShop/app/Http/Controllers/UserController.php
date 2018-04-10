<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MangskieShop\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use MangskieShop\Http\Controllers\BillingAndShippingController;


class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

    }


    public function changePassword(Request $request){

    	Validator::make($request->all(),[
    		'old_password'=>'required|string|min:6|',
    	])->validate();


    	if(Hash::check($request->input('old_password'), Auth::user()->password)){
			Validator::make($request->all(), [
			    'old_password'=>'required|string|min:6|',
	    		'password'=>'required|string|min:6|confirmed',
			])->validate();
			
            echo DB::table('users')->where('email',Auth::user()->email)
                    ->update(['password'=>bcrypt($request->input('password'))]);
                            
			return redirect('/home/account_information')->with('succmsg','Succefully changed!');
		}else{
			return redirect('/home/account_information')->with('errmsg','Invalid old password.');
		}
    	

		


    }//end of function change password


    public function register(Request $request){

        Validator::make($request->all(), [
            'firstName' => 'required|string|max:255|min:2',
            'surname' => 'required|string|max:255|min:2',
            'middleName' => 'required|string|max:255|min:2',
            'address' => 'required|string|min:6',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|string|min:3',
        ])->validate();

        User::create([
            'firstName' => $request->firstName,
            'surname' => $request->surname,
            'middleName' => $request->middleName,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'=>$request->role,
            'status'=>'Active',
        ]);

        return redirect('admin/accounts')->with('succmsg','Registered successfully!');
    }


}
