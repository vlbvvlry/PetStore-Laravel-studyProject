<?php

namespace App\Http\Controllers\Auth;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;

class RegisterController extends Controller
{
    function getForm()
    {
        if(Auth::check())
        {
            return redirect(route('customer.private'));
        }
        return view('auth.reg');
    }
    
    public function save(Request $request)
    {
        if(Auth::check())
        {
            return redirect(route('customer.private'));
        }

        $validateFields = $request->validate([
            'email' => 'required|email|',
            'password' => 'required'
        ]);

        if(Customer::where('email', $validateFields['email'])->exists())
        {
            return redirect(route('customer.registration'))->withErrors([
                'email' => 'Email must be unique.'
            ]);
        }
        
        $customer = Customer::create($validateFields);
        if($customer)
        {
            Auth::login($customer);
            return redirect('/');
        }
        return redirect()->to(route('customer.login'))->withErrors([
            'formError' => 'Error'
        ]);
    }
}
