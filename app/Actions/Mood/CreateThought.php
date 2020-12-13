<?php 

namespace App\Actions\Mood;

use App\Models\Thought;

class CreateThought
{
    public function execute(array $input): ?Thought
    {
        return Thought::create($input);
    }
}