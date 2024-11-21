<?php

LaravelPlayground::loaded(function(){
  Customer::truncate();
  Purchase::truncate();

  Customer::create([
      'name' => 'Richard Myers',
      'email' => 'jillian25@welch.org',
      'phone' => '954-772-3098',
  ]);
Customer::create([
      'name' => 'Chelsea Holmes',
      'email' => 'katrina56@hotmail.com',
      'phone' => '754-434-6706',
  ]);
Customer::create([
      'name' => 'Brandon Bennett',
      'email' => 'hawkinsrichard@fry-cooper.net',
      'phone' => '760-832-1280',
  ]);
Customer::create([
      'name' => 'David Smith',
      'email' => 'rphillips@sutton-bates.com',
      'phone' => '219-864-5639',
  ]);
Customer::create([
      'name' => 'Dennis Cruz',
      'email' => 'michellehenderson@gmail.com',
      'phone' => '970-500-2065',
  ]);
Customer::create([
      'name' => 'Michael Johnson',
      'email' => 'carolgriffith@hotmail.com',
      'phone' => '929-785-9408',
  ]);
Customer::create([
      'name' => 'Linda Krueger',
      'email' => 'curtisevans@yahoo.com',
      'phone' => '161-806-4114',
  ]);
Customer::create([
      'name' => 'Carrie Jones',
      'email' => 'brittney21@stewart.com',
      'phone' => '685-618-9177',
  ]);
Customer::create([
      'name' => 'Spencer Richards',
      'email' => 'ehodges@yahoo.com',
      'phone' => '559-956-8719',
  ]);
Customer::create([
      'name' => 'Rebecca King',
      'email' => 'tina89@hotmail.com',
      'phone' => '299-956-2080',
  ]);
Customer::create([
      'name' => 'Nancy Ferguson',
      'email' => 'greenerin@hotmail.com',
      'phone' => '723-164-4625',
  ]);
Customer::create([
      'name' => 'Donald Johnson',
      'email' => 'craigbrown@mccarty.com',
      'phone' => '358-895-2607',
  ]);
Customer::create([
      'name' => 'Charles Kennedy',
      'email' => 'cardenasjoshua@gmail.com',
      'phone' => '640-244-2348',
  ]);
Customer::create([
      'name' => 'Christopher Smith',
      'email' => 'brownbilly@hotmail.com',
      'phone' => '355-536-8806',
  ]);
Customer::create([
      'name' => 'Amanda Thomas',
      'email' => 'millerlisa@mccarthy.org',
      'phone' => '872-487-2447',
  ]);
Customer::create([
      'name' => 'David Jimenez',
      'email' => 'rickyfriedman@gmail.com',
      'phone' => '760-987-4856',
  ]);
Customer::create([
      'name' => 'Caitlin Murphy',
      'email' => 'greenkeith@yahoo.com',
      'phone' => '339-652-3482',
  ]);
Customer::create([
      'name' => 'Jamie Smith',
      'email' => 'paul92@yahoo.com',
      'phone' => '896-423-4681',
  ]);
Customer::create([
      'name' => 'Julia Robinson',
      'email' => 'kyle41@townsend.com',
      'phone' => '482-656-2445',
  ]);
Customer::create([
      'name' => 'Debra Hunter',
      'email' => 'rebecca74@gmail.com',
      'phone' => '496-999-3437',
  ]);

Purchase::create([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2024-07-18',
  ]);
Purchase::create([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2022-01-13',
  ]);
Purchase::create([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2022-03-14',
  ]);
Purchase::create([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2021-09-11',
  ]);
Purchase::create([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2021-11-18',
  ]);
Purchase::create([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2022-02-13',
  ]);
Purchase::create([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'date' => '2023-02-07',
  ]);
Purchase::create([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'date' => '2022-11-06',
  ]);
Purchase::create([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2020-06-04',
  ]);
Purchase::create([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2021-11-12',
  ]);
Purchase::create([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2024-09-02',
  ]);
Purchase::create([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2021-06-01',
  ]);
Purchase::create([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'date' => '2020-02-04',
  ]);
Purchase::create([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2021-12-27',
  ]);
Purchase::create([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-11-30',
  ]);
Purchase::create([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2023-05-09',
  ]);
Purchase::create([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2023-03-04',
  ]);
Purchase::create([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2020-10-18',
  ]);
Purchase::create([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-05-21',
  ]);
Purchase::create([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-09-27',
  ]);
Purchase::create([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2020-11-23',
  ]);
Purchase::create([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2021-01-08',
  ]);
Purchase::create([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2024-07-04',
  ]);
Purchase::create([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'date' => '2020-09-15',
  ]);
Purchase::create([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2020-09-27',
  ]);
Purchase::create([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'date' => '2024-07-27',
  ]);
Purchase::create([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2021-04-22',
  ]);
Purchase::create([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-04-22',
  ]);
Purchase::create([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2024-09-08',
  ]);
Purchase::create([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-08-08',
  ]);
Purchase::create([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'date' => '2021-12-23',
  ]);
Purchase::create([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-01-24',
  ]);
Purchase::create([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2021-07-20',
  ]);
Purchase::create([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2020-05-20',
  ]);
Purchase::create([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 5,
      'total' => 438.2,
      'date' => '2020-11-21',
  ]);
Purchase::create([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2022-10-07',
  ]);
Purchase::create([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2024-05-27',
  ]);
Purchase::create([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2021-09-21',
  ]);
Purchase::create([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2023-08-23',
  ]);
Purchase::create([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-06-04',
  ]);
Purchase::create([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2023-12-17',
  ]);
Purchase::create([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2022-06-22',
  ]);
Purchase::create([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2020-02-01',
  ]);
Purchase::create([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'date' => '2022-11-03',
  ]);
Purchase::create([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2023-06-24',
  ]);
Purchase::create([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2023-03-10',
  ]);


  
});

