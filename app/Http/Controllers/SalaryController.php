<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salary;
use App\Staff;
use DB;

class SalaryController extends Controller
{


   public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
      $salaries = DB::table('staff')
      ->select('*')
      ->join('salaries', 'staff.staff_id', 'salaries.staff_number')
      ->get();
      return view('inc.salary',[
        'salaries' => $salaries
      ]);
    }


    public function amount(Staff $amount)
    {
      return $amount-> basic_salary;
    }



    public function destroy($id){

      $remove_salary = Salary::findOrfail($id);
      $remove_salary->delete();
      return back();
    }



    public function paystaff(Request $request){

      $staff_id = $request->input('staff_number');
      $getbasicsalary = Staff::findOrfail($staff_id);
      
      $basic_salary = $request -> basic;


      // Earnings

      $basicsalary = $basic_salary;
      $da = $request -> input('da');
      $hra = $request -> input('hra');
      $conveyance = $request -> input('conveyance');
      $allowance = $request -> input('allowance');
      $med_allowance = $request -> input('medical_allowance');
      $others = $request -> input('others');


      // Deductions

      $tds = $request -> input('tds');
      $esi = $request -> input('esi');
      $pf = $request -> input('pf');
      $leave = $request -> input('leave');
      $ptax = $request -> input('ptax');
      $labour_welfare = $request -> input('labour_welfare');
      $l_o = $request -> input('n_others');


      // All Earninngs
      $all_earnings = $basicsalary + $da + $hra + $conveyance + $allowance + $med_allowance + $others;

      // All deductions
      $all_deducations = $tds + $esi + $pf + $leave + $ptax + $labour_welfare + $l_o;

      $net_salary = $all_earnings - $all_deducations;


       $staffsalary = new Salary;
       $staffsalary -> staff_number = $request -> input('staff_number');
       $staffsalary -> salary_month = $request -> input('salary_month');
       $staffsalary -> basic = $basic_salary;
       $staffsalary -> tds = $request -> input('tds');
       $staffsalary -> da = $request -> input('da');
       $staffsalary -> esi = $request -> input('esi');
       $staffsalary -> hra = $request -> input('hra');
       $staffsalary -> pf = $request -> input('pf');
       $staffsalary -> conveyance = $request -> input('conveyance');
       $staffsalary -> leave = $request -> input('leave');
       $staffsalary -> allowance = $request -> input('allowance');
       $staffsalary -> ptax = $request -> input('ptax');
       $staffsalary -> medical_allowance = $request -> input('medical_allowance');
       $staffsalary -> labour_welfare = $request -> input('labour_welfare');
       $staffsalary -> others = $request->input('others');
       $staffsalary -> n_other = $l_o;
       $staffsalary -> total_earnings = $all_earnings;
       $staffsalary -> total_deductions = $all_deducations;
       $staffsalary -> net_salary = $net_salary;

       $staffsalary -> save();
       return back() -> with('status', 'Salary Recorded!');


        

       }



     public function viewpay($staff_id){

        $staff_detail = Staff::findOrfail($staff_id);

       $staffslip = DB::table('staff')
                  ->select('*')
                  ->join('salaries', 'staff.staff_id', 'salaries.staff_number')
                  ->where('staff_number', $staff_id)
                  ->get();
                        


      return view('payslip', ['staffslip' => $staffslip,
                              'staff_detail' => $staff_detail

        ]);


            }




      public function payslipmonth(Request $request, $staff_id){


              $month = $request -> input('salarymonth');
              $st = $request -> input('st');

               $staffslipmonth = DB::table('staff')
                  ->select('*')
                  ->join('salaries', 'staff.staff_id', 'salaries.staff_number')
                  ->where('staff_number','=', $st)
                  ->where('salary_month','=',$month)
                  ->get();



              return view('slippage', ['staffslipmonth' => $staffslipmonth

        ]);


      }




}
