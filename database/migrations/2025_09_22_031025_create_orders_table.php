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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('vendor_id')->nullable();
            $table->decimal('total_amount',10,2)->nullable();
            $table->decimal('vat',10,2)->nullable();
            $table->decimal('discount_price',10,2)->nullable();
            $table->decimal('delivery_charges',10,2)->nullable();
            $table->string('status')->nullable();
            $table->string('tracking_status')->nullable();
            $table->bigInteger('delivery_zone_id')->nullable();
            $table->bigInteger('delivery_person_id')->nullable();
            $table->timestamps();






        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
