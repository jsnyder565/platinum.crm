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

  }
});
