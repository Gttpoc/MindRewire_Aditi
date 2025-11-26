<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteMapController;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(['middleware' => ['variable_replace']], function () {

    Route::get('/', [MainSiteController::class, 'index']);
    Route::get('about-us', [MainSiteController::class, 'aboutUs']);
    Route::get('founders', [MainSiteController::class, 'founders']);
    Route::get('assessments', [MainSiteController::class, 'assessments']);
    Route::get('success-stories', [MainSiteController::class, 'successStories']);
    Route::get('careers', [MainSiteController::class, 'careers']);
    Route::get('solutions', [MainSiteController::class, 'solutions']);
    Route::get('book-session', [MainSiteController::class, 'bookSession']);
    Route::get('blogs', [MainSiteController::class, 'blogs']);
    Route::get('career-counselling', [MainSiteController::class, 'careerCounselling']);
    Route::get('school-programs', [MainSiteController::class, 'schoolPrograms']);
    Route::get('student-mental-wellness', [MainSiteController::class, 'studentMentalWellness']);
    Route::get('corporate-wellness', [MainSiteController::class, 'corporateWellness']);
    Route::get('trauma-rewiring', [MainSiteController::class, 'traumaRewiring']);
    Route::get('individual-therapy-coach', [MainSiteController::class, 'individualTherapyCoach']);
    Route::get('untangle', [MainSiteController::class, 'untangle']);
    Route::get('help', [MainSiteController::class, 'help']);
    Route::get('contact-us', [MainSiteController::class, 'contactUs']);
    Route::get('booking/{plan}', [MainSiteController::class, 'booking']);
    Route::get('enquiry-form', [MainSiteController::class, 'enquiryForm']);
    // Route::get('blog-details', [MainSiteController::class, 'blogDetails']);
    Route::get('terms-of-service', [MainSiteController::class, 'termsOfService']);
    Route::get('privacy-policy', [MainSiteController::class, 'privacyPolicy']);
    Route::get('data-protection', [MainSiteController::class, 'dataProtection']);
    Route::get('refund-policy', [MainSiteController::class, 'refundPolicy']);
    Route::get('cookies-policy', [MainSiteController::class, 'cookiesPolicy']);
    Route::get('compliance-statement', [MainSiteController::class, 'complianceStatement']);
    Route::get('nervous-system-overreaction-explained', [MainSiteController::class, 'nervousSystemOverreactionExplained']);
    Route::get('help-child-shutting-down', [MainSiteController::class, 'helpChildShuttingDown']);
    Route::get('chronic-fatigue-despite-sleep', [MainSiteController::class, 'chronicFatigueDespiteSleep']);
    Route::get('understanding-trauma-bonds', [MainSiteController::class, 'understandingTraumaBonds']);
    Route::get('first-therapy-session-guide', [MainSiteController::class, 'firstTherapySessionGuide']);
    Route::get('plans-pricing', [MainSiteController::class, 'plansPricing']);
    Route::get('chai-for-loneliness-your-everyday-friend-for-anxiety-and-stress', [MainSiteController::class, 'chaiForLoneliness']);

    Route::post('submit-booking', [PaymentController::class, 'submitBooking']);
    Route::post('get-state', [PaymentController::class, 'getStateList']);

    Route::post('razorpay/success', [PaymentController::class, 'paymentSuccess']);
    Route::post('razorpay/failed', [PaymentController::class, 'paymentFailed']);

    Route::post('submit-enquiry', [MainSiteController::class, 'submitEnquiry']);
    Route::post('submit-journal-request', [MainSiteController::class, 'submitJournalRequest']);

    Route::get('sitemap.xml', [SiteMapController::class, 'index']);
    Route::get('sitemap/basic.xml', [SiteMapController::class, 'basic']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
