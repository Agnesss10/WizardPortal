<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showForm(){
        return view('auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string'
        ]);

        $credentials = ['username' => $request->input('username'), 'password' => $request->input('password')];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            flash('Log In successful !')->success();
            return redirect()->route('home')->with('user', Auth::user());
        }

        flash('Your username or password is not valid ! Please refill the form.')->error();
        return back();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
