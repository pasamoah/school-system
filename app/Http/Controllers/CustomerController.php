<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function form()
    {
        return view('add-customer');
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->save();

        return response()->json([
            'success' => true,
            'message' => 'Customer successfully added'
        ]);
    }
}
