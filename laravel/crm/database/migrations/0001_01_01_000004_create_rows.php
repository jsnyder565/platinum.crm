<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;
use App\Models\Purchase;

use function Psy\debug;

return new class extends Migration
{

  function isValidDate($dateString,$dateTime)
  {
    if ($dateTime && $dateTime->format('Y-m-d') === $dateString)
      return true;
    else 
      return false;
  }

  function validateCustomer($c)
  {
    if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $c['phone_number'])) return false;
    if (!preg_match('/^[a-zA-Z ]+$/', $c['name'])) return false;
    if (!filter_var($c['email'], FILTER_VALIDATE_EMAIL)) return false;
    $c['email'] = strtolower($c['email']);
    return true;
  }

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

    // This part is auto-generated
    /******** ADD ROWS BEGIN ****/
    include '/users/julian/src/platinum.crm/data/rows.php';
    /******** ADD ROWS END ******/


    //DB::update('update customers as c set c.loyalty_points = (select count(p.id) DIV 10 + sum(p.total) DIV 1 from purchases as p where p.date >= 2022-01-01 and p.customer_id = c.id)');
    $customers = Customer::all();

    foreach ($customers as $customer) {
      $purchases = Purchase::where('customer_id', $customer->id)->get();
      //$purchases = $customer->purchases; // Assuming a 'purchases' relationship
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
