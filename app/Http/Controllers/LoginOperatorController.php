<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginOperatorController extends Controller
{
    public function index()
    {
        return view('login-operator');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(array_merge($credentials, [
            'role' => 'operator',
        ]))) {
            $request->session()->regenerate();

            return redirect()->route('tugas-cuci-operator');
        }

        return back()
            ->withErrors([
                'email' => 'Email atau kata sandi tidak sesuai.',
            ])
            ->onlyInput('email');
    }
}