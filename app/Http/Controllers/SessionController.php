<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('sessions.create');
    }

    public function store() {
        $attributes = request()->validate([
            'username' => 'required|username',
            'password' => 'required'
        ]);

        if (! auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'username' => 'Je gebruikersnaam of wachtwoord is incorrect'
            ]);
        }

        session()->regenerate();

        return redirect('/')->with('success', 'Welkom terug');
    }

    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'Bye bye');
    }
}
