<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Customer;

class LoginController extends Controller
{
   // use AuthenticatesUsers;

    function getForm()
    {
        if(Auth::check())
        {
            return redirect(route('customer.private'));
        }
        return view('auth.login');
    }


    function logout()
    {
        Auth::logout();
        return redirect('home');
    }
    

    public function login(Request $request)
    {
        $formFields = $request->only(['email','password']);
        if(Auth::attempt($formFields))
        {
            return redirect('/');
        }
        return redirect(route('customer.login'))->withErrors([
            'email' => 'Error. Repeat, please.'
        ]);
    }
}