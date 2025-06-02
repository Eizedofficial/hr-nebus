<?php

namespace App\Http\Requests\Organisation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

/**
 * @bodyParam filter array Массив для фильтрации
 * @bodyParam filter.name string Фильтрация по названию компании
 * @bodyParam filter.building_id int Фильтрация по ID здания
 * @bodyParam filter.activity_id int Фильтрация по ID вида деятельности
 * @bodyParam filter.nested_activity_id int Фильтрация по ID вида деятельности с вложенностью
 * @bodyParam filter.rectangle_area array Фильтрация по прямоугольной области
 * @bodyParam filter.rectangle_area.lon float Долгота
 * @bodyParam filter.rectangle_area.lat float Широта
 * @bodyParam filter.rectangle_area.radius int Сторона области
 * @bodyParam filter.circle_area array Фильтрация по радиусу
 * @bodyParam filter.circle_area.lon float Долгота
 * @bodyParam filter.circle_area.lat float Широта
 * @bodyParam filter.circle_area.radius int Радиус области
 */
class SearchOrganisationsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'filter' => ['sometimes', 'array'],
            'filter.*.name' => ['sometimes', 'string'],
            'filter.*.building_id' => ['sometimes', 'int', new Exists('buildings', 'id')],
            'filter.*.activity_id' => ['sometimes', 'int', new Exists('activities', 'id')],
            'filter.*.nested_activity_id' => ['sometimes', 'int', new Exists('activities', 'id')],
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
