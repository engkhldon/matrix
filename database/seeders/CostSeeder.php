<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cost')->insert([
            
            'description' => 'تكلفة بالليرة السورية',
            'value' =>1000000.0,
			'projectid'=>1,
			'currencyid'=>1,
        ]);
		DB::table('cost')->insert([
            
            'description' => 'تكلفة بالليرةالسورية',
            'value' =>1000000.0,
			'projectid'=>1,
			'currencyid'=>1,
        ]);
		
    }
}
