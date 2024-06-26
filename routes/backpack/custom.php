<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('user', 'UserCrudController');
    Route::crud('faculty', 'FacultyCrudController');
    Route::crud('department', 'DepartmentCrudController');
    Route::crud('lesson', 'LessonCrudController');
    Route::crud('student', 'StudentCrudController');
    Route::crud('year', 'YearCrudController');
    Route::crud('semester', 'SemesterCrudController');
    Route::crud('student-lesson', 'StudentLessonCrudController');
}); // this should be the absolute last line of this file