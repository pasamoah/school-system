<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;
use DB;
use Excel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Student;

class ResultsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

      return view('inc.resultsform');
    }

    
    public function insertResult(Request $request)
    {

         if (isset($_POST['class_mark']) || isset($_POST['exams_mark']) || isset($_POST['remark'])) {

        $class_score = $_POST['class_mark'];
        $exams_score = $_POST['exams_mark'];
        $remarkscore = $_POST['remark'];
        $total_score = $class_score + $exams_score;

        if ($total_score >= 80) {

          $remarkscore = "Distinction"; 
          
        }elseif ($total_score >= 70) {
          $remarkscore = "Excellent";
        }elseif ($total_score >= 60) {
          $remarkscore = "Very Good";
        }elseif ($total_score >= 50) {
          $remarkscore = "Good";
        }elseif ($total_score >= 45) {
          $remarkscore = "Average";
        }else{
          $remarkscore = "fail";
        }

        
        
      }


    	
    	$insertResults = new Result;
    	$insertResults -> student_results_id = $request -> input('student_results_id');
    	$insertResults -> subject = $request -> input('subject');
    	$insertResults -> class_mark = $request -> input('class_mark');
    	$insertResults -> exams_mark = $request -> input('exams_mark');
    	$insertResults -> total_mark = $total_score;
    	$insertResults -> remark =  $remarkscore;
      $insertResults -> semester = $request-> input('semester');
    	$insertResults -> academic_year = $request -> input('academic_year');
    	$insertResults -> teacher_name = $request -> input('teacher_name');

    	$insertResults->save();

      return redirect()->to('/student/result')->with('status','Saved!');

    }



    public function showResult(Request $request, $std_id)
    {	

      $user = Student::find($std_id);
      if (empty($user)) {
        return redirect('/user');
      }




        $academic = $request->input('academic_year');
        $std = $request -> input('studentID');
        $semester = $request -> input('semester');

       $results = DB::table('students')
                  ->select('*')
                  ->join('results', 'students.std_id', 'results.student_results_id')
                  ->where('student_results_id', '=', $std)
                  ->where('academic_year', '=', $academic)
                  ->where('semester', '=', $semester)
                  ->get();


        $Average_score = DB::table('students')
                  ->select('*')
                  ->join('results', 'students.std_id', 'results.student_results_id')
                  ->where('student_results_id', '=', $std)
                  ->where('academic_year', '=', $academic)
                  ->get()
                  ->sum('total_mark');

        



                  return view('resultsdisplay',[
                  'results' => $results,
                  'resultprofile' => $user,
                  'academic' => $academic,
                  'Average_score' => $Average_score,



                  ]);

    	

        }




        public function import_results(Request $request)
        {

          $this->validate($request,[
            'file' => 'required',

          ]);

           $upload = $request->file('file');
           $filePath = $upload->getRealPath();

           $file = fopen($filePath, 'r');

           $header = fgetcsv($file);

           $escapedHeader=[];

           // data validation
           
           foreach ($header as $key => $value) {
             $escapedItem = strtolower($value) ;
             array_push($escapedHeader, $escapedItem);

           }

           //looping through colums to get data

           while ($columns=fgetcsv($file)) {
             
             if ($columns[0] =="") {
              continue;
             }

           //trim data
           foreach ($columns as $key => &$value) {
             $value = ucwords($value);
           }

            $data = array_combine($escapedHeader, $columns);

            //update table

            $students_results_id = $data['students_results_id'];
            $subject = $data['subject'];
            $class_mark= $data['class_mark'];
            $exams_mark = $data['exams_mark'];
            $total_mark = $data['total_mark'];
            $remark = $data['remark'];
            $teacher_name = $data['teacher_name'];
            $academic_year = $data['academic_year'];
            $semester = $data['semester'];


      $insertResults = new Result;
      $insertResults -> student_results_id = $students_results_id;
      $insertResults -> subject = $subject;
      $insertResults -> class_mark = $class_mark;
      $insertResults -> exams_mark = $exams_mark;
      $insertResults -> total_mark = $total_mark;
      $insertResults -> remark = $remark;
      $insertResults -> academic_year = $academic_year;
      $insertResults -> teacher_name = $teacher_name;
      $insertResults -> semester = $semester;

      $insertResults->save();

           }


      return redirect('/student/result')->with("status",'uploaded!');


       }



      public function updateResult($id)
       {
         
         $update = Result::find($id);
         if (empty($update)) {
           return redirect('/user');
         }

         return view('inc.resultsedit',[ 'update' => $update,

         ]);

       }




       public function saveupdatedResult(Request $request, $id)
       {
         if (isset($_POST['class_mark']) || isset($_POST['exams_mark']) || isset($_POST['remark'])) {

        $class_score = $_POST['class_mark'];
        $exams_score = $_POST['exams_mark'];
        $remarkscore = $_POST['remark'];
        $total_score = $class_score + $exams_score;

        if ($total_score >= 80) {

          $remarkscore = "Distinction"; 
          
        }elseif ($total_score >= 70) {
          $remarkscore = "Excellent";
        }elseif ($total_score >= 60) {
          $remarkscore = "Very Good";
        }elseif ($total_score >= 50) {
          $remarkscore = "Good";
        }elseif ($total_score >= 45) {
          $remarkscore = "Average";
        }else{
          $remarkscore = "fail";
        }

        
        
      }


      
      $insertResults = new Result;
      $insertResults = Result::find($id);

      $insertResults -> student_results_id = $request -> input('student_results_id');
      $insertResults -> subject = $request -> input('subject');
      $insertResults -> class_mark = $request -> input('class_mark');
      $insertResults -> exams_mark = $request -> input('exams_mark');
      $insertResults -> total_mark = $total_score;
      $insertResults -> remark = $remarkscore;
      $insertResults -> academic_year = $request -> input('academic_year');
      $insertResults -> teacher_name = $request -> input('teacher_name');

      $insertResults->save();

      return redirect()->to('update/results/'. $id)-> with('status','Updated!');
      
      }



      public function deleteResults($id)
      {
        $deleteResult = new Result;
        $deleteResult = Result::find($id);
        $deleteResult->delete();
        return redirect('student/result')->with('status', 'deleted!');
      }



}



