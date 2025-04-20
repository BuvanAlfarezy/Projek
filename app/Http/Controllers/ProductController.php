<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        1 => ["name" => "kaos laravel", "price" => 150000],
        2 => ["name" => "stiker coding", "price" => 250000],
        3 => ["name" => "notebook dev", "price" => 50000],
    ];

    public function index()
    {
        $products = $this->products;
        return view('products.index', compact('products'));
    }


    public function show($id)
    {
    if (!array_key_exists($id, $this->products)) {
        abort(404);
    }
        $product = $this->products[$id];
        return view('products.detail', compact('product'));
    }
}
