<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            // 🔁 redirect berdasarkan role
            if ($user->role === 'admin') {
                return redirect()->to('/admin/dashboard');
            }

            if ($user->role === 'cashier') {
                return redirect()->route('pos.index');
            }

            // fallback kalau role tidak dikenali
            Auth::logout();
            return redirect('/')
                ->withErrors(['email' => 'Role user tidak valid']);
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
