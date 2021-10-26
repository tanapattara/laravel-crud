<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\MajorController::class, 'index']);

Route::get('/major', [App\Http\Controllers\MajorController::class, 'index']);
Route::get('/major.create', [App\Http\Controllers\MajorController::class, 'create']);
Route::post('/major.store', [App\Http\Controllers\MajorController::class, 'store']);
Route::get('/major/{id}', [App\Http\Controllers\MajorController::class, 'show']);
Route::get('/major.edit/{id}', [App\Http\Controllers\MajorController::class, 'edit']);
Route::post('/major.destroy/{id}', [App\Http\Controllers\MajorController::class, 'destroy']);

Route::get('/student',[App\Http\Controllers\StudentController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');