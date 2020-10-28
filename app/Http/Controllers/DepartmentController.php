<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use App\Withdrawn;
use App\Student;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('departments');
    }


    public function storeDepartment(Request $request)
    {
    	$new_departmet = new Department; 
    	$new_departmet -> department_name = $request->input('department_name');
    	$new_departmet -> department_description = $request->input('department_description');
    	$new_departmet -> department_status = $request->input('status');

    	$new_departmet->save();

    	return redirect('/add-departments')->with('status','Department Added!');


    }



    public function delete(Department $department){;
    	
        $department->delete();
    	return redirect()->to('/departments')
        ->with('status','deleted!');

    }


    public function edit_department(Department $department){

    	return view('edit-department',[
    	'department_edit' => $department
    	]);
    }


    public function update_department(Request $request, Department $department){

    	$department -> department_name = $request->get('department_name');
     	$department -> department_description = $request->get('department_description');
     	$department->save();

     	return redirect('/edit-department' . '/' . $department -> id)
     						->with('status','Updated! <a href="/departments"> View All departments </a> ');




    }


  



}
