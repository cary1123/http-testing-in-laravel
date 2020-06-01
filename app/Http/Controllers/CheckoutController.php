<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    use RefreshDatabase;
    public function index(Request $request)
    {
        $totalAmount = 0;
        $totalCount = 0;
         if($request->has('products')){

             foreach ($request->input('products') as $item){
                 $product = Product::findOrFail($item['id']);
                 $totalAmount += $product->price * $item['quantity'];
                 $totalCount += $item['quantity'];
             }
         }

         $data = [
           'totalCount' => $totalCount,
           'totalAmount' => $totalAmount,
         ];

         return view('checkout.index',$data);
    }
}
