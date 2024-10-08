<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// }

Route::resource('/employee', EmployeeController::class);

Route::resource('/customer', CustomerController::class);

Route::resource('/country', CountryController::class);

Route::resource('/student', StudentController::class);