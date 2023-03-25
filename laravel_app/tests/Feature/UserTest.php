<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function UserTest(): void
    {
        $response = $this->get('/client');

        $response->assertStatus(200);
    }
}
