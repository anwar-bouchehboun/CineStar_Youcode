<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ActorsTableSeeder::class,
        ]);

        $this->call([
            GenresTableSeeder::class,
        ]);
        $this->call([
            FilmsTableSeeder::class,
        ]);
        $this->call([
            SalleSeeder::class,
        ]);
        $this->call([
            TodayShowingsSeeder::class,
        ]);
        $this->call([
            ZoneSeeder::class,
        ]);
        $this->call([
            SeatsSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RoleSedder::class);
        $this->call(AdminSedder::class);
        $this->call([
            ActorsTableSeeder::class,
        ]);
    }
}