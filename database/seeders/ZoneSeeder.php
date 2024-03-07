<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zones')->insert([
            [
                'salle_id' => 1, 
                'zone_name' => 'Standard',
                'zone_price' => '80.00 DH',
            ],
            [
                'salle_id' => 2, 
                'zone_name' => 'Standard',
                'zone_price' => '5O.00 DH',
            ],
            [
                'salle_id' => 2, 
                'zone_name' => 'VAP',
                'zone_price' => '6O.00 DH',
            ],
        ]);
    }
}
