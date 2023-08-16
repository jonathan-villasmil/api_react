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
            'name'=> 'Iphone 13',
            'description' => "Mobile phone apple",
            'amount' => 1000,
        ]);

        DB::table('products')->insert([
            'name'=> 'Iphone 12',
            'description' => "Mobile phone apple",
            'amount' => 900,
        ]);

        DB::table('products')->insert([
            'name'=> 'Iphone 11',
            'description' => "Mobile phone apple",
            'amount' => 800,
        ]);

    }
}
