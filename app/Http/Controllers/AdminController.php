<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Brand;
use App\Product;

class AdminController extends Controller
{
    function PanelView()
    {
        return view('admin.panel');
    }

    function AddProductView()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.AddProductForm',
         ['categories' => $categories, 'brands' => $brands]);
    }

    function AddProduct(Request $r)
    {
         $add = $r->validate([
            'image' => 'required',
            'name' => 'required',
            'description' => '',
            'category_id' => 'required',
            'brand_id' => 'required',
            'price' => 'required'
        ]);

        $product = Product::create($add);
        if($product)
        {
            return redirect('home');
        }
        return redirect(route('customer.private'));
        //dd($r);
    }
}