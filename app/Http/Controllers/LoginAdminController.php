<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login-admin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(array_merge($credentials, [
            'role' => 'admin',
        ]))) {
            $request->session()->regenerate();

            return redirect()->route('dashboard-admin');
        }

        return back()
            ->withErrors([
                'email' => 'Email atau kata sandi tidak sesuai.',
            ])
            ->onlyInput('email');
    }
}