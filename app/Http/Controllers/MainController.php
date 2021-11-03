<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Category;
use App\Brand;
use Auth;

class MainController extends Controller
{
    function Home()
    {
        return view('home');
    }

    function Reg()
    {
        return redirect('home');
    }

    function Login()
    {
        return redirect('home');
    }

    function ItemView()
    {
        dd(Product::all());
    }

    function AddProdView()
    {
        if(!Auth::check())
        {
            return redirect('home');
        }
        return view('addProductForm', ['cats' => Category::all(), 'brands' => Brand::all()]);
    }

    function AddProd(Request $r)
    {
        $a = $r->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => '',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required'
        ]);

        $product = Product::create($a);
        if($product)
        {
            return redirect('home');
        }
        return redirect(route('customer.private'));
    }
}
