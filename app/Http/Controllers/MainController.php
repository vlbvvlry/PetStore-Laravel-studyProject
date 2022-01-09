<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Product;
use App\Category;
use App\Brand;
use Auth;

session_start();

class MainController extends Controller
{
 
    function Home()
    {
        array_key_exists('cart', $_SESSION) ? : $_SESSION['cart'] = null;

        $products = Product::orderBy('id','asc')->take(4)->get();
        return view('home', ['products' => $products]);
    }

    function ItemView()
    {
        array_key_exists('cart', $_SESSION) ? : $_SESSION['cart'] = null;

        return view('items.mainItemPage', ['products' => Product::all()]);
    }

    function ProductView($id)
    {
        array_key_exists('cart', $_SESSION) ? : $_SESSION['cart'] = null;

        $p = Product::find($id);
        $in_cart = false;
        if($_SESSION['cart'] != null)
        {
            $arr = array_keys($_SESSION['cart']);
            for($i = 0; $i < count($arr); $i++)
            {
                if($arr[$i] == $id)
                {
                    $in_cart = true;
                    break;
                }
            }
        }
        return view('items.moreItemPage', ['product' => $p,
         'cat' => Category::find($p->category_id),
         'bra' => Brand::find($p->brand_id),
        'in_cart' => $in_cart]);
    }

    function CartView()
    {
        array_key_exists('cart', $_SESSION) ? : $_SESSION['cart'] = null;

        $IDs = $_SESSION['cart'] == null ? null : array_keys($_SESSION['cart']);
        $counts = $_SESSION['cart'];
    
        return view('items.cart', ['counts' => $counts, 'IDs' => $IDs,
            'products' => Product::all()]);
    }

    function UpdateCart(Request $r)
    {  
        $itemId = $r->only(['itemId']);
        $_SESSION['cart'][$itemId['itemId']] = 1;
        $id = $itemId['itemId'];
        return redirect('/items');
    }

    function ClearCart()
    {
        unset($_SESSION['cart']);
        return redirect('/cart');
    }

    function DeleteItemCart($id)
    {
        unset($_SESSION['cart']["$id"]);
        return redirect('/cart');
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

    //Debug
    function ddS()
    {
        dd($_SERVER);
    }

    function cS()
    {
        session_destroy();
    }
}