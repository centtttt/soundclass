<?php

namespace App\Http\Controllers;

use App\Models\TeacherEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;

class MyClassesController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $schedules = Schedule::where('user_id', $userId)
            ->orderBy('schedule_date')
            ->get();

        $enroll = TeacherEnrollment::where('user_id', $userId)
            ->with('teacher.user')
            ->get();

        return view('myclasses', ['schedules' => $schedules], compact('enroll'));
    }
}
