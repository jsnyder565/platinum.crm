<?php

// database test

Route::get('/', function() {
  $total = Customer::count();
  $confirmed = $total;//Customer::where('status', 'confirmed')->count();
  $unconfirmed = $total;//Customer::where('status', 'unconfirmed')->count();
  $cancelled = $total;//Customer::where('status', 'cancelled')->count();
  $bounced = $total;//Customer::where('status', 'bounced')->count();


  return view('result', compact(
    'total', 'confirmed', 'unconfirmed', 'cancelled', 'bounced'
  ));
});
