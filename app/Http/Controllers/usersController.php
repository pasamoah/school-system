<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class usersController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('edit-user');
    }



    public function updateAdminProfile(Request $request, $student_reference){

    	    $this->validate($request, [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000',
    		]);

    	    $edit = new User;
    		$edit = User::find($student_reference);


    	if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $edit-> admin_photo = ''.$fileName ;
            
        }

            $new_pass = $request->input('password');
   			$password = Hash::make($new_pass);

	        $edit -> name = $request -> get('name');
	        $edit -> email = $request -> get('email');
	        $edit -> password = $password;
            $edit -> admin_date_of_birth = $request -> get('dob');
            $edit -> save();

        return redirect('/edit-user')->with('status','saved!');
    }




    public function view(){
        return view('add-user');
    }



    public function create(Request $request){
        $this->validate($request, [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000',
            ]);

        $new_user = new User;

        if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $new_user-> admin_photo = ''.$fileName ;
            
        }
            $new_pass = $request->input('password');
            $password = Hash::make($new_pass);

            $new_user -> name = $request -> get('reference');
            $new_user -> role= $request -> get('role');
            $new_user -> name = $request -> get('name');
            $new_user -> email = $request -> get('email');
            $new_user -> password = $password;
            $new_user -> admin_date_of_birth = $request -> get('dob');
            $new_user -> save();

    }

}
