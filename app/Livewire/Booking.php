<?php

namespace App\Livewire;

use App\Models\State;
use App\Models\Country;
use Livewire\Component;
use App\Models\BookedTimeSlot;
use Illuminate\Support\Carbon;

class Booking extends Component
{
    public $selected_date, $slot_duration, $selected_time_slot;

    public $plan_details, $countries, $states, $current_country;

    public function mount($plan_details)
    {
        if (request()->get('date')) {
            $this->selected_date = Carbon::parse(request()->get('date'))->format('Y-m-d');
        } else {
            $this->selected_date = date('Y-m-d');
        }

        $this->slot_duration = '60min';

        $this->plan_details = $plan_details;

        $this->countries = Country::get();
        $this->states = State::get();

        $this->current_country = Country::where('code', ALL_DATA_LOC['countryCode'])->first();
    }

    public function selectTimeSlot($timeSlot)
    {
        $this->selected_time_slot = $timeSlot;
    }

    public function selectDate($date)
    {
        $this->selected_date = $date;
    }

    public function render()
    {
        $booked_time_slots = BookedTimeSlot::where('status', 1)
            ->where('booking_date', $this->selected_date)
            ->pluck('booking_time')
            ->toArray();

        return view('livewire.booking', compact('booked_time_slots'));
    }
}
