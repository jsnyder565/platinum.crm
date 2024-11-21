<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomers extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('email');
          $table->string('phone');
          $table->timestamps();
        });
      Schema::create('purchases', function (Blueprint $table) {
          $table->id();
          $table->string('customer_email');
          $table->string('purchasable');
          $table->double('price');
          $table->double('quantity');
          $table->double('total');
          $table->datetime('date');
          $table->timestamps();
        });
    }
}
