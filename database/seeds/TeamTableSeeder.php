<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
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
        DB::table('teams')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        $teams[] = [
            'name'         => 'team1',
            'logo_uri'     => 'Male1.png',
            'club_state'   => 'state1',
        ];

        $teams[] = [
            'name'         => 'team2',
            'logo_uri'     => 'Male2.png',
            'club_state'   => 'state2',
        ];

        $teams[] = [
            'name'         => 'team3',
            'logo_uri'     => 'Male3.png',
            'club_state'   => 'state3',
        ];

        $teams[] = [
            'name'         => 'team4',
            'logo_uri'     => 'Male4.png',
            'club_state'   => 'state4',
        ];

        // Uncomment the below to run the seeder
        DB::table('teams')->insert($teams);
    }
}
