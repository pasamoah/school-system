<?php

namespace App\Http\Controllers;

use App\FeeGroup;
use Illuminate\Http\Request;

class FeeGroupController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function massStore(Request $request)
    {   

        

       $storegroup = FeeGroup::whereIn('id', $request->get('checked'));
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fee-group');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 123;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeeGroup  $feeGroup
     * @return \Illuminate\Http\Response
     */
    public function show(FeeGroup $feeGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeeGroup  $feeGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(FeeGroup $feeGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeeGroup  $feeGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeeGroup $feeGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeeGroup  $feeGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeeGroup $feeGroup)
    {
        //
    }
}
