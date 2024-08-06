<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Lomkit\Rest\Facades\Rest;
use App\Rest\Controllers\StudentsController;
use App\Rest\Controllers\TeachersController;
use App\Rest\Controllers\SubjectsController;
use App\Rest\Controllers\QuartersController;
use App\Rest\Controllers\GradesController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Rest::resource('students', StudentsController::class);
Rest::resource('teachers', TeachersController::class);
Rest::resource('subjects', SubjectsController::class);
Rest::resource('quarters', QuartersController::class);
Rest::resource('grades', GradesController::class);
