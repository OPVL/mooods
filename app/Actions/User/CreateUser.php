<?php

namespace App\Actions\User;

use App\Models\User;
use App\Rules\Password;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateUser 
{
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     */
    public function execute(array $input): \App\Models\User
    {
        Validator::make($input, [
            'password' => new Password,
        ])->validate();

        Arr::set($input, 'password', Hash::make($input['password']));

        return User::create($input);
    }
}
