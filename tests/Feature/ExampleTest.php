<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_homepage_response_is_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_sign_in_response_is_200()
    {
        $response = $this->get('/sign-in');

        $response->assertStatus(200);
    }

    public function test_sign_up_response_is_200()
    {
        $response = $this->get('/sign-up');

        $response->assertStatus(200);
    }

    public function test_eshop_page_works()
    {
        $response = $this->get('/eshop');

        $response->assertStatus(200);

        $response->assertSee('<h1>Bookshop project</h1>', false);
    }
}
