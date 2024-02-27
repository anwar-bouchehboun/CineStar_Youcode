<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actors')->insert([

            // Actor 1
            [
                'ActorName' => 'Leonardo DiCaprio',
                'ActorImg' => 'https://www.jolie.de/sites/default/files/styles/image_gallery360w/public/2020-02/leonardo-dicaprio-oscars.jpg?h=64dbc2fc&itok=EH0B3oo4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Actor 2
            [
                'ActorName' => 'Joseph
                Gordon-Levitt',
                'ActorImg' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cb/WP_-_random_-5_%2814094372762%29.jpg/319px-WP_-_random_-5_%2814094372762%29.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Actor 3
            [
                'ActorName' => 'Elliot Page',
                'ActorImg' => 'https://img.zeit.de/kultur/film/2020-12/elliot-page-tranmann/wide__450x253__mobile__scale_1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Actor 4
            [
                'ActorName' => 'Tom Hardy',
                'ActorImg' => 'https://de.web.img3.acsta.net/c_310_420/pictures/16/01/19/11/06/274206.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}