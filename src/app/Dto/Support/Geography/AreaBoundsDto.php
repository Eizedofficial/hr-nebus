<?php

namespace App\Dto\Support\Geography;

class AreaBoundsDto
{
    public function __construct(
        public float $minLongitude,
        public float $maxLongitude,
        public float $minLatitude,
        public float $maxLatitude,
    ) {}
}
