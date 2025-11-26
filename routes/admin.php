<?php

use Faker\Provider\ar_EG\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'prevent-back-history']], function () {


    Route::get('/', [HomeController::class, 'index']);

    Route::get('therapy/pricing', [AdminController::class, 'price']);
    Route::post('price/update', [AdminController::class, 'priceUpdate']);


    Route::get('therapy/booking', [AdminController::class, 'booking']);

    Route::get('enquiry', [AdminController::class, 'enquiry']);
    Route::post('enquiry/update', [AdminController::class, 'enquiryUpdate']);

    Route::get('news-letter', [AdminController::class, 'newsLetterSubscription']);
});


// Route::get('test/email', [PaymentController::class, 'testEmail']);
