<?php

namespace Database\Seeders;

use App\Actions\User\CreateUser;
use App\Models\Settings\Scale;
use App\Models\Settings\Settings;
use App\Models\Settings\Theme;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = app(CreateUser::class)->execute(['firstname' => 'lloyd', 'email' => 'admin@ex.co', 'password' => 'password-123']);
        $settings = $user->settings()->save(new Settings(['user_id' => $user->id]));
        $scale = $settings->scale()->save(new Scale(['type' => 'dots', 'levels' => 4]));
        $dashboard = $settings->theme()->save(new Theme(['tags' => 'city', 'colourOne' => '', 'colourTwo' => '']));
    }
}
