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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('room');
            $table->integer('guest');
            $table->enum('status', ['ongoing', 'complete'])->default('ongoing');
            $table->integer('price_per_night');
            $table->integer('total_price');
            $table->string('rental');
            $table->integer('price_per_rental');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
