<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mood extends Model
{
    use HasFactory;

    protected $fillable = [
        'value'
    ];

    public function thoughts(): HasMany
    {
        return $this->hasMany(Thought::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeRecent(Builder $query): Builder
    {
        return $query
            ->where(
                'created_at',
                '>',
                Carbon::now()->subHours(config('moood.recent', 3))
            );
    }
}
