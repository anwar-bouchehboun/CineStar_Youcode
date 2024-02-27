<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'FilmName' => 'Tenet',
                'FilmDesc' => 'Description for Film 1',
                'FilmImage' => 'https://upload.wikimedia.org/wikipedia/en/1/14/Tenet_movie_poster.jpg',
                'FilmDuration' => '2:1:00',
                'genre_id' => 1,
            ],
            [
                'FilmName' => 'Fight Club',
                'FilmDesc' => 'Description for Film 2',
                'FilmImage' => 'https://upload.wikimedia.org/wikipedia/en/f/fc/Fight_Club_poster.jpg',
                'FilmDuration' => '1:35:00',
                'genre_id' => 2,
            ],
            [
                'FilmName' => 'Dune',
                'FilmDesc' => 'Description for Film 3',
                'FilmImage' => 'https://upload.wikimedia.org/wikipedia/en/8/8e/Dune_%282021_film%29.jpg',
                'FilmDuration' => '2:14:00',
                'genre_id' => 3,
            ],
        ]);
    }    
}