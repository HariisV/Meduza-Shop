<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Admin.login');
    }
    public function LoginProses(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];

        if (Auth()->attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        }else{
            return Redirect()->route('login')->with('success', 5);
        }
    }
    public function logout(Request $request)
    {
        Auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
