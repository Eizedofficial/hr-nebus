<?php

namespace App\Filters;

use App\Models\Building;
use Illuminate\Database\Eloquent\Builder;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\QueryBuilder\Filters\Filter;

class OrganisationCircleAreaFilter implements Filter
{
    #[ArrayShape([
        "lon" => "float",
        "lat" => "float",
        "radius" => "int",
    ])]
    public function __invoke(Builder $query, $value, string $property)
    {
        return $query
            ->whereExists(
                Building::radius($value['lat'], $value['lon'], $value['radius'])
                    ->whereRaw("buildings.id = organisations.building_id")
            );
    }
}
