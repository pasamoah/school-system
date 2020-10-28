<?php

namespace App\Http\Controllers;

use App\FeeType;
use Illuminate\Http\Request;

class FeeTypeController extends Controller
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
       return view('fee-type');
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

        $new_fee = new FeeType;
        $new_fee -> feetype_name = $request-> input('feetype_name');
        $new_fee -> feetype_code = $request-> input('feetype_name');
        $new_fee -> feetype_aca_year = $request-> input('feetype_aca_year');
        $new_fee -> feetype_levels = $request-> input('levels');
        $new_fee -> feetype_description = $request-> input('feetype_description');
        $new_fee->save();
        if ($new_fee) {
            return response()->json(['status','success']);
        }
        else {

            return response()->json(['status'=> 'error']);
            
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function show(FeeType $feeType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeType $feeType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeType $feeType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeeType  $feeType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FeeType::find($id)->delete();
        return response()->json([
        'success' => 'Record has been deleted successfully!'
    ]);
    }
}
