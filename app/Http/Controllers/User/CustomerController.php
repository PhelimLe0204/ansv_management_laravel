<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index(Request $request) {
        $customers = Customer::select('id', 'customer', 'created_at', 'updated_at')->where('enabled',1)->get();
        $customer_stop = Customer::select('id', 'customer', 'created_at', 'updated_at')->where('enabled',0)->get();
        return view('user.customer.customer_index', compact('customers','customer_stop'));
    }
}
