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
        Schema::create('delivary_people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->enum('vehicle_type', ['bike','car','van']);
            $table->enum('status', ['available', 'busy', 'inactive','assigned',])->default('available');
            $table->timestamps();
        });
    }

 




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivary_people');
    }
};
