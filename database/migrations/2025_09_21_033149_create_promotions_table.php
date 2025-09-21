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
            $table->text('discount_type')->nullable();
            $table->string('discount_value')->nullable();
            $table->string('min_order_amount')->nullable();
            $table->string('max_discount_amount')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('usage_limit')->nullable();
            $table->string('per_user_limit')->nullable();
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
