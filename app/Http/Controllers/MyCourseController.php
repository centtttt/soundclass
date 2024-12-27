<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyCourseController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $enrollments = Enrollment::where('user_id', $user->id)->get();

        $courses = Course::whereIn('id', $enrollments->pluck('course_id'))->get();

        return view('mycourse', compact('courses', 'enrollments'));
    }
}
