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
                'zone_name' => 'Zone A',
                'zone_price' => '80.00 DH',
            ],
            [
                'salle_id' => 2, 
                'zone_name' => 'Zone B',
                'zone_price' => '5O.00 DH',
            ],
        ]);
    }
}
