<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	public function index(): RedirectResponse
	{
		// Check if the user is authenticated
		if (Auth::check()) {
			return redirect()->route('dashboard');
		}

		// Your original logic for guests
		return redirect()->route('home');
	}
}
