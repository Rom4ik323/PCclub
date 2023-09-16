<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use  Illuminate\Database\QueryException;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'photo' => 'seed.svg',
            'name' => Str::random(10).' '.Str::random(10).' '.Str::random(10),
            'category' => 'Искусственные_ёлки',
            'subcategory' => 'Настольные',
            'article' => Str::random(10),
            'brand' => Str::random(10),
            'price' => rand(100, 10000),
            'country' => Str::random(10),
            'production' => Str::random(10),
            'weight' => rand(1, 5),
            'height' => rand(1, 5),
            'colour' => Str::random(10),
            'material' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50),
        ]);
        DB::table('products')->insert([
            'photo' => 'seed.svg',
            'name' => Str::random(10).' '.Str::random(10).' '.Str::random(10),
            'category' => 'Искусственные_ёлки',
            'subcategory' => 'Сувенирные',
            'article' => Str::random(10),
            'brand' => Str::random(10),
            'price' => rand(100, 10000),
            'country' => Str::random(10),
            'production' => Str::random(10),
            'weight' => rand(1, 5),
            'height' => rand(1, 5),
            'colour' => Str::random(10),
            'material' => Str::random(10),
            'location' => Str::random(10),
            'description' => Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50),
        ]);
        
      
    }
}
