<?php

namespace App\Http\Controllers;

use App\Product;
use App\Services\Cart;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use RefreshDatabase;
    public function index(Request $request)
    {
        $totalAmount = 0;
        $totalCount = 0;
        $target = new Cart();

         if($request->has('products')){

             $totalAmount = $target->totalAmount($request->input('products'));
             $totalCount = $target->totalCount($request->input('products'));
         }
        $data = [
            'totalCount' => $totalCount,
            'totalAmount' => $totalAmount,
        ];


         return view('checkout.index',$data);
    }
}
