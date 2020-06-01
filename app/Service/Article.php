<?php


namespace App\Services;


class Article
{

    private $price;
    /**
     * Article constructor.
     * @param int $int
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
}