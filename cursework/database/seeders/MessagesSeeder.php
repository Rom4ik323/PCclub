<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'name' => Str::random(7),
            'email' => Str::random(10).'@mail.ru',
            'tel' => '8911'.rand(1000000,9999999),
            'text' => Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50).' '.Str::random(50),
            'date' => Now(),
        ]);
    }
}
