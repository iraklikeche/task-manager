<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->middleware('guest');


Route::post('login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');

Route::view('/dashboard', 'tasks.adminPanel')->middleware('auth');
Route::view('/dashboard/edit', 'tasks.edit')->middleware('auth');
Route::view('/dashboard/create', 'tasks.create')->middleware('auth');

