<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;

Route::resource('companies', CompanyController::class);

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(["auth"])->group(function() {
    Route::get("/user", [HomeController::class, "userHome"])->name("home.user");
});

Route::middleware(["auth", "manager"])->group(function() {
    Route::get("/manager", [HomeController::class, "managerHome"])->name("home.manager");
});

Route::middleware(["auth", "admin"])->group(function() {
    Route::get("/admin", [HomeController::class, "adminHome"])->name("home.admin");
});