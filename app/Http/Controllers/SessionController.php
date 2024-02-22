<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('welcome');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)){

            return redirect('/dashboard');
        }

        return back()->withInput()
        ->withErrors([
            'email' => 'The provided credentials do not match our records ',
        ]);
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
