<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //get all products
    public function get()
    {
        $products = [
            [
                "name" => "clothes",
                "price" => 50
            ],
            [
                "name" => "pants",
                "price" => "100"
            ]
        ];
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
        return "created $request->name";
    }
}
