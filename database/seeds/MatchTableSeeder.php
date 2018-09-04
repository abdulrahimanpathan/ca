<?php

use Illuminate\Database\Seeder;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('matches')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $matches[] = [
            'team1_id'     => 1,
            'team2_id'     => 2,
            'match_at'     => '2018-09-01',
        ];

        $matches[] = [
            'team1_id'     => 3,
            'team2_id'     => 4,
            'match_at'     => '2018-09-01',
        ];

        $matches[] = [
            'team1_id'     => 1,
            'team2_id'     => 3,
            'match_at'     => '2018-09-02',
        ];

        $matches[] = [
            'team1_id'     => 2,
            'team2_id'     => 4,
            'match_at'     => '2018-09-02',
        ];

        $matches[] = [
            'team1_id'     => 1,
            'team2_id'     => 4,
            'match_at'     => '2018-09-03',
        ];

        $matches[] = [
            'team1_id'     => 2,
            'team2_id'     => 3,
            'match_at'     => '2018-09-03',
        ];
        // Uncomment the below to run the seeder
        DB::table('matches')->insert($matches);
    }
}
