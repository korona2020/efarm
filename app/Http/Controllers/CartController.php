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
        $item = Cart::add($product, 1);

        //update price of item if has discount
        if($product->discount != 0)
        {
            $discount_price = $item->price - ($item->price*($product->discount/100));
            Cart::update($item->rowId,['price'=> $discount_price]);
        }
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
            ->with('products', Cart::content())
            ->with('total', Cart::total())
            ->with('subtotal', Cart::subtotal());
    }


}
