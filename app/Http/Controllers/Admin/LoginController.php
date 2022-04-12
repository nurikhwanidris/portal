<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Index
    public function index()
    {
        return view('spsm.login.index', [
            'title' => 'Login',
        ]);
    }

    // Login
    public function authenticate(Request $request)
    {
        $logins = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($logins)) {
            $request->session()->regenerate();
            return redirect()->intended('/spsm');
        }

        return back()->with('loginError', 'Gagal untuk log masuk. Semak semula kata nama & kata laluan anda');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/spsm/login')->with('success', 'Sesi anda berjaya ditamatkan.');
    }
}
