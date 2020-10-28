<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Question;
use DB;

class CourseController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('add-exams');
    }

    public function register(Request $request)
    {
    	$new = new Course;
    	$new -> course_name = $request -> input('course_name');
        
    	$new -> course_code = $request -> input('course_code');
    	$new -> course_lecturer = $request -> input('course_lecturer');
    	$new -> course_academic_year= $request -> input('course_academic_year');
    	$new -> course_semester = $request -> input('course_semester');

    	$new -> save();

    	return redirect('/edit-exams' . '/' . $request -> input('course_code') )->with('status','Course Registered Successfully <a href="/add-course"> Go Back</a>');
    }


    public function getCourse($course_code)
    {
    	$course = Course::findOrfail($course_code);
    	return view('edit-exams',[
    		'course' => $course
    	]);
    }



    public function toQuestions($course_code)
    {	
    	$question = Course::findOrfail($course_code);
    	return view('questions',[
    		'question' => $question
    	]);

        return back()->with('status','Question added Successfully');
    }




    // Questions Controllers


    public function addQuestion(Request $request)
    {
    	$new = new Question;
    	$new -> subject_code =$request ->input('subject_code');
    	$new -> question_titile =$request ->input('question_title');
    	$new -> answer_a =$request ->input('answer_a');
    	$new -> answer_b =$request ->input('answer_b');
    	$new -> answer_c =$request ->input('answer_c');
    	$new -> answer_d =$request ->input('answer_d');
    	$new -> answer_e =$request ->input('answer_e');
    	$new -> Question_anser =$request ->input('Question_anser');
    	$new -> Question_score =$request ->input('Question_score');
    	$new -> save();

    	return redirect('/question/add' . '/' . $request ->input('subject_code'));

    }





    public function diaplayCourses()
    {
    	$display = Course::all();
    	return view('exams-list',[
    		'display' => $display

    	]);
    }



    public function showQuestions($course_code, $course_semester)
    {
    			
    			$course = Course::findOrfail($course_code);

    			$courseQuestion = DB::table('courses')
                  ->select('*')
                  ->join('questions', 'courses.course_code', 'questions.subject_code')
                  ->where('course_code','=', $course_code)
                  ->where('course_semester','=',$course_semester)
                  ->get();



                  return view('all-question-page',[
    		'display' => $courseQuestion,
    		'course' => $course

    	]);
    }



    public function onebyoneQuestion($id)
    {	
    	$each = Question::findOrfail($id);
    	return view('each-questionpage',[
    		'display' => $each

    	]);
    }



    public function delete($course_code)
    {
    	
    	$deleteCourse = Course::findOrfail($course_code);
    	$deleteCourse->delete();
    	return redirect('exams-list')->with('status','deleted!');


    }

    public function answer(Request $request,$id)
    {
    	$question = Question::findOrfail($id);
    	$selected_answer = $request->input('gridRadios');

    	$actual_answer =$question->Question_anser;
    	$answer_point = $question->Question_score;
    	

    	if ($actual_answer == $selected_answer) {
    		$question -> score_foreach = $answer_point;
    		$question->save();
    		}else{
    			$question -> score_foreach = 0;
    			$question->save();
    		}


    }


}
