<?php

namespace Waruq\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   
   public function contact(Request $request){

   		$this->validate($request,[
			'name'=>'required|min:4',
			'email'=>'required|email',
			'number'=>'required',
			'message'=>'required',
		]);

      $data = array(
               'name'=>$request->input('name'),
      				 'email'=>$request->input('email'),
      				 'number'=>$request->input('number'),	
      				 'info'=>$request->input('message')
  				);
   	
      Mail::send('mail',$data,function($message) {
         $message->to('teamwaruq@gmail.com');
         $message->subject ('You have a Message');
         $message->from('nadym.baba@gmail.com');
      });
     
     return redirect()->route('contact')->with('success','We have recieved your message,we will get back to you soon');
   }
}
