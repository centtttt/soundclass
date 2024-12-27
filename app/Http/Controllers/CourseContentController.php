<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class CourseContentController extends Controller
{
    public function index($id) {
        $courses = Course::findOrFail($id);
        
        $relatedCourses = Course::where('type', 'like', $courses->type)
        ->where('id', '!=', $id)->get();
    
        return view('coursecontent', compact('courses', 'relatedCourses'));
    }
    public function toggleBookmark(Request $request, $courseId)
    {
        $user = auth()->user();
        $course = Course::findOrFail($courseId);

        if ($user->bookmarkedCourses()->where('course_id', $courseId)->exists()) {
            $user->bookmarkedCourses()->detach($courseId); 
            return response()->json(['message' => 'Course removed from bookmarks'], 200);
        } else {
            $user->bookmarkedCourses()->attach($courseId);
            return response()->json(['message' => 'Course added to bookmarks'], 200);
        }
    }
    public function enroll(Request $request, $id)
    {
        $user = auth()->user(); 
        $course = Course::findOrFail($id);

        $alreadyEnrolled = Enrollment::where('user_id', $user->id)
                            ->where('course_id', $id)
                            ->exists();

        if ($alreadyEnrolled) {
            return response()->json(['message' => 'You are already enrolled in this course.'], 200);
        }

        Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $id,
        ]);

        return response()->json(['message' => 'Successfully enrolled in the course.'], 200);
    }
}
