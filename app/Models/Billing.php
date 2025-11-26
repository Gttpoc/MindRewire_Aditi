<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bookedTimeSlots()
    {
        return $this->hasOne(BookedTimeSlot::class, 'billing_id', 'id');
    }

    public function therapyCategory()
    {
        return $this->hasOne(TherapyCategory::class, 'id', 'therapy_type');
    }

    public function countryDetails()
    {
        return $this->hasOne(Country::class, 'id', 'country');
    }

    public function stateDetails()
    {
        return $this->hasOne(State::class, 'id', 'state');
    }

    public function getPaymentAmountAttribute()
    {
        return $this->amount / 100; // Convert from paise to rupees
    }
}
