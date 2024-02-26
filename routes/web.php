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

Route::post('login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::middleware(['auth'])->prefix('dashboard')->group(function () {
	Route::view('/create', 'tasks.create')->name('dashboard.create');
	Route::view('/profile', 'tasks.profile')->name('dashboard.profile');

	Route::controller(TaskController::class)->group(function () {
		Route::get('/', 'index')->name('dashboard');
		Route::get('/show/{task}', 'show')->name('dashboard.show');
		Route::get('/edit/{task}', 'edit')->name('dashboard.edit');
		Route::delete('/overdue-tasks', 'deleteOverdueTasks')->name('tasks.deleteOverdue');

		Route::prefix('tasks')->group(function () {
			Route::put('/{task}', 'update')->name('tasks.update');
			Route::delete('/{task}', 'destroy')->name('tasks.destroy');
			Route::post('/', 'store')->name('tasks.store');
		});
	});
});
