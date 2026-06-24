<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KontrolAuth extends Controller
{
    public function showloginform()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ],[
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format email tidak valid',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal 6 karakter',
            ]);

        
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'email' => 'Email atau password salah!'
            ]);
        }

        session([
            'user_id' => $user->id,
            'role'    => $user->role,
            'name'    => $user->name,
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function logout(Request $request)
    {
          session()->flush();
    session()->invalidate();
    session()->regenerateToken();

    return redirect()->route('home');
    }
}