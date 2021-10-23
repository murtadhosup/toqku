<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('/dashboard/login');
    }

    public function authenticate(Request $request){
        $validation = $request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]);

        $credentials = array(
            'email' => $validation['email'],
            'password' => $validation['password']
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with(['error' => 'Email atau Password salah']);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
