<?php

namespace App\Actions\Mood;

use App\Models\Mood;
use App\Models\Thought;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class DeleteMood
{
    /** @var DeleteThoughts */
    protected $action;

    public function __construct(DeleteThoughts $action)
    {
        $this->action = $action;
    }

    public function execute(Mood $mood, bool $withThoughts = true): ?bool
    {
        if ($withThoughts)
            $this->action->execute($mood->thoughts()->pluck('id'));

        return $mood->delete();
    }
}
