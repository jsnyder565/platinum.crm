<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Purchase;

class PurchasesController extends Controller
{
    public function index()
    {
        return response()->json(Purchase::all());
    }
}