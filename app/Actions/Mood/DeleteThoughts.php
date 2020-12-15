<?php

namespace App\Actions\Mood;

use App\Models\Thought;
use Carbon\Carbon;


/** @package App\Actions\Mood */
class DeleteThoughts
{
    /** 
     * Used to delete thoughts by an array of ids.
     * 
     * No safety checks are performed at this step.
     * ALL CHECKS SHOULD BE DONE PRIOR TO EXECUTING
     */
    public function execute(array $thoughts): int
    {
        return Thought::query()
            ->whereIn('id', $thoughts)
            ->update(['deleted_at' => Carbon::now()]);
    }
}
