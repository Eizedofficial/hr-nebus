<?php

namespace App\Filters;

use App\Dto\Support\Geography\AreaBoundsDto;
use App\Models\Building;
use Illuminate\Database\Eloquent\Builder;
use JetBrains\PhpStorm\ArrayShape;
use Spatie\QueryBuilder\Filters\Filter;

class OrganisationRectangleAreaFilter implements Filter
{
    private const EARTH_RADIUS = 6371;

    #[ArrayShape([
        "lon" => "float",
        "lat" => "float",
        "radius" => "int",
    ])]
    public function __invoke(Builder $query, $value, string $property)
    {
        $bounds = $this->calculateAreaBounds($value['lat'], $value['lon'], $value['radius']);
        return $query
            ->whereHas('building', fn(Building|Builder $query) => $query
                ->whereBetween('longitude', [$bounds->minLongitude, $bounds->maxLongitude])
                ->whereBetween('latitude', [$bounds->minLatitude, $bounds->maxLatitude])
            );
    }

    protected function calculateAreaBounds(float $lat, float $lng, int $radiusKm): AreaBoundsDto
    {
        $angularDistance = $radiusKm / self::EARTH_RADIUS;
        $deltaLng = asin(sin($angularDistance) / cos(deg2rad($lat)));

        return new AreaBoundsDto(
            $lng - rad2deg($deltaLng),
            $lng + rad2deg($deltaLng),
            $lat - rad2deg($angularDistance),
            $lat + rad2deg($angularDistance)
        );
    }
}
