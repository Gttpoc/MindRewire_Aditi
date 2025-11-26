<?php

namespace App\Http\Controllers;

use App\Models\State;
use Razorpay\Api\Api;
use App\Models\Billing;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\BookedTimeSlot;
use App\Models\NewsLetterSubscription;
use App\Models\TherapyCategory;
use Illuminate\Support\Facades\Log;
use Vinkla\Hashids\Facades\Hashids;

class MainSiteController extends Controller
{
    public function index()
    {

        return view('mainsite.home');
    }
    public function aboutUs()
    {
        return view('mainsite.about-us');
    }
    public function founders()
    {
        return view('mainsite.founders');
    }
    public function assessments()
    {
        return view('mainsite.assessments');
    }
    public function successStories()
    {
        return view('mainsite.success-stories');
    }
    public function careers()
    {
        return view('mainsite.careers');
    }
    public function solutions()
    {
        return view('mainsite.solutions');
    }
    public function bookSession()
    {
        $therapy_pricing = TherapyCategory::get();

        return view('mainsite.book-session', compact('therapy_pricing'));
        // return view('mainsite.book-session');
    }
    public function blogs()
    {
        return view('mainsite.blogs');
    }
    public function careerCounselling()
    {
        return view('mainsite.career-counselling');
    }
    public function schoolPrograms()
    {
        return view('mainsite.school-programs');
    }
    public function studentMentalWellness()
    {
        return view('mainsite.student-mental-wellness');
    }
    public function corporateWellness()
    {
        return view('mainsite.corporate-wellness');
    }
    public function traumaRewiring()
    {
        return view('mainsite.trauma-rewiring');
    }
    public function individualTherapyCoach()
    {
        return view('mainsite.individual-therapy-coach');
    }
    public function untangle()
    {
        return view('mainsite.untangle');
    }
    public function help()
    {
        return view('mainsite.help');
    }
    public function contactUs()
    {
        return view('mainsite.contact-us');
    }
    public function enquiryForm()
    {
        $countries = Country::get();
        $current_country = Country::where('code', ALL_DATA_LOC['countryCode'])->first();
        return view('mainsite.enquiry-form', compact('countries', 'current_country'));
    }
    public function blogDetails()
    {
        return view('mainsite.blog-details');
    }

    public function booking($plan_id)
    {
        $plan_id = Hashids::decode($plan_id)[0] ?? null; // 123

        if (!$plan_id) {
            abort(404);
        }

        $plan_details = TherapyCategory::find($plan_id);

        if (!$plan_details) {
            abort(404);
        }

        // return view('mainsite.booking');
        return view('mainsite.booking', compact('plan_details'));
    }

    public function termsOfService()
    {
        return view('mainsite.terms-of-service');
    }
    public function privacyPolicy()
    {
        return view('mainsite.privacy-policy');
    }
    public function dataProtection()
    {
        return view('mainsite.data-protection');
    }
    public function refundPolicy()
    {
        return view('mainsite.refund-policy');
    }
    public function cookiesPolicy()
    {
        return view('mainsite.cookies-policy');
    }
    public function complianceStatement()
    {
        return view('mainsite.compliance-statement');
    }
    public function chaiForLoneliness()
    {
        return view('mainsite.chai-for-loneliness');
    }

    public function nervousSystemOverreactionExplained()
    {
        return view('mainsite.nervous-system-overreaction-explained');
    }
    public function helpChildShuttingDown()
    {
        return view('mainsite.help-child-shutting-down');
    }
    public function chronicFatigueDespiteSleep()
    {
        return view('mainsite.chronic-fatigue-despite-sleep');
    }
    public function understandingTraumaBonds()
    {
        return view('mainsite.understanding-trauma-bonds');
    }
    public function firstTherapySessionGuide()
    {
        return view('mainsite.first-therapy-session-guide');
    }

    public function plansPricing()
    {
        return view('mainsite.plans-pricing');
    }

    public function submitEnquiry(Request $request)
    {

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_dial_code' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
            'therapy_requested' => 'required|string|max:255',
            'enquiry_type' => 'required|string|max:255',
            'brief_description' => 'required|string',
            'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
        ]);


        try {

            // Create enquiry
            $enquiry = new \App\Models\Enquiry();
            $enquiry->status = 'open';
            $enquiry->first_name = $request->input('first_name');
            $enquiry->last_name = $request->input('last_name');
            $enquiry->email = $request->input('email');
            $enquiry->phone_dial_code = $request->input('phone_dial_code');
            $enquiry->phone = $request->input('phone');
            $enquiry->therapy_requested = $request->input('therapy_requested');
            $enquiry->enquiry_type = $request->input('enquiry_type');
            $enquiry->description = $request->input('brief_description');
            $enquiry->save();

            if ($request->has('attachment')) {

                $path = public_path('uploads/enquiry/' . $enquiry->id);
                if (!file_exists($path)) {
                    mkdir($path, 0755, true);
                }
                //now upload the attachmentz
                $image = $request->file('attachment');
                $fullName = uniqid('attachment');
                $filename = $fullName . '_' . time() . '.' . $image->getClientOriginalExtension();
                $flag = $image->move($path, $filename);

                if ($flag) {
                    $enquiry->attachment = 'uploads/enquiry/' . $enquiry->id . '/' . $filename;
                    $enquiry->save();
                }
            }

            return response()->json(['status' => 'success', 'msg' => 'Enquiry Details Saved successfully.']);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['status' => 'error', 'msg' => 'Something Went Wrong. Please try again.']);
        }
    }

    public function submitJournalRequest(Request $request)
    {

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        NewsLetterSubscription::updateOrCreate(
            ['email' => $request->input('email')],
            ['full_name' => $request->input('full_name')]
        );

        return response()->json(['status' => 'success', 'msg' => 'Subscription successful.']);
    }
}
