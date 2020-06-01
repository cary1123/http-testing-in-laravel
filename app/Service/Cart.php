<?php


namespace App\Services;


use App\Http\Controllers\Controller;

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
    public function add(Product $product) : void
    {
        $this->items->add($product);
    }

    public function totalAmount()
    {
        return $this->items->reduce(function ($carry, $item) {
            /**
             * @var int $carry
             * @var Product $item
             */
            return $carry + $item->getPrice();
        }, 0);
    }
}