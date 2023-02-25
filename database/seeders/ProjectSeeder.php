<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     DB::table('project')->insert([
            
            'name' => 'نظام أرشفة',
            'description' =>'نظام ارشفة ملفات',
        ]);
    }
}
