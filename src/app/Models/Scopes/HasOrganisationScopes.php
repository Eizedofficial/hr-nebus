<?php

namespace App\Models\Scopes;

use App\Models\Activity;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Builder;

trait HasOrganisationScopes
{
    public function scopeOfActivity(Builder $query, int $activityId): Builder
    {
        return $query->whereRelation('activities', 'id', $activityId);
    }

    public function scopeOfNestedActivity(Organisation|Builder $query, int $parentActivityId): Builder
    {
        return $query->whereHas(
            'activities',
            function (Activity|Builder $subquery) use ($parentActivityId) {
                $subquery->ofParent($parentActivityId);
            }
        );
    }
}
