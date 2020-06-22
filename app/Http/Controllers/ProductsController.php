<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index()
    {
        return view('home')->with('products', Product::take(8)->get());

    }

    public function shop()
    {
        return view('shop')
            ->with('products',Product::paginate(8))
            ->with('categories', Category::all())
            ->with('selectedCategory','-1');
    }
    public function getProductsByCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('shop')
            ->with('products',$category->products()->paginate(8))
            ->with('categories', Category::all())
            ->with('selectedCategory',$id);
    }


}
