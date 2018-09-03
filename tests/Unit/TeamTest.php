<?php

namespace Tests\Unit;

use App\Models\Team;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /*
    * test teams list
    */
    public function testIndex()
    {
        $team = Team::create([
            'name' => 'The Red Chord',
            'logo_uri' => 'The Red Chord',
            'club_state' => 'The Red Chord',
        ]);

        // View the team listing
        $response = $this->get('/teams');

        // Assert
        // See the team details
        $response->assertSee('The Red Chord');
    }
    /*
    * test show team
    */
    public function testshow()
    {
        $team = Team::create([
            'name' => 'The Red Chord',
            'logo_uri' => 'The Red Chord',
            'club_state' => 'The Red Chord',
        ]);

        $response = $this->get('teams/'.$team->id.'/show');

        $response->assertSee('The Red Chord');
    }
}
