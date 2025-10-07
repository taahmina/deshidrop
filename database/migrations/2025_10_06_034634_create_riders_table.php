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
        Schema::create('riders', function (Blueprint $table) {
            $table->id();
              $table->string('name');
                $table->string('email')->nullable();
                $table->string('phone')->unique();
                $table->string('password')->nullable();
             
                $table->string('vehicle_type');
                $table->string('vehicle_number');
                $table->string('license_number')->nullable();
             
                $table->string('address')->nullable();
                $table->bigInteger('division_id')->nullable();
                $table->bigInteger('district_id')->nullable();
            
              
                $table->enum('status', ['pending', 'approved', 'rejected', 'blocked'])->default('pending');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riders');
    }
};
