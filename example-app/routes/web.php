<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. 
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello/{name?}', [HelloController::class, 'index']);

Route::get('/messages/{id?}', [MessageController::class, 'index']);

// NOTE to self: Don't forget to add namespace at top op routing config 
Route::get('/courses', [CourseController::class, 'index']); 
Route::get('/courses/{id}', [CourseController::class, 'detail']);


// errors

Route::get('error-404', function () {
    return view('errors.404');
});