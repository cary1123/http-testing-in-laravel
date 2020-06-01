<?php


namespace App\Services;


use App\Product;

class Cart
{
    /**
     * @var Controller
     */
    private $items;

    /**
     * Cart constructor.
     */
    public function __construct()
    {
        $this->items = collect();
    }
    public function add(Article $product) : void
    {
        $this->items->add($product);
    }

    public function totalAmount($quantity)
    {
        $totalAmount = 0;
        foreach ($quantity as $item){
            $product = Product::findOrFail($item['id']);
            $totalAmount += $product->price * $item['quantity'];
        }
        return $totalAmount;
    }

    public function totalCount($quantity)
    {
        $totalCount = 0;
            foreach ($quantity as $item){
                $totalCount += $item['quantity'];
            }

            return $totalCount;

    }
}