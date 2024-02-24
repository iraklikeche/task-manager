<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TaskController;
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



Route::middleware(['auth'])->prefix('dashboard')->group(function () {
  Route::get('/', [TaskController::class, 'index'])->name('dashboard');
  Route::get('/dashboard/show/{task}', [TaskController::class, 'show'])->name('dashboard.show');
  // Route::view('/show', 'tasks.show')->name('dashboard.show');
  Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

  Route::view('/create', 'tasks.create')->name('dashboard.create');
  Route::view('/edit', 'tasks.edit')->name('dashboard.edit');
  Route::view('/profile', 'tasks.profile')->name('dashboard.profile');
});