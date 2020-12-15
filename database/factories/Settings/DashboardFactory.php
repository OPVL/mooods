<?php

namespace Database\Factories\Settings;

use App\Models\Settings\Dashboard;
use App\Models\Settings\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class DashboardFactory extends Factory
{
    protected $model = Dashboard::class;

    public function definition()
    {
        return [
            'theme' => $this->faker->word,
            'settings_id' => (Settings::factory()->create())->id
        ];
    }
}
