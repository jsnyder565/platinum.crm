<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Create database tables customers and purchases.
   */
  public function up(): void
  {
    Schema::create('customers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email')->unique(); //customer email should be unique.
      $table->string('phone_number');
      $table->integer('loyalty_points');
      $table->timestamps();
    });
    Schema::create('purchases', function (Blueprint $table) {
      $table->id();
      $table->string('customer_id')->references('id')->on('customers');
      $table->string('purchasable');
      $table->double('price');
      $table->double('quantity');
      $table->double('total');
      $table->string('purchase_date_string')->nullable();
      $table->dateTime('purchase_date')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Remove the tables.
   */
  public function down(): void
  {
    Schema::dropIfExists('customers');
    Schema::dropIfExists('purchases');
  }
};
