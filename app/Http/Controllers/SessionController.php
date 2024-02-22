<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('welcome');
    }

    public function store(StoreUserRequest $request){
        $credentials = $request->validated();

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
