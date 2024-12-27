<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Teacher;
use App\Models\TeacherEnrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollTeacherController extends Controller
{
    public function enroll($teacherId)
    {

        if (Auth::check()) {
            $user = Auth::user();
            $teacher = Teacher::findOrFail($teacherId);

            $existingEnrollment = TeacherEnrollment::where('user_id', $user->id)->first();

            if ($existingEnrollment) {
                return redirect()->back()->with('message', 'You can only enroll in one teacher.');
            }

            TeacherEnrollment::create([
                'user_id' => $user->id,
                'teacher_id' => $teacher->id,
            ]);

            return redirect()->route('teachers')->with('messagesuccess', "Enrollment successful. Please check your 'My Classes' page to create a scheduling agreement!");
        }

        return redirect()->route('login')->with('message', 'Please log in to enroll.');
    }
}
