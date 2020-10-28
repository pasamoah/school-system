<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Event;
use App\Payment;
use App\Staff;
use DB;
use App\User;
use App\Withdraw;
use Twilio\Rest\Client;
use Storage;
use App\SchoolInformation;

class StudentRegister extends Controller
{
    
public function __construct()
    {
        $this->middleware('auth');
    }



	public function registerstudent(Request $request){

    $this->authorize('create', Student::class);

    $this->validate($request, [
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:8048',
        'std_id' => 'unique:students',
        'password' => 'required|min:6|confirmed',
        'password_confirmation' => 'required|min:6'
    ]);

    $random = rand(10, 9000);
    $generatedID = 466 . $random;


    $newStudent = new Student;
    $newStudent1 = new User;

    $fname = $request->get('fName');
    $lname = $request->get('surName');
    $fullname = $fname . " " . $lname;

    $new_pass = $request->input('password');
    $password = Hash::make($new_pass);

    $newStudent1 -> student_reference = $request -> get('reference');
    $newStudent1 -> name = $fullname;
    $newStudent1 -> index_number = $generatedID;
    $newStudent1 -> email = $request -> get('fEmail');
    $newStudent1 -> password = $password;

    $newStudent1->save();


     if($file = $request->hasFile('image')) {
        $file = $request->file('image') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $newStudent->image = ''.$fileName ;
    }
        $newStudent -> std_id = $generatedID;
        $newStudent -> Programme = $request -> get('Programme');
        $newStudent -> student_reference_table = $request -> get('reference');
        $newStudent -> c_level = $request -> get('cLevel');
        $newStudent -> surname = $request -> get('surName');
        $newStudent -> f_name = $request -> get('fName');
        $newStudent -> f_email = $request -> get('fEmail');
        $newStudent -> DoB = $request -> get('DoB');
        $newStudent -> p_address = $request -> get('pAddress');
        $newStudent -> nationality = $request -> get('nationality');
        $newStudent -> region = $request -> get('region');
        $newStudent -> home_town = $request -> get('homeTown');
        $newStudent -> phone = $request -> get('phone');
        $newStudent -> mobile = $request -> get('mobile');
        $newStudent -> p_school = $request -> get('pSchool');
        $newStudent -> p_location = $request -> get('pLocation');
        $newStudent -> disability = $request -> get('disability');
        $newStudent -> gender = $request -> get('gender');
        $newStudent -> fee_category = $request -> get('feeCat');
        $newStudent -> religion = $request -> get('religion');
        $newStudent -> title = $request -> get('title');
        $newStudent -> g_surname = $request -> get('gSurName');
        $newStudent -> g_fname = $request -> get('gFName');
        $newStudent -> occupation = $request -> get('occupation');
        $newStudent -> gp_address = $request -> get('gpAddress');
        $newStudent -> p_region = $request -> get('pRegion');
        $newStudent -> g_mobile = $request -> get('gmobile');
        $newStudent -> g_mail = $request -> get('gmail');
        $newStudent -> std_status = $request -> get('std_status');
        $newStudent -> section = $request -> get('section');
        $newStudent -> save();


        // Send Text Message
        $sender_name = SchoolInformation::first();
        $sender_ID = $sender_name -> school_contact_person;
        
        $private_key= "2020070761000216"; 
        $public_key= "125e903d47fc8b6a";
        $sender= $sender_ID;
        $numbers=  $request->input('phone');
        $msg= "Dear " . $request -> get('surName') . " " . $request -> get('fName') . ", " . " you have been registered successfully. " . "Student Number: " . $generatedID . ", " . "Programme: " . $request -> get('Programme') . "." . " Your current login Credentials are " . "Email: " . $request -> get('fEmail') . ", " . "Password: " . $new_pass; 
                       

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

        return redirect('/profile/update' . '/' . $generatedID ) -> with('status', 'New Student Added');


    	    }




    public function getStudents(){


        $students = DB::table('students')
        ->select('*')
        ->where('gender', '=',"Male")
        ->get();

        $staffcount = Staff::count();
        $msgevents = Event::latest()->paginate(3);
        $counts = Student::count();
        return view('dashboard', [  'students' => $students,
                                    'msgevents' => $msgevents,
                                    'displaycount' => $counts,
                                    'staffcount' => $staffcount

                                ])->with('i', (request()->input('page',1) -1) * 3);
    }



    public function getStudentList(){
        $studentlisting = Student::all();
        return view('student-list', [ 'listing' => $studentlisting,

                                ]);


    }

    public function index(){

        $random = rand(80, 100000);
        $generatedID = 2039 . $random;
        return view('student', [ 'ref_number' => $generatedID

                    ]);
    }





    public function removeStudent($std_id) {
        
        $studentDelete = Student::findOrfail($std_id);
        $studentDelete -> delete();
        return redirect('/student-list') -> with('status', 'Student removed');

       }




    public function show($std_id){

        $studentfeedetails = DB::table('students')
                        ->select('payments.student_id','payments.fee_type','payments.year', 'payments.amount', 'payments.paid_by','payments.balance', 'payments.amount_expected', 'payments.created_at', 'payments.status','payments.id', 'payments.payment_id')
                        ->join('payments', 'students.std_id', 'payments.student_id')
                        ->where('students.std_id', $std_id)
                        ->latest()
                        ->get();



        $studentprofilePage = Student::findOrfail($std_id);
        if (empty($studentprofilePage)) {
            return redirect('/user');
        }

        return view('studentprofile', [ 'studentprofilePage' => $studentprofilePage,
                                        'studentfeedetails' => $studentfeedetails

                                ]);    
         }




     public function deleteAll(Request $request){

        $deletestudent = Student::whereIn('std_id', $request->get('checked'));
        $deletestudent->delete();

        return back()->with('status','deleted!');
    }
            


    public function getStudentdetails($std_id)
    {
        $insertfield = Student::findOrfail($std_id);
        return view('studentprofileupdate',[ 'profile' => $insertfield,

        ]);
    }


    public function feegrouping(Request $request, $std_id)
    {   

                $academic_year = $request->input('academic_year');
                $semester = $request->input('semester');
                $studentfeedetails = DB::table('students')
                        ->select('*')
                        ->join('payments', 'students.std_id', 'payments.student_id')
                        ->where('students.std_id', $std_id)
                        ->where('year', $academic_year)
                        ->where('semester', $semester)
                        ->get();


                 $sumFee= DB::table('students')
                        ->select('*')
                        ->join('payments', 'students.std_id', 'payments.student_id')
                        ->where('students.std_id', $std_id)
                        ->where('year', $academic_year)
                        ->where('semester', $semester)
                        ->get()
                        ->sum('amount');

                $expectedFee= DB::table('students')
                        ->select('*')
                        ->join('payments', 'students.std_id', 'payments.student_id')
                        ->where('students.std_id', $std_id)
                        ->where('year', $academic_year)
                        ->where('semester', $semester)
                        ->get()
                        ->sum('amount_expected');


                $arrears = $expectedFee - $sumFee;



        $student_id =  $std_id;      
        $update_payment = Payment::findOrfail($student_id);
        $studentprofilePage = Student::findOrfail($std_id);
        if (empty($studentprofilePage)) {
            return redirect('/user');
        }

        return view('fee-grouping', [ 'studentprofilePage' => $studentprofilePage,
                                        'studentfeedetails' => $studentfeedetails,
                                        'payment_inf' => $update_payment,
                                        'academic_year' => $academic_year,
                                        'semester' => $semester,
                                        'sumFee' => $sumFee,
                                        'expected' => $expectedFee,
                                        'arrears' => $arrears



                                ]); 
    }





    public function updatestudent(Request $request, $std_id){

            $newStudent = new Student;
            $newStudent = Student::findOrfail($std_id);

        $this->validate($request, [
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'std_id' => 'unique:students',
            ]);


             if($file = $request->hasFile('image')) {
                $file = $request->file('image') ;
                $fileName = $file->getClientOriginalName() ;
                $destinationPath = public_path().'/uploads/' ;
                $file->move($destinationPath,$fileName);
                $newStudent-> image = ''.$fileName ;
            }
                $newStudent -> std_id = $request -> get('studentID');
                $newStudent -> Programme = $request -> get('Programme');
                $newStudent -> c_level = $request -> get('cLevel');
                $newStudent -> surname = $request -> get('surName');
                $newStudent -> f_name = $request -> get('fName');
                $newStudent -> f_email = $request -> get('fEmail');
                $newStudent -> DoB = $request -> get('DoB');
                $newStudent -> p_address = $request -> get('pAddress');
                $newStudent -> nationality = $request -> get('nationality');
                $newStudent -> region = $request -> get('region');
                $newStudent -> home_town = $request -> get('homeTown');
                $newStudent -> phone = $request -> get('phone');
                $newStudent -> mobile = $request -> get('mobile');
                $newStudent -> p_school = $request -> get('pSchool');
                $newStudent -> p_location = $request -> get('pLocation');
                $newStudent -> disability = $request -> get('disability');
                $newStudent -> gender = $request -> get('gender');
                $newStudent -> fee_category = $request -> get('feeCat');
                $newStudent -> title = $request -> get('title');
                $newStudent -> g_surname = $request -> get('gSurName');
                $newStudent -> g_fname = $request -> get('gFName');
                $newStudent -> occupation = $request -> get('occupation');
                $newStudent -> gp_address = $request -> get('gpAddress');
                $newStudent -> p_region = $request -> get('pRegion');
                $newStudent -> g_mobile = $request -> get('gmobile');
                $newStudent -> g_mail = $request -> get('gmail');
                $newStudent -> std_status = $request -> get('std_status');


            $newStudent -> save();

            return back()->with('status', 'Updated!');

    }


    public function filter(Request $request)
    {   
        $clevel = $request->input('class');
        $programme = $request->input('programme');
        $status = $request->input('std_status');
        
        $sort = DB::table('students')
        ->select('*')
        ->where('c_level', '=', $clevel)
        ->orWhere('Programme','=', $programme)
        ->orWhere('std_status','=', $status)
        ->get();

        return view('inc.sortbyclass', [
            'sort' => $sort,
            'status' => $status,
            'programme' =>$programme,
             'level' => $clevel

        ]);

    }





    public function withdraw($std_id)
    {   



        
        $newStudent = Student::findOrfail($std_id);



                $image = $newStudent -> image;
                $std_id = $newStudent -> std_id;
                $student_reference_num = $newStudent -> student_reference_table;
                $Programme = $newStudent -> Programme; 
                $cLevel=$newStudent -> c_level;
                $surname=$newStudent -> surname;
                $f_name=$newStudent -> f_name;
                $f_email=$newStudent -> f_email;
                $DoB=$newStudent -> DoB;
                $p_address=$newStudent -> p_address;
                $nationality=$newStudent -> nationality ;
                $religion=$newStudent -> religion ;
                $home_town=$newStudent -> home_town;
                $phone=$newStudent -> phone ;
                $s_region=$newStudent -> region ;
                $mobile=$newStudent -> mobile;
                $p_school=$newStudent -> p_school;
                $p_location=$newStudent -> p_location;
                $disability=$newStudent -> disability;
                $gender=$newStudent -> gender;
                $fee_category=$newStudent -> fee_category;
                $title=$newStudent -> title;
                $g_surname=$newStudent -> g_surName;
                $g_fname=$newStudent -> g_fname;
                $occupation=$newStudent -> occupation;
                $gp_address=$newStudent -> gp_address;
                $p_region=$newStudent -> p_region;
                $g_mobile=$newStudent -> g_mobile;
                $g_mail=$newStudent -> g_mail;




        $withdraw = new Withdraw;
        $withdraw -> image = $image;
        $withdraw -> std_id = $std_id;
        $withdraw -> c_level = $cLevel;
        $withdraw -> Programme = $Programme;
        $withdraw -> student_reference_table=$student_reference_num;
                $withdraw -> surname =$surname;
                $withdraw -> f_name = $f_name;
                $withdraw -> f_email = $f_email;
                $withdraw -> DoB=$DoB;
                $withdraw -> p_address=$p_address;
                $withdraw -> nationality=$nationality;
                $withdraw -> religion=$religion;
                $withdraw -> home_town=$home_town;
                $withdraw -> phone=$phone;
                $withdraw -> mobile=$mobile;
                $withdraw -> p_school=$p_school;
                $withdraw -> p_location=$p_location;
                $withdraw -> disability=$disability;
                $withdraw -> gender=$gender;
                $withdraw -> fee_category=$fee_category;
                $withdraw -> title=$title;
                $withdraw -> g_surName=$g_surname;
                $withdraw -> g_fname=$g_fname;
                $withdraw -> occupation=$occupation;
                $withdraw -> gp_address=$gp_address;
                $withdraw -> p_region=$p_region;
                $withdraw -> g_mobile=$g_mobile;
                $withdraw -> g_mail=$g_mail;
                $withdraw -> region = $s_region;
                $withdraw -> save();
                $newStudent-> delete();



        
    }


public function del_profile($std_id){

    $del_profile = Student::findOrfail($std_id);
    $std_profile = $del_profile->pluck('image')->toArray();
    $del_profile->delete();
    Storage::delete($std_profile);
    return back();

}



public function promotion(Request $request){

    $promotion_filter = DB::table('students')
    ->select('*')
    ->where('Programme', '=', $request->input('course'))
    ->where('section', '=', $request->input('section'))
    ->get();

    return view('student-promotion',[
        'filter' => $promotion_filter
    ]);

}



    public function savepromo(Request $request){

        $updateDetails = [
            'Programme' => $request->input('class_programe'),
            'c_level' => $request->input('class_level'),

        ];

        $massUpdate = Student::whereIn('std_id', $request->get('checked'));
        $massUpdate->update($updateDetails);

        return back()->with('status','promoted successfully');


        
    }


}
