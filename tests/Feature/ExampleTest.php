<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Quote;
use App\Models\User;

class ExampleTest extends TestCase
{ use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $this->withoutExceptionHandling();
        // scenario
       $quote = Quote::factory ()-> create();
       $user = User::factory ()-> create()->assignRole($role1);
       
       
        //when
        //given
       
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
