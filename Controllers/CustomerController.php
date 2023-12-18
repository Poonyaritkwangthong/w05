<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('customer.index', ['customers' => $customers]);
    }
}
