<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class DoctorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('doctor.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('doctor')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/doctor/dashboard');
        }
        
        // Authentication failed
        return redirect()->back()->withErrors(['message' => 'Invalid login credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
