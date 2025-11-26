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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100);
            $table->string('email');
            $table->string('address_line_1', 200)->nullable();
            $table->string('address_line_2', 200)->nullable();
            $table->string('land_mark', 200)->nullable();

            $table->string('country', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('zip_code', 25)->nullable();
            $table->string('phone_code', 25)->nullable();
            $table->string('phone_number', 25)->nullable();
            $table->text('brief')->nullable();

            $table->integer('therapy_type')->nullable()->comment('therapy id');
            $table->string('razorpay_order_id')->nullable();
            $table->decimal('amount')->nullable();
            $table->string('razorpay_payment_id')->nullable();
            $table->string('payment_status')->default('pending')->nullable(); //pending,paid,failed.
            $table->json('payload')->nullable(); //pending,paid,failed.


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
