<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodayShowingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('today_showings')->insert([

            [
                'film_id' => 1, 
                'salle_id' => 1, 
                'showing_time' => '21:00 PM',
                'date' => now()->toDateString(),
            ],
            [
                'film_id' => 2, 
                'salle_id' => 2, 
                'showing_time' => '23:00 PM',
                'date' => now()->toDateString(),
            ],

        ]);
    }
}
