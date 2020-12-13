<?php

namespace App\Actions\Mood;

use App\Models\Thought;
use Illuminate\Support\Collection;

class CreateThoughts
{
    /** @var CreateThought */
    protected $action;

    public function __construct(CreateThought $action)
    {
        $this->action = $action;
    }

    public function execute(array $thoughts, int $parentId): ?Collection
    {
        return collect($thoughts)
            ->map(
                function (string $thought) use ($parentId): Thought {
                    return $this
                        ->action
                        ->execute([
                            'mood_id' => $parentId,
                            'value' => $thought
                        ]);
                }
            );
    }
}
