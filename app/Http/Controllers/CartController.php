<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        Cart::add($product, 1);

        return redirect()->back();

    }
    public function removeFromCart($id)
    {
       Cart::remove($id);
        return redirect()->back();
    }

    public function getCart()
    {
        return view('cart')
            ->with('products',Cart::content())
            ->with('total',Cart::total());
    }
}
