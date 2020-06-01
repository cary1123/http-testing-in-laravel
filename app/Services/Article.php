<?php


namespace App\Services;


class Article
{

    private $price;
    private $id;
    /**
     * Article constructor.
     * @param int $int
     */
    public function __construct(int $price,int $id)
    {
        $this->price = $price;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getID(): int
    {
        return $this->id;
    }
}