<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    protected const MAX_NESTED_DEPTH = 4;
    protected const MIN_NESTED_CHILDREN_COUNT = 1;
    protected const MAX_NESTED_CHILDREN_COUNT = 2;

    public function run(): void
    {
        Activity::factory(5)
            ->afterCreating(fn (Activity $activity) => $this->seedNestedActivities($activity))
            ->create();
    }

    protected function seedNestedActivities(Activity $activity, $currentDepth = 0): void
    {
        if($currentDepth > static::MAX_NESTED_DEPTH) {
            return;
        }

        $children = Activity::factory(rand(static::MIN_NESTED_CHILDREN_COUNT, static::MAX_NESTED_CHILDREN_COUNT))
            ->for($activity, 'parent')
            ->create();

        foreach ($children as $child) {
            $this->seedNestedActivities($child, $currentDepth + 1);
        }
    }
}
