<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Lomkit\Rest\Facades\Rest;
use App\Rest\Controllers\StudentsController;
use App\Rest\Controllers\TeachersController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Rest::resource('students', StudentsController::class);
Rest::resource('teachers', TeachersController::class);
