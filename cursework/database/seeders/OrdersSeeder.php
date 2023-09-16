<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use  Illuminate\Contracts\Container\BindingResolutionException;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'order_num' => rand(1000000,9999999),
            'surname' => Str::random(10),
            'name' => Str::random(7),
            'patronymic' => Str::random(8),
            'email' => Str::random(10).'@mail.ru',
            'tel' => '8911'.rand(1000000,9999999),
            'delivery' => 'Самовывоз',
            'pay' => 'Наличными при получении',
            'region' => 'Москва',
            'city' => 'Москва',
            'street' => 'Ленинградское шоссе',
            'house' => '13',
            'corpus' => '1',
            'flat' => '1',
            'comment' => Str::random(10).' '.Str::random(10).' '.Str::random(10).' '.Str::random(10).' '.Str::random(10).' '.Str::random(10),
            'sum' => rand(2000,100000),
            'status' => 'Получен',
            'date' => Now(),
        ]);
        DB::table('orders')->insert([
            'order_num' => rand(1000000,9999999),
            'surname' => Str::random(10),
            'name' => Str::random(7),
            'patronymic' => Str::random(8),
            'email' => Str::random(10).'@mail.ru',
            'tel' => '8911'.rand(1000000,9999999),
            'delivery' => 'Доставка',
            'pay' => 'Картой при получении',
            'region' => 'Москва',
            'city' => 'Москва',
            'street' => 'Коптевская улица',
            'house' => rand(1,50),
            'corpus' => rand(1,5),
            'flat' => rand(1,200),
            'comment' => Str::random(10).' '.Str::random(10).' '.Str::random(10).' '.Str::random(10).' '.Str::random(10).' '.Str::random(10),
            'sum' => rand(2000,100000),
            'status' => 'В обработке',
            'date' => Now(),
        ]);
    }
}
