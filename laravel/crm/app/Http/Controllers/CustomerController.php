<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $q = Customer::query();
        $min_id = $request->input('min_id');
        if ($min_id) {
            $q->where('id', '>=', $min_id);
        }
        $max_id = $request->input('max_id');
        if ($max_id) {
            $q->where('id', '<=', $max_id);
        }
        $r = $q->get();
        return response()->json($r);
    }
}