<?php

namespace App\Models\Scopes;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Builder;

trait HasActivityScopes
{
    public function scopeOfParent(Activity|Builder $query, int $parentId, int $depth = 3): Builder
    {
        return $query->whereIn(
            'activities.id',
            Activity::whereDescendantOf($parentId)
                ->withDepth()
                ->get()
                ->where('depth', '<=', $depth)
                ->pluck('id')
                ->toArray()
        );
    }
}
