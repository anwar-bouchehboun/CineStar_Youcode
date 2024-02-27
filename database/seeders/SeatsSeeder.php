<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            [
                'salle_id' => 1, 
                'seat_number' => 1,
                'seat_status' => 'available',
                'zone_id' => 2, 
            ],
            [
                'salle_id' => 1,
                'seat_number' => 2,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 1,
                'seat_number' => 3,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 4,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 5,
                'seat_status' => 'available',
                'zone_id' => 3,
            ],[
                'salle_id' => 2,
                'seat_number' => 6,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
        ]);
    }
}
