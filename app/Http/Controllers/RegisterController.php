<?php

namespace App\Http\Controllers;

use App\Models\account;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => 'required|min:5|max:255|email|unique:users',
            'password' => 'required|min:5|max:255',
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);

        Session::flash('reg', 'success');
        User::create($validatedData);


        return redirect('/login');
    }
}