<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8',
        ], [
            'email.required'    => 'Email address is required!',
            'email.email'       => 'Please enter a valid email!',
            'password.required' => 'Password is required!',
            'password.min'      => 'Password must be at least 8 characters!',
        ]);

        $credentials = $request->only('email', 'password');
        $remember    = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect('/home')->with('success', 'Welcome back!');
        }

        return back()->with('error', 'Invalid email or password! Please register first');
    }

   
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|min:3|max:50',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'name.required'      => 'Full name is required!',
            'name.min'           => 'Name must be at least 3 characters!',
            'name.max'           => 'Name cannot exceed 50 characters!',
            'email.required'     => 'Email address is required!',
            'email.email'        => 'Please enter a valid email!',
            'email.unique'       => 'This email is already registered!',
            'password.required'  => 'Password is required!',
            'password.min'       => 'Password must be at least 8 characters!',
            'password.confirmed' => 'Passwords do not match!',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Account created! Please login.');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}