<?php

namespace Database\Factories;

use App\Models\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<PhoneNumber>
 */
class PhoneNumberFactory extends Factory
{
    public function definition(): array
    {
        return [
            'value' => $this->faker->phoneNumber()
        ];
    }
}
