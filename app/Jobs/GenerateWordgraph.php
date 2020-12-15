<?php

namespace App\Jobs;

use App\Models\Thought;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class GenerateWordgraph implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /** @var User */
    protected $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, Carbon $start, Carbon $end)
    {
        $this->user = $user;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // have a hashed settings
        // if a user doesn't feel comfortable having their data plainly stored use their password as a part of a hashing system to hash on ingest and decrypt with PW
        $rawThoughts = $this->user
            ->thoughts()
            ->getQuery()
            ->whereBetween('created_at', $this->start, $this->end)
            ->map(function (
                Thought $thought
            ): array {
                return explode(' ', $thought->value);
            });
    }
}
