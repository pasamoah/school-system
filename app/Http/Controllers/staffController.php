<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use DB;
use App\User;

class staffController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    
    public function staff(Request $request){


    $this->validate($request, [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000',
        'staff_id' => 'unique:staff',
    ]);

    $editprofile = $request -> input('staff_id');

    $newstaff = new Staff;

    $newstaff -> staff_id = $request -> input('staff_id');

     if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $newstaff->image = ''.$fileName ;
    }
        $newstaff -> firstname_staff = $request -> input('firstname_staff');
        $newstaff -> lastname_staff = $request -> input('lastname_staff');
        $newstaff -> staff_gender = $request -> input('gender');
        $newstaff -> email_staff = $request -> input('email_staff');
        $newstaff -> address_staff = $request -> input('address_staff');
        $newstaff -> joining_date = $request -> input('joining_date');
        $newstaff -> phone_staff = $request -> input('phone_staff');
        $newstaff -> department_staff = $request -> input('department_staff');
        $newstaff -> designation_staff = $request -> input('designation_staff');
        $newstaff -> dob_staff = $request -> input('dob_staff');
        $newstaff -> basic_salary = $request -> input('basic_salary');
        $newstaff -> edu_staff = $request -> input('staff_edu');
        $newstaff -> last_employer_staff = $request -> input('last_employer_staff');


    $newstaff -> save();
    return redirect()->to('/staff/edit' . '/' . $editprofile) -> with('status', 'staff added successfully <a href="/staff"> Go Back </a>');


    	    }


    public function getStaffList(){

        $items = Staff::select('staff_id','firstname_staff')->get();
        $stafflisting = Staff::latest()->paginate(8);
        return view('staff', [ 'stafflisting' => $stafflisting,
                                'salarylist' => $items
			])->with('i', (request()->input('page',1) -1) * 8);
        
    }


    
    public function saralist(){

    $salarylistpayrollspage = Staff::latest()->paginate(50);
    return view('payroll', [ 'salarylistpayrollspage' => $salarylistpayrollspage

                                ])->with('i', (request()->input('page',1) -1) * 50);
            }



   public function destroystaff(Staff $staff) {

    $staff -> delete();
    return redirect('/staff') -> with('status', 'Staff removed');

   }


   public function profile($staff_id){


    $staff_number = $staff_id;
    $leaves = DB::table('leaves')
    ->select('*')
    ->where('leave_staff_id','=', $staff_number)
    ->get();

    $salaries = DB::table('salaries')
    ->select('*')
    ->where('staff_number', '=', $staff_number)
    ->get();



    $staff_detail = Staff::findOrfail($staff_id);
    return view('staffprofile', ['staff_detail' => $staff_detail,
      'leaves' => $leaves,
      'salaries' => $salaries


    ]);

        }   




    public function updateStaff($staff_id)
        {
            $staffupdate = new Staff;
            $staffupdate = Staff::findOrfail($staff_id);
            return view('editstaff',[

            'staffupdate' => $staffupdate

            ]);

        }



        public function updateStaffprofile(Request $request, $staff_id)
        {
            
            $this->validate($request, [
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:30000',
                    'staff_id' => 'unique:staff',
                ]);

            $staffupdate = new Staff;
            $staffupdate = Staff::findOrfail($staff_id);

        if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $staffupdate->image = ''.$fileName ;
    }
        $staffupdate -> firstname_staff = $request -> get('firstname_staff');
        $staffupdate -> lastname_staff = $request -> get('lastname_staff');
        $staffupdate -> email_staff = $request -> get('email_staff');
        $staffupdate -> staff_gender = $request -> get('gender');
        $staffupdate -> address_staff = $request -> get('address_staff');
        $staffupdate -> joining_date = $request -> get('joining_date');
        $staffupdate -> phone_staff = $request -> get('phone_staff');
        $staffupdate -> department_staff = $request -> get('department_staff');
        $staffupdate -> designation_staff = $request -> get('designation_staff');
        $staffupdate -> dob_staff = $request -> get('dob_staff');
        $staffupdate -> basic_salary = $request -> get('basic_salary');
        $staffupdate -> edu_staff = $request -> get('staff_edu');
        $staffupdate -> last_employer_staff = $request -> get('last_employer_staff');

        $staffupdate -> save();

        return redirect()->to('/staff/edit/'.$staff_id)->with('status', 'updated! <a href="/staff"> Go Back </a>');


        }






}
