<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            ActivitySeeder::class,
            BuildingSeeder::class,
            OrganisationSeeder::class
        ]);
    }
}
