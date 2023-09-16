<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrderedProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordered_products')->insert([
            'id_order' => rand(1,8),
            'id_product' => rand(1,200),
            'name' => Str::random(30),
            'photo' => 'seed.svg',
            'price' => rand(100,10000),
            'quantity' => rand(1,10),
        ]);
    }
}
