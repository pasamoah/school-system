<?php

namespace App\Http\Controllers;

use App\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('section-classes');
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
        $new_class = new Programme;
        $new_class -> class_name = $request->input('class_name');
        $new_class -> class_numeric = $request->input('class_numeric');
        $new_class -> class_section = $request->input('class_section');
        $new_class->save();
        
        if ($new_class) {
        return response()->json(['status'=> 'success',
        ]);
        } else {
            return response()->json(['status'=> 'error']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show(Programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $class_edit = Programme::findOrfail($id);
        return view('edit-class',[
           'class_edit' => $class_edit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new_class = Programme::findOrfail($id);
        $new_class -> class_name = $request->input('class_name');
        $new_class -> class_numeric = $request->input('class_numeric');
        $new_class -> class_section = $request->input('class_section');
        $new_class->save();
        return back()->with('status','Class Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_class = Programme::findOrfail($id);
        $delete_class->delete();
        return back()->with('status','Class Deleted!!');
    }
}
