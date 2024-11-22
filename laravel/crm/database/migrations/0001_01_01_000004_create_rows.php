<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;
use App\Models\Purchase;

use function Psy\debug;

return new class extends Migration
{

  // return true if date should is formatted as 'YYYY-MM-DD'.
  function isValidDate($dateString,$dateTime)
  {
    if ($dateTime && $dateTime->format('Y-m-d') === $dateString)
      return true;
    else 
      return false;
  }

  // return true if the customer is valid
  function validateCustomer($c)
  {
    // phone number should be formatted as 'XXX-XXX-XXXX'.
    if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $c['phone_number'])) return false;

    // customer name should only contain alphabetic characters.
    if (!preg_match('/^[a-zA-Z ]+$/', $c['name'])) return false;
    
    // email should be properly formatted.
    if (!filter_var($c['email'], FILTER_VALIDATE_EMAIL)) return false;

    // customer email should be converted to lowercase.
    $c['email'] = strtolower($c['email']);

    return true;
  }

  // Return ture if the purchase is valid.
  function validatePurchase($c)
  {
    $dateString = $c['purchase_date_string'];
    $dateTime = $c['purchase_date'];
    dump('string: ' . $dateString);
    dump('date: ' . $dateTime->format('Y-m-d'));
    if (!$this->isValidDate($c['purchase_date_string'], $c['purchase_date'])) return false;
    return true;
  }

  /**
   * Run the migrations.
   */
  public function up(): void
  {

    // Include auto generated rows.php.  containing the actual data to import.
    include '/users/julian/src/platinum.crm/data/rows.php';

    // Calculate loyalty_points
    $customers = Customer::all();
    foreach ($customers as $customer) {
      $purchases = Purchase::where('customer_id', $customer->id)->get();
      $totalAmount = 0;
      $totalItems = 0;
      if ($purchases == NULL) continue;

      foreach ($purchases as $purchase) {
        $totalItems += $purchase->quantity;
        $totalAmount += $purchase->total;
      }

      // Update the customer's total loyalty points
      $customer->loyalty_points = floor($totalItems / 10) + floor($totalAmount / 10);
      $customer->save();
    }
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::truncate('customers');
    Schema::truncate('purchases');
  }
};
