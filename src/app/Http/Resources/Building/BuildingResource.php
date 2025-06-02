<?php

namespace App\Http\Resources\Building;

use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Building */
class BuildingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->whenHas('id'),
            'address' => $this->whenHas('address'),
            'longitude' => $this->whenHas('longitude'),
            'latitude' => $this->whenHas('latitude'),
        ];
    }
}
