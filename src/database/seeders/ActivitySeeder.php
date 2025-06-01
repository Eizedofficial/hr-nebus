<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run(): void
    {
        Activity::factory()
            ->has(Activity::factory()->count(3), 'children')
            ->count(10)
            ->create();
    }
}
