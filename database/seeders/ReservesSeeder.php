<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reserves')->insert([
            [
                'user_id' => 1, 
                'today_showing_id' => 1, 
                'seat_id' => 1, 
                'reservation_time' => now(),
            ],
            [
                'user_id' => 2,
                'today_showing_id' => 2,
                'seat_id' => 2,
                'reservation_time' => now(),
            ],
        ]);
    }
}
