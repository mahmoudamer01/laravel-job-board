<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get("/" , [IndexController::class, "index"]); // Route to the index method in Index controller
route::get("about", [IndexController::class, "about"]); // Route to the about method in Index controller
Route::get("contact", [IndexController::class, "contact"]); // Route to the contact method in Index controller
Route::get("/job" , [JobController::class, "index"]); // Route to the index method in JobController