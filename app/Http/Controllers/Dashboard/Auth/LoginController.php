<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('admin');
        }
        return view('dashboard.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'       => 'required|string|email',
            'password'    => 'required|string'
        ]);
        $rememberme = $request->rememberme == 'on' ? true : false;
        if (auth()->guard('admin')->attempt([
            'email'    => $request->email,
            'password' => $request->password
        ], $rememberme)) {
            return redirect('admin')->with('success', 'Login Succesfully!');
        } else {
            return redirect()->back()->with('info', 'Incorrect email or password!');
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
}
