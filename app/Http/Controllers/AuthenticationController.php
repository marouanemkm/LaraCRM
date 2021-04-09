<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    public function index() {
        return view('home');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails())
        {
            return redirect('/register')->withErrors($validator);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'client',
        ]);

        Auth::login($user);

        return redirect('dashbord')->with('You are successfully registered');
    }

    public function login(Request $request) {
        $validate = $request->validate([
            'email' => 'required|string|email|max:60',
            'password' => 'required|string|min:4|max:60',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('/dashbord');
        }

        return back()->withErrors([
            'credentials' => 'Identifiants incorrect',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function showLogin() {
        return view('auth.login');
    }
}
