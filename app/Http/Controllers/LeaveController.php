<?php

namespace App\Http\Controllers;

use App\Leave;
use Illuminate\Http\Request;
use DB;

class LeaveController extends Controller
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
        //
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

      $from = $request->input('leave_from');
      $to = $request->input('leave_to');
      $start_date = \Carbon\Carbon::createFromFormat('d/m/Y', $from);
      $end_date = \Carbon\Carbon::createFromFormat('d/m/Y', $to);
      $different_days = $start_date->diffInDays($end_date);

      $newleave = new Leave;
        $newleave -> leave_type = $request -> input('leave_name');
        $newleave -> leave_staff_id = $request -> input('leave_staff_id');
        $newleave -> leave_from = $request -> input('leave_from');
        $newleave -> leave_to = $request -> input('leave_to');
        $newleave -> leave_number_of_day = $different_days;
        $newleave -> leave_reason = $request -> input('leave_reason');
        $newleave -> save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $all_leaves = DB::table('leaves')
        ->select('*')
        ->join('staff', 'staff.staff_id', 'leaves.leave_staff_id')
        ->get();

            return view('leaves', [
               'leaves' => $all_leaves
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
      $all_leaves = Leave::findOrfail($id);

      $from = date('d/m/Y');
      $to = $all_leaves -> leave_to;
      $start_date = \Carbon\Carbon::createFromFormat('d/m/Y', $from);
      $end_date = \Carbon\Carbon::createFromFormat('d/m/Y', $to);
      $different_days = $start_date->diffInDays($end_date);

        $all_leaves = Leave::findOrfail($id);
        return view('update-leave', [
               'leaves' => $all_leaves,
               'date_remain' => $different_days
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $remove_leave = Leave::findOrfail($id);
       $remove_leave -> delete();
       return back()->with('status','Deleted Successfuly');
    }



    public function changeToPending($id){
        if (\Request::is('approve/pending/' . $id)) {
            $pending_insert = "Pending";
            $pend_leave = Leave::findOrfail($id);
            $pend_leave -> leave_status = $pending_insert;
            $pend_leave -> save();
        }
        elseif (\Request::is('approve/approved/' . $id)) {
            $pending_insert = "Approved";
            $pend_leave = Leave::findOrfail($id);
            $pend_leave -> leave_status = $pending_insert;
            $pend_leave -> save();
        }elseif (\Request::is('approve/declined/' . $id)) {
            $pending_insert = "Declined";
            $pend_leave = Leave::findOrfail($id);
            $pend_leave -> leave_status = $pending_insert;
            $pend_leave -> save();
        }
        return back()->with('status','Leave Status Changed');
    }
}
