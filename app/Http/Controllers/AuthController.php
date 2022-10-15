<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;

class AuthController extends Controller
{



    public function index()
    {
        if(Auth::check()){
            if(Auth()->user()->role == "admin"){
                return redirect('/home');
            }

            return redirect('/home/member');
        }

        return view('auth.login');
    }

    public function loginpost(Request $request)
    {


        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('/login')->withErrors(['errors' => 'username or password is incorrect']);
        }

        if(Auth()->user()->role == "admin"){
            return redirect('/home');
        }

        return redirect('/home/member');



    }

    public function logout()
    {

        Auth::logout();

        // request()->session()->invalidate();

        // request()->session()->regenerateToken();

        return redirect('/login')->with(['success' => 'success logout']);
    }

}
