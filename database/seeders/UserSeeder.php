<?php

namespace Database\Seeders;

use App\Actions\User\CreateUser;
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
        app(CreateUser::class)->execute(['firstname' => 'lloyd', 'email' => 'admin@ex.co', 'password' => 'password-123']);
    }
}
