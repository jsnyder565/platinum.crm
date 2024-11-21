<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriberTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->string('email')->unique();
          $table->string('phone_number');
          $table->timestamp('created')->useCurrent()
          $table->timestamps();
        });
        Schema::create('purchases', function (Blueprint $table) {
          $table->id();
          $table->string('customer_email')->references('email')->on('customers');
          $table->string('purchasable');
          $table->double('price');
          $table->double('quantity');
          $table->double('total');
          $table->timestamps();
        });
    }
}
