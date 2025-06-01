<?php

namespace Database\Seeders;

use App\Models\Activity;
use App\Models\Building;
use App\Models\Organisation;
use App\Models\PhoneNumber;
use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    public function run(): void
    {
        Organisation::factory()
            ->has(PhoneNumber::factory(3))
            ->sequence(fn() => ['building_id' => Building::all()->random()])
            ->afterCreating(fn(Organisation $organisation) => $organisation
                ->activities()
                ->attach(Activity::all()
                    ->random()
                    ->take(5)
                    ->pluck('id')
                    ->toArray()
                )
            )
            ->count(100)
            ->create();
    }
}
