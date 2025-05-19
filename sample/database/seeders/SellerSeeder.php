<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    
        DB::table('sellers')->insert([
        ['name' => '1', 'created_at' => now(), 'updated_at' => now()],
        ['name' => '2', 'created_at' => now(), 'updated_at' => now()],
        ['name' => '3', 'created_at' => now(), 'updated_at' => now()],
        ['name' => '4', 'created_at' => now(), 'updated_at' => now()],
        ['name' => '5', 'created_at' => now(), 'updated_at' => now()],
            
        ]);
       
    }
}
