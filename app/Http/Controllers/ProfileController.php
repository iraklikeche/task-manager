<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	public function updateProfile(UpdatePasswordRequest $request)
	{
		if (empty($attributes['new_password']) && empty($request->hasFile('avatar')) && empty($request->hasFile('cover_image'))) {
			return back()->with('danger', 'Please make changes');
		}

		$user = Auth::user();
		$attributes = $request->validated();

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

		if ($request->hasFile('cover_image')) {
			$request->cover_image->storeAs('images', 'cover_image.png', 'public');
		} elseif ($request->input('delete') === 'true') {
			Storage::delete('public/storage/covers/' . $user->id . '.png');
		}

		$user->save();

		return back()->with('success', 'Profile successfully updated.');
	}
}
