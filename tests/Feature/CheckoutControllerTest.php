<?php

namespace Tests\Feature;

use App\Services\Article;
use App\Services\Cart;
use App\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckoutControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $target = new Cart();
        $product1 = new Article(20);
        $product2 = new Article(30);
        $product3 = new Article(50);

        $target->add($product1);
        $target->add($product2);
        $target->add($product3);

        factory(Product::class)->create(['price' => 20]);
        factory(Product::class)->create(['price' => 30]);
        factory(Product::class)->create(['price' => 50]);

        $response = $this->post('/checkout', [
            'products' => [
                ['id' => 1, 'quantity' => 1],
                ['id' => 2, 'quantity' => 2],
                ['id' => 3, 'quantity' => 1],
            ]
        ]);

        $response->assertStatus(200)
            ->assertViewIs('checkout.index')
            ->assertViewHas('totalCount', 1+2+1)
            ->assertViewHas('totalAmount', 1*20+2*30+1*50)
            ->assertSeeText('結帳');
    }
}
