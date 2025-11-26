<?php

use Illuminate\Support\Carbon;

function version_url($path = '')
{

    $path_info = pathinfo($path);
    $ext = $path_info['extension'];
    $excludeEXT = array("js", "css", "json", "mp4", "webm", "svg");

    if (in_array($ext, $excludeEXT)) {
        $base_url = url('/');
        if (file_exists(public_path($path))) {
            $version = filemtime(public_path($path));
            return $base_url . '/' . $path . '?v=' . $version;
        } else {
            return $base_url . '/' . $path;
        }
    } else {
        $base_url = url('/');
        if (file_exists(public_path($path))) {
            $version = filemtime(public_path($path));
            //return 'img/' . base64_encode($path) . '?v=' . $version;
            return $base_url . '/' . $path . '?v=' . $version;
        } else {
            //return 'img/' . base64_encode($path);
            return $base_url . '/' . $path;
        }
    }
}

if (!function_exists('generateMonthDates')) {
    function generateMonthDates(int $year, int $month): array
    {
        $dates = [];
        $today = Carbon::today();

        // Start from tomorrow if the given month is the current month
        $start = Carbon::create($year, $month, 1);
        if ($today->year === $year && $today->month === $month) {
            $start = $today->copy(); // Start from today
        }

        $end = Carbon::create($year, $month, 1)->endOfMonth();

        for ($date = $start->copy(); $date->lte($end); $date->addDay()) {
            $dates[] = [
                'date' => $date->format('d M'),           // e.g., 15 Jul
                'day'  => strtoupper($date->format('D')), // e.g., TUE
                'full' => $date->format('Y-m-d'),         // e.g., 2025-07-15                
            ];
        }

        return $dates;
    }
}


if (!function_exists('generateTimeSlotsByDuration')) {
    function generateTimeSlotsByDuration(
        int $year,
        int $month,
        int $day,
        string $slotDuration = '30min',
        array $bookedTimes = [],
        string $timezone = 'Asia/Kolkata'
    ): array {
        $now = Carbon::now($timezone);
        $startTime = Carbon::create($year, $month, $day, 9, 0, 0, $timezone); // always 9:00 AM
        $endOfDay = Carbon::create($year, $month, $day, 18, 0, 0, $timezone); //        

        $durationInMinutes = (int) filter_var($slotDuration, FILTER_SANITIZE_NUMBER_INT);
        $slots = [];

        // Normalize booked time into H:i for comparison
        $booked = collect($bookedTimes)->map(function ($time) use ($year, $month, $day, $timezone) {
            return Carbon::createFromFormat('h:i A', $time, $timezone)
                ->setDate($year, $month, $day)
                ->format('H:i');
        })->toArray();

        $slot = $startTime->copy();

        while ($slot->copy()->addMinutes($durationInMinutes)->lte($endOfDay)) {
            // Format time to compare
            $slotFormatted = $slot->format('H:i');

            if (
                $slot->gt($now) &&                     // must be in the future
                !in_array($slotFormatted, $booked)     // not already booked
            ) {
                $slots[] = $slot->format('h:i A');
            }

            // Step to next slot by exact multiple of duration
            $slot->addMinutes($durationInMinutes);
        }

        return $slots;
    }
}
