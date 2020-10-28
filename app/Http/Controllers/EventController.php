<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Student;


class EventController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');
    }




        public function submit(Request $request){

        $this->authorize('create',Event::class);

        $new_event = new Event;
        $new_event-> username = $request->input('username');
        $new_event-> title = $request->input('title');
        $new_event-> deadline = $request->input('deadline');
        $new_event-> message = $request->input('message');
        $new_event->save();

            if ($new_event) {
                return response()->json(['status'=> 'success',
            ]);
            } else {
                return response()->json(['status'=> 'error']);
            }

}
            


        public function destroy($id) {

        $message = Event::findOrfail($id);
        $message -> delete();
        return redirect('/dashboard') -> with('status', 'Event removed');

       }


       public function edit($id){
            $edit_event = Event::findOrfail($id);
            return view('inc.edit-event',[
                'event' => $edit_event
            ]);
       }


       public function saveedit(Request $request, $id){
            $edit_save = Event::findOrfail($id);
             $edit_save-> username = $request->input('username');
             $edit_save-> title = $request->input('title');
             $edit_save-> deadline = $request->input('deadline');
             $edit_save-> message = $request->input('message');
             $edit_save->save();
            
            return redirect()->to('/dashboard')->with('status','Event Updated Successfully!');
       }
}
