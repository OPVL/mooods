<?php

namespace App\Actions\Mood;

use App\Models\Mood;
use App\Models\Thought;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class CreateMood
{
    /** @var CreateThoughts */
    protected $action;

    public function __construct(CreateThoughts $action)
    {
        $this->action = $action;
    }

    public function execute(array $input): ?Mood
    {
        $mood = new Mood(['value' => Arr::get($input, 'mood')]);
        Auth::user()->moods()->save($mood);

        if (Arr::get($input, 'thoughts') !== null) {
            $this->action->execute(Arr::get($input, 'thoughts'), $mood->id);
        }

        return $mood;
    }
}
