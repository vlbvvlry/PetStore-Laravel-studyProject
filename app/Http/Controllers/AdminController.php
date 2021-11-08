<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function PanelView()
    {
        return view('admin.panel');
    }

    function AddProductView()
    {
        return view('admin.AddProductForm');
    }

    function AddProduct(Request $request)
    {
        //
    }
}
