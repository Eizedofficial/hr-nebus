<?php

namespace App\Queries;

use App\Filters\OrganisationCircleAreaFilter;
use App\Filters\OrganisationRectangleAreaFilter;
use App\Models\Organisation;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedInclude;
use Spatie\QueryBuilder\QueryBuilder;

class OrganisationQuery extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct(Organisation::query());

        $this
            ->allowedFilters([
                AllowedFilter::partial('name'),
                AllowedFilter::belongsTo('building_id', 'building'),
                AllowedFilter::callback(
                    'activity_id',
                    fn(Organisation|Builder $query, $id) => $query->ofActivity($id),
                ),
                AllowedFilter::callback(
                    'nested_activity_id',
                    fn(Organisation|Builder $query, $id) => $query->ofNestedActivity($id),
                ),
                AllowedFilter::custom('rectangle_area', new OrganisationRectangleAreaFilter),
                AllowedFilter::custom('circle_area', new OrganisationCircleAreaFilter)
            ])
            ->allowedIncludes([
                AllowedInclude::relationship('building'),
            ]);
    }
}
