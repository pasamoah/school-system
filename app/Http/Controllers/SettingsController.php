<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\SchoolInformation;

class SettingsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index(){
        return view('settings.settings');
    }


    public function storeFee(Request $request)
    {

        $this->validate($request,[
            'setting_fee_amount' => 'required|numeric'
        ]);


    	$insertfee = new Fee;
    	$insertfee -> setting_fee_academics = $request -> input('setting_fee_academics');
        $insertfee -> setting_fee_semester = $request -> input('setting_fee_semester');
    	$insertfee -> setting_fee_level = $request -> input('setting_fee_level');
    	$insertfee -> setting_fee_type = $request -> input('setting_fee_type');
    	$insertfee -> setting_fee_amount = $request -> input('setting_fee_amount');

    	$insertfee->save();


    	return redirect('/dashboard-general-settings')->with('status', 'Created Successfully');

    }




    public function schoolinfo(Request $request)
    {
        
        $this->validate($request, [

            'school_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $schoolsetup = new SchoolInformation;

        if($file = $request->hasFile('school_logo')) {
        $file = $request->file('school_logo') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $schoolsetup->school_logo = ''.$fileName ;
        }


        $schoolsetup -> school_name = $request -> input('school_name');
        $schoolsetup -> school_contact_person = $request -> input('school_contact_person');
        $schoolsetup -> school_address = $request -> input('school_address');
        $schoolsetup -> school_country = $request -> input('school_Country');
        $schoolsetup -> school_city = $request -> input('school_city');
        $schoolsetup -> school_district = $request -> input('school_district');
        $schoolsetup -> school_phone = $request -> input('school_phone');
        $schoolsetup -> school_fax = $request -> input('school_fax');
        $schoolsetup -> school_affiliation_number = $request -> input('school_affiliation_number');
        $schoolsetup -> school_tax = $request -> input('school_tax');
        $schoolsetup -> school_cin = $request -> input('school_cin');
        $schoolsetup -> school_email = $request -> input('school_email');
        $schoolsetup -> school_website = $request -> input('school_website');
        $schoolsetup -> school_government = $request -> input('school_government');

        $schoolsetup->save();

        return redirect('/dashboard-settings')->with('status','Saved Successfully');



    }


    public function updateSchoolInfo(Request $request, $id)
    {
    
              
        $this->validate($request, [

            'school_logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $update_school = new SchoolInformation;
        $update_school = SchoolInformation::find($id);


        if($file = $request->hasFile('school_logo')) {
        $file = $request->file('school_logo') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $update_school->school_logo = ''.$fileName ;
        }

        $update_school -> school_name = $request -> get('school_name');
        $update_school -> school_contact_person = $request -> input('school_contact_person');
        $update_school -> school_address = $request -> get('school_address');
        $update_school -> school_country = $request -> get('school_Country');
        $update_school -> school_city = $request -> get('school_city');
        $update_school -> school_phone = $request -> get('school_phone');
        $update_school -> school_fax = $request -> get('school_fax');
        $update_school -> school_affiliation_number = $request -> get('school_affiliation_number');
        $update_school -> school_tax = $request -> get('school_tax');
        $update_school -> school_cin = $request -> get('school_cin');
        $update_school -> school_email = $request -> get('school_email');
        $update_school -> school_website = $request -> get('school_website');
        $update_school -> school_government = $request -> get('school_government');

        $update_school->save();

        return redirect('/dashboard-settings')->with('status', 'Updated Successfully');


    }




}
