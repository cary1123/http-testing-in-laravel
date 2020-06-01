<?php

namespace Tests\Feature;

use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CartControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $products = factory(Product::class, 10)->create();

        $response = $this->get('/cart');

        $response->assertStatus(200)
            ->assertViewIs('cart.index')
            ->assertSeeText('購物車')
            ->assertViewHas('products');

        foreach ($products as $product) {
            $response->assertSeeText($product->name);
        }

        $this->assertEquals($response['products']->reverse()->values()->toArray(), $products->toArray());
    }
}
