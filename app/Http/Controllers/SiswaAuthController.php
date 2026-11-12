<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SiswaAuthController extends Controller
{
    public function showLogin(Request $request)
    {
        return view('auth.siswa-login', [
            'ekstra_id' => $request->ekstra_id
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
            'role' => 'siswa',
        ])) {
            $request->session()->regenerate();

            if ($request->ekstra_id) {
                return redirect()->route('siswa.create', [
                    'ekstra_id' => $request->ekstra_id
                ]);
            }

            return redirect()->intended(route('publik.ekstra.index'));
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah, atau akun bukan akun siswa.',
            ])
            ->withInput();
    }

    public function showRegister()
    {
        return view('auth.siswa-register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa',
        ]);

        return redirect()
            ->route('login.siswa')
            ->with('success', 'Registrasi berhasil. Silakan login sebagai siswa.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.siswa');
    }
}
