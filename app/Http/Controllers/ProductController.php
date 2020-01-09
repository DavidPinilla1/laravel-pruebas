<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function getAll()
    {
        return Product::all();
    }
    public function insert(Request $request)
    {
        $input = $request->all();
        // dd($input);//con dd interumpimos flujo y vemos que hay en el obj
        // dump($input);//lo mismo que dd pero no interrumpe el flujo
        $product = Product::create($input);
        return $product;
    }
}
