<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


use Illuminate\Support\Facades\Auth;

use Illuminate\Validation\Validator;


// use Illuminate\Support\Facades\Validator;




class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($credentials['email'] == 'oneridh18@gmail.com') {
                $request->session()->put('asikmanis', 'value');
            } else {
                $request->session()->put('userrr', 'value');
            }
            return redirect()->intended('/');
        }

        return back()->with('loginError', 'login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}