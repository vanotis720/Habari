<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatatedData = $request->validate([
            'name' => 'required|string',
            'phone' => 'required|min:9|max:15|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors('une erreur s\'es produite');
    }

    public function register_form()
    {
        return view('auth.register');
    }

    public function login_form()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validatatedData = $request->validate([
            'phone' => 'required|min:9|max:15',
            'password' => 'required|min:8',
        ]);

        $loginData = $request->all();

        $credentials = ['phone' => $loginData['phone'], 'password' => $loginData['password'], 'role' => 'user'];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors('une erreur s\'es produite');
    }

    public function getUser()
    {
        return User::find(auth()->user()->id);
    }
}
