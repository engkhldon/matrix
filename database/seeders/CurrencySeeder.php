<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('currency')->insert([
            
            'name' => 'ليرة سورية',
			
			 'exchangeprice'=> 0.00039808,
           
        ]);
		DB::table('currency')->insert([
            
           'name' => 'ليرةلبنانية',
		   'exchangeprice'=> 0.000067,
           
        ]);
		
    }
}
