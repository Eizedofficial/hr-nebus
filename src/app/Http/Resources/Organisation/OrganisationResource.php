<?php

namespace App\Http\Resources\Organisation;

use App\Http\Resources\Activity\ActivityResource;
use App\Http\Resources\Building\BuildongResource;
use App\Http\Resources\PhoneNumber\PhoneNumberResource;
use App\Models\Activity;
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
                fn(Building $building) => new BuildongResource($building)
            ),
            'activities' => $this->whenLoaded(
                'activities',
                fn(Activity $activity) => new ActivityResource($activity)
            ),
            'phone_numbers' => $this->whenLoaded(
                'phoneNumbers',
                fn(Collection $phoneNumbers) => PhoneNumberResource::collection($phoneNumbers)
            )
        ];
    }
}
