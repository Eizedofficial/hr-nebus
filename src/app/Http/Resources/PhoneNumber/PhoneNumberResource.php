<?php

namespace App\Http\Resources\PhoneNumber;

use App\Models\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin PhoneNumber */
class PhoneNumberResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->whenHas('id'),
            'value' => $this->whenHas('value'),
        ];
    }
}
