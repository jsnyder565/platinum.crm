<?php

use App\Models\Customer;
use App\Models\Purchase;

  $c = [
      'name' => 'Richard Myers',
      'email' => 'jillian25@welch.org',
      'phone_number' => '954-772-3098',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Chelsea Holmes',
      'email' => 'katrina56@hotmail.com',
      'phone_number' => '754-434-6706',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Brandon Bennett',
      'email' => 'hawkinsrichard@fry-cooper.net',
      'phone_number' => '760-832-1280',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'David Smith',
      'email' => 'rphillips@sutton-bates.com',
      'phone_number' => '219-864-5639',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Dennis Cruz',
      'email' => 'michellehenderson@gmail.com',
      'phone_number' => '970-500-2065',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Michael Johnson',
      'email' => 'carolgriffith@hotmail.com',
      'phone_number' => '929-785-9408',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Linda Krueger',
      'email' => 'curtisevans@yahoo.com',
      'phone_number' => '161-806-4114',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Carrie Jones',
      'email' => 'brittney21@stewart.com',
      'phone_number' => '685-618-9177',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Spencer Richards',
      'email' => 'ehodges@yahoo.com',
      'phone_number' => '559-956-8719',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Rebecca King',
      'email' => 'tina89@hotmail.com',
      'phone_number' => '299-956-2080',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Nancy Ferguson',
      'email' => 'greenerin@hotmail.com',
      'phone_number' => '723-164-4625',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Donald Johnson',
      'email' => 'craigbrown@mccarty.com',
      'phone_number' => '358-895-2607',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Charles Kennedy',
      'email' => 'cardenasjoshua@gmail.com',
      'phone_number' => '640-244-2348',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Christopher Smith',
      'email' => 'brownbilly@hotmail.com',
      'phone_number' => '355-536-8806',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Amanda Thomas',
      'email' => 'millerlisa@mccarthy.org',
      'phone_number' => '872-487-2447',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'David Jimenez',
      'email' => 'rickyfriedman@gmail.com',
      'phone_number' => '760-987-4856',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Caitlin Murphy',
      'email' => 'greenkeith@yahoo.com',
      'phone_number' => '339-652-3482',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Jamie Smith',
      'email' => 'paul92@yahoo.com',
      'phone_number' => '896-423-4681',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Julia Robinson',
      'email' => 'kyle41@townsend.com',
      'phone_number' => '482-656-2445',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = [
      'name' => 'Debra Hunter',
      'email' => 'rebecca74@gmail.com',
      'phone_number' => '496-999-3437',
      'loyalty_points' => 0,
      'total_spend' => 0,
  ];
  if ($this->validateCustomer($c)) Customer::create($c);
  

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2024-07-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-18');
    $p->purchase_date_string = '2024-07-18';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'purchase_date_string' => '2022-01-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-13');
    $p->purchase_date_string = '2022-01-13';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'purchase_date_string' => '2022-03-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-14');
    $p->purchase_date_string = '2022-03-14';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2021-09-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-09-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-09-11');
    $p->purchase_date_string = '2021-09-11';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'purchase_date_string' => '2021-11-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-18');
    $p->purchase_date_string = '2021-11-18';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2022-02-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-13');
    $p->purchase_date_string = '2022-02-13';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'purchase_date_string' => '2023-02-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-07');
    $p->purchase_date_string = '2023-02-07';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'purchase_date_string' => '2022-11-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-06');
    $p->purchase_date_string = '2022-11-06';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'purchase_date_string' => '2020-06-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-04');
    $p->purchase_date_string = '2020-06-04';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'purchase_date_string' => '2021-11-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-12');
    $p->purchase_date_string = '2021-11-12';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2024-09-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-02');
    $p->purchase_date_string = '2024-09-02';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2021-06-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-01');
    $p->purchase_date_string = '2021-06-01';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'purchase_date_string' => '2020-02-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-04');
    $p->purchase_date_string = '2020-02-04';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'purchase_date_string' => '2021-12-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-12-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-12-27');
    $p->purchase_date_string = '2021-12-27';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'purchase_date_string' => '2021-11-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-30');
    $p->purchase_date_string = '2021-11-30';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2023-05-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-09');
    $p->purchase_date_string = '2023-05-09';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2023-03-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-04');
    $p->purchase_date_string = '2023-03-04';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2020-10-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-18');
    $p->purchase_date_string = '2020-10-18';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2022-05-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-05-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-05-21');
    $p->purchase_date_string = '2022-05-21';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2022-09-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-27');
    $p->purchase_date_string = '2022-09-27';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'purchase_date_string' => '2020-11-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-23');
    $p->purchase_date_string = '2020-11-23';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'purchase_date_string' => '2021-01-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-08');
    $p->purchase_date_string = '2021-01-08';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'purchase_date_string' => '2024-07-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-04');
    $p->purchase_date_string = '2024-07-04';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'purchase_date_string' => '2020-09-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-09-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-09-15');
    $p->purchase_date_string = '2020-09-15';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2020-09-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-09-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-09-27');
    $p->purchase_date_string = '2020-09-27';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'purchase_date_string' => '2024-07-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-27');
    $p->purchase_date_string = '2024-07-27';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2021-04-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-22');
    $p->purchase_date_string = '2021-04-22';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2022-04-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-22');
    $p->purchase_date_string = '2022-04-22';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2024-09-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-08');
    $p->purchase_date_string = '2024-09-08';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2023-08-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-08');
    $p->purchase_date_string = '2023-08-08';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'purchase_date_string' => '2021-12-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-12-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-12-23');
    $p->purchase_date_string = '2021-12-23';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'purchase_date_string' => '2021-01-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-24');
    $p->purchase_date_string = '2021-01-24';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'purchase_date_string' => '2021-07-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-20');
    $p->purchase_date_string = '2021-07-20';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'purchase_date_string' => '2020-05-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-20');
    $p->purchase_date_string = '2020-05-20';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 5,
      'total' => 438.2,
      'purchase_date_string' => '2020-11-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-21');
    $p->purchase_date_string = '2020-11-21';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2022-10-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-07');
    $p->purchase_date_string = '2022-10-07';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2024-05-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-27');
    $p->purchase_date_string = '2024-05-27';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2021-09-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-09-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-09-21');
    $p->purchase_date_string = '2021-09-21';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2023-08-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-23');
    $p->purchase_date_string = '2023-08-23';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2023-06-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-04');
    $p->purchase_date_string = '2023-06-04';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'purchase_date_string' => '2023-12-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-17');
    $p->purchase_date_string = '2023-12-17';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2022-06-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-22');
    $p->purchase_date_string = '2022-06-22';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2020-02-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-01');
    $p->purchase_date_string = '2020-02-01';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'purchase_date_string' => '2022-11-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-03');
    $p->purchase_date_string = '2022-11-03';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2023-06-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-24');
    $p->purchase_date_string = '2023-06-24';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'purchase_date_string' => '2023-03-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-10');
    $p->purchase_date_string = '2023-03-10';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'purchase_date_string' => '2023-06-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-09');
    $p->purchase_date_string = '2023-06-09';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'purchase_date_string' => '2022-01-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-21');
    $p->purchase_date_string = '2022-01-21';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'purchase_date_string' => '2021-07-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-18');
    $p->purchase_date_string = '2021-07-18';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'purchase_date_string' => '2023-08-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-17');
    $p->purchase_date_string = '2023-08-17';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2020-03-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-06');
    $p->purchase_date_string = '2020-03-06';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2022-11-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-19');
    $p->purchase_date_string = '2022-11-19';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2020-08-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-08-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-08-13');
    $p->purchase_date_string = '2020-08-13';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2020-03-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-03');
    $p->purchase_date_string = '2020-03-03';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'purchase_date_string' => '2022-12-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-13');
    $p->purchase_date_string = '2022-12-13';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'purchase_date_string' => '2022-03-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-16');
    $p->purchase_date_string = '2022-03-16';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2021-03-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-14');
    $p->purchase_date_string = '2021-03-14';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2023-01-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-02');
    $p->purchase_date_string = '2023-01-02';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2022-10-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-20');
    $p->purchase_date_string = '2022-10-20';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'purchase_date_string' => '2024-05-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-13');
    $p->purchase_date_string = '2024-05-13';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'purchase_date_string' => '2022-03-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-28');
    $p->purchase_date_string = '2022-03-28';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2020-01-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-17');
    $p->purchase_date_string = '2020-01-17';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'purchase_date_string' => '2022-10-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-01');
    $p->purchase_date_string = '2022-10-01';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'purchase_date_string' => '2022-08-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-12');
    $p->purchase_date_string = '2022-08-12';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2021-01-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-27');
    $p->purchase_date_string = '2021-01-27';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'purchase_date_string' => '2020-01-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-12');
    $p->purchase_date_string = '2020-01-12';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'purchase_date_string' => '2022-12-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-08');
    $p->purchase_date_string = '2022-12-08';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2021-07-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-25');
    $p->purchase_date_string = '2021-07-25';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2024-04-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-22');
    $p->purchase_date_string = '2024-04-22';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'purchase_date_string' => '2023-05-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-19');
    $p->purchase_date_string = '2023-05-19';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2022-06-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-21');
    $p->purchase_date_string = '2022-06-21';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'purchase_date_string' => '2023-11-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-17');
    $p->purchase_date_string = '2023-11-17';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2023-02-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-22');
    $p->purchase_date_string = '2023-02-22';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2022-10-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-19');
    $p->purchase_date_string = '2022-10-19';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'purchase_date_string' => '2021-06-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-19');
    $p->purchase_date_string = '2021-06-19';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2022-07-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-14');
    $p->purchase_date_string = '2022-07-14';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'purchase_date_string' => '2023-05-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-09');
    $p->purchase_date_string = '2023-05-09';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2022-07-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-16');
    $p->purchase_date_string = '2022-07-16';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 3,
      'total' => 40.29,
      'purchase_date_string' => '2022-01-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-14');
    $p->purchase_date_string = '2022-01-14';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2024-04-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-11');
    $p->purchase_date_string = '2024-04-11';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2022-03-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-31');
    $p->purchase_date_string = '2022-03-31';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2023-07-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-07-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-07-15');
    $p->purchase_date_string = '2023-07-15';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'purchase_date_string' => '2022-04-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-11');
    $p->purchase_date_string = '2022-04-11';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'purchase_date_string' => '2020-10-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-31');
    $p->purchase_date_string = '2020-10-31';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'purchase_date_string' => '2021-04-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-07');
    $p->purchase_date_string = '2021-04-07';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'purchase_date_string' => '2023-03-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-31');
    $p->purchase_date_string = '2023-03-31';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2022-08-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-14');
    $p->purchase_date_string = '2022-08-14';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2021-04-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-16');
    $p->purchase_date_string = '2021-04-16';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2023-08-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-29');
    $p->purchase_date_string = '2023-08-29';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2023-07-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-07-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-07-07');
    $p->purchase_date_string = '2023-07-07';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2020-04-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-17');
    $p->purchase_date_string = '2020-04-17';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2022-12-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-19');
    $p->purchase_date_string = '2022-12-19';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'purchase_date_string' => '2024-03-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-07');
    $p->purchase_date_string = '2024-03-07';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2020-05-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-08');
    $p->purchase_date_string = '2020-05-08';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2024-06-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-11');
    $p->purchase_date_string = '2024-06-11';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2023-06-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-14');
    $p->purchase_date_string = '2023-06-14';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'purchase_date_string' => '2022-07-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-12');
    $p->purchase_date_string = '2022-07-12';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2022-06-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-26');
    $p->purchase_date_string = '2022-06-26';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2020-03-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-13');
    $p->purchase_date_string = '2020-03-13';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2024-02-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-28');
    $p->purchase_date_string = '2024-02-28';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2021-10-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-27');
    $p->purchase_date_string = '2021-10-27';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'purchase_date_string' => '2021-04-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-01');
    $p->purchase_date_string = '2021-04-01';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2022-01-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-06');
    $p->purchase_date_string = '2022-01-06';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'purchase_date_string' => '2021-11-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-25');
    $p->purchase_date_string = '2021-11-25';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2023-08-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-19');
    $p->purchase_date_string = '2023-08-19';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'purchase_date_string' => '2021-06-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-20');
    $p->purchase_date_string = '2021-06-20';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2022-12-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-18');
    $p->purchase_date_string = '2022-12-18';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'purchase_date_string' => '2020-05-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-08');
    $p->purchase_date_string = '2020-05-08';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2024-05-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-13');
    $p->purchase_date_string = '2024-05-13';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'purchase_date_string' => '2020-05-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-09');
    $p->purchase_date_string = '2020-05-09';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'purchase_date_string' => '2023-08-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-02');
    $p->purchase_date_string = '2023-08-02';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'purchase_date_string' => '2021-06-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-23');
    $p->purchase_date_string = '2021-06-23';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2021-06-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-01');
    $p->purchase_date_string = '2021-06-01';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'purchase_date_string' => '2021-03-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-16');
    $p->purchase_date_string = '2021-03-16';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2022-05-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-05-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-05-21');
    $p->purchase_date_string = '2022-05-21';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2023-08-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-21');
    $p->purchase_date_string = '2023-08-21';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'purchase_date_string' => '2023-05-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-07');
    $p->purchase_date_string = '2023-05-07';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'purchase_date_string' => '2023-01-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-28');
    $p->purchase_date_string = '2023-01-28';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2023-11-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-11');
    $p->purchase_date_string = '2023-11-11';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'purchase_date_string' => '2021-06-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-17');
    $p->purchase_date_string = '2021-06-17';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'purchase_date_string' => '2024-05-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-10');
    $p->purchase_date_string = '2024-05-10';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2024-02-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-02');
    $p->purchase_date_string = '2024-02-02';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'purchase_date_string' => '2022-03-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-11');
    $p->purchase_date_string = '2022-03-11';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'purchase_date_string' => '2024-09-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-29');
    $p->purchase_date_string = '2024-09-29';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'purchase_date_string' => '2021-08-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-08-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-08-03');
    $p->purchase_date_string = '2021-08-03';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2021-10-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-21');
    $p->purchase_date_string = '2021-10-21';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2023-08-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-24');
    $p->purchase_date_string = '2023-08-24';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2024-04-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-07');
    $p->purchase_date_string = '2024-04-07';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2023-03-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-10');
    $p->purchase_date_string = '2023-03-10';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'purchase_date_string' => '2023-12-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-12');
    $p->purchase_date_string = '2023-12-12';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'purchase_date_string' => '2020-02-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-06');
    $p->purchase_date_string = '2020-02-06';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2020-06-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-14');
    $p->purchase_date_string = '2020-06-14';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2024-03-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-22');
    $p->purchase_date_string = '2024-03-22';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2022-07-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-08');
    $p->purchase_date_string = '2022-07-08';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2020-07-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-16');
    $p->purchase_date_string = '2020-07-16';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2023-02-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-21');
    $p->purchase_date_string = '2023-02-21';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2023-12-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-26');
    $p->purchase_date_string = '2023-12-26';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 2,
      'total' => 81.06,
      'purchase_date_string' => '2021-03-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-24');
    $p->purchase_date_string = '2021-03-24';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2024-06-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-16');
    $p->purchase_date_string = '2024-06-16';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2021-11-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-09');
    $p->purchase_date_string = '2021-11-09';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2022-10-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-15');
    $p->purchase_date_string = '2022-10-15';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2022-06-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-26');
    $p->purchase_date_string = '2022-06-26';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2020-02-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-06');
    $p->purchase_date_string = '2020-02-06';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'purchase_date_string' => '2021-10-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-12');
    $p->purchase_date_string = '2021-10-12';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2024-08-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-27');
    $p->purchase_date_string = '2024-08-27';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'purchase_date_string' => '2023-03-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-12');
    $p->purchase_date_string = '2023-03-12';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'purchase_date_string' => '2021-07-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-02');
    $p->purchase_date_string = '2021-07-02';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'purchase_date_string' => '2024-03-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-29');
    $p->purchase_date_string = '2024-03-29';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2021-01-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-21');
    $p->purchase_date_string = '2021-01-21';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2022-11-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-08');
    $p->purchase_date_string = '2022-11-08';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2023-09-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-03');
    $p->purchase_date_string = '2023-09-03';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'purchase_date_string' => '2021-01-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-08');
    $p->purchase_date_string = '2021-01-08';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2023-10-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-13');
    $p->purchase_date_string = '2023-10-13';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'purchase_date_string' => '2021-10-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-13');
    $p->purchase_date_string = '2021-10-13';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'purchase_date_string' => '2024-02-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-28');
    $p->purchase_date_string = '2024-02-28';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2021-12-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-12-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-12-01');
    $p->purchase_date_string = '2021-12-01';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'purchase_date_string' => '2021-05-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-09');
    $p->purchase_date_string = '2021-05-09';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2021-10-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-22');
    $p->purchase_date_string = '2021-10-22';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2023-11-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-20');
    $p->purchase_date_string = '2023-11-20';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2022-06-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-23');
    $p->purchase_date_string = '2022-06-23';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'purchase_date_string' => '2020-01-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-24');
    $p->purchase_date_string = '2020-01-24';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2021-02-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-02-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-02-15');
    $p->purchase_date_string = '2021-02-15';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2022-02-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-08');
    $p->purchase_date_string = '2022-02-08';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2023-09-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-17');
    $p->purchase_date_string = '2023-09-17';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2024-08-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-31');
    $p->purchase_date_string = '2024-08-31';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'purchase_date_string' => '2023-11-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-21');
    $p->purchase_date_string = '2023-11-21';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2022-12-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-17');
    $p->purchase_date_string = '2022-12-17';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'purchase_date_string' => '2024-05-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-07');
    $p->purchase_date_string = '2024-05-07';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 2,
      'total' => 143.06,
      'purchase_date_string' => '2022-04-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-19');
    $p->purchase_date_string = '2022-04-19';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'purchase_date_string' => '2023-06-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-17');
    $p->purchase_date_string = '2023-06-17';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2020-11-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-07');
    $p->purchase_date_string = '2020-11-07';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2022-04-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-02');
    $p->purchase_date_string = '2022-04-02';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'purchase_date_string' => '2023-05-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-21');
    $p->purchase_date_string = '2023-05-21';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2020-04-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-29');
    $p->purchase_date_string = '2020-04-29';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 4,
      'total' => 381.8,
      'purchase_date_string' => '2024-07-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-05');
    $p->purchase_date_string = '2024-07-05';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'purchase_date_string' => '2021-06-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-03');
    $p->purchase_date_string = '2021-06-03';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'purchase_date_string' => '2024-09-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-25');
    $p->purchase_date_string = '2024-09-25';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2021-01-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-26');
    $p->purchase_date_string = '2021-01-26';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'purchase_date_string' => '2022-03-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-09');
    $p->purchase_date_string = '2022-03-09';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2022-02-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-04');
    $p->purchase_date_string = '2022-02-04';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2020-05-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-24');
    $p->purchase_date_string = '2020-05-24';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 2,
      'total' => 124.7,
      'purchase_date_string' => '2022-12-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-29');
    $p->purchase_date_string = '2022-12-29';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2021-01-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-25');
    $p->purchase_date_string = '2021-01-25';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2022-06-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-20');
    $p->purchase_date_string = '2022-06-20';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'purchase_date_string' => '2021-08-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-08-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-08-08');
    $p->purchase_date_string = '2021-08-08';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'purchase_date_string' => '2022-01-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-05');
    $p->purchase_date_string = '2022-01-05';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2020-04-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-09');
    $p->purchase_date_string = '2020-04-09';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2024-08-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-17');
    $p->purchase_date_string = '2024-08-17';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'purchase_date_string' => '2021-10-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-31');
    $p->purchase_date_string = '2021-10-31';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2023-11-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-22');
    $p->purchase_date_string = '2023-11-22';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2022-04-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-03');
    $p->purchase_date_string = '2022-04-03';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'purchase_date_string' => '2023-04-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-04-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-04-03');
    $p->purchase_date_string = '2023-04-03';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2022-09-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-29');
    $p->purchase_date_string = '2022-09-29';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2023-12-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-31');
    $p->purchase_date_string = '2023-12-31';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'purchase_date_string' => '2022-11-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-30');
    $p->purchase_date_string = '2022-11-30';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 2,
      'total' => 66.68,
      'purchase_date_string' => '2022-08-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-29');
    $p->purchase_date_string = '2022-08-29';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2022-11-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-25');
    $p->purchase_date_string = '2022-11-25';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2024-04-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-14');
    $p->purchase_date_string = '2024-04-14';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2021-10-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-31');
    $p->purchase_date_string = '2021-10-31';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2022-06-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-13');
    $p->purchase_date_string = '2022-06-13';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2022-07-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-23');
    $p->purchase_date_string = '2022-07-23';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2021-07-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-01');
    $p->purchase_date_string = '2021-07-01';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2024-10-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-10');
    $p->purchase_date_string = '2024-10-10';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'purchase_date_string' => '2022-01-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-13');
    $p->purchase_date_string = '2022-01-13';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2022-09-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-04');
    $p->purchase_date_string = '2022-09-04';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2021-10-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-28');
    $p->purchase_date_string = '2021-10-28';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2021-03-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-17');
    $p->purchase_date_string = '2021-03-17';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2024-03-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-20');
    $p->purchase_date_string = '2024-03-20';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2024-05-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-10');
    $p->purchase_date_string = '2024-05-10';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'purchase_date_string' => '2023-05-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-17');
    $p->purchase_date_string = '2023-05-17';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2022-11-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-04');
    $p->purchase_date_string = '2022-11-04';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 3,
      'total' => 240.09,
      'purchase_date_string' => '2022-02-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-05');
    $p->purchase_date_string = '2022-02-05';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 2,
      'total' => 81.06,
      'purchase_date_string' => '2021-03-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-05');
    $p->purchase_date_string = '2021-03-05';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2023-09-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-29');
    $p->purchase_date_string = '2023-09-29';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'purchase_date_string' => '2023-08-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-07');
    $p->purchase_date_string = '2023-08-07';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'purchase_date_string' => '2020-06-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-30');
    $p->purchase_date_string = '2020-06-30';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2023-12-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-16');
    $p->purchase_date_string = '2023-12-16';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'purchase_date_string' => '2021-07-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-12');
    $p->purchase_date_string = '2021-07-12';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'purchase_date_string' => '2022-12-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-27');
    $p->purchase_date_string = '2022-12-27';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'purchase_date_string' => '2023-08-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-25');
    $p->purchase_date_string = '2023-08-25';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'purchase_date_string' => '2023-07-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-07-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-07-26');
    $p->purchase_date_string = '2023-07-26';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'purchase_date_string' => '2024-06-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-17');
    $p->purchase_date_string = '2024-06-17';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'purchase_date_string' => '2023-10-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-16');
    $p->purchase_date_string = '2023-10-16';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'purchase_date_string' => '2020-06-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-01');
    $p->purchase_date_string = '2020-06-01';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'purchase_date_string' => '2021-07-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-03');
    $p->purchase_date_string = '2021-07-03';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2023-01-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-29');
    $p->purchase_date_string = '2023-01-29';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'purchase_date_string' => '2022-02-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-12');
    $p->purchase_date_string = '2022-02-12';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2022-04-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-03');
    $p->purchase_date_string = '2022-04-03';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2024-05-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-26');
    $p->purchase_date_string = '2024-05-26';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'purchase_date_string' => '2024-09-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-15');
    $p->purchase_date_string = '2024-09-15';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'purchase_date_string' => '2021-06-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-14');
    $p->purchase_date_string = '2021-06-14';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 3,
      'total' => 53.67,
      'purchase_date_string' => '2020-03-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-23');
    $p->purchase_date_string = '2020-03-23';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2023-10-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-20');
    $p->purchase_date_string = '2023-10-20';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'purchase_date_string' => '2022-06-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-14');
    $p->purchase_date_string = '2022-06-14';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2021-10-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-15');
    $p->purchase_date_string = '2021-10-15';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'purchase_date_string' => '2021-07-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-05');
    $p->purchase_date_string = '2021-07-05';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 5,
      'total' => 438.2,
      'purchase_date_string' => '2020-06-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-21');
    $p->purchase_date_string = '2020-06-21';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2022-04-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-06');
    $p->purchase_date_string = '2022-04-06';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'purchase_date_string' => '2021-03-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-16');
    $p->purchase_date_string = '2021-03-16';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2022-04-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-20');
    $p->purchase_date_string = '2022-04-20';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'purchase_date_string' => '2021-10-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-20');
    $p->purchase_date_string = '2021-10-20';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2022-08-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-08');
    $p->purchase_date_string = '2022-08-08';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2020-01-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-01');
    $p->purchase_date_string = '2020-01-01';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'purchase_date_string' => '2023-05-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-13');
    $p->purchase_date_string = '2023-05-13';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 4,
      'total' => 381.8,
      'purchase_date_string' => '2021-10-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-04');
    $p->purchase_date_string = '2021-10-04';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2022-11-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-29');
    $p->purchase_date_string = '2022-11-29';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'purchase_date_string' => '2023-04-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-04-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-04-07');
    $p->purchase_date_string = '2023-04-07';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 2,
      'total' => 143.06,
      'purchase_date_string' => '2022-10-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-10');
    $p->purchase_date_string = '2022-10-10';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'purchase_date_string' => '2020-10-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-13');
    $p->purchase_date_string = '2020-10-13';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'purchase_date_string' => '2023-08-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-02');
    $p->purchase_date_string = '2023-08-02';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 3,
      'total' => 53.67,
      'purchase_date_string' => '2021-11-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-13');
    $p->purchase_date_string = '2021-11-13';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2022-03-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-11');
    $p->purchase_date_string = '2022-03-11';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'purchase_date_string' => '2023-05-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-20');
    $p->purchase_date_string = '2023-05-20';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2024-07-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-25');
    $p->purchase_date_string = '2024-07-25';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'purchase_date_string' => '2021-05-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-21');
    $p->purchase_date_string = '2021-05-21';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2021-04-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-06');
    $p->purchase_date_string = '2021-04-06';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 3,
      'total' => 53.67,
      'purchase_date_string' => '2023-06-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-24');
    $p->purchase_date_string = '2023-06-24';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2024-10-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-02');
    $p->purchase_date_string = '2024-10-02';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2023-11-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-13');
    $p->purchase_date_string = '2023-11-13';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'purchase_date_string' => '2023-05-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-22');
    $p->purchase_date_string = '2023-05-22';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2020-12-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-10');
    $p->purchase_date_string = '2020-12-10';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2023-03-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-31');
    $p->purchase_date_string = '2023-03-31';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'purchase_date_string' => '2024-04-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-25');
    $p->purchase_date_string = '2024-04-25';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'purchase_date_string' => '2021-03-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-21');
    $p->purchase_date_string = '2021-03-21';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'purchase_date_string' => '2020-11-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-11');
    $p->purchase_date_string = '2020-11-11';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2020-04-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-07');
    $p->purchase_date_string = '2020-04-07';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2022-09-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-20');
    $p->purchase_date_string = '2022-09-20';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2021-11-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-01');
    $p->purchase_date_string = '2021-11-01';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'purchase_date_string' => '2024-07-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-30');
    $p->purchase_date_string = '2024-07-30';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2024-09-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-22');
    $p->purchase_date_string = '2024-09-22';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'purchase_date_string' => '2021-05-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-19');
    $p->purchase_date_string = '2021-05-19';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'purchase_date_string' => '2024-05-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-07');
    $p->purchase_date_string = '2024-05-07';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 3,
      'total' => 240.09,
      'purchase_date_string' => '2021-06-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-06');
    $p->purchase_date_string = '2021-06-06';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'purchase_date_string' => '2022-01-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-11');
    $p->purchase_date_string = '2022-01-11';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2021-10-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-21');
    $p->purchase_date_string = '2021-10-21';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2023-10-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-13');
    $p->purchase_date_string = '2023-10-13';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2021-05-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-27');
    $p->purchase_date_string = '2021-05-27';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2023-03-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-12');
    $p->purchase_date_string = '2023-03-12';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'purchase_date_string' => '2021-12-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-12-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-12-26');
    $p->purchase_date_string = '2021-12-26';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2023-11-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-23');
    $p->purchase_date_string = '2023-11-23';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2024-09-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-14');
    $p->purchase_date_string = '2024-09-14';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'purchase_date_string' => '2023-05-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-06');
    $p->purchase_date_string = '2023-05-06';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2020-07-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-11');
    $p->purchase_date_string = '2020-07-11';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'purchase_date_string' => '2023-12-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-12');
    $p->purchase_date_string = '2023-12-12';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2022-01-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-05');
    $p->purchase_date_string = '2022-01-05';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'purchase_date_string' => '2021-05-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-23');
    $p->purchase_date_string = '2021-05-23';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2020-01-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-08');
    $p->purchase_date_string = '2020-01-08';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'purchase_date_string' => '2022-12-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-20');
    $p->purchase_date_string = '2022-12-20';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'purchase_date_string' => '2024-03-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-04');
    $p->purchase_date_string = '2024-03-04';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2020-09-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-09-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-09-15');
    $p->purchase_date_string = '2020-09-15';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'purchase_date_string' => '2023-06-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-03');
    $p->purchase_date_string = '2023-06-03';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2021-07-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-05');
    $p->purchase_date_string = '2021-07-05';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2021-10-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-18');
    $p->purchase_date_string = '2021-10-18';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2020-03-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-03');
    $p->purchase_date_string = '2020-03-03';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2024-06-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-24');
    $p->purchase_date_string = '2024-06-24';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2024-02-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-15');
    $p->purchase_date_string = '2024-02-15';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2020-06-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-20');
    $p->purchase_date_string = '2020-06-20';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'purchase_date_string' => '2024-05-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-16');
    $p->purchase_date_string = '2024-05-16';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2024-10-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-31');
    $p->purchase_date_string = '2024-10-31';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2020-01-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-14');
    $p->purchase_date_string = '2020-01-14';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2020-04-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-03');
    $p->purchase_date_string = '2020-04-03';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2022-01-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-08');
    $p->purchase_date_string = '2022-01-08';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2020-06-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-20');
    $p->purchase_date_string = '2020-06-20';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'purchase_date_string' => '2024-04-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-07');
    $p->purchase_date_string = '2024-04-07';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'purchase_date_string' => '2023-11-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-27');
    $p->purchase_date_string = '2023-11-27';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2023-02-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-06');
    $p->purchase_date_string = '2023-02-06';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2022-01-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-07');
    $p->purchase_date_string = '2022-01-07';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'purchase_date_string' => '2023-11-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-21');
    $p->purchase_date_string = '2023-11-21';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'purchase_date_string' => '2023-09-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-09');
    $p->purchase_date_string = '2023-09-09';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'purchase_date_string' => '2024-01-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-01-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-01-20');
    $p->purchase_date_string = '2024-01-20';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2024-06-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-15');
    $p->purchase_date_string = '2024-06-15';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'purchase_date_string' => '2020-05-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-17');
    $p->purchase_date_string = '2020-05-17';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2020-06-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-29');
    $p->purchase_date_string = '2020-06-29';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'purchase_date_string' => '2024-04-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-30');
    $p->purchase_date_string = '2024-04-30';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2021-12-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-12-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-12-18');
    $p->purchase_date_string = '2021-12-18';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'purchase_date_string' => '2024-09-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-11');
    $p->purchase_date_string = '2024-09-11';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2021-10-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-15');
    $p->purchase_date_string = '2021-10-15';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2023-06-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-05');
    $p->purchase_date_string = '2023-06-05';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'purchase_date_string' => '2022-12-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-16');
    $p->purchase_date_string = '2022-12-16';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2020-09-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-09-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-09-10');
    $p->purchase_date_string = '2020-09-10';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2020-02-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-03');
    $p->purchase_date_string = '2020-02-03';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2022-11-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-01');
    $p->purchase_date_string = '2022-11-01';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'purchase_date_string' => '2024-02-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-01');
    $p->purchase_date_string = '2024-02-01';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2021-11-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-05');
    $p->purchase_date_string = '2021-11-05';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2020-04-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-26');
    $p->purchase_date_string = '2020-04-26';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2023-02-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-07');
    $p->purchase_date_string = '2023-02-07';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2022-06-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-29');
    $p->purchase_date_string = '2022-06-29';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'purchase_date_string' => '2020-06-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-25');
    $p->purchase_date_string = '2020-06-25';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'purchase_date_string' => '2022-02-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-17');
    $p->purchase_date_string = '2022-02-17';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'purchase_date_string' => '2021-10-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-04');
    $p->purchase_date_string = '2021-10-04';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'purchase_date_string' => '2020-04-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-23');
    $p->purchase_date_string = '2020-04-23';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'purchase_date_string' => '2022-09-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-11');
    $p->purchase_date_string = '2022-09-11';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'purchase_date_string' => '2022-12-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-02');
    $p->purchase_date_string = '2022-12-02';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'purchase_date_string' => '2021-10-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-22');
    $p->purchase_date_string = '2021-10-22';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'purchase_date_string' => '2020-07-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-06');
    $p->purchase_date_string = '2020-07-06';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2022-08-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-28');
    $p->purchase_date_string = '2022-08-28';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'purchase_date_string' => '2021-02-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-02-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-02-14');
    $p->purchase_date_string = '2021-02-14';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'purchase_date_string' => '2020-12-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-09');
    $p->purchase_date_string = '2020-12-09';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'purchase_date_string' => '2023-04-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-04-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-04-29');
    $p->purchase_date_string = '2023-04-29';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2021-06-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-06');
    $p->purchase_date_string = '2021-06-06';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2022-01-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-12');
    $p->purchase_date_string = '2022-01-12';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2023-11-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-21');
    $p->purchase_date_string = '2023-11-21';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2020-01-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-11');
    $p->purchase_date_string = '2020-01-11';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'purchase_date_string' => '2022-02-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-03');
    $p->purchase_date_string = '2022-02-03';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'purchase_date_string' => '2022-06-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-28');
    $p->purchase_date_string = '2022-06-28';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 1,
      'total' => 38.55,
      'purchase_date_string' => '2024-10-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-28');
    $p->purchase_date_string = '2024-10-28';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'purchase_date_string' => '2024-04-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-17');
    $p->purchase_date_string = '2024-04-17';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2022-04-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-22');
    $p->purchase_date_string = '2022-04-22';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2021-11-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-19');
    $p->purchase_date_string = '2021-11-19';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'purchase_date_string' => '2021-08-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-08-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-08-16');
    $p->purchase_date_string = '2021-08-16';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'purchase_date_string' => '2024-08-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-03');
    $p->purchase_date_string = '2024-08-03';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2020-03-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-29');
    $p->purchase_date_string = '2020-03-29';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2023-05-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-25');
    $p->purchase_date_string = '2023-05-25';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'purchase_date_string' => '2024-05-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-17');
    $p->purchase_date_string = '2024-05-17';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'purchase_date_string' => '2021-09-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-09-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-09-15');
    $p->purchase_date_string = '2021-09-15';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2021-04-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-16');
    $p->purchase_date_string = '2021-04-16';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'purchase_date_string' => '2020-12-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-02');
    $p->purchase_date_string = '2020-12-02';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2020-01-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-05');
    $p->purchase_date_string = '2020-01-05';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'purchase_date_string' => '2023-01-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-08');
    $p->purchase_date_string = '2023-01-08';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'purchase_date_string' => '2020-07-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-13');
    $p->purchase_date_string = '2020-07-13';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'purchase_date_string' => '2024-06-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-23');
    $p->purchase_date_string = '2024-06-23';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2024-03-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-19');
    $p->purchase_date_string = '2024-03-19';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'purchase_date_string' => '2023-06-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-06');
    $p->purchase_date_string = '2023-06-06';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2023-06-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-30');
    $p->purchase_date_string = '2023-06-30';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'purchase_date_string' => '2023-12-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-18');
    $p->purchase_date_string = '2023-12-18';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2024-09-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-14');
    $p->purchase_date_string = '2024-09-14';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 4,
      'total' => 381.8,
      'purchase_date_string' => '2021-04-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-02');
    $p->purchase_date_string = '2021-04-02';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2024-09-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-13');
    $p->purchase_date_string = '2024-09-13';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2020-08-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-08-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-08-18');
    $p->purchase_date_string = '2020-08-18';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 3,
      'total' => 240.09,
      'purchase_date_string' => '2024-02-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-16');
    $p->purchase_date_string = '2024-02-16';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2024-10-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-14');
    $p->purchase_date_string = '2024-10-14';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'purchase_date_string' => '2024-02-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-24');
    $p->purchase_date_string = '2024-02-24';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2024-10-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-16');
    $p->purchase_date_string = '2024-10-16';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2020-11-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-16');
    $p->purchase_date_string = '2020-11-16';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2021-05-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-04');
    $p->purchase_date_string = '2021-05-04';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2021-05-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-02');
    $p->purchase_date_string = '2021-05-02';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 2,
      'total' => 66.68,
      'purchase_date_string' => '2022-09-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-12');
    $p->purchase_date_string = '2022-09-12';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'purchase_date_string' => '2023-02-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-17');
    $p->purchase_date_string = '2023-02-17';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2022-04-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-14');
    $p->purchase_date_string = '2022-04-14';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2020-11-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-23');
    $p->purchase_date_string = '2020-11-23';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2024-05-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-05-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-05-04');
    $p->purchase_date_string = '2024-05-04';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2020-01-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-22');
    $p->purchase_date_string = '2020-01-22';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'purchase_date_string' => '2024-03-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-03');
    $p->purchase_date_string = '2024-03-03';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 2,
      'total' => 143.06,
      'purchase_date_string' => '2021-11-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-09');
    $p->purchase_date_string = '2021-11-09';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'purchase_date_string' => '2020-04-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-27');
    $p->purchase_date_string = '2020-04-27';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2020-03-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-29');
    $p->purchase_date_string = '2020-03-29';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'purchase_date_string' => '2020-10-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-03');
    $p->purchase_date_string = '2020-10-03';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'purchase_date_string' => '2021-07-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-11');
    $p->purchase_date_string = '2021-07-11';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'purchase_date_string' => '2023-06-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-15');
    $p->purchase_date_string = '2023-06-15';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2022-07-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-30');
    $p->purchase_date_string = '2022-07-30';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2023-10-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-23');
    $p->purchase_date_string = '2023-10-23';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2020-11-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-13');
    $p->purchase_date_string = '2020-11-13';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2021-07-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-17');
    $p->purchase_date_string = '2021-07-17';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'purchase_date_string' => '2020-01-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-07');
    $p->purchase_date_string = '2020-01-07';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'purchase_date_string' => '2020-02-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-28');
    $p->purchase_date_string = '2020-02-28';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2020-09-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-09-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-09-21');
    $p->purchase_date_string = '2020-09-21';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2023-08-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-05');
    $p->purchase_date_string = '2023-08-05';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2021-10-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-20');
    $p->purchase_date_string = '2021-10-20';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'purchase_date_string' => '2022-06-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-04');
    $p->purchase_date_string = '2022-06-04';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'purchase_date_string' => '2021-11-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-22');
    $p->purchase_date_string = '2021-11-22';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2024-01-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-01-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-01-14');
    $p->purchase_date_string = '2024-01-14';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2022-02-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-07');
    $p->purchase_date_string = '2022-02-07';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'purchase_date_string' => '2023-01-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-13');
    $p->purchase_date_string = '2023-01-13';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2024-08-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-23');
    $p->purchase_date_string = '2024-08-23';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'purchase_date_string' => '2024-04-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-18');
    $p->purchase_date_string = '2024-04-18';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'purchase_date_string' => '2020-01-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-24');
    $p->purchase_date_string = '2020-01-24';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2023-09-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-25');
    $p->purchase_date_string = '2023-09-25';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2021-10-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-23');
    $p->purchase_date_string = '2021-10-23';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2023-12-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-26');
    $p->purchase_date_string = '2023-12-26';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2024-10-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-29');
    $p->purchase_date_string = '2024-10-29';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2021-06-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-15');
    $p->purchase_date_string = '2021-06-15';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2022-11-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-14');
    $p->purchase_date_string = '2022-11-14';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2022-10-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-24');
    $p->purchase_date_string = '2022-10-24';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'purchase_date_string' => '2020-07-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-13');
    $p->purchase_date_string = '2020-07-13';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'purchase_date_string' => '2022-01-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-01-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-01-31');
    $p->purchase_date_string = '2022-01-31';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'purchase_date_string' => '2023-06-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-16');
    $p->purchase_date_string = '2023-06-16';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'purchase_date_string' => '2022-04-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-26');
    $p->purchase_date_string = '2022-04-26';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2023-06-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-28');
    $p->purchase_date_string = '2023-06-28';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2021-12-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-12-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-12-19');
    $p->purchase_date_string = '2021-12-19';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 2,
      'total' => 124.7,
      'purchase_date_string' => '2020-07-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-20');
    $p->purchase_date_string = '2020-07-20';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2023-06-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-27');
    $p->purchase_date_string = '2023-06-27';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2020-01-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-05');
    $p->purchase_date_string = '2020-01-05';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'purchase_date_string' => '2022-04-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-24');
    $p->purchase_date_string = '2022-04-24';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2022-04-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-18');
    $p->purchase_date_string = '2022-04-18';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'purchase_date_string' => '2022-12-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-30');
    $p->purchase_date_string = '2022-12-30';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2023-06-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-21');
    $p->purchase_date_string = '2023-06-21';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2024-04-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-02');
    $p->purchase_date_string = '2024-04-02';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2023-10-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-02');
    $p->purchase_date_string = '2023-10-02';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2022-02-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-08');
    $p->purchase_date_string = '2022-02-08';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2020-06-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-11');
    $p->purchase_date_string = '2020-06-11';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2023-10-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-25');
    $p->purchase_date_string = '2023-10-25';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2020-01-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-31');
    $p->purchase_date_string = '2020-01-31';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'purchase_date_string' => '2022-05-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-05-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-05-25');
    $p->purchase_date_string = '2022-05-25';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'purchase_date_string' => '2022-10-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-19');
    $p->purchase_date_string = '2022-10-19';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'purchase_date_string' => '2021-04-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-08');
    $p->purchase_date_string = '2021-04-08';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'purchase_date_string' => '2021-03-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-09');
    $p->purchase_date_string = '2021-03-09';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2020-10-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-27');
    $p->purchase_date_string = '2020-10-27';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'purchase_date_string' => '2024-02-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-12');
    $p->purchase_date_string = '2024-02-12';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'purchase_date_string' => '2021-04-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-16');
    $p->purchase_date_string = '2021-04-16';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2022-09-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-06');
    $p->purchase_date_string = '2022-09-06';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'purchase_date_string' => '2022-09-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-13');
    $p->purchase_date_string = '2022-09-13';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 3,
      'total' => 218.49,
      'purchase_date_string' => '2023-11-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-30');
    $p->purchase_date_string = '2023-11-30';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2024-02-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-02-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-02-14');
    $p->purchase_date_string = '2024-02-14';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2021-11-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-01');
    $p->purchase_date_string = '2021-11-01';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2024-01-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-01-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-01-18');
    $p->purchase_date_string = '2024-01-18';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2024-07-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-12');
    $p->purchase_date_string = '2024-07-12';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'purchase_date_string' => '2024-08-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-19');
    $p->purchase_date_string = '2024-08-19';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2021-07-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-27');
    $p->purchase_date_string = '2021-07-27';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'purchase_date_string' => '2020-10-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-21');
    $p->purchase_date_string = '2020-10-21';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'purchase_date_string' => '2024-08-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-23');
    $p->purchase_date_string = '2024-08-23';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'purchase_date_string' => '2021-11-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-07');
    $p->purchase_date_string = '2021-11-07';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'purchase_date_string' => '2024-08-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-24');
    $p->purchase_date_string = '2024-08-24';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2022-09-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-25');
    $p->purchase_date_string = '2022-09-25';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2021-10-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-05');
    $p->purchase_date_string = '2021-10-05';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2024-03-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-27');
    $p->purchase_date_string = '2024-03-27';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'purchase_date_string' => '2024-03-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-11');
    $p->purchase_date_string = '2024-03-11';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2022-03-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-11');
    $p->purchase_date_string = '2022-03-11';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'purchase_date_string' => '2020-03-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-18');
    $p->purchase_date_string = '2020-03-18';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'purchase_date_string' => '2022-03-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-01');
    $p->purchase_date_string = '2022-03-01';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2024-09-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-25');
    $p->purchase_date_string = '2024-09-25';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'purchase_date_string' => '2023-08-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-11');
    $p->purchase_date_string = '2023-08-11';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'purchase_date_string' => '2020-08-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-08-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-08-08');
    $p->purchase_date_string = '2020-08-08';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2020-03-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-10');
    $p->purchase_date_string = '2020-03-10';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2022-04-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-04-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-04-11');
    $p->purchase_date_string = '2022-04-11';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'purchase_date_string' => '2022-07-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-21');
    $p->purchase_date_string = '2022-07-21';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2023-05-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-06');
    $p->purchase_date_string = '2023-05-06';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'purchase_date_string' => '2021-04-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-29');
    $p->purchase_date_string = '2021-04-29';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'purchase_date_string' => '2023-06-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-30');
    $p->purchase_date_string = '2023-06-30';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'purchase_date_string' => '2021-01-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-04');
    $p->purchase_date_string = '2021-01-04';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2020-11-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-11-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-11-19');
    $p->purchase_date_string = '2020-11-19';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 3,
      'total' => 218.49,
      'purchase_date_string' => '2021-07-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-24');
    $p->purchase_date_string = '2021-07-24';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'purchase_date_string' => '2024-01-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-01-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-01-16');
    $p->purchase_date_string = '2024-01-16';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'purchase_date_string' => '2021-04-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-24');
    $p->purchase_date_string = '2021-04-24';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2022-02-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-23');
    $p->purchase_date_string = '2022-02-23';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2023-09-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-02');
    $p->purchase_date_string = '2023-09-02';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'purchase_date_string' => '2021-06-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-25');
    $p->purchase_date_string = '2021-06-25';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2021-10-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-05');
    $p->purchase_date_string = '2021-10-05';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2024-10-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-13');
    $p->purchase_date_string = '2024-10-13';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'purchase_date_string' => '2020-01-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-21');
    $p->purchase_date_string = '2020-01-21';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'purchase_date_string' => '2022-10-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-07');
    $p->purchase_date_string = '2022-10-07';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2021-06-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-25');
    $p->purchase_date_string = '2021-06-25';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'purchase_date_string' => '2023-12-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-10');
    $p->purchase_date_string = '2023-12-10';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2022-12-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-19');
    $p->purchase_date_string = '2022-12-19';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'purchase_date_string' => '2022-08-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-15');
    $p->purchase_date_string = '2022-08-15';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2024-09-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-09-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-09-08');
    $p->purchase_date_string = '2024-09-08';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2021-09-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-09-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-09-21');
    $p->purchase_date_string = '2021-09-21';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2023-07-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-07-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-07-07');
    $p->purchase_date_string = '2023-07-07';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2021-06-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-06-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-06-21');
    $p->purchase_date_string = '2021-06-21';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2020-10-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-06');
    $p->purchase_date_string = '2020-10-06';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2022-09-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-03');
    $p->purchase_date_string = '2022-09-03';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'purchase_date_string' => '2022-11-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-02');
    $p->purchase_date_string = '2022-11-02';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'purchase_date_string' => '2024-10-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-23');
    $p->purchase_date_string = '2024-10-23';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2023-03-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-10');
    $p->purchase_date_string = '2023-03-10';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2022-03-23',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-23'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-23');
    $p->purchase_date_string = '2022-03-23';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'purchase_date_string' => '2022-06-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-06-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-06-09');
    $p->purchase_date_string = '2022-06-09';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2024-07-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-20');
    $p->purchase_date_string = '2024-07-20';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2022-07-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-11');
    $p->purchase_date_string = '2022-07-11';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2020-02-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-02-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-02-02');
    $p->purchase_date_string = '2020-02-02';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'purchase_date_string' => '2020-04-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-21');
    $p->purchase_date_string = '2020-04-21';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 4,
      'total' => 382.24,
      'purchase_date_string' => '2023-03-12',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-12'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-12');
    $p->purchase_date_string = '2023-03-12';
    $p->save();
  }

  $c = Customer::where('email', 'cardenasjoshua@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2020-04-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-06');
    $p->purchase_date_string = '2020-04-06';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'purchase_date_string' => '2020-12-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-27');
    $p->purchase_date_string = '2020-12-27';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2024-10-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-10-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-10-19');
    $p->purchase_date_string = '2024-10-19';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 2,
      'total' => 124.7,
      'purchase_date_string' => '2022-10-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-11');
    $p->purchase_date_string = '2022-10-11';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2023-05-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-07');
    $p->purchase_date_string = '2023-05-07';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2022-03-08',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-08'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-08');
    $p->purchase_date_string = '2022-03-08';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'purchase_date_string' => '2022-07-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-06');
    $p->purchase_date_string = '2022-07-06';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'purchase_date_string' => '2023-01-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-09');
    $p->purchase_date_string = '2023-01-09';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2023-01-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-06');
    $p->purchase_date_string = '2023-01-06';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'purchase_date_string' => '2022-02-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-07');
    $p->purchase_date_string = '2022-02-07';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 1,
      'total' => 38.55,
      'purchase_date_string' => '2020-03-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-03-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-03-09');
    $p->purchase_date_string = '2020-03-09';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'purchase_date_string' => '2020-06-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-06-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-06-25');
    $p->purchase_date_string = '2020-06-25';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2021-09-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-09-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-09-17');
    $p->purchase_date_string = '2021-09-17';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'purchase_date_string' => '2023-06-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-17');
    $p->purchase_date_string = '2023-06-17';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2022-09-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-27');
    $p->purchase_date_string = '2022-09-27';
    $p->save();
  }

  $c = Customer::where('email', 'hawkinsrichard@fry-cooper.net')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2024-03-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-28');
    $p->purchase_date_string = '2024-03-28';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'purchase_date_string' => '2023-11-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-17');
    $p->purchase_date_string = '2023-11-17';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2022-09-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-05');
    $p->purchase_date_string = '2022-09-05';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2023-09-01',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-01'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-01');
    $p->purchase_date_string = '2023-09-01';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'purchase_date_string' => '2021-11-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-24');
    $p->purchase_date_string = '2021-11-24';
    $p->save();
  }

  $c = Customer::where('email', 'rphillips@sutton-bates.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'purchase_date_string' => '2022-11-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-11-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-11-25');
    $p->purchase_date_string = '2022-11-25';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'purchase_date_string' => '2023-02-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-27');
    $p->purchase_date_string = '2023-02-27';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2023-03-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-26');
    $p->purchase_date_string = '2023-03-26';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'purchase_date_string' => '2021-04-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-26');
    $p->purchase_date_string = '2021-04-26';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2021-04-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-30');
    $p->purchase_date_string = '2021-04-30';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2020-05-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-05-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-05-03');
    $p->purchase_date_string = '2020-05-03';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'purchase_date_string' => '2023-04-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-04-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-04-07');
    $p->purchase_date_string = '2023-04-07';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 2,
      'total' => 81.06,
      'purchase_date_string' => '2023-08-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-25');
    $p->purchase_date_string = '2023-08-25';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2021-10-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-10-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-10-24');
    $p->purchase_date_string = '2021-10-24';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'purchase_date_string' => '2022-05-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-05-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-05-07');
    $p->purchase_date_string = '2022-05-07';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'purchase_date_string' => '2021-11-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-27');
    $p->purchase_date_string = '2021-11-27';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'purchase_date_string' => '2023-03-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-03-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-03-03');
    $p->purchase_date_string = '2023-03-03';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2023-09-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-09-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-09-17');
    $p->purchase_date_string = '2023-09-17';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2024-03-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-03-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-03-20');
    $p->purchase_date_string = '2024-03-20';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'purchase_date_string' => '2020-12-15',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-15'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-15');
    $p->purchase_date_string = '2020-12-15';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'purchase_date_string' => '2020-07-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-07-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-07-04');
    $p->purchase_date_string = '2020-07-04';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'purchase_date_string' => '2020-12-13',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-13'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-13');
    $p->purchase_date_string = '2020-12-13';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'purchase_date_string' => '2023-11-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-11-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-11-02');
    $p->purchase_date_string = '2023-11-02';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2022-07-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-07-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-07-03');
    $p->purchase_date_string = '2022-07-03';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'purchase_date_string' => '2021-11-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-11-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-11-24');
    $p->purchase_date_string = '2021-11-24';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'purchase_date_string' => '2023-10-02',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-10-02'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-10-02');
    $p->purchase_date_string = '2023-10-02';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'purchase_date_string' => '2021-02-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-02-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-02-28');
    $p->purchase_date_string = '2021-02-28';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2023-12-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-18');
    $p->purchase_date_string = '2023-12-18';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'purchase_date_string' => '2021-09-05',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-09-05'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-09-05');
    $p->purchase_date_string = '2021-09-05';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'purchase_date_string' => '2022-12-11',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-11'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-11');
    $p->purchase_date_string = '2022-12-11';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'purchase_date_string' => '2022-09-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-16');
    $p->purchase_date_string = '2022-09-16';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'purchase_date_string' => '2022-03-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-29');
    $p->purchase_date_string = '2022-03-29';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2024-04-18',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-18'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-18');
    $p->purchase_date_string = '2024-04-18';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2021-01-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-25');
    $p->purchase_date_string = '2021-01-25';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2024-01-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-01-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-01-16');
    $p->purchase_date_string = '2024-01-16';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'purchase_date_string' => '2023-02-25',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-02-25'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-02-25');
    $p->purchase_date_string = '2023-02-25';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'purchase_date_string' => '2021-05-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-05-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-05-19');
    $p->purchase_date_string = '2021-05-19';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2022-02-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-02-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-02-07');
    $p->purchase_date_string = '2022-02-07';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'purchase_date_string' => '2023-05-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-19');
    $p->purchase_date_string = '2023-05-19';
    $p->save();
  }

  $c = Customer::where('email', 'jillian25@welch.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'purchase_date_string' => '2024-08-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-08-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-08-19');
    $p->purchase_date_string = '2024-08-19';
    $p->save();
  }

  $c = Customer::where('email', 'greenerin@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'purchase_date_string' => '2022-09-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-09-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-09-26');
    $p->purchase_date_string = '2022-09-26';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'purchase_date_string' => '2022-12-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-03');
    $p->purchase_date_string = '2022-12-03';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'purchase_date_string' => '2020-10-14',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-14'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-14');
    $p->purchase_date_string = '2020-10-14';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2021-02-06',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-02-06'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-02-06');
    $p->purchase_date_string = '2021-02-06';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'purchase_date_string' => '2021-01-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-01-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-01-07');
    $p->purchase_date_string = '2021-01-07';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'purchase_date_string' => '2023-05-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-05-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-05-16');
    $p->purchase_date_string = '2023-05-16';
    $p->save();
  }

  $c = Customer::where('email', 'brittney21@stewart.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'purchase_date_string' => '2022-10-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-10-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-10-26');
    $p->purchase_date_string = '2022-10-26';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'purchase_date_string' => '2023-01-09',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-09'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-09');
    $p->purchase_date_string = '2023-01-09';
    $p->save();
  }

  $c = Customer::where('email', 'carolgriffith@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'purchase_date_string' => '2023-04-27',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-04-27'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-04-27');
    $p->purchase_date_string = '2023-04-27';
    $p->save();
  }

  $c = Customer::where('email', 'craigbrown@mccarty.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'purchase_date_string' => '2023-01-30',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-01-30'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-01-30');
    $p->purchase_date_string = '2023-01-30';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'purchase_date_string' => '2024-06-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-22');
    $p->purchase_date_string = '2024-06-22';
    $p->save();
  }

  $c = Customer::where('email', 'brownbilly@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'purchase_date_string' => '2024-04-16',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-04-16'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-04-16');
    $p->purchase_date_string = '2024-04-16';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 3,
      'total' => 218.49,
      'purchase_date_string' => '2020-04-22',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-22'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-22');
    $p->purchase_date_string = '2020-04-22';
    $p->save();
  }

  $c = Customer::where('email', 'greenkeith@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2024-06-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-06-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-06-10');
    $p->purchase_date_string = '2024-06-10';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'purchase_date_string' => '2021-03-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-04');
    $p->purchase_date_string = '2021-03-04';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'purchase_date_string' => '2023-06-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-06-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-06-29');
    $p->purchase_date_string = '2023-06-29';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2020-10-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-10-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-10-29');
    $p->purchase_date_string = '2020-10-29';
    $p->save();
  }

  $c = Customer::where('email', 'tina89@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'purchase_date_string' => '2022-08-17',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-08-17'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-08-17');
    $p->purchase_date_string = '2022-08-17';
    $p->save();
  }

  $c = Customer::where('email', 'kyle41@townsend.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'purchase_date_string' => '2020-12-07',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-12-07'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-12-07');
    $p->purchase_date_string = '2020-12-07';
    $p->save();
  }

  $c = Customer::where('email', 'ehodges@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'purchase_date_string' => '2022-03-29',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-03-29'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-03-29');
    $p->purchase_date_string = '2022-03-29';
    $p->save();
  }

  $c = Customer::where('email', 'katrina56@hotmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'purchase_date_string' => '2021-04-21',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-04-21'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-04-21');
    $p->purchase_date_string = '2021-04-21';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'purchase_date_string' => '2024-07-04',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2024-07-04'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2024-07-04');
    $p->purchase_date_string = '2024-07-04';
    $p->save();
  }

  $c = Customer::where('email', 'millerlisa@mccarthy.org')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'purchase_date_string' => '2022-12-26',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2022-12-26'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2022-12-26');
    $p->purchase_date_string = '2022-12-26';
    $p->save();
  }

  $c = Customer::where('email', 'michellehenderson@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'purchase_date_string' => '2023-12-10',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-12-10'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-12-10');
    $p->purchase_date_string = '2023-12-10';
    $p->save();
  }

  $c = Customer::where('email', 'rebecca74@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'purchase_date_string' => '2021-07-03',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-07-03'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-07-03');
    $p->purchase_date_string = '2021-07-03';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'purchase_date_string' => '2021-03-19',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-03-19'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-03-19');
    $p->purchase_date_string = '2021-03-19';
    $p->save();
  }

  $c = Customer::where('email', 'paul92@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'purchase_date_string' => '2021-08-31',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2021-08-31'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2021-08-31');
    $p->purchase_date_string = '2021-08-31';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'purchase_date_string' => '2020-01-24',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-01-24'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-01-24');
    $p->purchase_date_string = '2020-01-24';
    $p->save();
  }

  $c = Customer::where('email', 'rickyfriedman@gmail.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'purchase_date_string' => '2023-08-20',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2023-08-20'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2023-08-20');
    $p->purchase_date_string = '2023-08-20';
    $p->save();
  }

  $c = Customer::where('email', 'curtisevans@yahoo.com')->firstOrFail();
  $p = [
      'customer_id' => $c->id,
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'purchase_date_string' => '2020-04-28',
      'purchase_date' => DateTime::createFromFormat('Y-m-d', '2020-04-28'),
  ];
  if ($this->validatePurchase($p)) {
    $p = Purchase::create($p);
    $p->purchase_date = DateTime::createFromFormat('Y-m-d', '2020-04-28');
    $p->purchase_date_string = '2020-04-28';
    $p->save();
  }
