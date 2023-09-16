<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=5;$i++){
            $this->call(MessagesSeeder::class);
        };
        for($i=1;$i<=60;$i++){
            $this->call(OrderedProductsSeeder::class);
        };
        for($i=1;$i<=4;$i++){
            $this->call(OrdersSeeder::class);
        };
        for($i=1;$i<=40;$i++){
            $this->call(ProductsSeeder::class);
        };

    }
}
