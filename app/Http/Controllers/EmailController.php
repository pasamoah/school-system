<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Staff;

class EmailController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        return view('compose-email');
    }
    

    public function inbox(){
        return view('email-inbox');
    }

    public function sent(){
        return view('email-sent');
    }


    public function draft(){
        return view('email-draft');
    }


    public function trash(){
        return view('email-trash');
    }

    public function starred(){
        return view('email-starred');
    }

	public function sendmessage($staff_id){

        $staffemail = new Staff;
        $staffemail = Staff::findOrfail($staff_id);

        return view('sendmail', ['staffemail' => $staffemail

        ]);

    }


    public function sendmessagestaff(){

    	request()->validate([

    		'email' => 'required|email'
    	]);

    	Mail::raw(request('mes'), function ($message){

    		$message->to(request('email'))
    		->subject(request('subject'));

    	});
  


    }





}
