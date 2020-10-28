<?php

namespace App\Http\Controllers;

use App\SmsPortal;
use Illuminate\Http\Request;
use Twilio\Rest\Client;
use App\SchoolInformation;
use App\Student;

class SmsPortalController extends Controller
{
    



    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('compose-sms');
    }



    public function send_student(Request $request){

        $this->validate($request,[
           'message' => 'required|string|min:3|max:255' 
        ]);

        $sender_name = SchoolInformation::first();
        $sender_ID = $sender_name -> school_contact_person;

        $to = $request->input('number');
        $message = $request->input('message');


            /* your private key is your MSMPUSHER business account ID */
            $private_key= "2020070761000216"; 

            /* your public key */
            $public_key= "125e903d47fc8b6a";

            /* Include sender name here (Must be less than 11 characters) */
            $sender= $sender_ID; 

            /* you can enter multiple numbers by seperating them with a comma. Also make sure you are sending numbers with 
            country code with or without the + sign will work ex. 2347904559044,443099409550,855590948955 */ 

            $numbers= $to;  

            /* This is the message to be sent. */
            $msg= $message; 

        try {
            // this encodes the message                         

            $message= rawurlencode($msg);                   
            $numbers= rawurlencode($numbers);                   

            $url= "http://api.msmpusher.com/api?api_private_key=".$private_key."&api_public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $html_curl = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($html_curl, TRUE);

            return back()->with('status', 'Message sent to ' . $to);
                    
        } catch (Exception $e) {
            
            return back()->with('status', 'Failed to send Message ' . $to);

        }
    }




    public function student_msg($std_id){

        $studentmsg = Student::find($std_id);
        return view('sms-to-student',[
                    'sms' => $studentmsg
        ]);

    }

    public function sentMessage(){

        $sent_sms = SmsPortal::all();
        return view('sent-sms',[
            'sent'=> $sent_sms
        ]);
    }



    public function _sendSms(Request $request)
    {   

        $sender_name = SchoolInformation::first();
        $sender_ID = $sender_name -> school_contact_person;

        $to = $request->input('Phone_number');
        $message = $request->input('message_sms');


            /* your private key is your MSMPUSHER business account ID */
            $private_key= "2020070761000216"; 

            /* your public key */
            $public_key= "125e903d47fc8b6a";

            /* Include sender name here (Must be less than 11 characters) */
            $sender= $sender_ID; 

            /* you can enter multiple numbers by seperating them with a comma. Also make sure you are sending numbers with 
            country code with or without the + sign will work ex. 2347904559044,443099409550,855590948955 */ 

            $numbers= $to;  

            /* This is the message to be sent. */
            $msg= $message; 

        try {
            // this encodes the message                         

            $message= rawurlencode($msg);                   
            $numbers= rawurlencode($numbers);                   

            $url= "http://api.msmpusher.com/api?api_private_key=".$private_key."&api_public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $html_curl = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($html_curl, TRUE);
            $new_sms = new SmsPortal;
                    $new_sms -> sms_number = $to;
                    $new_sms -> sms_message = $message;
                    $new_sms->save();

            return back()->with('status', 'Message sent to ' . $to);
                    
        } catch (Exception $e) {
            return back()->with('status', 'Failed to send Message ' . $to);

        }
    }


    public function bulk_sms(Request $request){

        $this->validate($request,[
            'contacts' => 'required',

          ]);

        $upload = $request->file('contacts');
        $filePath = $upload->getRealPath();

        $file = fopen($filePath, 'r');
        
        $text = "";

        while (($line = fgets($file)) !== false) {
            $text .= str_replace("\n", ",", $line);
        }

        $text = rtrim($text, ",");

        // send BulK SMS

        $to = $text;
        $message = $request->input('message_sms');


            /* your private key is your MSMPUSHER business account ID */
            $private_key= "2020070761000216"; 

            /* your public key */
            $public_key= "125e903d47fc8b6a";

            /* Include sender name here (Must be less than 11 characters) */
            $sender= $request->input('source'); 

            /* you can enter multiple numbers by seperating them with a comma. Also make sure you are sending numbers with 
            country code with or without the + sign will work ex. 2347904559044,443099409550,855590948955 */ 

            $numbers= $to;  

            /* This is the message to be sent. */
            $msg= $message; 

        try {
            // this encodes the message                         

            $message= rawurlencode($msg);                   
            $numbers= rawurlencode($numbers);                   

            $url= "http://api.msmpusher.com/api?api_private_key=".$private_key."&api_public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $html_curl = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($html_curl, TRUE);
            
            fclose($file);

            return back()->with('status', 'Message sent to ' . $to);
                    
        } catch (Exception $e) {
            return back()->with('status', 'Failed to send Message ' . $to);

        }

    }



    public function sendparent_sms(Request $request){

        $parent_number = Student::all();
        
        foreach ($parent_number as $sendsms) {
            $numberlist = $sendsms -> phone . ",";

            $to = $numberlist;
            $message = $request->input('message_sms');


            /* your private key is your MSMPUSHER business account ID */
            $private_key= "2020070761000216"; 

            /* your public key */
            $public_key= "125e903d47fc8b6a";

            /* Include sender name here (Must be less than 11 characters) */
            $sender= $request->input('source'); 

            $numbers= $to;  

            $msg= $message; 

        try {                        

            $message= rawurlencode($msg);                   
            $numbers= rawurlencode($numbers);                   

            $url= "http://api.msmpusher.com/api?api_private_key=".$private_key."&api_public_key=".$public_key."&sender=".$sender."&numbers=".$numbers."&message=".$message;

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);  
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 3);     
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
            $html_curl = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($html_curl, TRUE);
            
            echo $numberlist;
                    
        } catch (Exception $e) {
            return back()->with('status', 'Failed to send Message ' . $to);

        }
        }

         return back()->with('status', 'Message sent Successfully');
    }


    
}
