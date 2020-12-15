<?php

namespace Database\Factories\Settings;

use App\Models\Model;
use App\Models\Settings\Dashboard;
use App\Models\Settings\Scale;
use App\Models\Settings\Settings;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create()->id
        ];
    }

    public function deleted(): self
    {
        return $this->state(
            function (array $attributes): array {
                return [
                    'deleted_at' => Carbon::now()->subMinute()
                ];
            }
        );
    }

    public function withSettings(): self
    {
        return $this->afterCreating(
            function (Settings $settings): void {
                $settings->dashboard()->save(Dashboard::factory()->make());
                $settings->scale()->save(Scale::factory()->make());
            }
        );
    }
}
