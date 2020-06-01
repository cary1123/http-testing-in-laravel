<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();

        $data = [
            'products' => $products,
        ];

        return view('cart.index', $data);
    }
}
