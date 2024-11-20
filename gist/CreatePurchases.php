<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchases extends Migration
{
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
          $table->id();
          $table->string('customer_email');
          $table->string('purschasable');
          $table->double('price');
          $table->double('quantity');
          $table->double('total');
          $table->datetime('date');
          $table->timestamps();
        });
    }
}
