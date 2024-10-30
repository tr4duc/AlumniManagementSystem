<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactInformationController;
use App\Http\Controllers\AlumniCourseController;

// Route cho Alumni
Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni.index');
Route::get('/alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
Route::post('/alumni', [AlumniController::class, 'store'])->name('alumni.store');
Route::get('/alumni/{alumni}', [AlumniController::class, 'show'])->name('alumni.show');
Route::get('/alumni/{alumni}/edit', [AlumniController::class, 'edit'])->name('alumni.edit');
Route::put('/alumni/{alumni}', [AlumniController::class, 'update'])->name('alumni.update');
Route::delete('/alumni/{alumni}', [AlumniController::class, 'destroy'])->name('alumni.destroy');

// Route cho Courses
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('courses.destroy');

// Route cho Departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

// Route cho Jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');

// Route cho Events
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
Route::post('/events', [EventController::class, 'store'])->name('events.store');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');

// Route cho Contact Information
Route::get('/contact-information', [ContactInformationController::class, 'index'])->name('contact-information.index');
Route::get('/contact-information/create', [ContactInformationController::class, 'create'])->name('contact-information.create');
Route::post('/contact-information', [ContactInformationController::class, 'store'])->name('contact-information.store');
Route::get('/contact-information/{contact_information}', [ContactInformationController::class, 'show'])->name('contact-information.show');
Route::get('/contact-information/{contact_information}/edit', [ContactInformationController::class, 'edit'])->name('contact-information.edit');
Route::put('/contact-information/{contact_information}', [ContactInformationController::class, 'update'])->name('contact-information.update');
Route::delete('/contact-information/{contact_information}', [ContactInformationController::class, 'destroy'])->name('contact-information.destroy');

// Route cho Alumni Course
Route::get('/alumni-courses', [AlumniCourseController::class, 'index'])->name('alumni-courses.index');
Route::get('/alumni-courses/create', [AlumniCourseController::class, 'create'])->name('alumni-courses.create');
Route::post('/alumni-courses', [AlumniCourseController::class, 'store'])->name('alumni-courses.store');
Route::get('/alumni-courses/{alumni_course}', [AlumniCourseController::class, 'show'])->name('alumni-courses.show');
Route::get('/alumni-courses/{alumni_course}/edit', [AlumniCourseController::class, 'edit'])->name('alumni-courses.edit');
Route::put('/alumni-courses/{alumni_course}', [AlumniCourseController::class, 'update'])->name('alumni-courses.update');
Route::delete('/alumni-courses/{alumni_course}', [AlumniCourseController::class, 'destroy'])->name('alumni-courses.destroy');
