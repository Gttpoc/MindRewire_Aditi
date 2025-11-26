<?php

use App\Models\TherapyCategory;
use Illuminate\Console\View\Components\Task;
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
        Schema::create('therapy_categories', function (Blueprint $table) {
            $table->id();
            $table->string('therapy_name')->nullable();
            $table->string('therapy_slug')->nullable();
            $table->string('therapy_image')->nullable();
            $table->string('currency')->nullable();
            $table->string('price')->nullable();
            $table->string('razorpay_product_code')->nullable();
            $table->timestamps();
        });

        $therapy_details = [
            [
                'therapy_name' => 'Individual Therapy',
                'therapy_slug' => 'individual_therapy',
                'therapy_image' => 'assets/images/book-session/icon_therapy.png',
                'currency' => '₹',
                'price' => '1000',
            ],
            [
                'therapy_name' => 'Student/Teen Therapy',
                'therapy_slug' => 'student_teen_therapy',
                'therapy_image' => 'assets/images/book-session/icon_students.png',
                'currency' => '₹',
                'price' => '1000',
            ],
            [
                'therapy_name' => 'Parent-Child Therapy',
                'therapy_slug' => 'parent_child_therapy',
                'therapy_image' => 'assets/images/book-session/icon_parent.png',
                'currency' => '₹',
                'price' => '1000',
            ],
            [
                'therapy_name' => 'Career Counselling',
                'therapy_slug' => 'career_counselling',
                'therapy_image' => 'assets/images/book-session/icon_career.png',
                'currency' => '₹',
                'price' => '1000',
            ],
            [
                'therapy_name' => 'Trauma Recovery Session',
                'therapy_slug' => 'trauma_recovery_session',
                'therapy_image' => 'assets/images/book-session/icon_recovery.png',
                'currency' => '₹',
                'price' => '1000',
            ],
            [
                'therapy_name' => 'Corporate Wellness Consultation',
                'therapy_slug' => 'corporate_wellness_consultation',
                'therapy_image' => 'assets/images/book-session/icon_wellness.png',
                'currency' => '₹',
                'price' => '1000',
            ],
        ];


        foreach ($therapy_details as $key => $values) {

            TherapyCategory::create(
                [
                    'therapy_name' => $values['therapy_name'],
                    'therapy_slug' => $values['therapy_slug'],
                    'therapy_image' => $values['therapy_image'],
                    'currency' => $values['currency'],
                    'price' => $values['price'],
                ]
            );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapy_categories');
    }
};
