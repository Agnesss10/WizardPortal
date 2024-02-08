<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:20|unique:users',
            'password' => [
                'required',
                'string',
                'confirmed',
                'min:8',
                'max:20',
                'regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/',
            ],
        ], [
            'username.required' => 'Veuillez entrer un identifiant.',
            'username.max' => 'L\'identifiant ne peut pas dépasser :max caractères.',
            'username.unique' => 'Cet identifiant est déjà utilisé. Veuillez en choisir un autre.',
            'password.required' => 'Veuillez entrer un mot de passe.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
            'password.max' => 'Le mot de passe ne peut pas dépasser :max caractères.',
            'password.regex' => 'Le mot de passe doit contenir au moins une majuscule, un chiffre et un symbole parmi !@#$%^&*.',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            foreach ($errors->all() as $error) {
                flash($error)->error();
            }
            return redirect()->back()->withErrors($errors)->withInput();
        }

        $user = new User();
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->save();

        flash('Registration successful !')->success();
        return redirect('/');
    }
}
