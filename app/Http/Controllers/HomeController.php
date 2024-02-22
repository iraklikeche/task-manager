<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            return redirect('/dashboard');
        }

        // Your original logic for guests
        return app(SessionController::class)->create();
    }
}
