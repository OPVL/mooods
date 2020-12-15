<?php

namespace Database\Factories;

use App\Models\ScaleSettings;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScaleSettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ScaleSettings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->firstNameFemale,
            'levels' => $this->faker->numberBetween(2, 10),
            'user_id' => (User::factory()->create())->id
        ];
    }
}
