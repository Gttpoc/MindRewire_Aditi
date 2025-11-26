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
        Schema::create('booked_time_slots', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(0);
            $table->string('billing_id');
            $table->string('booking_date');
            $table->string('booking_time');
            $table->string('therapy_mode')->default('video-call'); // Default to video-call
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_time_slots');
    }
};
