<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedTimeSlot extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getTherapyModeForUserAttribute()
    {
        return ucfirst(str_replace(' ', '-', $this->therapy_mode));
    }

    public function getBookingDateForUserAttribute()
    {
        return date('d M Y', strtotime($this->booking_date));
    }
}
