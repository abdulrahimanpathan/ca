<?php

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
        $this->call(TeamTableSeeder::class);
        $this->call(MatchTableSeeder::class);
        $this->call(ResultTableSeeder::class);
        $this->call(PlayerTableSeeder::class);
    }
}
