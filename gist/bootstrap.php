<?php

function isValidDateString($dateString) {
    $dateTime = DateTime::createFromFormat('Y-m-d', $dateString);
    return $dateTime && $dateTime->format('Y-m-d') === $dateString;
}

function validateCustomer($c) {
  if (!preg_match('/^\d{3}-\d{3}-\d{4}$/', $c['phone_number'])) return false;
  if (!preg_match('/^[a-zA-Z ]+$/', $c['name'])) return false;
  if (!filter_var($c['email'], FILTER_VALIDATE_EMAIL)) return false;
  return true;
}

function validatePurchase($c) {
  if (!isValidDateString($c['date'])) return false;
  return true;
}


LaravelPlayground::loaded(function(){
  Purchase::truncate();
  Customer::truncate();

  // Add Customers
  $c = [
      'name' => 'Richard Myers',
      'email' => 'jillian25@welch.org',
      'phone_number' => '954-72-3098',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Chelsea Holmes',
      'email' => 'katrina56@hotmail.com',
      'phone_number' => '754-434-6706',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Brandon Bennett',
      'email' => 'hawkinsrichard@fry-cooper.net',
      'phone_number' => '760-832-1280',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'David Smith',
      'email' => 'rphillips@sutton-bates.com',
      'phone_number' => '219-864-5639',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Dennis Cruz',
      'email' => 'michellehenderson@gmail.com',
      'phone_number' => '970-500-2065',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Michael Johnson',
      'email' => 'carolgriffith@hotmail.com',
      'phone_number' => '929-785-9408',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Linda Krueger',
      'email' => 'curtisevans@yahoo.com',
      'phone_number' => '161-806-4114',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Carrie Jones',
      'email' => 'brittney21@stewart.com',
      'phone_number' => '685-618-9177',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Spencer Richards',
      'email' => 'ehodges@yahoo.com',
      'phone_number' => '559-956-8719',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Rebecca King',
      'email' => 'tina89@hotmail.com',
      'phone_number' => '299-956-2080',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Nancy Ferguson',
      'email' => 'greenerin@hotmail.com',
      'phone_number' => '723-164-4625',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Donald Johnson',
      'email' => 'craigbrown@mccarty.com',
      'phone_number' => '358-895-2607',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Charles Kennedy',
      'email' => 'cardenasjoshua@gmail.com',
      'phone_number' => '640-244-2348',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Christopher Smith',
      'email' => 'brownbilly@hotmail.com',
      'phone_number' => '355-536-8806',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Amanda Thomas',
      'email' => 'millerlisa@mccarthy.org',
      'phone_number' => '872-487-2447',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'David Jimenez',
      'email' => 'rickyfriedman@gmail.com',
      'phone_number' => '760-987-4856',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Caitlin Murphy',
      'email' => 'greenkeith@yahoo.com',
      'phone_number' => '339-652-3482',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Jamie Smith',
      'email' => 'paul92@yahoo.com',
      'phone_number' => '896-423-4681',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Julia Robinson',
      'email' => 'kyle41@townsend.com',
      'phone_number' => '482-656-2445',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Debra Hunter',
      'email' => 'rebecca74@gmail.com',
      'phone_number' => '496-999-3437',
      'loyalty_points' => 0,
  ];
  if (validateCustomer($c)) Customer::create($c);
  


  // Add Purchases
  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2024-07-18',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2022-01-13',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2022-03-14',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2021-09-11',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2021-11-18',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2022-02-13',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'date' => '2023-02-07',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'date' => '2022-11-06',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2020-06-04',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2021-11-12',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2024-09-02',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2021-06-01',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'date' => '2020-02-04',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2021-12-27',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-11-30',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2023-05-09',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2023-03-04',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2020-10-18',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-05-21',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-09-27',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2020-11-23',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2021-01-08',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2024-07-04',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'date' => '2020-09-15',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2020-09-27',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'date' => '2024-07-27',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2021-04-22',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-04-22',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2024-09-08',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-08-08',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'date' => '2021-12-23',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-01-24',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2021-07-20',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2020-05-20',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 5,
      'total' => 438.2,
      'date' => '2020-11-21',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2022-10-07',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2024-05-27',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2021-09-21',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2023-08-23',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-06-04',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2023-12-17',
  ];
  if (validatePurchase($p)) Purchase::create($p);

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2022-06-22',
  ];
  if (validatePurchase($p)) Purchase::create($p);

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
    $customer->loyalty_points = $totalItems + floor($totalAmount/10);
    $customer->save();
  }
  
});

