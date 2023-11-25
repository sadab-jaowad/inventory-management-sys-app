<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product')->insert([
            ['name' => 'Laptop', 'quantity' => 10, 'price' => 1500.00],
            ['name' => 'Desktop', 'quantity' => 5, 'price' => 1200.00],
            ['name' => 'Monitor', 'quantity' => 20, 'price' => 250.00],
        ]);
    }
}
