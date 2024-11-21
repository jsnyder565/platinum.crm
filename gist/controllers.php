<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PurchasesController extends Controller
{
    public function index()
    {
        return response()->json(Purchase::all());
    }
}

class CustomerController extends Controller
{
    public function index()
    {
        return response()->json(Customer::all());
    }
}