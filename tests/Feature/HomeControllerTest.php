<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testShouldReturnStatusCode200WhenVisitHomePage()
    {
        // arrange
        $expected = 200;

        // act
        $response = $this->get('/');

        // assert
        $response->assertStatus($expected)
            ->assertSeeText('開始消費')
            ->assertViewIs('home.index');
    }
}
