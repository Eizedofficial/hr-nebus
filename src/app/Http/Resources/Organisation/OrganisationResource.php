<?php

namespace App\Http\Resources\Organisation;

use App\Http\Resources\Activity\ActivityResource;
use App\Http\Resources\Building\BuildingResource;
use App\Http\Resources\PhoneNumber\PhoneNumberResource;
use App\Models\Building;
use App\Models\Organisation;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use R3bzya\Helpers\Resources\JsonResource;

/** @mixin Organisation */
class OrganisationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->whenHas('id'),
            'name' => $this->whenHas('name'),
            'building' => $this->whenLoaded(
                'building',
                fn(Building $building) => new BuildingResource($building)
            ),
            'activities' => $this->whenLoaded(
                'activities',
                fn(Collection $activities) => ActivityResource::collection($activities)
            ),
            'phone_numbers' => $this->whenLoaded(
                'phoneNumbers',
                fn(Collection $phoneNumbers) => PhoneNumberResource::collection($phoneNumbers)
            )
        ];
    }
}
