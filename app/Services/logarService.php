<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class logarService
{
    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin');
    }

    public function logar($request)
    {
        try {
            $credentials = $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            /*
            email: admin@mail.com
            senha: a0d1f5adcdb9817f13df65816695cfa1 (senha123admin)
            */
            if (Auth::attempt($credentials)) {
                dd('teste');
                return redirect()->route('admin');
            } else {
                Session::flash('error', 'E-mail e/ou senha não conferem.');
                return redirect()->route('login');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
