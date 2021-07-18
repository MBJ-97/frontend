<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:businessuser')->except('logout');
    }



    public function showBusinessUserLoginForm()
    {
        return view('business/login');
    }


    public function businessUserLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('businessuser')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/business/dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
