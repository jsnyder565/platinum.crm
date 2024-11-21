<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\CustomerController;

//Route::get('/', function () { return view('welcome'); });

Route::get('/purchases', [PurchasesController::class, 'index']);

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/', function() { $customers = Customer::all(); $purchases = Purchase::all(); return view('result', compact('customers', 'purchases')); });