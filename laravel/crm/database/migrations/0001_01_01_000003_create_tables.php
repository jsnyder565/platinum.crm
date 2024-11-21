<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->timestamp('created')->useCurrent();
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
            $table->timestamp('date');
            $table->timestamps();
          });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
        Schema::dropIfExists('purchases');
    }
};
