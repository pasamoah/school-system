<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use DB;
use App\Student;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function submitfee(Request $request){

    $this->authorize('create', Payment::class);

if (isset($_POST['amount_expected']) && isset($_POST['amount'])) {
            $ae = $_POST['amount_expected'];
            $paid = $_POST['amount'];
            $balance = $ae - $paid;
        }

        if ($paid == $ae ) {
            $status = "Full Payment";
        }
        elseif ($paid < $ae ) {
            $status = "Owing";
        }elseif ($paid >= $ae) {
            $status = "Overpaid" ;
        }

        $receipt_number = rand(100, 500000);


        $epay = new Payment;
        $epay -> student_id = $request -> input('student_id');
        $epay -> payment_id = $receipt_number;
        $epay -> fee_type = $request -> input('feeType');
        $epay -> Year = $request -> input('year');
        $epay -> current_year = $request -> input('current_year');     
        $epay -> semester = $request -> input('semester');
        $epay -> amount_expected = $request -> input('amount_expected');
        $epay -> amount = $request -> input('amount');
        $epay -> paid_by = $request -> input('paid_by');
        $epay -> balance = $balance;
        $epay -> status = $status;



        

        $epay -> save();


        return redirect('/payments') -> with('status', 'Payment  Made Successfully');


    	    }



        public function submitfeenew(Request $request){
            if (isset($_POST['amount_expected']) && isset($_POST['amount'])) {
            $ae = $_POST['amount_expected'];
            $paid = $_POST['amount'];
            $balance = $ae - $paid;
        }

        if ($paid == $ae ) {
            $status = "Full Payment";
        }
        elseif ($paid < $ae ) {
            $status = "Owing";
        }elseif ($paid >= $ae) {
            $status = "Overpaid" ;
        }

        $std = $request -> input('student_id');

        $receipt_number = rand(100, 500000);

        $epay = new Payment;
        $epay -> student_id = $request -> input('student_id');
        $epay -> fee_type = $request -> input('feeType');
        $epay -> payment_id = $receipt_number;
        $epay -> Year = $request -> input('year');
        $epay -> current_year = $request -> input('current_year');     
        $epay -> semester = $request -> input('semester');
        $epay -> amount_expected = $request -> input('amount_expected');
        $epay -> amount = $request -> input('amount');
        $epay -> paid_by = $request -> input('paid_by');
        $epay -> balance = $balance;
        $epay -> status = $status;
        

        $epay -> save();

        return redirect()->to('/users' . '/' . $std);

        }






        public function recentpayments(){

        $studentindex = Student::all();


        $recentpayment = DB::table('students')
                        ->select('*')
                        ->join('payments', 'students.std_id', 'payments.student_id')
                        ->get();


                        return view('payments', ['recentpayment' => $recentpayment,
                                                'studentindex' => $studentindex

                                ]);


                    }




        public function deletepayment($id)
        {   
            $removepayment = new Payment;
            $removepayment = Payment::find($id);
            $removepayment->delete();

            return redirect('/payments/payment-list')->with('status','removed!');
        }




        public function print($id, $std_id)
        {
            
            $update_payment = Payment::find($id);

            $studentcredential = Student::find($std_id);

            return view('printfeesreceipts', [ 'payment_inf' => $update_payment,
                'student_info' => $studentcredential


            ]);

        }


        public function firstpayment($std_id){

            $first = new Student;
            $first = Student::find($std_id);
            return view('inc.newfeepayment',[
                'f_payment'=> $first
            ]);
        }



        public function editpayment($id)
        {
            
            $update_payment = Payment::find($id);
            return view('editpayment-page', [ 'p_details'=> $update_payment


            ]);

        }



        public function updatefee(Request $request, $id){



        if (isset($_POST['amount_expected']) && isset($_POST['amount'])) {
            $ae = $_POST['amount_expected'];
            $paid = $_POST['amount'];
            $balance = $ae - $paid;
        }

        if ($paid == $ae ) {
            $status = "Full Payment";
        }
        elseif ($paid < $ae ) {
            $status = "Owing";
        }elseif ($paid >= $ae) {
            $status = "Overpaid" ;
        }


        $epay = Payment::find($id);
        $epay -> student_id = $request -> input('student_id');
        $epay -> fee_type = $request -> input('feeType');
        $epay -> Year = $request -> input('year');
        $epay -> current_year = $request -> input('current_year');     
        $epay -> semester = $request -> input('semester');
        $epay -> amount_expected = $request -> input('amount_expected');
        $epay -> amount = $request -> input('amount');
        $epay -> paid_by = $request -> input('paid_by');
        $epay -> balance = $balance;
        $epay -> status = $status;



        

        $epay -> save();


        return redirect('/users' . '/' . $request -> input('student_id') ) -> with('status', 'updated Successfully');



        }


    public function showsalary(){

        return 123;
    }



}
