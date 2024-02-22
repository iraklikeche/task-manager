<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function() {
    if (Auth::check()) {
        return redirect('/dashboard');
    }

    return app(SessionController::class)->create();
})->middleware('guest');


Route::post('login',[SessionController::class,'store']);
Route::post('logout',[SessionController::class,'destroy'])->middleware('auth');

Route::get('/dashboard',function(){
    return view('tasks.adminPanel');
})->middleware('auth');
