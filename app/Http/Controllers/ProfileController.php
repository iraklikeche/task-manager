<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function updateProfile(UpdatePasswordRequest $request)
	{
		$user = Auth::user();
		$attributes = $request->validated();

		// if ($attributes['current_password'] && !Hash::check($attributes['current_password'], $user->password)) {
		// 	return back()->withErrors(['current_password' => __('validation.confirmed')]);
		// }

		// $user->password = Hash::make($request->input('new_password'));
		if (!empty($attributes['new_password'])) {
			if ($attributes['current_password'] && !Hash::check($attributes['current_password'], $user->password)) {
				return back()->withErrors(['current_password' => __('validation.confirmed')]);
			}

			$user->password = Hash::make($attributes['new_password']);
		}

		if ($request->hasFile('avatar')) {
			$path = $request->file('avatar')->store('profiles', 'public');
			$user->profile_image = $path;
		}

		if ($request->hasFile('cover')) {
			$path = $request->file('cover')->store('covers', 'public');
			$user->cover_image = $path;
		}

		$user->save();

		return back()->with('success', 'Password successfully updated.');
	}
}
