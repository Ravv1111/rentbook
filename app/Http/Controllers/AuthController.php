<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Validate;

class AuthController extends Controller
{
    public function register()
    {
    return view('Auth.register');
    }
    
    public function login()
    {
    return view('Auth.login');
    }
    
    public function registerAccount(Request $request)
    {
    
    $credentials = $request->validate([
    'nama' => 'required',
    'email' => 'required',
    'password' => 'required',
    'no_hp' => 'required',
    'address' => 'required',
    ]);
    
    User::create($credentials);
    return redirect('/')->with('success', 'Berhasil membuat akun');
    }
    
    public function auth(Request $request)
    {
    $request->validate([
        'email' => 'required|exists:users,email',
        'password' => 'required'
     ],[
        'email.exists' => 'Email ini belum tersedia',
        'email' => 'Email harus diisi',
        'password' => 'Password harus diisi'
     ]);
    $user = $request->only('email', 'password');
    return redirect('/dashboard')->with('SuccesLogin', 'anda berhasil login');
    }
}

