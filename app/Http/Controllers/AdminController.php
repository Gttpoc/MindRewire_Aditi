<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Models\TherapyCategory;
use App\Models\NewsLetterSubscription;

class AdminController extends Controller
{
    public function price()
    {
        $pricing = TherapyCategory::paginate(20);

        return view('admin.pricing', compact('pricing'));
    }


    public function priceUpdate(Request $request)
    {
        $therapy_details = TherapyCategory::find($request->id);
        $therapy_details->price = $request->new_price;
        $therapy_details->save();

        return response()->json(['status' => 'success', 'message' => 'Price updated successfully']);
    }

    public function enquiry()
    {
        $enquiry_details = Enquiry::orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.enquiry', compact('enquiry_details'));
    }

    public function enquiryUpdate(Request $request)
    {
        $enquiry = Enquiry::find($request->id);
        $enquiry->status = $request->status;
        $enquiry->save();
        return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
    }


    public function newsLetterSubscription(Request $request)
    {
        $newsLetter = NewsLetterSubscription::orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.news-letter', compact('newsLetter'));
    }

    public function booking()
    {
        $booking_details = Billing::with([
            'bookedTimeSlots',
            'therapyCategory'
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(20);

        return view('admin.booking', compact('booking_details'));
    }
}
