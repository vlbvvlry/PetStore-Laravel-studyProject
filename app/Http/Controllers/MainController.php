<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    function Home(){
        return view('home');
    }

    function Reg(){
        return redirect('home');
    }

    function Login(){
        return redirect('home');
    }

    function ItemView(){
        return view('items.mainItemPage');
    }
}
