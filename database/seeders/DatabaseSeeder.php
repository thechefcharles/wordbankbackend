<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhraseSeeder extends Seeder
{
    public function run()
    {
        DB::table('phrases')->insert([
            ['category' => 'Movies', 'phrase' => 'The Godfather'],
            ['category' => 'Sports', 'phrase' => 'Michael Jordan'],
            ['category' => 'Music', 'phrase' => 'The Beatles'],
            ['category' => 'Food', 'phrase' => 'Chocolate Cake'],
            ['category' => 'Technology', 'phrase' => 'Artificial Intelligence'],
        ]);
    }
}
