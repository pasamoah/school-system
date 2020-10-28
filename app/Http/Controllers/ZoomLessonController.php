<?php

namespace App\Http\Controllers;

use App\ZoomLesson;
use Illuminate\Http\Request;
use App\SchoolInformation;
use App\Student;

class ZoomLessonController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('notify') == "None") {
                $new_lesson = new ZoomLesson;
                $new_lesson -> zoom_title = $request -> input('zoom_title');
                $new_lesson -> zoom_id = $request -> input('zoom_id');
                $new_lesson -> zoom_class = $request -> input('zoom_class');
                $new_lesson -> zoom_date = $request -> input('zoom_date');
                $new_lesson -> zoom_start_time = $request -> input('zoom_start_time');
                $new_lesson -> zoom_end_time = $request -> input('zoom_end_time');
                $new_lesson -> zoom_created_by = $request -> input('zoom_created_by');
                $new_lesson -> zoom_remark = $request -> input('zoom_remark');
                $new_lesson->save();

                return back()->with('status','Class Added Successfully');
        }else{

        $new_lesson = new ZoomLesson;
        $new_lesson -> zoom_title = $request -> input('zoom_title');
        $new_lesson -> zoom_id = $request -> input('zoom_id');
        $new_lesson -> zoom_class = $request -> input('zoom_class');
        $new_lesson -> zoom_date = $request -> input('zoom_date');
        $new_lesson -> zoom_start_time = $request -> input('zoom_start_time');
        $new_lesson -> zoom_end_time = $request -> input('zoom_end_time');
        $new_lesson -> zoom_created_by = $request -> input('zoom_created_by');
        $new_lesson -> zoom_remark = $request -> input('zoom_remark');
        $new_lesson->save();

        $sender_ID = "LIVEClass";

        $to = "0542401240";
        $message = "You are Reminded of a Scheduled Live Class with Zoom ID " . $request -> input('zoom_id') . " on " . $request -> input('zoom_date') . ", from " . $request -> input('zoom_start_time') . " - "  . $request -> input('zoom_end_time') . "." . " Tutor:" . $request -> input('zoom_created_by'); 


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

            return back()->with('status', 'Class added Successfully, Student Notified');
                    
        } catch (Exception $e) {
            
            return back()->with('status', 'Failed to send Message ' . $to);

        }

        }
        
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ZoomLesson  $zoomLesson
     * @return \Illuminate\Http\Response
     */
    public function show(ZoomLesson $zoomLesson)
    {
        $class_list = ZoomLesson::all();

        $todays_date = date('d/m/Y');
        return view('zoomclass-main',[
            'class_list' => $class_list,
            'todays_date'  => $todays_date 
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ZoomLesson  $zoomLesson
     * @return \Illuminate\Http\Response
     */
    public function edit(ZoomLesson $zoomLesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ZoomLesson  $zoomLesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ZoomLesson $zoomLesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ZoomLesson  $zoomLesson
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_class = ZoomLesson::findOrfail($id);
        $delete_class->delete();
        return back()->with('status', 'Class Deleted');

    }


    public function ZoomClassNotification($id)
        {
            
        $sender_name = SchoolInformation::first();
        $sender_ID = $sender_name -> school_contact_person;

         


        $to = "0542401240";
        $message = "Zoom reminder";


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



}
