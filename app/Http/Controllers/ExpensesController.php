<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;

class ExpensesController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        return view('expenses');
    }



    public function save(Request $request)
    {

    	$this->validate($request,[
    		'expense_file' => 'Required|mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:2048',
    	]);

    	$new = new Expense;

    	if($file = $request->hasFile('expense_file')) {
        $file = $request->file('expense_file') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $new-> expense_file = ''.$fileName ;
    }
    	
    	    $new -> expense_name = $request -> input('expense_name');
            $new -> expense_purchased_from = $request -> input('expense_purchased_from');
            $new -> expense_purchased_date = $request -> input('expense_purchased_date');
            $new -> expense_purchased_by = $request -> input('expense_purchased_by');
            $new -> expense_amount = $request -> input('expense_amount');
            $new -> expense_paid_by = $request -> input('expense_paid_by');
            $new -> expense_status = $request -> input('expense_status');

            $new -> save();

            return redirect()->to('/dashboard/add-expenses')->with('status', 'Expensed Add! <a href="/dashboard/expenses">view List</a> ');
    }



    public function destroy($id)
    {
    	$del = Expense::find($id);
    	$del -> delete();
    	return redirect('/dashboard/expenses')->with('status','deleted!');
    }


    public function getEpenses($id)
    {
    	$expenses = Expense::find($id);
    	return view('edit-expense',[
    		'expense' => $expenses	
    	]);
    	
    }

    public function saveupdate(Request $request, $id)
    {
    	$new  = Expense::find($id);
    	$this->validate($request,[
    		'expense_file' => 'mimes:jpeg,png,jpg,gif,svg,pdf,docx|max:2048',
    	]);

    	

    	if($file = $request->hasFile('expense_file')) {
        $file = $request->file('expense_file') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/' ;
        $file->move($destinationPath,$fileName);
        $new-> expense_file = ''.$fileName ;
    }
    	
    	    $new -> expense_name = $request -> input('expense_name');
            $new -> expense_purchased_from = $request -> input('expense_purchased_from');
            $new -> expense_purchased_date = $request -> input('expense_purchased_date');
            $new -> expense_purchased_by = $request -> input('expense_purchased_by');
            $new -> expense_amount = $request -> input('expense_amount');
            $new -> expense_paid_by = $request -> input('expense_paid_by');
            $new -> expense_status = $request -> input('expense_status');

            $new -> save();

            return redirect()->to('/dashboard/expenses')->with('status', 'Expensed Updated! <a href="/dashboard/expenses">view List</a> ');
    }



    public function addnew(){

        return view('add-expenses');
    }
}
