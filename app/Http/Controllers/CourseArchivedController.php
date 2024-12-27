<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseArchivedController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $query = $request->input('search');
        $filter = $request->input('filter');

        $bookmarkedCourses = $user->bookmarkedCourses()->when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->where('title', 'like', '%' . $query . '%')
                         ->orWhere('description', 'like', '%' . $query . '%');
        })->when($filter, function ($queryBuilder) use ($filter) {
            $queryBuilder->where('type', $filter);
        })->get();

        return view('coursearchived', compact('bookmarkedCourses'));
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
