<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use App\Models\Purchase;

//Route::get('/', function () { return view('welcome'); });

Route::get('/purchases', [PurchaseController::class, 'index']);

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/report', function() {
    $totalCustomers = DB::table('customers')->selectRaw("count(*) as total")->value("total");
    $totalPurchases = DB::table('purchases')->selectRaw("count(*) as total")->value("total");
    return view('report', compact('totalCustomers', 'totalPurchases'));
});

Route::get('/', function() {
    $customers = Customer::all(); 
    $purchases = Purchase::all();
    return view('result', compact('customers', 'purchases'));
});


