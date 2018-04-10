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

class ThankyouController extends Controller
{
    //
    public function index(){

    	return view('thankyou');
    }

  //
    public function index1(){

    	return view('thankyou1');
    }


}



