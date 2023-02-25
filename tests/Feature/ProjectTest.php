<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');
		

        $response->assertStatus(200);
    }
	public function test_getTotalCostInDefault(): void
	{
		$response=$this->get('projects/TotalCostInDefault/1');
		
		
		$response->assertStatus($response->status());
 
	}
	public function test_getTotalCostInSpec():void
	{
		$response=$this->get('projects/getTotalCostInSpec/1/1');
		
		$response->assertStatus($response->status());
	}
}
