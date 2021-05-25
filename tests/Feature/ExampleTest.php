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
    public function test_example()
    {
        //Visit the hompage
        $response = $this->get('/');

        //Check http response code
        $response->assertStatus(200);
    }
};
