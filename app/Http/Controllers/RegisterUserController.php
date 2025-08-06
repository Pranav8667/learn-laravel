<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create() 
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate
     $attributes=   request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::required()],
            // 'email_verified_at' => ['nullable', 'date'],
            // 'remember_token' => ['nullable'],
        ]);

        // create the user
       $user = User::create($attributes);

        // log in
       Auth::login($user);

        // redirect somewhere
        return redirect('/jobs');
    }
}
