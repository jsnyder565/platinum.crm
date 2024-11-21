<?php

// database test

Route::get('/purchases', [PurchasesController::class, 'index']);

Route::get('/customers', [CustomerController::class, 'index']);

Route::get('/', function() {
  $customers = Customer::all();
  $purchases = Purchase::all();
  return view('result', compact('customers', 'purchases'));
});