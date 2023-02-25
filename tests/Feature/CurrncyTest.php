<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CurrncyTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
	 public function convertCurrency_test()
    {
      
		$response=$this->get('api/currency/1/2/2000');
		
		$response->assertStatus($response->status());
 
	
    }
}
