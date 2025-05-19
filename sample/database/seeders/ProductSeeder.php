<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('products')->insert([
        ['name' => '1', 'price' => 100.00, 'seller_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['name' => '2', 'price' => 150.50, 'seller_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['name' => '3', 'price' => 80.00, 'seller_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ['name' => '4', 'price' => 120.00, 'seller_id' => 1, 'created_at' => now(), 'updated_at' => now()],
        ['name' => '5', 'price' => 200.00, 'seller_id' => 3, 'created_at' => now(), 'updated_at' => now()],
    
            
        ]);


        
    }
}
