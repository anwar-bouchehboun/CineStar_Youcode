<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActorsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_inserts_actor_into_database()
    {
        $actorData = [
            'ActorName' => 'Leonardo DiCaprio',
            'ActorImg' => 'https://www.jolie.de/sites/default/files/styles/image_gallery360w/public/2020-02/leonardo-dicaprio-oscars.jpg?h=64dbc2fc&itok=EH0B3oo4',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('actors')->insert($actorData);

        $this->assertDatabaseHas('actors', $actorData);
    }
}