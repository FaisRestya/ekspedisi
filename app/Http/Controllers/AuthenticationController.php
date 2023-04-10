<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function loginUser(Request $request)
    {
        $dataLogin = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        //    dd($dataLogin);
        if (Auth::attempt($dataLogin)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        } else {
            // alert('Gagal','Email atau Password Anda Mungkin Salah.');
            return back();
        }
    }

    public function logout()
    {
       Auth::logout();
       return redirect('/');
    }
}
