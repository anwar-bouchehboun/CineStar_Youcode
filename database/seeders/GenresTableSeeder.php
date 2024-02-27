<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('genres')->insert(
            [
                ['GenreName' => 'Action'],
                ['GenreName' => 'Drama'],
                ['GenreName' => 'Comedy'],
            ]
        );
    }
}
