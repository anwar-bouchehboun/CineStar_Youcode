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
                'seat_number' => 27,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 1,
                'seat_number' => 28,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 1,
                'seat_number' => 29,
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
            ],
            [
                'salle_id' => 2,
                'seat_number' => 22,
                'seat_status' => 'available',
                'zone_id' => 3,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 23,
                'seat_status' => 'available',
                'zone_id' => 3,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 24,
                'seat_status' => 'available',
                'zone_id' => 3,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 25,
                'seat_status' => 'available',
                'zone_id' => 3,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 26,
                'seat_status' => 'available',
                'zone_id' => 3,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 6,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 7,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 8,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 9,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 10,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 11,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 12,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 13,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 14,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 15,
                'seat_status' => 'available',
                'zone_id' => 2,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 15,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 16,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 17,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 18,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 19,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 20,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            [
                'salle_id' => 2,
                'seat_number' => 21,
                'seat_status' => 'available',
                'zone_id' => 1,
            ],
            
            
            
            
        ]);
    }
}
