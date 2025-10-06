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
        Schema::table('orders', function (Blueprint $table) {
            //   $table->decimal('unit_price',10,2)->nullable();
            //     $table->decimal('line_total',10,2)->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
                  $table->dropColumn('product_id');
                $table->dropColumn('unit_price');
                $table->dropColumn('line_total');
        });
    }
};
