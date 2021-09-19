<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $req)
    {

        $dential = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($dential)) {
            $req->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginerror', 'Login failed');

    }

    public function register(Request $request)
    {

        $data = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required | min:5 | max:255'
        ]);

        $data['password'] = hash::make($data['password']);

        user::create($data);

        return redirect('/login')->with('berhasil','Registration Succesfull! Please login');

    }

    public function logout(request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
