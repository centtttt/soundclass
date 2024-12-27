<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CourseArchivedController;
use App\Http\Controllers\CourseContentController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnrollTeacherController;
use App\Http\Controllers\MyClassesController;
use App\Http\Controllers\MyCourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/teachers', [TeachersController::class, 'index'])->name('teachers');
Route::post('/courses/{id}/bookmark', [CoursesController::class, 'toggleBookmark'])->name('bookmark');
Route::post('/coursecontent/{id}/bookmark', [CourseContentController::class, 'toggleBookmark'])->name('bookmarkcc');
Route::post('/teachers/{teacherId}', [EnrollTeacherController::class, 'enroll'])->name('enrollTeacher');

Route::middleware('auth')->group(function () {
    Route::get('/myclasses', [MyClassesController::class, 'index'])->name('myclasses');
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
    Route::post('/courses/{id}', [CoursesController::class, 'enroll'])->name('mycoursesenroll');
    Route::get('/coursecontent/{id}', [CourseContentController::class, 'index'])->name('coursecontent');
    Route::get('/coursearchived', [CourseArchivedController::class, 'index'])->name('archived');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/community', [CommunityController::class, 'index'])->name('community');
    Route::get('/mycourses', [MyCourseController::class, 'index'])->name('mycourses');
    Route::get('/schedules/create', [ScheduleController::class, 'create'])->name('schedules.create');
    Route::post('/schedules', [ScheduleController::class, 'store'])->name('schedules.store');
});


require __DIR__.'/auth.php';
