<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    { 
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        // var_dump($login);die;
        // var_dump(Auth::attempt($login));die;

        if (Auth::attempt($login)) {
            // var_dump(Auth::check());die;
            return redirect()->route('manager.list.file');

        } else {
            
            return redirect('/register');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    public function register()
    {
        return view('auth.register');
    }
}
