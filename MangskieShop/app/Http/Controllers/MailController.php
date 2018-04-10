<?php

namespace MangskieShop\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use MangskieShop\Http\Requests;
use MangskieShop\Http\Controllers\Controller;



class MailController extends Controller 
{
   public function basic_email(){
      $data = array('name'=>"Omar Ponce");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('ponceomar.20@gmail.com', 'Confirmation')->subject
            ('Confirmation of Payment');
         $message->from('mangskieshop@gmail.com','Omar Ponce');
      });


      return view('thankyou1');
   }

}