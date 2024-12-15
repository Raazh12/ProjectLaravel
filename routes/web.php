<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Define routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/id/Dashboard',[AdminController::class,'Dashboard']);