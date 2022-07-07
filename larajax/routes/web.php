<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('students', [StudentController::class, "index"]);
Route::post('students/create', [StudentController::class, "store"]);
Route::get('students/fetch', [StudentController::class, "fetch"]);
Route::put('students/update/{id}', [StudentController::class, "update"]);
Route::delete('students/delete/{id}', [StudentController::class, "destroy"]);