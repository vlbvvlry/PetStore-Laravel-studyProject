<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function Home(){
        return view('home');
    }

    function Reg(){
        return view('Auth\reg');
    }

    function Login(){
        return view('Auth\login');
    }
}
