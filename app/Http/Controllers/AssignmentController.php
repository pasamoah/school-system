<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $all_ass = Assignment::all();
        return view('all-assignments',[
         'assignment' => $all_ass  
        ]);
    }

    public function assignmentview()
    {

      return view('dashboard-assignment');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ass_file' => 'required|mimes:pdf,docx,csv,png,jpeg|max:30000'
        ]);
        $ass_store = new Assignment;
        $ass_store -> ass_course_code = $request->input('ass_course_code');
        $ass_store -> ass_course_name = $request->input('ass_course_name');
        $ass_store -> ass_course_level = $request->input('ass_course_level');
        $ass_store -> ass_instruction = $request->input('ass_instruction');

        if($file = $request->hasFile('ass_file')) {
        $file = $request->file('ass_file') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/documents/' ;
        $file->move($destinationPath,$fileName);
        $ass_store -> ass_file = ''.$fileName ;

    }
        $ass_store->save();

        return redirect()->to('/dashboard/assignment')->with('status','assignment add');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $edit_assign = Assignment::find($id);
        return view('dashboard-edit-assignment',[
        'assignment'=>$edit_assign
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $update_assignment = Assignment::find($id);

        $update_assignment -> ass_course_code = $request->input('ass_course_code');
        $update_assignment -> ass_course_name = $request->input('ass_course_name');
        $update_assignment -> ass_course_level = $request->input('ass_course_level');

        if($file = $request->hasFile('ass_file')) {
        $file = $request->file('ass_file') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $update_assignment -> ass_file = ''.$fileName ;

    }
        $update_assignment->save();

        return redirect()->to('/assignment/edit' . '/' . $id)->with('status','assignment add');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del_assignment = Assignment::find($id);
        $del_assignment->delete();
        return redirect()->to('/dashboard/all-assignments')->with('status','Deleted!');

    }
}
