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
        // Call other seeders here
        $this->call([
            UserSeeder::class,
            PostSeeder::class,
            // any other seeders you have
        ]);
    }
}
