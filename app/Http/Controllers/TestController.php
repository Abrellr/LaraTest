<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function get()
    {
        return '12345';
    }
    public function cobacoba()
    {
        return [
            "name" => "ricky",
            "age" => 10
        ];
    }
}
