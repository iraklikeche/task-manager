<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
	// public function update(Request $request)
	// {
	// 	$user = Auth::user();

  //   $request->validate([
  //       'avatar' => 'nullable|image|max:2048', // 2MB Max
  //       'cover' => 'nullable|image|max:2048',
  //   ]);

  //   if ($request->hasFile('avatar')) {
  //       $path = $request->file('avatar')->store('profiles', 'public');
  //       $user->profile_image = $path;
  //   }

  //   if ($request->hasFile('cover')) {
  //       $path = $request->file('cover')->store('covers', 'public');
  //       $user->cover_image = $path;
  //   }

  //   $user->save();

  //   return back()->with('success', 'Profile updated successfully.');
	// }

	// public function showProfile()
	// {
	// 	$user = Auth::user();
	// 	return view('profile', compact('user'));
	// }
}
