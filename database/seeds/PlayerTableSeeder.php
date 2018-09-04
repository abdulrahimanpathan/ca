<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
	 protected $players = [
        /**
         * Public permissions
         */
        ["team_id" => 1, "first_name" => "first1", "last_name" => "last1", "image_uri" => "Female1.png", "jersy_no" => 44, "country" => 'team1', "no_of_matches" => 50, "runs" => 4566, "highest_score" => 183, "fifties" => 22, "hundreds" => 11],
        ["team_id" => 1, "first_name" => "first2", "last_name" => "last2", "image_uri" => "Female2.png", "jersy_no" => 4, "country" => 'team1', "no_of_matches" => 50, "runs" => 4566, "highest_score" => 183, "fifties" => 22, "hundreds" => 11],
    ];   
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('players')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('players')->insert($this->players);
    }
}
