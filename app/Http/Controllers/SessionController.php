<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
	public function store(StoreUserRequest $request): RedirectResponse
	{
		$credentials = $request->validated();

		if (Auth::attempt($credentials)) {
			return redirect()->route('dashboard');
		}

		return back()->withInput()
		->withErrors([
			'email' => __('validation.credentials'),
		]);
	}

	public function destroy(Request $request): RedirectResponse
	{
		Auth::logout();
		return redirect()->route('home');
	}
}
