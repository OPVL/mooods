<?php

namespace Database\Factories\Settings;

use App\Models\Settings\Scale;
use App\Models\Settings\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScaleFactory extends Factory
{
    protected $model = Scale::class;

    public function definition()
    {
        return [
            'type' => $this->faker->firstNameFemale,
            'levels' => $this->faker->numberBetween(2, 10),
            'settings_id' => (Settings::factory()->create())->id
        ];
    }
}
