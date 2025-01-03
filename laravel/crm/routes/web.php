<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use App\Models\Purchase;

// Purchase API
Route::get('/purchases', [PurchaseController::class, 'index']);

// Customer API
Route::get('/customers', [CustomerController::class, 'index']);

// Raw database view
Route::get('/', function() {
    $customers = Customer::all(); 
    $purchases = Purchase::all();
    return view('result', compact('customers', 'purchases'));
});

// Month by Month report
Route::get('/report', function() {
    $totalCustomers = DB::table('customers')->selectRaw("count(*) as total")->value("total");
    $totalPurchases = DB::table('purchases')->selectRaw("count(*) as total")->value("total");
    $months = DB::select(<<<SQL
        select
            year||'-'||month as month,
            total_customers,
            floor(point_dollars/10) + floor(point_items/10)*10 as total_points,
            average_spend, total_items, total_revenue
        from 
        (
        SELECT
            strftime('%Y', p.purchase_date) AS year,
            strftime('%m', p.purchase_date) AS month,
            COUNT(DISTINCT c.id) AS total_customers,
            SUM(
                case 
                when p.purchase_date_string>='2022-01-01 00:00:00' THEN p.quantity else 0
                end
            ) AS point_items,
            SUM(
                case 
                when p.purchase_date_string>='2022-01-01 00:00:00' THEN p.total else 0
                end
            ) AS point_dollars,
            ROUND(AVG(p.total),2) AS average_spend,
            SUM(ROUND(p.quantity, 0)) as total_items,
            SUM(p.total) as total_revenue
        FROM purchases p
        INNER JOIN customers c ON p.customer_id = c.id
        GROUP BY year, month
        ORDER BY year ASC, month ASC
        ) x;
        SQL
    );
    return view('report', compact('totalCustomers', 'totalPurchases', 'months'));
});

