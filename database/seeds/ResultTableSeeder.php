<?php

use Illuminate\Database\Seeder;

class ResultTableSeeder extends Seeder
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
        DB::table('results')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $results[] = [
            'match_id'      => 1,
            'winner_id'     => 2,
            'points'        => 2,
        ];

        $results[] = [
            'match_id'      => 2,
            'winner_id'     => 3,
            'points'        => 2,
        ];

        $results[] = [
            'match_id'      => 3,
            'winner_id'     => 1,
            'points'        => 2,
        ];

        $results[] = [
            'match_id'      => 4,
            'winner_id'     => 4,
            'points'        => 2,
        ];

        $results[] = [
            'match_id'      => 5,
            'winner_id'     => 4,
            'points'        => 2,
        ];

        $results[] = [
            'match_id'      => 6,
            'winner_id'     => 2,
            'points'        => 2,
        ];
        // Uncomment the below to run the seeder
        DB::table('results')->insert($results);
    }
}
