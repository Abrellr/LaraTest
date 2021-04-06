<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //get all products
    public function get()
    {
        $products = Product::all();
        return $products;
    }

    //create one product
    public function getOne($id)
    {
        return $id;
    }

    //create product
    public function create(Request $request)
    {
        if ($request->price > 200) {
            return "price is too high";
        }

        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->save();
        return "created $request->name";
    }
}
