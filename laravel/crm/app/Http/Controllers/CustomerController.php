<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use DateTime;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $q = Customer::query();

        // Filter by min_id/max_id
        $min_id = $request->input('min_id');
        if ($min_id) {
            $q->where('id', '>=', $min_id);
        }
        $max_id = $request->input('max_id');
        if ($max_id) {
            $q->where('id', '<=', $max_id);
        }
        
        // Filter by created_at
        $min_date = $request->input('min_date');
        if ($min_date) {
            $q->where('created_at', '>=', new DateTime($min_date));
        }
        $max_date  = $request->input('max_date');
        if ($max_date) {
            $q->where('created_at', '<=', new DateTime($max_date));
        }

        // Filter by total_spend
        $min_spend = $request->input('min_spend');
        if ($min_spend) {
            $q->where('total_spend', '>=', $min_spend);
        }
        $max_spend = $request->input('max_spend');
        if ($max_spend) {
            $q->where('total_spend', '<=', $max_spend);
        }

        $r = $q->get();
        return response()->json($r);
    }
}