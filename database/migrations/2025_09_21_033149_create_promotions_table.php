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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->text('description')->nullable();
            $table->string('promo_code')->nullable();
            $table->integer('discount_type')->default(1)->comment('1=percentage, 2=fixed amount');
            $table->decimal('discount_value',10,2)->nullable();
            $table->decimal('min_order_amount',10,2)->nullable();
            $table->decimal('max_discount_amount',10,2)->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('usage_limit')->nullable();
            $table->integer('per_user_limit')->nullable();
            $table->string('target_user_id')->nullable();
            $table->string('referral_reward_user')->nullable();
            $table->string('referral_reward_friend')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
