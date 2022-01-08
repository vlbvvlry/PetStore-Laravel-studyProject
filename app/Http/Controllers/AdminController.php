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
        //dd($r);
        //  $add = $r->validate([
        //     'name' => 'required',
        //     'description' => '',
        //     'category_id' => 'required',
        //     'brand_id' => 'required',
        //     'price' => 'required'
        // ]);

        //dd($_FILES);

        $dir_upload_img = '/uploads/';
        $uploadfile = $dir_upload_img . basename($_FILES['userfile']['name']);
        copy($_FILES['userfile']['tmp_name'], SITE_ROOT.$uploadfile);

        //dd($_FILES);

        $add = $r->only(['name','description','category_id','brand_id','price']);
        $add['image'] = $uploadfile;
        
        //dd($add);

        $product = Product::create($add);
        if($product)
        {
            return redirect('/home');
        }
        return redirect(route('customer.private'));
        
    }
}