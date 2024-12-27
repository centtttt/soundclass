<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function create()
    {
        $availableSchedules = Schedule::all();
        return view('createschedules', compact('availableSchedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string',
            'schedule_date' => 'required|date',
            'start_time' => 'required|date_format:H:i',
        ]);

        $startTime = $request->start_time;
        $endTime = date('H:i', strtotime($startTime . ' +2 hours'));

        $existingSchedule = Schedule::where('schedule_date', $request->schedule_date)
            ->where('start_time', '<', $request->end_time)
            ->where('end_time', '>', $request->start_time)
            ->first();

        if ($existingSchedule) {
            return redirect()->route('schedules.create')->with('message-error', 'There is already a schedule at this time. Please choose another time.');
        }

        Schedule::create([
            'user_id' => Auth::id(),
            'course_name' => $request->course_name,
            'schedule_date' => $request->schedule_date,
            'start_time' => $request->start_time,
            'end_time' => $endTime,
        ]);

        return redirect()->route('schedules.create')->with('message', 'Schedule created successfully.');
    }
}
