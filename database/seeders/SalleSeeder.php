<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salles')->insert([
            [
                'saleName' => 'Salle A',
                'capacite' => 15,
            ],
            [
                'saleName' => 'Salle B',
                'capacite' => 15,
            ],

        ]);
        
    }
}
