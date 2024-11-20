<?php

LaravelPlayground::loaded(function(){
  if (Customer::count() === 0) {
    DB::table('customers')->insert([
      'name' => 'Richard Myers',
      'email' => 'jillian25@welch.org',
      'phone' => '954-772-3098',
  ]);
DB::table('customers')->insert([
      'name' => 'Chelsea Holmes',
      'email' => 'katrina56@hotmail.com',
      'phone' => '754-434-6706',
  ]);
DB::table('customers')->insert([
      'name' => 'Brandon Bennett',
      'email' => 'hawkinsrichard@fry-cooper.net',
      'phone' => '760-832-1280',
  ]);
DB::table('customers')->insert([
      'name' => 'David Smith',
      'email' => 'rphillips@sutton-bates.com',
      'phone' => '219-864-5639',
  ]);
DB::table('customers')->insert([
      'name' => 'Dennis Cruz',
      'email' => 'michellehenderson@gmail.com',
      'phone' => '970-500-2065',
  ]);
DB::table('customers')->insert([
      'name' => 'Michael Johnson',
      'email' => 'carolgriffith@hotmail.com',
      'phone' => '929-785-9408',
  ]);
DB::table('customers')->insert([
      'name' => 'Linda Krueger',
      'email' => 'curtisevans@yahoo.com',
      'phone' => '161-806-4114',
  ]);
DB::table('customers')->insert([
      'name' => 'Carrie Jones',
      'email' => 'brittney21@stewart.com',
      'phone' => '685-618-9177',
  ]);
DB::table('customers')->insert([
      'name' => 'Spencer Richards',
      'email' => 'ehodges@yahoo.com',
      'phone' => '559-956-8719',
  ]);
DB::table('customers')->insert([
      'name' => 'Rebecca King',
      'email' => 'tina89@hotmail.com',
      'phone' => '299-956-2080',
  ]);
DB::table('customers')->insert([
      'name' => 'Nancy Ferguson',
      'email' => 'greenerin@hotmail.com',
      'phone' => '723-164-4625',
  ]);
DB::table('customers')->insert([
      'name' => 'Donald Johnson',
      'email' => 'craigbrown@mccarty.com',
      'phone' => '358-895-2607',
  ]);
DB::table('customers')->insert([
      'name' => 'Charles Kennedy',
      'email' => 'cardenasjoshua@gmail.com',
      'phone' => '640-244-2348',
  ]);
DB::table('customers')->insert([
      'name' => 'Christopher Smith',
      'email' => 'brownbilly@hotmail.com',
      'phone' => '355-536-8806',
  ]);
DB::table('customers')->insert([
      'name' => 'Amanda Thomas',
      'email' => 'millerlisa@mccarthy.org',
      'phone' => '872-487-2447',
  ]);
DB::table('customers')->insert([
      'name' => 'David Jimenez',
      'email' => 'rickyfriedman@gmail.com',
      'phone' => '760-987-4856',
  ]);
DB::table('customers')->insert([
      'name' => 'Caitlin Murphy',
      'email' => 'greenkeith@yahoo.com',
      'phone' => '339-652-3482',
  ]);
DB::table('customers')->insert([
      'name' => 'Jamie Smith',
      'email' => 'paul92@yahoo.com',
      'phone' => '896-423-4681',
  ]);
DB::table('customers')->insert([
      'name' => 'Julia Robinson',
      'email' => 'kyle41@townsend.com',
      'phone' => '482-656-2445',
  ]);
DB::table('customers')->insert([
      'name' => 'Debra Hunter',
      'email' => 'rebecca74@gmail.com',
      'phone' => '496-999-3437',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2024-07-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2022-01-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2022-03-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2021-09-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2021-11-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2022-02-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'date' => '2023-02-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'date' => '2022-11-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2020-06-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2021-11-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2024-09-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2021-06-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'date' => '2020-02-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2021-12-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-11-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2023-05-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2023-03-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2020-10-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-05-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-09-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2020-11-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2021-01-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2024-07-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'date' => '2020-09-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2020-09-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'date' => '2024-07-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2021-04-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-04-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2024-09-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-08-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'date' => '2021-12-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-01-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2021-07-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2020-05-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 5,
      'total' => 438.2,
      'date' => '2020-11-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2022-10-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2024-05-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2021-09-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2023-08-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-06-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2023-12-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2022-06-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2020-02-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'date' => '2022-11-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2023-06-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2023-03-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'date' => '2023-06-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'date' => '2022-01-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'date' => '2021-07-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'date' => '2023-08-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2020-03-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2022-11-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2020-08-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2020-03-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2022-12-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'date' => '2022-03-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2021-03-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2023-01-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2022-10-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'date' => '2024-05-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'date' => '2022-03-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2020-01-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'date' => '2022-10-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'date' => '2022-08-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2021-01-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'date' => '2020-01-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2022-12-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2021-07-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2024-04-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'date' => '2023-05-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2022-06-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2023-11-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2023-02-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2022-10-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'date' => '2021-06-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2022-07-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'date' => '2023-05-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2022-07-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 3,
      'total' => 40.29,
      'date' => '2022-01-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2024-04-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-03-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2023-07-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'date' => '2022-04-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'date' => '2020-10-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2021-04-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2023-03-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2022-08-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2021-04-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2023-08-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2023-07-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2020-04-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2022-12-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'date' => '2024-03-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2020-05-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2024-06-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2023-06-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2022-07-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2022-06-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2020-03-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2024-02-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2021-10-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'date' => '2021-04-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2022-01-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-11-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2023-08-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'date' => '2021-06-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2022-12-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'date' => '2020-05-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2024-05-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2020-05-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'date' => '2023-08-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'date' => '2021-06-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2021-06-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'date' => '2021-03-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2022-05-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2023-08-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2023-05-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2023-01-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2023-11-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'date' => '2021-06-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2024-05-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2024-02-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2022-03-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'date' => '2024-09-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'date' => '2021-08-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2021-10-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2023-08-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2024-04-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2023-03-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'date' => '2023-12-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2020-02-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2020-06-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2024-03-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2022-07-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2020-07-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2023-02-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2023-12-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 2,
      'total' => 81.06,
      'date' => '2021-03-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2024-06-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2021-11-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2022-10-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2022-06-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2020-02-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2021-10-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2024-08-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'date' => '2023-03-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-07-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'date' => '2024-03-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2021-01-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2022-11-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2023-09-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2021-01-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2023-10-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'date' => '2021-10-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'date' => '2024-02-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2021-12-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'date' => '2021-05-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2021-10-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2023-11-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2022-06-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'date' => '2020-01-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2021-02-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2022-02-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2023-09-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2024-08-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2023-11-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2022-12-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'date' => '2024-05-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 2,
      'total' => 143.06,
      'date' => '2022-04-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'date' => '2023-06-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2020-11-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2022-04-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'date' => '2023-05-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2020-04-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 4,
      'total' => 381.8,
      'date' => '2024-07-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'date' => '2021-06-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'date' => '2024-09-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2021-01-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2022-03-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2022-02-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2020-05-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 2,
      'total' => 124.7,
      'date' => '2022-12-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2021-01-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2022-06-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'date' => '2021-08-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'date' => '2022-01-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2020-04-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2024-08-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'date' => '2021-10-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2023-11-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2022-04-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'date' => '2023-04-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2022-09-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2023-12-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'date' => '2022-11-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 2,
      'total' => 66.68,
      'date' => '2022-08-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-11-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2024-04-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2021-10-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2022-06-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2022-07-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2021-07-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2024-10-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'date' => '2022-01-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2022-09-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2021-10-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2021-03-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2024-03-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2024-05-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'date' => '2023-05-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-11-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 3,
      'total' => 240.09,
      'date' => '2022-02-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 2,
      'total' => 81.06,
      'date' => '2021-03-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2023-09-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'date' => '2023-08-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'date' => '2020-06-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2023-12-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'date' => '2021-07-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'date' => '2022-12-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'date' => '2023-08-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2023-07-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2024-06-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'date' => '2023-10-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2020-06-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'date' => '2021-07-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2023-01-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2022-02-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2022-04-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2024-05-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'date' => '2024-09-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'date' => '2021-06-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 3,
      'total' => 53.67,
      'date' => '2020-03-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2023-10-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'date' => '2022-06-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2021-10-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 3,
      'total' => 231.51,
      'date' => '2021-07-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 5,
      'total' => 438.2,
      'date' => '2020-06-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2022-04-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'date' => '2021-03-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2022-04-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2021-10-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2022-08-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2020-01-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'date' => '2023-05-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 4,
      'total' => 381.8,
      'date' => '2021-10-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2022-11-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'date' => '2023-04-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 2,
      'total' => 143.06,
      'date' => '2022-10-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'date' => '2020-10-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'date' => '2023-08-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 3,
      'total' => 53.67,
      'date' => '2021-11-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2022-03-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'date' => '2023-05-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2024-07-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2021-05-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2021-04-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 3,
      'total' => 53.67,
      'date' => '2023-06-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2024-10-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2023-11-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 5,
      'total' => 89.45,
      'date' => '2023-05-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2020-12-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2023-03-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'date' => '2024-04-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 1,
      'total' => 95.45,
      'date' => '2021-03-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'date' => '2020-11-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2020-04-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2022-09-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2021-11-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 2,
      'total' => 150.76,
      'date' => '2024-07-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2024-09-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2021-05-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2024-05-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 3,
      'total' => 240.09,
      'date' => '2021-06-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'date' => '2022-01-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2021-10-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2023-10-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2021-05-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2023-03-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2021-12-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2023-11-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2024-09-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'date' => '2023-05-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2020-07-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2023-12-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2022-01-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 4,
      'total' => 286.12,
      'date' => '2021-05-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2020-01-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 3,
      'total' => 147.03,
      'date' => '2022-12-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 1,
      'total' => 33.34,
      'date' => '2024-03-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2020-09-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2023-06-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2021-07-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2021-10-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2020-03-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2024-06-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2024-02-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2020-06-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2024-05-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2024-10-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2020-01-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2020-04-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2022-01-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2020-06-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'date' => '2024-04-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'date' => '2023-11-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2023-02-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2022-01-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'date' => '2023-11-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 2,
      'total' => 119.44,
      'date' => '2023-09-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'date' => '2024-01-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2024-06-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'date' => '2020-05-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2020-06-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'date' => '2024-04-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2021-12-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'date' => '2024-09-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2021-10-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2023-06-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'date' => '2022-12-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2020-09-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2020-02-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2022-11-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 4,
      'total' => 320.12,
      'date' => '2024-02-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2021-11-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2020-04-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2023-02-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2022-06-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'date' => '2020-06-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'date' => '2022-02-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'date' => '2021-10-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'date' => '2020-04-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2022-09-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'date' => '2022-12-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'date' => '2021-10-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'date' => '2020-07-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-08-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'date' => '2021-02-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2020-12-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'date' => '2023-04-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2021-06-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2022-01-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2023-11-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2020-01-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'date' => '2022-02-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'date' => '2022-06-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 1,
      'total' => 38.55,
      'date' => '2024-10-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'date' => '2024-04-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2022-04-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2021-11-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2021-08-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'date' => '2024-08-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2020-03-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2023-05-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'date' => '2024-05-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'date' => '2021-09-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2021-04-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 2,
      'total' => 52.0,
      'date' => '2020-12-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2020-01-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'date' => '2023-01-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'date' => '2020-07-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'date' => '2024-06-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2024-03-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 2,
      'total' => 190.9,
      'date' => '2023-06-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2023-06-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 1,
      'total' => 75.38,
      'date' => '2023-12-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2024-09-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 4,
      'total' => 381.8,
      'date' => '2021-04-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2024-09-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2020-08-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 3,
      'total' => 240.09,
      'date' => '2024-02-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2024-10-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 5,
      'total' => 470.5,
      'date' => '2024-02-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2024-10-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2020-11-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2021-05-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2021-05-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 2,
      'total' => 66.68,
      'date' => '2022-09-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'date' => '2023-02-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2022-04-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2020-11-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2024-05-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2020-01-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'date' => '2024-03-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 2,
      'total' => 143.06,
      'date' => '2021-11-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'date' => '2020-04-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2020-03-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'date' => '2020-10-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'date' => '2021-07-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'date' => '2023-06-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2022-07-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2023-10-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2020-11-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2021-07-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'date' => '2020-01-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'date' => '2020-02-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2020-09-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2023-08-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2021-10-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'date' => '2022-06-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 2,
      'total' => 191.12,
      'date' => '2021-11-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2024-01-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2022-02-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 1,
      'total' => 40.53,
      'date' => '2023-01-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2024-08-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'date' => '2024-04-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2020-01-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2023-09-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2021-10-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2023-12-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2024-10-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2021-06-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2022-11-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2022-10-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 3,
      'total' => 286.68,
      'date' => '2020-07-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'date' => '2022-01-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 4,
      'total' => 308.68,
      'date' => '2023-06-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'date' => '2022-04-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2023-06-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2021-12-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 2,
      'total' => 124.7,
      'date' => '2020-07-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2023-06-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2020-01-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2022-04-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2022-04-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'date' => '2022-12-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2023-06-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2024-04-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2023-10-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2022-02-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2020-06-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2023-10-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2020-01-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 3,
      'total' => 187.05,
      'date' => '2022-05-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'date' => '2022-10-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'date' => '2021-04-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'date' => '2021-03-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2020-10-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 4,
      'total' => 154.2,
      'date' => '2024-02-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 2,
      'total' => 76.78,
      'date' => '2021-04-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2022-09-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2022-09-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 3,
      'total' => 218.49,
      'date' => '2023-11-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2024-02-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2021-11-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2024-01-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2024-07-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'date' => '2024-08-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2021-07-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 5,
      'total' => 477.25,
      'date' => '2020-10-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'date' => '2024-08-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 3,
      'total' => 262.92,
      'date' => '2021-11-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'date' => '2024-08-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2022-09-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2021-10-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2024-03-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 4,
      'total' => 71.56,
      'date' => '2024-03-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2022-03-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 5,
      'total' => 130.0,
      'date' => '2020-03-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 3,
      'total' => 282.3,
      'date' => '2022-03-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2024-09-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'date' => '2023-08-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 3,
      'total' => 85.68,
      'date' => '2020-08-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2020-03-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2022-04-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 2,
      'total' => 160.06,
      'date' => '2022-07-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2023-05-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 2,
      'total' => 145.66,
      'date' => '2021-04-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2023-06-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 1,
      'total' => 62.35,
      'date' => '2021-01-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2020-11-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 3,
      'total' => 218.49,
      'date' => '2021-07-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Coconut Milk Beverage',
      'price' => 95.45,
      'quantity' => 3,
      'total' => 286.35,
      'date' => '2024-01-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 4,
      'total' => 376.4,
      'date' => '2021-04-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2022-02-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2023-09-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 5,
      'total' => 142.8,
      'date' => '2021-06-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2021-10-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2024-10-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 2,
      'total' => 26.86,
      'date' => '2020-01-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'date' => '2022-10-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2021-06-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 5,
      'total' => 67.15,
      'date' => '2023-12-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2022-12-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 1,
      'total' => 38.39,
      'date' => '2022-08-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2024-09-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2021-09-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2023-07-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2021-06-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2020-10-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2022-09-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 2,
      'total' => 77.1,
      'date' => '2022-11-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 1,
      'total' => 94.1,
      'date' => '2024-10-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2023-03-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2022-03-23',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 2,
      'total' => 35.78,
      'date' => '2022-06-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2024-07-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2022-07-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2020-02-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2020-04-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 4,
      'total' => 382.24,
      'date' => '2023-03-12',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'cardenasjoshua@gmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2020-04-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 4,
      'total' => 153.56,
      'date' => '2020-12-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2024-10-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 2,
      'total' => 124.7,
      'date' => '2022-10-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2023-05-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2022-03-08',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 1,
      'total' => 80.03,
      'date' => '2022-07-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 1,
      'total' => 13.43,
      'date' => '2023-01-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2023-01-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Sea Salt Potato Chips',
      'price' => 62.35,
      'quantity' => 5,
      'total' => 311.75,
      'date' => '2022-02-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 1,
      'total' => 38.55,
      'date' => '2020-03-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 4,
      'total' => 291.32,
      'date' => '2020-06-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2021-09-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 4,
      'total' => 350.56,
      'date' => '2023-06-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2022-09-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'hawkinsrichard@fry-cooper.net',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2024-03-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Chia Seed Pudding',
      'price' => 17.89,
      'quantity' => 1,
      'total' => 17.89,
      'date' => '2023-11-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2022-09-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2023-09-01',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'date' => '2021-11-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rphillips@sutton-bates.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'date' => '2022-11-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 1,
      'total' => 71.53,
      'date' => '2023-02-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2023-03-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'date' => '2021-04-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2021-04-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2020-05-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 5,
      'total' => 245.05,
      'date' => '2023-04-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 2,
      'total' => 81.06,
      'date' => '2023-08-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2021-10-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'date' => '2022-05-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 3,
      'total' => 179.16,
      'date' => '2021-11-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 5,
      'total' => 357.65,
      'date' => '2023-03-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2023-09-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2024-03-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'date' => '2020-12-15',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 4,
      'total' => 133.36,
      'date' => '2020-07-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 1,
      'total' => 77.17,
      'date' => '2020-12-13',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2023-11-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2022-07-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 5,
      'total' => 192.75,
      'date' => '2021-11-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 3,
      'total' => 121.59,
      'date' => '2023-10-02',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 1,
      'total' => 28.56,
      'date' => '2021-02-28',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2023-12-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 3,
      'total' => 115.17,
      'date' => '2021-09-05',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Mixed Berry Jam',
      'price' => 13.43,
      'quantity' => 4,
      'total' => 53.72,
      'date' => '2022-12-11',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 4,
      'total' => 196.04,
      'date' => '2022-09-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2022-03-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2024-04-18',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2021-01-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2024-01-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 1,
      'total' => 72.83,
      'date' => '2023-02-25',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 5,
      'total' => 385.85,
      'date' => '2021-05-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2022-02-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 1,
      'total' => 87.64,
      'date' => '2023-05-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'jillian25@welch.org',
      'purchasable' => 'Organic Tomato Sauce',
      'price' => 80.03,
      'quantity' => 5,
      'total' => 400.15,
      'date' => '2024-08-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenerin@hotmail.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 4,
      'total' => 114.24,
      'date' => '2022-09-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 5,
      'total' => 376.9,
      'date' => '2022-12-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 1,
      'total' => 49.01,
      'date' => '2020-10-14',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2021-02-06',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 1,
      'total' => 26.0,
      'date' => '2021-01-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 5,
      'total' => 202.65,
      'date' => '2023-05-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brittney21@stewart.com',
      'purchasable' => 'Extra Virgin Olive Oil',
      'price' => 87.64,
      'quantity' => 2,
      'total' => 175.28,
      'date' => '2022-10-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 1,
      'total' => 59.72,
      'date' => '2023-01-09',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'carolgriffith@hotmail.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 5,
      'total' => 364.15,
      'date' => '2023-04-27',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'craigbrown@mccarty.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 5,
      'total' => 298.6,
      'date' => '2023-01-30',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 1,
      'total' => 95.56,
      'date' => '2024-06-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'brownbilly@hotmail.com',
      'purchasable' => 'Natural Honey Jar',
      'price' => 95.56,
      'quantity' => 5,
      'total' => 477.8,
      'date' => '2024-04-16',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Fresh Avocado Dip',
      'price' => 72.83,
      'quantity' => 3,
      'total' => 218.49,
      'date' => '2020-04-22',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'greenkeith@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2024-06-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Protein Snack Bars',
      'price' => 59.72,
      'quantity' => 4,
      'total' => 238.88,
      'date' => '2021-03-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 3,
      'total' => 100.02,
      'date' => '2023-06-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2020-10-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'tina89@hotmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 3,
      'total' => 78.0,
      'date' => '2022-08-17',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'kyle41@townsend.com',
      'purchasable' => 'Roasted Coffee Beans',
      'price' => 28.56,
      'quantity' => 2,
      'total' => 57.12,
      'date' => '2020-12-07',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'ehodges@yahoo.com',
      'purchasable' => 'Organic Almond Butter',
      'price' => 49.01,
      'quantity' => 2,
      'total' => 98.02,
      'date' => '2022-03-29',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'katrina56@hotmail.com',
      'purchasable' => 'Sourdough Bread Loaf',
      'price' => 38.39,
      'quantity' => 5,
      'total' => 191.95,
      'date' => '2021-04-21',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 3,
      'total' => 226.14,
      'date' => '2024-07-04',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'millerlisa@mccarthy.org',
      'purchasable' => 'Herbal Green Tea',
      'price' => 94.1,
      'quantity' => 2,
      'total' => 188.2,
      'date' => '2022-12-26',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'michellehenderson@gmail.com',
      'purchasable' => 'Citrus Sparkling Water',
      'price' => 26.0,
      'quantity' => 4,
      'total' => 104.0,
      'date' => '2023-12-10',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rebecca74@gmail.com',
      'purchasable' => 'Lavender Hand Soap',
      'price' => 40.53,
      'quantity' => 4,
      'total' => 162.12,
      'date' => '2021-07-03',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Gluten-Free Crackers',
      'price' => 38.55,
      'quantity' => 3,
      'total' => 115.65,
      'date' => '2021-03-19',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'paul92@yahoo.com',
      'purchasable' => 'Whole Grain Pasta',
      'price' => 71.53,
      'quantity' => 3,
      'total' => 214.59,
      'date' => '2021-08-31',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Maple Granola Mix',
      'price' => 33.34,
      'quantity' => 5,
      'total' => 166.7,
      'date' => '2020-01-24',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'rickyfriedman@gmail.com',
      'purchasable' => 'Spicy Salsa Jar',
      'price' => 77.17,
      'quantity' => 2,
      'total' => 154.34,
      'date' => '2023-08-20',
  ]);
DB::table('purchases')->insert([
      'customer_email' => 'curtisevans@yahoo.com',
      'purchasable' => 'Dark Chocolate Bar',
      'price' => 75.38,
      'quantity' => 4,
      'total' => 301.52,
      'date' => '2020-04-28',
  ]);

  }
});
