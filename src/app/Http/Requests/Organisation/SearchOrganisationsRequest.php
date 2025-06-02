<?php

namespace App\Http\Requests\Organisation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class SearchOrganisationsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'filter' => ['sometimes', 'array'],
            'filter.*.name' => ['sometimes', 'string'],
            'filter.*.building_id' => ['sometimes', 'int', new Exists('buildings', 'id')],
            'filter.*.activity_id' => ['sometimes', 'int', new Exists('activities', 'id')],
            'filter.*.nested_activity' => ['sometimes', 'int', new Exists('activities', 'id')],
            'filter.*.rectangle_area' => ['sometimes', 'array'],
            'filter.*.rectangle_area.*.lon' => ['required', 'numeric'],
            'filter.*.rectangle_area.*.lat' => ['required', 'numeric'],
            'filter.*.rectangle_area.*.radius' => ['required', 'int'],
            'filter.*.circle_area' => ['sometimes', 'array'],
            'filter.*.circle_area.*.lon' => ['required', 'numeric'],
            'filter.*.circle_area.*.lat' => ['required', 'numeric'],
            'filter.*.circle_area.*.radius' => ['required', 'int']
        ];
    }
}
